<?php
namespace Admin\Actions\Slider;;

use Admin\Models\Slider;
use Illuminate\Http\Request;

class RestoreAction
{
    public function execute(Request $request)
    {
        $record = Slider::onlyTrashed()->find($request->resource_id);
        $record->restore();
        return $record->id;
    }
}
