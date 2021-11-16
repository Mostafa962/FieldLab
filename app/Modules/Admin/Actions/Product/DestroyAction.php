<?php
namespace Admin\Actions\Product;;

use Admin\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyAction
{
    public function execute(Request $request, $id)
    {
        $record = Product::withTrashed()->find($id);
        if(!$record)
            return false;
        //remove the single image of the record
        if ($record->image)
            Storage::disk('public')->delete($record->image);
        //remove the multiple images of the record
        if($record->images->count())
        {
            foreach($record->images as $img)
                Storage::disk('public')->delete($record->path);
        }
        $record->forceDelete();
        return $request->resource_id;
    }
}
