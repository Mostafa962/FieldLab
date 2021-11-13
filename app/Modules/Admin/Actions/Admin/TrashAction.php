<?php
namespace Admin\Actions\Admin;
use Admin\Models\Admin;
use Illuminate\Http\Request;

class TrashAction
{
    public function execute(Request $request)
    {
        $record = Admin::where('id', '!=', 1)->where('id', '!=', auth('admin')->user()->id)->find($request->resource_id);
        $record->deleted_by = auth('admin')->user()->id;
        $record->save();
        $record->delete();
        return $record->id;
    }
}
