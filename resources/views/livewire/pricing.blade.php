<div class="conatiner-fluid row d-flex justify-content-center my-4" id="pricing">
    <div class="my-auto col-lg-6 col-12">
        <div class="mx-auto px-4 px-md-5">
            <p class="mx-auto mt-4 text-sky-600" id="pricing-header">
                Product Pricing
            </p>
            <p class="mx-auto mt-4" id="pricing-description">
                Home is behind, the world ahead and there are many paths to tread through
                shadows to the edge.
                <br>
                <button class="btn bg-sky-600 text-white mt-4">
                    Start free trail
                </button>
            </p>
        </div>
    </div>
    <div class="col-lg-6 col-12 row d-flex justify-content-center" id="pricing-products">
        <!-- @for ($j=0; $j<2; $j++) -->
        <div class="col-md-6 col-12 mt-3">
            <div class="card text-center mx-auto py-4">
                <div class="card-body">
                    <p class="">PLAN TYPE</p>
                    <p class="card-title text-sky-600 mb-3"> $ Rate/mo</p>
                    <hr class="my-2 mx-auto">
                    <!-- @for ($i=0; $i<4; $i++) -->
                    <p class="my-2">
                        Feature {{$i+1}}
                    </p>
                    <!-- @endfor -->
                </div>
            </div>
        </div>
        <!-- @endfor -->
    </div>
</div>