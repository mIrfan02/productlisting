@extends('layouts.app')
@section('content')
    <!-- ##################  Request a Qoute ################ -->

    <div class="container-fluid">
        <div class="text-center bg-request d-flex flex-column align-items-center justify-content-center ">
            <h1 class="fs-1"></h1>

            <div class="py-4 giftBg">


                <div class="row p-0 m-0">

                    <div class="col-md-12 text-center  p-0 p-md-1">
                        <h1 class="mainhweading">
                            Request A <span class="giftClr">Quote</span>
                        </h1>

                    </div>

                </div>
            </div>
            <div>
                <a class="text-decoration-none text-secondary" href="#">Home Page </a>
                <span class="text-secondary">></span>
                <a class="text-decoration-none text-secondary" href="#">Request a quote</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div>
                        <img class="w-100" src="{{ asset('/assets/img/freeqoute.png') }}" alt="request-pic" />
                    </div>
                    <div class="request-tittle-prag my-5">
                        <h2 class="fs-1 fw-semibold ">
                            Submit a <span> print job or request</span> a quote
                        </h2>
                    </div>
                    <p>
                        If you want to submit a print job or request a quote, the more
                        details you can provide, the more efficient the process will be!
                        Here’s some of the information we’ll need;
                    </p>
                    <p>
                        For most common printing jobs, like business cards, postcards,
                        basic documents, posters, plan prints, etc, we’ll need to know the
                        paperweight (in ‘gsm’ or grams per metre), paper type (matt, gloss
                        or silk/satin), whether it’s in colour or B&W, the size of the
                        print (which should match your artwork) and whether it’s single or
                        double-sided.
                    </p>
                    <p>
                        For booklets, in addition to the points above, you need to tell us
                        what binding option you want, if you want a different type of
                        paper for your cover to your content, and if there are any
                        ‘finishing’ options, like a laminated cov
                    </p>
                    <p>
                        If you need some Print Help on this, click on the relevant link
                        for – Print Help Basics, File Set Up or Booklet File Set Up
                    </p>
                    <p>
                        Or if you’d prefer to discuss the job in more detail, contact us
                        and we’ll be more than happy to walk you through it!
                    </p>
                </div>
                <div class="col-md-6 col-12">

                    <section class="my-5">
                        <div class="text-center settingmain">
                            {{-- <div class="row p-0 m-0 p-0 m-0">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h1 class="mainhweading"><span>Get A Free</span> Quote</h1>
                                    <p class="pt-3">There are many variations of passages of Lorem</p>
                                </div>
                                <div class="col-md-4"></div>
                            </div> --}}
                        </div>

                        <div class="formDiv mt-3" style="border-radius: 0px !important;">
                            <h1 class="bg-dark text-white text-center p-2 customHead">Get Custom Quote</h1>

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
                            <div class="mainnewqoute">
                                <div class=" pb-3 col-full">
                                    <form action="{{ route('quote.store') }}" method="post" id="quoteForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- below field for send url to email  --}}
                                        <input type="hidden" name="url" value="{{ request()->url() }}">

                                        <div class="row p-0 m-0 newqoute">
                                            <div class="col-md-12 p-0 p-md-1">
                                                <div class="form-row row ">
                                                    <div class="form-group col-sm-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="inputEmail4">Name</label>
                                                            <input type="text" name="name" class="form-control "
                                                                id="exampleFormControlInput1" placeholder="Name*" />
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-sm-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="inputPassword4">Phone</label>
                                                            <input type="text" name="phone" class="form-control "
                                                                id="exampleFormControlInput1" placeholder="Phone" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="inputPassword4">Email</label>
                                                            <input type="email" name="email" class="form-control "
                                                                id="exampleFormControlInput1" placeholder="Email*" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="product">Product</label>
                                                            <select class="form-select" name="product" id="productselects"
                                                                aria-label="Default select example">
                                                                <option selected disabled>Select Product</option>
                                                                @foreach (App\Models\Product::where('checkbox', 'Boxes By Style')->orWhere('checkbox', 'Boxes By Material')->get() as $product)
                                                                    <option value="{{ $product->id }}"
                                                                        data-price="{{ $product->price }}">
                                                                        {{ $product->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>





                                                    <div class="form-group col-md-6 mt-3">

                                                        <div class="mb-3">
                                                            <label for="printing">Printing</label>
                                                            <select class="form-select" name="printing"
                                                                aria-label="Default select example">
                                                                <option selected>None</option>
                                                                @foreach (App\Models\Printing::pluck('title') as $title)
                                                                    <option value="{{ $title }}">
                                                                        {{ $title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-md-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="material">Materials</label>
                                                            <select class="form-select" name="material"
                                                                aria-label="Default select example">
                                                                <option selected>None</option>
                                                                @foreach (App\Models\Material::pluck('title') as $title)
                                                                    <option value="{{ $title }}">
                                                                        {{ $title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-12 p-0 p-md-1">
                                                <div class="form-row row">

                                                    <div class="form-group col-lg-6 col-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="inputEmail4">Length</label>
                                                            <input type="text" class="form-control " name="length"
                                                                id="length" placeholder="Length" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-6 mt-3">

                                                        <div class="mb-3">
                                                            <label for="inputPassword4">Width</label>
                                                            <input type="text" class="form-control " name="width"
                                                                id="width" placeholder="Width" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-6 mt-3">

                                                        <div class="mb-3">
                                                            <label for>Height</label>
                                                            <input type="number" class="form-control " name="height"
                                                                id="height" placeholder="Height" />
                                                        </div>

                                                    </div>
                                                    <div class="form-group col-lg-6 col-6 mt-3">

                                                        <div class="mb-3">
                                                            <label for>Unit</label>
                                                            <select class="form-select " name="unit"
                                                                aria-label="Default select example">
                                                                <option selected>SelectUnit</option>
                                                                <option value="inch">inch</option>
                                                                <option value="cm">cm</option>
                                                                <option value="mm">mm</option>

                                                            </select>
                                                        </div>
                                                    </div>




                                                    <div class="form-group col-6 mt-3">

                                                        <div class="mb-3">
                                                            <label for="inputEmail4">Quantity 1</label>
                                                            <input type="number" name="quantity1" class="form-control "
                                                                id="quantity" placeholder="Qty" max="10" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="inputEmail4">Quantity 2</label>
                                                            <input type="number" name="quantity2" class="form-control "
                                                                id="quantity" placeholder="Qty" max="10" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-6 mt-3">
                                                        <div class="mb-3">
                                                            <label for="inputEmail4">Quantity 3</label>
                                                            <input type="number" name="quantity3" class="form-control "
                                                                id="quantity" placeholder="Qty" max="10" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6 mt-3">
                                                        <label for>Delivery Plan</label>
                                                        <select class="form-select rounded-2"
                                                            aria-label="Default select example" name="deadline">
                                                            <option selected>Select</option>
                                                            <option value="Standard Delivery">Standard Delivery
                                                            </option>
                                                            <option value="Expedite Delivery">Expedite Delivery</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label for="fileUpload">Upload File/Image</label>
                                                    <input type="file" name="fileUpload" class="form-control"
                                                        id="fileUpload" required>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3 form-group">
                                                <div class="mb-4 pb-2">
                                                    <label for="exampleFormControlTextarea1">Additional
                                                        Requirement</label>
                                                    <textarea class="form-control " name="description" id="exampleFormControlTextarea1" rows="3"
                                                        placeholder="Additional Requirement"></textarea>
                                                </div>
                                            </div>
                                            <form action="" class="captchaform">
                                                <div class="col-md-3"></div>

                                                {{-- <div class="col-md-6 py-2 my-4 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-evenly text-center"
                                                    style="border: 1px solid #f6f7fa">
                                                    <h6 class=" pt-2">Are you human or spambot?</h6>
                                                    <label class="submit__control">
                                                        <div>
                                                            <div class="submit__generated"></div>
                                                            <i class="fa fa-refresh refreshcaptcha"></i>
                                                        </div>
                                                    </label>
                                                </div> --}}

                                                <div class="col-md-3"></div>
                                            </form>
                                            <div class="col-12 mt-3 d-flex justify-content-center">
                                                <div class="img-wrapperinersecondsubmit">
                                                    <button class="btn btn-dark p-3 my-3"
                                                        type="submit">Packaging</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- <form action="#">
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
                                        <input type="text" class="form-control inputSHad" id="exampleFormControlInput1"
                                            placeholder="Name*" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control inputSHad" id="exampleFormControlInput1"
                                            placeholder="Email*" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control inputSHad" id="exampleFormControlInput1"
                                            placeholder="Phone" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select class="form-select inputSHad" aria-label="Default select example">
                                            <option selected> Select Product</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control inputSHad" id="exampleFormControlInput1"
                                            placeholder="Length" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control inputSHad" id="exampleFormControlInput1"
                                            placeholder="Width" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control inputSHad" id="exampleFormControlInput1"
                                            placeholder="Height" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <select class="form-select inputSHad" aria-label="Default select example">
                                            <option selected>Unit</option>
                                            <option value="1">in</option>
                                            <option value="2">mm</option>
                                            <option value="3">cm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select class="form-select inputSHad" aria-label="Default select example">
                                            <option selected> Select Printing</option>
                                            <option value="1">Outside Printing Only</option>
                                            <option value="2">Outside and Inside Printing
                                            </option>
                                            <!-- <option value="3">Three</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select class="form-select inputSHad" aria-label="Default select example">
                                            <option selected>Select Material</option>
                                            <option value="1">12pt Cardboard</option>
                                            <option value="2">14pt Cardboard</option>
                                            <option value="3">16pt Cardboard</option>
                                            <option value="3">18pt Cardboard</option>
                                            <option value="3">22pt Cardboard</option>
                                            <option value="3">24pt Cardboard</option>
                                            <option value="3">Brown Kraft</option>
                                            <option value="3">Corrugated</option>
                                            <option value="3">Rigid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control inputSHad"
                                            id="exampleFormControlInput1" placeholder="Qty1" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control inputSHad"
                                            id="exampleFormControlInput1" placeholder="Qty2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea class="form-control inputSHad" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Additional Requirement"></textarea>
                                    </div>
                                </div>
                                <form action="" class="captchaform">
                                    <div class="col-md-3"></div>

                                    <div class="col-md-6 py-2 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-evenly text-center"
                                        style="border: 1px solid #f6f7fa">
                                        <label class="submit__control">
                                            <div>
                                                <div class="submit__generated"></div>
                                                <!-- <i class="fa fa-refresh refreshcaptcha bg-dark"></i> -->
                                            </div>
                                        </label>
                                    </div>

                                    <div class="col-md-3"></div>
                                </form>

                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark p-3 my-3" type="button">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- ################### request a qoute end ############### -->
@endsection
