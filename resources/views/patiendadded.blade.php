
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Nurse</title>
    <style type="text/css">
        body {
            background-image: url('https://www.byponto.com.br/wp-content/uploads/2017/07/background-clean1.jpg');

        }
    </style>
</head>
<body>
<div class="container">
    <div class="row main">
        <p><a href="/adminhomepage">Back</a></p>
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Record a new patient</h1>
                <hr />
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="input-group">
                <ul>
                    @foreach ($msg->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="{{url('/addPatient')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="e.g. Peter Pan "/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Age</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="number" class="form-control" name="age"  placeholder="e.g. peterpan@gmail.com"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Gender</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="gender" placeholder="e.g.  Male"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="position" class="cols-sm-2 control-label">Symptoms</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="symptoms"   placeholder="e.g. coughing"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="cols-sm-2 control-label">Temparature</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="temperature"  placeholder="e.g 10 degrees"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="cols-sm-2 control-label">Blood pressure</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="blood_pressure"  placeholder="e.g 10 degrees"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="cols-sm-2 control-label">Allergies</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="allergies"  placeholder="e.g pollen grains"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Record</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>