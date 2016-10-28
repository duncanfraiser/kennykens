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

<script>

$(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        events: [
            @foreach($events as $event)
            {
            title  : '{{$event->title}}',
            start  : '{{$event->start_date}} {{$event->start_time}}',
            end    : '{{$event->end_date}} {{$event->end_time}}',
            url: '/event/{{$event->id}}',
            color: '#000',
            textColor: '' // an option!
            },
            @endforeach
        ],


        eventClick: function(event) {
            if (event.url) {
            window.open(event.url);
            return false;
            }
        }
    
    });
}); 
</script>
@stop