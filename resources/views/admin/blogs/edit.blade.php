@extends('admin.layouts.app')

@section('title', 'Edit Blog | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <h1 class="admin-title">Edit Blog</h1>
        <p class="admin-muted">Update blog content, SEO metadata, and publishing state.</p>

        @include('admin.partials.flash')

        <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data" style="margin-top:24px;">
            @method('PUT')
            @include('admin.blogs.form')
        </form>
    </div>
</section>
@endsection
