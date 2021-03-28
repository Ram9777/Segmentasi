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
use App\centroidtemp;
use Illuminate\Http\Request;

class PengelompokanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rands = hsl_transformasi::inRandomOrder()
        //   ->limit(2)
        //  ->get();

        //  $rands2 = hsl_transformasi::inRandomOrder()
        //  ->limit(2)
        // ->get();

        //  $data = hsl_transformasi::all();
        return view('pages.admin.pengelompokan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rands = hsl_transformasi::inRandomOrder()
         ->limit(2)
        ->get();

        $rands2 = hsl_transformasi::inRandomOrder()
        ->limit(2)
       ->get();

       //$items = Complaint::paginate(10);
        $data = hsl_transformasi::all();
      return view('pages.admin.pengelompokan.create', [
          'rands' => $rands,
          'rands2' => $rands2,
          'data' => $data
      ]);
    }

    public function iterasi_hasil()
    {
        $hasil_iterasi = hsl_iterasi::all();
        $hasil_klaster = hasil_klaster::with(['hsl_trf'])->get();
        $centroid_temp_by_c = centroidtemp::groupBy('c')->get();
                //->groupBy('c')
                //->having('account_id', '>', 100)
                
        $centroid_temp_by_iterasi = centroidtemp::groupBy('iterasi')
        //->groupBy('iterasi')
                //->having('account_id', '>', 100)
        ->get();
        $centroid_temp = centroidtemp::all();
        $data = hsl_transformasi::all();
        return view('pages.admin.pengelompokan.iterasi_hasil', [
            'hasil_iterasi' => $hasil_iterasi,
            'hasil_klaster' => $hasil_klaster,
            'centroid_temp_by_c' => $centroid_temp_by_c,
            'centroid_temp_by_iterasi' => $centroid_temp_by_iterasi,
            'centroid_temp' => $centroid_temp,
            'data' => $data
        ]);
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
    public function show()
    {
       $hasil_iterasi = hsl_iterasi::all();
        $data = hsl_transformasi::all();
        $rands = hsl_transformasi::inRandomOrder()
        ->limit(2)
       ->get();
       $iterasi = +1;

       foreach ($hasil_iterasi as $key) {
        $selisih = $key->selisih;
    }
    if ($selisih > 0) {
        ?>
            <script>
                alert("Proses iterasi berakhir pada tahap ke-<?php echo $iterasi; ?>");
            </script>
        <?php
             return redirect()->route('pengelompokan.iterasi_hasil');
    }else{
        return view('pages.admin.pengelompokan.iterasi', [
            'hasil_iterasi' => $hasil_iterasi,
            'rands' => $rands,
            'iterasi' => $iterasi,
            'data' => $data
        ]);
    }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.admin.pengelompokan.iterasi_hasil');
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
