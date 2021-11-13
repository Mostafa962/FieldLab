<?php
namespace Admin\Actions\Admin;;
use Admin\Models\Admin;
use Illuminate\Http\Request;

class RestPasswordAction
{
    public function execute(Request $request): void
    {
        $record = Admin::findOrFail($request->resource_id);
        $record->password            = bcrypt($request->password);
        $record->password_changed_by = auth('admin')->user()->id;
        $record->save();
    }
}
