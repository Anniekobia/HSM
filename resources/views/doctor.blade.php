@extends('master1')
@section('content1')
@endsection
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
            <h5>Search Patient History:</h5>
                <form class="form-inline" method="post" action="{{url('/searchPatient')}}">
                    {{ csrf_field() }}
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75" type="number" name="id" placeholder="Search" aria-label="Search">
                    <button type="submit" class="btn btn-primary">Go</button>
                </form>
                <form id="addform" method="post" action="{{url('/')}}">
                    {{ csrf_field() }}
                    <button><a href="/">Logout</a></button>
                </form>
    </body>
</html>