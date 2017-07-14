<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Fileupload;

class EventController extends Controller
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
            );
        //THIS IS WHERE WE ACTUALLY PUT THE RESULTS INTO A VAR
        $events = $cal->events->listEvents($calendarId, $params); 
        $calTimeZone = $events->timeZone; //GET THE TZ OF THE CALENDAR
        date_default_timezone_set($calTimeZone);

 		return view('event.index', compact('events', 'calTimeZone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->fill($request->all());
        $event->save();
        return redirect('/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findorfail($id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findorfail($id);
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return redirect('/event');
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
