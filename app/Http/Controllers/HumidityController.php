<?php

namespace App\Http\Controllers;

use App\Charts\HumidityChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HumidityController extends Controller
{
    function index(){

        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');

        $data=DB::table('humidity')->where('date', '=', $today)->orderBy('id','desc')->paginate(5);
        return view('index',['data'=>$data]);
    }

    function tahunan(){

        return view('tahunan');
    }

    function tahun(Request $request){

        $thisY = $request->tahun;        
        $dataY=DB::table('humidity')->whereYear('date',$thisY)->orderBy('id','desc')->get();
        return view('tahun',['dataY'=>$dataY],['thisY'=>$thisY]);
    }

     function grafik(){

        $HumidityChart = new HumidityChart;
        
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        $data=DB::table('humidity')->where('date','=',$today)->get();
        $date = DB::table('humidity')->select('date')->count();
        
        foreach ($data as $key) {
            for ($i=0; $i < $date; $i++) { 
                $HumidityChart->labels([$key->date]);
            }
            $HumidityChart->dataset(
                'Kelembapan', 'bar', [$key->humidity]
            );
        }

        return view('grafik/grafik', [ 'HumidityChart' => $HumidityChart ] );
    }

    function remote(){
        return view('remote');
    }
}
