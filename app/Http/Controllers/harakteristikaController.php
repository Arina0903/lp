<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\harakteristika;

class harakteristikaController extends Controller
{
    public function getharakteristika()
    {
    	//return response() ->json(::get(), 200);
    	$harakteristika = harakteristika::get();
    	return response() ->json($harakteristika);
    	 
  	   // @param  Request  $request
        //@return Response
    }

    public function getharakteristika()
    {
    	$harakteristika = harakteristika::get();
    	return response() ->json($harakteristika);
  	   // @param  Request  $request
        //@return Response
    }
   
 /*/	public function store(Request $harakteristika)
  	{
    	$flight = new Flight;
       	$flight->name = $request->name;
     	$flight->save();

  	}*/
}
