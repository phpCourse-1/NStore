@include('frontend.layout.head')
@include('frontend.layout.quickview')
@include('frontend.layout.header')
@include('frontend.layout.mobile')

<main class="main">
    @yield('main')
</main>

@include('frontend.layout.footer');

