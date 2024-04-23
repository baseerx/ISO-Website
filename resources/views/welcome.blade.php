<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NPCC-ISO</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Vendor CSS Files -->
{{--    <link href="./external/vendor/aos/aos.css" rel="stylesheet">--}}
{{--    <link href="./external/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="./external/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">--}}
{{--    <link href="./external/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">--}}
{{--    <link href="./external/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">--}}
{{--    <link href="./external/vendor/remixicon/remixicon.css" rel="stylesheet">--}}
{{--    <link href="./external/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">--}}

{{--    <!-- Template Main CSS File -->--}}
{{--    <link href="./external/css/style.css" rel="stylesheet">--}}

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script type="text/javascript" src="./library/pk-all.js"></script>
    <script type="text/javascript" src="./library/pk-all-changed.js"></script>

</head>
<body>
<div id="app">
    <router-view></router-view>
</div>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>

{{--<!-- Vendor JS Files -->--}}
{{--<script src="./external/vendor/aos/aos.js"></script>--}}
{{--<script src="./external/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="./external/vendor/glightbox/js/glightbox.min.js"></script>--}}
{{--<script src="./external/vendor/isotope-layout/isotope.pkgd.min.js"></script>--}}
{{--<script src="./external/vendor/php-email-form/validate.js"></script>--}}
{{--<script src="./external/vendor/purecounter/purecounter.js"></script>--}}
{{--<script src="./external/vendor/swiper/swiper-bundle.min.js"></script>--}}

{{--<!-- Template Main JS File -->--}}
{{--<script src="./external/js/main.js"></script>--}}
</body>
</html>
