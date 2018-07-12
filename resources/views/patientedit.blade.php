<!DOCTYPE html>
<html lang="en">
<html>
<head>

</head>
<body>
<form id="deleteform" method="post" action="{{url('/postPatientEdit')}}">
    {{ csrf_field() }}
    <table>
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
    </table>
    <label>Diagnosis</label>
    <input type="text" name="diagnosis">
    <label>Treatment</label>
    <input type="text" name="treatment">
    <label>Appointment</label>
    <input type="date" name="appointment">
    <button type="submit" name="action" value={{$patient->id}}>UPDATE</button>
</form>
</body>
</html>