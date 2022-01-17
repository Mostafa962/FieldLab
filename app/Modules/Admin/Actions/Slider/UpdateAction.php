<?php
namespace Admin\Actions\Slider;
use Admin\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateAction
{
    public function execute(Request $request,$id): void
    {
        $record              = Slider::find($id);
        $record->title        = $request->input('title');
        $path                = $record->image;
        if ($request->hasFile('image')) 
        {
            if ($record->image)
                Storage::disk('public')->delete($record->image);
            $path =  $request->file('image')->store('sliders', 'public');
        }

        $record->image = $path;
        $record->save();
    }
}
