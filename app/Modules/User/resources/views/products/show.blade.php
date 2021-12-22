@extends('User::index')
@section('page-title', 'Products | Show')
@section('content')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="{{route('users.home')}}">Home</a> 
        <span class="mx-2 mb-0">/</span>
        <a href="{{route('users.products')}}">Products</a>
        <span class="mx-2 mb-0">/</span> 
        <a href="{{route('users.products').'?c='. $record->category_id}}"> {{ $record->category ? $record->category->name : "" }}</a>
        <span class="mx-2 mb-0">/</span> 
        <strong class="text-black">{{ $record->name }}</strong>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mr-auto" data-aos="fade-down" data-aos-delay="100">
        <div class="border text-center">
          <img src="{{asset('storage/'. $record->image)}}" alt="Image" class="img-fluid p-5">
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-black">{{ $record->name }}</h2>
        {!! $record->description !!}
      </div>
      @if($record->pdf)
        <div class="col-md-6"></div>
        <br><br>
        <div class="col-md-6" data-aos="fade-up">
          <a target="_blank" href="{{asset('storage/'. $record->pdf)}}" class="btn btn-primary" style="margin:20px 0;">
            <i class="fa fa-download">Brochure</i>
          </a>
        </div>
      @endif
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section text-center col-12">
        <h2 class="text-uppercase">Related Products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 block-3 products-wrap">
        <div class="nonloop-block-3 owl-carousel">
          @foreach($related_products as $related_product)
          <div class="text-center item mb-4">
            <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$related_product->name),'id'=>$related_product->id])}}"> 
              <img style="margin:20px 0;"
                   width="200" 
                   height="300" 
                   src="{{ asset('storage/'. $related_product->image) }}" 
                   alt="Image">
            </a>
            <h3 class="text-dark">
              <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$related_product->name),'id'=>$related_product->id])}}">{{ $related_product->name }}</a>
            </h3>
            <p class="price">
              {{ $related_product->quotation }}.....,
              <br>
              <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$related_product->name),'id'=>$related_product->id])}}">
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
