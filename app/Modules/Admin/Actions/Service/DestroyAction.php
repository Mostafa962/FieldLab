<?php
namespace Admin\Actions\Service;;

use Admin\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyAction
{
    public function execute(Request $request, $id)
    {
        $record = Service::withTrashed()->find($id);
        if(!$record)
            return false;
        if ($record->image)
            Storage::disk('public')->delete($record->image);
        $record->forceDelete();
        return $request->resource_id;
    }
}
