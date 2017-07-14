<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Calendar;
// require_once 'vendor/autoload.php';

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \Google_Client();
        $client->setApplicationName("fuckingCal"); //DON'T THINK THIS MATTERS
        $client->setDeveloperKey('AIzaSyAmzw374CJDnnmRhFCVnmG8bu3nFxkqwTg'); //GET AT AT DEVELOPERS.GOOGLE.COM
        $cal = new \Google_Service_Calendar($client);
        $calendarId = 'kmatzoll@gmail.com';
        $params = array(
        //CAN'T USE TIME MIN WITHOUT SINGLEEVENTS TURNED ON,
        //IT SAYS TO TREAT RECURRING EVENTS AS SINGLE EVENTS
            'singleEvents' => true,
            'orderBy' => 'startTime',
        //     'timeMin' => date(DateTime::ATOM),//ONLY PULL EVENTS STARTING TODAY
        // 'maxResults' => 7 //ONLY USE THIS IF YOU WANT TO LIMIT THE NUMBER
        //                   // OF EVENTS DISPLAYED
         );
        // dd($params);
        //THIS IS WHERE WE ACTUALLY PUT THE RESULTS INTO A VAR
        $events = $cal->events->listEvents($calendarId, $params); 
        // $calTimeZone = $events->timeZone; //GET THE TZ OF THE CALENDAR
   













//START THE LOOP TO LIST EVENTS
    foreach ($events->getItems() as $event) {
 
        //Convert date to month and day
 
         $eventDateStr = $event->start->dateTime;
         if(empty($eventDateStr))
         {
             // it's an all day event
             $eventDateStr = $event->start->date;
         }
 
         $temp_timezone = $event->start->timeZone;
 //THIS OVERRIDES THE CALENDAR TIMEZONE IF THE EVENT HAS A SPECIAL TZ
         if (!empty($temp_timezone)) {
         $timezone = new \DateTimeZone($temp_timezone); //GET THE TIME ZONE
                 //Set your default timezone in case your events don't have one
     } else { $timezone = new \DateTimeZone($calTimeZone);
         }
 
         $eventdate = new \DateTime($eventDateStr,$timezone);
         $link = $event->htmlLink;
                 $TZlink = $link . "&ctz=" . $calTimeZone; //ADD TZ TO EVENT LINK
                                            //PREVENTS GOOGLE FROM DISPLAYING EVERYTHING IN GMT
         $newmonth = $eventdate->format("M");//CONVERT REGULAR EVENT DATE TO LEGIBLE MONTH
         $newday = $eventdate->format("j");//CONVERT REGULAR EVENT DATE TO LEGIBLE DAY
 
        ?>
        <div class="event-container">
        <div class="eventDate">
        <span class="month"><?php
 
        echo $newmonth;
 
         ?></span><br />
        <span class="day"><?php
 
        echo $newday;
 
         ?></span><span class="dayTrail"></span>
    </div>
    <div class="eventBody">
        <a href="<?php echo $TZlink;
                //ECHO DIRECT LINK TO EVENT
?>">
 
        <?php echo $event->summary; //SUMMARY = TITLE
 
        ?>
        </a>
    </div>
    </div>
 <?php
  }












        // $client = new \Google_Client();
        // // $client->setApplicationName("fucking ken");
        
        // $this->service = new Google_Service_Calendar($client);
        // dd($service);
        // // dd($client);
        return view('calendar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
