<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@yield('head_meta')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
@yield('head_libraries')
<link rel="stylesheet" href="{{ asset('css/service.css') }}">
@yield('page_styles')
<style>
  /* Disable custom cursor effects globally and restore default browser cursors */
  .cursor,
  .cursor-ring {
    display: none !important;
  }

  html,
  body,
  body * {
    cursor: revert !important;
  }
</style>
</head>
<body>

<!-- Scroll Progress -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- Back to Top -->
<a href="#" class="back-top" id="backTop">↑</a>

@include('partials.nav', ['navVariant' => $navVariant ?? 'home'])

@yield('breadcrumb')

@yield('content')

@include('partials.footer', ['footerVariant' => $footerVariant ?? 'service'])

@yield('page_scripts')
</body>
</html>
