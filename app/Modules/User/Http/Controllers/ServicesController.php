<?php

namespace User\Http\Controllers;

class ServicesController extends JsonResponse
{
    public function index()
    {
        return view('User::services.index');
    }

}
