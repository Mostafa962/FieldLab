<?php

namespace Admin\Http\Controllers;
use App\Http\Controllers\Controller;

use User\Models\{
    ContactRequest,
    TroubleshootingMessage,
};

use Admin\Models\{
    Product,
};
class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('Admin::home', [
            'MainTitle' => 'Dashboard',
            'SubTitle' => 'Analytics',
            'troubleshootingMessagesCount'=>TroubleshootingMessage::count(),
            'contactMessagesCount'=>ContactRequest::count(),
            'productsCount'=>Product::count(),
        ]);
    }
}
