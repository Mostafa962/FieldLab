@extends('User::index')
@section('page-title', 'Home')
@section('content')
<div class="site-blocks-cover" style="background-image: url('{{asset('user/images/hero_1.jpg') }}');">
    <div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
        <div class="site-block-cover-content text-center">
            <h1>Welcome To Field Lab</h1>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
    <div class="row align-items-stretch section-overlap">
        <div class="col-md-12 col-lg-12 mb-12 mb-lg-0">
        <div class="banner-wrap bg-primary h-100">
            <a class="h-100" style="text-align: left;padding: 30px;
            display: block;">
            <p>
                Since its beginnings in 2018, Fieldlab has been driven by the mission of putting relationships first from our team members to partners and clients. We value a family first workplace where collaboration, communication, and mentorship are at the heart. This culture reverberates through to each organization we work with, resulting in a reputation for project success and service excellence.
            </p>
            </a>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="title-section text-center col-12">
        <h2 class="text-uppercase">Trending Products</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 block-3 products-wrap">
        <div class="nonloop-block-3 owl-carousel">

            <div class="text-center item mb-4">
            <a href="single-product.html"> <img style="margin:20px 0;" width="200" height="300" src="{{ asset('user/images/1.jpeg') }}" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Analytical Balance</a></h3>
            <p class="price">
                A class of balance designed to measure
                small mass in the sub-milligram range..... <br>
                <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
                </a>
            </p>
            </div>

            <div class="text-center item mb-4">
            <a href="single-product.html"> <img  style="margin:20px 0;" width="200" height="300" src="{{ asset('user/images/2.jpeg') }}" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Autoclave</a></h3>
            <p class="price">
                A tabletop steam sterilizer with a range of
                pressure-temperature controlling,..... <br> 
                <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
                </a>  
            </p>
            </div>

            <div class="text-center item mb-4">
            <a href="single-product.html"> <img style="margin:20px 0;" width="200" height="300" src="{{ asset('user/images/4.jpeg') }}" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Binocular Microscopy</a></h3>
            <p class="price">
                An optical microscope with two eyepieces to
                significantly ease viewing and cut down on eye strain,....<br>
                <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
                </a>
            </p>
            </div>

            <div class="text-center item mb-4">
            <a href="single-product.html"> <img style="margin:20px 0;" width="200" height="300" src="{{ asset('user/images/6.jpeg') }}" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Electronic insulin pump with CGM</a></h3>
            <p class="price">
                A CGM requires a small sensor which is
                inserted under the skin into fatty tissue......<br>
                <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
                </a>
            </p>
            </div>

        </div>
        </div>
    </div>
    </div>
</div>
@endsection