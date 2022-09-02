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
    <link rel="stylesheet" href="/assets/css/profilEnfant.css">


    <title>Parents</title>
</head>

<body>
    <header>
        <nav>
            @include('frontend.partials.nav')
        </nav>
        @include('frontend.partials.headers')
    </header>

    <main class='contenu'>
        @yield('content')
    </main>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/calendrier.js"></script>

</body>

</html>
