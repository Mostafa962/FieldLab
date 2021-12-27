@extends('Admin::index')
@section('products-menu-open', 'menu-open')
@section('products-active', 'active')
@section('products-view-active', 'active')
@section('page-title', 'Products | View')
@section('content')
@include('Admin::_modals.confirm_password')
@push('style')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Product View</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Product View</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">PRODUCTS</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table id="product-records" class="table table-bordered table-hover table-responsive">
            <thead>
              <tr>
                <th>#</th>
                <th>Category</th>
                <th>Name</th>
                <th>Image</th>
                <th>Created By</th>
                <th>Created at</th>
                <th>Actions</th>
              </tr>
            </thead>
              <tbody>
              @foreach($records as $record)
                <tr id="tableRecord-{{$record->id}}">
                  <td>{{$loop->index+1}} 
                  </td>
                  <td>{{ $record->category?$record->category->name:"--"}}</td>
                  <td>{{ $record->name }}</td>
                  <td>
                    <img src="{{asset('storage/'. $record->image)}}" width="100" alt="image not found">
                  </td>
                  <td>{{ $record->createdBy?$record->createdBy->name:"--"}}</td>
                  <td>{{ date('M d, Y', strtotime($record->created_at)) .'-'.date('h:i a', strtotime($record->created_at)) }}</td>
                  <td>
                      <a 
                        href="{{route('admins.product.edit',$record->id)}}" 
                        title="Edit" 
                        class="btn btn-sm btn-primary">
                        <i class="fa fa-edit" style="color: #fff"></i>
                      </a>
                      <!-- <a 
                        href="{{route('admins.product.images',$record->id)}}" 
                        title="Gallery" 
                        class="btn btn-sm btn-dark">
                        <i class="far fa-image" style="color: #fff"></i>
                      </a>
                      <a 
                        href="{{route('admins.product.specifications',$record->id)}}" 
                        title="Specifications" 
                        class="btn btn-sm btn-info">
                        <i class="fas fa-ellipsis-h" style="color: #fff"></i>
                      </a> -->
                        <a 
                          class="btn btn-sm btn-danger" 
                          title="Remove" 
                          data-toggle="modal" 
                          data-target="#confirm-password-modal"
                          onclick="injectModalData('{{$record->id}}', '{{route('admins.product.trash')}}', 'confirm-password-form', 'POST')"
                        >
                          <i class="fa fa-trash" style="color: #fff"></i>
                        </a> 
                        <input type="checkbox" 
                          class="toggle-product-featured"
                          data-toggle="toggle"
                          data-on="Featured" 
                          data-off="Not" 
                          data-onstyle="success" 
                          data-offstyle="danger"
                          data-record="{{$record->id}}"
                          @if($record->featured) checked @endif
                        >
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Category</th>
                <th>Name</th>
                <th>Image</th>
                <th>Created By</th>
                <th>Created at</th>
                <th>Actions</th>
              </tr>
              </tfoot>
            </table>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@push('script')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  $(function () {

      $('.toggle-product-featured').change(function() {
        route   = "{{route('admins.product.toggle.featured')}}";
        product = $(this).attr('data-record');
        event.preventDefault()
        $.ajax({
            url: route,
            method: "POST",
            data: {product:product, _token: $('meta[name="csrf-token"]').attr('content')},
            success: function(data) {
                if (data['code']==200)
                    toastr.success(data['message']);
                if (data['code']==101)
                    toastr.error(data['message']);
                if (data['code']==500)
                    toastr.error(data['message']);
            },
            error: function(data) {
                toastr.error('error occurred, please try again later.');
            }
        });
      });
  });
</script>
@endpush
@endsection
