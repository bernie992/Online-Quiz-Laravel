<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::to('jobs/css/bootstrap.min.css') }}">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('jobs/css/font-awesome.min.css') }}">
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('jobs/css/line-awesome.min.css') }}">
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ URL::to('jobs/css/dataTables.bootstrap4.min.css') }}">
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ URL::to('jobs/css/select2.min.css') }}">
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{ URL::to('jobs/css/bootstrap-datetimepicker.min.css') }}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ URL::to('jobs/css/style.css') }}">
</head>
<body>
        <!-- Main Wrapper -->
        @yield('content')
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ URL::to('jobs/js/jquery-3.5.1.min.js') }}"></script>
		<!-- Bootstrap Core JS -->
        <script src="{{ URL::to('jobs/js/popper.min.js') }}"></script>
        <script src="{{ URL::to('jobs/js/bootstrap.min.js') }}"></script>
		<!-- Slimscroll JS -->
		<script src="{{ URL::to('jobs/js/jquery.slimscroll.min.js') }}"></script>
		<!-- Select2 JS -->
		<script src="{{ URL::to('jobs/js/select2.min.js') }}"></script>
		<!-- Datatable JS -->
		<script src="{{ URL::to('jobs/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ URL::to('jobs/js/dataTables.bootstrap4.min.js') }}"></script>
		<!-- Datetimepicker JS -->
		<script src="{{ URL::to('jobs/js/moment.min.js') }}"></script>
		<script src="{{ URL::to('jobs/js/bootstrap-datetimepicker.min.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ URL::to('jobs/js/app.js') }}"></script>
		@yield('script')
    
</body>
</html>