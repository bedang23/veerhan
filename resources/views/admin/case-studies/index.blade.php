@extends('admin.layouts.app')

@section('title', 'Case Studies | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <div class="admin-topbar">
            <div>
                <h1 class="admin-title">Case Studies</h1>
                <p class="admin-muted">Manage case studies, outcomes, and SEO metadata.</p>
            </div>
            <a href="{{ route('admin.case-studies.create') }}" class="admin-btn-inline">+ Add Case Study</a>
        </div>

        @include('admin.partials.flash')

        @if ($caseStudies->isEmpty())
            <div class="admin-empty">No case studies found. <a class="admin-link" href="{{ route('admin.case-studies.create') }}">Create your first →</a></div>
        @else
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Published At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($caseStudies as $caseStudy)
                            <tr>
                                <td style="font-weight:600; max-width:240px;">{{ $caseStudy->title }}</td>
                                <td>{{ $caseStudy->category->name }}</td>
                                <td>{{ $caseStudy->author->name }}</td>
                                <td><span class="admin-chip" style="{{ $caseStudy->is_published ? 'background:rgba(34,197,94,0.12);color:#86efac;' : '' }}">{{ $caseStudy->is_published ? 'Published' : 'Draft' }}</span></td>
                                <td style="font-size:13px; color:var(--muted);">{{ optional($caseStudy->published_at)->format('M d, Y H:i') ?: '—' }}</td>
                                <td>
                                    <div class="admin-actions">
                                        <a class="admin-link" href="{{ route('case-studies.show', $caseStudy->slug) }}" target="_blank" rel="noopener">View</a>
                                        <a class="admin-link" href="{{ route('admin.case-studies.edit', $caseStudy) }}">Edit</a>
                                        <form method="POST" action="{{ route('admin.case-studies.destroy', $caseStudy) }}" onsubmit="return confirm('Delete this case study?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="admin-link admin-link-btn admin-link-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="admin-pagination">{{ $caseStudies->links() }}</div>
        @endif
    </div>
</section>
@endsection
