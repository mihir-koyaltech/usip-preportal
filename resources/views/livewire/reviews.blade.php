<div class="my-4">
    <div id="reviews-helper" class="carousel slide carousel-dark">
        <div class="carousel-inner relative w-full">
            @for($i=0; $i<2; $i++) <div class="carousel-item @if($i==0) active @endif w-full">
                <div class="container-fluid my-auto max-w-4xl py-7 ">
                    <div class="my-auto text-sky-600 grid grid-cols-1 md:grid-cols-3">
                        <div class="container my-auto">
                            <img class="w-1/4 mx-auto my-auto border-2" src="{{ url('assets/images/usericon.png') }}" alt="">
                        </div>
                        <div class="ml-4 md:col-span-2">
                            <p class="pe-md-5 text-blue-800 text-base md:text-lg">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio magni pariatur dignissimos
                                modi architecto fuga explicabo odit molestiae,
                                corrupti aliquid sunt, culpa necessitatibus ea nihil aut dolor voluptas, tempore quas?
                            </p>
                            <div class="text-slate-800">
                                <p class="mt-3 text-sm md:text-base">
                                    Emily Jorgenson
                                </p>
                                <p class="text-xs md:text-sm">
                                    Author at panoply store
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
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