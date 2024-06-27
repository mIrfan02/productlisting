<style>
    .dropdown:hover>.dropdown-menu {
        display: block;
    }


    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }
</style>

 main
<div class="col-md-3 col-lg-2 sidebar d-md-block d-none d-lg-flex justify-content-md-center  ">
    <div class="">
        <div class="sidebar-logo mt-5 ">

            <img src="{{ asset('/assets/img/logo.png') }}" alt="Logo" width="80%">
        </div>
        <div class="sidebar-menu mt-3 row justify-content-center">
            <!-- Sidebar menu items go here -->
            <ul class="ul-dash ">
                <li>
                    <a href="{{ route('admin') }}">
                        <div class="d-flex gap-lg-4 gap-2 align-items-center class1 ">
                            <img class="" src="{{ asset('/assets/img/dashboard 1.png') }}">
                            <h1 class="dash1">Dashboard</h1>
                        </div>
                    </a>
                </li>
                <!-- li2 -->

                <li><a href="{{ route('salespage') }}">
                        <div class="d-flex gap-lg-4 gap-2 align-items-center class1 ">
                            <img class="" src="./assets/img/group 1 (1).png">
                            <h1 class="dash1">Sales</h1>
                        </div>
                    </a>
                </li>
                <!-- li-3 -->

                <!-- li-3 -->
                <li><a href="{{ route('categorypage') }}">
                        <div class="d-flex gap-lg-4 gap-2 align-items-center class1 ">
                            <img class="" src="./assets/img/office-building 1.png">
                            <h1 class="dash1">Category</h1>
                        </div>
                    </a>
                </li>


                <li>
                    <div class="dropdown">
                        <a class="nav-link  btn btn-primary" id="dropdownMenuButton" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="" src="./assets/img/office-building 1.png">

                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('all.products') }}">All Products</a></li>
                            <li><a class="dropdown-item" href="{{ route('productform') }}">New Product</a></li>
                        </ul>
                    </div>
                </li>






                <li><a href="#">

                        <div class=" setting-div ">
                            <div class="d-flex align-items-center  gap-lg-4 gap-2  set-div">
                                <img class="" src="./assets/img/settings 1.png">
                                <h1 class="dash1">Settings</h1>
                            </div>
                        </div>
                    </a></li>


                <!-- Add more menu items here -->
            </ul>

        </div>
    </div>
</div> --}}
