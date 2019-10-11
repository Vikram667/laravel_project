<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\Auth;

class SliderImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $slides = Slide::all();


        return view('slider_images',compact('slides'));


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

         $input  = $request->all();
         if($file = $request->file('file'))
         {


            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo  = Slide::create(['file'=>$name]);

//            $input['file'] = $photo->file;

         }


//          Slide::create($input);
          return redirect('/admin/slides');


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
        $slides = Slide::findOrFail($id);
        return view('edit_slider_images',compact('slides'));

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

//        $slides = Slide::findOrFail($id);
//        $input  = $request->all();
//
//        if($file = $request->file('file'))
//        {
//
//
//            $name = time().$file->getClientOriginalName();
//            $file->move('images',$name);
//
//            $new_img = Slide::create(['file'=>$name]);
//
//            $input['file'] = $new_img->file;
//
//        }
//
//
//        $slides->update($input);




        return redirect('/admin/slides');

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

         $slides = Slide::findOrFail($id);

//        unlink(public_path() . $slides->file);
         unlink(public_path() . '/images/' . $slides->file);


//        $slides->delete('public/images/'.$slides->file);

         $slides->delete();

//        Session::flash('deleted_user','The user has been deleted');


         return redirect('/admin/slides');


//        $files = File::find($id);



    }
}
