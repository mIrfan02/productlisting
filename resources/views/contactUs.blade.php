@extends('layouts.app')

@section('content')
    <div class="container-fluid  bgCont px-5">
        <div class="text-center settingmain my-5">
            <div class="row p-0 m-0 p-0 m-0">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mainhweading"><span>Contact</span>US</h1>
                    <p class="pt-3">There are many variations of passages of Lorem</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="row  my-5 py-3">
            <div class="col-md-6">
                <small>POPULAR PRODCTS</small>
                <h1>Get in touch with us</h1>
                <small class="mt-3">
                    Get in touch to discuss your employee wellbeing needs today. Please
                    give us a call, drop us an email or fill out the contact form and
                    we’ll get back to you.
                </small>
                <!-- details -->
                <div class="my-3">
                    <!-- single detail -->
                    <div class="d-flex align-items-start">
                        <span class="icon">
                            <i class="fa-solid fa-map-location-dot" style="color: #fab900; font-size: 24px"></i></span>
                        <div class="ms-2">
                            <h5>Headquarter</h5>
                            <p class="my-4">
                                Head Office: 785 15h Street, Office 478 Berlin, De 81566
                            </p>
                        </div>
                    </div>
                    <!-- single detail -->
                    <div class="d-flex align-items-start">
                        <span class="icon">
                            <i class="fa-solid fa-square-phone" style="color: #fab900; font-size: 24px"></i></span>
                        <div class="ms-2">
                            <h5>Phone Number</h5>
                            <p class="my-4">
                                Mobile: 084 3456 19 89 <br />
                                Hotline: 1900 26886
                            </p>
                        </div>
                    </div>
                    <!-- single detail -->
                    <div class="d-flex align-items-start">
                        <span class="icon">
                            <i class="fa-solid fa-envelope" style="color: #fab900; font-size: 24px"></i>
                        </span>
                        <div class="ms-2">
                            <h5>E-mail Us</h5>
                            <p class="my-4">hello@printec.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <di class="col-md-6 locationsetting">


                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.213161630699!2d73.07994391066526!3d33.6516382386669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df957b275e04af%3A0x5a0bf63abfc200fb!2sAlright%20Tech%20Private%20Limited!5e0!3m2!1sen!2s!4v1701171200846!5m2!1sen!2s"
                    style="width: 100%;" height="450" style="border: 0; border-radius: 30px" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <!-- <div class="zI-2">
                    <img class="img-fluid" src="./asset/img/quoteImg.png" alt="" />
                  </div> -->
            </di>
        </div>
    </div>

    <!--################> Get A Qouet Start <############## -->
    <section class="my-5 pb-5">
        <div class="text-center settingmain">
            <div class="row p-0 m-0 p-0 m-0">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mainhweading"><span>Send a</span> Message</h1>
                    <p class="pt-3">There are many variations of passages of Lorem</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="mainnewqoute">
            <div class="container pb-3">
                <form>
                    <div class="row p-0 m-0 d-flex justify-content-center   newqoute">
                        <div class="col-md-10 p-0 p-md-1">
                            <div class="form-row row rowPad">
                                <div class="form-group col-sm-6 mt-3">
                                    <label for="inputEmail4"></label>
                                    <input type="text" class="form-control py-3 rounded-5 fw-semibold " id="inputEmail4"
                                        placeholder="Name" />
                                </div>
                                <div class="form-group col-sm-6 mt-3">
                                    <label for="inputPassword4"></label>
                                    <input type="number" class="form-control py-3 rounded-5 fw-semibold"
                                        id="inputPassword4" placeholder="Phone" />
                                </div>

                                <div class="form-group col-sm-12 mt-3">
                                    <label for="inputPassword4"></label>
                                    <input type="email" class="form-control rounded-5 py-3 rounded-5 fw-semibold"
                                        id="inputPassword4" placeholder="Email" />
                                </div>

                                <div class="col-12 mt-4 form-group">
                                    <label for="exampleFormControlTextarea1"></label>

                                    <textarea class="form-control rounded-5 py-3 rounded-5 fw-semibold" id="exampleFormControlTextarea1"
                                        placeholder="Message" rows="7"></textarea>
                                </div>
                            </div>
                        </div>

                        <form action="" class="captchaform">
                            <div class="col-md-3"></div>

                            <div class="col-md-6 py-2 my-4 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-evenly text-center"
                                style="border: 1px solid gray">
                                <h6 class="text-black  pt-2">Are you human or spambot?</h6>
                                <label class="submit__control">
                                    <div>
                                        <div class="submit__generated"></div>
                                        <i class="fa fa-refresh refreshcaptcha"></i>
                                    </div>
                                </label>
                            </div>

                            <div class="col-md-3"></div>
                        </form>
                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <div class="img-wrapperinersecondsubmit">
                                <button class="px-5">Packaging</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
