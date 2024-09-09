<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class=" col-12 col-lg-8">
            @include('layouts.base.navbar')
            <div class="row mt-3">
                <div class="col-12 col-md-3">
                    @include('layouts.advertisement.filter')
                </div>
                <div class="col-12 col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('images/map.png') }}" alt="Map Image" class="map-image">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
