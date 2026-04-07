@extends('layouts.app')

@php
  $navVariant = 'service';
  $footerVariant = 'service';
@endphp

@section('head_meta')
<!-- ============================================================
  SEO META — SEO & Digital Marketing Service Page
  Targets: India (Pune, Mumbai, Delhi, Bangalore), USA, Dubai
============================================================ -->
<title>SEO & Digital Marketing Services | Veerhan – India, USA & Dubai</title>
<meta name="description" content="Veerhan delivers ROI-focused SEO and digital marketing services for businesses in India, the USA, and Dubai. Technical SEO, local SEO, PPC, social media marketing, and conversion-focused growth strategies.">
<meta name="keywords" content="seo agency India, digital marketing company USA, local seo Pune, ppc agency Dubai, search engine optimization Mumbai, performance marketing Delhi, technical seo services, social media marketing agency, lead generation services India, google ads management USA">

<!-- Geo / Region Targeting -->
<meta name="geo.region" content="IN-MH">
<meta name="geo.placename" content="Pune, Maharashtra, India">
<meta name="ICBM" content="18.5204, 73.8567">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="SEO & Digital Marketing Services | Veerhan">
<meta property="og:description" content="Grow organic traffic, generate qualified leads, and scale paid campaigns with Veerhan's SEO and digital marketing services.">
<meta property="og:url" content="https://veerhan.com/services/seo-digital-marketing">
<meta property="og:site_name" content="Veerhan">
<meta property="og:image" content="https://veerhan.com/og/seo-digital-marketing-service.jpg">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="SEO & Digital Marketing | Veerhan">
<meta name="twitter:description" content="Technical SEO, local SEO, PPC, social media, and conversion-focused growth campaigns for India, USA, and Dubai businesses.">

<!-- Canonical -->
<link rel="canonical" href="https://veerhan.com/services/seo-digital-marketing">

<!-- Hreflang for region targeting -->
<link rel="alternate" hreflang="en-in" href="https://veerhan.com/services/seo-digital-marketing">
<link rel="alternate" hreflang="en-us" href="https://veerhan.com/services/seo-digital-marketing">
<link rel="alternate" hreflang="en-ae" href="https://veerhan.com/services/seo-digital-marketing">
<link rel="alternate" hreflang="x-default" href="https://veerhan.com/services/seo-digital-marketing">

<!-- Schema.org Structured Data -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Service",
  "name": "SEO & Digital Marketing",
  "description": "Comprehensive SEO and digital marketing services for businesses in India, the USA, and Dubai. Includes technical SEO, content strategy, PPC management, CRO, social media marketing, and analytics reporting.",
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
  "serviceType": "SEO and Digital Marketing Services",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "18000",
    "highPrice": "300000",
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
      "name": "How much do SEO and digital marketing services cost in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "At Veerhan, SEO and digital marketing retainers typically start from ₹18,000/month for local businesses and scale based on channels, competition, and growth goals. We provide transparent deliverables and clear reporting."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide digital marketing services for Dubai businesses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We support businesses across Dubai and the UAE with SEO, Google Ads, and social media growth campaigns tailored to multilingual and regional audiences."
      }
    },
    {
      "@type": "Question",
      "name": "How long does SEO take to show results?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most businesses see meaningful SEO movement in 8–12 weeks, with stronger compounding results over 4–6 months. PPC campaigns can generate leads much faster while SEO momentum builds."
      }
    },
    {
      "@type": "Question",
      "name": "Do you handle both SEO and paid advertising?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We manage full-funnel growth: technical SEO, content, local SEO, Google Ads, Meta Ads, and conversion tracking so every channel supports measurable business outcomes."
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
    { "@type": "ListItem", "position": 3, "name": "SEO & Digital Marketing", "item": "https://veerhan.com/services/seo-digital-marketing" }
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
<section class="service-hero" id="home" aria-label="SEO and Digital Marketing Service Introduction">
  <div class="service-hero-bg-grid"></div>
  <div class="service-hero-glow"></div>

  <div class="service-hero-inner">
    <!-- Left Content -->
    <div class="service-hero-left">
      <div class="service-hero-label" id="heroLabel">SEO & Digital Marketing</div>
      <h1 class="service-hero-title" id="heroTitle">
        More Traffic.<br><span class="accent">Better Leads.</span><br>Predictable<br><span class="accent">Growth.</span>
      </h1>
      <p class="service-hero-sub" id="heroSub">
        We plan and execute revenue-focused SEO and digital marketing for businesses in India, the USA, and Dubai. From technical SEO to paid media, we build growth systems that bring qualified leads month after month.
      </p>
      <div class="hero-actions" id="heroActions">
        <a href="{{ route('contact') }}#contact" class="btn-primary">Get a Free Growth Audit →</a>
        <a href="#portfolio" class="btn-secondary">See Campaign Results ↗</a>
      </div>
      <div class="hero-stats-strip" id="heroStats">
        <div class="hstat">
          <div class="hstat-num">300<span>%</span></div>
          <div class="hstat-label">Avg. Organic Growth</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">4.2<span>x</span></div>
          <div class="hstat-label">Avg. ROAS</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">90<span>+</span></div>
          <div class="hstat-label">Keywords on Page 1</div>
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
        <div style="width:88%; background:#fff; border-radius:14px; box-shadow:0 24px 80px rgba(0,0,0,0.12); padding:18px;">
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
            <strong style="font-size:13px;">SEO Performance Snapshot</strong>
            <span style="font-size:11px; color:#6B6B6B;">Last 30 Days</span>
          </div>
          <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:8px; margin-bottom:12px;">
            <div style="background:#FFF0E6; border-radius:10px; padding:10px;">
              <div style="font-size:11px; color:#6B6B6B;">Organic Users</div>
              <div style="font-size:18px; font-weight:700;">+126%</div>
            </div>
            <div style="background:#F5F5F3; border-radius:10px; padding:10px;">
              <div style="font-size:11px; color:#6B6B6B;">Top 10 Keywords</div>
              <div style="font-size:18px; font-weight:700;">43</div>
            </div>
            <div style="background:#F5F5F3; border-radius:10px; padding:10px;">
              <div style="font-size:11px; color:#6B6B6B;">Lead CVR</div>
              <div style="font-size:18px; font-weight:700;">8.4%</div>
            </div>
          </div>
          <div style="background:#F5F5F3; border-radius:10px; padding:12px;">
            <div style="font-size:11px; color:#6B6B6B; margin-bottom:8px;">Channel Contribution</div>
            <div style="height:7px; border-radius:100px; background:#E8E4DF; overflow:hidden; margin-bottom:8px;">
              <div style="width:58%; height:100%; background:#F46B1B;"></div>
            </div>
            <div style="height:7px; border-radius:100px; background:#E8E4DF; overflow:hidden; margin-bottom:8px;">
              <div style="width:31%; height:100%; background:#FF8C42;"></div>
            </div>
            <div style="height:7px; border-radius:100px; background:#E8E4DF; overflow:hidden;">
              <div style="width:22%; height:100%; background:#D4520A;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-visual-chips">
        <div class="hero-chip"><span class="dot"></span> Technical SEO</div>
        <div class="hero-chip"><span class="dot"></span> Google Ads</div>
        <div class="hero-chip"><span class="dot"></span> Content Strategy</div>
        <div class="hero-chip"><span class="dot"></span> Conversion Tracking</div>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-section" aria-hidden="true">
  <div class="marquee-track">
    <div class="marquee-item">Technical SEO <span class="sep">✦</span></div>
    <div class="marquee-item">Local SEO <span class="sep">✦</span></div>
    <div class="marquee-item">Google Ads <span class="sep">✦</span></div>
    <div class="marquee-item">Meta Ads <span class="sep">✦</span></div>
    <div class="marquee-item">CRO <span class="sep">✦</span></div>
    <div class="marquee-item">Content Marketing <span class="sep">✦</span></div>
    <div class="marquee-item">Link Building <span class="sep">✦</span></div>
    <div class="marquee-item">Analytics & Attribution <span class="sep">✦</span></div>
    <div class="marquee-item">Monthly Growth Reports <span class="sep">✦</span></div>
    <div class="marquee-item">India · USA · Dubai <span class="sep">✦</span></div>
    <div class="marquee-item">Technical SEO <span class="sep">✦</span></div>
    <div class="marquee-item">Local SEO <span class="sep">✦</span></div>
    <div class="marquee-item">Google Ads <span class="sep">✦</span></div>
    <div class="marquee-item">Meta Ads <span class="sep">✦</span></div>
    <div class="marquee-item">CRO <span class="sep">✦</span></div>
    <div class="marquee-item">Content Marketing <span class="sep">✦</span></div>
    <div class="marquee-item">Link Building <span class="sep">✦</span></div>
    <div class="marquee-item">Analytics & Attribution <span class="sep">✦</span></div>
    <div class="marquee-item">Monthly Growth Reports <span class="sep">✦</span></div>
    <div class="marquee-item">India · USA · Dubai <span class="sep">✦</span></div>
  </div>
</div>

<!-- ============================================================
  WHAT WE BUILD
============================================================ -->
<section class="what-we-build" id="what-we-build" aria-labelledby="buildTitle">
  <div class="section-label">What We Deliver</div>
  <h2 class="section-title" id="buildTitle">Complete <span class="accent">Growth Systems</span><br>for Real Outcomes</h2>
  <p class="section-sub">From local visibility to multi-channel demand generation, we build measurable growth engines aligned with your business goals.</p>

  <div class="build-grid">
    <div class="build-card featured">
      <div class="build-tag">Most Popular</div>
      <div class="build-icon">📈</div>
      <h3>Technical & On-Page SEO</h3>
      <p>We fix crawlability, indexing, metadata, content hierarchy, and Core Web Vitals so your site can rank and compound traffic reliably.</p>
      <div class="build-list">
        <div class="build-list-item">SEO audits & execution roadmap</div>
        <div class="build-list-item">Schema and internal linking</div>
        <div class="build-list-item">Indexing and crawl issue fixes</div>
        <div class="build-list-item">Core Web Vitals optimisation</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">High ROI</div>
      <div class="build-icon">📍</div>
      <h3>Local SEO & Maps Ranking</h3>
      <p>Rank in location-based searches with a structured local SEO strategy tailored for service businesses and regional markets.</p>
      <div class="build-list">
        <div class="build-list-item">Google Business Profile optimisation</div>
        <div class="build-list-item">Local citation cleanup</div>
        <div class="build-list-item">City and service landing pages</div>
        <div class="build-list-item">Review growth strategy</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Performance</div>
      <div class="build-icon">🎯</div>
      <h3>Google Ads & Paid Search</h3>
      <p>Acquire ready-to-buy customers with high-intent paid campaigns, smart budget allocation, and continuous CPA/ROAS optimisation.</p>
      <div class="build-list">
        <div class="build-list-item">Search, PMAX, and remarketing</div>
        <div class="build-list-item">Ad copy and creative testing</div>
        <div class="build-list-item">Lead quality optimisation</div>
        <div class="build-list-item">Bid and budget governance</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Demand Gen</div>
      <div class="build-icon">📣</div>
      <h3>Social Media Marketing</h3>
      <p>Build awareness and demand through targeted social strategy, paid social execution, and performance-led iteration cycles.</p>
      <div class="build-list">
        <div class="build-list-item">Meta and LinkedIn campaigns</div>
        <div class="build-list-item">Audience testing frameworks</div>
        <div class="build-list-item">Creative concept pipeline</div>
        <div class="build-list-item">Retargeting and nurture loops</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Authority</div>
      <div class="build-icon">✍️</div>
      <h3>Content Marketing</h3>
      <p>Publish buyer-intent content that increases visibility, builds topical authority, and supports every stage of your sales funnel.</p>
      <div class="build-list">
        <div class="build-list-item">Keyword clusters and briefs</div>
        <div class="build-list-item">Pillar pages and topic hubs</div>
        <div class="build-list-item">Content refresh programme</div>
        <div class="build-list-item">Editorial workflows</div>
      </div>
    </div>

    <div class="build-card">
      <div class="build-tag">Measurement</div>
      <div class="build-icon">📊</div>
      <h3>Analytics, CRO & Reporting</h3>
      <p>Track the full customer journey, uncover conversion leaks, and continuously optimise campaigns based on clear business metrics.</p>
      <div class="build-list">
        <div class="build-list-item">GA4 and GTM tracking setup</div>
        <div class="build-list-item">Funnel and event dashboards</div>
        <div class="build-list-item">Landing page CRO tests</div>
        <div class="build-list-item">Monthly KPI scorecards</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  TECH STACK
============================================================ -->
<section class="tech-stack" id="tech-stack" aria-labelledby="techTitle">
  <div class="tech-header">
    <div class="section-label">Tools & Platforms</div>
    <h2 class="section-title" id="techTitle">The Marketing Stack<br><span class="accent">Behind Your Growth</span></h2>
    <p class="section-sub">We use proven marketing and analytics tools to drive ranking gains, better ad efficiency, and accurate performance visibility.</p>
  </div>
  <div class="tech-grid">
    <div class="tech-category">
      <div class="tech-cat-label">SEO Platforms</div>
      <div class="tech-cat-title">Research, Audit & Ranking Intelligence</div>
      <div class="tech-tags">
        <span class="tech-tag">Google Search Console</span>
        <span class="tech-tag">SEMrush</span>
        <span class="tech-tag">Ahrefs</span>
        <span class="tech-tag">Screaming Frog</span>
        <span class="tech-tag">Surfer SEO</span>
        <span class="tech-tag">Google Trends</span>
        <span class="tech-tag">Keyword Planner</span>
        <span class="tech-tag">PageSpeed Insights</span>
      </div>
    </div>
    <div class="tech-category">
      <div class="tech-cat-label">Paid Media</div>
      <div class="tech-cat-title">Ad Execution & Optimisation</div>
      <div class="tech-tags">
        <span class="tech-tag">Google Ads</span>
        <span class="tech-tag">Meta Ads Manager</span>
        <span class="tech-tag">LinkedIn Ads</span>
        <span class="tech-tag">YouTube Ads</span>
        <span class="tech-tag">DV360</span>
        <span class="tech-tag">GA4 Audiences</span>
        <span class="tech-tag">Offline Conversion Import</span>
        <span class="tech-tag">Call Tracking</span>
      </div>
    </div>
    <div class="tech-category">
      <div class="tech-cat-label">Content & CRO</div>
      <div class="tech-cat-title">Conversion-Focused Experience Optimisation</div>
      <div class="tech-tags">
        <span class="tech-tag">Hotjar</span>
        <span class="tech-tag">Microsoft Clarity</span>
        <span class="tech-tag">VWO</span>
        <span class="tech-tag">Unbounce</span>
        <span class="tech-tag">Webflow</span>
        <span class="tech-tag">WordPress</span>
        <span class="tech-tag">Notion Editorial</span>
        <span class="tech-tag">Canva Pro</span>
      </div>
    </div>
    <div class="tech-category">
      <div class="tech-cat-label">Analytics & BI</div>
      <div class="tech-cat-title">Measurement, Attribution & Reporting</div>
      <div class="tech-tags">
        <span class="tech-tag">GA4</span>
        <span class="tech-tag">Google Tag Manager</span>
        <span class="tech-tag">Looker Studio</span>
        <span class="tech-tag">BigQuery</span>
        <span class="tech-tag">Search Console API</span>
        <span class="tech-tag">Meta Pixel</span>
        <span class="tech-tag">UTM Governance</span>
        <span class="tech-tag">CRM Sync</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  PROCESS
============================================================ -->
<section class="process" id="process" aria-labelledby="processTitle">
  <div class="section-label">How We Work</div>
  <h2 class="section-title" id="processTitle">Our <span class="accent">6-Step</span><br>Growth Process</h2>
  <p class="section-sub">A transparent, metric-led process designed to improve visibility, reduce wasted spend, and increase qualified pipeline.</p>

  <div class="process-steps" role="list">
    <div class="process-step" role="listitem">
      <div class="step-num">01</div>
      <div class="step-icon">🔍</div>
      <div class="step-title">Business & Funnel Audit</div>
      <div class="step-desc">We review your market, offer, current traffic sources, conversion leaks, and historical campaign data.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">02</div>
      <div class="step-icon">🗺️</div>
      <div class="step-title">Keyword & Channel Strategy</div>
      <div class="step-desc">We map high-intent keywords, prioritise channels, and define target CAC/ROAS benchmarks.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">03</div>
      <div class="step-icon">✏️</div>
      <div class="step-title">Setup & Foundation</div>
      <div class="step-desc">Tracking stack, technical SEO fixes, campaign structure, and landing page readiness are put in place.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">04</div>
      <div class="step-icon">⚙️</div>
      <div class="step-title">Execution Sprint</div>
      <div class="step-desc">We launch SEO content, ad campaigns, and remarketing flows while monitoring quality and spend in real time.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">05</div>
      <div class="step-icon">🧪</div>
      <div class="step-title">Optimisation Cycle</div>
      <div class="step-desc">Weekly testing of creatives, keywords, audiences, and landing pages to improve conversion efficiency.</div>
    </div>
    <div class="process-step" role="listitem">
      <div class="step-num">06</div>
      <div class="step-icon">🚀</div>
      <div class="step-title">Scale & Reporting</div>
      <div class="step-desc">You get clear monthly reports, strategic recommendations, and scale plans based on proven performance.</div>
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
        <div class="ai-chip"><span class="dot"></span> Predictive Keyword Clustering</div>
        <div class="ai-chip"><span class="dot"></span> Smart Ad Optimisation</div>
        <div class="ai-chip"><span class="dot"></span> Automated Insights</div>
      </div>
    </div>
    <div class="ai-text-content" id="aiText">
      <h2 class="section-title" id="aiTitle">Market Smarter.<br>Scale <span class="accent">Faster.</span></h2>
      <p class="section-sub">Our AI-assisted marketing workflow helps us identify what works quicker, cut waste sooner, and double down on winning channels with confidence.</p>
      <div class="ai-features">
        <div class="ai-feature">
          <div class="ai-feature-icon">🤖</div>
          <div>
            <h4>AI-Powered Keyword Intelligence</h4>
            <p>We cluster search intent rapidly and prioritise opportunities that align with revenue, not vanity traffic.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">🔬</div>
          <div>
            <h4>Automated Campaign Diagnostics</h4>
            <p>AI flags CPC spikes, keyword drift, and funnel drop-offs early so optimisation decisions happen before budget is wasted.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">📊</div>
          <div>
            <h4>Predictive Performance Forecasts</h4>
            <p>Scenario models help forecast potential traffic and pipeline impact before scaling budgets across channels.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">🛡️</div>
          <div>
            <h4>Automated Reporting & Alerts</h4>
            <p>Live dashboards and anomaly alerts keep your team informed with decision-ready metrics at all times.</p>
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
      <h2 class="section-title" id="portfolioTitle">Recent <span class="accent">Growth Wins</span></h2>
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
            <span class="portfolio-tag">Local SEO</span>
            <span class="portfolio-tag">Google Business Profile</span>
            <span class="portfolio-tag">Hospitality</span>
          </div>
          <h3>LuxeStay Hotels — Local SEO Growth</h3>
          <p>Local SEO and booking-intent content strategy that increased non-branded traffic by 260% for a hospitality brand in India.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">🏗️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">Google Ads</span>
            <span class="portfolio-tag">Technical SEO</span>
            <span class="portfolio-tag">Construction</span>
          </div>
          <h3>BuildRight Construction — PPC + SEO</h3>
          <p>Integrated SEO and paid search campaigns for a Dubai construction firm, delivering 3.4x qualified leads in 5 months.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">🛍️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">Meta Ads</span>
            <span class="portfolio-tag">CRO</span>
            <span class="portfolio-tag">D2C</span>
          </div>
          <h3>Pureroot Organics — Performance Marketing</h3>
          <p>Performance marketing and CRO programme that scaled monthly revenue 3.1x for a D2C wellness brand.</p>
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
            <span class="portfolio-tag">Paid Search</span>
            <span class="portfolio-tag">USA</span>
          </div>
          <h3>FieldOps Pro — B2B Demand Gen</h3>
          <p>B2B SaaS demand generation campaign that reduced CAC by 38% while doubling SQL volume in the US market.</p>
        </div>
      </div>

      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">⚖️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags">
            <span class="portfolio-tag">Content SEO</span>
            <span class="portfolio-tag">Local SEO</span>
            <span class="portfolio-tag">Legal</span>
          </div>
          <h3>Sharma & Associates — Legal SEO</h3>
          <p>Legal SEO strategy that moved 34 commercial keywords to page one and increased inbound case enquiries by 210%.</p>
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
      <h4>High-Intent Local Growth · Full-Funnel Strategy</h4>
      <p>We help Indian businesses win high-intent organic and paid traffic with local-market SEO strategies, multilingual content planning, and ROI-led campaign management.</p>
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
      <h4>Data-Driven Scaling · US Market Focus</h4>
      <p>US clients rely on us for transparent reporting, performance-led media buying, and SEO programmes that align with US search behavior and buyer intent.</p>
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
      <h4>Regional Search Expertise · Arabic-Ready Campaigns</h4>
      <p>For UAE brands, we run bilingual-ready SEO and paid campaigns tailored to regional search trends, audience behavior, and local competition dynamics.</p>
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
  <h2 class="section-title" id="pricingTitle">Simple, Honest<br><span class="accent">Retainers</span></h2>
  <p class="section-sub">No vanity promises, no hidden costs. Every plan is tied to execution deliverables, reporting cadence, and growth targets.</p>

  <div class="pricing-grid">

    <div class="pricing-card">
      <div class="pricing-name">Starter</div>
      <div class="pricing-price">₹18,000<span>/month</span></div>
      <div class="pricing-price-sub">~$220 USD · Local growth essentials</div>
      <div class="pricing-divider"></div>
      <div class="pricing-features">
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Technical SEO health fixes</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>On-page optimisation (up to 15 pages)</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Google Business Profile setup/optimisation</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Monthly ranking report</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Basic conversion tracking</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Email support</div>
      </div>
      <a href="{{ route('contact') }}#contact" class="btn-pricing">Get Started →</a>
    </div>

    <div class="pricing-card featured">
      <div class="pricing-badge">Most Popular</div>
      <div class="pricing-name">Growth</div>
      <div class="pricing-price">₹48,000<span>/month</span></div>
      <div class="pricing-price-sub">~$580 USD · SEO + paid performance</div>
      <div class="pricing-divider"></div>
      <div class="pricing-features">
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Full technical + content SEO</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Google Ads campaign management</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Conversion-focused landing page support</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Weekly optimisation cadence</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>GA4 + GTM advanced tracking</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Looker Studio dashboard</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Dedicated account strategist</div>
      </div>
      <a href="{{ route('contact') }}#contact" class="btn-pricing">Start Growth Plan →</a>
    </div>

    <div class="pricing-card">
      <div class="pricing-name">Enterprise</div>
      <div class="pricing-price">Custom<span> quote</span></div>
      <div class="pricing-price-sub">Multi-market SEO & performance scaling</div>
      <div class="pricing-divider"></div>
      <div class="pricing-features">
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>International SEO architecture</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Full-funnel paid media strategy</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Creative testing framework</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>CRM and offline attribution integration</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Quarterly growth workshops</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Cross-market localisation support</div>
        <div class="pricing-feat"><div class="pricing-feat-check">✓</div>Executive KPI reporting</div>
      </div>
      <a href="{{ route('contact') }}#contact" class="btn-pricing">Request a Quote →</a>
    </div>

  </div>

  <p class="pricing-note">All prices in INR. USD pricing available for US & UAE clients. Need a tailored growth roadmap? <a href="{{ route('contact') }}#contact">Talk to us →</a></p>
</section>

<!-- ============================================================
  WHY VEERHAN
============================================================ -->
<section class="why" id="why" aria-labelledby="whyTitle">
  <div class="section-label">Why Veerhan</div>
  <h2 class="section-title" id="whyTitle">The Veerhan<br><span class="accent">Difference</span></h2>
  <p class="section-sub">We build marketing systems around revenue outcomes, not vanity metrics. Here's what makes our SEO and digital marketing approach different.</p>

  <div class="why-grid">
    <div class="why-item">
      <div class="why-num">01</div>
      <div>
        <h3>Revenue-Focused Strategy, Not Random Tactics</h3>
        <p>We align SEO, paid media, and content with your sales goals, offer economics, and target geographies before execution begins.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">02</div>
      <div>
        <h3>Channel Integration That Actually Works</h3>
        <p>Your SEO, ads, landing pages, and analytics are connected in one feedback loop so every channel improves the next decision.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">03</div>
      <div>
        <h3>Transparent Metrics & Accountability</h3>
        <p>You get clear KPI dashboards, weekly actions, and performance commentary tied to leads, CAC, and pipeline quality.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">04</div>
      <div>
        <h3>Execution Depth Across SEO + Performance</h3>
        <p>From technical SEO and content systems to Google Ads and social campaigns, we execute deeply across the full funnel.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">05</div>
      <div>
        <h3>Experienced Team, AI-Enhanced Speed</h3>
        <p>AI helps us analyse faster and test more, while strategy, messaging, and optimisation decisions stay in expert human hands.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">06</div>
      <div>
        <h3>Continuous Optimisation Culture</h3>
        <p>Growth is never one-and-done. We continuously iterate on keywords, creatives, bids, pages, and tracking to keep results compounding.</p>
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
      <p class="testi-text">Within six months, Veerhan doubled our qualified inbound leads and cut paid acquisition costs significantly. Their reporting made every decision easy.</p>
      <div class="testi-author">
        <div class="testi-avatar">R</div>
        <div>
          <div class="testi-name">Neha Arora</div>
          <div class="testi-role">Marketing Director, Axis BuildCo · Delhi, India</div>
        </div>
      </div>
    </div>

    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Our US campaigns finally became predictable. Veerhan improved lead quality and helped us scale Google Ads profitably without burning budget.</p>
      <div class="testi-author">
        <div class="testi-avatar">S</div>
        <div>
          <div class="testi-name">Daniel Brooks</div>
          <div class="testi-role">Founder, Clarity Tax Advisors · Austin, USA</div>
        </div>
      </div>
    </div>

    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Their SEO and paid strategy for Dubai gave us consistent high-intent leads in both English and Arabic markets. Strong team and excellent communication.</p>
      <div class="testi-author">
        <div class="testi-avatar">A</div>
        <div>
          <div class="testi-name">Faisal Al Nuaimi</div>
          <div class="testi-role">Head of Growth, Nova Realty · Dubai, UAE</div>
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
        How much do SEO and digital marketing services cost?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Pricing depends on your market, competition, channels, and growth targets. Our retainers typically start from ₹18,000/month for local SEO and scale for multi-channel campaigns. Every proposal includes clear deliverables and reporting.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        How long before I see SEO results?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Most clients see early ranking movement in 8–12 weeks, with stronger gains over 4–6 months. PPC can generate leads faster while SEO momentum builds, which is why we often run both in parallel.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        Do you work with clients in the USA and Dubai?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Yes. We actively manage SEO and paid campaigns for businesses across India, the US, and UAE. We provide timezone overlap, USD pricing options, and reporting formats suited for distributed teams.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        Do you guarantee rankings or leads?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">No ethical agency guarantees exact rankings or lead counts. What we guarantee is disciplined execution, transparent reporting, and continuous optimisation focused on business metrics like pipeline quality, CPA, and ROAS.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        Can you handle both SEO and paid ads together?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">Yes. We run integrated strategies where SEO, paid media, content, and CRO reinforce each other. This helps reduce acquisition cost and improve lead quality over time.</div></div>
    </div>

    <div class="faq-item" role="listitem">
      <div class="faq-q" role="button" aria-expanded="false" tabindex="0">
        What happens after the first campaign cycle?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">We move into an optimisation and scaling phase with clear monthly priorities: expanding winning keyword clusters, refining ad segmentation, improving conversion paths, and reporting against agreed KPI targets.</div></div>
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
    <a href="{{ route('services.web-development') }}" class="svc-nav-card">
      <div class="svc-nav-icon">💻</div>
      <div class="svc-nav-name">Web Design & Development</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.ui-ux') }}" class="svc-nav-card">
      <div class="svc-nav-icon">🎨</div>
      <div class="svc-nav-name">UI/UX & Branding</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.web-security') }}" class="svc-nav-card">
      <div class="svc-nav-icon">🛡️</div>
      <div class="svc-nav-name">Web Security & Protection</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.ai') }}" class="svc-nav-card">
      <div class="svc-nav-icon">🤖</div>
      <div class="svc-nav-name">AI Implementation</div>
      <div class="svc-nav-arrow">→</div>
    </a>
    <a href="{{ route('services.seo-digital') }}" class="svc-nav-card">
      <div class="svc-nav-icon">📈</div>
      <div class="svc-nav-name">SEO & Digital Marketing</div>
      <div class="svc-nav-arrow">→</div>
    </a>
  </div>
</section>

<!-- CTA STRIP -->
<div class="cta-strip" aria-label="Call to action">
  <div class="cta-strip-text">
    <h2>Ready to Scale Your Lead Flow?</h2>
    <p>Get a free SEO and paid growth audit with actionable next steps in 24 hours.</p>
  </div>
  <a href="{{ route('contact') }}#contact" class="btn-cta-white">Get Free Quote →</a>
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

  // HERO ANIMATIONS
  gsap.timeline({ delay: 0.2 })
    .fromTo('#heroLabel', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' })
    .fromTo('#heroTitle', { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.9, ease: 'power4.out' }, '-=0.3')
    .fromTo('#heroSub', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.4')
    .fromTo('#heroActions', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, '-=0.3')
    .to('#heroStats', { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, '-=0.2')
    .fromTo('#heroVisual', { opacity: 0, x: 40 }, { opacity: 1, x: 0, duration: 0.9, ease: 'power3.out' }, '-=0.6');

  // SCROLL ANIMATIONS
  // Build cards
  gsap.utils.toArray('.build-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: (i % 3) * 0.1,
      scrollTrigger: { trigger: card, start: 'top 88%' }
    });
  });

  // Tech categories
  gsap.utils.toArray('.tech-category').forEach((cat, i) => {
    gsap.to(cat, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.1,
      scrollTrigger: { trigger: '.tech-grid', start: 'top 80%' }
    });
  });

  // Process steps
  gsap.utils.toArray('.process-step').forEach((step, i) => {
    gsap.to(step, {
      opacity: 1, y: 0, duration: 0.6, ease: 'power3.out',
      delay: i * 0.08,
      scrollTrigger: { trigger: '.process-steps', start: 'top 80%' }
    });
  });

  // AI section
  gsap.to('#aiVisual', {
    opacity: 1, x: 0, duration: 1, ease: 'power3.out',
    scrollTrigger: { trigger: '.ai-edge', start: 'top 75%' }
  });
  gsap.to('#aiText', {
    opacity: 1, x: 0, duration: 1, delay: 0.2, ease: 'power3.out',
    scrollTrigger: { trigger: '.ai-edge', start: 'top 75%' }
  });

  // Portfolio cards
  gsap.utils.toArray('.portfolio-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, x: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.08,
      scrollTrigger: { trigger: '.portfolio', start: 'top 80%' }
    });
  });

  // Regions
  gsap.utils.toArray('.region-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.15,
      scrollTrigger: { trigger: '.regions-grid', start: 'top 80%' }
    });
  });

  // Pricing
  gsap.utils.toArray('.pricing-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.12,
      scrollTrigger: { trigger: '.pricing-grid', start: 'top 80%' }
    });
  });

  // Why items
  gsap.utils.toArray('.why-item').forEach((item, i) => {
    gsap.to(item, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.1,
      scrollTrigger: { trigger: item, start: 'top 88%' }
    });
  });

  // Testi cards
  gsap.utils.toArray('.testi-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.12,
      scrollTrigger: { trigger: card, start: 'top 88%' }
    });
  });

  // FAQ items
  gsap.utils.toArray('.faq-item').forEach((item, i) => {
    gsap.to(item, {
      opacity: 1, y: 0, duration: 0.5, ease: 'power3.out',
      delay: i * 0.07,
      scrollTrigger: { trigger: item, start: 'top 90%' }
    });
  });

  // Section titles
  gsap.utils.toArray('.section-title').forEach(title => {
    gsap.fromTo(title,
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out',
        scrollTrigger: { trigger: title, start: 'top 88%' }
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
