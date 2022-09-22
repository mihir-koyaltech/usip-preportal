<div class="bg-sky-200 rounded-lg mx-auto h-fit w-fit p-3 mt-4">
    <div class="block md:hidden">
        <livewire:cart-overview />
    </div>
    <div class="text-base md:text-lg ml-6 my-3">
        CART SUMMARY
    </div>
    <div class="text-base md:text-lg grid grid-cols-3 px-4">
        <div class="text-xl md:text-2xl">
            <i class="bi bi-cart-fill"></i>
        </div>
        <div class="text-left">
            <p>
                Your sale <br>
                Subtotal
            </p>
        </div>
        <div class="text-right uppercase">
            $ xy.ab <br>
            $ ab.xy
        </div>
    </div>
    <button class="btn bg-sky-600 text-white md:my-7 mt-4 md:text-base text-sm w-[100%]">
        Checkout
    </button>
</div>