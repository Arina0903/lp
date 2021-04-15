<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\User;

class userController extends Controller
{
	public function getuser()
	{
		$users = User::get();
    	return response() ->json($users);
    }
	//regist
    public function vali(Request $reeed)
  	{  
  		$validator = Validator::make($reeed->all(), [
            'user_name' => 'required|unique:users',
            'user_age' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            return response()->json([
                'error'=> [
                    'message' => 'Validation error',
                    'errors' => $validator->errors(),
                ]
            ]);
        }
        User::create($reeed->all());
        return response()->json('Регистрация прошла успешно');
  	}
  	//auto
  	public function val(Request $raeed)
  	{  	
  		$validator = Validator::make($raeed->all(), [
            'user_name' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if($users = User::where('user_name', $raeed->user_name)->first())
        {
            if ($raeed->password == $users->password)
            {
                $users->api_token=str_random(50);
                $users->save();
                return response()->json('Авторизация прошла успешно, api_token:'. $users->api_token);
            }
        }
        return response()->json('Логин или пароль введены неверно, api_token:'. $users->api_token);
    }
    //rozlog
    public function logout(Request $req)
    {
        $users = User::where("api_token",$req->api_token)->first();

         if($users)
         {
            $users->api_token = null;
            $users->save();
            return response()->json('Разлогирование прошло успешно');
          }
    }
}
