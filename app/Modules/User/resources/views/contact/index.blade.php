@extends('User::index')
@section('page-title', 'Contact Us')
@section('content')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="{{ route('users.home')}}">Home</a> 
        <span class="mx-2 mb-0">/
        </span> 
        <strong class="text-black">Contact
        </strong>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-5 text-black">Get In Touch
        </h2>
      </div>
      <div class="col-md-12">
        <form action="{{route('users.contact.store')}}" method="post">
          @csrf
          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="name" class="text-black">Name 
                  <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="name" value="{{old('c_name')}}" required name="c_name">
              </div>
              @error('c_name')
              <span id="inputName-error" class="error text-danger" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_phone" class="text-black">Phone 
                  <span class="text-danger">*
                  </span>
                </label>
                <input type="number" class="form-control" value="{{old('c_phone')}}" id="c_phone" required name="c_phone" placeholder="">
              </div>
              @error('c_phone')
              <span id="c_phone-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_email" class="text-black">Email 
                  <span class="text-danger">*
                  </span>
                </label>
                <input type="email" class="form-control" value="{{old('c_email')}}" id="c_email" required name="c_email" placeholder="">
              </div>
              @error('c_email')
              <span id="c_email-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_subject" class="text-black">Subject 
                </label>
                <input type="text" class="form-control" value="{{old('c_subject')}}" required id="c_subject" name="c_subject">
              </div>
              @error('c_subject')
              <span id="c_email-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_message" class="text-black">Message 
                </label>
                <textarea name="c_message" id="c_message" required cols="30" rows="7" class="form-control">{{old('c_message')}}</textarea>
              </div>
              @error('c_message')
              <span id="c_email-error" class="error text-danger" style="display:block">{{ $message }}
              </span>
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
<div class="site-section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white mb-4">Offices
        </h2>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white mb-3 rounded">
          <span class="d-block text-black h6 text-uppercase">Cairo
          </span>
          <p class="mb-0">{!! $web_settings ? $web_settings->address : ""!!}</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white mb-3 rounded">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13824.798737214065!2d31.282077!3d29.9736908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7b4c8315a153eee!2sZone%20Technologies!5e0!3m2!1sar!2seg!4v1642029772823!5m2!1sar!2seg"
            width="500"
            height="250"
            style="border:0"
            allowfullscreen="" 
            loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
