<?php
namespace User\Actions\Troubleshooting;

use User\Models\TroubleshootingMessage;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        TroubleshootingMessage::create([
            'name'          => $request->input('c_name'),
            'phone'         => $request->input('c_phone'),
            'instrument'    => $request->input('c_instrument'),
            'serial_number' => $request->input('c_serial_number'),
            'description'   => $request->input('c_message'),
        ]);
    }
}
