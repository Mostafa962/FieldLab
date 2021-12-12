@extends('Admin::index')
@section('services-menu-open', 'menu-open')
@section('services-active', 'active')
@section('services-create-active', 'active')
@section('page-title', 'Cervices | Create')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Service Add</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Service Add</li>
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
          <h3 class="card-title">SERVICES</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form class="" method="post" action="{{route('admins.service.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="inputTitle">Title 
                <span style="color:red">*
                </span>
              </label>
              <input 
                    type="text" 
                    name="title" 
                    value="{{old('title')}}"
                    required
                    id="inputTitle" 
                    class="form-control"
                    placeholder="Title.."
                    >
              @error('title')
                <span id="inputTitle-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputImage">Icon 
                </span>
              </label>
              <input 
                    type="file" 
                    name="image" 
                    id="inputImage" 
                    class="form-control"
                    >
              @error('image')
              <span id="inputImage-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputDescription">Description 
              </label>
              <textarea name="description" id="inputDescription" class="form-control">{{old('description')}}</textarea>
              @error('description')
              <span id="inputDescription-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="row">
              <div class="col-12">
                <input type="submit" value="Save" class="btn btn-success float-right">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@endsection
