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
          <h3 class="card-title">LOGO</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="form-group">
              <input 
                    type="file" 
                    name="logo" 
                    id="inputLogo" 
                    class="form-control"
              >
              @if($record && $record->logo)
                <img src="{{asset('storage/'. $record->logo)}}" width="100" alt="image not found">
              @endif
              @error('inputLogo')
              <span id="inputLogo-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
        </div>
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
        <div class="card-body">
            <div class="form-group">
            <textarea 
                name="about_us_content"
                required
                id="inputAbout_us_content"
                class="form-control"
              >{{old('about_us_content')?old('about_us_content'):($record?$record->about_us_page_content:"")}}</textarea>
              @error('about_us_content')
                <span id="inputAbout_us_content-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>

        </div>
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
  $('#inputAbout_us_content').summernote();
</script>
@endpush
@endsection
