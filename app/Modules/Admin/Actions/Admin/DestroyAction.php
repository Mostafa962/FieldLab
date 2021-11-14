<?php
namespace Admin\Actions\Admin;;

use Admin\Models\Admin;
use Illuminate\Http\Request;

class DestroyAction
{
    public function execute(Request $request, $id)
    {
        $record = Admin::withTrashed()->where('id', '!=', auth('admin')->user()->id)->find($id);
        if(!$record)
            return false;
        $record->forceDelete();
        return $request->resource_id;
    }
}
