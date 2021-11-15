<?php
namespace Admin\Actions\Category;
use Admin\Models\Category;
use Illuminate\Http\Request;

class TrashAction
{
    public function execute(Request $request)
    {
        $record = Category::find($request->resource_id);
        if(!$record)
            return false;
        $record->deleted_by = auth('admin')->user()->id;
        $record->save();
        $record->delete();
        return $record->id;
    }
}
