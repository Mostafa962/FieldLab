<?php
namespace Admin\Actions\Service;;

use Admin\Models\Service;
use Illuminate\Http\Request;

class RestoreAction
{
    public function execute(Request $request)
    {
        $record = Service::onlyTrashed()->find($request->resource_id);
        $record->restore();
        return $record->id;
    }
}
