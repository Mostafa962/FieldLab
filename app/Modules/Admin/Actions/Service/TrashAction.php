<?php
namespace Admin\Actions\Service;
use Admin\Models\Service;
use Illuminate\Http\Request;

class TrashAction
{
    public function execute(Request $request)
    {
        $record = Service::find($request->resource_id);
        if(!$record)
            return false;
        $record->deleted_by = auth('admin')->user()->id;
        $record->save();
        $record->delete();
        return $record->id;
    }
}
