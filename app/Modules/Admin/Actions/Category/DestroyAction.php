<?php
namespace Admin\Actions\Category;;

use Admin\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyAction
{
    public function execute(Request $request, $id)
    {
        $record = Category::withTrashed()->find($id);
        if(!$record)
            return false;
        if ($record->image)
            Storage::disk('public')->delete($record->image);
        $record->forceDelete();
        return $request->resource_id;
    }
}
