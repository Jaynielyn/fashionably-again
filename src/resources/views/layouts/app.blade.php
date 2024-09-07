<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header>
        <h1 class="header__ttl">FashionablyLate</h1>
        @yield('link')
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>