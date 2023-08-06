<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" sizes="16x16">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/nice-select.css') }}">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/lightcase.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/datepicker.min.css') }}">
    <!-- style main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>

    <!-- page-wrapper start -->
    <div class="page-wrapper">
        <div class="modal-dialog">
            {{ $slot }}
        </div>



    </div>
    <!-- page-wrapper end -->
    <!-- jQuery library -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <!-- custom select js -->
    <script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <!-- lightcase js -->
    <script src="{{ asset('assets/js/vendor/lightcase.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <!-- slick slider js -->
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <!-- countdown js -->
    <script src="{{ asset('assets/js/vendor/jquery.countdown.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
    <!-- datepicker js -->
    <script src="{{ asset('assets/js/vendor/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/datepicker.en.js') }}"></script>
    <!-- preloader -->
    <script src="{{ asset('assets/js/vendor/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/MorphSVGPlugin.min.js') }}"></script>
    <!-- preloader -->
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }


        function goBack() {
            window.history.back();
        }
        // Wait for the page to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Get the modal element by ID
            var modal = document.getElementById('loginModal');

            // Display the modal by adding the 'show' class to it
            modal.classList.add('show');
            modal.style.display = 'block';
            modal.setAttribute('aria-hidden', 'false');

            // Add an event listener to the modal's close button to hide the modal and go back to the homepage
            var closeButton = modal.querySelector('.close-btn');
            closeButton.addEventListener('click', function() {
                // Hide the modal by removing the 'show' class from it
                modal.classList.remove('show');
                modal.style.display = 'none';
                modal.setAttribute('aria-hidden', 'true');

                // Go back to the homepage
                window.location.href = '{{ route('welcome') }}';
            });
        });
    </script>


</body>

</html>
