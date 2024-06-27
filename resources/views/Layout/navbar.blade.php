{{-- <div class="container py-2">
    <div class="row p-0 m-0">
        <div class="col-lg-3">
            <a href class="logo d-none d-lg-block"><img src="{{ asset('/assets/img/logo.png') }}" class="mb-2" alt
                    width="150px" /></a>
        </div>
        <div class="col-lg-6 p-0 m-0">
            <div class="d-flex justify-content-around pt-2">
                <div>
                    <a href class="text-decoration-none">
                        <i class="fa-regular fa-message"></i>
                        <span class="contact-txt ms-sm-2 text-nowrap">(510) 500-9533</span>
                    </a>
                </div>
                <div>
                    <a href class="text-decoration-none">
                        <i class="fa-solid fa-phone ms-sm-3"></i>
                        <span class="contact-txt ms-sm-2 text-nowrap">sales@oxopackaging.com</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pt-1 d-flex d-none d-lg-flex justify-content-end">
            <button class="nav-btn anker"><a href="{{ route('reqquote') }}" style="color: white!important;">Get a
                    Quote</a></button>
        </div>
    </div>
</div> --}}
<section class="nav-bg">
    <div class="container">
        <div class="row p-auto m-0">

            <nav class="navbar navbar-expand-lg nav-bg">
                <div class="container d-flex justify-content-between">

                    <a href class="logo d-none d-lg-block" style="color: blue">
                        Logo </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon toggle-clr"></span>
                    </button>
                    <div class="collapse navbar-collapse navv" id="navbarSupportedContent">
                        <ul class="navbar-nav navv1 me-auto mb-2 mb-lg-0">
                            <li class="nav-item me-3">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" aria-current="page" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" aria-current="page" href="{{ route('contactus') }}">Contact Us</a>
                            </li>



                            {{-- <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('quote') }}">Request a
                                        Quote</a>
                                </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Blog</a>
                            </li>
                        </ul>
                        {{-- <div class="searchbar my-1">
                                <input class="search_input" type="text" name placeholder="Search Product" />
                                <i class="fas fa-search search_icon"></i>
                            </div> --}}


                        <div class="searchbar my-1">


                            <div class="searchInput">
                                <input type="text" placeholder="Search Product">
                                <div class="resultBox">
                                    <!-- here list are inserted from JavaScript -->
                                </div>
                                {{-- <div class="icon" style="top: 18px !important"><i class="fas fa-search"></i></div> --}}
                            </div>


                        </div>

                        <div>
                            <div class="col-md-3 d-flex d-sm-block d-lg-none">
                                <button class="nav-btn mb-3">Login</button>
                                <button class="nav-btn2 ms-1">Signup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav navv1 me-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Boxes by Industry
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Boxes by Material
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Boxes by Style
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('quote') }}">Request a Quote</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Blog</a>
            </li>
        </ul>
        <div class="searchbar mb-3">
            <input class="search_input w-100" type="text" name placeholder="Search Product" />
            <i class="fas fa-search search_icon"></i>
        </div>

        <div>
            <div class="col-md-12 d-flex d-sm-block d-lg-none">
                <button class="nav-btnoff mb-3 w-100">Login</button>
                <button class="nav-btn2off">Signup</button>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    const searchInput = document.querySelector(".searchInput");
    const input = searchInput.querySelector("input");
    const resultBox = searchInput.querySelector(".resultBox");

    input.onkeyup = (e) => {
        let userData = e.target.value.trim(); // Trim extra spaces
        if (userData !== '') {
            // AJAX request bhejna
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `/search?query=${userData}`,
                true); // Backend ka route specified karna hai, jahan se data lena hai
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        showSuggestions(response.data); // Backend se mila data use karna
                    } else {
                        console.error('Request failed!');
                    }
                }
            };
            xhr.send();
        } else {
            hideResultBox(); // Hide the result box if search bar is empty
        }
    };

    function showSuggestions(list) {
        let listData = '';
        if (list.length > 0) {
            listData = list.map(item => {
                return `
                <li class="list-mod">
                    <img src="${item.image}" alt="" class="image-mod">
                    <span>${item.name}</span>
                </li>`; // Backend se milay hue products ka name aur image display karna
            }).join('');
            searchInput.classList.add("active"); // suggestions mil gaye to box ko dikhana
            showResultBox(); // Show the result box
        } else {
            searchInput.classList.remove("active"); // agar suggestions nahi milay to box ko chhupana
            hideResultBox(); // Hide the result box if no suggestions
        }
        resultBox.innerHTML = listData;
    }

    function showResultBox() {
        resultBox.style.display = 'block'; // Show the result box
    }

    function hideResultBox() {
        resultBox.style.display = 'none'; // Hide the result box
    }
</script>
