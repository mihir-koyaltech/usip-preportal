<div class="mb-4 mt-5">
    <div id="reviews-helper" class="carousel slide carousel-dark">
        <div class="carousel-inner relative w-full">
            <!-- @for($i=0; $i<2; $i++)  -->
            <div class="carousel-item @if($i==0) active @endif w-full">
                <div class="container-fluid my-auto ">
                    <div class="my-auto text-sky-800 row">
                        <div class="container my-auto col-md-3 offset-md-1 col-12 d-flex justify-content-center align-items-center">
                            <img class="w-50 border" src="{{ url('assets/images/usericon.png') }}" alt="">
                        </div>
                        <div class="mx-auto mt-4 col-12 col-md-7">
                            <p class="pe-md-5 text-blue-800 text-md-lg">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio magni pariatur dignissimos
                                modi architecto fuga explicabo odit molestiae,
                                corrupti aliquid sunt, culpa necessitatibus ea nihil aut dolor voluptas, tempore quas?
                            </p>
                            <div class="text-slate-800 py-3">
                                <p class="mt-3 text-sm text-md-base">
                                    Emily Jorgenson
                                </p>
                                <p class="text-xs text-md-sm">
                                    Author at Panoply store
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- @endfor -->
        </div>
        <div class="hover:text-white flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline mt-4">
            <button class="carousel-control-prev left-4 " type="button" data-bs-target="#reviews-helper" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next right-0" type="button" data-bs-target="#reviews-helper" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>