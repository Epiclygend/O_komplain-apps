<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignInController extends Controller
{
    public function signUp(Request $request)
    {
        $signUp_data = [
            'name' => $request->nama,
            'phone_number' => $request->noTelp,
        ];

        SignInController::validator($signUp_data)->validate();

        session(['_operator' => Operator::firstOrCreate($signUp_data)]);

        return back();
    }


    public static function validator(Array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'phone_number' => 'required|numeric',
        ]);
    }
}
