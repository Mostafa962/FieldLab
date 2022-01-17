<?php
namespace Admin\Actions\Slider;
use Admin\Models\Slider;
use Illuminate\Http\Request;

class TrashAction
{
    public function execute(Request $request)
    {
        $record = Slider::find($request->resource_id);
        if(!$record)
            return false;
        $record->deleted_by = auth('admin')->user()->id;
        $record->save();
        $record->delete();
        return $record->id;
    }
}
