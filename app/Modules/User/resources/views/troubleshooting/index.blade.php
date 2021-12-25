@extends('User::index')
@section('page-title', 'Troubleshooting')
@section('content')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="{{route('users.home')}}">Home</a> 
        <span class="mx-2 mb-0">/</span> 
        <strong class="text-black">Troubleshooting</strong>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-5 text-black">Drop your question</h2>
      </div>
      <div class="col-md-12">
        <form action="{{route('users.troubleshooting.store')}}" method="post">
          @csrf
          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="name" class="text-black">Name 
                  <span class="text-danger">*
                  </span>
                </label>
                <input type="text" class="form-control" value="{{old('c_name')}}" required id="name" name="c_name">
              </div>
              @error('c_name')
              <span id="inputName-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_phone" class="text-black">Phone 
                  <span class="text-danger">*
                  </span>
                </label>
                <input type="number" class="form-control" value="{{old('c_phone')}}" required id="c_phone" name="c_phone" placeholder="">
              </div>
              @error('c_number')
              <span id="c_number-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_instrument" class="text-black">Instrument 
                  <span class="text-danger">*
                  </span>
                </label>
                <input type="text" class="form-control" value="{{old('c_instrument')}}" required id="c_instrument" name="c_instrument" placeholder="">
              </div>
              @error('c_instrument')
              <span id="c_instrument-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_serial_number" class="text-black">Serial Number	 
                  <span class="text-danger">*</span>  
                </label>
                <input type="text" class="form-control" value="{{old('c_serial_number')}}" required id="c_serial_number" name="c_serial_number">
              </div>
              @error('c_serial_number')
              <span id="c_serial_number-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_message" class="text-black">Message 
                </label>
                <textarea name="c_message" id="c_message"  required cols="30" rows="7" class="form-control">{{old('c_message')}}</textarea>
              </div>
              @error('c_message')
              <span id="c_message-error" class="error text-danger" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
