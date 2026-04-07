@extends('layouts.app')

@php
  $navVariant = 'admin';
@endphp

@section('head_meta')
<title>Admin Dashboard | Veerhan</title>
@endsection

@section('content')
<div style="min-height: 100vh; background: #0E0E0E; color: white;">
    <header style="background: rgba(255,255,255,0.02); padding: 40px 64px; border-bottom: 1px solid rgba(255,255,255,0.06); display: flex; justify-content: space-between; align-items: flex-end;">
        <div>
            <h1 style="font-family: 'Syne', sans-serif; font-size: 32px; font-weight: 800; letter-spacing: -1px; margin-bottom: 8px;">Control <span style="color: #F46B1B;">Panel</span></h1>
            <p style="color: rgba(255,255,255,0.4); font-size: 15px;">Welcome back, Admin. Here are your latest enquiries.</p>
        </div>
        <form action="{{ route('logout') }}" method="POST" style="margin-bottom: 4px;">
            @csrf
            <button type="submit" style="background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.6); border: 1px solid rgba(255,255,255,0.1); border-radius: 100px; padding: 10px 24px; font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.3s;">Log Out</button>
        </form>
    </header>

    <main style="padding: 64px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.07); border-radius: 24px; overflow: hidden; box-shadow: 0 40px 100px rgba(0,0,0,0.5);">
            <div style="padding: 24px 32px; background: rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.06); display: flex; justify-content: space-between; align-items: center;">
                <h3 style="font-family: 'Syne', sans-serif; font-size: 18px; font-weight: 700;">Inbound Leads</h3>
                <span style="background: rgba(244,107,27,0.15); color: #FF8C42; border-radius: 100px; padding: 4px 12px; font-size: 11px; font-weight: 700; text-transform: uppercase;">{{ $contacts->total() }} Total</span>
            </div>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; min-width: 1000px;">
                    <thead>
                        <tr style="background: rgba(255,255,255,0.01); border-bottom: 1px solid rgba(255,255,255,0.06);">
                            <th style="padding: 20px 32px; text-align: left; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em;">Name</th>
                            <th style="padding: 20px; text-align: left; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em;">Email / Phone</th>
                            <th style="padding: 20px; text-align: left; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em;">Service / Budget</th>
                            <th style="padding: 20px; text-align: left; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em;">Details</th>
                            <th style="padding: 20px 32px; text-align: left; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.1em;">Status / Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $contact)
                        <tr style="border-bottom: 1px solid rgba(255,255,255,0.04); transition: background 0.3s;" class="table-row">
                            <td style="padding: 24px 32px;">
                                <div style="font-weight: 600; font-size: 15px;">{{ $contact->first_name }} {{ $contact->last_name }}</div>
                                <div style="font-size: 12px; color: rgba(255,255,255,0.3); margin-top: 4px;">{{ $contact->company ?: 'No Company' }}</div>
                            </td>
                            <td style="padding: 20px;">
                                <div style="font-size: 14px; color: rgba(255,255,255,0.7);">{{ $contact->email }}</div>
                                <div style="font-size: 12px; color: rgba(255,255,255,0.3); margin-top: 4px;">{{ $contact->phone ?: 'No Phone' }}</div>
                            </td>
                            <td style="padding: 20px;">
                                <div style="font-size: 14px; color: #F46B1B; font-weight: 500;">{{ $contact->service ?: 'General' }}</div>
                                <div style="font-size: 12px; color: rgba(255,255,255,0.3); margin-top: 4px;">Budget: {{ $contact->budget ?: 'N/A' }}</div>
                            </td>
                            <td style="padding: 20px; max-width: 300px;">
                                <div style="font-size: 13px; color: rgba(255,255,255,0.6); line-height: 1.5; height: 3.2em; overflow: hidden; text-overflow: ellipsis;">{{ $contact->message }}</div>
                            </td>
                            <td style="padding: 24px 32px;">
                                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                                    <span style="width: 8px; height: 8px; border-radius: 50%; background: #F46B1B;"></span>
                                    <span style="font-size: 12px; font-weight: 500; font-family: 'Syne', sans-serif;">{{ strtoupper($contact->status) }}</span>
                                </div>
                                <div style="font-size: 11px; color: rgba(255,255,255,0.3);">{{ $contact->created_at->format('M d, Y · h:i A') }}</div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" style="padding: 80px; text-align: center; color: rgba(255,255,255,0.25);">No submissions found yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($contacts->hasPages())
            <div style="padding: 24px 32px; background: rgba(255,255,255,0.01); border-top: 1px solid rgba(255,255,255,0.06);">
                {{ $contacts->links() }}
            </div>
            @endif
        </div>
    </main>
</div>

<style>
    .table-row:hover { background: rgba(255,255,255,0.02); }
    .pagination { display: flex; list-style: none; gap: 8px; }
    .pagination li a, .pagination li span { 
        display: block; padding: 8px 16px; border-radius: 8px; background: rgba(255,255,255,0.05); 
        color: rgba(255,255,255,0.5); text-decoration: none; font-size: 13px;
    }
    .pagination li.active span { background: #F46B1B; color: white; }
</style>
@endsection
