<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"></link>
</head>
<body style="background-color: #F4F6F6 ">
@yield('content')
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"> </script>
<script src="{{ asset('js/popper.min.js') }}"> </script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"> </script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>

</body>
</html>
