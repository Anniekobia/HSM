@extends('master1')
@section('content1')
@endsection
        <!DOCTYPE html>
<html lang="en">
<html>
<head>

</head>
<body>
<form id="deleteform" method="post" action="{{url('/editPatient')}}">
    {{ csrf_field() }}
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Symptoms</th>
            <th>Diagnosis</th>
            <th>Treatment</th>
            <th>Appointment</th>
        </tr>
        <tr>
            <td>{{$patient->name}}</td>
            <td>{{$patient->age}}</td>
            <td>{{$patient->gender}}</td>
            <td>{{$patient->symptoms}}</td>
            <td>{{$patient->diagnosis}}</td>
            <td>{{$patient->treatment}}</td>
            <td>{{$patient->appointment}}</td>
            <td><button type="submit" name="action" value={{$patient->id}}>UPDATE RECORD</button></td>
        </tr>
    </table>
    <form id="addform" method="post" action="{{url('/')}}">
        {{ csrf_field() }}
        <button><a href="/">Logout</a></button>
    </form>
</form>
</body>
</html>