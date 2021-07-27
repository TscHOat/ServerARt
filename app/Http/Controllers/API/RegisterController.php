<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'c_password'=>'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error',$validator->errors());
        }
        $input = $request->all();
        $input['password']=Hash::make($input['password']);
        $user = new User();
        $user->name = $user->name;
        $user->email = $user->email;
        $user->password = $user->password;
        $user->save();
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return $this->sendRsponse($success,'User registered successfully.');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token']= $user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;

            return $this->sendRsponse($success,'User login successfully.');
        }else{
            return $this->sendError('Unauthorised',['error'=>'Unauthorised']);
        }
    }
}
