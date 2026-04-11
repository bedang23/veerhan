@extends('admin.layouts.app')

@section('title', 'Create Category | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <h1 class="admin-title">Create Category</h1>
        <p class="admin-muted">Add a new blog or case study category.</p>

        @include('admin.partials.flash')

        <form method="POST" action="{{ route('admin.categories.store') }}" style="margin-top:24px;">
            @include('admin.categories.form')
        </form>
    </div>
</section>
@endsection
