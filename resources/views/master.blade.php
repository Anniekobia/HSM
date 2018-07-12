<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-image: url('https://hdwallpaperim.com/wp-content/uploads/2017/08/24/103834-simple_background.jpg');
            /*background-color: red;*/
        }

        h1 {
            color: #eeeeee;
            text-align: center;
            /*font-style: bold;*/
            font-size: 50px;
        }
    </style>

</head>
<body>
    @yield('content')
</body>
</html>>