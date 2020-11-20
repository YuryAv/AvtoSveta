<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $seo->title ?? 'AvtoSveta' }}</title>
    <meta name="description" content="{{ $seo->description ?? '' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="robots" content="{{ $seo->robots ?? '' }}">
    <meta name="googlebot" content="{{ $seo->googlebot ?? '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @include('modules.style')
    <link rel="stylesheet" href="@yield('css', asset('css/all-styles.css'))"/>
    @yield('add-sources', '')
</head>
<body>

@include('modules.header')

@yield('content')

@include('modules.footer')

    <!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('assets/js/jquery.lazy.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js" integrity="sha512-eviLb3jW7+OaVLz5N3B5F0hpluwkLb8wTXHOTy0CyNaZM5IlShxX1nEbODak/C0k9UdsrWjqIBKOFY0ELCCArw==" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('assets/js/slick.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>