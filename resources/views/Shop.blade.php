@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container py-5">
            <h2 class="text-center fs-2 fw-bold py-4 ">Our <span class="text-primary ">Product</span></h2>
            <!-- card row 1st -->
            <div class="row flex-wrap my-4  ">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-one.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Badge</a>
                            <p class="fw-bold">$9.90 – $49.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-two.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Business card</a>
                            <p class="fw-bold">$5.95 – $39.95</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-three.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Cap</a>
                            <p class="fw-bold">$14.90 – $99.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-four.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Flyer</a>
                            <p class="fw-bold">$19.95 – $49.95</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card row 2nd -->
            <div class="row flex-wrap my-4  ">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-row2-one.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Men’s t-shirt</a>
                            <p class="fw-bold">$14.95 – $119.95</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-row2-two.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Mouse Pad</a>
                            <p class="fw-bold">$14.90 – $99.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-row2-three.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Mug</a>
                            <p class="fw-bold">$14.95 – $119.95</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/card-row2-four.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Phone case</a>
                            <p class="fw-bold">$19.95 – $24.95</p>
                        </div>
                    </div>
                </div>
            </div>



            <!--  card row third -->
            <div class="row flex-wrap my-4  ">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row3-one.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Poster</a>
                            <p class="fw-bold">$49.95 – $79.95</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row3-two.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Sticker
                            </a>
                            <p class="fw-bold"> $9.95 – $39.95</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row3-three.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Sweatshirt</a>
                            <p class="fw-bold">$19.95 – $159.95</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row3-four.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Triptych brochure</a>
                            <p class="fw-bold">$49.95 – $79.95</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- row four -->
            <div class="row flex-wrap my-4  ">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row4-one.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">

                                Promo Trucker Hat</a>
                            <p class="fw-bold">$12.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row4-two.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Paper cups coffee</a>
                            <p class="fw-bold">$1.81</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row4-three.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Swing Tags
                            </a>
                            <p class="fw-bold text-danger "><s class="text-secondary ">$21.78</s> $20.59</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row4-four.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Food Packaging Labels</a>
                            <p class="fw-bold">$11.15</p>
                        </div>
                    </div>
                </div>
            </div>




            <!-- row five -->
            <div class="row flex-wrap my-4  ">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row5-one.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Folded Leaflets</a>
                            <p class="fw-bold">$3.92</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row5-two.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Square Business Cards</a>
                            <p class="fw-bold">$40.13</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row5-three.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Paper Bags</a>
                            <p class="fw-bold">$2.92</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="">
                        <img src="{{ asset('/assets/img/row5-four.png') }}" class="card-img-top bg-white rounded-5"
                            alt="..." />
                        <div class="d-flex flex-column justify-content-center mt-3 gap-2 align-items-center">
                            <a href="#" class="text-decoration-none fw-bold text-dark">Ceramic Takeaway Cup</a>
                            <p class="fw-bold text-danger "><s class="text-secondary "> $56.54</s> $24.09</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="d-flex justify-content-center ">

            <nav aria-label="...">
                <ul class="pagination d-flex align-items-center  ">
                    <li class="page-item border-0">
                        <a class="page-link border-0 bg-light  " href="#" aria-label="Previous">
                            <span class="text-dark fs-3 fw-semibold  " aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <li class="page-item ">
                        <span class="page-link border-0 bg-light text-dark fs-5 fw-semibold ">Previous</span>
                    </li>
                    <li class="page-item  "><a class="page-link border-0 bg-light text-dark fs-5 fw-semibold"
                            href="#">1</a></li>
                    <li class="page-item active " aria-current="page">
                        <span class="page-link bg-primary  rounded-circle   text-white  fs-5 fw-semibold">2</span>
                    </li>
                    <li class="page-item border-0"><a class="page-link border-0 bg-light text-dark fs-5 fw-semibold "
                            href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link border-0  bg-light text-dark fs-5 fw-semibold " href="#">Next</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link border-0 bg-light " href="#" aria-label="Next">
                            <span class="text-dark fs-3 fw-semibold" aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
