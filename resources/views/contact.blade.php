@extends('layouts.app')

@php
  $navVariant = 'contact';
  $footerVariant = 'service';
@endphp

@section('head_meta')
<!-- ============================================================
  SEO META — Contact Page
  Targets: India, USA, Dubai
============================================================ -->
<title>Contact Veerhan | Web Design & Digital Agency — India, USA & Dubai</title>
<meta name="description" content="Get in touch with Veerhan — India's full-service digital agency. Book a free consultation for web design, development, SEO, or digital marketing. Serving Pune, Mumbai, Delhi, USA, and Dubai.">
<meta name="keywords" content="contact web design agency India, hire web developer India, web design consultation Pune, digital agency contact USA, web development Dubai inquiry, free website audit, contact Veerhan, web agency WhatsApp">

<meta name="geo.region" content="IN-MH">
<meta name="geo.placename" content="Pune, Maharashtra, India">

<meta property="og:type" content="website">
<meta property="og:title" content="Contact Veerhan | Digital Agency — India, USA & Dubai">
<meta property="og:description" content="Book a free consultation with Veerhan. Web design, development, SEO, and digital marketing for India, USA, and Dubai businesses.">
<meta property="og:url" content="https://veerhan.com/contact">
<meta property="og:site_name" content="Veerhan">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact Veerhan | Digital Agency">
<meta name="twitter:description" content="Start your web project with Veerhan. Free consultation for businesses in India, USA, and Dubai.">

<link rel="canonical" href="https://veerhan.com/contact">
<link rel="alternate" hreflang="en-in" href="https://veerhan.com/contact">
<link rel="alternate" hreflang="en-us" href="https://veerhan.com/contact">
<link rel="alternate" hreflang="en-ae" href="https://veerhan.com/contact">
<link rel="alternate" hreflang="x-default" href="https://veerhan.com/contact">

<!-- Schema: LocalBusiness + ContactPage -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Veerhan",
  "url": "https://veerhan.com",
  "logo": "{{ asset('logo.png') }}",
  "description": "Full-service digital agency offering web design, web development, SEO, digital marketing, and web security for India, USA, and Dubai.",
  "email": "contact@veerhanc.com",
  "telephone": "+91-87190-36405",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Pune",
    "addressRegion": "Maharashtra",
    "addressCountry": "IN"
  },
  "openingHours": "Mo-Sa 09:00-20:00",
  "areaServed": [
    { "@type": "Country", "name": "India" },
    { "@type": "Country", "name": "United States" },
    { "@type": "City", "name": "Dubai" }
  ],
  "sameAs": [
    "https://linkedin.com/company/veerhan",
    "https://twitter.com/veerhan"
  ]
}
</script>

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://veerhan.com" },
    { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://veerhan.com/contact" }
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
  .nav-logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
  .nav-logo img { height: 38px; }
  .nav-logo-text {
    font-family: var(--font-display); font-size: 22px; font-weight: 800;
    color: var(--black); letter-spacing: -0.5px;
  }
  .nav-logo-text span { color: var(--orange); }
  .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .nav-links a {
    font-size: 14px; font-weight: 500; color: var(--dark);
    text-decoration: none; letter-spacing: 0.01em; position: relative;
  }
  .nav-links a::after {
    content: ''; position: absolute; bottom: -4px; left: 0;
    width: 0; height: 1.5px; background: var(--orange); transition: width 0.3s ease;
  }
  .nav-links a:hover::after, .nav-links a.active::after { width: 100%; }
  .nav-cta {
    background: var(--black); color: var(--white) !important;
    padding: 10px 24px; border-radius: 100px; font-weight: 500 !important;
    transition: background 0.3s ease, transform 0.2s ease !important;
  }
  .nav-cta:hover { background: var(--orange) !important; transform: scale(1.03); }
  .nav-cta::after { display: none !important; }

  /* BREADCRUMB */
  .breadcrumb-bar {
    margin-top: 80px; padding: 14px 48px;
    background: var(--light-gray); border-bottom: 1px solid var(--border);
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; color: var(--gray);
  }
  .breadcrumb-bar a { color: var(--gray); text-decoration: none; transition: color 0.2s; }
  .breadcrumb-bar a:hover { color: var(--orange); }
  .breadcrumb-bar .sep { color: var(--border); }
  .breadcrumb-bar .current { color: var(--orange); font-weight: 500; }

  /* ——— CONTACT HERO ——— */
  .contact-hero {
    padding: 80px 48px 0;
    background: var(--white);
    position: relative; overflow: hidden;
  }
  .contact-hero-bg-grid {
    position: absolute; inset: 0;
    background-image:
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 64px 64px; opacity: 0.4;
  }
  .contact-hero-glow {
    position: absolute; top: -200px; right: -200px;
    width: 800px; height: 800px;
    background: radial-gradient(ellipse, rgba(244,107,27,0.10) 0%, transparent 70%);
    pointer-events: none;
  }
  .contact-hero-inner {
    position: relative; z-index: 2;
    max-width: 760px; padding-bottom: 64px;
  }
  .hero-label {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 12px; font-weight: 600; letter-spacing: 0.15em;
    text-transform: uppercase; color: var(--orange); margin-bottom: 20px;
  }
  .hero-label::before { content: ''; width: 24px; height: 1.5px; background: var(--orange); }
  .contact-hero-title {
    font-family: var(--font-display);
    font-size: clamp(48px, 7vw, 96px);
    font-weight: 800; line-height: 0.95;
    letter-spacing: -3px; color: var(--black);
    margin-bottom: 28px;
  }
  .contact-hero-title .accent { color: var(--orange); }
  .contact-hero-sub {
    font-size: 18px; font-weight: 300; color: var(--gray);
    line-height: 1.7; max-width: 520px; margin-bottom: 40px;
  }

  /* QUICK CONTACT CHIPS */
  .quick-chips {
    display: flex; flex-wrap: wrap; gap: 12px;
    margin-bottom: 0;
  }
  .quick-chip {
    display: inline-flex; align-items: center; gap: 10px;
    background: white; border: 1.5px solid var(--border);
    border-radius: 100px; padding: 10px 20px;
    font-size: 14px; font-weight: 500; color: var(--dark);
    text-decoration: none; transition: border-color 0.3s, background 0.3s, transform 0.2s;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
  }
  .quick-chip:hover { border-color: var(--orange); background: var(--orange-pale); transform: translateY(-2px); }
  .quick-chip-icon { font-size: 18px; }

  /* ——— MAIN CONTACT SPLIT ——— */
  .contact-main {
    background: var(--black);
    position: relative; overflow: hidden;
  }
  .contact-main-glow {
    position: absolute; top: -300px; left: -200px;
    width: 700px; height: 700px;
    background: radial-gradient(ellipse, rgba(244,107,27,0.07) 0%, transparent 70%);
    pointer-events: none;
  }
  .contact-main-inner {
    position: relative; z-index: 2;
    display: grid; grid-template-columns: 1fr 1.4fr;
    min-height: 100vh;
  }

  /* LEFT INFO PANEL */
  .contact-info-panel {
    padding: 80px 56px;
    border-right: 1px solid rgba(255,255,255,0.06);
    display: flex; flex-direction: column; justify-content: space-between;
    opacity: 0; transform: translateX(-30px);
  }
  .contact-info-panel h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3vw, 42px);
    font-weight: 800; color: white;
    letter-spacing: -1.5px; line-height: 1.05;
    margin-bottom: 40px;
  }
  .contact-info-panel h2 span { color: var(--orange); }

  /* DETAIL ITEMS */
  .detail-list { display: flex; flex-direction: column; gap: 4px; margin-bottom: 48px; }
  .detail-item {
    display: flex; align-items: flex-start; gap: 16px;
    padding: 20px 0;
    border-bottom: 1px solid rgba(255,255,255,0.06);
  }
  .detail-item:last-child { border-bottom: none; }
  .detail-icon {
    width: 44px; height: 44px; border-radius: 12px;
    background: rgba(244,107,27,0.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 18px; flex-shrink: 0; margin-top: 2px;
  }
  .detail-content {}
  .detail-label {
    font-size: 11px; font-weight: 600; letter-spacing: 0.12em;
    text-transform: uppercase; color: rgba(255,255,255,0.3);
    margin-bottom: 6px;
  }
  .detail-value {
    font-size: 15px; font-weight: 500; color: white;
    text-decoration: none; display: block; line-height: 1.5;
    transition: color 0.2s;
  }
  .detail-value:hover { color: var(--orange-light); }
  .detail-note { font-size: 12px; color: rgba(255,255,255,0.35); margin-top: 3px; }

  /* REGION MINI BLOCKS */
  .region-blocks { display: flex; flex-direction: column; gap: 12px; margin-bottom: 48px; }
  .region-block {
    display: flex; align-items: center; gap: 14px;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 14px; padding: 16px 20px;
    transition: border-color 0.3s, background 0.3s;
  }
  .region-block:hover { border-color: rgba(244,107,27,0.3); background: rgba(244,107,27,0.04); }
  .region-flag { font-size: 28px; }
  .region-block-text {}
  .region-block-name { font-size: 14px; font-weight: 600; color: white; margin-bottom: 2px; }
  .region-block-cities { font-size: 12px; color: rgba(255,255,255,0.35); }

  /* RESPONSE TIME BADGE */
  .response-badge {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(244,107,27,0.12);
    border: 1px solid rgba(244,107,27,0.25);
    border-radius: 100px; padding: 10px 18px;
    font-size: 13px; font-weight: 500; color: var(--orange-light);
  }
  .response-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--orange);
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.4; transform: scale(1.5); }
  }

  /* Social row */
  .social-row { display: flex; gap: 10px; margin-top: 32px; }
  .social-btn {
    width: 38px; height: 38px; border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.12);
    display: flex; align-items: center; justify-content: center;
    font-size: 14px; color: rgba(255,255,255,0.45); text-decoration: none;
    transition: border-color 0.3s, color 0.3s, background 0.3s;
  }
  .social-btn:hover { border-color: var(--orange); color: var(--orange); background: rgba(244,107,27,0.1); }

  /* RIGHT FORM PANEL */
  .contact-form-panel {
    padding: 80px 64px;
    opacity: 0; transform: translateX(30px);
  }

  /* Step indicator */
  .form-steps {
    display: flex; align-items: center; gap: 0;
    margin-bottom: 48px;
  }
  .form-step {
    display: flex; align-items: center; gap: 10px;
    font-size: 13px; font-weight: 500;
    color: rgba(255,255,255,0.3);
    transition: color 0.3s;
  }
  .form-step.active { color: white; }
  .form-step.done { color: var(--orange); }
  .step-circle {
    width: 28px; height: 28px; border-radius: 50%;
    border: 1.5px solid rgba(255,255,255,0.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 12px; font-weight: 700; flex-shrink: 0;
    transition: background 0.3s, border-color 0.3s, color 0.3s;
  }
  .form-step.active .step-circle { background: var(--orange); border-color: var(--orange); color: white; }
  .form-step.done .step-circle { background: rgba(244,107,27,0.2); border-color: var(--orange); color: var(--orange); }
  .step-connector {
    flex: 1; height: 1px; background: rgba(255,255,255,0.08);
    margin: 0 12px; min-width: 20px;
  }
  .step-connector.done { background: rgba(244,107,27,0.3); }

  /* Form title */
  .form-heading {
    font-family: var(--font-display); font-size: 28px; font-weight: 800;
    color: white; letter-spacing: -0.8px; margin-bottom: 8px;
  }
  .form-subheading {
    font-size: 14px; color: rgba(255,255,255,0.45); margin-bottom: 40px; line-height: 1.6;
  }

  /* Multi-step form panels */
  .form-panel { display: none; }
  .form-panel.active { display: block; }

  /* Form rows */
  .form-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 18px; }
  .form-row { margin-bottom: 18px; }
  .form-row label {
    display: block; font-size: 12px; font-weight: 600;
    letter-spacing: 0.08em; text-transform: uppercase;
    color: rgba(255,255,255,0.4); margin-bottom: 8px;
  }
  .form-row input,
  .form-row select,
  .form-row textarea {
    width: 100%;
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,255,255,0.08);
    border-radius: 12px; padding: 14px 18px;
    color: white; font-size: 15px;
    font-family: var(--font-body); outline: none;
    transition: border-color 0.3s, background 0.3s;
    -webkit-appearance: none;
  }
  .form-row input:focus,
  .form-row textarea:focus,
  .form-row select:focus {
    border-color: var(--orange);
    background: rgba(244,107,27,0.05);
  }
  .form-row input::placeholder,
  .form-row textarea::placeholder { color: rgba(255,255,255,0.2); }
  .form-row textarea { resize: vertical; min-height: 120px; }
  .form-row select option { background: #1A1A1A; color: white; }

  /* Service selector cards */
  .service-selector {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-bottom: 28px;
  }
  .service-option {
    border: 1.5px solid rgba(255,255,255,0.08);
    border-radius: 14px; padding: 18px 14px;
    cursor: none; text-align: center;
    transition: border-color 0.3s, background 0.3s, transform 0.2s;
    user-select: none;
  }
  .service-option:hover { border-color: rgba(244,107,27,0.4); background: rgba(244,107,27,0.05); transform: translateY(-2px); }
  .service-option.selected { border-color: var(--orange); background: rgba(244,107,27,0.1); }
  .service-option-icon { font-size: 24px; margin-bottom: 8px; }
  .service-option-name { font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.7); line-height: 1.3; }
  .service-option.selected .service-option-name { color: white; }

  /* Budget range */
  .budget-options {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-bottom: 28px;
  }
  .budget-option {
    border: 1.5px solid rgba(255,255,255,0.08);
    border-radius: 12px; padding: 16px;
    cursor: none; transition: border-color 0.3s, background 0.3s;
    user-select: none;
  }
  .budget-option:hover { border-color: rgba(244,107,27,0.4); background: rgba(244,107,27,0.04); }
  .budget-option.selected { border-color: var(--orange); background: rgba(244,107,27,0.1); }
  .budget-inr { font-size: 15px; font-weight: 600; color: white; margin-bottom: 2px; }
  .budget-usd { font-size: 12px; color: rgba(255,255,255,0.3); }

  /* Navigation buttons */
  .form-nav { display: flex; align-items: center; justify-content: space-between; margin-top: 28px; gap: 16px; }
  .btn-form-back {
    background: transparent;
    border: 1.5px solid rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.5); padding: 14px 28px;
    border-radius: 100px; font-size: 15px; font-weight: 500;
    font-family: var(--font-body); cursor: none;
    transition: border-color 0.3s, color 0.3s;
  }
  .btn-form-back:hover { border-color: rgba(255,255,255,0.3); color: white; }
  .btn-form-next {
    flex: 1; background: var(--orange); color: white;
    padding: 16px 36px; border-radius: 100px; border: none;
    font-size: 15px; font-weight: 600; font-family: var(--font-body);
    cursor: none; transition: background 0.3s, transform 0.2s;
    display: flex; align-items: center; justify-content: center; gap: 8px;
  }
  .btn-form-next:hover { background: var(--orange-deep); transform: translateY(-1px); }
  .btn-form-submit {
    flex: 1; background: var(--orange); color: white;
    padding: 16px 36px; border-radius: 100px; border: none;
    font-size: 15px; font-weight: 600; font-family: var(--font-body);
    cursor: none; transition: background 0.3s, transform 0.2s;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    box-shadow: 0 8px 32px rgba(244,107,27,0.35);
  }
  .btn-form-submit:hover { background: var(--orange-deep); transform: translateY(-2px); box-shadow: 0 16px 40px rgba(244,107,27,0.5); }

  /* Privacy note */
  .privacy-note {
    font-size: 12px; color: rgba(255,255,255,0.25);
    text-align: center; margin-top: 16px; line-height: 1.5;
  }
  .privacy-note a { color: rgba(255,255,255,0.4); text-decoration: underline; }

  /* ——— SUCCESS STATE ——— */
  .form-success {
    display: none; text-align: center;
    padding: 40px 20px; animation: fadeInUp 0.6s ease;
  }
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .success-icon {
    width: 80px; height: 80px; border-radius: 50%;
    background: rgba(244,107,27,0.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 36px; margin: 0 auto 24px;
  }
  .form-success h3 {
    font-family: var(--font-display); font-size: 28px; font-weight: 800;
    color: white; margin-bottom: 12px;
  }
  .form-success p { font-size: 15px; color: rgba(255,255,255,0.55); line-height: 1.7; max-width: 360px; margin: 0 auto; }

  /* ——— WHY REACH OUT ——— */
  .why-contact { background: var(--light-gray); padding: 100px 48px; }
  .why-contact-grid {
    display: grid; grid-template-columns: repeat(4, 1fr);
    gap: 16px; margin-top: 56px;
  }
  .why-contact-card {
    background: white; border-radius: 20px; padding: 32px;
    border: 1px solid var(--border);
    transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
    opacity: 0; transform: translateY(30px);
  }
  .why-contact-card:hover { border-color: var(--orange); transform: translateY(-4px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); }
  .why-card-icon {
    width: 52px; height: 52px; border-radius: 14px;
    background: var(--orange-pale);
    display: flex; align-items: center; justify-content: center;
    font-size: 24px; margin-bottom: 20px;
  }
  .why-contact-card h3 {
    font-family: var(--font-display); font-size: 18px; font-weight: 700;
    margin-bottom: 8px;
  }
  .why-contact-card p { font-size: 13px; color: var(--gray); line-height: 1.65; }

  /* ——— OFFICE / LOCATION ——— */
  .location-strip {
    background: var(--white);
    padding: 80px 48px;
    border-top: 1px solid var(--border);
  }
  .location-inner {
    display: grid; grid-template-columns: 1fr 1fr 1fr;
    gap: 20px; margin-top: 48px;
  }
  .location-card {
    background: var(--light-gray); border-radius: 20px; padding: 36px;
    border: 1px solid var(--border);
    transition: border-color 0.3s, transform 0.3s;
    opacity: 0; transform: translateY(20px);
  }
  .location-card:hover { border-color: var(--orange); transform: translateY(-4px); }
  .location-flag { font-size: 36px; margin-bottom: 16px; display: block; }
  .location-card h3 {
    font-family: var(--font-display); font-size: 20px; font-weight: 800;
    margin-bottom: 6px;
  }
  .location-card h4 { font-size: 13px; color: var(--orange); font-weight: 600; margin-bottom: 16px; }
  .location-detail { font-size: 14px; color: var(--gray); line-height: 1.7; }
  .location-detail a { color: var(--orange-deep); text-decoration: none; }
  .location-detail a:hover { text-decoration: underline; }
  .location-hours {
    display: inline-flex; align-items: center; gap: 6px;
    margin-top: 12px; font-size: 12px; font-weight: 600;
    color: var(--gray); background: white;
    padding: 5px 12px; border-radius: 100px;
    border: 1px solid var(--border);
  }
  .hours-dot { width: 6px; height: 6px; border-radius: 50%; background: #22c55e; }

  /* ——— FAQ ——— */
  .faq { background: var(--light-gray); padding: 100px 48px; }
  .faq-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; }
  .faq-list { display: flex; flex-direction: column; gap: 10px; }
  .faq-item {
    background: white; border-radius: 16px; overflow: hidden;
    border: 1px solid var(--border);
    opacity: 0; transform: translateY(20px);
    transition: border-color 0.3s;
  }
  .faq-item:hover { border-color: var(--orange); }
  .faq-q {
    padding: 20px 24px; display: flex; justify-content: space-between; align-items: center;
    cursor: none; font-family: var(--font-display);
    font-size: 15px; font-weight: 700; color: var(--black); user-select: none;
  }
  .faq-icon {
    width: 26px; height: 26px; border-radius: 50%;
    background: var(--orange-pale); color: var(--orange);
    display: flex; align-items: center; justify-content: center;
    font-size: 15px; flex-shrink: 0; transition: transform 0.3s, background 0.3s;
  }
  .faq-item.open .faq-icon { transform: rotate(45deg); background: var(--orange); color: white; }
  .faq-a { max-height: 0; overflow: hidden; transition: max-height 0.4s ease; }
  .faq-a-inner { padding: 0 24px 20px; font-size: 14px; color: var(--gray); line-height: 1.7; }
  .faq-item.open .faq-a { max-height: 200px; }

  /* ——— COMMON SECTION STYLES ——— */
  .section-label {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 12px; font-weight: 600; letter-spacing: 0.15em;
    text-transform: uppercase; color: var(--orange); margin-bottom: 20px;
  }
  .section-label::before { content: ''; width: 24px; height: 1.5px; background: var(--orange); }
  .section-title {
    font-family: var(--font-display);
    font-size: clamp(36px, 4.5vw, 56px);
    font-weight: 800; line-height: 1.0; letter-spacing: -1.5px;
    color: var(--black); margin-bottom: 16px;
  }
  .section-title .accent { color: var(--orange); }
  .section-sub {
    font-size: 16px; font-weight: 300; color: var(--gray);
    line-height: 1.7; max-width: 520px;
  }

  /* ——— FOOTER ——— */
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
  .footer-social { display: flex; gap: 12px; margin-top: 20px; }
  .footer-bottom {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid rgba(255,255,255,0.06); padding-top: 24px;
  }
  .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.35); }
  .footer-bottom p span { color: var(--orange); }

  /* RESPONSIVE */
  @media (max-width: 1200px) {
    .contact-main-inner { grid-template-columns: 1fr; }
    .contact-info-panel { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.06); }
    .why-contact-grid { grid-template-columns: repeat(2, 1fr); }
    .location-inner { grid-template-columns: 1fr; }
    .faq-inner { grid-template-columns: 1fr; }
  }
  @media (max-width: 1024px) {
    .footer-inner { grid-template-columns: 1fr 1fr; }
    .service-selector { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    nav { padding: 16px 24px; }
    .nav-links { display: none; }
    .contact-hero { padding: 60px 24px 0; }
    .breadcrumb-bar { padding: 12px 24px; }
    .contact-info-panel { padding: 48px 28px; }
    .contact-form-panel { padding: 48px 28px; }
    .why-contact { padding: 60px 24px; }
    .why-contact-grid { grid-template-columns: 1fr; }
    .location-strip { padding: 60px 24px; }
    .faq { padding: 60px 24px; }
    .form-grid-2 { grid-template-columns: 1fr; }
    .service-selector { grid-template-columns: repeat(2, 1fr); }
    .budget-options { grid-template-columns: 1fr; }
    .footer-inner { grid-template-columns: 1fr; gap: 32px; }
    .footer-bottom { flex-direction: column; gap: 16px; text-align: center; }
    .form-steps { overflow-x: auto; padding-bottom: 4px; }
  }
</style>
@endsection

@section('breadcrumb')
<!-- BREADCRUMB -->
<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <a href="/">Home</a>
  <span class="sep">/</span>
  <span class="current">Contact</span>
</nav>
@endsection

@section('content')
<!-- ============================================================
  CONTACT HERO
============================================================ -->
<section class="contact-hero" aria-labelledby="heroTitle">
  <div class="contact-hero-bg-grid"></div>
  <div class="contact-hero-glow"></div>
  <div class="contact-hero-inner">
    <div class="hero-label" id="heroLabel">Let's Talk</div>
    <h1 class="contact-hero-title" id="heroTitle">
      Start Something<br><span class="accent">Great.</span>
    </h1>
    <p class="contact-hero-sub" id="heroSub">
      Tell us about your project and we'll get back to you within 24 hours with a free consultation and a no-obligation quote. No spam, no pressure — just a conversation.
    </p>
    <div class="quick-chips" id="quickChips">
      <a href="mailto:contact@veerhanc.com" class="quick-chip">
        <span class="quick-chip-icon">📧</span> contact@veerhanc.com
      </a>
      <a href="tel:+918719036405" class="quick-chip">
        <span class="quick-chip-icon">📱</span> +91 87190 36405
      </a>
      <a href="https://wa.me/918719036405" class="quick-chip" target="_blank" rel="noopener">
        <span class="quick-chip-icon">💬</span> WhatsApp Us
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
  MAIN CONTACT SPLIT — Info + Multi-Step Form
============================================================ -->
<div class="contact-main" id="contact" aria-label="Contact form and information">
  <div class="contact-main-glow"></div>
  <div class="contact-main-inner">

    <!-- LEFT: INFO PANEL -->
    <div class="contact-info-panel" id="infoPanel">

      <div>
        <h2>We're ready<br>to <span>build</span><br>with you.</h2>

        <div class="detail-list">
          <div class="detail-item">
            <div class="detail-icon">📧</div>
            <div class="detail-content">
              <div class="detail-label">Email</div>
              <a href="mailto:contact@veerhanc.com" class="detail-value">contact@veerhanc.com</a>
              <div class="detail-note">We reply within 24 hours</div>
            </div>
          </div>
          <div class="detail-item">
            <div class="detail-icon">📱</div>
            <div class="detail-content">
              <div class="detail-label">Phone & WhatsApp</div>
              <a href="tel:+918719036405" class="detail-value">+91 87190 36405</a>
              <div class="detail-note">Mon–Sat, 9 AM – 8 PM IST</div>
            </div>
          </div>
          <div class="detail-item">
            <div class="detail-icon">🕐</div>
            <div class="detail-content">
              <div class="detail-label">Response Time</div>
              <div class="detail-value" style="cursor:default;">Within 24 hours</div>
              <div class="detail-note">Usually much faster</div>
            </div>
          </div>
          <div class="detail-item">
            <div class="detail-icon">🌐</div>
            <div class="detail-content">
              <div class="detail-label">Time Zones Covered</div>
              <div class="detail-value" style="cursor:default;">IST · EST · GST</div>
              <div class="detail-note">India, USA & Dubai overlap available</div>
            </div>
          </div>
        </div>

        <div class="region-blocks">
          <div class="region-block">
            <span class="region-flag">🇮🇳</span>
            <div class="region-block-text">
              <div class="region-block-name">India</div>
              <div class="region-block-cities">Pune · Mumbai · Delhi · Bangalore · Chennai · All India</div>
            </div>
          </div>
          <div class="region-block">
            <span class="region-flag">🇺🇸</span>
            <div class="region-block-text">
              <div class="region-block-name">United States</div>
              <div class="region-block-cities">New York · California · Texas · Florida · All USA</div>
            </div>
          </div>
          <div class="region-block">
            <span class="region-flag">🇦🇪</span>
            <div class="region-block-text">
              <div class="region-block-name">Dubai & UAE</div>
              <div class="region-block-cities">Dubai · Abu Dhabi · Sharjah · All UAE</div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="response-badge">
          <span class="response-dot"></span>
          We're currently accepting new projects
        </div>
        <div class="social-row">
          <a href="#" class="social-btn" aria-label="LinkedIn">in</a>
          <a href="#" class="social-btn" aria-label="Twitter / X">𝕏</a>
          <a href="#" class="social-btn" aria-label="Instagram">ig</a>
          <a href="#" class="social-btn" aria-label="YouTube">yt</a>
        </div>
      </div>
    </div>

    <!-- RIGHT: MULTI-STEP FORM -->
    <div class="contact-form-panel" id="formPanel">

      <!-- Step Indicator -->
      <div class="form-steps" id="formSteps" aria-label="Form progress">
        <div class="form-step active" id="step-ind-1">
          <div class="step-circle">1</div>
          <span>About You</span>
        </div>
        <div class="step-connector" id="conn-1"></div>
        <div class="form-step" id="step-ind-2">
          <div class="step-circle">2</div>
          <span>Your Project</span>
        </div>
        <div class="step-connector" id="conn-2"></div>
        <div class="form-step" id="step-ind-3">
          <div class="step-circle">3</div>
          <span>Details</span>
        </div>
      </div>

      <!-- SUCCESS STATE -->
      <div class="form-success" id="formSuccess">
        <div class="success-icon">🎉</div>
        <h3>Message Sent!</h3>
        <p>Thank you for reaching out. We'll review your project details and get back to you within 24 hours — usually much sooner.</p>
        <p style="margin-top: 16px; font-size: 13px; color: rgba(255,255,255,0.3);">Check your inbox for a confirmation email.</p>
      </div>

      <!-- STEP 1: About You -->
      <div class="form-panel active" id="panel-1">
        <div class="form-heading">Tell us about yourself</div>
        <p class="form-subheading">We'd love to know who we're talking to. This helps us personalise our response.</p>

        <div class="form-grid-2">
          <div class="form-row">
            <label>First Name *</label>
            <input type="text" id="firstName" name="first_name" placeholder="Arjun" required>
          </div>
          <div class="form-row">
            <label>Last Name</label>
            <input type="text" id="lastName" name="last_name" placeholder="Sharma">
          </div>
        </div>
        <div class="form-row">
          <label>Email Address *</label>
          <input type="email" id="email" name="email" placeholder="arjun@yourcompany.com" required>
        </div>
        <div class="form-grid-2">
          <div class="form-row">
            <label>Phone / WhatsApp</label>
            <input type="tel" id="phone" name="phone" placeholder="+91 or +1 or +971">
          </div>
          <div class="form-row">
            <label>Company / Website</label>
            <input type="text" id="company" name="company" placeholder="yourwebsite.com">
          </div>
        </div>
        <div class="form-row">
          <label>Your Location</label>
          <select id="location" name="location">
            <option value="@">Where are you based?</option>
            <optgroup label="🇮🇳 India">
              <option>Pune, India</option>
              <option>Mumbai, India</option>
              <option>Delhi / NCR, India</option>
              <option>Bangalore, India</option>
              <option>Hyderabad, India</option>
              <option>Chennai, India</option>
              <option>Other City, India</option>
            </optgroup>
            <optgroup label="🇺🇸 United States">
              <option>New York, USA</option>
              <option>California, USA</option>
              <option>Texas, USA</option>
              <option>Florida, USA</option>
              <option>Other State, USA</option>
            </optgroup>
            <optgroup label="🇦🇪 UAE / Dubai">
              <option>Dubai, UAE</option>
              <option>Abu Dhabi, UAE</option>
              <option>Sharjah, UAE</option>
              <option>Other Emirate, UAE</option>
            </optgroup>
            <optgroup label="🌍 Other">
              <option>Other Country</option>
            </optgroup>
          </select>
        </div>

        <div class="form-nav">
          <button class="btn-form-next" id="next1" type="button">
            Continue — Your Project <span>→</span>
          </button>
        </div>
        <p class="privacy-note">We respect your privacy. Your details are never shared. <a href="/privacy-policy">Privacy Policy</a></p>
      </div>

      <!-- STEP 2: Project Type & Budget -->
      <div class="form-panel" id="panel-2">
        <div class="form-heading">What do you need?</div>
        <p class="form-subheading">Select the service that fits your needs. You can always pick more than one later.</p>

        <label style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(255,255,255,0.4); display: block; margin-bottom: 14px;">Select Service *</label>
        <div class="service-selector" id="serviceSelector">
          <div class="service-option" data-value="web-design-dev">
            <div class="service-option-icon">🎨</div>
            <div class="service-option-name">Web Design & Development</div>
          </div>
          <div class="service-option" data-value="seo">
            <div class="service-option-icon">📈</div>
            <div class="service-option-name">SEO Optimization</div>
          </div>
          <div class="service-option" data-value="digital-marketing">
            <div class="service-option-icon">📣</div>
            <div class="service-option-name">Digital Marketing</div>
          </div>
          <div class="service-option" data-value="ecommerce">
            <div class="service-option-icon">🛒</div>
            <div class="service-option-name">E-Commerce Store</div>
          </div>
          <div class="service-option" data-value="web-security">
            <div class="service-option-icon">🛡️</div>
            <div class="service-option-name">Web Security</div>
          </div>
          <div class="service-option" data-value="not-sure">
            <div class="service-option-icon">💡</div>
            <div class="service-option-name">Not Sure Yet</div>
          </div>
        </div>
        <input type="hidden" id="selectedService" name="service">

        <label style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(255,255,255,0.4); display: block; margin-bottom: 14px; margin-top: 8px;">Budget Range</label>
        <div class="budget-options" id="budgetOptions">
          <div class="budget-option" data-value="under-20k">
            <div class="budget-inr">Under ₹20,000</div>
            <div class="budget-usd">~Under $250</div>
          </div>
          <div class="budget-option" data-value="20k-60k">
            <div class="budget-inr">₹20,000 – ₹60,000</div>
            <div class="budget-usd">~$250 – $750</div>
          </div>
          <div class="budget-option" data-value="60k-150k">
            <div class="budget-inr">₹60,000 – ₹1,50,000</div>
            <div class="budget-usd">~$750 – $2,000</div>
          </div>
          <div class="budget-option" data-value="150k+">
            <div class="budget-inr">₹1,50,000+</div>
            <div class="budget-usd">~$2,000+ · Custom</div>
          </div>
        </div>
        <input type="hidden" id="selectedBudget" name="budget">

        <div class="form-nav">
          <button class="btn-form-back" id="back2" type="button">← Back</button>
          <button class="btn-form-next" id="next2" type="button">Continue — Details <span>→</span></button>
        </div>
      </div>

      <!-- STEP 3: Project Details -->
      <div class="form-panel" id="panel-3">
        <div class="form-heading">Project details</div>
        <p class="form-subheading">The more context you give us, the better we can prepare for your consultation.</p>

        <div class="form-row">
          <label>Current Website (if any)</label>
          <input type="url" id="currentSite" name="current_website" placeholder="https://yourwebsite.com">
        </div>
        <div class="form-row">
          <label>Timeline / Deadline</label>
          <select id="timeline" name="timeline">
            <option value="@">When do you need this?</option>
            <option>ASAP — within 2 weeks</option>
            <option>1 month</option>
            <option>2–3 months</option>
            <option>3–6 months</option>
            <option>Flexible / No rush</option>
          </select>
        </div>
        <div class="form-row">
          <label>How did you find us?</label>
          <select id="source" name="source">
            <option value="@">Select one...</option>
            <option>Google Search</option>
            <option>Instagram</option>
            <option>LinkedIn</option>
            <option>Referral from a friend / client</option>
            <option>Twitter / X</option>
            <option>YouTube</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-row">
          <label>Tell us about your project *</label>
          <textarea id="message" name="message" placeholder="Describe your goals, target audience, what you want to achieve, any competitors you admire, or anything else that'll help us understand your project better..." required></textarea>
        </div>

        <div class="form-nav">
          <button class="btn-form-back" id="back3" type="button">← Back</button>
          <button class="btn-form-submit" id="submitBtn" type="button">
            Send Message — It's Free 🚀
          </button>
        </div>
        <p class="privacy-note">By submitting, you agree to our <a href="/privacy-policy">Privacy Policy</a>. No spam, ever.</p>
      </div>

    </div><!-- /form panel -->
  </div><!-- /inner -->
</div><!-- /contact-main -->

<!-- ============================================================
  WHY REACH OUT
============================================================ -->
<section class="why-contact" aria-labelledby="whyTitle">
  <div class="section-label">Why Veerhan</div>
  <h2 class="section-title" id="whyTitle">What Happens<br>When You <span class="accent">Contact Us</span></h2>
  <p class="section-sub">No pressure, no sales pitch. Just a genuine conversation about your goals.</p>

  <div class="why-contact-grid">
    <div class="why-contact-card">
      <div class="why-card-icon">⚡</div>
      <h3>24-Hour Response</h3>
      <p>We reply to every enquiry within 24 hours — usually within a few hours. Your time matters, and we never leave you in the dark.</p>
    </div>
    <div class="why-contact-card">
      <div class="why-card-icon">🎯</div>
      <h3>Free Consultation</h3>
      <p>Your first call is free, no strings attached. We'll review your goals, suggest a strategy, and give you an honest assessment — even if we're not the right fit.</p>
    </div>
    <div class="why-contact-card">
      <div class="why-card-icon">📋</div>
      <h3>Transparent Quote</h3>
      <p>You'll receive a clear, itemised quote with no hidden fees. We explain every line item so you know exactly what you're paying for and why.</p>
    </div>
    <div class="why-contact-card">
      <div class="why-card-icon">🔒</div>
      <h3>NDA Available</h3>
      <p>If your project is sensitive or proprietary, we're happy to sign an NDA before any discussion. Your ideas stay your ideas.</p>
    </div>
  </div>
</section>

<!-- ============================================================
  OFFICES / REGIONS
============================================================ -->
<section class="location-strip" aria-labelledby="locationTitle">
  <div class="section-label">Where We Work</div>
  <h2 class="section-title" id="locationTitle">Global Reach,<br><span class="accent">Local Understanding</span></h2>
  <div class="location-inner">
    <div class="location-card">
      <span class="location-flag">🇮🇳</span>
      <h3>India</h3>
      <h4>Headquarters · Pune, Maharashtra</h4>
      <p class="location-detail">
        Our primary office and development team is based in Pune. We serve clients across all major Indian cities including Mumbai, Delhi, Bangalore, Hyderabad, and Chennai.<br><br>
        <a href="tel:+918719036405">+91 87190 36405</a><br>
        <a href="mailto:contact@veerhanc.com">contact@veerhanc.com</a>
      </p>
      <div class="location-hours">
        <span class="hours-dot"></span> Mon–Sat, 9 AM – 8 PM IST
      </div>
    </div>
    <div class="location-card">
      <span class="location-flag">🇺🇸</span>
      <h3>United States</h3>
      <h4>Remote-First · All Time Zones</h4>
      <p class="location-detail">
        We serve US clients with flexible meeting hours including EST and PST overlap. USD invoicing, Stripe payments, and English-native project management are standard for US projects.<br><br>
        <a href="mailto:usa@veerhan.com">usa@veerhan.com</a><br>
        New York · California · Texas · Florida
      </p>
      <div class="location-hours">
        <span class="hours-dot"></span> EST & PST overlap available
      </div>
    </div>
    <div class="location-card">
      <span class="location-flag">🇦🇪</span>
      <h3>Dubai & UAE</h3>
      <h4>Remote · Premium Service</h4>
      <p class="location-detail">
        Dubai and UAE clients receive premium web services with Arabic language support, UAE payment gateway integration, and designs built for the Gulf market standard.<br><br>
        <a href="mailto:uae@veerhan.com">uae@veerhan.com</a><br>
        Dubai · Abu Dhabi · Sharjah · All UAE
      </p>
      <div class="location-hours">
        <span class="hours-dot"></span> GST / Gulf time overlap available
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
  FAQ
============================================================ -->
<section class="faq" aria-labelledby="faqTitle">
  <div class="faq-inner">
    <div>
      <div class="section-label">FAQ</div>
      <h2 class="section-title" id="faqTitle">Before You<br><span class="accent">Reach Out</span></h2>
      <p class="section-sub">Quick answers to the questions we hear most often.</p>
    </div>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
          How quickly will you reply?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a"><div class="faq-a-inner">We reply to all enquiries within 24 hours — usually within a few hours during business days. For urgent projects, WhatsApp is the fastest way to reach us.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
          Is the consultation really free?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a"><div class="faq-a-inner">Yes, completely. Our initial consultation is free with no obligation. We'll understand your goals, suggest an approach, and provide a rough quote — all at no cost. We only proceed when you're fully comfortable.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
          Do you work with clients outside India?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a"><div class="faq-a-inner">Absolutely. We actively work with clients in the USA and Dubai/UAE. We handle USD and AED invoicing, have flexible time zone availability, and use tools like Zoom, Slack, and ClickUp for seamless remote collaboration.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
          What information should I prepare before contacting you?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a"><div class="faq-a-inner">Don't worry about having everything figured out — that's what we're here for. Helpful to share: what service you need, your approximate budget, your target audience, any websites you like, and your ideal timeline. The more context the better, but even a one-liner is a great start.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
          Can I sign an NDA before discussing my project?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a"><div class="faq-a-inner">Yes. If your project involves sensitive or proprietary information, we're happy to sign a mutual NDA before any detailed discussion. Simply mention it in your message or during the first call.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
          How do I pay? Do you accept international payments?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a"><div class="faq-a-inner">We accept UPI, bank transfer, and Razorpay for Indian clients. For US clients, we accept Stripe (card), Wise, and PayPal. UAE clients can pay via bank transfer, Wise, or card. We typically work on a 50% advance and 50% on delivery model for most projects.</div></div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('page_scripts')
<script>
  gsap.registerPlugin(ScrollTrigger);

  // ——— NAV SCROLL ———
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 60);
    const prog = window.scrollY / (document.body.scrollHeight - window.innerHeight);
    document.getElementById('scrollProgress').style.transform = `scaleX(${prog})`;
    document.getElementById('backTop').classList.toggle('visible', window.scrollY > 400);
  });

  // ——— HERO ANIMATIONS ———
  gsap.timeline({ delay: 0.2 })
    .fromTo('#heroLabel', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' })
    .fromTo('#heroTitle', { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, ease: 'power4.out' }, '-=0.4')
    .fromTo('#heroSub', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.4')
    .fromTo('#quickChips', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, '-=0.3');

  // ——— CONTACT PANELS ———
  gsap.to('#infoPanel', {
    opacity: 1, x: 0, duration: 1, ease: 'power3.out',
    scrollTrigger: { trigger: '.contact-main', start: 'top 80%' }
  });
  gsap.to('#formPanel', {
    opacity: 1, x: 0, duration: 1, delay: 0.15, ease: 'power3.out',
    scrollTrigger: { trigger: '.contact-main', start: 'top 80%' }
  });

  // Why contact cards
  gsap.utils.toArray('.why-contact-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.12,
      scrollTrigger: { trigger: card, start: 'top 88%' }
    });
  });

  // Location cards
  gsap.utils.toArray('.location-card').forEach((card, i) => {
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

  // ——— MULTI-STEP FORM ———
  let currentStep = 1;
  const totalSteps = 3;

  function showStep(step) {
    // Hide all panels
    document.querySelectorAll('.form-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('panel-' + step).classList.add('active');

    // Update step indicators
    for (let i = 1; i <= totalSteps; i++) {
      const ind = document.getElementById('step-ind-' + i);
      ind.classList.remove('active', 'done');
      if (i < step) ind.classList.add('done');
      else if (i === step) ind.classList.add('active');
    }

    // Update connectors
    for (let i = 1; i < totalSteps; i++) {
      const conn = document.getElementById('conn-' + i);
      if (conn) conn.classList.toggle('done', i < step);
    }

    currentStep = step;
  }

  // Step 1 → 2
  document.getElementById('next1').addEventListener('click', () => {
    const email = document.getElementById('email').value.trim();
    const firstName = document.getElementById('firstName').value.trim();
    if (!firstName) { flashError(document.getElementById('firstName'), 'Please enter your name'); return; }
    if (!email || !email.includes('@')) { flashError(document.getElementById('email'), 'Please enter a valid email'); return; }
    showStep(2);
  });

  // Step 2 → 3
  document.getElementById('next2').addEventListener('click', () => {
    showStep(3);
  });

  // Back buttons
  document.getElementById('back2').addEventListener('click', () => showStep(1));
  document.getElementById('back3').addEventListener('click', () => showStep(2));

  // Submit
  document.getElementById('submitBtn').addEventListener('click', () => {
    const msg = document.getElementById('message').value.trim();
    if (!msg) { flashError(document.getElementById('message'), 'Please tell us about your project'); return; }
    handleSubmit();
  });

  function flashError(el, msg) {
    el.style.borderColor = '#ef4444';
    el.placeholder = msg;
    el.focus();
    setTimeout(() => { el.style.borderColor = ''; }, 2000);
  }

  function handleSubmit() {
    const btn = document.getElementById('submitBtn');
    btn.textContent = 'Sending...';
    btn.disabled = true;
    btn.style.opacity = '0.7';

    // Collect all form data
    const formData = {
      first_name: document.getElementById('firstName').value,
      last_name: document.getElementById('lastName').value,
      email: document.getElementById('email').value,
      phone: document.getElementById('phone').value,
      company: document.getElementById('company').value,
      location: document.getElementById('location').value,
      service: document.getElementById('selectedService').value,
      budget: document.getElementById('selectedBudget').value,
      current_website: document.getElementById('currentSite').value,
      timeline: document.getElementById('timeline').value,
      source: document.getElementById('source').value,
      message: document.getElementById('message').value,
      page_source: 'Contact Page',
    };

    /* ============================================================
      LARAVEL INTEGRATION:
      Replace the setTimeout below with a fetch to your Laravel route:

      fetch('/contact/submit', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(formData)
      })
      .then(r => r.json())
      .then(data => { if (data.success) showSuccess(); })
      .catch(() => { btn.textContent = 'Error — Try Again'; btn.disabled = false; btn.style.opacity = '1'; });
    ============================================================ */
    fetch('{{ route('contact.submit') }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify(formData)
    })
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        showSuccess();
      } else {
        btn.textContent = 'Error — Try Again';
        btn.disabled = false;
        btn.style.opacity = '1';
      }
    })
    .catch(() => {
      btn.textContent = 'Error — Try Again';
      btn.disabled = false;
      btn.style.opacity = '1';
    });
  }

  function showSuccess() {
    document.querySelectorAll('.form-panel').forEach(p => p.style.display = 'none');
    document.getElementById('formSteps').style.display = 'none';
    const s = document.getElementById('formSuccess');
    s.style.display = 'block';
  }

  // ——— SERVICE SELECTOR ———
  document.querySelectorAll('.service-option').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('.service-option').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      document.getElementById('selectedService').value = opt.dataset.value;
    });
  });

  // ——— BUDGET OPTIONS ———
  document.querySelectorAll('.budget-option').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('.budget-option').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      document.getElementById('selectedBudget').value = opt.dataset.value;
    });
  });

  // ——— FAQ ACCORDION ———
  document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
      const item = q.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => { i.classList.remove('open'); i.querySelector('.faq-q').setAttribute('aria-expanded', 'false'); });
      if (!isOpen) { item.classList.add('open'); q.setAttribute('aria-expanded', 'true'); }
    });
    q.addEventListener('keydown', e => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); q.click(); } });
  });
</script>
@endsection
