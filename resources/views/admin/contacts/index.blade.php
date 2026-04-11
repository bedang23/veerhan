@extends('admin.layouts.app')

@section('title', 'Contacts | Veerhan Admin')

@section('content')
<section class="admin-card">
    <div class="admin-card-body">
        <div class="admin-topbar">
            <div>
                <h1 class="admin-title">Inbound Contacts</h1>
                <p class="admin-muted">All contact form submissions from the website.</p>
            </div>
            <span class="admin-chip" style="padding:6px 14px; font-size:12px;">{{ $contacts->total() }} Total</span>
        </div>

        @include('admin.partials.flash')

        @if ($contacts->isEmpty())
            <div class="admin-empty">No contact submissions yet.</div>
        @else
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email / Phone</th>
                            <th>Service / Budget</th>
                            <th>Message</th>
                            <th>Status / Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>
                                    <div style="font-weight:600;">{{ $contact->first_name }} {{ $contact->last_name }}</div>
                                    <div style="font-size:12px; color:var(--muted); margin-top:3px;">{{ $contact->company ?: 'No Company' }}</div>
                                </td>
                                <td>
                                    <div>{{ $contact->email }}</div>
                                    <div style="font-size:12px; color:var(--muted); margin-top:3px;">{{ $contact->phone ?: '—' }}</div>
                                </td>
                                <td>
                                    <div style="color:var(--orange); font-weight:500;">{{ $contact->service ?: 'General' }}</div>
                                    <div style="font-size:12px; color:var(--muted); margin-top:3px;">{{ $contact->budget ?: 'N/A' }}</div>
                                </td>
                                <td style="max-width:280px;">
                                    <div style="font-size:13px; color:rgba(255,255,255,0.6); overflow:hidden; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical;">{{ $contact->message }}</div>
                                </td>
                                <td>
                                    <span class="admin-chip">{{ strtoupper($contact->status ?? 'pending') }}</span>
                                    <div style="font-size:11px; color:var(--muted-2); margin-top:6px;">{{ $contact->created_at->format('M d, Y · h:i A') }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="admin-pagination">{{ $contacts->links() }}</div>
        @endif
    </div>
</section>
@endsection
