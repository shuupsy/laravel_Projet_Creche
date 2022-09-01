<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- BoxIcons --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    {{-- CSS --}}
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/media.css">
    <link rel="stylesheet" href="/assets/css/calendrier.css">

    <title>Puéricultrice</title>
</head>

<body>
    <header class="header">
        <nav>@include('backend.partials.header')</nav>
        <div>@include('backend.partials.headers')</div>
    </header>


    <main class='contenu'>
        @yield('content')
    </main>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/calendrierBack.js"></script>
</body>

</html>
