<?php

namespace App\Http\Controllers;
use App\Models\laporan;
use App\Models\kriteria;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function dashboard(Request $request){

        $kriteria = kriteria::sum('bobot');
        
        $bobot1 = 3/$kriteria;
        $bobot2 = 2/$kriteria;
        $bobot3 = 2/$kriteria;
        $bobot4 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];


        $laporan = laporan::get();
        $data = laporan::orderby('nama', 'asc')->get();

        $minC1 = laporan::min('C1');
        $maxC1 = laporan::max('C1');
        $minC2 = laporan::min('C2');
        $maxC2 = laporan::max('C2');
        $minC3 = laporan::min('C3');
        $maxC3 = laporan::max('C3');
        $minC4 = laporan::min('C4');
        $maxC4 = laporan::max('C4');

        $C1min =[
            'laporans' => $minC1,
        ];
        $C1max =[
            'laporans' => $maxC1,
        ];
        $C2min =[
            'laporans' => $minC2,
        ];
        $C2max =[
            'laporans' => $maxC2,
        ];
        $C3min =[
            'laporans' => $minC3,
        ];
        $C3max =[
            'laporans' => $maxC3,
        ];
        $C4min =[
            'laporans' => $minC4,
        ];
        $C4max =[
            'laporans' => $maxC4,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'laporans' => $hasil,
        ];

        return view('front.dashboard', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max',));
    }
}
