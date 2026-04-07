<nav id="mainNav">
  <a href="/" class="nav-logo">
    <img src="{{ asset('logo.png') }}" alt="Veerhan Logo" class="nav-logo-img">
  </a>
  <ul class="nav-links">
    <li><a href="/" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
    <li class="nav-dropdown">
      <a href="#" class="dropdown-trigger {{ request()->routeIs('services.*') ? 'active' : '' }}">Services <span class="chevron">▾</span></a>
      <ul class="dropdown-menu">
        <li><a href="{{ route('services.web-development') }}">Web Design & Development</a></li>
        <li><a href="{{ route('services.seo-digital') }}">SEO & Digital Marketing</a></li>
        <li><a href="{{ route('services.web-security') }}">Web Security & Protection</a></li>
        <li><a href="{{ route('services.ui-ux') }}">UI/UX Design & Branding</a></li>
        <li><a href="{{ route('services.ai') }}">AI Implementation</a></li>
      </ul>
    </li>
    <li><a href="{{ route('contact') }}" class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us →</a></li>
  </ul>

  <style>
    .nav-dropdown { position: relative; }
    .dropdown-trigger { display: flex; align-items: center; gap: 4px; cursor: pointer; }
    .chevron { font-size: 10px; transition: transform 0.3s; }
    .nav-dropdown:hover .chevron { transform: rotate(180deg); }
    .dropdown-menu {
        position: absolute; top: 100%; left: 0; 
        background: white; min-width: 260px; 
        box-shadow: 0 16px 40px rgba(0,0,0,0.1);
        border-radius: 12px; padding: 12px 0;
        opacity: 0; visibility: hidden; transform: translateY(10px);
        transition: all 0.3s ease; list-style: none;
        border: 1px solid var(--border);
    }
    .nav-dropdown:hover .dropdown-menu { opacity: 1; visibility: visible; transform: translateY(0); }
    .dropdown-menu li a {
        display: block; padding: 12px 24px; color: var(--black);
        font-size: 14px; font-weight: 500; text-decoration: none;
        transition: background 0.2s, color 0.2s;
    }
    .dropdown-menu li a:hover { background: var(--orange-pale); color: var(--orange); }
    .dropdown-menu li a::after { display: none; }
  </style>
</nav>
