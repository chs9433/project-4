<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    /**
* GET /books/{title}
*/
public function index($title='PM Tool')
{
    return view('welcome')->with(['title'=>$title]);
}
public function create($title='PM Tool')
{
    return view('form.create')->with(['title'=>$title]);
}
public function load($title='PM Tool')
{
    return view('form.load')->with(['title'=>$title]);
}
public function loadPMTools($title='PM Tool')
{
    return view('form.pmtools')->with(['title'=>$title]);
}
}
