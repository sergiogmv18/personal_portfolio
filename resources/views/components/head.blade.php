<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', translate('Sergio Marcano Portfolio | Full Stack Developer (Web & Mobile)'))</title>
    <meta name="description" content="@yield('description',translate("Sergio Marcano's portfolio – Full Stack Developer specialized in web and mobile apps using Laravel, Flutter, and custom APIs. Scalable, tailored solutions for your business."))">
    <!-- Open Graph / Facebook -->
    <meta property="og:type"        content="@yield('og_type','website')" />
    <meta property="og:title"       content="@yield('title', translate('Sergio Marcano Portfolio | Full Stack Developer (Web & Mobile)')) />
    <meta property="og:description" content="@yield('description',translate("Sergio Marcano's portfolio – Full Stack Developer specialized in web and mobile apps using Laravel, Flutter, and custom APIs. Scalable, tailored solutions for your business."))" />
    <meta property="og:image"       content="@yield('og_image', asset('img/og-default.jpg'))" />
    <meta property="og:url"         content="{{ url()->current() }}" />
    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image" />
    <meta name="twitter:title"       content="@yield('title',translate('Sergio Marcano Portfolio | Full Stack Developer (Web & Mobile)')) />
    <meta name="twitter:description" content="@yield('description',translate("Sergio Marcano's portfolio – Full Stack Developer specialized in web and mobile apps using Laravel, Flutter, and custom APIs. Scalable, tailored solutions for your business."))" />
    <meta name="twitter:image"       content="@yield('og_image', asset('img/og-default.jpg'))" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- Keywords específicas para SEO --}}
    <meta name="keywords" content="@yield('keywords', 'Sergio Marcano, Full Stack Developer, desarrollador web, desarrollador móvil, Laravel, Flutter, PHP, APIs REST, aplicaciones web, apps móviles, desarrollo a medida, freelance developer, remote developer, portfolio developer, software developer')">
    <meta name="robots" content="index, follow">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="canonical" href="{{ url()->current() }}">
<!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href={{ asset("img/favicon.jpg") }} />
    @stack('styles')

</head>