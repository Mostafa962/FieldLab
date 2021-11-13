@extends('Admin::index')
@section('admins-menu-open', 'menu-open')
@section('admins-active', 'active')
@section('page-title', 'Admins | Edit')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Admin Edit</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Admin Edit</li>
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
          <h3 class="card-title">ADMINS</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form class="" method="post" action="{{route('admins.admin.update', $record->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="inputName">Name 
                <span style="color:red">*
                </span>
              </label>
              <input 
                    type="text" 
                    name="name" 
                    value="{{old('name')?old('name'):$record->name}}"
                    required
                    id="inputName" 
                    class="form-control"
                    placeholder="Name.."
                    >
              @error('name')
              <span id="inputName-error" class="error invalid-feedback" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputEmail">Email 
                <span style="color:red">*
                </span>
              </label>
              <input 
                    type="email" 
                    name="email" 
                    value="{{old('email')?old('email'):$record->email}}"
                    required
                    id="inputEmail" 
                    class="form-control"
                    placeholder="Email.."
                    >
              @error('email')
              <span id="inputName-error" class="error invalid-feedback" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputPhone">Phone 
                <span style="color:red">*
                </span>
              </label>
              <input 
                    type="number" 
                    name="phone" 
                    value="{{old('phone')?old('phone'):$record->phone}}"
                    required
                    id="inputPhone" 
                    class="form-control"
                    placeholder="Phone.."
                    >
              @error('phone')
              <span id="inputName-error" class="error invalid-feedback" style="display:block">{{ $message }}
              </span>
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
