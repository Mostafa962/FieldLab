@extends('User::index')
@section('page-title', 'Products')
@section('content')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Products</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <button style="margin:20px;" type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Filter By Category</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="#">Laboratory Instruments</a>
              <a class="dropdown-item" href="#">Health Care</a>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single-product.html"> <img src="images/1.jpeg" width="300" height="400" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Analytical Balance</a></h3>
            <p class="price">
              A class of balance designed to measure
              small mass in the sub-milligram range..... <br>
              <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
              </a>
            </p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single-product.html"> <img src="images/2.jpeg" width="300" height="400" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Autoclave</a></h3>
            <p class="price">
              A tabletop steam sterilizer with a range of
              pressure-temperature controlling,..... <br> 
              <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
              </a>  
            </p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single-product.html"> <img src="images/3.jpeg" width="300" height="400" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Binocular Microscopy</a></h3>
            <p class="price">
              An optical microscope with two eyepieces to
                  significantly ease viewing and cut down on eye strain,....<br>
                  <a href="single-product.html">
                    <span style="color:#3278cd; font-weight:bold;">Read More</span>
                  </a>
            </p>
          </div>
    
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
    
            <a href="single-product.html"> <img src="images/4.jpeg" width="300" height="400" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Autoclave</a></h3>
            <p class="price">
              A tabletop steam sterilizer with a range of
              pressure-temperature controlling,..... <br> 
              <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
              </a>  
            </p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="single-product.html"> <img src="images/5.jpeg" width="300" height="400" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Electronic insulin pump with CGM</a></h3>
            <p class="price">
              A CGM requires a small sensor which is
              inserted under the skin into fatty tissue......<br>
              <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
              </a>
            </p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            
            <a href="single-product.html"> <img src="images/6.jpeg" width="300" height="400" alt="Image"></a>
            <h3 class="text-dark"><a href="single-product.html">Analytical Balance</a></h3>
            <p class="price">
              A class of balance designed to measure
              small mass in the sub-milligram range..... <br>
              <a href="single-product.html">
                <span style="color:#3278cd; font-weight:bold;">Read More</span>
              </a>
            </p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection