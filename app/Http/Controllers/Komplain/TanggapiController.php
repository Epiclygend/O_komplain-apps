<?php

namespace App\Http\Controllers\Komplain;

use App\Helper\FlashMsg;
use App\Http\Controllers\Controller;
use App\Http\Middleware\FeedbackResponse;
use App\Komplain;
use Illuminate\Http\Request;

class TanggapiController extends Controller
{
    protected $model; 

    public function __construct() {

        $this->middleware(FeedbackResponse::class)->only('tanggapi');

    }

    public function showForm($id)
    {
        $model = Komplain::find($id);

        return view('komplain.tanggapan', ['model' => $model]);
    }

    public function tanggapi(Request $request, int $id)
    {
        $this->model = Komplain::find($id);

        if ($request->responden === 'operator') {
            return $this->responOperator($request);
        }

        return $this->responKomplainer($request);
    }

    public function responOperator(Request $request)
    {
        $dataRespon = TanggapiController::formatRespon($request->tanggapan, session('_operator')->id);

        TanggapiController::beriRespon($this->model, $dataRespon);

        $this->model->operator_id = session('_operator')->id;

        FlashMsg::success('Feedback telah ditambahkan');

        return back();
    }
    
    public function responKomplainer(Request $request)
    {
        $dataRespon = TanggapiController::formatRespon($request->tanggapan);
    
        TanggapiController::beriRespon($this->model, $dataRespon);

        FlashMsg::success('Feedback telah ditambahkan');

        return back();
    }

    public static function beriRespon(Komplain $komplain, Array $respon)
    {
        $respons = $komplain->respon_keluhan;
        
        $respons[] = $respon;
        
        $komplain->respon_keluhan = $respons;

        return $komplain->save();
    }

    public static function formatRespon(String $message, $from = '')
    {
        return [
            'from' => $from,
            'message' => $message,
            'time' => now()->format('d M Y h:i:s'),
        ];
    }

    public function komplainSelesai($id)
    {
        $model = Komplain::find($id);
        
        $model->status_proses = true;

        $model->save();

        return back();
    }
}
