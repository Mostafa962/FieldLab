<?php

namespace User\Http\Controllers;

class AboutUsController extends JsonResponse
{
    public function index()
    {
        return view('User::about.index');
    }

}
