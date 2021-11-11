@extends('Admin::_auth.index')
@section('page-title', 'Login')
@section('content')
<p class="login-box-msg">Sign in to Admin Portal</p>
<form action="{{route('admins.login')}}" method="post">
  @csrf
  <div class="input-group mb-3">
    <input type="email" name="email" class="form-control" placeholder="Email">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="password" name="password" class="form-control" placeholder="Password">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8">
      <div class="icheck-primary">
        <input type="checkbox" id="remember" name="rememberme">
        <label for="remember">
          Remember Me
        </label>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-4">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    <!-- /.col -->
  </div>
</form>
@endsection