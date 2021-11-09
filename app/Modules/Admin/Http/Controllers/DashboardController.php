<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use OfflinePortal\Models\HotlineUser;
use User\Models\Cart;
use User\Models\Order;
use User\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('Admin::home', [
            'MainTitle' => 'Dashboard',
            'SubTitle' => 'Analytics',
            'totalOrders' => number_format(Order::whereNull('cancelled_at')->whereNull('hotline_user_id')->count()),
            'averageProductsPerOrder' => Cache::get('averageProductsPerOrder'),
            'cartsCount' => number_format(Cart::whereHas('user', function ($query) {
                $query->whereNotNull('phone');
            })->has('items', '>', 0)->count()),
            'averageTotalOrders' => Cache::get('averageTotalOrders'),
            'revenue' => number_format(Order::whereNull('hotline_user_id')->whereNull('cancelled_at')->sum('total')),
            'totalDiscountsGiven' => Cache::get('totalDiscountsGiven'),
            'totalUsers' => number_format(User::whereNotNull('device_id')->count()),
            'totalUserLogins' => Cache::get('totalUserLogins'),
            'totalOfflineOrders' => number_format(Order::whereNull('cancelled_at')->whereNotNull('hotline_user_id')->count()),
            'averageOfflineProductsPerOrder' => Cache::get('averageOfflineProductsPerOrder'),
            'averageTotalOfflineOrder' => Cache::get('averageTotalOfflineOrder'),
            'hotlineUsersCount' => number_format(HotlineUser::count()),
            'totalOfflineRevenue' => number_format(Order::whereNotNull('hotline_user_id')->whereNull('cancelled_at')->sum('total'))
        ]);
    }
}
