@extends('layouts.app')

@php
  $navVariant = 'home';
  $footerVariant = 'home';
@endphp

@section('head_meta')
<title>Veerhan – Built with Courage. Ranked with Purpose.</title>
<meta name="description" content="Veerhan is a full-service digital agency offering web design, web development, SEO, digital marketing, and web security. Serving clients across India and the USA.">
<meta name="keywords" content="web design India, web development USA, SEO agency India, digital marketing, web security, veerhan">
<meta property="og:title" content="Veerhan – Built with Courage. Ranked with Purpose.">
<meta property="og:description" content="Premium web design, SEO & digital presence solutions for India and US businesses.">
@endsection

@section('head_libraries')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/SplitText.min.js"></script>
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

  /* CUSTOM CURSOR */
  .cursor {
    position: fixed;
    width: 12px; height: 12px;
    background: var(--orange);
    border-radius: 50%;
    pointer-events: none;
    z-index: 9999;
    transition: transform 0.15s ease;
    mix-blend-mode: multiply;
  }
  .cursor-ring {
    position: fixed;
    width: 40px; height: 40px;
    border: 1.5px solid var(--orange);
    border-radius: 50%;
    pointer-events: none;
    z-index: 9998;
    transition: transform 0.4s ease, width 0.3s, height 0.3s;
    mix-blend-mode: multiply;
  }
  .cursor-ring.expanded { width: 70px; height: 70px; border-color: var(--orange-light); }

  /* NAV */
  nav {
    position: fixed; top: 0; left: 0; right: 0;
    z-index: 1000;
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
    display: flex; align-items: center; gap: 12px;
    text-decoration: none;
  }
  .nav-logo img { height: 38px; }
  .nav-logo-text {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 800;
    color: var(--black);
    letter-spacing: -0.5px;
  }
  .nav-logo-text span { color: var(--orange); }
  .nav-links {
    display: flex; align-items: center; gap: 36px;
    list-style: none;
  }
  .nav-links a {
    font-size: 14px;
    font-weight: 500;
    color: var(--dark);
    text-decoration: none;
    letter-spacing: 0.01em;
    position: relative;
  }
  .nav-links a::after {
    content: '';
    position: absolute; bottom: -4px; left: 0;
    width: 0; height: 1.5px;
    background: var(--orange);
    transition: width 0.3s ease;
  }
  .nav-links a:hover::after { width: 100%; }
  .nav-cta {
    background: var(--black);
    color: var(--white) !important;
    padding: 10px 24px;
    border-radius: 100px;
    font-weight: 500 !important;
    transition: background 0.3s ease, transform 0.2s ease !important;
  }
  .nav-cta:hover { background: var(--orange) !important; transform: scale(1.03); }
  .nav-cta::after { display: none !important; }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: flex; align-items: center;
    padding: 120px 48px 80px;
    position: relative;
    overflow: hidden;
    background: var(--white);
  }
  .hero-bg-grid {
    position: absolute; inset: 0;
    background-image: 
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 64px 64px;
    opacity: 0.4;
  }
  .hero-bg-glow {
    position: absolute;
    top: -200px; right: -200px;
    width: 800px; height: 800px;
    background: radial-gradient(ellipse, rgba(244,107,27,0.12) 0%, transparent 70%);
    pointer-events: none;
  }
  .hero-content { position: relative; z-index: 2; max-width: 900px; }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--orange-pale);
    border: 1px solid rgba(244,107,27,0.25);
    border-radius: 100px;
    padding: 6px 16px;
    font-size: 13px;
    font-weight: 500;
    color: var(--orange-deep);
    margin-bottom: 32px;
    opacity: 0;
  }
  .hero-badge .dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--orange);
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.4); }
  }
  .hero-title {
    font-family: var(--font-display);
    font-size: clamp(52px, 8vw, 110px);
    font-weight: 800;
    line-height: 0.95;
    letter-spacing: -3px;
    color: var(--black);
    margin-bottom: 28px;
    overflow: hidden;
  }
  .hero-title .line { overflow: hidden; display: block; }
  .hero-title .accent { color: var(--orange); }
  .hero-tagline {
    font-size: clamp(16px, 2vw, 20px);
    font-weight: 300;
    color: var(--gray);
    line-height: 1.7;
    max-width: 520px;
    margin-bottom: 44px;
    opacity: 0;
  }
  .hero-actions {
    display: flex; align-items: center; gap: 20px;
    flex-wrap: wrap;
    opacity: 0;
  }
  .btn-primary {
    background: var(--orange);
    color: white;
    padding: 16px 36px;
    border-radius: 100px;
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;
    display: inline-flex; align-items: center; gap: 8px;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    box-shadow: 0 8px 32px rgba(244,107,27,0.3);
  }
  .btn-primary:hover {
    background: var(--orange-deep);
    transform: translateY(-2px);
    box-shadow: 0 16px 40px rgba(244,107,27,0.4);
  }
  .btn-secondary {
    color: var(--black);
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;
    display: inline-flex; align-items: center; gap: 8px;
    border-bottom: 1.5px solid var(--black);
    padding-bottom: 2px;
    transition: color 0.3s, border-color 0.3s;
  }
  .btn-secondary:hover { color: var(--orange); border-color: var(--orange); }
  .hero-stats {
    position: absolute;
    bottom: 60px; right: 48px;
    display: flex; gap: 40px;
    opacity: 0;
  }
  .stat-item { text-align: right; }
  .stat-num {
    font-family: var(--font-display);
    font-size: 36px;
    font-weight: 800;
    color: var(--black);
    line-height: 1;
  }
  .stat-num span { color: var(--orange); }
  .stat-label { font-size: 13px; color: var(--gray); margin-top: 4px; }

  /* MARQUEE */
  .marquee-section {
    overflow: hidden;
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    padding: 18px 0;
    background: var(--light-gray);
  }
  .marquee-track {
    display: flex; gap: 0;
    animation: marquee 25s linear infinite;
    width: max-content;
  }
  .marquee-item {
    display: flex; align-items: center; gap: 16px;
    padding: 0 32px;
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--gray);
    white-space: nowrap;
  }
  .marquee-item .sep { color: var(--orange); font-size: 18px; }
  @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* SECTIONS COMMON */
  section { padding: 100px 48px; }
  .section-label {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--orange);
    margin-bottom: 20px;
  }
  .section-label::before {
    content: '';
    width: 24px; height: 1.5px;
    background: var(--orange);
  }
  .section-title {
    font-family: var(--font-display);
    font-size: clamp(36px, 5vw, 64px);
    font-weight: 800;
    line-height: 1.0;
    letter-spacing: -1.5px;
    color: var(--black);
    margin-bottom: 20px;
  }
  .section-title .accent { color: var(--orange); }
  .section-sub {
    font-size: 17px;
    font-weight: 300;
    color: var(--gray);
    line-height: 1.7;
    max-width: 540px;
  }

  /* SERVICES BENTO */
  .services { background: var(--white); }
  .services-header { margin-bottom: 56px; }
  .bento-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
    gap: 16px;
  }
  .bento-card {
    background: var(--light-gray);
    border-radius: 20px;
    padding: 36px;
    position: relative;
    overflow: hidden;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    opacity: 0;
    transform: translateY(40px);
  }
  .bento-card:hover {
    transform: translateY(-6px) !important;
    box-shadow: 0 24px 60px rgba(0,0,0,0.1);
  }
  .bento-card.span-5 { grid-column: span 5; }
  .bento-card.span-4 { grid-column: span 4; }
  .bento-card.span-3 { grid-column: span 3; }
  .bento-card.span-7 { grid-column: span 7; }
  .bento-card.span-8 { grid-column: span 8; }
  .bento-card.span-6 { grid-column: span 6; }
  .bento-card.dark {
    background: var(--black);
    color: white;
  }
  .bento-card.orange {
    background: var(--orange);
    color: white;
  }
  .bento-card-icon {
    width: 52px; height: 52px;
    border-radius: 14px;
    background: rgba(244,107,27,0.12);
    display: flex; align-items: center; justify-content: center;
    font-size: 24px;
    margin-bottom: 24px;
  }
  .bento-card.dark .bento-card-icon { background: rgba(255,255,255,0.1); }
  .bento-card.orange .bento-card-icon { background: rgba(255,255,255,0.2); }
  .bento-card h3 {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 12px;
    line-height: 1.2;
  }
  .bento-card p {
    font-size: 14px;
    line-height: 1.7;
    color: var(--gray);
  }
  .bento-card.dark p, .bento-card.orange p { color: rgba(255,255,255,0.75); }
  .bento-card-tag {
    position: absolute; top: 28px; right: 28px;
    background: var(--orange-pale);
    color: var(--orange-deep);
    border-radius: 100px;
    padding: 4px 12px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.05em;
  }
  .bento-card.dark .bento-card-tag { background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.8); }
  .bento-card.orange .bento-card-tag { background: rgba(255,255,255,0.2); color: white; }
  .bento-card-big-num {
    font-family: var(--font-display);
    font-size: 72px;
    font-weight: 800;
    line-height: 1;
    color: rgba(244,107,27,0.12);
    position: absolute;
    bottom: -10px; right: 20px;
  }
  .bento-card.dark .bento-card-big-num { color: rgba(255,255,255,0.06); }

  /* PROCESS */
  .process { background: var(--light-gray); }
  .process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0;
    margin-top: 56px;
    border: 1px solid var(--border);
    border-radius: 20px;
    overflow: hidden;
  }
  .process-step {
    padding: 40px 32px;
    border-right: 1px solid var(--border);
    position: relative;
    background: white;
    opacity: 0;
    transition: background 0.3s;
  }
  .process-step:last-child { border-right: none; }
  .process-step:hover { background: var(--orange-pale); }
  .step-num {
    font-family: var(--font-display);
    font-size: 48px;
    font-weight: 800;
    color: var(--orange);
    opacity: 0.2;
    line-height: 1;
    margin-bottom: 16px;
  }
  .step-title {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .step-desc { font-size: 13px; color: var(--gray); line-height: 1.6; }

  /* FREE TOOLS / OFFERS */
  .offers { background: var(--black); color: white; }
  .offers .section-label { color: var(--orange-light); }
  .offers .section-label::before { background: var(--orange-light); }
  .offers .section-title { color: white; }
  .offers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 16px;
    margin-top: 56px;
  }
  .offer-card {
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 36px;
    position: relative;
    overflow: hidden;
    transition: border-color 0.3s, background 0.3s;
    opacity: 0;
  }
  .offer-card:hover {
    border-color: var(--orange);
    background: rgba(244,107,27,0.05);
  }
  .offer-card.featured {
    background: var(--orange);
    border-color: var(--orange);
  }
  .offer-card h3 {
    font-family: var(--font-display);
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .offer-card p { font-size: 14px; color: rgba(255,255,255,0.65); line-height: 1.6; }
  .offer-card.featured p { color: rgba(255,255,255,0.85); }
  .offer-icon {
    width: 48px; height: 48px;
    border-radius: 12px;
    background: rgba(255,255,255,0.1);
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
    margin-bottom: 20px;
  }
  .offer-badge {
    position: absolute; top: 24px; right: 24px;
    background: rgba(244,107,27,0.2);
    color: var(--orange-light);
    border-radius: 100px;
    padding: 4px 12px;
    font-size: 11px;
    font-weight: 600;
  }
  .offer-card.featured .offer-badge { background: rgba(255,255,255,0.2); color: white; }

  /* AI SECTION */
  .ai-section {
    background: var(--white);
    position: relative;
    overflow: hidden;
  }
  .ai-split {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    margin-top: 20px;
  }
  .ai-visual {
    position: relative;
    height: 480px;
    border-radius: 24px;
    overflow: hidden;
    background: var(--light-gray);
    opacity: 0;
  }
  .ai-visual-inner {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center;
    flex-direction: column; gap: 12px;
  }
  .ai-orb {
    width: 160px; height: 160px;
    border-radius: 50%;
    background: radial-gradient(circle at 40% 40%, var(--orange-light), var(--orange-deep));
    box-shadow: 0 0 80px rgba(244,107,27,0.5);
    animation: float 4s ease-in-out infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-16px); }
  }
  .ai-rings {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center;
  }
  .ai-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(244,107,27,0.15);
    animation: expand 4s ease-in-out infinite;
  }
  .ai-ring:nth-child(1) { width: 220px; height: 220px; animation-delay: 0s; }
  .ai-ring:nth-child(2) { width: 310px; height: 310px; animation-delay: 0.5s; }
  .ai-ring:nth-child(3) { width: 400px; height: 400px; animation-delay: 1s; }
  @keyframes expand {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.7; transform: scale(1.05); }
  }
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .ai-chips {
    position: absolute; bottom: 24px; left: 24px; right: 24px;
    display: flex; flex-wrap: wrap; gap: 8px;
  }
  .ai-chip {
    background: white;
    border-radius: 100px;
    padding: 6px 14px;
    font-size: 12px;
    font-weight: 500;
    color: var(--dark);
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: flex; align-items: center; gap: 6px;
  }
  .ai-chip .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--orange); }
  .ai-text-content { opacity: 0; }
  .ai-features { margin-top: 40px; display: flex; flex-direction: column; gap: 20px; }
  .ai-feature {
    display: flex; gap: 16px; align-items: flex-start;
    padding: 20px;
    border-radius: 16px;
    border: 1px solid var(--border);
    transition: border-color 0.3s, background 0.3s;
  }
  .ai-feature:hover { border-color: var(--orange); background: var(--orange-pale); }
  .ai-feature-icon {
    width: 40px; height: 40px; flex-shrink: 0;
    border-radius: 10px;
    background: var(--orange-pale);
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
  }
  .ai-feature h4 {
    font-family: var(--font-display);
    font-size: 16px; font-weight: 700;
    margin-bottom: 4px;
  }
  .ai-feature p { font-size: 13px; color: var(--gray); line-height: 1.6; }

  /* PORTFOLIO SLIDER */
  .portfolio { background: var(--light-gray); overflow: hidden; }
  .portfolio-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 48px; }
  .portfolio-track-wrap { overflow: hidden; position: relative; }
  .portfolio-track {
    display: flex; gap: 24px;
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    will-change: transform;
  }
  .portfolio-card {
    min-width: 380px;
    border-radius: 20px;
    overflow: hidden;
    background: white;
    flex-shrink: 0;
    opacity: 0;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s, transform 0.3s;
  }
  .portfolio-card:hover { box-shadow: 0 16px 50px rgba(0,0,0,0.12); transform: translateY(-4px); }
  .portfolio-img {
    height: 240px;
    background: var(--light-gray);
    position: relative;
    overflow: hidden;
  }
  .portfolio-img-bg {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center;
    font-size: 64px;
  }
  .portfolio-img-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, var(--orange), var(--orange-deep));
    opacity: 0;
    transition: opacity 0.3s;
    display: flex; align-items: center; justify-content: center;
  }
  .portfolio-card:hover .portfolio-img-overlay { opacity: 0.9; }
  .portfolio-img-overlay span {
    color: white;
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 700;
    letter-spacing: -0.5px;
  }
  .portfolio-info { padding: 24px; }
  .portfolio-tags { display: flex; gap: 8px; margin-bottom: 12px; flex-wrap: wrap; }
  .portfolio-tag {
    background: var(--orange-pale);
    color: var(--orange-deep);
    border-radius: 100px;
    padding: 3px 10px;
    font-size: 11px;
    font-weight: 600;
  }
  .portfolio-info h3 {
    font-family: var(--font-display);
    font-size: 18px; font-weight: 700;
    margin-bottom: 6px;
  }
  .portfolio-info p { font-size: 13px; color: var(--gray); }
  .slider-controls { display: flex; gap: 10px; }
  .slider-btn {
    width: 48px; height: 48px;
    border-radius: 50%;
    border: 1.5px solid var(--border);
    background: white;
    cursor: none;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
    color: var(--dark);
    transition: background 0.3s, border-color 0.3s, color 0.3s;
  }
  .slider-btn:hover { background: var(--orange); border-color: var(--orange); color: white; }

  /* TESTIMONIALS */
  .testimonials { background: var(--white); }
  .testi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 56px;
  }
  .testi-card {
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 32px;
    position: relative;
    opacity: 0;
    transition: border-color 0.3s, transform 0.3s;
  }
  .testi-card:hover { border-color: var(--orange); transform: translateY(-4px); }
  .testi-quote {
    font-size: 40px;
    color: var(--orange);
    line-height: 1;
    margin-bottom: 16px;
    font-family: Georgia, serif;
  }
  .testi-text { font-size: 15px; line-height: 1.7; color: var(--dark); margin-bottom: 24px; }
  .testi-author { display: flex; align-items: center; gap: 12px; }
  .testi-avatar {
    width: 44px; height: 44px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--orange), var(--orange-deep));
    display: flex; align-items: center; justify-content: center;
    color: white; font-weight: 700; font-family: var(--font-display);
    font-size: 16px;
  }
  .testi-name { font-weight: 600; font-size: 14px; }
  .testi-role { font-size: 12px; color: var(--gray); }
  .testi-stars { margin-bottom: 12px; font-size: 14px; color: var(--orange); }

  /* WHY VEERHAN */
  .why { background: var(--light-gray); }
  .why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-top: 56px;
  }
  .why-item {
    background: white;
    border-radius: 20px;
    padding: 36px;
    display: flex; gap: 20px;
    opacity: 0;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .why-item:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); }
  .why-num {
    font-family: var(--font-display);
    font-size: 48px;
    font-weight: 800;
    color: var(--orange);
    opacity: 0.15;
    line-height: 1;
    flex-shrink: 0;
  }
  .why-item h3 { font-family: var(--font-display); font-size: 19px; font-weight: 700; margin-bottom: 8px; }
  .why-item p { font-size: 14px; color: var(--gray); line-height: 1.65; }

  /* CONTACT */
  .contact { background: var(--black); color: white; }
  .contact .section-label { color: var(--orange-light); }
  .contact .section-label::before { background: var(--orange-light); }
  .contact-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    margin-top: 56px;
    align-items: start;
  }
  .contact-info .section-title { color: white; margin-bottom: 20px; }
  .contact-info .section-sub { color: rgba(255,255,255,0.6); margin-bottom: 40px; }
  .contact-detail {
    display: flex; align-items: center; gap: 14px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .contact-detail:last-of-type { border-bottom: none; }
  .contact-detail-icon {
    width: 40px; height: 40px;
    border-radius: 10px;
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
    border-radius: 24px;
    padding: 40px;
    opacity: 0;
  }
  .form-row { margin-bottom: 18px; }
  .form-row label { display: block; font-size: 13px; color: rgba(255,255,255,0.6); margin-bottom: 8px; font-weight: 500; }
  .form-row input, .form-row select, .form-row textarea {
    width: 100%;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 14px 16px;
    color: white;
    font-size: 14px;
    font-family: var(--font-body);
    outline: none;
    transition: border-color 0.3s;
  }
  .form-row input:focus, .form-row textarea:focus, .form-row select:focus {
    border-color: var(--orange);
  }
  .form-row textarea { resize: vertical; min-height: 100px; }
  .form-row select option { background: var(--dark); }
  .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .btn-form {
    width: 100%;
    background: var(--orange);
    color: white;
    padding: 16px;
    border-radius: 12px;
    border: none;
    font-size: 15px;
    font-weight: 600;
    font-family: var(--font-body);
    cursor: none;
    transition: background 0.3s, transform 0.2s;
    margin-top: 8px;
  }
  .btn-form:hover { background: var(--orange-light); transform: translateY(-1px); }

  /* FOOTER */
  footer {
    background: var(--black);
    border-top: 1px solid rgba(255,255,255,0.06);
    padding: 60px 48px 32px;
    color: white;
  }
  .footer-inner {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 48px;
    margin-bottom: 48px;
  }
  .footer-brand .nav-logo-text { color: white; font-size: 24px; }
  .footer-brand p { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.7; margin-top: 12px; max-width: 260px; }
  .footer-col h4 {
    font-family: var(--font-display);
    font-size: 14px; font-weight: 700;
    margin-bottom: 16px;
    color: white;
    letter-spacing: 0.02em;
  }
  .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
  .footer-col ul a { font-size: 13px; color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
  .footer-col ul a:hover { color: var(--orange-light); }
  .footer-bottom {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid rgba(255,255,255,0.06);
    padding-top: 24px;
  }
  .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.35); }
  .footer-bottom p span { color: var(--orange); }
  .footer-social { display: flex; gap: 12px; }
  .social-btn {
    width: 36px; height: 36px;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.12);
    display: flex; align-items: center; justify-content: center;
    font-size: 14px;
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: border-color 0.3s, color 0.3s, background 0.3s;
  }
  .social-btn:hover { border-color: var(--orange); color: var(--orange); background: rgba(244,107,27,0.1); }

  /* SCROLL LINE */
  .scroll-progress {
    position: fixed; top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--orange), var(--orange-light));
    transform-origin: left;
    transform: scaleX(0);
    z-index: 2000;
  }

  /* BACK TO TOP */
  .back-top {
    position: fixed; bottom: 40px; right: 40px;
    width: 48px; height: 48px;
    border-radius: 50%;
    background: var(--orange);
    color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px;
    cursor: none;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.3s, transform 0.3s, background 0.3s;
    z-index: 999;
    text-decoration: none;
    box-shadow: 0 8px 24px rgba(244,107,27,0.4);
  }
  .back-top.visible { opacity: 1; transform: translateY(0); }
  .back-top:hover { background: var(--orange-deep); }

  /* REVEAL CLASSES */
  .reveal-up { opacity: 0; transform: translateY(50px); }
  .reveal-left { opacity: 0; transform: translateX(-50px); }
  .reveal-right { opacity: 0; transform: translateX(50px); }

  /* RESPONSIVE */
  @media (max-width: 1100px) {
    .bento-card.span-5, .bento-card.span-4, .bento-card.span-3,
    .bento-card.span-7, .bento-card.span-8 { grid-column: span 6; }
    .ai-split { grid-template-columns: 1fr; gap: 40px; }
    .contact-inner { grid-template-columns: 1fr; }
    .footer-inner { grid-template-columns: 1fr 1fr; }
    .why-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 768px) {
    nav { padding: 16px 24px; }
    .nav-links { display: none; }
    section { padding: 60px 24px; }
    .hero { padding: 100px 24px 60px; }
    .hero-stats { position: relative; bottom: auto; right: auto; margin-top: 40px; justify-content: flex-start; flex-wrap: wrap; gap: 24px; }
    .bento-card.span-5, .bento-card.span-4, .bento-card.span-3,
    .bento-card.span-7, .bento-card.span-8, .bento-card.span-6 { grid-column: span 12; }
    .footer-inner { grid-template-columns: 1fr; gap: 32px; }
    .footer-bottom { flex-direction: column; gap: 16px; text-align: center; }
    .portfolio-header { flex-direction: column; gap: 20px; align-items: flex-start; }
    .form-grid { grid-template-columns: 1fr; }
  }
</style>
@endsection

@section('content')
<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg-grid"></div>
  <div class="hero-bg-glow"></div>
  <div class="hero-content">
    <div class="hero-badge">
      <span class="dot"></span>
      Proudly built from India · Serving US & Global Clients
    </div>
    <h1 class="hero-title">
      <span class="line">Built with</span>
      <span class="line"><span class="accent">Courage.</span></span>
      <span class="line">Ranked with</span>
      <span class="line"><span class="accent">Purpose.</span></span>
    </h1>
    <p class="hero-tagline">
      We design high-converting websites, dominate search rankings, and secure your complete digital presence — all powered by AI and delivered at extraordinary speed.
    </p>
    <div class="hero-actions">
      <a href="#contact" class="btn-primary">Get Free Website Audit →</a>
      <a href="#portfolio" class="btn-secondary">View Our Work ↗</a>
    </div>
  </div>
  <div class="hero-stats" id="heroStats">
    <div class="stat-item">
      <div class="stat-num">200<span>+</span></div>
      <div class="stat-label">Websites Delivered</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">98<span>%</span></div>
      <div class="stat-label">Client Retention</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">4<span>×</span></div>
      <div class="stat-label">Faster with AI</div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-section">
  <div class="marquee-track">
    <div class="marquee-item">Web Design <span class="sep">✦</span></div>
    <div class="marquee-item">SEO Optimization <span class="sep">✦</span></div>
    <div class="marquee-item">Digital Marketing <span class="sep">✦</span></div>
    <div class="marquee-item">Web Security <span class="sep">✦</span></div>
    <div class="marquee-item">AI-Powered Development <span class="sep">✦</span></div>
    <div class="marquee-item">E-Commerce Solutions <span class="sep">✦</span></div>
    <div class="marquee-item">Brand Identity <span class="sep">✦</span></div>
    <div class="marquee-item">Performance Audits <span class="sep">✦</span></div>
    <div class="marquee-item">Content Strategy <span class="sep">✦</span></div>
    <div class="marquee-item">UI/UX Design <span class="sep">✦</span></div>
    <!-- Duplicate for seamless loop -->
    <div class="marquee-item">Web Design <span class="sep">✦</span></div>
    <div class="marquee-item">SEO Optimization <span class="sep">✦</span></div>
    <div class="marquee-item">Digital Marketing <span class="sep">✦</span></div>
    <div class="marquee-item">Web Security <span class="sep">✦</span></div>
    <div class="marquee-item">AI-Powered Development <span class="sep">✦</span></div>
    <div class="marquee-item">E-Commerce Solutions <span class="sep">✦</span></div>
    <div class="marquee-item">Brand Identity <span class="sep">✦</span></div>
    <div class="marquee-item">Performance Audits <span class="sep">✦</span></div>
    <div class="marquee-item">Content Strategy <span class="sep">✦</span></div>
    <div class="marquee-item">UI/UX Design <span class="sep">✦</span></div>
  </div>
</div>

<!-- SERVICES BENTO -->
<section class="services" id="services">
  <div class="services-header">
    <div class="section-label">What We Do</div>
    <h2 class="section-title">Your Complete<br><span class="accent">Digital Arsenal</span></h2>
    <p class="section-sub">From pixel-perfect design to page-one rankings — we cover every angle of your digital presence.</p>
  </div>
  <div class="bento-grid">
    <div class="bento-card dark span-5">
      <div class="bento-card-tag">Core Service</div>
      <div class="bento-card-icon">🎨</div>
      <h3>Web Design & Development</h3>
      <p>Custom, conversion-focused websites built with clean code, stunning visuals, and lightning-fast performance. From landing pages to full-stack web apps.</p>
      <div class="bento-card-big-num">01</div>
    </div>
    <div class="bento-card span-4">
      <div class="bento-card-tag">Top Ranked</div>
      <div class="bento-card-icon">📈</div>
      <h3>Search Engine Optimization</h3>
      <p>Technical SEO, on-page optimization, backlink strategy, and local SEO that gets you to page one — for both India and US markets.</p>
      <div class="bento-card-big-num">02</div>
    </div>
    <div class="bento-card orange span-3">
      <div class="bento-card-icon">🔐</div>
      <h3>Web Security & Protection</h3>
      <p>SSL, vulnerability scanning, malware removal, and enterprise-grade security hardening to protect your business 24/7.</p>
      <div class="bento-card-big-num">03</div>
    </div>
    <div class="bento-card span-3">
      <div class="bento-card-icon">📣</div>
      <h3>Digital Marketing</h3>
      <p>Paid ads, social media, content marketing, and email campaigns that drive real ROI for your business.</p>
      <div class="bento-card-big-num">04</div>
    </div>
    <div class="bento-card span-5">
      <div class="bento-card-tag">New</div>
      <div class="bento-card-icon">🤖</div>
      <h3>AI-Powered Development</h3>
      <p>We leverage cutting-edge AI tools in our development workflow — delivering unique, error-free code and extraordinary design ideas at 1/4th the usual time and cost.</p>
      <div class="bento-card-big-num">05</div>
    </div>
    <div class="bento-card dark span-4">
      <div class="bento-card-icon">🛒</div>
      <h3>E-Commerce Solutions</h3>
      <p>High-converting Shopify, WooCommerce, and custom e-commerce stores optimized for maximum sales and seamless UX.</p>
      <div class="bento-card-big-num">06</div>
    </div>
    <div class="bento-card span-6">
      <div class="bento-card-tag">Premium Design</div>
      <div class="bento-card-icon">🎨</div>
      <h3>UI/UX Design & Branding</h3>
      <p>Research-led UI/UX design and strategic branding that makes your business stand out. From wireframes to high-fidelity prototypes and full identity systems.</p>
      <div class="bento-card-big-num">07</div>
    </div>
    <div class="bento-card orange span-6">
      <div class="bento-card-icon">🌐</div>
      <h3>Complete Digital Presence Management</h3>
      <p>One partner for everything — website, SEO, ads, social, security, and analytics. We become your outsourced digital growth team so you focus on your business.</p>
      <div class="bento-card-big-num">08</div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process" id="process">
  <div class="section-label">How We Work</div>
  <h2 class="section-title">From Vision to<br><span class="accent">Victory</span></h2>
  <p class="section-sub">A streamlined, transparent process that gets you live faster and ranked higher.</p>
  <div class="process-steps">
    <div class="process-step">
      <div class="step-num">01</div>
      <div class="step-title">Discovery Call</div>
      <div class="step-desc">We understand your goals, audience, competition, and vision in a focused strategy session.</div>
    </div>
    <div class="process-step">
      <div class="step-num">02</div>
      <div class="step-title">Strategy & Audit</div>
      <div class="step-desc">Free SEO audit, competitor analysis, and a custom digital roadmap tailored to your market.</div>
    </div>
    <div class="process-step">
      <div class="step-num">03</div>
      <div class="step-title">AI-Driven Design</div>
      <div class="step-desc">Our AI-enhanced design process generates unique concepts and error-free code 4× faster.</div>
    </div>
    <div class="process-step">
      <div class="step-num">04</div>
      <div class="step-title">Build & Optimize</div>
      <div class="step-desc">Development, SEO implementation, security hardening, and performance tuning in parallel.</div>
    </div>
    <div class="process-step">
      <div class="step-num">05</div>
      <div class="step-title">Launch & Rank</div>
      <div class="step-desc">Staged launch, testing, indexing, and active ranking campaigns from day one.</div>
    </div>
    <div class="process-step">
      <div class="step-num">06</div>
      <div class="step-title">Grow & Scale</div>
      <div class="step-desc">Ongoing support, monthly reports, and continuous optimization for compounding growth.</div>
    </div>
  </div>
</section>

<!-- AI SECTION -->
<section class="ai-section" id="ai">
  <div class="section-label">Our Unfair Advantage</div>
  <div class="ai-split">
    <div class="ai-visual">
      <div class="ai-rings">
        <div class="ai-ring"></div>
        <div class="ai-ring"></div>
        <div class="ai-ring"></div>
      </div>
      <div class="ai-visual-inner">
        <div class="ai-orb"></div>
      </div>
      <div class="ai-chips">
        <div class="ai-chip"><span class="dot"></span> Zero Errors</div>
        <div class="ai-chip"><span class="dot"></span> 4× Faster</div>
        <div class="ai-chip"><span class="dot"></span> Unique Designs</div>
        <div class="ai-chip"><span class="dot"></span> AI-Optimized SEO</div>
        <div class="ai-chip"><span class="dot"></span> Smart Code</div>
      </div>
    </div>
    <div class="ai-text-content">
      <h2 class="section-title">We Build Smarter<br>with <span class="accent">AI</span></h2>
      <p class="section-sub">While others still code line by line, we've integrated AI into every layer of our workflow — from design ideation to security testing.</p>
      <div class="ai-features">
        <div class="ai-feature">
          <div class="ai-feature-icon">⚡</div>
          <div>
            <h4>Delivered in 1/4th the Time</h4>
            <p>AI-assisted development slashes build time without cutting corners. Your website goes live weeks ahead of traditional agencies.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">🎯</div>
          <div>
            <h4>Unique by Design</h4>
            <p>AI helps us explore hundreds of creative directions to craft a visual identity that's genuinely yours — no templates, no recycled concepts.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">🛡️</div>
          <div>
            <h4>Error-Free Code Guarantee</h4>
            <p>AI-powered code review and automated testing catches bugs before they ever reach production. Clean, maintainable, and scalable.</p>
          </div>
        </div>
        <div class="ai-feature">
          <div class="ai-feature-icon">📊</div>
          <div>
            <h4>AI-Powered SEO Intelligence</h4>
            <p>We use AI to analyze search intent, map content gaps, and generate strategies that align with what Google rewards in 2025.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FREE TOOLS / OFFERS -->
<section class="offers" id="free-tools">
  <div class="section-label">No Cost. Real Value.</div>
  <h2 class="section-title" style="color:white;">Free Tools &<br><span class="accent">Consultations</span></h2>
  <p class="section-sub" style="color:rgba(255,255,255,0.6);">We believe in earning your trust before your business. Start with these no-strings-attached resources.</p>
  <div class="offers-grid">
    <div class="offer-card featured">
      <div class="offer-badge">🔥 Most Popular</div>
      <div class="offer-icon">🔍</div>
      <h3>Free SEO Audit</h3>
      <p>Full technical and on-page SEO analysis of your website — keyword ranking, backlink profile, Core Web Vitals, and a 10-point action plan. Completely free.</p>
    </div>
    <div class="offer-card">
      <div class="offer-badge">Free</div>
      <div class="offer-icon">💬</div>
      <h3>Free Website Consultancy</h3>
      <p>30-minute strategy call with our experts to review your website, identify conversion leaks, and map out your digital growth path — zero commitment required.</p>
    </div>
    <div class="offer-card">
      <div class="offer-badge">Free</div>
      <div class="offer-icon">⚡</div>
      <h3>Website Speed Analysis</h3>
      <p>We test your site's performance on Google PageSpeed, identify what's slowing you down, and deliver a prioritized fix list — at no charge.</p>
    </div>
    <div class="offer-card">
      <div class="offer-badge">Free</div>
      <div class="offer-icon">🏆</div>
      <h3>Competitor Gap Report</h3>
      <p>See exactly how your top 3 competitors are ranking and what content or SEO tactics are giving them the edge. We hand you the insights — you keep the wins.</p>
    </div>
    <div class="offer-card">
      <div class="offer-badge">Free</div>
      <div class="offer-icon">🔐</div>
      <h3>Security Vulnerability Scan</h3>
      <p>A preliminary security health check of your website — covering common vulnerabilities, SSL status, exposed data risks, and recommended fixes.</p>
    </div>
    <div class="offer-card">
      <div class="offer-badge">Free</div>
      <div class="offer-icon">📋</div>
      <h3>Digital Presence Scorecard</h3>
      <p>We score your brand's entire online presence — website, social, local SEO, reviews, and more — and give you a clear picture of where to invest first.</p>
    </div>
  </div>
</section>

<!-- PORTFOLIO SLIDER -->
<section class="portfolio" id="portfolio">
  <div class="portfolio-header">
    <div>
      <div class="section-label">Our Work</div>
      <h2 class="section-title">Projects That<br><span class="accent">Perform</span></h2>
    </div>
    <div class="slider-controls">
      <button class="slider-btn" id="prevBtn">←</button>
      <button class="slider-btn" id="nextBtn">→</button>
    </div>
  </div>
  <div class="portfolio-track-wrap">
    <div class="portfolio-track" id="portfolioTrack">
      <div class="portfolio-card">
        <div class="portfolio-img">
          <div class="portfolio-img-bg">🏥</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags"><span class="portfolio-tag">Web Design</span><span class="portfolio-tag">SEO</span></div>
          <h3>MediCare Plus Clinic</h3>
          <p>Healthcare website with 320% increase in organic appointments</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img" style="background: #1a1a2e;">
          <div class="portfolio-img-bg">🛒</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags"><span class="portfolio-tag">E-Commerce</span><span class="portfolio-tag">Performance</span></div>
          <h3>Artisan Goods Co. – US</h3>
          <p>Shopify store rebuild with 2.8× conversion rate improvement</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img" style="background: #0d1b2a;">
          <div class="portfolio-img-bg">⚖️</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags"><span class="portfolio-tag">Web Dev</span><span class="portfolio-tag">Security</span></div>
          <h3>LexPro Law Associates</h3>
          <p>Enterprise law firm site with GDPR compliance & web security</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img" style="background: #1b2a1a;">
          <div class="portfolio-img-bg">🌱</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags"><span class="portfolio-tag">Branding</span><span class="portfolio-tag">SEO</span></div>
          <h3>GreenRoot Organics</h3>
          <p>D2C brand launch — from zero to 12K monthly organic visitors in 90 days</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img" style="background: #2a1a1a;">
          <div class="portfolio-img-bg">🏨</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags"><span class="portfolio-tag">Hospitality</span><span class="portfolio-tag">Local SEO</span></div>
          <h3>The Grand Residency Hotel</h3>
          <p>Hotel booking site with 40% direct booking increase via local SEO</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img" style="background: #1a1a2a;">
          <div class="portfolio-img-bg">💼</div>
          <div class="portfolio-img-overlay"><span>View Project →</span></div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-tags"><span class="portfolio-tag">SaaS</span><span class="portfolio-tag">UI/UX</span></div>
          <h3>FlowDesk – SaaS Platform</h3>
          <p>Product redesign with 68% reduction in user churn</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY VEERHAN -->
<section class="why">
  <div class="section-label">Why Choose Us</div>
  <h2 class="section-title">The Veerhan<br><span class="accent">Difference</span></h2>
  <div class="why-grid">
    <div class="why-item">
      <div class="why-num">01</div>
      <div>
        <h3>Named After Veer Hanuman</h3>
        <p>Veerhan — derived from Veer Hanuman, the embodiment of strength, devotion, and unstoppable force. We bring that same relentless energy to every project we take on.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">02</div>
      <div>
        <h3>India's Quality, Global Standards</h3>
        <p>World-class design and development delivered from India — giving our clients premium quality at a fraction of Western agency rates, with zero compromise on output.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">03</div>
      <div>
        <h3>Full-Stack Digital Partners</h3>
        <p>Not just a web agency — we're your complete digital growth partner. Strategy, design, dev, SEO, ads, and security under one roof. One team, one vision, full ownership.</p>
      </div>
    </div>
    <div class="why-item">
      <div class="why-num">04</div>
      <div>
        <h3>Results, Not Just Reports</h3>
        <p>We measure success by your growth — more leads, higher rankings, better conversions. Every decision is backed by data and tied to outcomes that move your business forward.</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials">
  <div class="section-label">Client Love</div>
  <h2 class="section-title">What Our Clients<br><span class="accent">Say</span></h2>
  <div class="testi-grid">
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Veerhan completely transformed our online presence. Our website went from invisible to Page 1 in three months — and our leads have doubled since launch. Best decision we made.</p>
      <div class="testi-author">
        <div class="testi-avatar">RK</div>
        <div>
          <div class="testi-name">Rahul Kapoor</div>
          <div class="testi-role">Founder, TechSprint India</div>
        </div>
      </div>
    </div>
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">Working with Veerhan felt different from day one. They understood the US market nuances, delivered an incredible design, and our Shopify store conversion rate nearly tripled. Remarkable team.</p>
      <div class="testi-author">
        <div class="testi-avatar">JM</div>
        <div>
          <div class="testi-name">Jessica Martinez</div>
          <div class="testi-role">CEO, Artisan Goods Co., California</div>
        </div>
      </div>
    </div>
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-quote">"</div>
      <p class="testi-text">The free SEO audit alone was worth more than what we'd paid other agencies. When we hired Veerhan full-time, the results spoke for themselves — ranking #1 for 8 of our target keywords.</p>
      <div class="testi-author">
        <div class="testi-avatar">PS</div>
        <div>
          <div class="testi-name">Priya Sharma</div>
          <div class="testi-role">Marketing Head, MediCare Plus</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="section-label">Let's Build Together</div>
  <div class="contact-inner">
    <div class="contact-info">
      <h2 class="section-title">Start Your Digital<br><span class="accent">Journey Today</span></h2>
      <p class="section-sub">Whether you're a startup in Mumbai or an enterprise in New York — we're ready to build your digital advantage. Let's start with a free consultation.</p>
      <div class="contact-detail">
        <div class="contact-detail-icon">📞</div>
        <div>
          <span>Call / WhatsApp</span>
          <a href="tel:+918719036405">+91 87190 36405</a>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-detail-icon">✉️</div>
        <div>
          <span>General Inquiries</span>
          <a href="mailto:contact@veerhan.com">contact@veerhan.com</a>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-detail-icon">📧</div>
        <div>
          <span>Business & Proposals</span>
          <a href="mailto:info@veerhan.com">info@veerhan.com</a>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-detail-icon">🌐</div>
        <div>
          <span>Website</span>
          <a href="https://veerhan.com">veerhan.com</a>
        </div>
      </div>
      <div style="margin-top: 32px; padding: 20px; border-radius: 16px; background: rgba(244,107,27,0.1); border: 1px solid rgba(244,107,27,0.2);">
        <p style="font-size: 13px; color: rgba(255,255,255,0.7); line-height: 1.6;">
          🇮🇳 <strong style="color:white;">India:</strong> Serving clients across Pune, Mumbai, Delhi, Bangalore, and all major cities.<br><br>
          🇺🇸 <strong style="color:white;">USA:</strong> Remote-first collaboration for clients across New York, California, Texas, and beyond.
        </p>
      </div>
    </div>
    <div class="contact-form" id="homeFormWrap">
      <!-- SUCCESS STATE -->
      <div id="homeFormSuccess" style="display:none; text-align:center; padding:40px 20px; animation: fadeInUp 0.5s ease;">
        <div style="font-size:48px; margin-bottom:20px;">🎉</div>
        <h3 style="font-family:var(--font-display); font-size:26px; font-weight:800; color:white; margin-bottom:12px;">Message Sent!</h3>
        <p style="font-size:15px; color:rgba(255,255,255,0.6); line-height:1.7; max-width:340px; margin:0 auto;">Thank you for reaching out. We'll review your details and get back to you within 24 hours.</p>
        <p style="margin-top:12px; font-size:13px; color:rgba(255,255,255,0.35);">Check your inbox for a follow-up from us.</p>
      </div>

      <!-- FORM -->
      <form id="homeContactForm" style="display:block;">
        @csrf
        <input type="hidden" name="page_source" value="Home Page">
        <h3 style="font-family: var(--font-display); font-size: 22px; font-weight: 700; margin-bottom: 28px;">Book a Free Consultation</h3>
        <div class="form-grid">
          <div class="form-row">
            <label>Your Name *</label>
            <input type="text" name="first_name" placeholder="Raj Sharma" required>
          </div>
          <div class="form-row">
            <label>Company / Website</label>
            <input type="text" name="company" placeholder="yourwebsite.com">
          </div>
        </div>
        <div class="form-row">
          <label>Email Address *</label>
          <input type="email" name="email" placeholder="hello@yourcompany.com" required>
        </div>
        <div class="form-row">
          <label>Phone / WhatsApp</label>
          <input type="tel" name="phone" placeholder="+1 or +91">
        </div>
        <div class="form-row">
          <label>What do you need?</label>
          <select name="service">
            <option value="">Select a service...</option>
            <option>Web Design & Development</option>
            <option>SEO Optimization</option>
            <option>Digital Marketing</option>
            <option>Web Security</option>
            <option>E-Commerce Solution</option>
            <option>Complete Digital Presence</option>
            <option>Free SEO Audit</option>
            <option>Other / Not Sure Yet</option>
          </select>
        </div>
        <div class="form-row">
          <label>Tell us about your project *</label>
          <textarea name="message" placeholder="Brief description of your goals, target audience, timeline..." required></textarea>
        </div>
        <button type="submit" class="btn-form" id="homeSubmitBtn">Send Message — It's Free →</button>
      </form>
    </div>
  </div>
</section>

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
    const bt = document.getElementById('backTop');
    bt.classList.toggle('visible', window.scrollY > 400);
  });

  // HERO ANIMATIONS
  gsap.timeline({ delay: 0.2 })
    .to('.hero-badge', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' })
    .fromTo('.hero-title .line', 
      { yPercent: 100, opacity: 0 },
      { yPercent: 0, opacity: 1, duration: 1, stagger: 0.12, ease: 'power4.out' }, '-=0.3')
    .to('.hero-tagline', { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, '-=0.4')
    .to('.hero-actions', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.3')
    .to('#heroStats', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.2');

  // BENTO CARDS
  gsap.utils.toArray('.bento-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: (i % 3) * 0.12,
      scrollTrigger: { trigger: card, start: 'top 88%' }
    });
  });

  // PROCESS STEPS
  gsap.utils.toArray('.process-step').forEach((step, i) => {
    gsap.to(step, {
      opacity: 1, y: 0, duration: 0.6, ease: 'power3.out',
      delay: i * 0.1,
      scrollTrigger: { trigger: '.process-steps', start: 'top 80%' }
    });
  });

  // AI SECTION
  gsap.to('.ai-visual', {
    opacity: 1, x: 0, duration: 1, ease: 'power3.out',
    scrollTrigger: { trigger: '.ai-section', start: 'top 75%' }
  });
  gsap.to('.ai-text-content', {
    opacity: 1, x: 0, duration: 1, delay: 0.2, ease: 'power3.out',
    scrollTrigger: { trigger: '.ai-section', start: 'top 75%' }
  });

  // OFFER CARDS
  gsap.utils.toArray('.offer-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: (i % 3) * 0.1,
      scrollTrigger: { trigger: card, start: 'top 88%' }
    });
  });

  // PORTFOLIO CARDS
  gsap.utils.toArray('.portfolio-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, x: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.08,
      scrollTrigger: { trigger: '.portfolio', start: 'top 80%' }
    });
  });

  // TESTIMONIALS
  gsap.utils.toArray('.testi-card').forEach((card, i) => {
    gsap.to(card, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.12,
      scrollTrigger: { trigger: card, start: 'top 88%' }
    });
  });

  // WHY ITEMS
  gsap.utils.toArray('.why-item').forEach((item, i) => {
    gsap.to(item, {
      opacity: 1, y: 0, duration: 0.7, ease: 'power3.out',
      delay: i * 0.1,
      scrollTrigger: { trigger: item, start: 'top 88%' }
    });
  });

  // CONTACT FORM
  gsap.to('.contact-form', {
    opacity: 1, x: 0, duration: 1, ease: 'power3.out',
    scrollTrigger: { trigger: '.contact', start: 'top 75%' }
  });

  // SECTION TITLES TEXT REVEAL
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
    if (current < maxSlide) {
      current++;
      track.style.transform = `translateX(-${current * cardWidth}px)`;
    }
  });
  document.getElementById('prevBtn').addEventListener('click', () => {
    if (current > 0) {
      current--;
      track.style.transform = `translateX(-${current * cardWidth}px)`;
    }
  });

  // PARALLAX ON HERO GLOW
  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    document.querySelector('.hero-bg-glow').style.transform = `translateY(${y * 0.3}px)`;
  });

  // HOME CONTACT FORM
  document.getElementById('homeContactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = document.getElementById('homeSubmitBtn');
    const formEl = document.getElementById('homeContactForm');
    const successEl = document.getElementById('homeFormSuccess');

    const data = Object.fromEntries(new FormData(this).entries());

    btn.textContent = 'Sending...';
    btn.disabled = true;
    btn.style.opacity = '0.7';

    fetch('{{ route('contact.submit') }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify(data)
    })
    .then(r => r.json())
    .then(res => {
      if (res.success) {
        formEl.style.display = 'none';
        successEl.style.display = 'block';
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
  });
</script>
@endsection
