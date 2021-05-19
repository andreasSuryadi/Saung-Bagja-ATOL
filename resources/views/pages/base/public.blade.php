<!DOCTYPE html>
<html>
@include('pages.base._header')
<body>
    <div class="container">
        @include('pages.base._navbar')
        
        @yield('content')

        @include('pages.base._footer')
    </div>
</body>
</html>