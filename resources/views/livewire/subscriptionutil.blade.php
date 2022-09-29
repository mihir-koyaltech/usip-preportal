<div class="my-4">
    <div id="subscription-helper" class="carousel slide carousel-dark">
        <div class="carousel-indicators d-flex justify-content-center  p-0 mb-4">
            <button type="button" data-bs-target="#subscription-helper" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#subscription-helper" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner container-fluid overflow-visible">
            <div class="carousel-item active w-full">
                <div class="w-full row">
                    <div class="col-6 m-auto">
                        <img src="https://www.w3schools.com/bootstrap/la.jpg" class="img-fluid m-auto" />
                    </div>
                    <div class="my-auto col-6 ps-5 text-sky-600">
                        <div>
                            <p class="text-lg">
                                Starter Pack
                                {{$didWork}}
                            </p>
                            <p class="text-xl text-md-3xl my-2">
                                $ XY<sup>.ab</sup>
                            </p>
                            <p class="text-md-lg">
                                Per User / Per Month
                            </p>
                            <p class="text-xs text-md-base pe-md-5 text-black">
                                Home is behind, the world ahead and there are many paths to tread through shadows to the
                            </p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-5 col-11 m-2">
                                    <div class="input-group mb-md-3">
                                        <span class="input-group-text bg-info text-xs text-md-base">User Count</span>
                                        <input type="Number" class="form-control" placeholder="Users" aria-label="Users" aria-describedby="button-addon">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-11 m-2">
                                    <div class="input-group mb-md-3">
                                        <span class="input-group-text bg-info text-xs text-md-base">Numbers</span>
                                        <input type="Number" class="form-control" placeholder="Numbers" aria-label="Users" aria-describedby="button-addon2">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-11 m-2 text-xs text-md-base">
                                    <livewire:dropdown type="calls" :options="$callsOptions" />
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="mx-auto mt-2 col-md-5 col-12 row">
                                    <button class="btn btn-primary col-12 text-xs text-md-base">
                                        Talk to Sales
                                    </button>
                                </div>
                                <div class="ms-md-3 mt-2 col-md-4 col-12 mx-auto">
                                    <button class="btn btn-info text-xs text-md-base">
                                        Shop now!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="carousel-item container-fluid">
                <div class="container-fluid row">
                    <div class="col-6 my-auto">
                        <img src="https://www.w3schools.com/bootstrap/chicago.jpg" class="img-fluid" />
                    </div>
                    <div class="my-auto col-6 ps-4 text-sky-600">
                        <div>
                            <p class="text-lg">
                                Advanced Pack
                                {{$didWork}}
                            </p>
                            <p class="text-xl text-md-3xl my-2">
                                $ AB<sup>.xy</sup>
                            </p>
                            <p class="text-md-lg">
                                Per User / Per Month
                            </p>
                            <p class="text-xs text-md-base pe-md-5 text-black">
                                Home is behind, the world ahead and there are many paths to tread through shadows to the
                            </p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-5 col-11 m-2">
                                    <div class="input-group mb-md-3">
                                        <span class="input-group-text bg-info">User Count</span>
                                        <input type="Number" class="form-control" placeholder="Users" aria-label="Users" aria-describedby="button-addon">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-11 m-2">
                                    <div class="input-group mb-md-3">
                                        <span class="input-group-text bg-info">Numbers</span>
                                        <input type="Number" class="form-control" placeholder="Numbers" aria-label="Users" aria-describedby="button-addon2">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-11 m-2">
                                    <livewire:dropdown type="calls" :options="$callsOptions" />
                                </div>
                            </div>
                            <div class="row mt-3 mx-auto">
                                <div class="mx-auto mt-2 col-md-5 col-12 row">
                                    <button class="btn btn-primary col-12">
                                        Talk to Sales
                                    </button>
                                </div>
                                <div class="ms-md-3 mt-2 col-md-4 col-12 mx-auto">
                                    <button class="btn btn-info">
                                        Shop now!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="carousel-control-wrapper d-none d-md-block d-flex align-items-center justify-content-center p-0 text-center border">
            <button class="carousel-control-prev left-4 btn btn-link" type="button" data-bs-target="#subscription-helper" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next right-0 btn btn-link" type="button" data-bs-target="#subscription-helper" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
    </div>
</div>