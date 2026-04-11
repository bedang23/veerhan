@extends('admin.layouts.app')

@section('title', 'Edit Author | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <h1 class="admin-title">Edit Author</h1>
        <p class="admin-muted">Update author profile details.</p>

        @include('admin.partials.flash')

        <form method="POST" action="{{ route('admin.authors.update', $author) }}" style="margin-top:24px;">
            @method('PUT')
            @include('admin.authors.form')
        </form>
    </div>
</section>
@endsection
