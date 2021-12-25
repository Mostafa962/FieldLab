<?php

namespace User\Http\Controllers;
use Illuminate\Support\Facades\DB;

use User\Actions\Troubleshooting\{
    StoreAction,
};
use User\Http\Requests\Troubleshooting\{
    StoreRequest,
};

use User\Models\{
    TroubleshootingMessage,
};

class TroubleshootingController extends JsonResponse
{
    public function index()
    {
        return view('User::troubleshooting.index');
    }

    public function store(StoreRequest $request, StoreAction $storeAction)
    {
        DB::beginTransaction();
        try {
            $storeAction->execute($request);
            DB::commit();
            return redirect()->route('users.home')->with('success','Your request has been sent successfully. You will get a response as soon as possible. Thank You :) ');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

}
