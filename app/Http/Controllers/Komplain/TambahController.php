<?php

namespace App\Http\Controllers\Komplain;

use App\Helper\FlashMsg;
use App\Http\Controllers\Controller;
use App\Komplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TambahController extends Controller
{
    public function showForm()
    {
        return view('komplain.tambah');
    }

    public function baru(Request $request)
    {
        $newKomplain_data = [
            'komplain' => $request->komplain,
            'keterangan' => $request->keterangan,
        ];

        TambahController::validator($newKomplain_data)->validate();
        
        $newKomplain_data['respon_keluhan'][] = TanggapiController::formatRespon($newKomplain_data['keterangan']);

        $newKomplain = Komplain::create($newKomplain_data);
        
        FlashMsg::success("Tiket No.{$newKomplain->id} - {$newKomplain->komplain} Telah ditambahkan");

        return redirect()->route('komplain.index');
    }

    public static function validator(Array $data)
    {
        return Validator::make($data, [
            'komplain' => 'required|string',
            'keterangan' => 'required|string',
        ],[],[
            'komplain' => 'keluhan',
        ]);
    }
}
