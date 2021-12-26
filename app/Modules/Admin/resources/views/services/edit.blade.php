@extends('Admin::index')
@section('services-menu-open', 'menu-open')
@section('services-active', 'active')
@section('page-title', 'Services | Edit')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Service Edit</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Service Edit</li>
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
          <form class="" method="post" action="{{route('admins.service.update', $record->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="inputTitle">Title 
                <span style="color:red">*
                </span>
              </label>
              <input 
                    type="text" 
                    name="title" 
                    value="{{old('title')?old('title'):$record->title}}"
                    required
                    id="inputTitle" 
                    class="form-control"
                    placeholder="Title.."
                    >
              @error('title')
              <span id="inputTitle-error" class="error invalid-feedback" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputImage">Icon 
              </label>
              <input 
                    type="file" 
                    name="image" 
                    id="inputImage" 
                    class="form-control"
                    >
              @if($record->image)
                <img src="{{asset('storage/'. $record->image)}}" width="100" alt="image not found">
              @endif
              @error('image')
                <span id="inputName-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputDescription">Description 
              </label>
              <textarea name="description" id="inputDescription" class="form-control">{{old('description')?old('description'):$record->description}}</textarea>
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
