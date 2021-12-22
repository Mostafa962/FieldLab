<?php

namespace User\Http\Controllers;
use Admin\Models\{
    Service,
};
class ServicesController extends JsonResponse
{
    public function index()
    {
        $records = Service::select(['title', 'image', 'description'])->get();
        return view('User::services.index', compact('records'));
    }

}
