<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand fw-light" href="#"><span class="fw-bold">Real</span>Estate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="d-block d-md-flex justify-content-between w-100">
                <div class="d-flex justify-content-center mx-auto my-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rent</a>
                        </li>
                    </ul>
                </div>
                <div class="d-block d-md-flex align-items-center justify-content-center text-center ms-3">
                    <div>
                        <button class="btn btn-primary btn-listing">
                            <span class="me-2">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            Add Listing
                        </button>
                    </div>
                    <div class="dropdown d-flex justify-content-center">
                        <button class="btn dropdown-toggle d-flex align-items-center" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/user.png') }}" alt="user" class="user">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
