@include('user.header')
@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
<div align="center" class="p-5">
    <table style="width:100%">
        <tr style="background-color: black">
            <th style="padding: 10px; color: white">Doctor Name</th>
            <th style="padding: 10px; color: white">Date</th>
            <th style="padding: 10px; color: white">Message</th>
            <th style="padding: 10px; color: white">Status</th>
            <th style="padding: 10px; color: white">Cancel Appointment</th>
        </tr>
        @foreach($appoint as $appoints)
        <tr style="background-color: #DFDFDF">
            <td style="padding: 10px">{{$appoints->doctor}}</td>
            <td style="padding: 10px">{{$appoints->date}}</td>
            <td style="padding: 10px">{{$appoints->message}}</td>
            <td style="padding: 10px">{{$appoints->status}}</td>
            <td ><a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
        </tr>
        @endforeach
    </table>
</div>