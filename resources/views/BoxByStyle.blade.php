@extends('layouts.app')

@section('content')
    <section>
        <div class="Main-container d-flex justify-content-center align-items-center">
            <nav class=" " style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fs-6 "><a href="#">HomePage</a></li>
                    <li class="breadcrumb-item fs-6  active" aria-current="page">Category</li>
                </ol>
            </nav>

        </div>
    </section>
    <!-- new section start -->
    <section class="py-3 pt-4 ">
        <div class="col-full ">
            <h2 class="text-center py-2 ">Our Product</h2>
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <ul class="printec-products products columns-4">
                        @foreach (App\Models\Product::where('checkbox', 'Boxes By Style')->get() as $product)
                            <li
                                class="product-style-default service-product product type-product post-{{ $product->id }} status-publish first instock product_cat-{{ $product->category }} has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                <div class="product-block">
                                    <div class="content-product-imagin" style="margin-bottom: -10px;"></div>
                                    <div class="product-transition">
                                        <div class="product-image image-main">
                                            <img width="400" height="300" style="object-fit: cover;"
                                                src="{{ asset('uploads/Products/' . $product->image) }}"
                                                alt="{{ $product->name }}" decoding="async" loading="lazy">
                                        </div>
                                        <a href="{{ $product->permalink }}"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                    </div>
                                    <div class="product-caption">
                                        <h3 class="woocommerce-loop-product__title">
                                            <a href="{{ $product->permalink }}">{{ $product->name }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </main>
            </div>


        </div>
    </section>



<!--====== Gallery Section  Start ======-->
<section id="gallery" class="pb-5 px-2  px-md-5">
    <div class=" col-full">

      <div class="container-fluid p-0 px-md-4">
        <!-- Filterable Gallery -->
        <div class="row p-0 m-0">
          <div class="col-md-2"></div>
          <div class="col-md-8 p-0 m-0">
            <ul class="gallery_tabs">

              <li data-filter="camera" class="active ">Specification</li>
              <li data-filter="laptop">Packing Material</li>
              <li data-filter="mobile">Description</li>

            </ul>
          </div>
          <div class="col-md-2"></div>
        </div>

        <section class="pt-3  content_section active camera ">
          <div class="contain ">
            <div class="row  ">
              <div class="   col-5">
                <p class="Specifications">DIMENSIONS</p>
              </div>
              <div class="col-7  ">
                <p class="customSize">All Custom Sizes & Shapes </p>
              </div>
              <hr class="Hrtags">
            </div>
            <div class="row ">
              <div class=" col-5">
                <p class="Specifications">PRINTING</p>
              </div>
              <div class="col-7 ">
                <p class="customSize">CMYK, PMS, No Printing </p>
              </div>
              <hr class="Hrtags">
            </div>
            <div class="row ">
              <div class=" col-5">
                <p class="Specifications">PAPER STOCK</p>
              </div>
              <div class="col-7">
                <p class="customSize">10pt to 28pt (60lb to 400lb) Eco-Friendly Kraft, E-flute Corrugated, Bux Board,
                  Cardstock

                </p>
              </div>
              <hr class="Hrtags">
            </div>
            <div class="row ">
              <div class=" col-5">
                <p class="Specifications">QUANTITIES</p>
              </div>
              <div class="col-7">
                <p class="customSize">100 – 500,000 </p>
              </div>
              <hr class="Hrtags">
            </div>
            <div class="row ">
              <div class=" col-5">
                <p class="Specifications">COATING</p>
              </div>
              <div class="col-7">
                <p class="customSize">Gloss, Matte, Spot UV</p>
              </div>
              <hr class="Hrtags">
            </div>
            <div class="row camera">
              <div class=" col-5">
                <p class="Specifications">OPTIONS</p>
              </div>
              <div class="col-7">
                <p class="customSize">Custom Window Cut Out, Gold/Silver Foiling, Embossing, Raised Ink, PVC Sheet.
                  s </p>
              </div>
              <hr class="Hrtags">
            </div>
          </div>
        </section>

        <section class="py-3 content_section mobile">
          <div class="">
            <h2 class="fs-3 Discrip ">How Can I Find Printing Services Near Me?
            </h2>
            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi explicabo
              necessitatibus eligendi enim porro cumque facilis tempora possimus mollitia? Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Quos magnam reiciendis, aut nisi molestias eaque ipsam quam quasi quas eos.
            </p>
          </div>
          <div class=" ">
            <h2 class="fs-3 Discrip">Business Cards Online Printing
            </h2>
            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi explicabo
              necessitatibus eligendi enim porro cumque facilis tempora possimus mollitia? Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Quos magnam reiciendis, aut nisi molestias eaque ipsam quam quasi quas eos.
            </p>
          </div>
          <div class="">
            <h2 class="fs-3 Discrip">Custom Stickers and Labels Printing

            </h2>
            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi explicabo
              necessitatibus eligendi enim porro cumque facilis tempora possimus mollitia? Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Quos magnam reiciendis, aut nisi molestias eaque ipsam quam quasi quas eos.
            </p>
          </div>
          <div class="">
            <h2 class="fs-3 Discrip">Custom Flyers and Brochures Printing </h2>
            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi explicabo
              necessitatibus eligendi enim porro cumque facilis tempora possimus mollitia? Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Quos magnam reiciendis, aut nisi molestias eaque ipsam quam quasi quas eos.
            </p>
          </div>
        </section>

        <section class="laptop content_section pt-3 ">
          <div class="row">
            <div class="col-md-3  col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/SBS-C1S.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>
            <div class="col-md-3   col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/SBS-C1S.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>
            <div class="col-md-3  col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/CCNB.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>
            <div class="col-md-3  col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/Natural-Brown-Kraft.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3   col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/Metallic-Paper.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>
            <div class="col-md-3   col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/Uncoated-Unbleached-Kraft-UUK.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>
            <div class="col-md-3   col-6">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/CCNB.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>
            <div class="col-md-3 col-6 ">
              <div class="d-flex flex-column justify-content-center align-items-center  ">
                <img class=" w-50 py-2 " src="{{asset('/assets/img/Black-Kraft.webp')}}" alt="">
                <h2 class="py-2 fs-4  ">SBS C1S</h2>
              </div>
            </div>

          </div>
        </section>

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
  </section>


    <!--====== Gallery Section  End ======-->
    <!-- banner section  -->
    <section class="Banersection col-full " style="padding-inline: 24.5px;">
        <div class=" banr-section d-flex ">
            <div class="row px-2  ">
                <div class="col-md-6 d-flex justify-content-center align-items-center ">

                    <img class="w-25 " src="./asset/img/letter-1.png" alt="">
                    <h2 class="text-center text-white fs-md-2 pt-5  ">Sign up for exclusive offers from us</h2>

                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center ">
                    <p class="text-white  fs-6 text-center  ">Sign up to your newsletter for all the latest news and
                        our villa
                        exclusives promotion.</p>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" value="Submit" class="btn-Bgtheme  btn-theme">
                            <span>subscribe</span>
                            <i aria-hidden="true" class="printec-icon- printec-icon-right-arrow"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
