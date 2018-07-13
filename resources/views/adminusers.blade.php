<!DOCTYPE html>
<html lang="en">
<html>
    <head>
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
                /*font-size: 50px;*/
                text-decoration: underline;
                margin-bottom: 5px;
            }
            h2{
                /*text-align: center;*/
                margin-bottom: 2px;
                font-style: bold;
                font-size: 20px;
            }
            table{
                border: slategrey 2px;
                margin: 50px;
            }
            label{
                font-size: 18px;
                font-style: unset;
                text-decoration: none;
            }
            button{
                /*font-size: 20px;*/
                text-align: center;
                /*font-size: 25px;*/
                /*margin-top: 50px;*/
                /*margin-bottom: 50px;*/
                /*margin-left: 50px;*/
                /*font-style: normal;*/
            }
        </style>
    </head>
    <body>
    <h1>ADMIN PORTAL</h1>
    <h2><b>Registered System Users</b></h2>
        <form id="deleteform" method="post" action="{{url('/deleteUser')}}">
            {{ csrf_field() }}
            <table class="table table-hover table-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Status</th>
                </tr>
                @foreach($users as $userdata)
                    <tr>
                        <td>{{$userdata->id}}</td>
                        <td>{{$userdata->name}}</td>
                        <td>{{$userdata->email}}</td>
                        <td>{{$userdata->position}}</td>
                        <td>{{$userdata->status}}</td>
                        <td><button type="submit" name="action" value={{$userdata->id}}>DELETE</button></td>
                    </tr>
                @endforeach
            </table>
        </form>
        <form id="addform" method="post" action="{{url('/register')}}">
            {{ csrf_field() }}
            <label>Add new User</label>
            <button type="submit">ADD</button>
        </form>

        <form id="addform" method="post" action="{{url('/')}}">
            {{ csrf_field() }}
            <button><a href="/">Logout</a></button>
        </form>

    </body>
</html>