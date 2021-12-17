<?php

namespace User\Http\Controllers;

use User\Models\{
    TroubleshootingMessage,
};

class TroubleshootingController extends JsonResponse
{
    public function index()
    {
        return view('User::troubleshooting.index');
    }

    public function store(Request $request)
    {
        $record = new TroubleshootingMessage();
        dd($request);
    }

}
