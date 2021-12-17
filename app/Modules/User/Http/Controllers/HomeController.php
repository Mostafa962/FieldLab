<?php

namespace User\Http\Controllers;

class HomeController extends JsonResponse
{
    public function index()
    {
        return view('User::home.index');
    }

}
