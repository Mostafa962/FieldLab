<?php
namespace Admin\Actions\Admin;
use Admin\Models\Admin;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        $record =  Admin::create([
            'name'       => $request->input('name'),
            'email'      => $request->input('email'),
            'phone'      => $request->input('phone'),
            'password'   => bcrypt($request->input('password')),
            'created_by' => auth('admin')->user()->id,
        ]);

    }
}
