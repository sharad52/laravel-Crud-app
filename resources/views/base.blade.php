<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
    {{-- navbar  --}}
    @include('inc/navbar')
    {{-- navbar --}}
    <div class="container">
        @yield('main')
    </div>
    <script src=" {{ asset('js/app.js') }} " type="text/js">

</body>
</html>