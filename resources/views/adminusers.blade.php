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
    <?php
        echo $user;
    ?>
    </body>
</html>