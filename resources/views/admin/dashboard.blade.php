<div class="wrapper">
    @include('admin.layout.sidebar')
    @include('admin.layout.header')
    <div class="page-wrapper">
        @yield('admin')
    </div>
    <div class="overlay toggle-icon"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>
@include('admin.layout.footer')
