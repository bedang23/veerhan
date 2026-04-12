@extends('layouts.app')

@php
  $navVariant = 'service';
  $footerVariant = 'service';
@endphp

@section('head_meta')
<!-- ============================================================
  SEO META — Web Development & Design Service Page
  Targets: India (Pune, Mumbai, Delhi, Bangalore), USA, Dubai
============================================================ -->
<title>Web Design & Development Services | Veerhan – India, USA & Dubai</title>
<meta name="description" content="Veerhan builds high-converting, SEO-ready websites and web applications for businesses in India, the USA, and Dubai. Custom UI/UX design, Laravel development, React, and more — delivered fast with AI-powered workflows.">
<meta name="keywords" content="web design company India, web development agency USA, website design Dubai, custom web development Pune, Laravel development India, React development agency, web design Mumbai, web app development Delhi, affordable web design, hire web developer India, web development company Dubai, best web design USA">

<!-- Geo / Region Targeting -->
<meta name="geo.region" content="IN-MH">
<meta name="geo.placename" content="Pune, Maharashtra, India">
<meta name="ICBM" content="18.5204, 73.8567">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Web Design & Development Services | Veerhan">
<meta property="og:description" content="Custom websites, web apps & UI/UX design built for India, USA & Dubai. Pixel-perfect, fast, and conversion-optimised.">
<meta property="og:url" content="https://veerhan.com/services/web-design-development">
<meta property="og:site_name" content="Veerhan">
<meta property="og:image" content="https://veerhan.com/og/web-design-service.jpg">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Web Design & Development | Veerhan">
<meta name="twitter:description" content="Veerhan designs and develops high-performance websites for India, the US, and Dubai.">

<!-- Canonical -->
<link rel="canonical" href="https://veerhan.com/services/web-design-development">

<!-- Hreflang for region targeting -->
<link rel="alternate" hreflang="en-in" href="https://veerhan.com/services/web-design-development">
<link rel="alternate" hreflang="en-us" href="https://veerhan.com/services/web-design-development">
<link rel="alternate" hreflang="en-ae" href="https://veerhan.com/services/web-design-development">
<link rel="alternate" hreflang="x-default" href="https://veerhan.com/services/web-design-development">

<!-- Schema.org Structured Data -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Service",
  "name": "Web Design & Development",
  "description": "Custom website design and full-stack web development services targeting businesses in India, the USA, and Dubai. Specialising in Laravel, React, UI/UX design, e-commerce, and performance-optimised web applications.",
  "provider": {
    "@type": "Organization",
    "name": "Veerhan",
    "url": "https://veerhan.com",
    "logo": "{{ asset('logo.png') }}",
    "contactPoint": [
      { "@type": "ContactPoint", "telephone": "+91-87190-36405", "contactType": "customer service", "areaServed": "IN" },
      { "@type": "ContactPoint", "contactType": "customer service", "areaServed": ["US", "AE"] }
    ],
    "sameAs": ["https://linkedin.com/company/veerhan", "https://twitter.com/veerhan"]
  },
  "areaServed": [
    { "@type": "Country", "name": "India" },
    { "@type": "Country", "name": "United States" },
    { "@type": "City", "name": "Dubai" }
  ],
  "serviceType": "Web Design and Development",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "15000",
    "highPrice": "500000",
    "offerCount": "6"
  }
}
</script>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does a website cost in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "At Veerhan, website projects in India start from ₹15,000 for simple landing pages and go up to ₹5,00,000+ for complex web applications and e-commerce platforms. We offer transparent pricing tailored to your goals."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer web design services in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Veerhan serves clients in Dubai and across the UAE with remote-first collaboration. We deliver custom web design and development projects on time regardless of timezone."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to build a website?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A standard business website takes 2–4 weeks. Complex web apps or e-commerce platforms take 6–12 weeks. Our AI-powered workflows allow us to deliver 4× faster than traditional agencies."
      }
    },
    {
      "@type": "Question",
      "name": "Do you build websites with Laravel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Laravel is one of our primary frameworks for custom web applications, CMSs, and API-driven platforms. We have a dedicated Laravel team with experience across multiple industries."
      }
    }
  ]
}
</script>

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://veerhan.com" },
    { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://veerhan.com/services" },
    { "@type": "ListItem", "position": 3, "name": "Web Design & Development", "item": "https://veerhan.com/services/web-design-development" }
  ]
}
</script>
@endsection

@section('page_styles')
<style>
  :root {
    --orange: #F46B1B;
    --orange-light: #FF8C42;
    --orange-deep: #D4520A;
    --orange-pale: #FFF0E6;
    --black: #0E0E0E;
    --dark: #1A1A1A;
    --gray: #6B6B6B;
    --light-gray: #F5F5F3;
    --white: #FAFAF8;
    --border: #E8E4DF;
    --font-display: 'Syne', sans-serif;
    --font-body: 'DM Sans', sans-serif;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; overflow-x: hidden; }
  body {
    font-family: var(--font-body);
    background: var(--white);
    color: var(--black);
    overflow-x: hidden;
    cursor: none;
  }

  /* CURSOR */
  .cursor {
    position: fixed; width: 12px; height: 12px;
    background: var(--orange); border-radius: 50%;
    pointer-events: none; z-index: 9999;
    transition: transform 0.15s ease; mix-blend-mode: multiply;
  }
  .cursor-ring {
    position: fixed; width: 40px; height: 40px;
    border: 1.5px solid var(--orange); border-radius: 50%;
    pointer-events: none; z-index: 9998;
    transition: transform 0.4s ease, width 0.3s, height 0.3s; mix-blend-mode: multiply;
  }
  .cursor-ring.expanded { width: 70px; height: 70px; border-color: var(--orange-light); }

  /* SCROLL PROGRESS */
  .scroll-progress {
    position: fixed; top: 0; left: 0; right: 0; height: 3px;
    background: linear-gradient(90deg, var(--orange), var(--orange-light));
    transform-origin: left; transform: scaleX(0); z-index: 2000;
  }

  /* BACK TO TOP */
  .back-top {
    position: fixed; bottom: 40px; right: 40px;
    width: 48px; height: 48px; border-radius: 50%;
    background: var(--orange); color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; cursor: none;
    opacity: 0; transform: translateY(20px);
    transition: opacity 0.3s, transform 0.3s, background 0.3s;
    z-index: 999; text-decoration: none;
    box-shadow: 0 8px 24px rgba(244,107,27,0.4);
  }
  .back-top.visible { opacity: 1; transform: translateY(0); }
  .back-top:hover { background: var(--orange-deep); }

  /* NAV */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 48px;
    transition: background 0.4s ease, backdrop-filter 0.4s ease, box-shadow 0.4s ease;
  }
  nav.scrolled {
    background: rgba(250,250,248,0.92);
    backdrop-filter: blur(16px);
    box-shadow: 0 1px 0 var(--border);
  }
  .nav-logo {
    display: flex; align-items: center; gap: 12px; text-decoration: none;
  }
  .nav-logo img { height: 38px; }
  .nav-logo-text {
    font-family: var(--font-display); font-size: 22px; font-weight: 800;
    color: var(--black); letter-spacing: -0.5px;
  }
  .nav-logo-text span { color: var(--orange); }
  .nav-links {
    display: flex; align-items: center; gap: 36px; list-style: none;
  }
  .nav-links a {
    font-size: 14px; font-weight: 500; color: var(--dark);
    text-decoration: none; letter-spacing: 0.01em; position: relative;
  }
  .nav-links a::after {
    content: ''; position: absolute; bottom: -4px; left: 0;
    width: 0; height: 1.5px; background: var(--orange); transition: width 0.3s ease;
  }
  .nav-links a:hover::after { width: 100%; }
  .nav-links a.active::after { width: 100%; }
  .nav-cta {
    background: var(--black); color: var(--white) !important;
    padding: 10px 24px; border-radius: 100px; font-weight: 500 !important;
    transition: background 0.3s ease, transform 0.2s ease !important;
  }
  .nav-cta:hover { background: var(--orange) !important; transform: scale(1.03); }
  .nav-cta::after { display: none !important; }

  /* BREADCRUMB */
  .breadcrumb-bar {
    margin-top: 80px;
    padding: 14px 48px;
    background: var(--light-gray);
    border-bottom: 1px solid var(--border);
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; color: var(--gray);
  }
  .breadcrumb-bar a { color: var(--gray); text-decoration: none; transition: color 0.2s; }
  .breadcrumb-bar a:hover { color: var(--orange); }
  .breadcrumb-bar .sep { color: var(--border); }
  .breadcrumb-bar .current { color: var(--orange); font-weight: 500; }

  /* ——— SERVICE HERO ——— */
  .service-hero {
    padding: 80px 48px 100px;
    position: relative; overflow: hidden;
    background: var(--white);
  }
  .service-hero-bg-grid {
    position: absolute; inset: 0;
    background-image:
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 64px 64px; opacity: 0.4;
  }
  .service-hero-glow {
    position: absolute; top: -200px; right: -200px;
    width: 800px; height: 800px;
    background: radial-gradient(ellipse, rgba(244,107,27,0.10) 0%, transparent 70%);
    pointer-events: none;
  }
  .service-hero-inner {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: center;
    max-width: 1300px;
  }
  .service-hero-label {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 12px; font-weight: 600; letter-spacing: 0.15em;
    text-transform: uppercase; color: var(--orange); margin-bottom: 20px;
  }
  .service-hero-label::before { content: ''; width: 24px; height: 1.5px; background: var(--orange); }
  .service-hero-title {
    font-family: var(--font-display);
    font-size: clamp(40px, 5.5vw, 76px);
    font-weight: 800; line-height: 0.95;
    letter-spacing: -2.5px; color: var(--black);
    margin-bottom: 24px;
  }
  .service-hero-title .accent { color: var(--orange); }
  .service-hero-sub {
    font-size: 18px; font-weight: 300; color: var(--gray);
    line-height: 1.7; max-width: 500px; margin-bottom: 40px;
  }
  .hero-actions { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
  .btn-primary {
    background: var(--orange); color: white;
    padding: 16px 36px; border-radius: 100px;
    font-size: 15px; font-weight: 500; text-decoration: none;
    display: inline-flex; align-items: center; gap: 8px;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    box-shadow: 0 8px 32px rgba(244,107,27,0.3);
  }
  .btn-primary:hover { background: var(--orange-deep); transform: translateY(-2px); box-shadow: 0 16px 40px rgba(244,107,27,0.4); }
  .btn-secondary {
    color: var(--black); font-size: 15px; font-weight: 500;
    text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
    border-bottom: 1.5px solid var(--black); padding-bottom: 2px;
    transition: color 0.3s, border-color 0.3s;
  }
  .btn-secondary:hover { color: var(--orange); border-color: var(--orange); }

  /* Hero Right — Visual */
  .service-hero-visual {
    position: relative; height: 500px;
    border-radius: 28px; overflow: hidden;
    background: var(--light-gray);
    opacity: 0; transform: translateX(40px);
  }
  .hero-visual-inner {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center;
    flex-direction: column; gap: 20px;
  }
  /* Fake browser mockup */
  .browser-mock {
    width: 88%; background: white; border-radius: 14px;
    box-shadow: 0 24px 80px rgba(0,0,0,0.12);
    overflow: hidden;
  }
  .browser-bar {
    background: #F0EDE8; padding: 10px 14px;
    display: flex; align-items: center; gap: 8px;
  }
  .browser-dot { width: 10px; height: 10px; border-radius: 50%; }
  .browser-dot:nth-child(1) { background: #FF5F57; }
  .browser-dot:nth-child(2) { background: #FEBC2E; }
  .browser-dot:nth-child(3) { background: #28C840; }
  .browser-url {
    flex: 1; background: white; border-radius: 6px;
    padding: 4px 10px; font-size: 11px; color: var(--gray);
    font-family: var(--font-body); margin-left: 8px;
  }
  .browser-body { padding: 20px; }
  .browser-hero-block {
    background: linear-gradient(135deg, var(--orange), var(--orange-deep));
    border-radius: 10px; height: 100px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-family: var(--font-display); font-size: 16px; font-weight: 700;
    margin-bottom: 14px;
  }
  .browser-cards { display: grid; grid-template-columns: repeat(3,1fr); gap: 8px; margin-bottom: 14px; }
  .browser-card { background: var(--light-gray); border-radius: 8px; height: 50px; }
  .browser-card:nth-child(2) { background: var(--orange-pale); }
  .browser-text-lines { display: flex; flex-direction: column; gap: 6px; }
  .browser-line { background: var(--light-gray); border-radius: 4px; height: 8px; }
  .browser-line:nth-child(1) { width: 90%; }
  .browser-line:nth-child(2) { width: 75%; }
  .browser-line:nth-child(3) { width: 60%; }

  /* Floating chips on visual */
  .hero-visual-chips {
    position: absolute; bottom: 24px; left: 20px; right: 20px;
    display: flex; flex-wrap: wrap; gap: 8px;
  }
  .hero-chip {
    background: white; border-radius: 100px; padding: 7px 14px;
    font-size: 12px; font-weight: 500; color: var(--dark);
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
    display: flex; align-items: center; gap: 6px;
    animation: floatChip 3s ease-in-out infinite;
  }
  .hero-chip:nth-child(2) { animation-delay: 0.5s; }
  .hero-chip:nth-child(3) { animation-delay: 1s; }
  .hero-chip:nth-child(4) { animation-delay: 1.5s; }
  .hero-chip .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--orange); }
  @keyframes floatChip {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
  }

  /* Hero stats strip */
  .hero-stats-strip {
    margin-top: 48px; display: flex; gap: 0;
    border: 1px solid var(--border); border-radius: 16px;
    overflow: hidden; background: white;
    opacity: 0;
  }
  .hstat {
    flex: 1; padding: 24px 28px;
    border-right: 1px solid var(--border);
    position: relative;
  }
  .hstat:last-child { border-right: none; }
  .hstat-num {
    font-family: var(--font-display); font-size: 36px; font-weight: 800;
    color: var(--black); line-height: 1;
  }
  .hstat-num span { color: var(--orange); }
  .hstat-label { font-size: 13px; color: var(--gray); margin-top: 4px; }

  /* MARQUEE */
  .marquee-section {
    overflow: hidden; border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border); padding: 18px 0;
    background: var(--light-gray);
  }
  .marquee-track {
    display: flex; gap: 0; animation: marquee 25s linear infinite; width: max-content;
  }
  .marquee-item {
    display: flex; align-items: center; gap: 16px; padding: 0 32px;
    font-family: var(--font-display); font-size: 13px; font-weight: 600;
    letter-spacing: 0.12em; text-transform: uppercase; color: var(--gray); white-space: nowrap;
  }
  .marquee-item .sep { color: var(--orange); font-size: 18px; }
  @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* COMMON SECTION STYLES */
  section { padding: 100px 48px; }
  .section-label {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 12px; font-weight: 600; letter-spacing: 0.15em;
    text-transform: uppercase; color: var(--orange); margin-bottom: 20px;
  }
  .section-label::before { content: ''; width: 24px; height: 1.5px; background: var(--orange); }
  .section-title {
    font-family: var(--font-display);
    font-size: clamp(36px, 5vw, 64px);
    font-weight: 800; line-height: 1.0; letter-spacing: -1.5px;
    color: var(--black); margin-bottom: 20px;
  }
  .section-title .accent { color: var(--orange); }
  .section-sub {
    font-size: 17px; font-weight: 300; color: var(--gray);
    line-height: 1.7; max-width: 560px;
  }

  /* ——— WHAT WE BUILD ——— */
  .what-we-build { background: var(--light-gray); }
  .build-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px; margin-top: 56px;
  }
  .build-card {
    background: white; border-radius: 20px; padding: 36px;
    border: 1px solid var(--border);
    position: relative; overflow: hidden;
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.3s;
    opacity: 0; transform: translateY(40px);
  }
  .build-card:hover {
    transform: translateY(-6px) !important;
    box-shadow: 0 24px 60px rgba(0,0,0,0.08);
    border-color: var(--orange);
  }
  .build-card.featured {
    background: var(--black); border-color: var(--black); color: white;
  }
  .build-icon {
    width: 54px; height: 54px; border-radius: 14px;
    background: var(--orange-pale);
    display: flex; align-items: center; justify-content: center;
    font-size: 26px; margin-bottom: 24px;
  }
  .build-card.featured .build-icon { background: rgba(244,107,27,0.2); }
  .build-card h3 {
    font-family: var(--font-display); font-size: 20px;
    font-weight: 700; margin-bottom: 12px;
  }
  .build-card p { font-size: 14px; color: var(--gray); line-height: 1.7; }
  .build-card.featured p { color: rgba(255,255,255,0.65); }
  .build-tag {
    position: absolute; top: 24px; right: 24px;
    background: var(--orange-pale); color: var(--orange-deep);
    border-radius: 100px; padding: 4px 12px;
    font-size: 11px; font-weight: 600; letter-spacing: 0.05em;
  }
  .build-card.featured .build-tag { background: rgba(244,107,27,0.25); color: var(--orange-light); }
  .build-list {
    margin-top: 16px; display: flex; flex-direction: column; gap: 8px;
  }
  .build-list-item {
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; color: var(--gray);
  }
  .build-card.featured .build-list-item { color: rgba(255,255,255,0.6); }
  .build-list-item::before {
    content: '→'; color: var(--orange); font-weight: 700; flex-shrink: 0;
  }

  /* ——— TECH STACK ——— */
  .tech-stack { background: var(--white); }
  .tech-header { margin-bottom: 56px; }
  .tech-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;
  }
  .tech-category {
    background: var(--light-gray); border-radius: 20px;
    padding: 32px; opacity: 0; transform: translateY(30px);
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .tech-category:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(0,0,0,0.07); }
  .tech-cat-label {
    font-size: 11px; font-weight: 700; letter-spacing: 0.15em;
    text-transform: uppercase; color: var(--orange); margin-bottom: 16px;
  }
  .tech-cat-title {
    font-family: var(--font-display); font-size: 18px; font-weight: 700;
    margin-bottom: 20px; color: var(--black);
  }
  .tech-tags { display: flex; flex-wrap: wrap; gap: 8px; }
  .tech-tag {
    background: white; border: 1px solid var(--border);
    border-radius: 100px; padding: 5px 12px;
    font-size: 12px; font-weight: 500; color: var(--dark);
    transition: border-color 0.3s, background 0.3s;
  }
  .tech-tag:hover { border-color: var(--orange); background: var(--orange-pale); }

  /* ——— PROCESS ——— */
  .process { background: var(--light-gray); }
  .process-steps {
    display: grid; grid-template-columns: repeat(6, 1fr);
    gap: 0; margin-top: 56px;
    border: 1px solid var(--border); border-radius: 20px; overflow: hidden;
  }
  .process-step {
    padding: 36px 28px; border-right: 1px solid var(--border);
    position: relative; background: white;
    opacity: 0; transition: background 0.3s;
  }
  .process-step:last-child { border-right: none; }
  .process-step:hover { background: var(--orange-pale); }
  .step-num {
    font-family: var(--font-display); font-size: 42px; font-weight: 800;
    color: var(--orange); opacity: 0.2; line-height: 1; margin-bottom: 14px;
  }
  .step-icon { font-size: 24px; margin-bottom: 12px; }
  .step-title { font-family: var(--font-display); font-size: 16px; font-weight: 700; margin-bottom: 8px; }
  .step-desc { font-size: 12px; color: var(--gray); line-height: 1.6; }

  /* ——— AI EDGE ——— */
  .ai-edge { background: var(--white); position: relative; overflow: hidden; }
  .ai-split {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: center; margin-top: 20px;
  }
  .ai-visual {
    position: relative; height: 480px; border-radius: 24px;
    overflow: hidden; background: var(--black);
    opacity: 0; transform: translateX(-40px);
  }
  .ai-visual-inner {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 12px;
  }
  .ai-orb {
    width: 140px; height: 140px; border-radius: 50%;
    background: radial-gradient(circle at 40% 40%, var(--orange-light), var(--orange-deep));
    box-shadow: 0 0 80px rgba(244,107,27,0.5);
    animation: float 4s ease-in-out infinite;
  }
  @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-16px); } }
  .ai-rings { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; }
  .ai-ring {
    position: absolute; border-radius: 50%;
    border: 1px solid rgba(244,107,27,0.2);
    animation: expand 4s ease-in-out infinite;
  }
  .ai-ring:nth-child(1) { width: 200px; height: 200px; }
  .ai-ring:nth-child(2) { width: 290px; height: 290px; animation-delay: 0.5s; }
  .ai-ring:nth-child(3) { width: 380px; height: 380px; animation-delay: 1s; }
  @keyframes expand { 0%, 100% { opacity: 0.3; transform: scale(1); } 50% { opacity: 0.6; transform: scale(1.04); } }
  .ai-bottom-chips {
    position: absolute; bottom: 24px; left: 20px; right: 20px;
    display: flex; flex-wrap: wrap; gap: 8px;
  }
  .ai-chip {
    background: rgba(255,255,255,0.08); backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 100px; padding: 6px 14px;
    font-size: 12px; font-weight: 500; color: rgba(255,255,255,0.8);
    display: flex; align-items: center; gap: 6px;
  }
  .ai-chip .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--orange); }
  .ai-text-content { opacity: 0; transform: translateX(40px); }
  .ai-features { margin-top: 36px; display: flex; flex-direction: column; gap: 16px; }
  .ai-feature {
    display: flex; gap: 16px; align-items: flex-start;
    padding: 20px; border-radius: 16px;
    border: 1px solid var(--border); transition: border-color 0.3s, background 0.3s;
  }
  .ai-feature:hover { border-color: var(--orange); background: var(--orange-pale); }
  .ai-feature-icon {
    width: 40px; height: 40px; flex-shrink: 0;
    border-radius: 10px; background: var(--orange-pale);
    display: flex; align-items: center; justify-content: center; font-size: 18px;
  }
  .ai-feature h4 { font-family: var(--font-display); font-size: 16px; font-weight: 700; margin-bottom: 4px; }
  .ai-feature p { font-size: 13px; color: var(--gray); line-height: 1.6; }

  /* ——— PORTFOLIO ——— */
  .portfolio { background: var(--light-gray); overflow: hidden; }
  .portfolio-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 48px; }
  .portfolio-track-wrap { overflow: hidden; position: relative; }
  .portfolio-track {
    display: flex; gap: 24px;
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1); will-change: transform;
  }
  .portfolio-card {
    min-width: 380px; border-radius: 20px; overflow: hidden;
    background: white; flex-shrink: 0;
    opacity: 0; box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s, transform 0.3s;
  }
  .portfolio-card:hover { box-shadow: 0 16px 50px rgba(0,0,0,0.12); transform: translateY(-4px); }
  .portfolio-img {
    height: 240px; background: var(--light-gray);
    position: relative; overflow: hidden;
  }
  .portfolio-img-bg {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center; font-size: 60px;
  }
  .portfolio-img-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, var(--orange), var(--orange-deep));
    opacity: 0; transition: opacity 0.3s;
    display: flex; align-items: center; justify-content: center;
  }
  .portfolio-card:hover .portfolio-img-overlay { opacity: 0.9; }
  .portfolio-img-overlay span {
    color: white; font-family: var(--font-display);
    font-size: 18px; font-weight: 700; letter-spacing: -0.5px;
  }
  .portfolio-info { padding: 24px; }
  .portfolio-tags { display: flex; gap: 8px; margin-bottom: 12px; flex-wrap: wrap; }
  .portfolio-tag {
    background: var(--orange-pale); color: var(--orange-deep);
    border-radius: 100px; padding: 3px 10px; font-size: 11px; font-weight: 600;
  }
  .portfolio-info h3 { font-family: var(--font-display); font-size: 18px; font-weight: 700; margin-bottom: 6px; }
  .portfolio-info p { font-size: 13px; color: var(--gray); }
  .slider-controls { display: flex; gap: 10px; }
  .slider-btn {
    width: 48px; height: 48px; border-radius: 50%;
    border: 1.5px solid var(--border); background: white;
    cursor: none; display: flex; align-items: center; justify-content: center;
    font-size: 18px; color: var(--dark);
    transition: background 0.3s, border-color 0.3s, color 0.3s;
  }
  .slider-btn:hover { background: var(--orange); border-color: var(--orange); color: white; }

  /* ——— REGIONS ——— */
  .regions { background: var(--black); color: white; }
  .regions .section-label { color: var(--orange-light); }
  .regions .section-label::before { background: var(--orange-light); }
  .regions .section-title { color: white; }
  .regions-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 20px; margin-top: 56px;
  }
  .region-card {
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 24px; padding: 40px;
    position: relative; overflow: hidden;
    transition: border-color 0.3s, background 0.3s;
    opacity: 0; transform: translateY(30px);
  }
  .region-card:hover { border-color: var(--orange); background: rgba(244,107,27,0.04); }
  .region-flag { font-size: 48px; margin-bottom: 20px; display: block; }
  .region-card h3 {
    font-family: var(--font-display); font-size: 24px; font-weight: 800;
    margin-bottom: 8px; color: white;
  }
  .region-card h4 { font-size: 14px; color: rgba(255,255,255,0.4); margin-bottom: 20px; font-weight: 400; }
  .region-card p { font-size: 14px; color: rgba(255,255,255,0.6); line-height: 1.7; margin-bottom: 24px; }
  .region-cities { display: flex; flex-wrap: wrap; gap: 8px; }
  .region-city {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 100px; padding: 4px 12px;
    font-size: 12px; color: rgba(255,255,255,0.5);
  }
  .region-glow {
    position: absolute; top: -80px; right: -80px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(244,107,27,0.12), transparent 70%);
    pointer-events: none;
  }

  /* ——— PRICING ——— */
  .pricing { background: var(--white); }
  .pricing-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 20px; margin-top: 56px; align-items: start;
  }
  .pricing-card {
    border: 1.5px solid var(--border);
    border-radius: 24px; padding: 40px;
    position: relative; overflow: hidden;
    transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
    opacity: 0; transform: translateY(30px);
  }
  .pricing-card:hover { transform: translateY(-6px); box-shadow: 0 24px 60px rgba(0,0,0,0.08); border-color: var(--orange); }
  .pricing-card.featured {
    background: var(--black); border-color: var(--orange);
    color: white; transform: scale(1.02);
  }
  .pricing-card.featured:hover { transform: scale(1.02) translateY(-6px); }
  .pricing-badge {
    position: absolute; top: -1px; left: 50%; transform: translateX(-50%);
    background: var(--orange); color: white;
    padding: 5px 20px; border-radius: 0 0 12px 12px;
    font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
  }
  .pricing-name {
    font-family: var(--font-display); font-size: 14px; font-weight: 700;
    letter-spacing: 0.1em; text-transform: uppercase;
    color: var(--orange); margin-bottom: 12px;
  }
  .pricing-price {
    font-family: var(--font-display); font-size: 48px; font-weight: 800;
    line-height: 1; color: var(--black); margin-bottom: 4px;
  }
  .pricing-card.featured .pricing-price { color: white; }
  .pricing-price span { font-size: 20px; font-weight: 400; color: var(--gray); }
  .pricing-card.featured .pricing-price span { color: rgba(255,255,255,0.5); }
  .pricing-price-sub { font-size: 13px; color: var(--gray); margin-bottom: 28px; }
  .pricing-card.featured .pricing-price-sub { color: rgba(255,255,255,0.4); }
  .pricing-divider { height: 1px; background: var(--border); margin-bottom: 28px; }
  .pricing-card.featured .pricing-divider { background: rgba(255,255,255,0.1); }
  .pricing-features { display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px; }
  .pricing-feat {
    display: flex; align-items: center; gap: 10px;
    font-size: 14px; color: var(--dark);
  }
  .pricing-card.featured .pricing-feat { color: rgba(255,255,255,0.75); }
  .pricing-feat-check {
    width: 20px; height: 20px; border-radius: 50%;
    background: var(--orange-pale); color: var(--orange);
    display: flex; align-items: center; justify-content: center;
    font-size: 11px; font-weight: 700; flex-shrink: 0;
  }
  .pricing-card.featured .pricing-feat-check { background: rgba(244,107,27,0.3); color: var(--orange-light); }
  .btn-pricing {
    width: 100%; background: var(--black); color: white;
    padding: 15px; border-radius: 12px; border: none;
    font-size: 15px; font-weight: 600; font-family: var(--font-body);
    cursor: none; transition: background 0.3s, transform 0.2s;
    text-decoration: none; display: block; text-align: center;
  }
  .btn-pricing:hover { background: var(--orange); transform: translateY(-1px); }
  .pricing-card.featured .btn-pricing { background: var(--orange); }
  .pricing-card.featured .btn-pricing:hover { background: var(--orange-light); }
  .pricing-note {
    text-align: center; margin-top: 24px;
    font-size: 13px; color: var(--gray);
  }
  .pricing-note a { color: var(--orange); text-decoration: none; }

  /* ——— WHY VEERHAN ——— */
  .why { background: var(--light-gray); }
  .why-grid {
    display: grid; grid-template-columns: repeat(2, 1fr);
    gap: 16px; margin-top: 56px;
  }
  .why-item {
    background: white; border-radius: 20px; padding: 36px;
    display: flex; gap: 20px;
    opacity: 0; transition: transform 0.3s, box-shadow 0.3s;
  }
  .why-item:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); }
  .why-num {
    font-family: var(--font-display); font-size: 48px; font-weight: 800;
    color: var(--orange); opacity: 0.15; line-height: 1; flex-shrink: 0;
  }
  .why-item h3 { font-family: var(--font-display); font-size: 19px; font-weight: 700; margin-bottom: 8px; }
  .why-item p { font-size: 14px; color: var(--gray); line-height: 1.65; }

  /* ——— TESTIMONIALS ——— */
  .testimonials { background: var(--white); }
  .testi-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 20px; margin-top: 56px;
  }
  .testi-card {
    border: 1px solid var(--border); border-radius: 20px; padding: 32px;
    position: relative; opacity: 0; transition: border-color 0.3s, transform 0.3s;
  }
  .testi-card:hover { border-color: var(--orange); transform: translateY(-4px); }
  .testi-stars { font-size: 14px; color: var(--orange); margin-bottom: 12px; }
  .testi-quote { font-size: 40px; color: var(--orange); line-height: 1; margin-bottom: 16px; font-family: Georgia, serif; }
  .testi-text { font-size: 15px; line-height: 1.7; color: var(--dark); margin-bottom: 24px; }
  .testi-author { display: flex; align-items: center; gap: 12px; }
  .testi-avatar {
    width: 44px; height: 44px; border-radius: 50%;
    background: linear-gradient(135deg, var(--orange), var(--orange-deep));
    display: flex; align-items: center; justify-content: center;
    color: white; font-weight: 700; font-family: var(--font-display); font-size: 16px;
  }
  .testi-name { font-weight: 600; font-size: 14px; }
  .testi-role { font-size: 12px; color: var(--gray); }

  /* ——— FAQ ——— */
  .faq { background: var(--light-gray); }
  .faq-list { margin-top: 56px; display: flex; flex-direction: column; gap: 12px; max-width: 800px; }
  .faq-item {
    background: white; border-radius: 16px; overflow: hidden;
    border: 1px solid var(--border);
    opacity: 0; transform: translateY(20px);
    transition: border-color 0.3s;
  }
  .faq-item:hover { border-color: var(--orange); }
  .faq-q {
    padding: 22px 28px; display: flex; justify-content: space-between; align-items: center;
    cursor: none; font-family: var(--font-display);
    font-size: 16px; font-weight: 700; color: var(--black);
    user-select: none;
  }
  .faq-icon {
    width: 28px; height: 28px; border-radius: 50%;
    background: var(--orange-pale); color: var(--orange);
    display: flex; align-items: center; justify-content: center;
    font-size: 16px; flex-shrink: 0; transition: transform 0.3s, background 0.3s;
  }
  .faq-item.open .faq-icon { transform: rotate(45deg); background: var(--orange); color: white; }
  .faq-a {
    max-height: 0; overflow: hidden;
    transition: max-height 0.4s ease, padding 0.3s ease;
  }
  .faq-a-inner {
    padding: 0 28px 22px;
    font-size: 15px; color: var(--gray); line-height: 1.7;
  }
  .faq-item.open .faq-a { max-height: 300px; }

  /* ——— CONTACT ——— */
  .contact { background: var(--black); color: white; }
  .contact .section-label { color: var(--orange-light); }
  .contact .section-label::before { background: var(--orange-light); }
  .contact-inner {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; margin-top: 56px; align-items: start;
  }
  .contact-info .section-title { color: white; margin-bottom: 20px; }
  .contact-info .section-sub { color: rgba(255,255,255,0.6); margin-bottom: 40px; }
  .contact-detail {
    display: flex; align-items: center; gap: 14px;
    padding: 16px 0; border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .contact-detail:last-of-type { border-bottom: none; }
  .contact-detail-icon {
    width: 40px; height: 40px; border-radius: 10px;
    background: rgba(244,107,27,0.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 17px; flex-shrink: 0;
  }
  .contact-detail span { font-size: 14px; color: rgba(255,255,255,0.7); display: block; margin-bottom: 2px; }
  .contact-detail a { color: white; text-decoration: none; font-weight: 500; font-size: 15px; }
  .contact-detail a:hover { color: var(--orange-light); }
  .contact-form {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 24px; padding: 40px;
    opacity: 0; transform: translateX(40px);
  }
  .form-row { margin-bottom: 18px; }
  .form-row label { display: block; font-size: 13px; color: rgba(255,255,255,0.6); margin-bottom: 8px; font-weight: 500; }
  .form-row input, .form-row select, .form-row textarea {
    width: 100%; background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1); border-radius: 12px;
    padding: 14px 16px; color: white; font-size: 14px;
    font-family: var(--font-body); outline: none; transition: border-color 0.3s;
  }
  .form-row input:focus, .form-row textarea:focus, .form-row select:focus { border-color: var(--orange); }
  .form-row textarea { resize: vertical; min-height: 100px; }
  .form-row select option { background: var(--dark); }
  .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .btn-form {
    width: 100%; background: var(--orange); color: white;
    padding: 16px; border-radius: 12px; border: none;
    font-size: 15px; font-weight: 600; font-family: var(--font-body);
    cursor: none; transition: background 0.3s, transform 0.2s; margin-top: 8px;
  }
  .btn-form:hover { background: var(--orange-light); transform: translateY(-1px); }

  /* CTA STRIP */
  .cta-strip {
    background: var(--orange); padding: 64px 48px;
    display: flex; align-items: center; justify-content: space-between;
    gap: 40px; flex-wrap: wrap;
  }
  .cta-strip-text h2 {
    font-family: var(--font-display); font-size: clamp(28px, 4vw, 48px);
    font-weight: 800; color: white; letter-spacing: -1px; margin-bottom: 8px;
  }
  .cta-strip-text p { font-size: 16px; color: rgba(255,255,255,0.8); }
  .btn-cta-white {
    background: white; color: var(--orange);
    padding: 16px 36px; border-radius: 100px;
    font-size: 15px; font-weight: 700; text-decoration: none;
    display: inline-flex; align-items: center; gap: 8px;
    white-space: nowrap;
    transition: transform 0.2s, box-shadow 0.3s;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
  }
  .btn-cta-white:hover { transform: translateY(-2px); box-shadow: 0 16px 40px rgba(0,0,0,0.2); }

  /* FOOTER */
  footer {
    background: var(--black); border-top: 1px solid rgba(255,255,255,0.06);
    padding: 60px 48px 32px; color: white;
  }
  .footer-inner {
    display: grid; grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 48px; margin-bottom: 48px;
  }
  .footer-brand .nav-logo-text { color: white; font-size: 24px; }
  .footer-brand p { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.7; margin-top: 12px; max-width: 260px; }
  .footer-col h4 {
    font-family: var(--font-display); font-size: 14px; font-weight: 700;
    margin-bottom: 16px; color: white; letter-spacing: 0.02em;
  }
  .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
  .footer-col ul a { font-size: 13px; color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
  .footer-col ul a:hover { color: var(--orange-light); }
  .footer-bottom {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid rgba(255,255,255,0.06); padding-top: 24px;
  }
  .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.35); }
  .footer-bottom p span { color: var(--orange); }
  .footer-social { display: flex; gap: 12px; margin-top: 20px; }
  .social-btn {
    width: 36px; height: 36px; border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.12);
    display: flex; align-items: center; justify-content: center;
    font-size: 14px; color: rgba(255,255,255,0.5); text-decoration: none;
    transition: border-color 0.3s, color 0.3s, background 0.3s;
  }
  .social-btn:hover { border-color: var(--orange); color: var(--orange); background: rgba(244,107,27,0.1); }

  /* OTHER SERVICES NAV */
  .other-services { background: var(--white); padding: 80px 48px; }
  .other-services-header { margin-bottom: 40px; }
  .services-nav-grid {
    display: grid; grid-template-columns: repeat(5, 1fr); gap: 12px;
  }
  .svc-nav-card {
    border: 1.5px solid var(--border); border-radius: 16px;
    padding: 24px 20px; text-decoration: none; color: var(--black);
    transition: border-color 0.3s, transform 0.3s, background 0.3s;
    display: flex; flex-direction: column; gap: 10px;
  }
  .svc-nav-card:hover { border-color: var(--orange); transform: translateY(-4px); background: var(--orange-pale); }
  .svc-nav-icon { font-size: 28px; }
  .svc-nav-name { font-family: var(--font-display); font-size: 15px; font-weight: 700; }
  .svc-nav-arrow { color: var(--orange); font-size: 18px; }

  /* RESPONSIVE */
  @media (max-width: 1200px) {
    .build-grid { grid-template-columns: repeat(2, 1fr); }
    .tech-grid { grid-template-columns: repeat(2, 1fr); }
    .process-steps { grid-template-columns: repeat(3, 1fr); }
    .process-step:nth-child(3) { border-right: none; }
    .process-step:nth-child(3) ~ .process-step { border-top: 1px solid var(--border); }
    .regions-grid { grid-template-columns: 1fr; }
    .pricing-grid { grid-template-columns: 1fr; }
    .pricing-card.featured { transform: scale(1); }
    .services-nav-grid { grid-template-columns: repeat(3, 1fr); }
    .testi-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 1024px) {
    .service-hero-inner { grid-template-columns: 1fr; gap: 40px; }
    .service-hero-visual { display: none; }
    .ai-split { grid-template-columns: 1fr; }
    .contact-inner { grid-template-columns: 1fr; }
    .footer-inner { grid-template-columns: 1fr 1fr; }
    .why-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 768px) {
    nav { padding: 16px 24px; }
    .nav-links { display: none; }
    section, .other-services { padding: 60px 24px; }
    .service-hero { padding: 60px 24px 80px; }
    .breadcrumb-bar { padding: 12px 24px; }
    .build-grid { grid-template-columns: 1fr; }
    .tech-grid { grid-template-columns: 1fr; }
    .process-steps { grid-template-columns: 1fr; }
    .process-step { border-right: none; border-bottom: 1px solid var(--border); }
    .process-step:last-child { border-bottom: none; }
    .testi-grid { grid-template-columns: 1fr; }
    .footer-inner { grid-template-columns: 1fr; gap: 32px; }
    .footer-bottom { flex-direction: column; gap: 16px; text-align: center; }
    .form-grid { grid-template-columns: 1fr; }
    .services-nav-grid { grid-template-columns: repeat(2, 1fr); }
    .cta-strip { flex-direction: column; text-align: center; }
    .hero-stats-strip { flex-direction: column; }
    .hstat { border-right: none; border-bottom: 1px solid var(--border); }
    .hstat:last-child { border-bottom: none; }
  }
</style>
@endsection

@section('breadcrumb')
@endsection

@section('content')
<!-- ============================================================
  SERVICE HERO
============================================================ -->
<section class="service-hero" id="home" aria-label="Web Design and Development Service Introduction">
  <div class="service-hero-bg-grid"></div>
  <div class="service-hero-glow"></div>

  <div class="service-hero-inner">
    <!-- Left Content -->
    <div class="service-hero-left">
      <div class="service-hero-label" id="heroLabel">Web Design & Development</div>
      <h1 class="service-hero-title" id="heroTitle">
        Websites That<br><span class="accent">Convert.</span><br>Experiences That<br><span class="accent">Last.</span>
      </h1>
      <p class="service-hero-sub" id="heroSub">
        We craft high-performance websites and custom web applications for businesses in India, the USA, and Dubai — built to rank on Google, load in under 2 seconds, and turn visitors into customers.
      </p>
      <div class="hero-actions" id="heroActions">
        <a href="{{ route('contact') }}#contact" class="btn-primary">Start Your Project →</a>
        <a href="#portfolio" class="btn-secondary">View Our Work ↗</a>
      </div>
      <div class="hero-stats-strip" id="heroStats">
        <div class="hstat">
          <div class="hstat-num">200<span>+</span></div>
          <div class="hstat-label">Websites Delivered</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">&lt;2<span>s</span></div>
          <div class="hstat-label">Avg. Load Time</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">4<span>×</span></div>
          <div class="hstat-label">Faster with AI</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">98<span>%</span></div>
          <div class="hstat-label">Client Retention</div>
        </div>
      </div>
    </div>

    <!-- Right Visual -->
    <div class="service-hero-visual" id="heroVisual">
      <div class="hero-visual-inner">
        <div class="browser-mock">
          <div class="browser-bar">
            <div class="browser-dot"></div>
            <div class="browser-dot"></div>
            <div class="browser-dot"></div>
            <div class="browser-url">veerhan.com/your-site</div>
          </div>
          <div class="browser-body">
            <div class="browser-hero-block">Your Brand. Built Bold.</div>
            <div class="browser-cards">
              <div class="browser-card"></div>
              <div class="browser-card"></div>
              <div class="browser-card"></div>
            </div>
            <div class="browser-text-lines">
              <div class="browser-line"></div>
              <div class="browser-line"></div>
              <div class="browser-line"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-visual-chips">
        <div class="hero-chip"><span class="dot"></span> React / Next.js</div>
        <div class="hero-chip"><span class="dot"></span> Laravel</div>
        <div class="hero-chip"><span class="dot"></span> 99 PageSpeed</div>
        <div class="hero-chip"><span class="dot"></span> SEO Ready</div>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-section" aria-hidden="true">
  <div class="marquee-track">
    <div class="marquee-item">UI/UX Design <span class="sep">✦</span></div>
    <div class="marquee-item">Landing Pages <span class="sep">✦</span></div>
    <div class="marquee-item">React Development <span class="sep">✦</span></div>
    <div class="marquee-item">Laravel Apps <span class="sep">✦</span></div>
    <div class="marquee-item">E-Commerce <span class="sep">✦</span></div>
    <div class="marquee-item">Web Apps <span class="sep">✦</span></div>
    <div class="marquee-item">API Integration <span class="sep">✦</span></div>
    <div class="marquee-item">Mobile-First <span class="sep">✦</span></div>
    <div class="marquee-item">Core Web Vitals <span class="sep">✦</span></div>
    <div class="marquee-item">India · USA · Dubai <span class="sep">✦</span></div>
    <div class="marquee-item">UI/UX Design <span class="sep">✦</span></div>
    <div class="marquee-item">Landing Pages <span class="sep">✦</span></div>
    <div class="marquee-item">React Development <span class="sep">✦</span></div>
    <div class="marquee-item">Laravel Apps <span class="sep">✦</span></div>
    <div class="marquee-item">E-Commerce <span class="sep">✦</span></div>
    <div class="marquee-item">Web Apps <span class="sep">✦</span></div>
    <div class="marquee-item">API Integration <span class="sep">✦</span></div>
    <div class="marquee-item">Mobile-First <span class="sep">✦</span></div>
    <div class="marquee-item">Core Web Vitals <span class="sep">✦</span></div>
    <div class="marquee-item">India · USA · Dubai <span class="sep">✦</span></div>
  </div>
</div>

<!-- ============================================================
  WHAT WE BUILD
============================================================ -->
<section class="what-we-build" id="what-we-build" aria-labelledby="buildTitle">
  <div class="section-label">What We Build</div>
  <h2 class="section-title" id="buildTitle">Every Type of<br><span class="accent">Digital Product</span></h2>
  <p class="section-sub">From a single landing page to an enterprise-grade SaaS platform — our team handles design, development, and deployment end-to-end.</p>

  <div class="build-grid">
    <div class="build-card featured">
      <div class="build-tag">Most Popular</div>
      <div class="build-icon">🎨</div>
      <h3>Custom Business Websites</h3>
      <p>Pixel-perfect, brand-led websites that establish authority, rank on Google, and convert visitors. Built specifically for your industry, audience, and goals.</p>
      <div class="build-list">
        <div class="build-list-item">Corporate & agency websites</div>
        <div class="build-list-item">Service business websites</div>
        <div class="build-list-item">Portfolio & showcase sites</div>
        <div class="build-list-item">Multi-language sites</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">High ROI</div>
      <div class="build-icon">⚡</div>
      <h3>Landing Pages & Funnels</h3>
      <p>Conversion-engineered landing pages for paid ads, product launches, and lead generation — tested and optimised for maximum ROI.</p>
      <div class="build-list">
        <div class="build-list-item">Google & Meta ads landing pages</div>
        <div class="build-list-item">Lead capture funnels</div>
        <div class="build-list-item">Product launch pages</div>
        <div class="build-list-item">A/B tested layouts</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Sell Online</div>
      <div class="build-icon">🛒</div>
      <h3>E-Commerce Stores</h3>
      <p>Fast, beautiful online stores that sell — whether you're launching a D2C brand in India or scaling to the US and Dubai markets.</p>
      <div class="build-list">
        <div class="build-list-item">WooCommerce & Shopify</div>
        <div class="build-list-item">Custom Laravel e-commerce</div>
        <div class="build-list-item">Multi-currency & multi-region</div>
        <div class="build-list-item">Payment gateway integration</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Scalable</div>
      <div class="build-icon">🔧</div>
      <h3>Web Applications & SaaS</h3>
      <p>Complex web apps, dashboards, CRMs, portals, and SaaS platforms built on Laravel and React — scalable from Day 1.</p>
      <div class="build-list">
        <div class="build-list-item">Custom CMS & admin panels</div>
        <div class="build-list-item">Client/vendor portals</div>
        <div class="build-list-item">SaaS MVP development</div>
        <div class="build-list-item">REST API & integrations</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Redesign</div>
      <div class="build-icon">🔄</div>
      <h3>Website Redesigns</h3>
      <p>Transform your outdated website into a modern, high-performing asset. We preserve your SEO equity while dramatically improving design and speed.</p>
      <div class="build-list">
        <div class="build-list-item">SEO-safe migrations</div>
        <div class="build-list-item">Performance overhaul</div>
        <div class="build-list-item">Modern UI/UX refresh</div>
        <div class="build-list-item">CMS upgrades</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Strategy</div>
      <div class="build-icon">🎯</div>
      <h3>UI/UX Design & Prototyping</h3>
      <p>Research-led design that works before a line of code is written. From wireframes to high-fidelity Figma prototypes, we validate ideas early.</p>
      <div class="build-list">
        <div class="build-list-item">User research & personas</div>
        <div class="build-list-item">Wireframing & flows</div>
        <div class="build-list-item">High-fidelity Figma prototypes</div>
        <div class="build-list-item">Design systems & style guides</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  TECH STACK
============================================================ -->
<section class="tech-stack" id="tech-stack" aria-labelledby="techTitle">
  <div class="tech-header">
    <div class="section-label">Technologies</div>
    <h2 class="section-title" id="techTitle">The Stack Behind<br><span class="accent">Your Success</span></h2>
    <p class="section-sub">We use battle-tested, modern technologies that ensure your website is fast, secure, and easy to maintain for years to come.</p>
  </div>
  <div class="tech-grid">
    <div class="tech-category">
      <div class="tech-cat-label">Frontend</div>
      <div class="tech-cat-title">What Your Users See</div>
      <div class="tech-tags">
        <span class="tech-tag">React</span>
        <span class="tech-tag">Next.js</span>
        <span class="tech-tag">Vue.js</span>
        <span class="tech-tag">Alpine.js</span>
        <span class="tech-tag">Tailwind CSS</span>
        <span class="tech-tag">GSAP</span>
        <span class="tech-tag">Framer Motion</span>
        <span class="tech-tag">Figma</span>
      </div>
    </div>
    <div class="tech-category">
      <div class="tech-cat-label">Backend</div>
      <div class="tech-cat-title">The Engine Under the Hood</div>
      <div class="tech-tags">
        <span class="tech-tag">Laravel</span>
        <span class="tech-tag">PHP 8.x</span>
        <span class="tech-tag">Node.js</span>
        <span class="tech-tag">REST APIs</span>
        <span class="tech-tag">MySQL</span>
        <span class="tech-tag">PostgreSQL</span>
        <span class="tech-tag">Redis</span>
        <span class="tech-tag">GraphQL</span>
      </div>
    </div>
    <div class="tech-category">
      <div class="tech-cat-label">CMS & E-Commerce</div>
      <div class="tech-cat-title">Content & Commerce</div>
      <div class="tech-tags">
        <span class="tech-tag">WordPress</span>
        <span class="tech-tag">Shopify</span>
        <span class="tech-tag">WooCommerce</span>
        <span class="tech-tag">Strapi</span>
        <span class="tech-tag">Payload CMS</span>
        <span class="tech-tag">Contentful</span>
        <span class="tech-tag">Razorpay</span>
        <span class="tech-tag">Stripe</span>
      </div>
    </div>
    <div class="tech-category">
      <div class="tech-cat-label">Infrastructure</div>
      <div class="tech-cat-title">Speed, Scale & Security</div>
      <div class="tech-tags">
        <span class="tech-tag">AWS</span>
        <span class="tech-tag">Cloudflare</span>
        <span class="tech-tag">Vercel</span>
        <span class="tech-tag">Docker</span>
        <span class="tech-tag">CI/CD</span>
        <span class="tech-tag">GitHub</span>
        <span class="tech-tag">SSL/HTTPS</span>
        <span class="tech-tag">CDN</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  PROCESS
============================================================ -->
<section class="process" id="process" aria-labelledby="processTitle">
  <div class="section-label">How We Work</div>
  <h2 class="section-title" id="processTitle">Our <span class="accent">6-Step</span><br>Delivery Process</h2>
  <p class="section-sub">A transparent, milestone-driven process so you always know exactly where your project stands — no surprises.</p>

  <div class="process-steps" role="list">
    <div class="process-step" role="listitem">
      <div class="step-num">01</div>
      <div class="step-icon">🔍</div>
      <div class="step-title">Discovery & Brief</div>
      <div class="step-desc">We dig into your business, competitors, target audience, and goals through a structured discovery call. No guesswork.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">02</div>
      <div class="step-icon">🗺️</div>
      <div class="step-title">Strategy & Sitemap</div>
      <div class="step-desc">We plan the site architecture, user journeys, and content strategy to maximise conversions and SEO from day one.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">03</div>
      <div class="step-icon">✏️</div>
      <div class="step-title">UI/UX Design</div>
      <div class="step-desc">High-fidelity Figma designs with your branding. You approve every screen before we write a single line of code.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">04</div>
      <div class="step-icon">⚙️</div>
      <div class="step-title">Development</div>
      <div class="step-desc">Clean, semantic, scalable code. AI-accelerated development means faster delivery without cutting quality corners.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">05</div>
      <div class="step-icon">🧪</div>
      <div class="step-title">QA & Testing</div>
      <div class="step-desc">Cross-browser, cross-device testing. Performance audits. Security scans. Nothing ships until it passes every check.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">06</div>
      <div class="step-icon">🚀</div>
      <div class="step-title">Launch & Support</div>
      <div class="step-desc">Smooth deployment with zero downtime. Post-launch monitoring, training, and ongoing maintenance packages available.</div>
    </div>
  </div>
</section>

<!-- ============================================================
  AI EDGE
============================================================ -->
<section class="ai-edge" id="ai" aria-labelledby="aiTitle">
  <div class="section-label">Our AI Advantage</div>
  <div class="ai-split">
    <div class="ai-visual" id="aiVisual" aria-hidden="true">
      <div class="ai-visual-inner">
        <div class="ai-rings">
          <div class="ai-ring"></div>
          <div class="ai-ring"></div>
          <div class="ai-ring"></div>
        </div>
        <div class="ai-orb"></div>
      </div>
      <div class="ai-bottom-chips">
        <div class="ai-chip"><span class="dot"></span> 4× Faster Delivery</div>
        <div class="ai-chip"><span class="dot"></span> AI Code Review</div>
        <div class="ai-chip"><span class="dot"></span> Smart Testing</div>
      </div>
    </div>
    <div class="ai-text-content" id="aiText">
      <h2 class="section-title" id="aiTitle">Built Faster.<br>Built <span class="accent">Smarter.</span></h2>
      <p class="section-sub">Our AI-powered development workflow doesn't replace human creativity — it amplifies it. We deliver in weeks what traditional agencies take months to build.</p>
      <div class="ai-features">
        <div class="ai-feature">
          <div class="ai-feature-icon">🤖</div>
          <div>
            <h4>AI-Accelerated Development</h4>
            <p>AI assists our developers in writing, reviewing, and optimising code — reducing development time by 60% without compromising quality.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">🔬</div>
          <div>
            <h4>Smart Performance Optimisation</h4>
            <p>Automated performance audits and AI-driven optimisation ensure your site scores 95+ on Google PageSpeed from day one.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">📊</div>
          <div>
            <h4>Data-Driven Design Decisions</h4>
            <p>We use AI tools to analyse heatmaps, user flows, and conversion data to inform design choices — not gut feeling alone.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">🛡️</div>
          <div>
            <h4>Automated Quality Assurance</h4>
            <p>AI-powered testing catches bugs across thousands of device/browser combinations before your site ever goes live.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  PORTFOLIO
============================================================ -->
<section class="portfolio" id="portfolio" aria-labelledby="portfolioTitle">
  <div class="portfolio-header">
    <div>
      <div class="section-label">Our Work</div>
      <h2 class="section-title" id="portfolioTitle">Recent Web <span class="accent">Projects</span></h2>
    </div>
    <div class="slider-controls">
      <button class="slider-btn" id="prevBtn" aria-label="Previous project">←</button>
      <button class="slider-btn" id="nextBtn" aria-label="Next project">→</button>
    </div>
  </div>
  <div class="portfolio-track-wrap">
    <div class="portfolio-track" id="portfolioTrack">

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">🏨</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">Laravel</span>
            <span class="portfolio-tag">React</span>
            <span class="portfolio-tag">Hospitality</span>
          </div>
          <h3>LuxeStay Hotels — Booking Platform</h3>
          <p>Full-stack booking platform with real-time availability, payment integration, and multi-property management. India market.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">🏗️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">WordPress</span>
            <span class="portfolio-tag">UI/UX</span>
            <span class="portfolio-tag">SEO</span>
          </div>
          <h3>BuildRight Construction — Corporate Site</h3>
          <p>Complete brand overhaul and website redesign for a Dubai-based construction company. 3× more enquiries post-launch.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">🛍️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">WooCommerce</span>
            <span class="portfolio-tag">D2C</span>
            <span class="portfolio-tag">India</span>
          </div>
          <h3>Pureroot Organics — D2C E-Commerce</h3>
          <p>From zero to ₹40L in first-month sales. Custom WooCommerce store with Razorpay, smart upsells, and mobile-first UX.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">📊</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">SaaS</span>
            <span class="portfolio-tag">Laravel</span>
            <span class="portfolio-tag">USA</span>
          </div>
          <h3>FieldOps Pro — SaaS Dashboard</h3>
          <p>Field service management SaaS for a Texas-based client. Laravel backend, React frontend, real-time job tracking.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">⚖️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">Next.js</span>
            <span class="portfolio-tag">SEO</span>
            <span class="portfolio-tag">Legal</span>
          </div>
          <h3>Sharma & Associates — Law Firm</h3>
          <p>Modern law firm website ranking #1 in Delhi for competitive legal keywords. 200% increase in organic enquiries.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
  REGIONS — India, USA, Dubai
============================================================ -->
<section class="regions" id="regions" aria-labelledby="regionsTitle">
  <div class="section-label">Who We Serve</div>
  <h2 class="section-title" id="regionsTitle">Built for <span class="accent">Your Market</span></h2>
  <p class="section-sub" style="color:rgba(255,255,255,0.6)">Whether you're a startup in Pune, a scaling business in New York, or an enterprise in Dubai — our process adapts to your timezone, budget, and market.</p>

  <div class="regions-grid">

    <div class="region-card">
      <div class="region-glow"></div>
      <span class="region-flag">🇮🇳</span>
      <h3>India</h3>
      <h4>Affordable Excellence · Fast Turnaround</h4>
      <p>India's fastest-growing businesses trust Veerhan for world-class web development at Indian pricing. We understand local markets, payment gateways (Razorpay, PayU), and language requirements.</p>
      <div class="region-cities">
        <span class="region-city">Pune</span>
        <span class="region-city">Mumbai</span>
        <span class="region-city">Delhi</span>
        <span class="region-city">Bangalore</span>
        <span class="region-city">Hyderabad</span>
        <span class="region-city">Chennai</span>
        <span class="region-city">All India</span>
      </div>
    </div>

    <div class="region-card">
      <div class="region-glow"></div>
      <span class="region-flag">🇺🇸</span>
      <h3>United States</h3>
      <h4>Remote-First · US Business Hours Available</h4>
      <p>We serve US clients from New York to California with seamless remote collaboration, overlap working hours, US-based payment options (Stripe), and English-native communication.</p>
      <div class="region-cities">
        <span class="region-city">New York</span>
        <span class="region-city">California</span>
        <span class="region-city">Texas</span>
        <span class="region-city">Florida</span>
        <span class="region-city">Illinois</span>
        <span class="region-city">All USA</span>
      </div>
    </div>

    <div class="region-card">
      <div class="region-glow"></div>
      <span class="region-flag">🇦🇪</span>
      <h3>Dubai & UAE</h3>
      <h4>Multilingual · Compliant · Premium Quality</h4>
      <p>Dubai businesses get premium-quality websites with Arabic language support, UAE payment gateways, and designs that meet the high visual standards of the Gulf market.</p>
      <div class="region-cities">
        <span class="region-city">Dubai</span>
        <span class="region-city">Abu Dhabi</span>
        <span class="region-city">Sharjah</span>
        <span class="region-city">Ajman</span>
        <span class="region-city">All UAE</span>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
  PRICING
============================================================ -->
<section class="pricing" id="pricing" aria-labelledby="pricingTitle">
  <div class="section-label">Transparent Pricing</div>
  <h2 class="section-title" id="pricingTitle">Simple, Honest<br><span class="accent">Pricing</span></h2>
  <p class="section-sub">No hidden fees. No surprises. Just clear pricing aligned to your goals and budget — with custom quotes available for complex projects.</p>

  <div class="pricing-grid">

    <div class="pricing-card">
      <div class="pricing-name">Starter</div>
      <div class="pricing-price">₹15,000<span>/project</span></div>
      <div class="pricing-price-sub">~$180 USD · 5-page website</div>
      <div class="pricing-divider"></div>
      <div class="pricing-features">
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>5 custom-designed pages</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Mobile-responsive design</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>On-page SEO setup</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Contact form integration</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Google Analytics setup</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>1 month free support</div>
      </div>
      <a href="{{ route('contact') }}#contact" class="btn-pricing">Get Started →</a>
    </div>

    <div class="pricing-card featured">
      <div class="pricing-badge">Most Popular</div>
      <div class="pricing-name">Growth</div>
      <div class="pricing-price">₹45,000<span>/project</span></div>
      <div class="pricing-price-sub">~$540 USD · Up to 15 pages</div>
      <div class="pricing-divider"></div>
      <div class="pricing-features">
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Up to 15 pages with CMS</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Custom UI/UX design</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Full SEO optimisation</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Blog / news section</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Speed optimisation (&lt;2s)</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>WhatsApp chat integration</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>3 months free support</div>
      </div>
      <a href="{{ route('contact') }}#contact" class="btn-pricing">Start Your Project →</a>
    </div>

    <div class="pricing-card">
      <div class="pricing-name">Enterprise</div>
      <div class="pricing-price">Custom<span> quote</span></div>
      <div class="pricing-price-sub">Web apps · E-commerce · SaaS</div>
      <div class="pricing-divider"></div>
      <div class="pricing-features">
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Custom web application</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Laravel / React stack</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>API & third-party integrations</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>E-commerce & payments</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Advanced security setup</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Dedicated project manager</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>6 months support & AMC</div>
      </div>
      <a href="{{ route('contact') }}#contact" class="btn-pricing">Request a Quote →</a>
    </div>

  </div>

  <p class="pricing-note">All prices in INR. USD pricing available for US & Dubai clients. Need a custom quote? <a href="{{ route('contact') }}#contact">Talk to us →</a></p>
</section>

<!-- ============================================================
  WHY VEERHAN
============================================================ -->
<section class="why" id="why" aria-labelledby="whyTitle">
  <div class="section-label">Why Veerhan</div>
  <h2 class="section-title" id="whyTitle">The Veerhan<br><span class="accent">Difference</span></h2>
  <p class="section-sub">We're not your average web agency. Here's what makes working with Veerhan a fundamentally different experience.</p>

  <div class="why-grid">
    <div class="why-item">
      <div class="why-num">01</div>
      <div>
        <h3>SEO Built In, Not Bolted On</h3>
        <p>Every site we build is engineered for search from day one. Semantic HTML, structured data, Core Web Vitals, page speed — all baked into the development process, not added as an afterthought.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">02</div>
      <div>
        <h3>Conversion-First Design Philosophy</h3>
        <p>A beautiful website that doesn't convert is just an expensive brochure. Every layout, CTA placement, and user flow is designed with a single goal: turning visitors into paying customers.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">03</div>
      <div>
        <h3>True Full-Stack Ownership</h3>
        <p>Design, development, SEO, hosting, security — all under one roof. No juggling multiple vendors. No communication gaps. One team, one point of contact, full accountability.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">04</div>
      <div>
        <h3>Transparent Process & Communication</h3>
        <p>You get a live project tracker, weekly progress updates, and direct access to your developer. No black box, no ghosting, no surprises at invoice time.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">05</div>
      <div>
        <h3>AI-Powered, Human-Crafted</h3>
        <p>We use AI tools to work 4× faster, but every line of code is reviewed, every design is crafted, and every decision is made by our experienced human team. Speed without quality sacrifice.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">06</div>
      <div>
        <h3>Post-Launch Partnership</h3>
        <p>Launching is just the beginning. We offer maintenance packages, performance monitoring, feature additions, and ongoing SEO — so your website keeps getting better over time.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  TESTIMONIALS
============================================================ -->
<section class="testimonials" id="testimonials" aria-labelledby="testiTitle">
  <div class="section-label">Client Voices</div>
  <h2 class="section-title" id="testiTitle">What Our Clients<br><span class="accent">Say</span></h2>

  <div class="testi-grid">

    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Veerhan completely transformed our online presence. The new website loads in under 2 seconds and our organic enquiries have tripled in 4 months. Best investment we've made.</p>
      <div class="testi-author">
        <div class="testi-avatar">R</div>
        <div>
          <div class="testi-name">Rajesh Malhotra</div>
          <div class="testi-role">Director, BuildSmart Construction · Delhi, India</div>
        </div>
      </div>
    </div>

    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Working with a team in India from California — I was nervous. But Veerhan's communication was flawless, the work was exceptional, and they delivered on time and on budget. Will work with them again.</p>
      <div class="testi-author">
        <div class="testi-avatar">S</div>
        <div>
          <div class="testi-name">Sarah Mitchell</div>
          <div class="testi-role">Founder, Nexus Consulting · San Francisco, USA</div>
        </div>
      </div>
    </div>

    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Our Dubai real estate website needed to look world-class and perform perfectly in Arabic and English. Veerhan delivered both — and our leads from Google have increased 5×.</p>
      <div class="testi-author">
        <div class="testi-avatar">A</div>
        <div>
          <div class="testi-name">Ahmed Al-Rashidi</div>
          <div class="testi-role">CEO, Horizon Properties · Dubai, UAE</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
  FAQ — Structured with schema
============================================================ -->
<section class="faq" id="faq" aria-labelledby="faqTitle">
  <div class="section-label">FAQ</div>
  <h2 class="section-title" id="faqTitle">Frequently Asked<br><span class="accent">Questions</span></h2>

  <div class="faq-list" role="list">

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        How much does a website cost in India?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">At Veerhan, website projects start from ₹15,000 for simple business websites and landing pages. Mid-range business websites typically fall in the ₹30,000–₹80,000 range, while complex web applications, e-commerce stores, and SaaS platforms are quoted custom based on scope. We always provide a detailed, itemised quote before any work begins — no hidden costs.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        How long does it take to build a website?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">A standard 5–10 page business website typically takes 2–3 weeks from approved design to launch. Larger sites with CMS integration take 3–5 weeks. Complex web applications, custom e-commerce platforms, and SaaS products take 6–14 weeks depending on feature complexity. Our AI-powered workflow means we're consistently 2–4× faster than traditional agencies at the same quality level.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        Do you build websites for clients in the USA and Dubai?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Absolutely. We have active clients across the US (New York, California, Texas) and Dubai/UAE. We offer flexible working hours with overlap for US time zones, USD pricing, Stripe payment processing, and English-native communication. For Dubai clients, we support Arabic language websites, UAE payment gateways, and understand local design preferences and compliance requirements.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        Will my website rank on Google?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Every website we build includes comprehensive on-page SEO as standard — semantic HTML5 structure, meta tags, schema markup, XML sitemap, robots.txt, image alt text, Core Web Vitals optimisation, and page speed tuning. We don't guarantee rankings (no ethical agency does), but we ensure your technical SEO foundation is solid from day one. We also offer ongoing SEO services to build on this foundation.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        Do you use Laravel for web development?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Yes, Laravel is one of our primary frameworks for custom web applications, portals, APIs, and CMS solutions. We have a dedicated Laravel development team with extensive experience across industries including real estate, legal, healthcare, e-commerce, and SaaS. We follow Laravel best practices including MVC architecture, Eloquent ORM, queue jobs, and proper testing methodology.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        What happens after my website launches?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">All our projects include a free support period (1–6 months depending on package) covering bug fixes and minor updates. After this, we offer Annual Maintenance Contracts (AMC) for ongoing updates, security patches, hosting management, performance monitoring, and content changes. We're a long-term partner, not a one-and-done agency.</div></div>
    </div>

  </div>
</section>

<!-- ============================================================
  OTHER SERVICES
============================================================ -->
<section class="other-services" id="other-services" aria-labelledby="otherTitle">
  <div class="other-services-header">
    <div class="section-label">Explore More</div>
    <h2 class="section-title" id="otherTitle">Our Other<br><span class="accent">Services</span></h2>
  </div>
  <div class="services-nav-grid">
    <a href="{{ route('services.seo-digital') }}" class="svc-nav-card">
      <div class="svc-nav-icon">📈</div>
      <div class="svc-nav-name">SEO & Digital Marketing</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.web-security') }}" class="svc-nav-card">
      <div class="svc-nav-icon">🛡️</div>
      <div class="svc-nav-name">Web Security & Protection</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.ui-ux') }}" class="svc-nav-card">
      <div class="svc-nav-icon">🎨</div>
      <div class="svc-nav-name">UI/UX & Branding</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.ai') }}" class="svc-nav-card">
      <div class="svc-nav-icon">🤖</div>
      <div class="svc-nav-name">AI Implementation</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.web-development') }}" class="svc-nav-card">
      <div class="svc-nav-icon">💻</div>
      <div class="svc-nav-name">Web Design & Development</div>
      <div class="svc-nav-arrow">→</div>
    </a>
  </div>
</section>

@include('partials.contact-form', ['serviceName' => 'Web Design & Development', 'pageSource' => 'Web Development Service Page', 'formId' => 'webdev'])

<!-- CTA STRIP -->
<div class="cta-strip" aria-label="Call to action">
  <div class="cta-strip-text">
    <h2>Ready to Build Your Next Website?</h2>
    <p>Get a free consultation and no-obligation quote in 24 hours.</p>
  </div>
  <a href="#contact" class="btn-cta-white">Get Free Quote →</a>
</div>

@endsection

@section('page_scripts')
<script>
  gsap.registerPlugin(ScrollTrigger);

  // NAV SCROLL
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 60);
    const prog = window.scrollY / (document.body.scrollHeight - window.innerHeight);
    document.getElementById('scrollProgress').style.transform = `scaleX(${prog})`;
    document.getElementById('backTop').classList.toggle('visible', window.scrollY > 400);
  });

  // HERO ANIMATIONS — cinematic entry
  gsap.timeline({ delay: 0.15 })
    .fromTo('#heroLabel',
      { opacity: 0, y: 16, scale: 0.9 },
      { opacity: 1, y: 0, scale: 1, duration: 0.8, ease: 'power3.out' })
    .fromTo('#heroTitle',
      { opacity: 0, y: 80, skewY: 3 },
      { opacity: 1, y: 0, skewY: 0, duration: 1.1, ease: 'power4.out' }, '-=0.4')
    .fromTo('#heroSub',
      { opacity: 0, y: 28 },
      { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, '-=0.55')
    .fromTo('#heroActions',
      { opacity: 0, scale: 0.9, y: 22 },
      { opacity: 1, scale: 1, y: 0, duration: 0.7, ease: 'back.out(1.5)' }, '-=0.4')
    .to('#heroStats',
      { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.2')
    .fromTo('#heroVisual',
      { opacity: 0, scale: 0.86, x: 70, rotation: 5 },
      { opacity: 1, scale: 1, x: 0, rotation: 0, duration: 1.3, ease: 'power3.out' }, '-=1.0');

  // Hero background parallax on scroll
  gsap.to('.service-hero-bg-grid', {
    yPercent: 30, ease: 'none',
    scrollTrigger: { trigger: '.service-hero', start: 'top top', end: 'bottom top', scrub: true }
  });

  // SCROLL ANIMATIONS
  // Build cards — scale + tilt reveal
  gsap.utils.toArray('.build-card').forEach((card, i) => {
    gsap.fromTo(card,
      { opacity: 0, scale: 0.82, y: 50, rotation: (i % 2 === 0 ? -4 : 4) },
      { opacity: 1, scale: 1, y: 0, rotation: 0, duration: 0.9, ease: 'back.out(1.5)',
        delay: (i % 3) * 0.1,
        scrollTrigger: { trigger: card, start: 'top 90%' }
      }
    );
  });

  // Tech categories — zoom + spin
  gsap.utils.toArray('.tech-category').forEach((cat, i) => {
    gsap.fromTo(cat,
      { opacity: 0, scale: 0.72, rotation: (i % 2 === 0 ? -8 : 8) },
      { opacity: 1, scale: 1, rotation: 0, duration: 0.75, ease: 'back.out(2)',
        delay: i * 0.07,
        scrollTrigger: { trigger: '.tech-grid', start: 'top 82%' }
      }
    );
  });

  // Process steps — slide + scale sequential
  gsap.utils.toArray('.process-step').forEach((step, i) => {
    gsap.fromTo(step,
      { opacity: 0, scale: 0.85, x: -40 },
      { opacity: 1, scale: 1, x: 0, duration: 0.75, ease: 'power3.out',
        delay: i * 0.11,
        scrollTrigger: { trigger: '.process-steps', start: 'top 82%' }
      }
    );
  });

  // AI section — angled dramatic entry
  gsap.fromTo('#aiVisual',
    { opacity: 0, scale: 0.85, x: -70, rotation: -5 },
    { opacity: 1, scale: 1, x: 0, rotation: 0, duration: 1.2, ease: 'power3.out',
      scrollTrigger: { trigger: '.ai-edge', start: 'top 78%' }
    }
  );
  gsap.fromTo('#aiText',
    { opacity: 0, scale: 0.9, x: 70, rotation: 3 },
    { opacity: 1, scale: 1, x: 0, rotation: 0, duration: 1.1, ease: 'power3.out',
      delay: 0.15,
      scrollTrigger: { trigger: '.ai-edge', start: 'top 75%' }
    }
  );

  // Portfolio cards — scale + tilt stagger
  gsap.utils.toArray('.portfolio-card').forEach((card, i) => {
    gsap.fromTo(card,
      { opacity: 0, scale: 0.85, y: 60, rotation: (i % 2 === 0 ? -3 : 3) },
      { opacity: 1, scale: 1, y: 0, rotation: 0, duration: 0.95, ease: 'power3.out',
        delay: i * 0.07,
        scrollTrigger: { trigger: '.portfolio', start: 'top 82%' }
      }
    );
  });

  // Region cards — spring zoom
  gsap.utils.toArray('.region-card').forEach((card, i) => {
    gsap.fromTo(card,
      { opacity: 0, scale: 0.7, rotation: (i % 2 === 0 ? -7 : 7) },
      { opacity: 1, scale: 1, rotation: 0, duration: 0.95, ease: 'back.out(2)',
        delay: i * 0.15,
        scrollTrigger: { trigger: '.regions-grid', start: 'top 80%' }
      }
    );
  });

  // Pricing cards — 3D flip reveal
  gsap.utils.toArray('.pricing-card').forEach((card, i) => {
    gsap.fromTo(card,
      { opacity: 0, scale: 0.78, rotationX: 22, y: 70, transformPerspective: 900 },
      { opacity: 1, scale: 1, rotationX: 0, y: 0, transformPerspective: 900,
        duration: 1.05, ease: 'back.out(1.4)',
        delay: i * 0.18,
        scrollTrigger: { trigger: '.pricing-grid', start: 'top 80%' }
      }
    );
  });

  // Why items — scale + alternating tilt
  gsap.utils.toArray('.why-item').forEach((item, i) => {
    gsap.fromTo(item,
      { opacity: 0, scale: 0.85, y: 35, rotation: (i % 2 === 0 ? -3 : 3) },
      { opacity: 1, scale: 1, y: 0, rotation: 0, duration: 0.85, ease: 'back.out(1.5)',
        delay: i * 0.1,
        scrollTrigger: { trigger: item, start: 'top 88%' }
      }
    );
  });

  // Testimonials — float + rotate
  gsap.utils.toArray('.testi-card').forEach((card, i) => {
    gsap.fromTo(card,
      { opacity: 0, y: 55, scale: 0.88, rotation: (i % 2 === 0 ? -2.5 : 2.5) },
      { opacity: 1, y: 0, scale: 1, rotation: 0, duration: 0.95, ease: 'power3.out',
        delay: i * 0.12,
        scrollTrigger: { trigger: card, start: 'top 88%' }
      }
    );
  });

  // FAQ items — slide from left + scale
  gsap.utils.toArray('.faq-item').forEach((item, i) => {
    gsap.fromTo(item,
      { opacity: 0, x: -35, scale: 0.97 },
      { opacity: 1, x: 0, scale: 1, duration: 0.6, ease: 'power3.out',
        delay: i * 0.06,
        scrollTrigger: { trigger: item, start: 'top 92%' }
      }
    );
  });

  // Section titles — skew + scale cinematic reveal
  gsap.utils.toArray('.section-title').forEach(title => {
    gsap.fromTo(title,
      { opacity: 0, y: 55, skewY: 3, scale: 0.93 },
      { opacity: 1, y: 0, skewY: 0, scale: 1, duration: 1.05, ease: 'power4.out',
        scrollTrigger: { trigger: title, start: 'top 90%' }
      }
    );
  });

  // PORTFOLIO SLIDER
  const track = document.getElementById('portfolioTrack');
  const cardWidth = 380 + 24;
  let current = 0;
  const total = track.children.length;
  const maxSlide = total - 3;

  document.getElementById('nextBtn').addEventListener('click', () => {
    if (current < maxSlide) { current++; }
    else { current = 0; }
    track.style.transform = `translateX(-${current * cardWidth}px)`;
  });
  document.getElementById('prevBtn').addEventListener('click', () => {
    if (current > 0) { current--; }
    else { current = maxSlide; }
    track.style.transform = `translateX(-${current * cardWidth}px)`;
  });

  // FAQ ACCORDION
  document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
      const item = q.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
      q.setAttribute('aria-expanded', !isOpen);
    });
    q.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); q.click(); }
    });
  });
</script>
@endsection
