   <!--#################> Footer Start <############### -->
   <section class="fot-top">
       <div class="line w-100 ">
       </div>
       <!-- footerTop starts  -->
       <div class="container-sm footerTop px-2 px-md-4 py-3 row">
           <div class="location d-flex col-12 col-sm-6 col-md-4 col-lg-3 mt-3 p-0 p-md-1">
               <div class="locationIcon d-flex justify-content-center align-items-center">
                   <i class="fa-solid fa-location-dot"></i>
               </div>
               <div class="locationText mt-1 ms-3">
                   <span class="text-uppercase">Our Location</span>
                   <br />
                   <small>90 State Street, Albany</small>
               </div>
           </div>

           <div class="call d-flex col-12 col-sm-6 col-md-4 col-lg-3 mt-3 p-0 p-md-1">
               <div class="callIcon d-flex justify-content-center align-items-center mt-1">
                   <i class="fa-solid fa-phone masterphone"></i>
               </div>
               <div class="callText mt-1 ms-3">
                   <span class="text-uppercase">Call Us</span> <br />
                   <small>315 210 8020</small>
               </div>
           </div>

           <div class="whatsapp d-flex col-12 col-sm-6 col-md-4 col-lg-3 mt-3 p-0 p-md-1">
               <div class="whatsappIcon d-flex justify-content-center align-items-center mt-1">
                   <i class="fa-brands fa-whatsapp"></i>
               </div>
               <div class="whatsappText mt-1 ms-3">
                   <span class="text-uppercase">whatsapp</span> <br />
                   <small>716 815 6064 </small>
               </div>
           </div>
           <div class="email d-flex col-12 col-sm-6 col-md-4 col-lg-3 mt-3 p-0 p-md-1">
               <div class="emailIcon d-flex justify-content-center align-items-center">
                   <i class="fa-regular fa-envelope"></i>
               </div>
               <div class="emailText mt-1 ms-3">
                   <span class="text-uppercase">email us</span> <br />
                   <small>sales@ibexpackaging.com </small>
               </div>
           </div>
       </div>

       <!-- footerTop ends  -->

       <!-- footer starts  -->
       <footer class="footer mt-5 container-fluid pt-5" style="padding-top: 100px !important;">
           <div class="footerContent row mx-md-2 d-flex flex-wrap">
               <!-- Footer Info -->
               <div class="footerInfo col-12 col-md-6 col-lg-3 d-flex flex-column gap-4 mb-4 align-items-start">
                   <div class="footerInfoLogo">
                       <img src="{{ asset('/assets/img/Logo.svg') }}" alt="Logo" />
                   </div>
                   <div class="footerInfoText">
                       <p class="ftext text-start text-md-start">
                           Distrusts delighted Excuse few the remain highly feebly add
                           people manner say. It high at my mind by roof.
                       </p>
                   </div>
                   <div class="footerInfoSmlinks d-flex gap-2">
                       <div><i class="fa-brands fa-facebook-f"></i></div>
                       <div><i class="fa-brands fa-twitter mt-1"></i></div>
                       <div><i class="fa-brands fa-instagram mt-1"></i></div>
                       <div><i class="fa-brands fa-pinterest mt-1"></i></div>
                   </div>
               </div>

               <!-- Footer Contact -->
               <div
                   class="footerContact col-12 col-md-6 col-lg-3 justify-content-center align-items-start d-flex mb3 flex-column">
                   <h5 class="text-capitalize mb-4">get in touch</h5>
                   <p class="ftext m-0 lh-lg text-start">
                       2972 Westheimer Rd. Santa Ana, Illinois 85486 <br />
                       support@example.com
                   </p>
                   <br />
                   <h5 class="fw500 ftext cn">+ (406) 555-0120</h5>
               </div>

               <!-- Footer Links -->
               <div
                   class="footerLinks col-12 col-md-12 col-lg-6 m-0 d-flex justify-content-between pe-5 flex-column flex-md-row align-items-start mt-4">
                   <div class="Info">
                       <h5 class="text-capitalize mb-4">information</h5>
                       <ul class="lh-lg">
                           <li class="text-capitalize">
                               <a class="fw500" href="#">Help center</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">shipping</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">returns</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">policies</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">gift cards</a>
                           </li>
                       </ul>
                   </div>
                   <div class="Usefull">
                       <h5 class="text-capitalize mb-4">Useful links</h5>
                       <ul class="lh-lg">
                           <li class="text-capitalize">
                               <a class="fw500" href="#">My Account</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">Order Tracking</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="{{ route('productcateg') }}">All Products</a>
                           </li>

                           <li class="text-capitalize">
                               <a class="fw500" href="#">Service Detail</a>
                           </li>
                       </ul>
                   </div>
                   <div class="About">
                       <h5 class="text-capitalize mb-4">About us</h5>
                       <ul class="lh-lg">
                           <li class="text-capitalize">
                               <a class="fw500" href="#">Our story</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="{{ route('contactus') }}">Contacts</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">Affiliate Program</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">Referral Program</a>
                           </li>
                           <li class="text-capitalize">
                               <a class="fw500" href="#">careers</a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>

           <div class="footerbottom">
               <p class="pt-2">CopyWrite @2023.Allright Reserved</p>
           </div>
       </footer>
       <!-- footer ends  -->
   </section>
   <!--#################> Footer End <############### -->
