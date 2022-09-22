<div class="my-4 w-full" id="products">
    <p class="col-12 mx-auto text-lg md:text-3xl text-sky-600 text-center my-4">
        New Products
    </p>
    <div class="grid lg:grid-cols-3 grid-cols-1 place-content-center  p-4">
        <!-- @for ($j=0; $j<5; $j++) -->
        <div class="p-2 md:p-10">
            <div class="w-3/4 md:w-2/3 mx-auto bg-cover bg-center bg-no-repeat 
                bg-[url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS6oT9JX6EUrNIX38YM6Es69yQk7AvMiU-bQ&usqp=CAU')]
                p-2 rounded-2xl
                border-2
                shadow-xl
                hover:scale-110
                ">

                <div class="bg-slate-500 text-white text-center md:text-base text-sm w-1/6 rounded-xl m-2">
                    $ xy.ab
                </div>
                <div class="mt-32 mx-auto pl-5">
                    <p class="text-lg md:text-2xl my-2">
                        Product Name
                    </p>
                    <p class="text-sm md:text-lg uppercase">
                        Category
                    </p>
                </div>

            </div>
        </div>
        <!-- @endfor -->
    </div>
</div>