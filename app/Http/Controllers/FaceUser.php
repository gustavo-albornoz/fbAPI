<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\Facebook;

class FaceUser extends Controller
{
    public function show(Request $request){

    	$fb = new Facebook;
    	$access_token = "6688aa08f2f9016c186e171db964b53b";

    	$fb->setDefaultAccessToken($access_token);
    	$id = $request->profile;
    	//$url = 'https://graph.facebook.com/'.$id;

    	$results = $fb->get('/'.$id,$access_token);

    	return view ("welcome",["results" => $results]);

    }
}
