<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Adminn\ComplaintRequest;
use App\Complaint;
use App\Http\Requests\Adminn\TransformasiRequest;
use App\Http\Requests\Adminn\CentroidRequest;
use App\hsl_transformasi;
use App\hsl_iterasi;
use App\hasil_klaster;
//use App\Charts\VisualisasiChart;
use App\centroidtemp;
use Illuminate\Http\Request;
use DB;

class VisualisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qd1 = centroidtemp::where('medoid1','<','medoid2')
        ->value(DB::raw("SUM(medoid1)"));
        //dd($qd1);
        $countd1 = centroidtemp::where('c', 'c1')->count();
        //dd($count);
        $jd1 = $qd1/$countd1;
        //dd($jd1);

        $ql1 = centroidtemp::where('c','c2')
        ->value(DB::raw("SUM(medoid1)"));
        //dd($q1);
        $countl1 = centroidtemp::where('c', 'c2')->count();
        //dd($count);
        $jl1 = $ql1/$countl1;
        //dd($jl1);
        
        //$si1 = (max($jl1,$jd1)-min($jl1,$jd1))/max($jl1,$jd1);
        //dd($si1);

        $qd2 = centroidtemp::where('c','c2')
        ->value(DB::raw("SUM(medoid2)"));
        //dd($q1);
        $countd2 = centroidtemp::where('c', 'c2')->count();
        //dd($count);
        $jd2 = $qd2/$countd2;
        //dd($jd2);

        $ql2 = centroidtemp::where('c','c1')
        ->value(DB::raw("SUM(medoid2)"));
        //dd($q1);
        $countl2 = centroidtemp::where('c', 'c1')->count();
        //dd($count);
        $jl2 = $ql2/$countl2;
        //dd($jl2);
        //$si2 = (max($jl2,$jd2)-min($jl2,$jd2))/max($jl2,$jd2);
        
        //dd($si2);
        //dd($si1);

         $data = hasil_klaster::where('centroid','c1')->get();

        // $maxc1 = hasil_klaster::where('centroid','c1')->max('D','F');
        
                
        
        $totalc1 = hasil_klaster::where('centroid', 'c1')
                ->value(DB::raw("SUM(A + B + C + D + E + F + G + H)"));
                
               
                //dd($totalc1);
        $total_A = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(A)"));
        //dd($total_A);
        $vA = $total_A/$totalc1*100;

        $total_B = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(B)"));
        $vB = $total_B/$totalc1*100;

        $total_C = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(C)"));
        $vC = $total_C/$totalc1*100;

        $total_D = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(D)"));
        $vD = $total_D/$totalc1*100;

        $total_E = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(E)"));
        $vE = $total_E/$totalc1*100;

        $total_F = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(F)"));
        $vF = $total_F/$totalc1*100;

        $total_G = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(G)"));
        $vG = $total_G/$totalc1*100;

        $total_H = hasil_klaster::where('centroid', 'c1')
        ->value(DB::raw("SUM(H)"));
        $vH = $total_H/$totalc1*100;

        //dd($vA);
        //dd($total_A);
        $totalc2 = hasil_klaster::where('centroid', 'c2')
                ->value(DB::raw("SUM(A + B + C + D + E + F + G + H)"));
                //dd($totalc2);
        $total_A2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(A)"));
        $vA2 = $total_A2/$totalc2*100;

        $total_B2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(B)"));
        $vB2 = $total_B2/$totalc2*100;

        $total_C2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(C)"));
        $vC2 = $total_C2/$totalc2*100;

        $total_D2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(D)"));
        $vD2 = $total_D2/$totalc2*100;

        $total_E2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(E)"));
        $vE2 = $total_E2/$totalc2*100;

        $total_F2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(F)"));
        $vF2 = $total_F2/$totalc2*100;

        $total_G2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(G)"));
        $vG2 = $total_G2/$totalc2*100;

        $total_H2 = hasil_klaster::where('centroid', 'c2')
        ->value(DB::raw("SUM(H)"));
        $vH2 = $total_H2/$totalc2*100;
        
        $data2 = hasil_klaster::where('centroid','c2')->get();
        $jumlah = $totalc1 + $totalc2;
        //dd($jumlah);
        $c1 = $totalc1*100/$jumlah;
        //dd($c1);
        $c2 = $totalc2*100/$jumlah;
        //dd($c2);
        
       
        return view('pages.admin.visualisasi.index', [
           //'items' => $items,
            'data' => $data,
           // 'si1' => $si1,
            //'si2' => $si2,
            'total_A' => $total_A,
            'total_B' => $total_B,
            'total_C' => $total_C,
            'total_D' => $total_D,
            'total_E' => $total_E,
            'total_F' => $total_F,
            'total_G' => $total_G,
            'total_H' => $total_H,
            'total_A2' => $total_A2,
            'total_B2' => $total_B2,
            'total_C2' => $total_C2,
            'total_D2' => $total_D2,
            'total_E2' => $total_E2,
            'total_F2' => $total_F2,
            'total_G2' => $total_G2,
            'total_H2' => $total_H2,
            'data2' => $data2,
            'totalc1' => $totalc1,
            'totalc2' => $totalc2,
            'c1' => $c1,
            'c2' => $c2,
            // 'kategori' =>$kategori,
            // 'kategori2' =>$kategori2
            'vA' => $vA,
            'vB' => $vB,
            'vC' => $vC,
            'vD' => $vD,
            'vE' => $vE,
            'vF' => $vF,
            'vG' => $vG,
            'vH' => $vH,
            'vA2' => $vA2,
            'vB2' => $vB2,
            'vC2' => $vC2,
            'vD2' => $vD2,
            'vE2' => $vE2,
            'vF2' => $vF2,
            'vG2' => $vG2,
            'vH2' => $vH2
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
