<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Picture;

class PictureController extends Controller
{

        public function __construct(){
        $this->middleware('auth', ['only' => [
            'store',
            'create'
        ]]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $pics = Picture::get();
       
        return view('picture.index', compact('pics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('picture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
    
        $pic = request()->file('picture');               
        $thumb = request()->file('thumbnail');               
       // The storeAs() is defaulted to save in storage/app/public/pics (I added the pics extintion), to make the stored files accesable to the public you have to use the php artisan storage:link to Create a symbolic link from "public/storage" to "storage/app/public" then you can source an image as follows kennykens.df.ercorr.com/storage/pics/hoth.jpg. The storAs() passes 2 arguments (path,filename) methods are located on UploadedFile.php;
        $pic->storeAs('public/pics', $pic->getClientOriginalName());
        $thumb->storeAs('public/thumbnails', $thumb->getClientOriginalName());
        $picture = new Picture;
        $picture->title = $request->title;
        $picture->thumbnail = $thumb->getClientOriginalName();  
        $picture->pic = $pic->getClientOriginalName();  
        $picture->save();
       
        return view('picture.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pic = Picture::findorfail($id);
       return view('picture.show', compact('pic'));
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
