<footer class="site-footer bg-light">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

        <div class="block-7">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>FieldLab is subsidiary company for our mother company Zone Technologies located at Cairo-Egypt and
            our sister Prime Zone Systems located at Casablanca Morocco specialized in supplying Medical and Lab
            solutions to the Egyptian Market.</p>
        </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
        <h3 class="footer-heading mb-4">Quick Links</h3>
        <ul class="list-unstyled">
            <li><a href="{{ route('users.about') }}">About</a></li>
            <li><a href="{{ route('users.contact') }}">Contact</a></li>
            <li><a href="{{ route('users.products') }}">Products</a></li>
            <li><a href="{{ route('users.services') }}">Services</a></li>
        </ul>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5" style="margin-bottom:0px !important;">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                <li class="address" title="address">{!! $web_settings ? $web_settings->address : ""!!}</li>
                <li class="phone"><a title="Fax" href="tel://{!! $web_settings ? $web_settings->fax : ''!!}">{!! $web_settings ? $web_settings->fax : ""!!}</a></li>
                <li class="phone"><a title = "Phone Number" href="tel://{!! $web_settings ? $web_settings->phone : ''!!}">{!! $web_settings ? $web_settings->phone : ""!!}</a></li>
                <li class="email" title="email">{!! $web_settings ? $web_settings->email : ""!!}</li>
                </ul>
            </div>
            <div class="block-5 mb-5">
                @if($web_settings->linkedin)
                <a href="{{ $web_settings->linkedin }}" title="follow us on linkedin" target="_blank" style="margin: 0 10px;font-size: 20px;"><i class="fa fa-linkedin"></i></a>
                @endif
                @if($web_settings->facebook)
                <a href="{{ $web_settings->facebook }}" title="follow us on facebook" target="_blank" style="margin: 0 10px;font-size: 20px;"><i class="fa fa-facebook"></i></a>
                @endif
                @if($web_settings->twitter)
                <a href="{{ $web_settings->twitter }}" title="follow us on twitter" target="_blank" style="margin: 0 10px;font-size: 20px;"><i class="fa fa-twitter"></i></a>
                @endif
                @if($web_settings->youtube)
                <a href="{{ $web_settings->youtube }}" title="follow us on youtube" target="_blank" style="margin: 0 10px;font-size: 20px;"><i class="fa fa-youtube"></i></a>
                @endif
                @if($web_settings->instagram)
                <a href="{{ $web_settings->instagram }}" title="follow us on instagram" target="_blank" style="margin: 0 10px;font-size: 20px;"><i class="fa fa-instagram"></i></a>
                @endif
        </div>
    </div>
    </div>
</footer>