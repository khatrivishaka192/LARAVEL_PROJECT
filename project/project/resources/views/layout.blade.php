<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Cake Bliss — The sweetness of your happiness')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Cake Bliss — Handmade cakes, pastries, and sweet creations baked fresh daily.">
    <meta name="keywords" content="Cake Bliss, bakery, cakes, desserts, royal bakery, cupcakes">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('partials.header')



{{-- Page Content --}}
<main class="py-4">
    @yield('content')
</main>

{{-- Footer --}}
@include('partials.footer')


</body>
</html>
