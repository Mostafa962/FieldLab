@extends('User::index')
@section('page-title', 'Products | Show')
@section('content')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> 
            <span class="mx-2 mb-0">/</span>
             <a href="products.html">Products</a>
            <span class="mx-2 mb-0">/</span> 
            <a href="products.html">Health Care</a>
            <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Autoclave</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="images/1.jpeg" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">Autoclave</h2>
            <p>
              A tabletop steam sterilizer with a range of
              pressure-temperature controlling, These front-loading
              autoclaves combine of high temperature and pressure to
              bring about decontamination and sterilization of biological
              waste, culture media, instruments and lab ware.
            </p>
            <p>
              The inner chamber is a highly durable anti rust steel with an
              installed electric heater for more efficient steam production
              in range of temperature 120°C up to 134°C, and advanced
              vacuum for enhanced drying of discarded material. It is
              user-friendly and play important role in sterilization
              procedures across various Hospitals, Pharmaceutical
              companies, Biopharma and Microbiology laboratories etc.
            </p>
            </div>
          </div>
        </div>
      </div>

    <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Related Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="single-product.html"> <img style="margin:20px 0;" width="200" height="300" src="images/1.jpeg" alt="Image"></a>
                <h3 class="text-dark"><a href="single-product.html">Analytical Balance</a></h3>
                <p class="price">
                  A class of balance designed to measure
                  small mass in the sub-milligram range..... <br>
                  <a href="single-product.html">
                    <span style="color:#3278cd; font-weight:bold;">Read More</span>
                  </a>
                </p>
              </div>

              <div class="text-center item mb-4">
                <a href="single-product.html"> <img  style="margin:20px 0;" width="200" height="300" src="images/2.jpeg" alt="Image"></a>
                <h3 class="text-dark"><a href="single-product.html">Autoclave</a></h3>
                <p class="price">
                  A tabletop steam sterilizer with a range of
                  pressure-temperature controlling,..... <br> 
                  <a href="single-product.html">
                    <span style="color:#3278cd; font-weight:bold;">Read More</span>
                  </a>  
                </p>
              </div>

              <div class="text-center item mb-4">
                <a href="single-product.html"> <img style="margin:20px 0;" width="200" height="300" src="images/4.jpeg" alt="Image"></a>
                <h3 class="text-dark"><a href="single-product.html">Binocular Microscopy</a></h3>
                <p class="price">
                  An optical microscope with two eyepieces to
                  significantly ease viewing and cut down on eye strain,....<br>
                  <a href="single-product.html">
                    <span style="color:#3278cd; font-weight:bold;">Read More</span>
                  </a>
                </p>
              </div>

              <div class="text-center item mb-4">
                <a href="single-product.html"> <img style="margin:20px 0;" width="200" height="300" src="images/6.jpeg" alt="Image"></a>
                <h3 class="text-dark"><a href="single-product.html">Electronic insulin pump with CGM</a></h3>
                <p class="price">
                  A CGM requires a small sensor which is
                  inserted under the skin into fatty tissue......<br>
                  <a href="single-product.html">
                    <span style="color:#3278cd; font-weight:bold;">Read More</span>
                  </a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection