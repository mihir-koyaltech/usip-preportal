<div class="grid md:grid-cols-2 grid-cols-1 place-content-center my-4 w-100" id="pricing">
    <div class="my-auto">
        <div class="mx-auto w-75 text-center">
            <p class="text-lg md:text-3xl lg:text-5xl text-left px-lg-4 mt-4 text-sky-600">
                Product Pricing
            </p>
            <p class="text-sm md:text-lg text-left px-lg-4 mt-4">
                Home is behind, the world ahead and there are many paths to tread through
                shadows to the edge.
                <br>
                <button class="btn bg-sky-600 text-white mt-4">
                    Start free trail
                </button>
            </p>
        </div>
    </div>
    <div class="grid lg:grid-cols-2 grid-cols-1 place-content-center">
        <!-- @for ($j=0; $j<2; $j++) -->
        <div class="mt-3 mx-auto w-full">
            <div class="card text-center mx-auto py-4 w-3/4">
                <div class="card-body">
                    <p class="text-sm md:text-base">PLAN TYPE</p>
                    <p class="card-title text-sky-600 mb-3 md:text-2xl"> $ Rate/mo</p>
                    <hr class="h-1 bg-zinc-700 w-25 my-2 mx-auto" style="border-width:0;">
                    <!-- @for ($i=0; $i<4; $i++) -->
                    <p class="text-sm md:text-base my-2">
                        Feature {{$i+1}}
                    </p>
                    <!-- @endfor -->
                </div>
            </div>
        </div>
        <!-- @endfor -->
    </div>
</div>