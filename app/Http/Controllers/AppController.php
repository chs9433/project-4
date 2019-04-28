<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    /**
* GET /books/{title}
*/
public function login($title='vAudit',$alert=NULL)
{
    return view('login')->with(['title'=>$title,'alert'=>$alert]);
}
public function index($title='vAudit',$alert=NULL)
{
    return view('welcome')->with(['title'=>$title,'alert'=>$alert]);
}
public function create($title='vAudit')
{
    return view('form.create')->with(['title'=>$title]);
}
public function load($title='vAudit')
{
    return view('form.load')->with(['title'=>$title]);
}
public function loadPMTools($title='vAudit')
{
    return view('form.pmtools')->with(['title'=>$title]);
}

public function processProjectCreationRequest(REQUEST $request,$title='vAudit',$alert=NULL)
{
    # Get Data
    $arr = array('project_name'=>$request['varProjectName'],'project_sponsor'=>$request['varProjectSponsor']);

    #Validate Data
    $alert=json_encode($arr,JSON_PRETTY_PRINT);
    return view('welcome')->with(['title'=>$title,'alert'=>$alert]);
}
}
