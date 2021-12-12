<?php
namespace Admin\Actions\Product;;

use Admin\Models\Product;
use Illuminate\Http\Request;

class RestoreAction
{
    public function execute(Request $request)
    {
        $record = Product::onlyTrashed()->find($request->resource_id);
        $record->restore();
        return $record->id;
    }
}
