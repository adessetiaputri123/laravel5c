<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Anti-Procrastination App')</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">

    <style>
        .app-brand-text { letter-spacing: .2px; }
        .metric-value { font-size: 1.75rem; font-weight: 700; }
        .metric-label { color: var(--bs-secondary-color); }
        .table td, .table th { vertical-align: middle; }
        .content-card { min-height: 100%; }
    </style>
</head>
