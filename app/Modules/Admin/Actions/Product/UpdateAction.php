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
        $pdf                = $record->pdf;
        if ($request->hasFile('image')) 
        {
            if ($record->image)
                Storage::disk('public')->delete($record->image);
            $path =  $request->file('image')->store('products', 'public');
        }
        if ($request->hasFile('pdf')) 
        {
            if ($record->pdf)
                Storage::disk('public')->delete($record->pdf);
            $pdf =  $request->file('pdf')->store('products', 'public');
        }
        $attributes = [];
        if($request->input('keys') && $request->input('values') ){
            foreach($request->input('keys') as $key=>$value)
            array_push($attributes,[$value=>$request->input('values')[$key]]);
        }

        $record->category_id  = $request->input('category');
        $record->name         = $request->input('name');
        $record->image        = $path;
        $record->pdf          = $pdf;
        $record->quotation    = $request->input('quotation');
        $record->description  = $request->input('description');
        // $product->attributes = json_encode($attributes);
        $record->save();
    }
}
