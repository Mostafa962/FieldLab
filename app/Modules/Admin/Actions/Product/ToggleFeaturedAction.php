<?php
namespace Admin\Actions\Product;
use Admin\Models\Product;
use Illuminate\Http\Request;

class ToggleFeaturedAction
{
    public function execute(Request $request)
    {
        $record =  Product::find($request->input('product'));
        $record->featured ? $record->featured = 0 : $record->featured = 1;
        $record->save();
    }
}
