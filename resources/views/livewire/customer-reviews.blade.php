<div class="conatiner-fluid" id="customer-reviews">
  <div class="container-fluid" id="customer-review-bg">
  </div>
  <div class="container-fluid row text-center" id="customer-review-content">
    <div class="mt-4 col-2 ms-3">
      <div class="">
        <!-- @for($i=0;$i<3;$i++)  -->
        <div class="m-auto">
          <button class="btn btn-link text-xs text-md-base" type="button" data-bs-target="#customer-feedback" data-bs-slide-to="{{$i}}" aria-current="{{$i==0?'true':''}}" aria-label="Slide {{$i}}">
            Customer #{{$i+1}}
          </button>
        </div>
        <!-- @endfor -->
      </div>
    </div>
    <div class="col-5 mt-4 mx-4 carousel pe-2" id="customer-feedback">
      <div class="carousel-inner container-fluid">
        <!-- @for($i=0;$i<3;$i++)  -->
        <div class="carousel-item {{$i==0? 'active' : ''}} ">
          <p class="text-blue-800 text-md-2xl">
            Customer #{{$i+1}}
          </p>
          <p class="text-blue-800 text-sm text-md-xl">
            Review and feedback
          </p>
          <p class="text-xs text-md-base mt-3">
            It's a dangerous business, Frodo, going out your door. You step onto the road Where the Shadows lie.
            One Ring to rule them all, One Ring to find them, One Ring to bring them all.
          </p>
        </div>
        <!-- @endfor -->
      </div>
    </div>
    <div class="col-3" id="customer-reviews-image-wrapper">
      <img class="border mx-auto" src="{{ url('assets/images/usericon.png') }}" alt="Customer Image">
      <div class="row">
        <div class="col-md-5 col-12 mt-3">
          <button class="btn dark-color text-white text-md-base text-xs">
            Button Text
          </button>
        </div>
        <div class="col-md-5 col-12 mt-3">
          <button class="btn btn-link text-md-base text-xs">Visit Website</button>
        </div>
      </div>
    </div>
  </div>
</div>