@extends('User::index')
@section('page-title', 'Products')
@section('content')
<style>
  .pagination{
    display:block;
  }
  .pagination .page-link{
    padding:0px;
  }
</style>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="{{route('users.home')}}">Home</a> 
        <span class="mx-2 mb-0">/</span> 
        <strong class="text-black">Products</strong>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <button style="margin:20px;" type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
                data-toggle="dropdown">Filter By Category
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
          @foreach($categories as $cat)
            <a class="dropdown-item" href="#">{{ $cat->name }}</a>
          @endforeach
        </div>
      </div>
    </div>
    <div id="list-products-content">
      @include('User::products.components.box')
    </div>
  </div>
</div>
@endsection
