<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Veerhan</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">
    <div class="admin-login-wrap">
        <div class="admin-login-card">
            <div class="admin-brand">
                <img src="{{ asset('logo.png') }}" alt="Veerhan" width="44" height="44" style="border-radius:10px;">
            </div>
            <h1>Sign in</h1>
            <p>Use your administrator credentials to access the panel.</p>

            @if ($errors->any())
                <div class="admin-error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="admin-field" style="margin-bottom:18px;">
                    <label for="email">Email Address</label>
                    <input class="admin-input" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="admin-field" style="margin-bottom:24px;">
                    <label for="password">Password</label>
                    <input class="admin-input" type="password" id="password" name="password" required>
                </div>

                <button class="admin-btn" type="submit">Access Dashboard →</button>
            </form>

            <a href="/" class="admin-back">← Back to Website</a>
        </div>
    </div>
</body>
</html>
