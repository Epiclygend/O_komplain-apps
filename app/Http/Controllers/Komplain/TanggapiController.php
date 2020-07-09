<?php

namespace App\Http\Controllers\Komplain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TanggapiController extends Controller
{
    public function __construct() {

        $this->middleware('Operator')->only('responOperator');

    }

    public function tanggapi(Request $request)
    {
        if ($request->responden === 'operator') {
            return $this->responOperator($request);
        }

        return $this->responKomplainer($request);
    }

    public function responOperator(Request $request)
    {

    }

    public function responKomplainer(Request $request)
    {
        
    }
}
