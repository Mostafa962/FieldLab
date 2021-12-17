<?php

namespace User\Http\Controllers;

use User\Models\{
    ContactRequest,
};

class ContactUsController extends JsonResponse
{
    public function index()
    {
        return view('User::contact.index');
    }

    public function store(Request $request)
    {
        dd($request);
    }

}
