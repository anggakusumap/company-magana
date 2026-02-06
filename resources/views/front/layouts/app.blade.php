<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Title -->
      <title>@yield('title', 'Magana – Nature and Craft from the Heart of Bali')</title>

      <!-- Meta Description (SEO) -->
      <meta name="description"
            content="@yield('meta_description', 'PT. Magana Dana Mahanta is a trusted Indonesian export company based in Bali, delivering high-quality banana leaves, tropical fruits, and handmade plush toys to international markets.')">

      <!-- Open Graph / Social Sharing -->
      <meta property="og:title" content="@yield('og_title', 'Magana – Nature and Craft from the Heart of Bali')">
      <meta property="og:description"
            content="@yield('og_description', 'Delivering Indonesia’s natural and creative products worldwide with quality and sustainability.')">
      <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
      <meta property="og:url" content="{{ url()->current() }}">
      <meta property="og:type" content="website">

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="@yield('twitter_title', 'Magana – Nature and Craft from the Heart of Bali')">
      <meta name="twitter:description"
            content="@yield('twitter_description', 'Delivering Indonesia’s natural and creative products worldwide.')">
      <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

      <!-- Favicon -->
      <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;600;700&display=swap"
            rel="stylesheet">

      <!-- Flickity / Carousel CSS (Consider moving to npm later) -->
      <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
      <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">

      <!-- Vite Scripts & Styles -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])

      <!-- Stack for additional styles -->
      @stack('after-styles')
</head>

<body class="font-sans text-text-main bg-surface-secondary antialiased selection:bg-accent selection:text-white">

      @yield('content')

      @stack('before-scripts')
      @stack('after-scripts')
</body>

</html>