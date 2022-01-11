@extends('User::index')
@section('page-title', 'About Us')
@section('content')
<div class="site-blocks-cover inner-page" style='background-image: url("{{ asset('storage/'. $web_settings->about_cover ) }}");'>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto align-self-center">
        <div class=" text-center">
          <h1>About Us</h1>
          <p>{{ $web_settings->about_header }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section custom-border-bottom" data-aos="fade-right">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="block-16">
          <figure>
            <img src="{{asset('storage/'. $web_settings->about_img1)}}" alt="Image placeholder" class="img-fluid rounded">
            <!-- <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo">
              <span class="icon-play"></span>
            </a> -->
          </figure>
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-5">
        {!! $web_settings ? $web_settings->about_p1 : ''!!}
      </div>
    </div>
  </div>
</div>    
<div class="site-section bg-light custom-border-bottom" data-aos="fade-left">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 order-md-2">
        <div class="block-16">
          <figure>
            <img src="{{asset('storage/'. $web_settings->about_img2)}}" alt="Image placeholder" class="img-fluid rounded">
            <!-- <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo">
              <span class="icon-play"></span>
            </a> -->
          </figure>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        {!! $web_settings ? $web_settings->about_p2 : ''!!}
      </div>
    </div>
  </div>
</div>
<div class="site-section custom-border-bottom" data-aos="fade-right">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="block-16">
          <figure>
            <img src="{{asset('storage/'. $web_settings->about_img3)}}" alt="Image placeholder" class="img-fluid rounded">
            <!-- <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo">
              <span class="icon-play"></span>
            </a> -->
          </figure>
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-5">
        {!! $web_settings ? $web_settings->about_p3 : ''!!}
      </div>
    </div>
  </div>
</div>
<div class="site-section bg-light custom-border-bottom" data-aos="fade-left">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 order-md-2">
        <div class="block-16">
          <figure>
            <img src="{{asset('storage/'. $web_settings->about_img4)}}" alt="Image placeholder" class="img-fluid rounded">
            <!-- <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo">
              <span class="icon-play"></span>
            </a> -->
          </figure>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        {!! $web_settings ? $web_settings->about_p4 : ''!!}
      </div>
    </div>
  </div>
</div>
@endsection
