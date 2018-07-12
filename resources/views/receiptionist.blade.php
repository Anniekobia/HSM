<!DOCTYPE html>
<html>
<head>
    <title>Doctors Page</title>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        h1 {
            color: #000000;
            text-align: center;
            /*font-style: bold;*/
            font-size: 50px;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1><b>Receiptionist</b></h1>
<h2>Appointments</h2>
<table class="table table-hover table-dark">
    <thead>
    <tr>
        <th>Patient ID</th>
        <th >Patient Name</th>
        <th >Appointment Date</th>
    </tr>
    </thead>
    @foreach($array as $dates)
        <tbody>
        <tr>
            <td>{{$dates->id}}</td>
            <td>{{$dates->name}}</td>
            <td>{{$dates->appointment}}</td>
        </tr>
        </tbody>
    @endforeach
</table>
<form id="addform" method="post" action="{{url('/')}}">
    {{ csrf_field() }}
    <button><a href="/">Logout</a></button>
</form>
</body>
</html>