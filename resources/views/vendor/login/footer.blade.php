<footer>
    <script src="{{ asset('adminAssets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on("click", function(event) {
                event.preventDefault();
                if ($("#show_hide_password input").attr("type") == "text") {
                    $("#show_hide_password input").attr("type", "password");
                    $("#show_hide_password i").addClass("bx-hide");
                    $("#show_hide_password i").removeClass("bx-show");
                } else if (
                    $("#show_hide_password input").attr("type") == "password"
                ) {
                    $("#show_hide_password input").attr("type", "text");
                    $("#show_hide_password i").removeClass("bx-hide");
                    $("#show_hide_password i").addClass("bx-show");
                }
            });
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
</footer>
