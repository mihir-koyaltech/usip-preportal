<div class="w-100">
    <nav class="navbar navbar-expand-lg w-100 p-4">
        <div class="container-fluid mx-auto">
            <a class="navbar-brand ml-5" href="#">
                <img class="img-fluid content-center" id="nav-logo" src="{{ url('assets/images/tailwindcss.svg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 me-auto mb-lg-0">
                    <li class="nav-item px-4 mx-auto">
                        <a class="nav-link active text-lg mx-auto" aria-current="page" href="#">
                            <span class="text-blue-700">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item px-4 mx-auto">
                        <a class="nav-link mx-auto" href="#">Link#2</a>
                    </li>
                    <li class="nav-item px-4 mx-auto">
                        <a class="nav-link mx-auto" href="#">Link#3</a>
                    </li>
                    <li class="nav-item px-4 mx-auto">
                        <a class="nav-link mx-auto" href="#">Link#4</a>
                    </li>
                </ul>
                <div class="d-lg-flex justify-content-center text-center me-lg-5 ">
                    <form class="mx-lg-4" role="search">
                        <span class="input-group">
                            <input class="form-control border rounded-lg" type="search" placeholder="Search here" id="search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary border-bottom-0 border" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </span>
                        </span>
                    </form>
                    <button type="button" class="btn btn-primary mx-auto rounded-pill text-white py-0 mt-2 mt-lg-0">Signup</button>
                </div>
            </div>
        </div>
    </nav>

</div>