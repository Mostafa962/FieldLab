<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('Admin::home', [
            'MainTitle' => 'Dashboard',
            'SubTitle' => 'Analytics',
        ]);
    }
}
