<?php
namespace Admin\Actions\Product;
use Admin\Models\Product;
use Illuminate\Http\Request;

class TrashAction
{
    public function execute(Request $request)
    {
        $record = Product::find($request->resource_id);
        if(!$record)
            return false;
        $record->deleted_by = auth('admin')->user()->id;
        $record->save();
        $record->delete();
        return $record->id;
    }
}
