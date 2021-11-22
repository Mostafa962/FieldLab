<?php

namespace Admin\Http\Controllers;
use User\Models\{
    TroubleshootingMessage
};

class TroubleshootingController extends JsonResponse
{
    public function __invoke()
    {
        $records = TroubleshootingMessage::select(['id','name','phone','instrument','serial_number','created_at','description'])->get();
        return view('Admin::troubleshooting.index', compact('records'));
    }
}
