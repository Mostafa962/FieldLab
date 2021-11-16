<?php
namespace Admin\Actions\Product;
use Admin\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateAction
{
    public function execute(Request $request,$id): void
    {
        $record              = Product::find($id);

        $path                = $record->image;
        if ($request->hasFile('image')) 
        {
            if ($record->image)
                Storage::disk('public')->delete($record->image);
            $path =  $request->file('image')->store('products', 'public');
        }
        
        $attributes = [];
        if($request->input('keys') && $request->input('values') ){
            foreach($request->input('keys') as $key=>$value)
            array_push($attributes,[$value=>$request->input('values')[$key]]);
        }

        $record->category    = $request->input('category_id');
        $record->name        = $request->input('name');
        $record->image       = $path;
        $record->description = $request->input('description');
        $product->attributes = json_encode($attributes);
        $record->save();
    }
}
