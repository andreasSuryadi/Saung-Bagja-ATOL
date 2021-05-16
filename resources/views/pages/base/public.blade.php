<!DOCTYPE html>
<html>
@include('pages.base._header')
<body>
    <div class="container">
        @include('pages.base._navbar')
        
        @yield('content')
    </div>
</body>
</html>