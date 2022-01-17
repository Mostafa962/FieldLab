<?php
namespace Admin\Actions\Slider;
use Admin\Models\Slider;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        $request->file('image')? $path =$request->file('image')->store('sliders', 'public'):$path=null;
        $record =  Slider::create([
            'title'      => $request->input('title'),
            'image'      => $path,
            'created_by' => auth('admin')->user()->id,
        ]);

    }
}
