<?php
namespace Admin\Actions\Product;
use Admin\Models\Product;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        $attributes = [];
        if($request->input('keys') && $request->input('values')) {
            foreach($request->input('keys') as $key=>$value)
                array_push($attributes,[$value=>$request->input('values')[$key]]);
        }

        $request->file('image')? $path =$request->file('image')->store('categories', 'public'):$path=null;
        $record =  Product::create([
            'category_id'   => $request->input('category'),
            'name'          => $request->input('name'),
            'image'         => $path,
            'description'   => $request->input('description'),
            'attributes'    => json_encode($attributes),
            'created_by'    => auth('admin')->user()->id,
        ]);

    }
}
