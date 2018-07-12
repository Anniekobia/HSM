{{--@if($total==null AND $specific!=null)--}}
    {{--<table>--}}
        {{--<tr>--}}
            {{--<th>Record Id</th>--}}
            {{--<th>Student Number</th>--}}
            {{--<th>Date of Payment</th>--}}
            {{--<th>Amount</th>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>{{$specific->id}}</td>--}}
            {{--<td>{{$specific->student_number}}</td>--}}
            {{--<td>{{$specific->date_of_payment}}</td>--}}
            {{--<td>{{$specific->amount}}</td>--}}
        {{--</tr>--}}
    {{--</table>--}}
{{--@endif--}}
{{--<p><a href="/adminhomepage">Back</a></p>--}}
        <!DOCTYPE html>
<html lang="en">
<html>
    <head>

    </head>
    <body>
    @foreach($user as $userdata)
        <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>{{$userdata->id}}</td>
            <td>{{$userdata->name}}</td>
            <td>{{$userdata->email}}</td>
            <td>{{$userdata->position}}</td>
            <td>{{$userdata->status}}</td>
        </tr>
        </table>
    @endforeach
    <p><a href="/adminhomepage">Back</a></p>
    </body>
</html>