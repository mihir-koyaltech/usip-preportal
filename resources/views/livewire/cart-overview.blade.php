<div class="bg-sky-200 rounded-3 mx-auto mt-4 py-3">
    <div class="text-lg text-md-xl ms-4 mb-3">
        <span class="my-auto">OVERVIEW</span>
    </div>
    <div class="bg-white text-md-lg row d-flex justify-content-center align-items-center mb-4">
        <div class="px-4 text-center col-6">
            SELECTED PRODUCTS
        </div>
        <div class="text-md-base text-center px-4 col-4 text-end">
            5 Items
        </div>
    </div>
    <div class="mb-3">
        <!-- @for($i=0;$i<5;$i++) -->
        <div class="d-flex justify-content-center mb-2 p-1 ps-3 pe-3">
            <div style="width: 25%;" class="d-flex justify-content-center align-items-center me-2">
                <img src="https://picsum.photos/200/300" class="rounded-3" width="100%" height="100px" alt="item">
            </div>
            <div class="d-flex  justify-content-between flex-column " style="width: 65%;">
                <div class="" style="height: 75%;">
                    <h5 class="mb-1 text-color">Starter Pack</h5>
                    <small class="h6 text-color">$ 20.00</small>
                </div>
                <div class="" style="height: 25%;">
                    <p class="text-color">Delete</p>
                </div>
            </div>
            <div style="width: 10%;" class="d-flex flex-column   p-1">
                <div class=" d-flex justify-content-center align-items-center " style="height: 35%;">
                    <button class="rounded-circle border ">
                        <img src="{{ url('assets/images/add.svg') }}" width="15px" height="15px" alt="item">
                    </button>
                </div>
                <div class="d-flex justify-content-center align-items-center " style="height: 30%;">
                    <div class="pt-1">
                        <h5 class="text-color">1</h5>
                    </div>
                </div>
                <div class=" d-flex justify-content-center align-items-center " style="height: 35%;">
                    <button class="rounded-circle border ">
                        <img src="{{ url('assets/images/substract.svg') }}" width="15px" height="15px" alt="item">
                    </button>
                </div>
            </div>
        </div>
        <!-- @endfor -->
    </div>
</div>