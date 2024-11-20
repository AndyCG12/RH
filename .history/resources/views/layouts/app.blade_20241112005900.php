<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'RH | Go1')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/apple/app.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/ionicons/dist/ionicons/ionicons.js') }}"></script>
    <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <script src="../assets/plugins/ionicons/dist/ionicons/ionicons.js"></script>
    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="../assets/plugins/select2/dist/js/select2.min.js"></script>
<link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="../assets/plugins/select-picker/dist/picker.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="../assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" />

	<!-- ================== END core-css ================== -->

	<!-- ================== BEGIN page-css ================== -->
	<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        td{
            align-items: center; text-align:center;
        }
    </style>
    <!-- ================== END core-css ================== -->

    <!-- ================== BEGIN page-css ================== -->
    @stack('styles')
    <!-- ================== END page-css ================== -->
</head>
<body>
    <!-- BEGIN #loader -->

    <!-- END #loader -->

    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed">
        @include('includes.header')
        @include('includes.sidebar')
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div id="content" class="app-content">
            @yield('content')

        </div>
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/ui-modal-notification.demo.js') }}"></script>
    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/ui-modal-notification.demo.js') }}"></script>
<script src="{{ asset('assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/render.highlight.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net/js/dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.html5.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/table-manage-buttons.demo.js') }}"></script>
<script>
  $(".default-select2").select2();
  $(".multiple-select2").select2({ placeholder: "Selecciona los empleados" });
</script>


<script src="../assets/plugins/moment/min/moment.min.js"></script>
	<script src="../assets/plugins/@fullcalendar/core/index.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/core/locales/es.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/daygrid/index.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/timegrid/index.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/interaction/index.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/list/index.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/bootstrap/index.global.js"></script>
	<script src="../assets/js/demo/calendar.demo.js"></script>


    <script src="../assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/plugins/ionicons/dist/ionicons/ionicons.js"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    @stack('scripts')
    <!-- ================== END page-js ================== -->

</body>
</html>
