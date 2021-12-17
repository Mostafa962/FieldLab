<div class="site-navbar py-2">
    <div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
        <div class="site-logo">
            <a href="{{ route('users.home') }}">
            <img src="{{ asset('user/images/logo.png') }}">
            </a>
        </div>
        </div>
        <div class="main-nav d-none d-lg-block"  style="padding-left: 130px;">
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li><a href="{{ route('users.home') }}" class="active">Home</a></li>
            <li class="has-children">
                <a href="#">Categories</a>
                <ul class="dropdown">
                <li class="has-children">
                    <a href="{{ route('users.products') }}">Laboratory Instruments</a>
                    <ul class="dropdown">
                    <li><a href="single-product.html">Analytical Balance</a></li>
                    <li><a href="single-product.html">Binocular Microscopy</a></li>
                    <li><a href="single-product.html">Incubator</a></li>
                    <li><a href="single-product.html">Vein Finder</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="{{ route('users.products') }}">Health care</a>
                    <ul class="dropdown">
                    <li><a href="single-product.html">Electronic Insulin Pump</a></li>
                    <li><a href="single-product.html">CGM</a></li>
                    </ul>
                </li>
                </ul>
            </li>
            <li><a href="{{ route('users.products') }}">Products</a></li>
            <li><a href="{{ route('users.services') }}">Services</a></li>
            <li><a href="{{ route('users.about') }}">About</a></li>
            <li><a href="{{ route('users.contact') }}">Contact</a></li>
            <li><a href="{{ route('users.troubleshooting') }}">Troubleshooting</a></li>
            </ul>
        </nav>
        </div>
        <div class="icons">
        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
            class="icon-menu"></span></a>
        </div>
    </div>
    </div>
</div>