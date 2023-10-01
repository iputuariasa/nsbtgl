<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/525a9b21ee.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link rel="stylesheet" href="/css/style.css">
  <link href="/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500 dark:bg-gradient-to-t dark:bg-darkbgbody scoll">
  <div class="absolute w-full bg-blue-500 min-h-75 {{ Request::is('/') ? 'dark:hidden' : '' }}"></div>
  <!-- sidenav  -->
  @include('layouts.sidemenu')
  <!-- end sidenav -->

  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- end Navbar -->

    <!-- cards -->
    @yield('container')
    <!-- end cards -->
  </main>
</body>
<!-- plugin for charts  -->
<script src="/assets/js/plugins/chartjs.min.js" async></script>
<!-- main script file  -->
<script src="/js/script.js"></script>
<script src="/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>