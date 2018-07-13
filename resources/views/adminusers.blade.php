@extends('master1')
@section('title')
    Users
@endsection
@section('content1')

    <h3 class="text-center">users</h3>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $userdata)
                    <tr>
                        <td>{{$userdata->id}}</td>
                        <td>{{$userdata->name}}</td>
                        <td>{{$userdata->email}}</td>
                        <td>{{$userdata->position}}</td>
                        <td>{{$userdata->status}}</td>
                        <td>
                            <form class="form-horizontal" action="{{url('/deleteUser')}}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" name="action" class="btn btn-danger" value={{$userdata->id}}>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-8"></div>

            <div class="col-md-2">
                <form method="post" action="{{url('/register')}}" class="form-horizontal">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success" >Add new user</button>
                </form>
            </div>
            <div class="col-md-2">
                <form id="addform" method="post" action="{{url('logout')}}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button type="submit" name="logout" class=" btn btn-info">Logout</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



@endsection


