<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('/assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/style.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/admin.css') }}">
    @yield('header_content')
</head>
<body>
    @include('templates.includes.topbar')
    <div class="content">
        @include('templates.includes.sidebar')
        <div class="main">
            <div class="container-fluid mt-3">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
    @include('templates.includes.footer')
    <script src="{{ url('/assets/bootstrap.min.js') }}"></script>
    @yield('optional_scripts')
</body>
</html>
