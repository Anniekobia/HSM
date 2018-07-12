<!DOCTYPE html>
<html lang="en">
<html>
<head>

</head>
<body>
<form id="deleteform" method="post" action="{{url('/deleteUser')}}">
    {{ csrf_field() }}
    <table>
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
                <td>
                    <button type="submit" name="action" value={{$userdata->id}}>DELETE</button>
                </td>
            </tr>
        @endforeach
    </table>
</form>
<form id="addform" method="post" action="{{url('/register')}}" class="form-horizontal">
    {{ csrf_field() }}
    <label>Add new User</label>
    <button type="submit">ADD</button>
</form>

<<<<<<< HEAD
<form id="addform" method="post" action="{{url('logout')}}" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group">
        <button type="submit" name="logout" class="form-control btn btn-info">Logout</button>
    </div>
</form>
=======
        <form id="addform" method="post" action="{{url('/')}}">
            {{ csrf_field() }}
            <button><a href="/">Logout</a></button>
        </form>
>>>>>>> 5a0295ed2c9b9039c2cabfc524edc1a6327a6562

</body>
</html>