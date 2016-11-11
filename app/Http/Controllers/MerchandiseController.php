<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Merchandise;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('merchandise.index');
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

        $atotal = ($request['album'] * 10);
        $bstotal = (($request['bsmall'] + $request['bmedium'] + $request['blarge'] + $request['bxl']) * 10) + (($request['bxxl'] + $request['bxxxl']) * 13);
        $wstotal = (($request['wsmall'] + $request['wmedium'] + $request['wlarge'] + $request['wxl']) * 10) + (($request['wxxl'] + $request['wxxxl']) * 13);
        $ktotal = ($request['koozie'] * 3);
        $stotal = ($request['sticker']);
        $total = ($atotal + $bstotal + $wstotal + $ktotal + $stotal);

        $merch = new Merchandise;
        $merch->fill($request->all());
        $merch->atotal = $atotal;
        $merch->bstotal = $bstotal;
        $merch->wstotal = $wstotal;
        $merch->ktotal = $ktotal;
        $merch->stotal = $stotal;
        $merch->total = $total;

        $merch->bsmalltotal = ($request['bsmall'] * 10);
        $merch->bmediumtotal = ($request['bmedium'] * 10);
        $merch->blargetotal = ($request['blarge'] * 10);
        $merch->bxltotal = ($request['bxl'] * 10);
        $merch->bxxltotal = ($request['bxxl'] * 13);
        $merch->bxxxltotal = ($request['bxxxl'] * 13);

        $merch->wsmalltotal = ($request['wsmall'] * 10);
        $merch->wmediumtotal = ($request['wmedium'] * 10);
        $merch->wlargetotal = ($request['wlarge'] * 10);
        $merch->wxltotal = ($request['wxl'] * 10);
        $merch->wxxltotal = ($request['wxxl'] * 13);
        $merch->wxxxltotal = ($request['wxxxl'] * 13);

        $merch->save();


        return redirect('merchandise/'.$merch->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merch = Merchandise::findorfail($id);
        return view('merchandise.show', compact('merch'));
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
