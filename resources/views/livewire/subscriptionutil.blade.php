<div class="my-4">
    <div id="subscription-helper" class="carousel slide carousel-dark">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 w-1/6">
            <button type="button" data-bs-target="#subscription-helper" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#subscription-helper" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner w-full overflow-visible">
            <div class="carousel-item active w-full">
                <div class="container-fluid grid grid-cols-2">
                    <div class="container-fluid my-auto">
                        <img src="https://www.w3schools.com/bootstrap/la.jpg" class="block m-auto" class="" />
                    </div>
                    <div class="my-auto ml-12 text-sky-600">
                        <div>
                            <p class="text-lg">
                                Starter Pack
                                {{$didWork}}
                            </p>
                            <p class="text-3xl my-2">
                                $ XY<sup>.ab</sup>
                            </p>
                            <p class="text-lg">
                                Per User / Per Month
                            </p>
                            <p class="pe-md-5 text-black">
                                Home is behind, the world ahead and there are many paths to tread through shadows to the
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 mt-4 place-content-between">
                            <div class="my-2">
                                <livewire:dropdown type="users" :options="$usersOptions" />
                            </div>
                            <div class="my-2">
                                <livewire:dropdown type="numbers" :options="$numbersOptions" />
                            </div>
                            <div class="my-2">
                                <livewire:dropdown type="calls" :options="$callsOptions" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 place-content-apart mt-3">
                            <div class="w-auto">
                                <button class="btn btn-primary w-full">
                                    Talk to Sales
                                </button>
                            </div>
                            <div class="ml-2 md:ml-6">
                                <button class="btn btn-info">
                                    Shop now!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-full">
                <div class="container-fluid grid grid-cols-2">
                    <div class="container-fluid my-auto">
                        <img src="https://www.w3schools.com/bootstrap/chicago.jpg" class="block" />
                    </div>
                    <div class="my-auto ml-12 text-sky-600">
                        <div>
                            <p class="text-lg">
                                Advanced Pack
                                {{$didWork}}
                            </p>
                            <p class="text-3xl my-2">
                                $ AB<sup>.xy</sup>
                            </p>
                            <p class="text-lg">
                                Per User / Per Month
                            </p>
                            <p class="pe-md-5 text-black">
                                Home is behind, the world ahead and there are many paths to tread through shadows to the
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 mt-4 place-content-between">
                            <div class="my-2">
                                <livewire:dropdown type="users" :options="$usersOptions" />
                            </div>
                            <div class="my-2">
                                <livewire:dropdown type="numbers" :options="$numbersOptions" />
                            </div>
                            <div class="my-2">
                                <livewire:dropdown type="calls" :options="$callsOptions" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 place-content-apart mt-3">
                            <div class="w-auto">
                                <button class="btn btn-primary w-full">
                                    Talk to Sales
                                </button>
                            </div>
                            <div class="ml-2 md:ml-6">
                                <button class="btn btn-info">
                                    Shop now!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden md:block absolute w-50 px-5 top-0 hover:text-white    bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline">
            <button class="carousel-control-prev left-4 " type="button" data-bs-target="#subscription-helper" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next right-0" type="button" data-bs-target="#subscription-helper" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>