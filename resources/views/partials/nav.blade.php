<nav id="mainNav">

  <!-- Logo -->
  <a href="/" class="nav-logo">
    <img src="{{ asset('logo.png') }}" alt="Veerhan Logo" class="nav-logo-img">
  </a>

  <!-- Desktop Nav -->
  <ul class="nav-links" id="navLinks">
    <li><a href="/" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
    <li class="nav-dropdown" id="servicesDropdown">
      <a href="#" class="dropdown-trigger {{ request()->routeIs('services.*') ? 'active' : '' }}" aria-haspopup="true" aria-expanded="false">
        Services <span class="chevron">▾</span>
      </a>
      <div class="dropdown-menu" role="menu">
        <a href="{{ route('services.web-development') }}" class="dropdown-item" role="menuitem">
          <span class="di-icon">🌐</span>
          <span class="di-content">
            <span class="di-name">Web Design & Development</span>
            <span class="di-desc">Custom websites & web apps</span>
          </span>
        </a>
        <a href="{{ route('services.seo-digital') }}" class="dropdown-item" role="menuitem">
          <span class="di-icon">📈</span>
          <span class="di-content">
            <span class="di-name">SEO & Digital Marketing</span>
            <span class="di-desc">Rank higher, grow faster</span>
          </span>
        </a>
        <a href="{{ route('services.web-security') }}" class="dropdown-item" role="menuitem">
          <span class="di-icon">🔐</span>
          <span class="di-content">
            <span class="di-name">Web Security & Protection</span>
            <span class="di-desc">Harden & secure your site</span>
          </span>
        </a>
        <a href="{{ route('services.ui-ux') }}" class="dropdown-item" role="menuitem">
          <span class="di-icon">🎨</span>
          <span class="di-content">
            <span class="di-name">UI/UX Design & Branding</span>
            <span class="di-desc">Beautiful, user-first interfaces</span>
          </span>
        </a>
        <a href="{{ route('services.ai') }}" class="dropdown-item" role="menuitem">
          <span class="di-icon">🤖</span>
          <span class="di-content">
            <span class="di-name">AI Implementation</span>
            <span class="di-desc">Integrate AI into your workflow</span>
          </span>
        </a>
        <div class="dropdown-footer">
          <a href="{{ route('contact') }}">Start a project →</a>
        </div>
      </div>
    </li>
    <li><a href="{{ route('blogs.index') }}" class="{{ request()->routeIs('blogs.*') ? 'active' : '' }}">Blog</a></li>
    <li><a href="{{ route('case-studies.index') }}" class="{{ request()->routeIs('case-studies.*') ? 'active' : '' }}">Case Studies</a></li>
    <li><a href="{{ route('contact') }}" class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us →</a></li>
  </ul>

  <!-- Hamburger -->
  <button class="nav-hamburger" id="navHamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobileNavDrawer">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <!-- Mobile overlay -->
  <div class="mobile-nav-overlay" id="mobileNavOverlay" aria-hidden="true"></div>

  <!-- Mobile drawer -->
  <div class="mobile-nav-drawer" id="mobileNavDrawer" role="dialog" aria-modal="true" aria-label="Navigation">
    <div class="mobile-nav-header">
      <a href="/" class="nav-logo">
        <img src="{{ asset('logo.png') }}" alt="Veerhan Logo" class="nav-logo-img">
      </a>
      <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">✕</button>
    </div>
    <ul class="mobile-nav-links">
      <li><a href="/" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
      <li class="mobile-dropdown" id="mobileServicesDropdown">
        <button class="mobile-dropdown-trigger" aria-expanded="false">
          Services <span class="mobile-chevron">▾</span>
        </button>
        <ul class="mobile-dropdown-items">
          <li><a href="{{ route('services.web-development') }}">🌐 Web Design & Development</a></li>
          <li><a href="{{ route('services.seo-digital') }}">📈 SEO & Digital Marketing</a></li>
          <li><a href="{{ route('services.web-security') }}">🔐 Web Security & Protection</a></li>
          <li><a href="{{ route('services.ui-ux') }}">🎨 UI/UX Design & Branding</a></li>
          <li><a href="{{ route('services.ai') }}">🤖 AI Implementation</a></li>
        </ul>
      </li>
      <li><a href="{{ route('blogs.index') }}" class="{{ request()->routeIs('blogs.*') ? 'active' : '' }}">Blog</a></li>
      <li><a href="{{ route('case-studies.index') }}" class="{{ request()->routeIs('case-studies.*') ? 'active' : '' }}">Case Studies</a></li>
    </ul>
    <div class="mobile-nav-footer">
      <a href="{{ route('contact') }}" class="mobile-nav-cta">Contact Us →</a>
    </div>
  </div>

  <style>
    /* ========== DROPDOWN ========== */
    .nav-dropdown { position: relative; }
    .dropdown-trigger {
      display: flex; align-items: center; gap: 5px; cursor: pointer; white-space: nowrap;
    }
    .chevron {
      font-size: 10px; transition: transform 0.3s ease; display: inline-block;
      line-height: 1;
    }
    .nav-dropdown:hover .chevron,
    .nav-dropdown:focus-within .chevron { transform: rotate(180deg); }

    .dropdown-menu {
      position: absolute; top: 100%; left: 50%;
      transform: translateX(-50%) translateY(4px);
      background: var(--black);
      min-width: 310px;
      border-radius: 18px;
      padding: 8px;
      padding-top: 20px; /* visual gap without breaking hover area */
      opacity: 0; visibility: hidden; pointer-events: none;
      transition: opacity 0.22s ease, transform 0.22s ease, visibility 0.22s;
      border: 1px solid rgba(255,255,255,0.1);
      box-shadow: 0 28px 64px rgba(0,0,0,0.35), 0 0 0 1px rgba(255,255,255,0.04);
      z-index: 1050;
    }
    /* Caret arrow (positioned inside the padding-top area) */
    .dropdown-menu::before {
      content: '';
      position: absolute; top: 6px; left: 50%; transform: translateX(-50%);
      border-left: 8px solid transparent; border-right: 8px solid transparent;
      border-bottom: 8px solid rgba(255,255,255,0.12);
    }
    .dropdown-menu::after {
      content: '';
      position: absolute; top: 8px; left: 50%; transform: translateX(-50%);
      border-left: 6px solid transparent; border-right: 6px solid transparent;
      border-bottom: 7px solid var(--black);
    }

    .nav-dropdown:hover .dropdown-menu,
    .nav-dropdown:focus-within .dropdown-menu {
      opacity: 1; visibility: visible; pointer-events: auto;
      transform: translateX(-50%) translateY(0);
    }

    .dropdown-item {
      display: flex; align-items: center; gap: 12px;
      padding: 11px 12px; border-radius: 10px;
      text-decoration: none; color: white;
      transition: background 0.2s ease, border-left-color 0.2s ease;
      border-left: 2.5px solid transparent;
      position: relative;
    }
    .dropdown-item:hover {
      background: rgba(244,107,27,0.12);
      border-left-color: var(--orange);
    }
    .dropdown-item::after { display: none !important; }

    .di-icon {
      width: 38px; height: 38px; border-radius: 10px;
      background: rgba(255,255,255,0.07);
      display: flex; align-items: center; justify-content: center;
      font-size: 18px; flex-shrink: 0;
      transition: background 0.2s;
    }
    .dropdown-item:hover .di-icon { background: rgba(244,107,27,0.2); }

    .di-content { display: flex; flex-direction: column; gap: 2px; }
    .di-name { font-size: 13px; font-weight: 600; color: white; line-height: 1.3; }
    .di-desc { font-size: 11px; color: rgba(255,255,255,0.42); line-height: 1.3; }

    .dropdown-footer {
      border-top: 1px solid rgba(255,255,255,0.08);
      margin-top: 4px; padding: 10px 12px 4px;
      display: flex; justify-content: flex-end;
    }
    .dropdown-footer a {
      font-size: 12px; font-weight: 700; color: var(--orange);
      text-decoration: none; letter-spacing: 0.03em;
      transition: color 0.2s;
    }
    .dropdown-footer a:hover { color: var(--orange-light); }
    .dropdown-footer a::after { display: none !important; }

    /* ========== HAMBURGER ========== */
    .nav-hamburger {
      display: none;
      flex-direction: column; justify-content: center; align-items: center;
      gap: 5px; width: 44px; height: 44px;
      background: none; border: none;
      cursor: pointer; padding: 6px;
      z-index: 1200; flex-shrink: 0;
      border-radius: 10px;
      transition: background 0.2s;
    }
    .nav-hamburger:hover { background: rgba(0,0,0,0.06); }
    .nav-hamburger span {
      display: block; width: 22px; height: 2px;
      background: var(--black); border-radius: 2px;
      transition: transform 0.3s cubic-bezier(0.4,0,0.2,1), opacity 0.3s, width 0.3s;
      transform-origin: center;
    }
    .nav-hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .nav-hamburger.open span:nth-child(2) { opacity: 0; width: 0; }
    .nav-hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* ========== MOBILE OVERLAY ========== */
    .mobile-nav-overlay {
      display: none;
      position: fixed; inset: 0;
      background: rgba(14,14,14,0.55);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      z-index: 1150;
      opacity: 0; transition: opacity 0.3s ease;
    }
    .mobile-nav-overlay.active { opacity: 1; }

    /* ========== MOBILE DRAWER ========== */
    .mobile-nav-drawer {
      position: fixed; top: 0; right: -100%; width: 300px;
      max-width: 88vw;
      height: 100dvh; height: 100vh; /* fallback */
      background: var(--white);
      z-index: 1200;
      transition: right 0.38s cubic-bezier(0.4,0,0.2,1);
      display: flex; flex-direction: column;
      overflow-y: auto; overflow-x: hidden;
      box-shadow: -24px 0 80px rgba(0,0,0,0.18);
    }
    .mobile-nav-drawer.open { right: 0; }

    .mobile-nav-header {
      display: flex; align-items: center; justify-content: space-between;
      padding: 20px 24px;
      border-bottom: 1px solid var(--border);
      flex-shrink: 0;
    }
    .mobile-nav-close {
      width: 36px; height: 36px; border-radius: 50%;
      border: 1.5px solid var(--border);
      background: none; cursor: pointer;
      font-size: 15px; color: var(--gray);
      display: flex; align-items: center; justify-content: center;
      transition: background 0.2s, color 0.2s, border-color 0.2s;
    }
    .mobile-nav-close:hover { background: var(--orange-pale); color: var(--orange); border-color: var(--orange); }

    .mobile-nav-links {
      list-style: none; flex: 1; padding: 12px 0;
    }
    .mobile-nav-links > li { border-bottom: 1px solid var(--border); }
    .mobile-nav-links > li:last-child { border-bottom: none; }

    .mobile-nav-links > li > a {
      display: block; padding: 16px 24px;
      font-size: 15px; font-weight: 500; color: var(--black);
      text-decoration: none;
      transition: color 0.2s, background 0.2s;
    }
    .mobile-nav-links > li > a:hover,
    .mobile-nav-links > li > a.active { color: var(--orange); background: var(--orange-pale); }

    .mobile-dropdown {}
    .mobile-dropdown-trigger {
      display: flex; align-items: center; justify-content: space-between;
      width: 100%; padding: 16px 24px;
      font-size: 15px; font-weight: 500; color: var(--black);
      background: none; border: none; cursor: pointer;
      font-family: var(--font-body);
      transition: color 0.2s, background 0.2s;
    }
    .mobile-dropdown-trigger:hover { color: var(--orange); background: var(--orange-pale); }

    .mobile-chevron {
      font-size: 11px; transition: transform 0.3s ease; display: inline-block;
    }
    .mobile-dropdown.open .mobile-chevron { transform: rotate(180deg); }
    .mobile-dropdown.open .mobile-dropdown-trigger { color: var(--orange); }

    .mobile-dropdown-items {
      list-style: none; padding: 0;
      max-height: 0; overflow: hidden;
      transition: max-height 0.32s ease;
      background: var(--light-gray);
    }
    .mobile-dropdown.open .mobile-dropdown-items { max-height: 500px; }
    .mobile-dropdown-items li a {
      display: block; padding: 13px 24px 13px 40px;
      font-size: 14px; color: var(--gray);
      text-decoration: none; transition: color 0.2s;
    }
    .mobile-dropdown-items li a:hover { color: var(--orange); }

    .mobile-nav-footer {
      padding: 20px 24px; border-top: 1px solid var(--border); flex-shrink: 0;
    }
    .mobile-nav-cta {
      display: flex !important; align-items: center; justify-content: center;
      width: 100%;
      background: var(--black) !important;
      color: white !important;
      padding: 14px 28px !important;
      border-radius: 100px !important;
      font-size: 15px !important; font-weight: 600 !important;
      text-decoration: none !important;
      transition: background 0.3s ease !important;
    }
    .mobile-nav-cta:hover { background: var(--orange) !important; }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
      .nav-hamburger { display: flex !important; }
      .mobile-nav-overlay { display: block; }
    }

    /* Prevent body scroll when drawer open */
    body.nav-open { overflow: hidden; }
  </style>

  <script>
    (function () {
      var hamburger = document.getElementById('navHamburger');
      var drawer    = document.getElementById('mobileNavDrawer');
      var overlay   = document.getElementById('mobileNavOverlay');
      var closeBtn  = document.getElementById('mobileNavClose');

      function openMenu() {
        hamburger.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        drawer.classList.add('open');
        overlay.classList.add('active');
        document.body.classList.add('nav-open');
      }

      function closeMenu() {
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        drawer.classList.remove('open');
        overlay.classList.remove('active');
        document.body.classList.remove('nav-open');
      }

      hamburger.addEventListener('click', openMenu);
      closeBtn.addEventListener('click', closeMenu);
      overlay.addEventListener('click', closeMenu);

      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
      });

      // Mobile services accordion
      var mobileDropdown = document.getElementById('mobileServicesDropdown');
      var mobileBtn = mobileDropdown.querySelector('.mobile-dropdown-trigger');
      mobileBtn.addEventListener('click', function () {
        var isOpen = mobileDropdown.classList.toggle('open');
        mobileBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });

      // Close drawer on any internal link click
      drawer.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
      });
    })();
  </script>

</nav>
