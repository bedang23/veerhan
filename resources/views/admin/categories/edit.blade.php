@extends('admin.layouts.app')

@section('title', 'Edit Category | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <h1 class="admin-title">Edit Category</h1>
        <p class="admin-muted">Update category details.</p>

        @include('admin.partials.flash')

        <form method="POST" action="{{ route('admin.categories.update', $category) }}" style="margin-top:24px;">
            @method('PUT')
            @include('admin.categories.form')
        </form>
    </div>
</section>
@endsection
