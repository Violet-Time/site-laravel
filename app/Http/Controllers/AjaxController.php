<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;

class AjaxController extends Controller
{
    public function ingredients()
    {
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }
}
