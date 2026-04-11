@extends('admin.layouts.app')

@section('title', 'Create Case Study | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <h1 class="admin-title">Create Case Study</h1>
        <p class="admin-muted">Publish a new case study with SEO metadata and featured image.</p>

        @include('admin.partials.flash')

        <form method="POST" action="{{ route('admin.case-studies.store') }}" enctype="multipart/form-data" style="margin-top:24px;">
            @include('admin.case-studies.form')
        </form>
    </div>
</section>
@endsection
