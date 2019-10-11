<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Slide;

class LayoutController extends Controller
{
    //


    public function index()
    {
        //
        $categories = Category::all();
        $slides = Slide::all();

        return view('shades_index', compact('categories','slides'));

    }


}
