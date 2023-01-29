<footer class="page-footer">
    <p class="mb-0">Copyright © 2023. All right reserved.</p>
</footer>
<script src="{{ asset('adminAssets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/jquery.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/index.js') }}"></script>
<script src="{{ asset('adminAssets/js/validate.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminAssets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script src="{{ asset('adminAssets/js/app.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
    @endif
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('adminAssets/js/code.js') }}"></script>

</body>

</html>
