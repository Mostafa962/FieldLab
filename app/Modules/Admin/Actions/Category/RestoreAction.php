<?php
namespace Admin\Actions\Category;;

use Admin\Models\Category;
use Illuminate\Http\Request;

class RestoreAction
{
    public function execute(Request $request)
    {
        $record = Category::onlyTrashed()->find($request->resource_id);
        $record->restore();
        return $record->id;
    }
}
