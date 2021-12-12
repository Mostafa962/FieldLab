<?php

namespace Admin\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Admin\Actions\Setting\{
    SaveAction,
};

use Admin\Http\Requests\Setting\{
    SaveRequest,
};

use Admin\Models\{
    Setting
};
class SettingController extends JsonResponse
{
    public function index()
    {
        $record = Setting::first();
        return view('Admin::settings.index', compact('record'));
    }

    public function save(SaveRequest $request, SaveAction $saveAction)
    {
        DB::beginTransaction();
        try {
            $saveAction->execute($request);
            DB::commit();
            return redirect()->route('admins.settings.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }
}
