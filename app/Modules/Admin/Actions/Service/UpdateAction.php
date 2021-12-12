<?php
namespace Admin\Actions\Service;
use Admin\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateAction
{
    public function execute(Request $request,$id): void
    {
        $record              = Service::find($id);
        $record->title       = $request->input('title');
        $record->description = $request->input('description');
        $path                = $record->image;
        if ($request->hasFile('image')) 
        {
            if ($record->image)
                Storage::disk('public')->delete($record->image);
            $path =  $request->file('image')->store('services', 'public');
        }

        $record->image = $path;
        $record->save();
    }
}
