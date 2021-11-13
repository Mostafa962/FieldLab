<?php
namespace Admin\Actions\Admin;
use Admin\Models\Admin;
use Illuminate\Http\Request;

class UpdateAction
{
    public function execute(Request $request,$id): void
    {
        $record        = Admin::find($id);
        $record->name  = $request->input('name');
        $record->email = $request->input('email');
        $record->phone = $request->input('phone');
        $record->save();
    }
}
