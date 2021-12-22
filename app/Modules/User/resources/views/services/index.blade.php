@extends('User::index')
@section('page-title', 'Services')
@section('content')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="{{route('users.home')}}">Home</a> 
        <span class="mx-2 mb-0">/</span> 
        <strong class="text-black">Services</strong>
      </div>
    </div>
  </div>
</div>
<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
  <div class="container">
    <div class="row">
      @foreach($records as $record)
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
          <span class="icon-refresh2 text-primary"></span>
        </div>
        <div class="text">
          <h2>{{ $record->title }}</h2>
          <p>{{ $record->description }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
