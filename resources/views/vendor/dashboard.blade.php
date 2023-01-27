@include('vendor.layout.header')
<div class="wrapper">
    @include('vendor.layout.sidebar')
    <div class="page-wrapper">
        @yield('vendor')
    </div>
    <div class="overlay toggle-icon"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>
@include('vendor.layout.footer')
