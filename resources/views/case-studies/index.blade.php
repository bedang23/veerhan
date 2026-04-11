@extends('layouts.app')

@section('head_meta')
<title>Case Studies | Veerhan — Real Digital Results</title>
<meta name="description" content="Explore Veerhan's case studies — real outcomes from web design, SEO, digital marketing, and AI implementation projects for clients in India, USA, and Dubai.">
<link rel="canonical" href="{{ route('case-studies.index') }}">
<meta property="og:title" content="Veerhan Case Studies - Real Digital Results">
<meta property="og:description" content="Detailed snapshots of how Veerhan creates measurable business results through web design, SEO, and digital marketing.">
@endsection

@section('page_styles')
<link rel="stylesheet" href="{{ asset('css/insights.css') }}">
@endsection

@section('content')
<section class="insights-hero">
    <div class="insights-hero-inner">
        <div class="insights-breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <span class="current">Case Studies</span>
        </div>
        <div class="insights-eyebrow">Veerhan Proven Work</div>
        <h1 class="insights-title">Case <span class="ol">Studies</span></h1>
        <p class="insights-sub">Detailed snapshots of how Veerhan approaches web design, SEO, digital marketing, and AI to create measurable business results for clients across India, USA, and Dubai.</p>
    </div>
</section>

<section class="insights-section">
    <div class="insights-container">
        @if ($caseStudies->isEmpty())
            <div class="insights-empty">
                <p>No case studies are published yet.</p>
                <a href="{{ route('contact') }}" style="display:inline-block; background:var(--orange); color:white; padding:14px 32px; border-radius:100px; text-decoration:none; font-weight:700; font-size:15px;">Start Your Project →</a>
            </div>
        @else
            <div class="insights-grid">
                @foreach ($caseStudies as $caseStudy)
                    <article class="insight-card">
                        <div class="insight-card-image-wrap">
                            <a href="{{ route('case-studies.show', $caseStudy->slug) }}">
                                <img class="insight-card-image" src="{{ asset($caseStudy->featured_image_path) }}" alt="{{ $caseStudy->title }}" loading="lazy" decoding="async">
                            </a>
                        </div>
                        <div class="insight-card-body">
                            <div class="insight-card-meta">
                                <span class="insight-chip">{{ $caseStudy->category->name }}</span>
                                <span class="insight-chip">{{ optional($caseStudy->published_at)->format('M d, Y') ?: 'Published' }}</span>
                            </div>
                            <h2 class="insight-card-title">
                                <a href="{{ route('case-studies.show', $caseStudy->slug) }}">{{ $caseStudy->title }}</a>
                            </h2>
                            <p class="insight-card-excerpt">{{ $caseStudy->excerpt }}</p>
                            <div class="insight-card-footer">
                                <span class="insight-card-byline">By <strong>{{ $caseStudy->author->name }}</strong></span>
                                <a class="insight-link" href="{{ route('case-studies.show', $caseStudy->slug) }}">Read Study →</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
