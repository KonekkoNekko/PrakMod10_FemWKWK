<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Belajar Controller & View pada Laravel</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image" class="img-thumbnail">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2"><a href="{{ route('home') }}" class="btn btn-dark">Home</a></div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
