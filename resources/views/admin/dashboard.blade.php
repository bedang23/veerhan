@extends('admin.layouts.app')

@section('title', 'Dashboard | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <h1 class="admin-title">Welcome back, {{ session('admin_auth.name') }}.</h1>
        <p class="admin-muted">Control panel for contacts, blogs, case studies, categories, and authors.</p>

        <div class="admin-grid">
            <article class="admin-stat">
                <h3>Total Contacts</h3>
                <p>{{ number_format($contactCount) }}</p>
            </article>

            <article class="admin-stat">
                <h3>Latest Contact</h3>
                <p style="font-size:14px; font-family: var(--font-body);">
                    {{ $latestContactAt ? \Illuminate\Support\Carbon::parse($latestContactAt)->diffForHumans() : 'No data' }}
                </p>
            </article>

            <article class="admin-stat">
                <h3>Quick Action</h3>
                <p><a href="{{ route('admin.contacts.index') }}">View Contacts →</a></p>
            </article>

            <article class="admin-stat">
                <h3>Blogs</h3>
                <p>{{ number_format($blogCount) }}</p>
            </article>

            <article class="admin-stat">
                <h3>Case Studies</h3>
                <p>{{ number_format($caseStudyCount) }}</p>
            </article>

            <article class="admin-stat">
                <h3>Categories</h3>
                <p>{{ number_format($categoryCount) }}</p>
            </article>

            <article class="admin-stat">
                <h3>Authors</h3>
                <p>{{ number_format($authorCount) }}</p>
            </article>
        </div>
    </div>
</section>
@endsection
