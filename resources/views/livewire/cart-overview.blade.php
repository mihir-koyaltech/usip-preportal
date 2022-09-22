<div class="bg-sky-200 rounded-lg mx-auto mt-4 py-3">
    <div class="text-lg md:text-xl ml-6 my-3">
        OVERVIEW
    </div>
    <div class="bg-white text-lg md:text-xl grid grid-cols-2 gap-4 place-content-between mb-4">
        <div class="px-4 text-center">
            SELECTED PRODUCTS
        </div>
        <div class="text-center px-4">
            5 Items
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 place-content-between mb-4">
        <!-- @for($i=0;$i<5;$i++) -->
        <div class="grid grid-cols-2">
            <div class="mx-auto w-fit my-auto">
                <img class="w-[50%] mx-auto" src="{{ url('assets/images/tailwindcss.svg') }}">
            </div>
            <div class="w-[50%]">
                <p class="text-sm md:text-lg">
                    Starter Pack
                </p>
                <p class="text-xs md:text-base uppercase">
                    $ xy.ab
                </p>
                <p class="text-xs md:text-base h-[10%] mt-auto">
                    <a href=""> Delete </a>
                </p>
            </div>
        </div>
        <div class="text-sm md:text-xl text-right pr-10">
            <p>
                <i class="bi bi-plus-circle-fill"></i>
            </p>
            <p class="mr-1">
                1 
            </p>
            <p>
                <i class="bi bi-dash-circle-fill"></i>
            </p>
        </div>
        <!-- @endfor -->
    </div>
    <div class="bg-white hidden md:block">
        
    </div>
</div>