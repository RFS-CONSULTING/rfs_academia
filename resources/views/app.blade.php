<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="/assets/css/fa.all.min.css"/>
        <!-- Glide Required Core Stylesheet -->
        <link rel="stylesheet" href="/assets/css/glide.core.css"/>
        <!-- Custom Css -->
        <link rel="stylesheet" href="/assets/css/main.css"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        @routes
        @translations


        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased ">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>

    <!-- Glide JS -->
<script src="/assets/js/glide.js"></script>
<!-- Main JavaScript -->
<script src="/assets/js/main.js"></script>

<script>
    // Home One carousel function called from main.js file
    singlePrevCarousel('glide-one')

    singlePrevCarousel('success-history' , 'carousel')

    threePrevCarousel('testimonial')

    partnerLogoPrevCarousel('partner')
</script>
</html>
