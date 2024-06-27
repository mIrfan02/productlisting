@extends('layouts.app')

@section('content')
    <div class="maincustoomhome">
        <!--###############> Crousel Start <################# -->

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active slider-img">
                    <section class="bg-banner">
                        <div class="col-full container-xxl">
                            <div class="row p-0 m-0 py-3">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="Left-col">
                                        <p class="para-txt text-white pt-5 pt-6">Product listing</p>
                                        <p class="CS-TXT text-capitalize">
                                            Customized bulk Design
                                        </p>
                                        <p class="para-txt text-capitalize">
                                            Turn your ideas into premium products that leave a
                                            lasting impression
                                        </p>
                                        <div>
                                            <a href="{{ route('quote') }}" class="btn btn-lg sec2_custom-button mt-2">Shop
                                                Now<i class="fa-solid fa-arrow-right sec2_custom_icon ms-1"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 d-none d-md-block animatedingbox">
                                    <img src="{{ asset('/assets/img/image_11-removebg-preview 1.png') }}" class="pt-5 w-100"
                                        alt />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item pb-5 pb-md-0">
                    <div class="slider-img secondcarousel">
                        <img src="{{ asset('/assets/img/7xm.xyz181976.jpg') }}" class="d-block w-100 img-slid"
                            alt="..." />
                    </div>
                    <div class="custom-carousel-caption">
                        <p class="fst-italic">Product Listing</p>
                        <h3 class="CS-TXT mb-3 ">Customized Order Products</h3>
                        <div class="row p-0 m-0">

                            <div class="col-lg-5  p-0 m-0">
                                <a href="{{ route('quote') }}"
                                    class="btn w-100 btn-lg sec2_custom-button1 mt-2 px-5 py-3 text-nowrap">
                                    Shop Now
                                </a>
                            </div>
                            <div class="col-md-1 p-0 m-0"></div>
                            <div class="col-lg-6 p-0 m-0">
                                <a href="{{ route('quote') }}"
                                    class="btn w-100 btn-lg sec2_custom-button1 mt-2 px-5 py-3 text-nowrap">
                                    Shop Now
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Previous</span> -->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--###############> Crousel End <################# -->

        <section class="col-full bg-transparent masterlightsection">
            <div class=" ">
                <div class="row ">

                    <div class="col-lg-4 mt-2 mt-md-0 col-md-6 mb-3 mb-md-0  ">
                        <div class="bg-white boxeshome">
                            <div class="d-flex p-3 mb-md-0 mb--md-5">
                                <div>
                                    <img src="{{ asset('/assets/img/Group 14.png') }}" alt width="54px" />
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0 banner-para">Free Shipping & Return</p>
                                    <p class="mb-0">Free Shipping on orders over $199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mb-md-0 ">
                        <div class="bg-white boxeshome">
                            <div class="d-flex p-3">
                                <div>
                                    <img src="{{ asset('/assets/img/Group 14.png') }}" alt width="54px" />
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0 banner-para">Free Shipping & Return</p>
                                    <p class="mb-0">Free Shipping on orders over $199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mb-md-0  ">
                        <div class="bg-white boxeshome">
                            <div class="d-flex p-3">
                                <div>
                                    <img src="{{ asset('/assets/img/Group 14.png') }}" alt width="54px" />
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0 banner-para">Free Shipping & Return</p>
                                    <p class="mb-0">Free Shipping on orders over $199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--#################> Main Home Page End<############# -->

    <section
        class="col-full my-5 elementor-section elementor-top-section elementor-element elementor-element-64d00d6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="text-center settingmain">
            <div class="row p-0 m-0">
                <div class="col-md-4"></div>
                <div class="col-md-4 p-0 p-md-1">
                    <h1 class="mainhweading"><span>Top selling</span> Categories</h1>
                    <p class="pt-3">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ef7763c"
                data-id="ef7763c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0f7ba90 layout-special-yes style-special-2 arrow-style-1 dot-style-1 elementor-widget elementor-widget-printec-product-categories"
                        data-id="0f7ba90" data-element_type="widget" data-widget_type="printec-product-categories.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-categories-item-wrapper">
                                @php
                                    $count = 0;
                                @endphp
                                <div class="layout-1 row" data-elementor-columns="4" data-elementor-columns-tablet-extra="3"
                                    data-elementor-columns-tablet="2" data-elementor-columns-mobile="1">


                                    {{-- Render the first category --}}

                                    @foreach (App\Models\Category::all() as $category)
                                        @if ($category->status && $count < 5)
                                            <div class="column-item elementor-categories-item mt-3 mt-md-0">
                                                <div class="product-cat elementor-repeater-item-ce36928">
                                                    <a class="product-cat-link"
                                                        href="{{ route('service', ['id' => $category->id]) }}"
                                                        title="{{ $category->title }}">
                                                        <div class="category-product-img">
                                                            @if ($category->image)
                                                                <img decoding="async" class="inner-imgmain"
                                                                    src="{{ asset($category->image) }}"
                                                                    alt="{{ $category->title }}">
                                                            @else
                                                                No Image
                                                            @endif
                                                        </div>
                                                        <div class="product-cat-caption">
                                                            <div class="cat-title">
                                                                {{ $category->title }}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            @php $count++; @endphp
                                        @endif
                                    @endforeach



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Second Copy  Start-->
    <div id="content" class="py-5 site-content topsellingitemsection">

        <div class="text-center settingmain" style="transform: skewY(4deg) !important">
            <div class="row p-0 m-0">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mainhweading"><span>Top selling</span> items</h1>
                    <p class="pt-3">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="col-full" style="transform: skewY(4deg) !important">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <ul class="printec-products products columns-4"
                        style="margin-left: 0px; margin-right: 0px; padding-left: 20px; padding-right: 20px;">
                        @foreach (App\Models\Product::all() as $product)
                            <li
                                class="product-style-default product type-product post-{{ $product->id }} status-publish first instock product_cat-design-online product_tag-design-online product_tag-stickers product_tag-{{ $product->name_slug }} has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                <a href="{{ route('service', ['id' => $product->id]) }}"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <div class="product-block">
                                        <div class="content-product-imagin"></div>
                                        <div class="product-transition">
                                            <div class="product-image image-main">
                                                <img width="600" style="object-fit: cover;"
                                                    src="{{ asset('uploads/Products/' . $product->image) }}"
                                                    alt="{{ $product->name }}" decoding="async" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="woocommerce-loop-product__title">{{ $product->name }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="row">
                        <div class=" py-2 d-flex justify-content-center">
                            <button type="button" class="btn rounded-0 btn-lg btn-block readmorebtn1 px-5">
                                Read More <i class="fas fa-arrow-right allroset"></i>
                            </button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    </div>
    <!-- Second Copy  End -->


    {{-- <section class="my-5">
        <div class="text-center settingmain">
            <div class="row p-0 m-0 p-0 m-0">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mainhweading"><span>Get A Free</span> Quote</h1>
                    <p class="pt-3">There are many variations of passages of Lorem</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="mainnewqoute">
            <div class=" pb-3 col-full">
                <form action="{{ route('quote.store') }}" method="post" id="quoteForm">
                    @csrf
                    <div class="formDiv mt-3">
                        <h1 class="bg-dark text-white text-center p-2 customHead">
                            Get Custom <span class="getSp">Quote</span>
                        </h1>
                        <div class="d-flex justify-content-around headSet align-items-center pt-4">
                            <div class="d-flex  ms-4 ms-lg-0">
                                <a href="#"
                                    class="text-decoration-none d-flex justify-content-center  align-items-center ">
                                    <i class="fa-solid fa-headset text-black fs-2 mx-2 mt-2"></i>
                                    <p class="mb-0 text-black ">
                                        <small>chat with</small> <br />
                                        Pakaging Expert
                                    </p>
                                </a>
                            </div>
                            <div class="d-flex ms-4 ms-lg-0">
                                <a href="#"
                                    class="text-decoration-none d-flex justify-content-center  align-items-center ">
                                    <i class="fa-brands fa-square-whatsapp whats fs-2 mt-1"></i>
                                    <p class="p-3 whatsPara mx-3 mb-0">Whatsapp us</p>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row mx-2">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control inputSHad"
                                        id="exampleFormControlInput1" placeholder="Name*" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control inputSHad"
                                        id="exampleFormControlInput1" placeholder="Email*" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="phone" class="form-control inputSHad"
                                        id="exampleFormControlInput1" placeholder="Phone" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <select class="form-select inputSHad" name="product" id="productselects"
                                        aria-label="Default select example">
                                        <option selected disabled> Select Product</option>
                                        @foreach (App\Models\Product::all() as $product)
                                            <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                                                {{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control inputSHad" name="length" id="length"
                                        placeholder="Length" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control inputSHad" name="width" id="width"
                                        placeholder="Width" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="number" class="form-control inputSHad" name="height" id="height"
                                        placeholder="Height" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <select class="form-select inputSHad" name="unit"
                                        aria-label="Default select example">
                                        <option selected>Unit</option>
                                        <option value="2">m</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <select class="form-select inputSHad" name="printing"
                                        aria-label="Default select example">
                                        <option selected> None</option>

                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <select class="form-select inputSHad" name="material"
                                        aria-label="Default select example">
                                        <option selected>None</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="number" name="quantity1" class="form-control inputSHad" id="quantity"
                                        placeholder="Qty" max="10" />
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control inputSHad" name="description" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Additional Requirement"></textarea>
                                </div>
                            </div>



                            <div class="mb-3">
                                <input class="form-control inputSHad" name="result" id="result"
                                    placeholder="Click here to see your total price" readonly></input>

                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-dark p-3 my-3" type="submit">
                                    submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section> --}}


    <!--====== Gallery Section  Start ======-->
    {{-- Backend Code commented  --}}
    <section id="gallery">
        <div class="py-5">
            <div class="text-center settingmain">
                <div class="row p-0 m-0 p-0 m-0">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1 class="mainhweading"><span>Top </span> Products</h1>
                        <p class="pt-3">
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered
                        </p>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <div class="container-fluid p-0 m-0 p-0 ">



                <div class="row p-0 m-0">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 p-0 m-0">

                        <ul class="gallery_tabs">
                            <li class="active" data-filter="all">All</li>
                            @foreach (App\Models\Category::all() as $category)
                                <li data-filter="{{ $category->title }}">{{ $category->title }}</li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="col-md-2"></div>
                </div>


                <div class="col-full ">
                    <div class="woocommerce"></div>
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <ul class="printec-products products columns-4">

                                @foreach (App\Models\Product::all() as $product)
                                    @if ($product->checkbox != 'Boxes By Style')
                                        <li
                                            class="gallery_item {{ $product->category->title }} product-style-default product type-product post-{{ $product->id }} status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="product-block">
                                                <div class="product-transition">
                                                    <div class="product-image image-main">
                                                        <img width="600" height="600" style="object-fit: cover;"
                                                            src="{{ asset('uploads/Products/' . $product->image) }}"
                                                            alt="{{ $product->name }}" decoding="async" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>




                        </main>


                    </div>

                    <div class="lightbox">
                        <div class="lightbox_wrapper">
                            <div class="lightbox_content">
                                <img src class="lightbox_img" alt="lightbox-img" />
                            </div>
                        </div>
                        <div class="lightbox_close">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- <section id="gallery">
        <div class="py-5">
            <div class="text-center settingmain">
                <div class="row p-0 m-0 p-0 m-0">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1 class="mainhweading"><span>Top selling</span> items</h1>
                        <p class="pt-3">
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered
                        </p>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <div class="container-fluid p-0 m-0 p-0 ">
                <!-- Filterable Gallery -->


                <div class="row p-0 m-0">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 p-0 m-0">
                        <ul class="gallery_tabs">
                            <li class="active" data-filter="all">All</li>
                            <li data-filter="camera">Cameras</li>
                            <li data-filter="laptop">Laptops</li>
                            <li data-filter="mobile">Mobiles</li>
                            <li data-filter="headphone">Headphones</li>
                        </ul>
                    </div>
                    <div class="col-md-2"></div>
                </div>



                <div class=" ">



                    <div class="col-full ">
                        <div class="woocommerce"></div>
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <ul class="printec-products products columns-4">
                                    <li
                                        class="gallery_item  camera  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1585218356057-dc0e8d3558bb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                    <li
                                        class="gallery_item  camera  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1599669454699-248893623440?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhlYWRwaG9uZXN8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  laptop product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1602080858428-57174f9431cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGxhcHRvcHxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  mobile  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1596558450268-9c27524ba856?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bW9iaWxlc3xlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  laptop product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1559163499-413811fb2344?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGxhcHRvcHxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item   laptop  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1591533385361-f327d396db9d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjV8fGNhbWVyYXxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  camera  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1610041321327-b794c052db27?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGhlYWRwaG9uZXN8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  camera  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1557690267-fad2f168bb95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlc3xlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  laptop product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1533740566848-5f7d3e04e3d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fGxhcHRvcHxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="gallery_item  headphone  product-style-default product type-product post-7294 status-publish first instock product_cat-design-online product_tag-badge product_tag-design-online has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <h3>Embossing</h3>
                                        <div class="product-block">

                                            <div class="product-transition">
                                                <div class="product-image image-main">

                                                    <img width="600" height="600" style="object-fit: cover;"
                                                        src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                                        alt="" decoding="async" loading="lazy">
                                                </div>


                                            </div>

                                        </div>
                                    </li>



                                </ul>

                            </main>
                        </div>
                    </div>



















                </div>

                <!-- Lightbox -->
                <div class="lightbox">
                    <div class="lightbox_wrapper">
                        <div class="lightbox_content">
                            <img src class="lightbox_img" alt="lightbox-img" />
                        </div>
                    </div>
                    <div class="lightbox_close">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== Gallery Section  End ======-->

    <section class="py-5  padOne topsellingitemsection">
        <div class="col-full" style="transform: skewY(4deg) !important">
            <div class="text-center settingmain">
                <div class="row p-0 m-0 p-0 m-0">
                    <div class="col-md-12 pb-5">
                        <h1 class="text-center mainhweading">
                            <span>Product </span> Listing
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row p-0 m-0 p-0 m-0">
                <div class="col-md-6 contentfaqs p-0 p-md-1">
                    <div class="settingmain customhead text-justify">
                        <h4 class="pb-3">Product Listing</h4>

                        <p class="pe-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                            unde aperiam eos ea omnis autem voluptatem animi atque culpa
                            ipsa modi illo nesciunt natus, vitae aut corrupti maiores
                            eligendi consequuntur debitis explicabo eum voluptatibus? Ab
                            quaerat~ iste fugit inventore voluptatibus beatae consequatur
                            quod explicabo rerum reprehenderit sit, labore obcaecati
                            laboriosam incidunt dolor blanditiis, mollitia sed ipsum in ex
                            natus! Perferendis quae quibusdam corrupti pariatur. Beatae
                            excepturi incidunt repellendus voluptatum tenetur!
                        </p>

                        <button class="readmorebtn mt-4 px-5">Shop Now</button>
                    </div>
                </div>

                <div class="col-md-6 contentfaqs customimg mt-3 mt-md-0 p-0 ">
                    <img src="{{ asset('/assets/img/custom1.png') }}" alt />
                </div>
            </div>
        </div>
    </section>


    <!--################> Print By Category Start <###########  -->



    <section
        class="lastsection  topsellingitemsection elementor-section elementor-top-section elementor-element elementor-element-f80cc77 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="f80cc77" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">

        <div class="text-center settingmain pb-md-2 pt-5" style="transform: skewY(4deg) !important">
            <div class="row p-0 m-0">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mainhweading"><span>Top </span>Recent Products</h1>
                    <p class="pt-3">There are many variations of passages of Lorem</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="col-full container-xxl elementor-container elementor-column-gap-no py-5 px-0"
            style="transform: skewY(4deg) !important">

            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ba17581 "
                data-id="ba17581" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-768fc98 elementor-cta--valign-top effect-icon-yes button-banner-style-printec-default elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-printec-banner"
                        data-id="768fc98" data-element_type="widget" data-widget_type="printec-banner.default">
                        <div class="elementor-widget-container">
                            <a href="https://demo2.pavothemes.com/printec/shop/"
                                class="elementor-cta--skin-cover elementor-cta elementor-printec-banner">
                                <div class="elementor-cta__bg-wrapper" style="border-radius: 30px;">
                                    <div class="elementor-cta__bg elementor-bg"
                                        style="background-image: url(https://demo2.pavothemes.com/printec/wp-content/uploads/2023/02/h6_banner1.jpg);">
                                    </div>
                                    <div class="elementor-cta__bg-overlay"></div>
                                </div>
                                <div class="elementor-cta__content">
                                    <div class="elementor-cta__content_inner">
                                        <div
                                            class="elementor-cta__subtitle elementor-cta__content-item elementor-content-item">
                                            <span class="Boxstyle">Product Listing</span>
                                        </div>
                                        <h3
                                            class="elementor-cta__title elementor-cta__content-item elementor-content-item letter_text">
                                            <span class="Boxstylesecond letter">Supersized</span><span
                                                class=" letter Boxstylesecond">large</span><span
                                                class="letter Boxstylesecond">gormat</span>
                                        </h3>
                                        <div class="Boxstylebtn elementor-cta__button-wrapper ">
                                            <span class="elementor-cta__button elementor-button">
                                                <span
                                                    class="elementor-cta__button-content-wrapper elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-right">
                                                        <i aria-hidden="true"
                                                            class="printec-icon- printec-icon-right-arrow"></i>
                                                    </span>
                                                    <span class=" elementor-button-text"> Shop Now </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-64cd1d7"
                data-id="64cd1d7" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7854508 mobile-switcher-style-product-yes arrow-style-1 dot-style-1 elementor-widget elementor-widget-printec-products"
                        data-id="7854508" data-element_type="widget" data-widget_type="printec-products.default">
                        <div class="elementor-widget-container">
                            <div class="woocommerce columns-3  columns-tablet-2 columns-mobile-1">
                                <ul class="products columns-3"
                                    style="margin-left: 0px; margin-right: 0px; padding-left: 20px; padding-right: 20px;">
                                    @foreach (App\Models\Product::where('checkbox', 'Boxes By Style')->orderBy('created_at', 'desc')->take(6)->get() as $product)
                                        @if ($product->checkbox)
                                            <li
                                                class="product-style-default product type-product post-{{ $product->id }} status-publish first instock product_cat-design-online product_tag-design-online product_tag-stickers product_tag-{{ $product->name_slug }} has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                                <div class="product-block">
                                                    <div class="content-product-imagin"></div>
                                                    <div class="product-transition">
                                                        <div class="product-image image-main">
                                                            <a href="{{ route('service', ['id' => $product->id]) }}">
                                                                <img width="600" height="600"
                                                                    style="object-fit: cover;"
                                                                    src="{{ asset('uploads/Products/' . $product->image) }}"
                                                                    alt="{{ $product->name }}" decoding="async"
                                                                    loading="lazy">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <h3 class="woocommerce-loop-product__title"><a
                                                                href="{{ $product->permalink }}">{{ $product->name }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                    {{-- @foreach (App\Models\Product::where('checkbox', 'Boxes By Style')->orderBy('created_at', 'desc')->take(6)->get() as $product)
                                        @if ($product->checkbox)
                                            <li
                                                class="product-style-default product type-product post-{{ $product->id }} status-publish first instock product_cat-design-online product_tag-design-online product_tag-stickers product_tag-{{ $product->name_slug }} has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                                <div class="product-block">
                                                    <div class="content-product-imagin"></div>
                                                    <div class="product-transition">
                                                        <div class="product-image image-main">
                                                            <img width="600" height="600" style="object-fit: cover;"
                                                                src="{{ asset('uploads/Products/' . $product->image) }}"
                                                                alt="{{ $product->name }}" decoding="async"
                                                                loading="lazy">
                                                            <a href="{{ $product->permalink }}"
                                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                                        </div>

                                                    </div>
                                                    <div class="product-caption">
                                                        <h3 class="woocommerce-loop-product__title"><a
                                                                href="{{ $product->permalink }}">{{ $product->name }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach --}}


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="pt-5 px-md-5">
        <!-- ---------------------section1------------------------ -->
        <!-- topsellingitemsection2 -->
        <!-- style="
  transform: skewY(-4deg);" -->
        <div>
        </div>
        </div>
        </div>
    </section>

    <!--################> Print By Category End <#############  -->


    <!--#################> Client Reviews  Start <##################-->
    <section class="pt-5 straightbg bg-transparent">
        <!-- topsellingitemsection2 -->
        <!-- style="transform: skewY(-4deg);" -->
        <div>
            <div class="text-center settingmain">
                <div class="row p-0 m-0 p-0 m-0">
                    <div class="col-md-4 p-0 m-0"></div>
                    <div class="col-md-4 p-0 m-0">
                        <h1 class="mainhweading"><span>Users</span> Review</h1>
                    </div>
                    <div class="col-md-4 p-0 m-0"></div>
                </div>
            </div>

            <!-- ---Explore Our Services Banner 2--- -->
            <div class="slider-div mb-5 pb-5">
                <div class=" swiper border-8  col-full">
                    <div class="row p-0 m-0 m-0 topic-card slider-bg-cl">
                        <div class="col-lg-12 col-12 p-0 m-0">
                            <div class="slide-container">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic_card swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                    <div class="px-1">
                                                        <svg width="12" height="11" viewBox="0 0 12 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.49845 0.276638C6.27636 -0.092212 5.72364 -0.0922134 5.50155 0.276638L3.93747 2.87428C3.82776 3.05649 3.63813 3.18083 3.42199 3.21229L0.490797 3.63894C-0.00151692 3.7106 -0.174208 4.30963 0.209201 4.61575L2.39281 6.35918C2.59494 6.52057 2.68998 6.77513 2.64088 7.02362L2.06968 9.91441C1.97939 10.3714 2.47718 10.7264 2.9043 10.5097L5.66438 9.10916C5.87446 9.00256 6.12554 9.00256 6.33562 9.10916L9.0957 10.5097C9.52282 10.7264 10.0206 10.3714 9.93032 9.91441L9.35912 7.02362C9.31002 6.77513 9.40506 6.52057 9.60719 6.35918L11.7908 4.61575C12.1742 4.30963 12.0015 3.7106 11.5092 3.63894L8.57802 3.21229C8.36187 3.18083 8.17224 3.05649 8.06253 2.87428L6.49845 0.276638Z"
                                                                fill="#FFA60D" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="card-text pt-3 pt-3">
                                                    "Some quick example text to build on the card title
                                                    and make up the bulk of the card's content. "
                                                </p>
                                            </div>
                                            <div class="d-flex p-3">
                                                <div>
                                                    <img src="{{ asset('/assets/img/Ellipse 1.png') }}"
                                                        class="card-img-top1" alt="..." />
                                                </div>
                                                <div class="ps-2">
                                                    <h6 class="mb-0">Jasseca ccorder</h6>
                                                    <p class="mm-0 cardtextname">
                                                        Allegra January 2022
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--#################> Client Reviews End  <##################-->

    <section class>
        <div class="container-fluid p-0 m-0 bgFixed position-relative">
            <div class="text-center fixedtext">
                <h3 class="pb-2">Extra 30% OFF Online</h3>
                <h2 class="pb-1">Lorem ipsum dolor sit amet consectetur</h2>
                <p>Lorem ipsum dolor sit amet.</p>
                <button class="py-3 mt-4">Read More</button>
            </div>
        </div>
    </section>



    <section class="pt-5 mt-5">
        <!-- ------------------------------Section3----------------------------- -->

        <div class="text-center settingmain pb-5">
            <div class="row p-0 m-0 p-0 m-0">
                <div class="col-md-4 p-0 m-0"></div>
                <div class="col-md-4 p-0 m-0">
                    <h1 class="mainhweading"><span>Our Latest</span> Blogs</h1>
                </div>
                <div class="col-md-4 p-0 m-0"></div>
            </div>
        </div>

        <div class="container-xxl col-full">
            <div class="row p-0 m-0  p-0 ">
                <div class="col-lg-3 col-md-12 col-sm-12 p-0">
                    <div class="card Card-FB mb-3">
                        <div class="img-container">
                            <img src="{{ asset('/assets/img/blog_crd_1.jpg') }}" alt="Background Image"
                                class="card-img-top" />
                            <div class="content-overlay">
                                <div class="our-team">
                                    <div class="picture mt-3 mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content px-3">
                        <div class>
                            <div class>
                                <span class></span><a href rel="category tag"
                                    class="text-decoration-none life_txt">Lifestyle</a>
                            </div>
                            <h3 class="sigma entry-title">
                                <a href rel="bookmark" class="text-decoration-none cont_sec_3">Tips to Find Best
                                    Print on Demand
                                    Business Name Ideas</a>
                            </h3>
                        </div>
                        <div class>
                            <div class>
                                <a class="more-link text-decoration-none text-dark" href>Read more<i
                                        class="fa-solid fa-arrow-right sec2_custom_icon ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 p-0">
                    <div class="card Card-FB mb-3">
                        <div class="img-container">
                            <img src="{{ asset('/assets/img/blog_crd_2.jpg') }}" alt="Background Image"
                                class="card-img-top" />
                            <div class="content-overlay">
                                <div class="our-team">
                                    <div class="picture mt-3 mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content px-3">
                        <div class>
                            <div class>
                                <span class></span><a href rel="category tag" class="text-decoration-none life_txt">Print
                                    Company</a>
                            </div>
                            <h3 class="sigma entry-title">
                                <a href rel="bookmark" class="text-decoration-none cont_sec_3">Tips to Find Best
                                    Print on Demand
                                    Business Name Ideas</a>
                            </h3>
                        </div>
                        <div class>
                            <div class>
                                <a class="more-link text-decoration-none text-dark" href>Read more<i
                                        class="fa-solid fa-arrow-right sec2_custom_icon ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 p-0">
                    <div class="card Card-FB mb-3">
                        <div class="img-container">
                            <img src="{{ asset('/assets/img/blog_crd_3.jpg') }}" alt="Background Image"
                                class="card-img-top" />
                            <div class="content-overlay">
                                <div class="our-team">
                                    <div class="picture mt-3 mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content px-3">
                        <div class>
                            <div class>
                                <span class></span><a href rel="category tag" class="text-decoration-none life_txt">Print
                                    Company</a>
                            </div>
                            <h3 class="sigma entry-title">
                                <a href rel="bookmark" class="text-decoration-none cont_sec_3">Tips to Find Best
                                    Print on Demand
                                    Business Name Ideas</a>
                            </h3>
                        </div>
                        <div class>
                            <div class>
                                <a class="more-link text-decoration-none text-dark" href>Read more<i
                                        class="fa-solid fa-arrow-right sec2_custom_icon ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 p-0">
                    <div class="card Card-FB mb-3">
                        <div class="img-container">
                            <img src="{{ asset('/assets/img/blog_crd_3.jpg') }}" alt="Background Image"
                                class="card-img-top" />
                            <div class="content-overlay">
                                <div class="our-team">
                                    <div class="picture mt-3 mb-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content px-3">
                        <div class>
                            <div class>
                                <span class></span><a href rel="category tag" class="text-decoration-none life_txt">Print
                                    Company</a>
                            </div>
                            <h3 class="sigma entry-title">
                                <a href rel="bookmark" class="text-decoration-none cont_sec_3">Tips to Find Best
                                    Print on Demand
                                    Business Name Ideas</a>
                            </h3>
                        </div>
                        <div class>
                            <div class>
                                <a class="more-link text-decoration-none text-dark" href>Read more<i
                                        class="fa-solid fa-arrow-right sec2_custom_icon ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all navigation items
        const navItems = document.querySelectorAll('.gallery_tabs li');

        // Get all product lists
        const allProductsList = document.querySelector('.all-products');
        const cameraProductsList = document.querySelector('.camera-products');
        const laptopProductsList = document.querySelector('.laptop-products');
        const mobileProductsList = document.querySelector('.mobile-products');
        const headphoneProductsList = document.querySelector('.headphone-products');

        // Function to handle navigation clicks
        function handleNavClick(event) {
            // Remove active class from all navigation items
            navItems.forEach(item => item.classList.remove('active'));
            // Add active class to the clicked item
            event.target.classList.add('active');

            // Get the data-filter attribute of the clicked item
            const filter = event.target.getAttribute('data-filter');

            // Hide all product lists
            allProductsList.style.display = 'none';
            cameraProductsList.style.display = 'none';
            laptopProductsList.style.display = 'none';
            mobileProductsList.style.display = 'none';
            headphoneProductsList.style.display = 'none';

            // Show the appropriate product list based on the selected filter
            switch (filter) {
                case 'all':
                    allProductsList.style.display = 'block';
                    break;
                case 'camera':
                    cameraProductsList.style.display = 'block';
                    break;
                case 'laptop':
                    laptopProductsList.style.display = 'block';
                    break;
                case 'mobile':
                    mobileProductsList.style.display = 'block';
                    break;
                case 'headphone':
                    headphoneProductsList.style.display = 'block';
                    break;
                default:
                    allProductsList.style.display = 'block';
            }
        }

        // Attach click event listeners to navigation items
        navItems.forEach(item => {
            item.addEventListener('click', handleNavClick);
        });
    });
</script>
