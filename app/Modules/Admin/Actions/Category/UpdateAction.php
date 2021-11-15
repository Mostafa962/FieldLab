<?php
namespace Admin\Actions\Category;
use Admin\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateAction
{
    public function execute(Request $request,$id): void
    {
        $record              = Category::find($id);
        $record->name        = $request->input('name');
        $path                = $record->image;
        if ($request->hasFile('image')) 
        {
            if ($record->image)
                Storage::disk('public')->delete($record->image);
            $path =  $request->file('image')->store('categories', 'public');
        }

        $record->image = $path;
        $record->save();
    }
}
