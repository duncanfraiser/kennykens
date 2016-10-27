@extends('layouts.main')
@section('content')
    <div class="content" style="margin-top: 75px">
    
        <div class="container-fluid">
            <h1><center>Brown Bottle Event Calendar</center></h1>
    <div id='calendar' class="col-md-10 col-md-offset-1" style="margin-top: 50px"></div>
</div>
</div>
@stop
@section('scripts')

<!--         {{-- Full Calendar Links --}} -->
        <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/fullcalendar.js') }}"></script>

<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>
@stop