@extends('layouts.app')

@php
  $navVariant = 'admin'; // No nav for login
@endphp

@section('head_meta')
<title>Admin Login | Veerhan</title>
@endsection

@section('content')
<div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #0E0E0E; padding: 20px;">
    <div style="width: 100%; max-width: 400px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 40px;">
        <div style="text-align: center; margin-bottom: 32px;">
            <div style="font-family: 'Syne', sans-serif; font-size: 28px; font-weight: 800; color: white;">Veerhan<span>.</span></div>
            <p style="color: rgba(255,255,255,0.4); font-size: 14px; margin-top: 8px;">Admin Control Panel</p>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 12px; color: rgba(255,255,255,0.5); margin-bottom: 8px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em;">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" style="width: 100%; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 14px; color: white; outline: none; transition: border-color 0.3s;" required autofocus>
                @error('email')
                    <span style="color: #ef4444; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 24px;">
                <label style="display: block; font-size: 12px; color: rgba(255,255,255,0.5); margin-bottom: 8px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em;">Password</label>
                <input type="password" name="password" style="width: 100%; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 14px; color: white; outline: none;" required>
            </div>

            <button type="submit" style="width: 100%; background: #F46B1B; color: white; border: none; border-radius: 100px; padding: 16px; font-size: 15px; font-weight: 600; cursor: pointer; transition: background 0.3s;">
                Auth into Dashboard →
            </button>
        </form>

        <a href="/" style="display: block; text-align: center; margin-top: 24px; color: rgba(255,255,255,0.3); font-size: 13px; text-decoration: none;">← Back to Website</a>
    </div>
</div>

<style>
    /* Override global cursor if needed, but the user requested consistent design. */
    body { background: #0E0E0E; }
    input:focus { border-color: #F46B1B !important; background: rgba(244,107,27,0.05) !important; }
</style>
@endsection
