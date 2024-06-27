<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Listing</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/assets/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('/assets/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/assets/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/morris.css') }}">

    <!-- Custom Fonts -->
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    {{-- ----------------Script for Counter=--------------- --}}

    {{-- ---------------font awesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    {{-- ------------Bootstrap5 cdn------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- ---------------AJAX SCRIPT---------- --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    {{-- -----------------Dashboard page styling --}}
    <style>
        .p-y-2 {
            padding-top: 28px;
            padding-bottom: 28px;
        }

        .p-y-3 {
            padding-top: 45px;
            padding-bottom: 45px;
        }

        .m-b-1 {
            margin-bottom: 18px;
        }

        .m-t-1 {
            margin-top: 18px;
        }

        .main_counter_area {

            background-size: cover;
            overflow: hidden;
        }

        .main_counter_area .main_counter_content .single_counter {
            background: #337ab7;
            color: #fff;
        }

        .main_counter_area .main_counter_content .single_counter i {
            font-size: 36px;
        }

        {{-- ---------------------Dashboard Page styling end --}} <style>

        /* Category form*/
        /* Add your custom styles here */
        body,
        html {
            height: 100%;
        }

        .vertical-center {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Center horizontally */
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            min-height: 400px;
            /* Adjust the height as needed */
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-control-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 15px;
            box-shadow: none !important;
        }

        .btn-submit {
            width: 100%;
        }

        /* Custom CSS for table alignment */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
            /* Center align text */
        }

        .table th.text-left,
        .table td.text-left {
            text-align: left;
            /* Left align text */
        }

        .table img {
            max-width: 100px;
        }

        .btn {
            padding: 6px 12px;
            margin: 0 4px;
        }
    </style>


</head>

<body>
    @include('AdminDashboard.navbar')

    <main>
        @yield('content')
    </main>
    <!-- jQuery -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/assets//js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/assets//js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('/assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('/assets//js/morris.min.js') }}"></script>
    <script src="{{ asset('/assets/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/assets/js/startmin.js') }}/"></script>
    {{-- ------Jquery datatable------------- --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    {{-- -------------------botstrap5 script------------------ --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Include SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    {{-- ---------------------------------AJAX------------------ --}}

    <script>
        function toggleStatus(categoryId, currentStatus) {
            var newStatus = currentStatus ? 0 : 1;
            var token = '{{ csrf_token() }}';
            var url = '/category/' + categoryId + '/toggle';

            // Send AJAX request to update status
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    _token: token,
                    status: newStatus
                },
                success: function(response) {
                    // Update button color and text
                    var btns = document.querySelectorAll('.toggle-btn-' + categoryId);
                    btns.forEach(function(btn) {
                        btn.classList.remove('btn-success', 'btn-danger');
                        btn.classList.add(newStatus ? 'btn-success' : 'btn-danger');
                        btn.textContent = newStatus ? 'Enabled' : 'Disabled';
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>


    <!-- Js---Plugins------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- ===============Sales-Datatable-js==============================-->
    <script>
        $(document).ready(function() {
            $('#salestable').DataTable();
        });
    </script>
    <!-- Js-link -->
    <script>
        //  ----------------Notification-Dropdwown--------//
        $(document).ready(function() {
            $(".profile .icon_wrap").click(function() {
                $(this).parent().toggleClass("active");
                $(".notifications").removeClass("active");
            });

            $(".notifications .icon_wrap").click(function() {
                $(this).parent().toggleClass("active");
                $(".profile").removeClass("active");
            });

            $(".show_all .link").click(function() {
                $(".notifications").removeClass("active");
                $(".popup").show();
            });

            $(".close").click(function() {
                $(".popup").hide();
            });
        });

        // Variable to keep track of the active notification
        let activeNotification = null;

        // JavaScript function to toggle the visibility of notification content
        function toggleNotification(notificationId) {
            // Get the selected notification
            const selectedNotification = document.getElementById(notificationId);

            // If there is an active notification, hide it
            if (activeNotification && activeNotification !== selectedNotification) {
                activeNotification.style.display = 'none';
            }

            // Toggle the visibility of the selected notification
            if (selectedNotification.style.display === 'none' || selectedNotification.style.display === '') {
                selectedNotification.style.display = 'block';
                activeNotification = selectedNotification;
            } else {
                selectedNotification.style.display = 'none';
                activeNotification = null;
            }
        }
    </script>
    {{-- ----------------counter --}}

    {{-- ----------counter end-- --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

</body>

</html>
