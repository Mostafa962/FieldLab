<div class="site-navbar py-2">
    <div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
        <div class="site-logo">
            <a href="{{ route('users.home') }}">
            <img width="110" src="{{ asset('storage/'. $web_settings->logo) }}">
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
                @foreach($web_categories as $web_category)
                    <li class="has-children">
                        <a href="{{ route('users.products').'?c='.$web_category->id }}">{{ $web_category->name }}</a>
                        <ul class="dropdown">
                        @foreach($web_category->products as $web_product)
                            <li><a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$web_product->name),'id'=>$web_product->id])}}">{{ $web_product->name }}</a></li>
                        @endforeach
                        </ul>
                    </li>
                @endforeach
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