<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./uploads/elementor/css/post-85980e9b.css">
    <link rel="stylesheet" href="./uploads/elementor/css/custom-frontend.min90b6.css">
    <!-- Add Slick Slider Theme CSS (optional) -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Add jQuery (required by Slick Slider) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Add Slick Slider JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!--###############> AOS Animation Style Start <#################  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    {{-- --------------------CSS links--------------------- --}}
    @include('Layout.links')
    <style>
        .card-img img {
            width: 300px !important;
            height: 300px !important;
            /* border: 1px solid #000; */
        }
    </style>
    <style>
        .request-tittle-prag h2 span {
            color: #8500fe !important;
        }

        /* ###################nav bar CSS############## */
        .searchInput input {

            width: 100%;
            outline: none;
            border: none;

            padding: 0 0px 0 20px;
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);

            width: 100%;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 30px;
            width: 265px;
        }

        .searchInput input::placeholder {

            font-size: 16px;
        }



        .searchInput .resultBox {
            padding: 0;
            opacity: 0;
            pointer-events: none;
            overflow-y: auto;
            position: absolute;
            /* Position the suggestion box absolutely */
            top: 100%;
            /* Position it below the input */
            /* left: 0; */
            z-index: 999;
            /* Ensure it's above other content */
            background-color: #fff;
            /* Add background color */
            width: 100%;
            /* Set width to match the input */
            border-radius: 0 0 5px 5px;
            /* Match border radius of input */
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .searchInput.active .resultBox {
            padding: 10px 8px;
            opacity: 1;
            width: 278px;
            margin-top: 5px;
            pointer-events: auto;
        }

        .resultBox li {
            list-style: none;
            padding: 8px 12px;
            display: none;
            width: 100%;
            cursor: default;
            border-radius: 3px;
        }

        .searchInput.active .resultBox li {
            display: block;
        }

        .resultBox li:hover {
            background: #efefef;
        }

        .searchInput .icon {
            position: absolute;
            right: 0px;
            top: -4px;
            /* height: 55px; */
            width: 55px;
            text-align: center;
            line-height: 55px;
            font-size: 14px;
            color: #888;

            cursor: pointer;
        }

        .sugestionsearch {
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;


        }

        .sugestionsearch:hover {
            cursor: pointer;
        }

        .sugestionsearch span {
            position: absolute;
            top: 30px;
            right: 30px;

            color: #125DFC;
        }

        .sugestionsearch img {
            width: 100px;
        }





        .nav-bg.sticky {
            position: fixed;
            top: 0;
            left: 0px;
            padding-left: 20px;
            padding-right: 20px;
            width: 100%;
            z-index: 1000;
            /* Adjust z-index as needed */

        }

        .logo {


            display: inline-block;
            transition: all 0.3s ease;
            /* Add transition for smooth effect */
        }

        .shadTwo .img-fluid {
            height: 147px !important;
        }

        .sticklogo img {
            display: none;
        }



        .fa-message,
        .fa-phone {
            background-color: #125DFC !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }
    </style>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .captchaform {
            position: relative;
            margin: 20px auto;
            width: 300px;
        }

        .submit__generated {
            display: inline-block;
        }

        .submit__generated span {
            display: inline-block;
            width: 35px;
            height: 35px;
            vertical-align: center;
            line-height: 35px;
            font-weight: bold;
            font-size: 16px;
            /* color: White; */
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid white;
            border-radius: 4px;
        }

        .submit__generated.valid:after,
        .submit__generated.unvalid:after {
            font-family: FontAwesome;
            font-size: 18px;
            margin-left: 10px;
        }

        .submit__generated.valid:after {
            content: "\f00c";
            color: #2ecc71;
        }

        .submit__generated.unvalid:after {
            content: "\f00d";
            color: #e74c3c;
        }

        .submit__generated.valid .submit__input {
            border: 1px solid #2ecc71;
            color: #2ecc71 !important;
        }

        .submit__generated.unvalid .submit__input {
            border: 1px solid #e74c3c;
            color: #e74c3c;
        }

        .submit__generated .submit__input {
            position: relative;
            outline: 0;
            height: 35px;
            width: 35px;
            border-radius: 4px;
            border: 1px solid #42a0dd;
            color: #42a0dd;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            top: -2px;
        }

        .refreshcaptcha {
            margin: 4px 0 0px 5px;
            padding: 5px;
            font-size: 18px;
            color: White;
            cursor: pointer;
            transform-origin: center center;
            transition: transform 0.2s ease-out, color 0.2s ease-out;
        }

        .refreshcaptcha:hover {
            color: white;
            transform: rotate(180deg);
        }

        .submit__error,
        .submit__error--empty {
            color: #e74c3c;
            position: absolute;
            margin-top: 0px;
            margin-left: 100px;
        }

        .submit {
            display: block;
            margin: 50px 0;
            padding: 7px 15px;
            font-weight: bold;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            text-transform: uppercase;
            outline: none;
            border: 0;
            background-color: #42a0dd;
            background-clip: padding-box;
            border-radius: 3px;
            box-shadow: 0 4px 0 #2c81ba;
            opacity: 1;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out;
        }

        .submit:hover {
            background-color: #3498db;
        }

        .submit:active,
        .submit.enter-press,
        .submit.overlay {
            margin: 55px 0 46px 0;
            box-shadow: none;
        }

        .submit__overlay {
            height: 50px;
            width: 110px;
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            margin-top: -90px;
            margin-left: -5px;
        }

        .low-opa {
            opacity: 0.4;
        }

        .fadeOut {
            opacity: 0;
            transform: translateY(10px);
        }

        .fadeIn {
            opacity: 1 !important;
            transform: translateY(0px) !important;
        }

        .bgBefore {
            position: relative;
        }

        .bgBefore::after {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background-color: #fab900;
            top: -40px;
            left: 110px;
            z-index: -1;
        }

        .zI-2 {
            z-index: 3;
        }
    </style>>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .captchaform {
            position: relative;
            margin: 20px auto;
            width: 300px;
        }

        .submit__generated {
            display: inline-block;
        }

        .submit__generated span {
            display: inline-block;
            width: 35px;
            height: 35px;
            vertical-align: center;
            line-height: 35px;
            font-weight: bold;
            font-size: 16px;
            /* color: White; */
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid white;
            border-radius: 4px;
        }

        .submit__generated.valid:after,
        .submit__generated.unvalid:after {
            font-family: FontAwesome;
            font-size: 18px;
            margin-left: 10px;
        }

        .submit__generated.valid:after {
            content: "\f00c";
            color: #2ecc71;
        }

        .submit__generated.unvalid:after {
            content: "\f00d";
            color: #e74c3c;
        }

        .submit__generated.valid .submit__input {
            border: 1px solid #2ecc71;
            color: #2ecc71 !important;
        }

        .submit__generated.unvalid .submit__input {
            border: 1px solid #e74c3c;
            color: #e74c3c;
        }

        .submit__generated .submit__input {
            position: relative;
            outline: 0;
            height: 35px;
            width: 35px;
            border-radius: 4px;
            border: 1px solid #42a0dd;
            color: #42a0dd;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            top: -2px;
        }

        .refreshcaptcha {
            margin: 4px 0 0px 5px;
            padding: 5px;
            font-size: 18px;
            color: White;
            cursor: pointer;
            transform-origin: center center;
            transition: transform 0.2s ease-out, color 0.2s ease-out;
        }

        .refreshcaptcha:hover {
            color: white;
            transform: rotate(180deg);
        }

        .submit__error,
        .submit__error--empty {
            color: #e74c3c;
            position: absolute;
            margin-top: 0px;
            margin-left: 100px;
        }

        .submit {
            display: block;
            margin: 50px 0;
            padding: 7px 15px;
            font-weight: bold;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            text-transform: uppercase;
            outline: none;
            border: 0;
            background-color: #42a0dd;
            background-clip: padding-box;
            border-radius: 3px;
            box-shadow: 0 4px 0 #2c81ba;
            opacity: 1;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out;
        }

        .submit:hover {
            background-color: #3498db;
        }

        .submit:active,
        .submit.enter-press,
        .submit.overlay {
            margin: 55px 0 46px 0;
            box-shadow: none;
        }

        .submit__overlay {
            height: 50px;
            width: 110px;
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            margin-top: -90px;
            margin-left: -5px;
        }

        .low-opa {
            opacity: 0.4;
        }

        .fadeOut {
            opacity: 0;
            transform: translateY(10px);
        }

        .fadeIn {
            opacity: 1 !important;
            transform: translateY(0px) !important;
        }

        .bgBefore {
            position: relative;
        }

        .bgBefore::after {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background-color: #fab900;
            top: -40px;
            left: 110px;
            z-index: -1;
        }

        .zI-2 {
            z-index: 3;
        }



        /* ###################nav bar CSS############## */
        .searchInput input {

            width: 100%;
            outline: none;
            border: none;

            padding: 0 0px 0 20px;
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);

            width: 100%;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 30px;
            width: 265px;
        }

        .searchInput input::placeholder {

            font-size: 16px;
        }



        .searchInput .resultBox {
            padding: 0;
            opacity: 0;
            pointer-events: none;
            overflow-y: auto;
            position: absolute;
            /* Position the suggestion box absolutely */
            top: 100%;
            /* Position it below the input */
            /* left: 0; */
            z-index: 999;
            /* Ensure it's above other content */
            background-color: #fff;
            /* Add background color */
            width: 100%;
            /* Set width to match the input */
            border-radius: 0 0 5px 5px;
            /* Match border radius of input */
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .searchInput.active .resultBox {
            padding: 10px 8px;
            opacity: 1;
            width: 278px;
            margin-top: 5px;
            pointer-events: auto;
        }

        .resultBox li {
            list-style: none;
            padding: 8px 12px;
            display: none;
            width: 100%;
            cursor: default;
            border-radius: 3px;
        }

        .searchInput.active .resultBox li {
            display: block;
        }

        .resultBox li:hover {
            background: #efefef;
        }

        .searchInput .icon {
            position: absolute;
            right: 0px;
            top: -4px;
            /* height: 55px; */
            width: 55px;
            text-align: center;
            line-height: 55px;
            font-size: 14px;
            color: #888;

            cursor: pointer;
        }

        .sugestionsearch {
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;


        }

        .sugestionsearch:hover {
            cursor: pointer;
        }

        .sugestionsearch span {
            position: absolute;
            top: 30px;
            right: 30px;

            color: #125DFC;
        }

        .sugestionsearch img {
            width: 100px;
        }





        .nav-bg.sticky {
            position: fixed;
            top: 0;
            left: 0px;
            padding-left: 20px;
            padding-right: 20px;
            width: 100%;
            z-index: 1000;
            /* Adjust z-index as needed */

        }

        .logo {


            display: inline-block;
            transition: all 0.3s ease;
            /* Add transition for smooth effect */
        }

        .sticklogo img {
            display: none;
        }

        .fa-phone {
            background-color: transparent !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }

        .fa-message {
            background-color: #125DFC !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }
    </style>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .captchaform {
            position: relative;
            margin: 20px auto;
            width: 300px;
        }

        .submit__generated {
            display: inline-block;
        }

        .submit__generated span {
            display: inline-block;
            width: 35px;
            height: 35px;
            vertical-align: center;
            line-height: 35px;
            font-weight: bold;
            font-size: 16px;
            color: White;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid white;
            border-radius: 4px;
        }

        .submit__generated.valid:after,
        .submit__generated.unvalid:after {
            font-family: FontAwesome;
            font-size: 18px;
            margin-left: 10px;
        }

        .submit__generated.valid:after {
            content: "\f00c";
            color: #2ecc71;
        }

        .submit__generated.unvalid:after {
            content: "\f00d";
            color: #e74c3c;
        }

        .submit__generated.valid .submit__input {
            border: 1px solid #2ecc71;
            color: #2ecc71 !important;
        }

        .submit__generated.unvalid .submit__input {
            border: 1px solid #e74c3c;
            color: #e74c3c;
        }

        .submit__generated .submit__input {
            position: relative;
            outline: 0;
            height: 35px;
            width: 35px;
            border-radius: 4px;
            border: 1px solid #42a0dd;
            color: #42a0dd;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            top: -2px;
        }

        .refreshcaptcha {
            margin: 4px 0 0px 5px;
            padding: 5px;
            font-size: 18px;
            color: White;
            cursor: pointer;
            transform-origin: center center;
            transition: transform 0.2s ease-out, color 0.2s ease-out;
        }

        .refreshcaptcha:hover {
            color: white;
            transform: rotate(180deg);
        }

        .submit__error,
        .submit__error--empty {
            color: #e74c3c;
            position: absolute;
            margin-top: 0px;
            margin-left: 100px;
        }

        .submit {
            display: block;
            margin: 50px 0;
            padding: 7px 15px;
            font-weight: bold;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            text-transform: uppercase;
            outline: none;
            border: 0;
            background-color: #42a0dd;
            background-clip: padding-box;
            border-radius: 3px;
            box-shadow: 0 4px 0 #2c81ba;
            opacity: 1;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out;
        }

        .submit:hover {
            background-color: #3498db;
        }

        .submit:active,
        .submit.enter-press,
        .submit.overlay {
            margin: 55px 0 46px 0;
            box-shadow: none;
        }

        .submit__overlay {
            height: 50px;
            width: 110px;
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            margin-top: -90px;
            margin-left: -5px;
        }

        .low-opa {
            opacity: 0.4;
        }

        .fadeOut {
            opacity: 0;
            transform: translateY(10px);
        }

        .fadeIn {
            opacity: 1 !important;
            transform: translateY(0px) !important;
        }

        /* new Csss */
        .banr-section {
            background-image: url(./assets/img/h5-bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            /* height: 50vh !important; */
            height: 50vh;
            border-radius: 20px;
        }

        .btn-Bgtheme {
            cursor: pointer;
            padding: 15px 30px;
            text-decoration: none;
            text-shadow: none;
            background-color: #7000fe;
            border: none;
            border-radius: 50px;
            font-size: 15px;
            color: white;
        }

        @media(max-width:1250px) {
            .banr-section {
                height: 120vh !important;
            }
        }

        @media(max-width:786px) {
            .banr-section {
                height: 150vh !important;
            }
        }

        .Specifications {
            font-size: 15px;
            color: #777777;
            letter-spacing: 0.5px;
        }

        .customSize {
            font-size: 15px;
            color: #777777;
            letter-spacing: 0.5px;
        }

        .Hrtags {
            height: 2px;
            background-color: #777777;
            width: 100%;
        }

        .Discrip {
            line-height: 2rem;
        }

        .fa-phone {
            background-color: transparent !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }

        /* Add your CSS styles here */
        .content_section {
            display: none;
        }

        .content_section.active {
            display: block;
        }


        /* ###################nav bar CSS############## */
        .searchInput input {

            width: 100%;
            outline: none;
            border: none;

            padding: 0 0px 0 20px;
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);

            width: 100%;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 30px;
            width: 265px;
        }

        .searchInput input::placeholder {

            font-size: 16px;
        }



        .searchInput .resultBox {
            padding: 0;
            opacity: 0;
            pointer-events: none;
            overflow-y: auto;
            position: absolute;
            /* Position the suggestion box absolutely */
            top: 100%;
            /* Position it below the input */
            /* left: 0; */
            z-index: 999;
            /* Ensure it's above other content */
            background-color: #fff;
            /* Add background color */
            width: 100%;
            /* Set width to match the input */
            border-radius: 0 0 5px 5px;
            /* Match border radius of input */
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .searchInput.active .resultBox {
            padding: 10px 8px;
            opacity: 1;
            width: 278px;
            margin-top: 5px;
            pointer-events: auto;
        }

        .resultBox li {
            list-style: none;
            padding: 8px 12px;
            display: none;
            width: 100%;
            cursor: default;
            border-radius: 3px;
        }

        .searchInput.active .resultBox li {
            display: block;
        }

        .resultBox li:hover {
            background: #efefef;
        }

        .searchInput .icon {
            position: absolute;
            right: 0px;
            top: -4px;
            /* height: 55px; */
            width: 55px;
            text-align: center;
            line-height: 55px;
            font-size: 14px;
            color: #888;

            cursor: pointer;
        }

        .sugestionsearch {
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;


        }

        .sugestionsearch:hover {
            cursor: pointer;
        }

        .sugestionsearch span {
            position: absolute;
            top: 30px;
            right: 30px;

            color: #125DFC;
        }

        .sugestionsearch img {
            width: 100px;
        }

        .nav-bg.sticky {
            position: fixed;
            top: 0;
            left: 0px;
            padding-left: 20px;
            padding-right: 20px;
            width: 100%;
            z-index: 1000;
            /* Adjust z-index as needed */

        }

        .logo {


            display: inline-block;
            transition: all 0.3s ease;
            /* Add transition for smooth effect */
        }

        .sticklogo img {
            display: none;
        }



        .phoneicons {
            background-color: #125DFC !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }

        .fa-message {
            background-color: #125DFC !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }

        .Main-container {
            background-image: url('./assets/img/global_bc.jpg');
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100% 100%;
            height: 30vh;

        }

        @media(max-width:600px) {
            .content_section {
                padding-inline: 30px;
            }
        }
    </style>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .captchaform {
            position: relative;
            margin: 20px auto;
            width: 300px;
        }

        .submit__generated {
            display: inline-block;
        }

        .submit__generated span {
            display: inline-block;
            width: 35px;
            height: 35px;
            vertical-align: center;
            line-height: 35px;
            font-weight: bold;
            font-size: 16px;

            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid white;
            border-radius: 4px;
        }

        .submit__generated.valid:after,
        .submit__generated.unvalid:after {
            font-family: FontAwesome;
            font-size: 18px;
            margin-left: 10px;
        }

        .submit__generated.valid:after {
            content: "\f00c";
            color: #2ecc71;
        }

        .submit__generated.unvalid:after {
            content: "\f00d";
            color: #e74c3c;
        }

        .submit__generated.valid .submit__input {
            border: 1px solid #2ecc71;
            color: #2ecc71 !important;
        }

        .submit__generated.unvalid .submit__input {
            border: 1px solid #e74c3c;
            color: #e74c3c;
        }

        .submit__generated .submit__input {
            position: relative;
            outline: 0;
            height: 35px;
            width: 35px;
            border-radius: 4px;
            border: 1px solid #42a0dd;
            color: #42a0dd;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            top: -2px;
        }

        .refreshcaptcha {
            margin: 4px 0 0px 5px;
            padding: 5px;
            font-size: 18px;
            /* color: White; */
            cursor: pointer;
            transform-origin: center center;
            transition: transform 0.2s ease-out, color 0.2s ease-out;
        }

        .refreshcaptcha:hover {
            color: white;
            transform: rotate(180deg);
        }

        .submit__error,
        .submit__error--empty {
            color: #e74c3c;
            position: absolute;
            margin-top: 0px;
            margin-left: 100px;
        }

        .submit {
            display: block;
            margin: 50px 0;
            padding: 7px 15px;
            font-weight: bold;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            text-transform: uppercase;
            outline: none;
            border: 0;
            background-color: #42a0dd;
            background-clip: padding-box;
            border-radius: 3px;
            box-shadow: 0 4px 0 #2c81ba;
            opacity: 1;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out;
        }

        .submit:hover {
            background-color: #3498db;
        }

        .submit:active,
        .submit.enter-press,
        .submit.overlay {
            margin: 55px 0 46px 0;
            box-shadow: none;
        }

        .submit__overlay {
            height: 50px;
            width: 110px;
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            margin-top: -90px;
            margin-left: -5px;
        }

        .low-opa {
            opacity: 0.4;
        }

        .fadeOut {
            opacity: 0;
            transform: translateY(10px);
        }

        .fadeIn {
            opacity: 1 !important;
            transform: translateY(0px) !important;
        }

        .masterrowgrid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
    </style>
    {{-- ---------validation script link----------- --}}
    <style>
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
    {{-- --------------------------Themelink--------------------- --}}
    @include('Layout.themelink')

    <style>
        .lastsection {
            padding-left: 30px;
        }


        .elementor-column.elementor-col-33 {
            width: 36%;
        }

        .elementor-column.elementor-col-66 {
            width: 64%;
        }

        @media(max-width:554px) {
            .lastsection {
                padding-left: 15px;
                padding-right: 15px;
            }

            .elementor-column.elementor-col-33 {
                width: 100%;
            }

            .elementor-column.elementor-col-66 {
                width: 100%;
            }
        }
    </style>
    <style>
        .searchInput input {

            width: 100%;
            outline: none;
            border: none;

            padding: 0 0px 0 20px;
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);

            width: 100%;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 30px;
            width: 265px;
        }

        .searchInput input::placeholder {

            font-size: 16px;
        }

        .searchInput .resultBox {
            padding: 0;
            opacity: 0;
            pointer-events: none;
            overflow-y: auto;
            position: absolute;
            top: 100%;
            z-index: 999;
            background-color: #fff;
            width: 100%;
            border-radius: 0 0 5px 5px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .searchInput.active .resultBox {
            padding: 10px 8px;
            opacity: 1;
            width: 278px;
            margin-top: 5px;
            pointer-events: auto;
        }

        .resultBox li {
            list-style: none;
            padding: 8px 12px;
            display: none;
            width: 100%;
            cursor: default;
            border-radius: 3px;
        }

        .searchInput.active .resultBox li {
            display: block;
        }

        .resultBox li:hover {
            background: #efefef;
        }

        .searchInput .icon {
            position: absolute;
            right: 0px;
            top: -4px;
            /* height: 55px; */
            width: 55px;
            text-align: center;
            line-height: 55px;
            font-size: 14px;
            color: #888;

            cursor: pointer;
        }

        .sugestionsearch {
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;


        }

        .sugestionsearch:hover {
            cursor: pointer;
        }

        .sugestionsearch span {
            position: absolute;
            top: 30px;
            right: 30px;

            color: #125DFC;
        }

        .sugestionsearch img {
            width: 100px;
        }

        .nav-bg.sticky {
            position: fixed;
            top: 0;
            left: 0px;
            padding-left: 20px;
            padding-right: 20px;
            width: 100%;
            z-index: 1000;

        }

        .logo {


            display: inline-block;
            transition: all 0.3s ease;
        }

        .sticklogo img {
            display: none;
        }



        .fa-message,
        .fa-phone {
            background-color: #125DFC !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }

        .masterphone {
            background-color: transparent !important;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }


        .inner-imgmain:hover {
            transform: scale(1.06);
            cursor: pointer;
        }




        /* style */
        .Boxstyle {
            font-size: 12px;
            font-weight: 600;
            line-height: 18px;
            letter-spacing: 2px;
            color: #fff !important;
        }

        .Boxstylesecond {
            font-size: 36px;
            font-weight: 600;
            text-transform: none;
            line-height: 40px;
            letter-spacing: -1px;
            color: #fff;
        }

        .Boxstylebtn span {



            font-size: 14px;
            font-weight: 600;
            line-height: 1.7142857143;
            border-radius: 30px;
            cursor: pointer;

            text-decoration: none;
            text-shadow: none;
            -webkit-appearance: none;
            border: none;
            color: black;
            background-color: white
        }

        .Boxstylebtn:hover span {



            font-size: 14px;
            font-weight: 600;
            line-height: 1.7142857143;
            border-radius: 30px;
            cursor: pointer;

            text-decoration: none;
            text-shadow: none;
            -webkit-appearance: none;
            border: none;
            color: black;
            background-color: white
        }


        .sec2_custom-button2 {
            background-color: white;
            border-radius: 40px;

        }

        .sec2_custom-button2:hover {
            background-color: #125DFC;
            color: white;

        }

        .sec2_custom-button1 {
            background-color: #125DFC;
            border-radius: 40px;
            color: white;
        }

        .sec2_custom-button {
            background-color: white;
            border-radius: 40px;
            color: black;
        }
    </style>

    <title>Document</title>
</head>

<body>
    @include('Layout.navbar')
    <main>
        @yield('content')
    </main>
    {{-- -------------------script start-------------- --}}
    @include('Layout.footer')

    <script src="{{ asset('/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>
    <script src="{{ asset('/assets/js/gallary.js') }}"></script>

    <script>
        const accordionItemHeaders = document.querySelectorAll(
            ".accordion-item-header"
        );

        accordionItemHeaders.forEach((accordionItemHeader) => {
            accordionItemHeader.addEventListener("click", (event) => {
                // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

                const currentlyActiveAccordionItemHeader = document.querySelector(
                    ".accordion-item-header.active"
                );
                if (
                    currentlyActiveAccordionItemHeader &&
                    currentlyActiveAccordionItemHeader !== accordionItemHeader
                ) {
                    currentlyActiveAccordionItemHeader.classList.toggle("active");
                    currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                }
                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight =
                        accordionItemBody.scrollHeight + "px";
                } else {
                    accordionItemBody.style.maxHeight = 0;
                }
            });
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!--###############> AOS Animatoion End<###############  -->

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <script>
        var a,
            b,
            c,
            submitContent,
            captcha,
            locked,
            validSubmit = false,
            timeoutHandle;

        // Generating a simple sum (a + b) to make with a result (c)
        function generateCaptcha() {
            a = Math.ceil(Math.random() * 10);
            b = Math.ceil(Math.random() * 10);
            c = a + b;
            submitContent =
                "<span>" +
                a +
                "</span> + <span>" +
                b +
                "</span>" +
                ' = <input class="submit__input" type="text" maxlength="2" size="2" required />';
            $(".submit__generated").html(submitContent);

            init();
        }

        // Check the value 'c' and the input value.
        function checkCaptcha() {
            if (captcha === c) {
                // Pop the green valid icon
                $(".submit__generated").removeClass("unvalid").addClass("valid");
                $(".submit").removeClass("overlay");
                $(".submit__overlay").fadeOut("fast");

                validSubmit = true;
            } else {
                // Pop the red unvalid icon
                $(".submit__generated").removeClass("valid").addClass("unvalid");
                $(".submit").addClass("overlay");
                $(".submit__overlay").fadeIn("fast");
                validSubmit = false;
            }
            return validSubmit;
        }

        function unlock() {
            locked = false;
        }

        // Refresh button click - Reset the captcha
        $(".submit__control i.fa-refresh").on("click", function() {
            if (!locked) {
                locked = true;
                setTimeout(unlock, 500);
                generateCaptcha();
                setTimeout(checkCaptcha, 0);
            }
        });

        // init the action handlers - mostly useful when 'c' is refreshed
        function init() {
            $(".captchaform").on("submit", function(e) {
                e.preventDefault();
                if ($(".submit__generated").hasClass("valid")) {
                    // var formValues = [];
                    captcha = $(".submit__input").val();
                    if (captcha !== "") {
                        captcha = Number(captcha);
                    }

                    checkCaptcha();

                    if (validSubmit === true) {
                        validSubmit = false;
                        // Temporary direct 'success' simulation
                        submitted();
                    }
                } else {
                    return false;
                }
            });

            // Captcha input result handler
            $(".submit__input").on(
                "propertychange change keyup input paste",
                function() {
                    // Prevent the execution on the first number of the string if it's a 'multiple number string'
                    // (i.e: execution on the '1' of '12')
                    window.clearTimeout(timeoutHandle);
                    timeoutHandle = window.setTimeout(function() {
                        captcha = $(".submit__input").val();
                        if (captcha !== "") {
                            captcha = Number(captcha);
                        }
                        checkCaptcha();
                    }, 150);
                }
            );

            // Add the ':active' state CSS when 'enter' is pressed

            // Refresh button click - Reset the captcha
            $(".submit-control i.fa-refresh").on("click", function() {
                if (!locked) {
                    locked = true;
                    setTimeout(unlock, 500);
                    generateCaptcha();
                    setTimeout(checkCaptcha, 0);
                }
            });

            // Submit white overlay click
            $(".submit-form-overlay").on("click", function() {
                checkCaptcha();
            });
        }

        generateCaptcha();
    </script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) { // Adjust the scroll value as needed
                $('.navbar').addClass('sticky');
                $('.sticklogo img').css('display', 'block'); // Adjust the logo size when navbar becomes sticky
            } else {
                $('.navbar').removeClass('sticky');
                $('.sticklogo img').css('display', 'none'); // Reset logo size when navbar is not sticky
            }
        });
    </script>
    {{-- ------------------------------scriptlink-------- --}}
    @include('Layout.scriptlink')
    <script>
        let suggestions = [
            "Channel",
            "CodingLab",
            "CodingNepal",
            "YouTube",
            "YouTuber",
            "YouTube Channel",
            "Blogger",
            "Bollywood",
            "Vlogger",
            "Vechiles",
            "Facebook",
            "Freelancer",
            "Facebook Page",
            "Designer",
            "Developer",
            "Web Designer",
            "Web Developer",
            "Login Form in HTML & CSS",
            "How to learn HTML & CSS",
            "How to learn JavaScript",
            "How to became Freelancer",
            "How to became Web Designer",
            "How to start Gaming Channel",
            "How to start YouTube Channel",
            "What does HTML stands for?",
            "What does CSS stands for?",
        ];

        // getting all required elements
        const searchInput = document.querySelector(".searchInput");
        const input = searchInput.querySelector("input");
        const resultBox = searchInput.querySelector(".resultBox");
        const icon = searchInput.querySelector(".icon");
        let linkTag = searchInput.querySelector("a");
        let webLink;

        // if user press any key and release
        input.onkeyup = (e) => {
            let userData = e.target.value; //user enetered data
            let emptyArray = [];
            if (userData) {
                emptyArray = suggestions.filter((data) => {
                    //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                    return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
                });
                emptyArray = emptyArray.map((data) => {
                    // passing return data inside li tag
                    return data = '<li class="sugestionsearch">' +
                        '<img src=".{{ asset('/assets/img/7xm.xyz181976.jpg') }}"/><span class=""> Shirt Design</span> ' +

                        '</li>';
                });
                searchInput.classList.add("active"); //show autocomplete box
                showSuggestions(emptyArray);
                let allList = resultBox.querySelectorAll("li");
                for (let i = 0; i < allList.length; i++) {
                    //adding onclick attribute in all li tag
                    allList[i].setAttribute("onclick", "select(this)");
                }
            } else {
                searchInput.classList.remove("active"); //hide autocomplete box
            }
        }

        function showSuggestions(list) {
            let listData;
            if (!list.length) {
                userValue = inputBox.value;
                listData = '<li>' + userValue + '</li>';
            } else {
                listData = list.join('');
            }
            resultBox.innerHTML = listData;
        }
    </script>
    <script src="./themes/printec/assets/js/elementor-frontend1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/box-icon1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/brand1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/call-to-action1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/countdown1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/image-gallery1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/image-hotspots1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/language-switcher1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/posts-grid1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/price-table1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/product-categories1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/product-currency1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/product-tab1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/products1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/tabs1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/team-box1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/testimonial1576.js"></script>
    <script src="./themes/printec/assets/js/elementor/video1576.js"></script>
    <script src="./themes/printec/inc/megamenu/assets/js/frontend1576.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        // JavaScript for filtering gallery items
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('.gallery_tabs li');
            const sections = document.querySelectorAll('.content_section');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(tab => tab.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');
                    sections.forEach(section => {
                        section.classList.remove('active');
                        if (section.classList.contains(filter)) {
                            section.classList.add('active');
                        }
                    });
                });
            });
        });
    </script>
    <script>
        let mainImage = document.getElementById("main-Image");
        let swipImage = document.querySelectorAll(".shadTwo");

        swipImage.forEach((ele) => {
            ele.onclick = () => {
                console.log(ele.querySelector("img").src);
                mainImage.src = ele.querySelector("img").src;
            };
        });
    </script>

    {{-- --------------script validation---------- --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const nameInput = document.querySelector('input[name="name"]');
            const emailInput = document.querySelector('input[name="email"]');
            const lengthInput = document.querySelector('input[name="length"]');
            const widthInput = document.querySelector('input[name="width"]');
            const heightInput = document.querySelector('input[name="height"]');
            const quantityInputs = document.querySelectorAll('input[name^="quantity"]');

            nameInput.addEventListener("input", validateName);
            emailInput.addEventListener("input", validateEmail);
            lengthInput.addEventListener("input", validateNumericInput);
            widthInput.addEventListener("input", validateNumericInput);
            heightInput.addEventListener("input", validateNumericInput);
            quantityInputs.forEach(input => input.addEventListener("input", validateQuantity));

            function validateName() {
                const value = nameInput.value.trim();
                if (value === "") {
                    showError(nameInput, "Name is required.");
                } else {
                    hideError(nameInput);
                }
            }



            function validateEmail() {
                const value = emailInput.value.trim();
                if (value !== "" && !/^\S+@\S+\.\S+$/.test(value)) {
                    showError(emailInput, "Please enter a valid email address.");
                } else {
                    hideError(emailInput);
                }
            }

            function validateNumericInput(event) {
                const input = event.target;
                const value = input.value.trim();
                if (value !== "" && isNaN(value)) {
                    showError(input, "Please enter a numeric value.");
                } else {
                    hideError(input);
                }
            }

            function validateQuantity(event) {
                const input = event.target;
                const value = input.value.trim();
                if (value !== "" && (isNaN(value) || parseInt(value) < 0 || parseInt(value) > 10)) {
                    showError(input, "Please enter a number between 0 and 10.");
                } else {
                    hideError(input);
                }
            }

            function showError(input, message) {
                let errorDiv = input.parentElement.querySelector(".error-message");
                if (!errorDiv) {
                    errorDiv = document.createElement("div");
                    errorDiv.className = "error-message";
                    input.parentElement.appendChild(errorDiv);
                }
                errorDiv.textContent = message;
            }

            function hideError(input) {
                const errorDiv = input.parentElement.querySelector(".error-message");
                if (errorDiv) {
                    errorDiv.remove();
                }
            }

            document.querySelector("#quoteForm").addEventListener("submit", function(event) {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });

            function validateForm() {
                let isValid = true;
                validateName();
                validatePhone();
                validateEmail();
                validateNumericInput({
                    target: lengthInput
                });
                validateNumericInput({
                    target: widthInput
                });
                validateNumericInput({
                    target: heightInput
                });
                quantityInputs.forEach(input => validateQuantity({
                    target: input
                }));
                document.querySelectorAll(".error-message").forEach(errorDiv => {
                    if (errorDiv.textContent !== "") {
                        isValid = false;
                    }
                });
                return isValid;
            }
        });
    </script>

    {{-- ----------------script validation end------------- --}}
    {{-- --------------script ends-------------------------- --}}
</body>

</html>
