<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\token;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
        public function register(Request $request){
        $validator = Validator::make($request->all() , [
            'phone' => 'required|string|unique:users,phone|numeric|digits:12',
            'password' => 'required|max:12|min:6',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors() , 202);
        }


        $user = new User();
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();
$tokenim2 = token::where('name', $user->phone)->latest('id')->first();
        return response()->json([
            "token" => $tokenim2
        ] , 200);
    }

    public function login(LoginRequest $request){


    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json([
       'token' => $user->createToken($request->email)->plainTextToken
    ]);
    }

    public function logout()
    {

    }
}
