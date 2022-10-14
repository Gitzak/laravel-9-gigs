@include('partials.header')

<body>
    <div class="wrapper">
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
    </div>

    @include('partials.js')

</body>

</html>
