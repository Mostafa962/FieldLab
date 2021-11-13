<?php
namespace Admin\Actions\Admin;;

use Admin\Models\Admin;
use Illuminate\Http\Request;

class RestoreAction
{
    public function execute(Request $request)
    {
        $record = Admin::onlyTrashed()->find($request->resource_id);
        $record->restore();
        return $record->id;
    }
}
