<?php
namespace Admin\Actions\Admin;;

use Admin\Models\Admin;
use Illuminate\Http\Request;

class DestroyAction
{
    public function execute(Request $request)
    {
        $record = Admin::where('id', $request->resource_id)->where('id', '!=', auth('admin')->user()->id)->find();
        if(!$record)
            return false;
        $record->forceDelete();
        return $request->resource_id;
    }
}
