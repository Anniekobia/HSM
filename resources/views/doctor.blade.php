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
        <h1><b>Doctors Page</b></h1>
        <h2>Appointments</h2>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th >Patient Name</th>
                    <th >Appointment Date</th>
                </tr>
                </thead>
                @foreach($array as $dates)
                    <tbody>
                        <tr>
                            <td>{{$dates->name}}</td>
                            <td>{{$dates->appointment}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        {{--<form id="addform" method="post" action="{{url('/patientTreatment')}}">--}}
            {{--{{ csrf_field() }}--}}
            {{--<label>Record Patient Treatment</label>--}}
            {{--<button type="submit">ADD</button>--}}
        {{--</form>--}}
        {{--<h5>Patient Treatment:</h5>--}}
            {{--<a href="AddPatient.php"><button type="button" class="btn btn-primary">Add Treatment</button></a>--}}
            <h5>Search Patient History:</h5>
                <form class="form-inline" method="post" action="{{url('/searchPatient')}}">
                    {{ csrf_field() }}
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75" type="number" name="id" placeholder="Search" aria-label="Search">
                    <button type="submit" class="btn btn-primary">Go</button>
                </form>
    </body>
</html>