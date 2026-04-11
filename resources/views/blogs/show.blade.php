@extends('layouts.app')

@section('head_meta')
<title>{{ $blog->meta_title }}</title>
<meta name="description" content="{{ $blog->meta_description }}">
<link rel="canonical" href="{{ $blog->canonical_url ?: route('blogs.show', $blog->slug) }}">
<meta property="og:title" content="{{ $blog->og_title ?: $blog->meta_title }}">
<meta property="og:description" content="{{ $blog->og_description ?: $blog->meta_description }}">
<meta property="og:image" content="{{ asset($blog->featured_image_path) }}">
<meta property="og:type" content="article">
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
            <a href="{{ route('blogs.index') }}">Blog</a>
            <span>/</span>
            <span class="current">{{ $blog->title }}</span>
        </div>
        <div class="insights-eyebrow">{{ $blog->category->name }}</div>
        <h1 class="insights-title">{{ $blog->title }}</h1>
        <p class="insights-sub">{{ $blog->excerpt }}</p>
    </div>
</section>

<section class="article-wrap">
    <div class="article-container">
        <img class="article-featured" src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" width="1200" height="630" decoding="async">

        <div class="article-meta">
            <span class="insight-chip">By {{ $blog->author->name }}</span>
            <span class="insight-chip">{{ optional($blog->published_at)->format('M d, Y') ?: 'Published' }}</span>
            <span class="insight-chip">{{ $blog->category->name }}</span>
        </div>

        <article class="article-content">
            {!! $blog->content !!}
        </article>

        @if ($relatedBlogs->isNotEmpty())
            <div class="article-related">
                <h3>Related Articles</h3>
                <div class="insights-grid">
                    @foreach ($relatedBlogs as $related)
                        <article class="insight-card">
                            <div class="insight-card-image-wrap">
                                <a href="{{ route('blogs.show', $related->slug) }}">
                                    <img class="insight-card-image" src="{{ asset($related->featured_image_path) }}" alt="{{ $related->title }}" loading="lazy" decoding="async">
                                </a>
                            </div>
                            <div class="insight-card-body">
                                <div class="insight-card-meta">
                                    <span class="insight-chip">{{ $related->category->name }}</span>
                                </div>
                                <h4 class="insight-card-title">
                                    <a href="{{ route('blogs.show', $related->slug) }}">{{ $related->title }}</a>
                                </h4>
                                <p class="insight-card-excerpt">{{ $related->excerpt }}</p>
                                <div class="insight-card-footer">
                                    <a class="insight-link" href="{{ route('blogs.show', $related->slug) }}">Read Article →</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
