<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistController extends Controller
{
    public function datos(Request $request){
        
        $response=Http::withHeaders(['X-AIO-key'=>'aio_sLhz26dNvxBTfqPDLGKVh7HxcqBa'


        ])->get('https://io.adafruit.com/api/v2/MiguelAngel7879/feeds/distancia/data');

        $datos=json_decode($response);

        //return $datos;
        
        return  response()->json([
            'status' => 'ok',
            'datos' => $datos
        ],200);

        
    }

    public function ultimoDato(Request $request){
        
        $response=Http::withHeaders(['X-AIO-key'=>'aio_sLhz26dNvxBTfqPDLGKVh7HxcqBa'


        ])->get('https://io.adafruit.com/api/v2/MiguelAngel7879/feeds/distancia/data/last');

        $datos=json_decode($response);

        return  response()->json([
            'status' => 'ok',
            'datos' => $datos
        ],200);
    }
}
