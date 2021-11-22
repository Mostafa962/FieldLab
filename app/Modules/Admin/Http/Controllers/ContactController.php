<?php

namespace Admin\Http\Controllers;
use User\Models\{
    ContactRequest
};

class ContactController extends JsonResponse
{
    public function __invoke()
    {
        $records = ContactRequest::select(['id','name','phone','email','subject','created_at','description'])->get();
        return view('Admin::contact.index', compact('records'));
    }
}
