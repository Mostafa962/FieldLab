<?php
namespace Admin\Actions\Category;
use Admin\Models\Category;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        $request->file('image')? $path =$request->file('image')->store('categories', 'public'):$path=null;
        $record =  Category::create([
            'name'       => $request->input('name'),
            'image'      => $path,
            'created_by' => auth('admin')->user()->id,
        ]);

    }
}
