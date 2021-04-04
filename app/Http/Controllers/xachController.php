<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\xach;

class xachController extends Controller
{
     public function getxach()
    {
    	$xach = xach::get();
    	return response() ->json($xach);
    }
    //@param  Request  $request
    //@return Response
    public function store(Request $req)
  	{  	
        $xach = new xach;
       	$xach->name = $req->name;
       	$xach->save();
       	return "Все ок";
  	}

  	public function izmenit()
  	{
  		$xach = xach::find(6);
		$xach->name = 'psin';
		$xach->save();
  	}
}
