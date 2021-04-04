<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class userController extends Controller
{
	public function getuser()
	{
		$users = User::get();
    	return response() ->json($users);
	}
    public function stor(Request $reeed)
  	{  	
        $users = new User;
        if ($reeed->user_name == "" or $reeed->user_age == "" or $reeed->password == "")
        {
        	return "Ошибка регистрации";
        }
        	$users->user_name = $reeed->user_name;	
        	$users->user_age = $reeed->user_age;
        	$users->password = $reeed->password;
        	//return "Вы успешно прошли регистрацию";
        	$users->save();
  	}
  	public function sto(Request $raeed)
  	{  	
        $users = User::where("user_name", $raeed->user_name)->first();
        if ($raeed->user_name != "" or $raeed->password != "")
        {
        	if ($raeed->user_name == $users->user_name && $raeed->password == $users->password)
        	{
       			return "Вы вошли в свой акк";
       		}
       	}	
        return "Ошибка";
        
        /*$users = new User;
        $looog = User::where()->json("user_name", $raeed->user_name);
        if($looog)
        {
        	if ($raeed->password == $users->password) 
        	{
        		return "Вы вошли в свой акк";
        	}
        	return "Ошибка";
        }*/
  	}
}
