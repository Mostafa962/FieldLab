@extends('Admin::index')
@section('settings-active', 'active')
@section('page-title', 'Cervices | Create')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Settings</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Settings</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<section class="content">
<form class="" method="post" action="{{route('admins.settings.save')}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">HOME PAGE</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
          @include('Admin::settings.components.home')
      </div>
    </div>
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">CONTACT INFO</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        @include('Admin::settings.components.contact')
      </div>
    </div>
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">ABOUT US</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        @include('Admin::settings.components.about')
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <input type="submit" value="Save" class="btn btn-success float-right">
    </div>
  </div>
</section>
<br>
@push('script')
<script>
  $('#home_description').summernote();
  $('#Inputabout_p1').summernote();
  $('#Inputabout_p2').summernote();
  $('#Inputabout_p3').summernote();
  $('#Inputabout_p4').summernote();
  // CKEDITOR.replace( 'Inputabout_p1');
  // CKEDITOR.replace( 'Inputabout_p2'); 
  // CKEDITOR.replace( 'Inputabout_p3'); 
  // CKEDITOR.replace( 'Inputabout_p4'); 
</script>
@endpush
@endsection
