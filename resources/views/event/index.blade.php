@extends('layouts.main')
@section('content')
<div class='container calContainer'>
    <div class="content" style="margin-top: 0px">
    <div class="calDiv col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
  
            <center><p class="calTitle">Brown Bottle Event Calendar<br/><img class="bottle" src="{{url('img/jugnail.png')}}"></p></center>
      
        <div id='calendar'></div>
    </div>
</div>
</div>
@stop
@section('scripts')
<script>



    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            events: [
                @foreach($events->getItems() as $event){
                    <?php
                      //Convert date to month and day 
                      $eventDateStr = $event->start->dateTime;
                      $eventSumStr = $event->summary;
                        if(empty($eventDateStr)){
                          // it's an all day event
                          $eventDateStr = $event->start->date;
                        }
                      $temp_timezone = $event->start->timeZone;
                      //THIS OVERRIDES THE CALENDAR TIMEZONE IF THE EVENT HAS A SPECIAL TZ
                        if (!empty($temp_timezone)){
                          $timezone = new \DateTimeZone($temp_timezone); //GET THE TIME ZONE
                          //Set your default timezone in case your events don't have one
                        }
                        else{
                          $timezone = new \DateTimeZone($calTimeZone);
                        } 
                      $eventdate = new \DateTime($eventDateStr,$timezone);
                      $link = $event->htmlLink;
                      $TZlink = $link . "&ctz=" . $calTimeZone; //ADD TZ TO EVENT LINK
                      //PREVENTS GOOGLE FROM DISPLAYING EVERYTHING IN GMT
                      $newmonth = $eventdate->format("M");//CONVERT REGULAR EVENT DATE TO LEGIBLE MONTH
                      $newday = $eventdate->format("j");//CONVERT REGULAR EVENT DATE TO LEGIBLE DAY
                    ?>                
                    title  : "{!!$eventSumStr!!}",
                    start  : '{{$eventDateStr}}',
                    url: '{{$link}}',
                    color: '#000',
                    textColor: 'red',

                },
                @endforeach
            ],

            eventClick: function(event) {
    if (event.url) {
        window.open(event.url, "_blank");
        return false;
    }
}

        });
    }); 
</script>
@stop