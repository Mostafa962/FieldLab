<?php
namespace User\Actions\Contact;
use User\Models\ContactRequest;
use Illuminate\Http\Request;

class StoreAction
{
    public function execute(Request $request): void
    {
        ContactRequest::create([
            'name'        => $request->input('c_name'),
            'email'       => $request->input('c_email'),
            'phone'       => $request->input('c_phone'),
            'subject'     => $request->input('c_subject'),
            'description' => $request->input('c_message'),
        ]);
    }
}
