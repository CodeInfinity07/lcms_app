<!doctype html>
<html lang="en">
<head>
    @include('partials.title-meta')
    @include('partials.head-css')
</head>
<body>
    @include('partials.menu')
    <div class="content">
        @yield('content')
    </div>
    @include('partials.vendor-scripts')
</body>
</html>
