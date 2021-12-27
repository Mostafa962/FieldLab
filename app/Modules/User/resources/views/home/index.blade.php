@extends('User::index')
@section('page-title', 'Home')
@section('content')
<div class="site-blocks-cover" style='background-image: url("{{ asset('storage/'. $web_settings->home_cover ) }}");'>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
        <div class="site-block-cover-content text-center">
          <h1>{!! $web_settings ? $web_settings->home_title : ""!!}
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row align-items-stretch section-overlap" data-aos="fade-right" >
      <div class="col-md-12 col-lg-12 mb-12 mb-lg-0">
        <div class="banner-wrap h-100">
          <div class="h-100" style="text-align: left !important;padding: 30px; display: block;">
            <p>{!! $web_settings ? $web_settings->home_description : "" !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section text-center col-12">
        <h2 class="text-uppercase">Trending Products
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 block-3 products-wrap">
        <div class="nonloop-block-3 owl-carousel">
          @foreach($featured_products as $featured_product)
            <div class="text-center item mb-4">
                <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$featured_product->name),'id'=>$featured_product->id])}}"> 
                    <img style="margin:20px 0;"
                    width="200" 
                    height="300" 
                    src="{{ asset('storage/'. $featured_product->image) }}" 
                    alt="Image">
                </a>
                <h3 class="text-dark">
                    <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$featured_product->name),'id'=>$featured_product->id])}}">{{ $featured_product->name }}</a>
                </h3>
                <p class="price">
                    {{ $featured_product->quotation }}.....,
                    <br>
                    <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$featured_product->name),'id'=>$featured_product->id])}}">
                        <span style="color:#3278cd; font-weight:bold;">Read More</span>
                    </a>
                </p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
