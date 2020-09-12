<!DOCTYPE html>
<html lang="en">
<link>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sbadmin2/css/sb-admin-2.css')}}">
    <link rel="stylesheet" href="{{ asset('sbadmin2/css/sb-admin-2.min.css')}}">
    

    <link rel="stylesheet" href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
    @yield('content')
   

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"> </script>
  
    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin2/vendor/chart.js/Chart.min.js')}}"></script>
  
    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin2/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sbadmin2/js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>