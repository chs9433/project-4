<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    /**
* GET /books/{title}
*/
public function index($title='PM Tool',$alert=NULL)
{
    return view('welcome')->with(['title'=>$title,'alert'=>$alert]);
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

public function processProjectCreationRequest(REQUEST $request,$title='PM Tool',$alert=NULL)
{
    # Get Data
    $arr = array('project_name'=>$request['varProjectName'],'project_sponsor'=>$request['varProjectSponsor']);

    #Validate Data
    $alert=json_encode($arr,JSON_PRETTY_PRINT);
    return view('welcome')->with(['title'=>$title,'alert'=>$alert]);
}
}
