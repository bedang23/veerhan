@extends('layouts.app')

@section('head_meta')
<title>Blog & Insights | Veerhan</title>
<meta name="description" content="Read Veerhan's expert insights on web design, SEO, digital marketing, security, and AI implementation for businesses in India, USA, and Dubai.">
<link rel="canonical" href="{{ route('blogs.index') }}">
<meta property="og:title" content="Veerhan Blog - Digital Growth Insights">
<meta property="og:description" content="Expert articles on web development, SEO, digital marketing, and AI from the Veerhan team.">
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
            <span class="current">Blog</span>
        </div>
        <div class="insights-eyebrow">Veerhan Knowledge Base</div>
        <h1 class="insights-title">Blog & <span class="ol">Insights</span></h1>
        <p class="insights-sub">Expert perspectives from the Veerhan team on web design, SEO, digital marketing, security, and AI implementation — built for businesses ready to grow.</p>
    </div>
</section>

<section class="insights-section">
    <div class="insights-container">
        @if ($blogs->isEmpty())
            <div class="insights-empty">
                <p>No blog posts are published yet.</p>
                <a href="{{ route('contact') }}" style="display:inline-block; background:var(--orange); color:white; padding:14px 32px; border-radius:100px; text-decoration:none; font-weight:700; font-size:15px;">Get in Touch →</a>
            </div>
        @else
            <div class="insights-grid">
                @foreach ($blogs as $blog)
                    <article class="insight-card">
                        <div class="insight-card-image-wrap">
                            <a href="{{ route('blogs.show', $blog->slug) }}">
                                <img class="insight-card-image" src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" loading="lazy" decoding="async">
                            </a>
                        </div>
                        <div class="insight-card-body">
                            <div class="insight-card-meta">
                                <span class="insight-chip">{{ $blog->category->name }}</span>
                                <span class="insight-chip">{{ optional($blog->published_at)->format('M d, Y') ?: 'Published' }}</span>
                            </div>
                            <h2 class="insight-card-title">
                                <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                            </h2>
                            <p class="insight-card-excerpt">{{ $blog->excerpt }}</p>
                            <div class="insight-card-footer">
                                <span class="insight-card-byline">By <strong>{{ $blog->author->name }}</strong></span>
                                <a class="insight-link" href="{{ route('blogs.show', $blog->slug) }}">Read Article →</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
