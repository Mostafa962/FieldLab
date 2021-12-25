<!DOCTYPE html>
<html lang="en">
<head>
  <title>FieldLab | @yield('page-title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="icon" href="{{ asset('user/images/favicon.ico') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('user/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
  <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

  <style>
    .btn-primary{
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="site-wrap">
    @include('User::_partials.header')
        @yield('content')
    @include('User::_partials.footer')
  </div>
  <script src="{{ asset('user/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('user/js/popper.min.js') }}"></script>
  <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('user/js/aos.js') }}"></script>
  <script src="{{ asset('user/js/main.js') }}"></script>
  <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
  @if(session()->has('success'))
      <script type="text/javascript">
          toastr.success("{{session('success')}}");
      </script>
  @endif
  @if(session()->has('error'))
      <script type="text/javascript">
          toastr.error("{{session('error')}}");
      </script>
  @endif
@stack('script')
</body>
</html>