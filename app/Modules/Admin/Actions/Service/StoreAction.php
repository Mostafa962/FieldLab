<?php
namespace Admin\Actions\Service;
use Admin\Models\Service;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        $request->file('image')? $path =$request->file('image')->store('services', 'public'):$path=null;
        $record =  Service::create([
            'title'       => $request->input('title'),
            'description'       => $request->input('description'),
            'image'      => $path,
            'created_by' => auth('admin')->user()->id,
        ]);

    }
}
