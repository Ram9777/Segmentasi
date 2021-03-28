<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Adminn\ComplaintRequest;
use App\Complaint;
use App\Http\Requests\Adminn\TransformasiRequest;
use App\hsl_transformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = hsl_transformasi::all();
        //$id = 1618;
        return view('pages.admin.transformasi.index',[
            'items' => $items,
            //Parongpong
            'cga' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','A')->count(),
            'cgb' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','B')->count(),
            'cgc' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','C')->count(),
            'cgd' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','D')->count(),
            'cge' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','E')->count(),
            'cgf' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','F')->count(),
            'cgg' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','G')->count(),
            'cgh' => Complaint::where('alamat','Cigugur Girang')->where('id_jeniskeluhan','H')->count(),

            'cra' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','A')->count(),
            'crb' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','B')->count(),
            'crc' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','C')->count(),
            'crd' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','D')->count(),
            'cre' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','E')->count(),
            'crf' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','F')->count(),
            'crg' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','G')->count(),
            'crh' => Complaint::where('alamat','Cihanjuang Rahayu')->where('id_jeniskeluhan','H')->count(),

            'cha' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','A')->count(),
            'chb' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','B')->count(),
            'chc' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','C')->count(),
            'chd' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','D')->count(),
            'che' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','E')->count(),
            'chf' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','F')->count(),
            'chg' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','G')->count(),
            'chh' => Complaint::where('alamat','Cihanjuang')->where('id_jeniskeluhan','H')->count(),

            'cna' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','A')->count(),
            'cnb' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','B')->count(),
            'cnc' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','C')->count(),
            'cnd' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','D')->count(),
            'cne' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','E')->count(),
            'cnf' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','F')->count(),
            'cng' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','G')->count(),
            'cnh' => Complaint::where('alamat','Cihideung')->where('id_jeniskeluhan','H')->count(),

            'cwa' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','A')->count(),
            'cwb' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','B')->count(),
            'cwc' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','C')->count(),
            'cwd' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','D')->count(),
            'cwe' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','E')->count(),
            'cwf' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','F')->count(),
            'cwg' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','G')->count(),
            'cwh' => Complaint::where('alamat','Ciwaruga')->where('id_jeniskeluhan','H')->count(),

            'kwa' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','A')->count(),
            'kwb' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','B')->count(),
            'kwc' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','C')->count(),
            'kwd' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','D')->count(),
            'kwe' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','E')->count(),
            'kwf' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','F')->count(),
            'kwg' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','G')->count(),
            'kwh' => Complaint::where('alamat','Karyawangi')->where('id_jeniskeluhan','H')->count(),

            'swa' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','A')->count(),
            'swb' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','B')->count(),
            'swc' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','C')->count(),
            'swd' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','D')->count(),
            'swe' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','E')->count(),
            'swf' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','F')->count(),
            'swg' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','G')->count(),
            'swh' => Complaint::where('alamat','Sariwangi')->where('id_jeniskeluhan','H')->count(),
           //Cikalong Wetan
           'cwcka' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','A')->count(),
            'cwckb' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','B')->count(),
            'cwckc' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','C')->count(),
            'cwckd' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','D')->count(),
            'cwcke' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','E')->count(),
            'cwckf' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','F')->count(),
            'cwckg' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','G')->count(),
            'cwckh' => Complaint::where('alamat','Cikalong')->where('id_jeniskeluhan','H')->count(),

            'cwcpa' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','A')->count(),
            'cwcpb' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','B')->count(),
            'cwcpc' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','C')->count(),
            'cwcpd' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','D')->count(),
            'cwcpe' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','E')->count(),
            'cwcpf' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','F')->count(),
            'cwcpg' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','G')->count(),
            'cwcph' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','H')->count(),

            'cwcta' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','A')->count(),
            'cwctb' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','B')->count(),
            'cwctc' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','C')->count(),
            'cwctd' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','D')->count(),
            'cwcte' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','E')->count(),
            'cwctf' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','F')->count(),
            'cwctg' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','G')->count(),
            'cwcth' => Complaint::where('alamat','Ciptagumati')->where('id_jeniskeluhan','H')->count(),

            'cwcsa' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','A')->count(),
            'cwcsb' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','B')->count(),
            'cwcsc' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','C')->count(),
            'cwcsd' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','D')->count(),
            'cwcse' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','E')->count(),
            'cwcsf' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','F')->count(),
            'cwcsg' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','G')->count(),
            'cwcsh' => Complaint::where('alamat','Cisomang')->where('id_jeniskeluhan','H')->count(),

            'cwgja' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','A')->count(),
            'cwgjb' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','B')->count(),
            'cwgjc' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','C')->count(),
            'cwgjd' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','D')->count(),
            'cwgje' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','E')->count(),
            'cwgjf' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','F')->count(),
            'cwgjg' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','G')->count(),
            'cwgjh' => Complaint::where('alamat','Ganjarsari')->where('id_jeniskeluhan','H')->count(),

            'cwksa' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','A')->count(),
            'cwksb' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','B')->count(),
            'cwksc' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','C')->count(),
            'cwksd' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','D')->count(),
            'cwkse' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','E')->count(),
            'cwksf' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','F')->count(),
            'cwksg' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','G')->count(),
            'cwksh' => Complaint::where('alamat','Kenangasari')->where('id_jeniskeluhan','H')->count(),

            'cwmna' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','A')->count(),
            'cwmnb' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','B')->count(),
            'cwmnc' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','C')->count(),
            'cwmnd' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','D')->count(),
            'cwmne' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','E')->count(),
            'cwmnf' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','F')->count(),
            'cwmng' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','G')->count(),
            'cwmnh' => Complaint::where('alamat','Mandalamukti')->where('id_jeniskeluhan','H')->count(),

            'cwmda' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','A')->count(),
            'cwmdb' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','B')->count(),
            'cwmdc' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','C')->count(),
            'cwmdd' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','D')->count(),
            'cwmde' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','E')->count(),
            'cwmdf' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','F')->count(),
            'cwmdg' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','G')->count(),
            'cwmdh' => Complaint::where('alamat','Mandalasari')->where('id_jeniskeluhan','H')->count(),

            'cwmka' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','A')->count(),
            'cwmkb' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','B')->count(),
            'cwmkc' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','C')->count(),
            'cwmkd' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','D')->count(),
            'cwmke' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','E')->count(),
            'cwmkf' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','F')->count(),
            'cwmkg' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','G')->count(),
            'cwmkh' => Complaint::where('alamat','Mekarjaya')->where('id_jeniskeluhan','H')->count(),

            'cwpta' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','A')->count(),
            'cwptb' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','B')->count(),
            'cwptc' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','C')->count(),
            'cwptd' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','D')->count(),
            'cwpte' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','E')->count(),
            'cwptf' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','F')->count(),
            'cwptg' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','G')->count(),
            'cwpth' => Complaint::where('alamat','Puteran')->where('id_jeniskeluhan','H')->count(),

            'cwrea' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','A')->count(),
            'cwreb' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','B')->count(),
            'cwrec' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','C')->count(),
            'cwred' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','D')->count(),
            'cwree' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','E')->count(),
            'cwref' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','F')->count(),
            'cwreg' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','G')->count(),
            'cwreh' => Complaint::where('alamat','Rende')->where('id_jeniskeluhan','H')->count(),

            'cwtja' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','A')->count(),
            'cwtjb' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','B')->count(),
            'cwtjc' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','C')->count(),
            'cwtjd' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','D')->count(),
            'cwtje' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','E')->count(),
            'cwtjf' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','F')->count(),
            'cwtjg' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','G')->count(),
            'cwtjh' => Complaint::where('alamat','Tenjolaut')->where('id_jeniskeluhan','H')->count(),

            'cwwga' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','A')->count(),
            'cwwgb' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','B')->count(),
            'cwwgc' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','C')->count(),
            'cwwgd' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','D')->count(),
            'cwwge' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','E')->count(),
            'cwwgf' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','F')->count(),
            'cwwgg' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','G')->count(),
            'cwwgh' => Complaint::where('alamat','Wangunjaya')->where('id_jeniskeluhan','H')->count(),
            //Batujajar
            'bjbta' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','A')->count(),
            'bjbtb' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','B')->count(),
            'bjbtc' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','C')->count(),
            'bjbtd' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','D')->count(),
            'bjbte' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','E')->count(),
            'bjbtf' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','F')->count(),
            'bjbtg' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','G')->count(),
            'bjbth' => Complaint::where('alamat','Batujajar Timur')->where('id_jeniskeluhan','H')->count(),

            'bjbba' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','A')->count(),
            'bjbbb' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','B')->count(),
            'bjbbc' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','C')->count(),
            'bjbbd' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','D')->count(),
            'bjbbe' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','E')->count(),
            'bjbbf' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','F')->count(),
            'bjbbg' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','G')->count(),
            'bjbbh' => Complaint::where('alamat','Batujajar Barat')->where('id_jeniskeluhan','H')->count(),

            'bjcga' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','A')->count(),
            'bjcgb' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','B')->count(),
            'bjcgc' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','C')->count(),
            'bjcgd' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','D')->count(),
            'bjcge' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','E')->count(),
            'bjcgf' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','F')->count(),
            'bjcgg' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','G')->count(),
            'bjcgh' => Complaint::where('alamat','Cangkorah')->where('id_jeniskeluhan','H')->count(),

            'bjgla' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','A')->count(),
            'bjglb' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','B')->count(),
            'bjglc' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','C')->count(),
            'bjgld' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','D')->count(),
            'bjgle' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','E')->count(),
            'bjglf' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','F')->count(),
            'bjglg' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','G')->count(),
            'bjglh' => Complaint::where('alamat','Galanggang')->where('id_jeniskeluhan','H')->count(),

            'bjgra' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','A')->count(),
            'bjgrb' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','B')->count(),
            'bjgrc' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','C')->count(),
            'bjgrd' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','D')->count(),
            'bjgre' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','E')->count(),
            'bjgrf' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','F')->count(),
            'bjgrg' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','G')->count(),
            'bjgrh' => Complaint::where('alamat','Giriasih')->where('id_jeniskeluhan','H')->count(),

            'bjpga' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','A')->count(),
            'bjpgb' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','B')->count(),
            'bjpgc' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','C')->count(),
            'bjpgd' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','D')->count(),
            'bjpge' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','E')->count(),
            'bjpgf' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','F')->count(),
            'bjpgg' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','G')->count(),
            'bjpgh' => Complaint::where('alamat','Pangauban')->where('id_jeniskeluhan','H')->count(),

            'bjsla' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','A')->count(),
            'bjslb' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','B')->count(),
            'bjslc' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','C')->count(),
            'bjsld' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','D')->count(),
            'bjsle' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','E')->count(),
            'bjslf' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','F')->count(),
            'bjslg' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','G')->count(),
            'bjslh' => Complaint::where('alamat','Selacau')->where('id_jeniskeluhan','H')->count(),
            //Cililin
            'clbta' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','A')->count(),
            'clbtb' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','B')->count(),
            'clbtc' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','C')->count(),
            'clbtd' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','D')->count(),
            'clbte' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','E')->count(),
            'clbtf' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','F')->count(),
            'clbtg' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','G')->count(),
            'clbth' => Complaint::where('alamat','Batulayang')->where('id_jeniskeluhan','H')->count(),

            'clbga' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','A')->count(),
            'clbgb' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','B')->count(),
            'clbgc' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','C')->count(),
            'clbgd' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','D')->count(),
            'clbge' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','E')->count(),
            'clbgf' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','F')->count(),
            'clbgg' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','G')->count(),
            'clbgh' => Complaint::where('alamat','Bangas')->where('id_jeniskeluhan','H')->count(),

            'clbda' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','A')->count(),
            'clbdb' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','B')->count(),
            'clbdc' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','C')->count(),
            'clbdd' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','D')->count(),
            'clbde' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','E')->count(),
            'clbdf' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','F')->count(),
            'clbdg' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','G')->count(),
            'clbdh' => Complaint::where('alamat','Budiharja')->where('id_jeniskeluhan','H')->count(),

            'clkra' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','A')->count(),
            'clkrb' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','B')->count(),
            'clkrc' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','C')->count(),
            'clkrd' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','D')->count(),
            'clkre' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','E')->count(),
            'clkrf' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','F')->count(),
            'clkrg' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','G')->count(),
            'clkrh' => Complaint::where('alamat','Karanganyar')->where('id_jeniskeluhan','H')->count(),

            'clkta' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','A')->count(),
            'clktb' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','B')->count(),
            'clktc' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','C')->count(),
            'clktd' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','D')->count(),
            'clkte' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','E')->count(),
            'clktf' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','F')->count(),
            'clktg' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','G')->count(),
            'clkth' => Complaint::where('alamat','Karangtanjung')->where('id_jeniskeluhan','H')->count(),

            'clkya' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','A')->count(),
            'clkyb' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','B')->count(),
            'clkyc' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','C')->count(),
            'clkyd' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','D')->count(),
            'clkye' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','E')->count(),
            'clkyf' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','F')->count(),
            'clkyg' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','G')->count(),
            'clkyh' => Complaint::where('alamat','Karyamukti')->where('id_jeniskeluhan','H')->count(),

            'clkda' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','A')->count(),
            'clkdb' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','B')->count(),
            'clkdc' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','C')->count(),
            'clkdd' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','D')->count(),
            'clkde' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','E')->count(),
            'clkdf' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','F')->count(),
            'clkdg' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','G')->count(),
            'clkdh' => Complaint::where('alamat','Kidangpananjung')->where('id_jeniskeluhan','H')->count(),

            'clmka' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','A')->count(),
            'clmkb' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','B')->count(),
            'clmkc' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','C')->count(),
            'clmkd' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','D')->count(),
            'clmke' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','E')->count(),
            'clmkf' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','F')->count(),
            'clmkg' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','G')->count(),
            'clmkh' => Complaint::where('alamat','Mukapayung')->where('id_jeniskeluhan','H')->count(),

            'clnga' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','A')->count(),
            'clngb' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','B')->count(),
            'clngc' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','C')->count(),
            'clngd' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','D')->count(),
            'clnge' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','E')->count(),
            'clngf' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','F')->count(),
            'clngg' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','G')->count(),
            'clngh' => Complaint::where('alamat','Nanggerong')->where('id_jeniskeluhan','H')->count(),

            'clrca' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','A')->count(),
            'clrcb' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','B')->count(),
            'clrcc' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','C')->count(),
            'clrcd' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','D')->count(),
            'clrce' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','E')->count(),
            'clrcf' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','F')->count(),
            'clrcg' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','G')->count(),
            'clrch' => Complaint::where('alamat','Rancapanggung')->where('id_jeniskeluhan','H')->count(),
            //Cisarua
            'crcpa' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','A')->count(),
            'crcpb' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','B')->count(),
            'crcpc' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','C')->count(),
            'crcpd' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','D')->count(),
            'crcpe' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','E')->count(),
            'crcpf' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','F')->count(),
            'crcpg' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','G')->count(),
            'crcph' => Complaint::where('alamat','Cipada')->where('id_jeniskeluhan','H')->count(),

            'crjba' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','A')->count(),
            'crjbb' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','B')->count(),
            'crjbc' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','C')->count(),
            'crjbd' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','D')->count(),
            'crjbe' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','E')->count(),
            'crjbf' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','F')->count(),
            'crjbg' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','G')->count(),
            'crjbh' => Complaint::where('alamat','Jambudipa')->where('id_jeniskeluhan','H')->count(),

            'crkta' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','A')->count(),
            'crktb' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','B')->count(),
            'crktc' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','C')->count(),
            'crktd' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','D')->count(),
            'crkte' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','E')->count(),
            'crktf' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','F')->count(),
            'crktg' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','G')->count(),
            'crkth' => Complaint::where('alamat','Kertawangi')->where('id_jeniskeluhan','H')->count(),

            'crpda' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','A')->count(),
            'crpdb' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','B')->count(),
            'crpdc' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','C')->count(),
            'crpdd' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','D')->count(),
            'crpde' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','E')->count(),
            'crpdf' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','F')->count(),
            'crpdg' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','G')->count(),
            'crpdh' => Complaint::where('alamat','Padaasih')->where('id_jeniskeluhan','H')->count(),

            'crpha' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','A')->count(),
            'crphb' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','B')->count(),
            'crphc' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','C')->count(),
            'crphd' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','D')->count(),
            'crphe' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','E')->count(),
            'crphf' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','F')->count(),
            'crphg' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','G')->count(),
            'crphh' => Complaint::where('alamat','Pasirhalang')->where('id_jeniskeluhan','H')->count(),

            'crpga' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','A')->count(),
            'crpgb' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','B')->count(),
            'crpgc' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','C')->count(),
            'crpgd' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','D')->count(),
            'crpge' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','E')->count(),
            'crpgf' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','F')->count(),
            'crpgg' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','G')->count(),
            'crpgh' => Complaint::where('alamat','Pasirlangu')->where('id_jeniskeluhan','H')->count(),

            'crsma' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','A')->count(),
            'crsmb' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','B')->count(),
            'crsmc' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','C')->count(),
            'crsmd' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','D')->count(),
            'crsme' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','E')->count(),
            'crsmf' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','F')->count(),
            'crsmg' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','G')->count(),
            'crsmh' => Complaint::where('alamat','Sadangmekar')->where('id_jeniskeluhan','H')->count(),

            'crtma' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','A')->count(),
            'crtmb' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','B')->count(),
            'crtmc' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','C')->count(),
            'crtmd' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','D')->count(),
            'crtme' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','E')->count(),
            'crtmf' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','F')->count(),
            'crtmg' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','G')->count(),
            'crtmh' => Complaint::where('alamat','Tugumukti')->where('id_jeniskeluhan','H')->count(),
            //Lembang
            'lbcda' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','A')->count(),
            'lbcdb' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','B')->count(),
            'lbcdc' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','C')->count(),
            'lbcdd' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','D')->count(),
            'lbcde' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','E')->count(),
            'lbcdf' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','F')->count(),
            'lbcdg' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','G')->count(),
            'lbcdh' => Complaint::where('alamat','Cibodas')->where('id_jeniskeluhan','H')->count(),

            'lbcga' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','A')->count(),
            'lbcgb' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','B')->count(),
            'lbcgc' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','C')->count(),
            'lbcgd' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','D')->count(),
            'lbcge' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','E')->count(),
            'lbcgf' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','F')->count(),
            'lbcgg' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','G')->count(),
            'lbcgh' => Complaint::where('alamat','Cibogo')->where('id_jeniskeluhan','H')->count(),

            'lbcha' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','A')->count(),
            'lbchb' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','B')->count(),
            'lbchc' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','C')->count(),
            'lbchd' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','D')->count(),
            'lbche' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','E')->count(),
            'lbchf' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','F')->count(),
            'lbchg' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','G')->count(),
            'lbchh' => Complaint::where('alamat','Cikahuripan')->where('id_jeniskeluhan','H')->count(),

            'lbcna' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','A')->count(),
            'lbcnb' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','B')->count(),
            'lbcnc' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','C')->count(),
            'lbcnd' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','D')->count(),
            'lbcne' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','E')->count(),
            'lbcnf' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','F')->count(),
            'lbcng' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','G')->count(),
            'lbcnh' => Complaint::where('alamat','Cikidang')->where('id_jeniskeluhan','H')->count(),

            'lbcoa' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','A')->count(),
            'lbcob' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','B')->count(),
            'lbcoc' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','C')->count(),
            'lbcod' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','D')->count(),
            'lbcoe' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','E')->count(),
            'lbcof' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','F')->count(),
            'lbcog' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','G')->count(),
            'lbcoh' => Complaint::where('alamat','Cikole')->where('id_jeniskeluhan','H')->count(),

            'lbgka' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','A')->count(),
            'lbgkb' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','B')->count(),
            'lbgkc' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','C')->count(),
            'lbgkd' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','D')->count(),
            'lbgke' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','E')->count(),
            'lbgkf' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','F')->count(),
            'lbgkg' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','G')->count(),
            'lbgkh' => Complaint::where('alamat','Gudangkahuripan')->where('id_jeniskeluhan','H')->count(),

            'lbjya' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','A')->count(),
            'lbjyb' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','B')->count(),
            'lbjyc' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','C')->count(),
            'lbjyd' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','D')->count(),
            'lbjye' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','E')->count(),
            'lbjyf' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','F')->count(),
            'lbjyg' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','G')->count(),
            'lbjyh' => Complaint::where('alamat','Jayagiri')->where('id_jeniskeluhan','H')->count(),

            'lbkaa' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','A')->count(),
            'lbkab' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','B')->count(),
            'lbkac' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','C')->count(),
            'lbkad' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','D')->count(),
            'lbkae' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','E')->count(),
            'lbkaf' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','F')->count(),
            'lbkag' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','G')->count(),
            'lbkah' => Complaint::where('alamat','Kayuambon')->where('id_jeniskeluhan','H')->count(),

            'lblsa' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','A')->count(),
            'lblsb' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','B')->count(),
            'lblsc' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','C')->count(),
            'lblsd' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','D')->count(),
            'lblse' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','E')->count(),
            'lblsf' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','F')->count(),
            'lblsg' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','G')->count(),
            'lblsh' => Complaint::where('alamat','lengeunsari')->where('id_jeniskeluhan','H')->count(),

            'lbmwa' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','A')->count(),
            'lbmwb' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','B')->count(),
            'lbmwc' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','C')->count(),
            'lbmwd' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','D')->count(),
            'lbmwe' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','E')->count(),
            'lbmwf' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','F')->count(),
            'lbmwg' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','G')->count(),
            'lbmwh' => Complaint::where('alamat','Mekarwangi')->where('id_jeniskeluhan','H')->count(),

            'lbpwa' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','A')->count(),
            'lbpwb' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','B')->count(),
            'lbpwc' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','C')->count(),
            'lbpwd' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','D')->count(),
            'lbpwe' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','E')->count(),
            'lbpwf' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','F')->count(),
            'lbpwg' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','G')->count(),
            'lbpwh' => Complaint::where('alamat','Pagerwangi')->where('id_jeniskeluhan','H')->count(),

            'lbsja' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','A')->count(),
            'lbsjb' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','B')->count(),
            'lbsjc' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','C')->count(),
            'lbsjd' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','D')->count(),
            'lbsje' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','E')->count(),
            'lbsjf' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','F')->count(),
            'lbsjg' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','G')->count(),
            'lbsjh' => Complaint::where('alamat','Sukajaya')->where('id_jeniskeluhan','H')->count(),
            //Ngamprah
            'ngbga' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','A')->count(),
            'ngbgb' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','B')->count(),
            'ngbgc' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','C')->count(),
            'ngbgd' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','D')->count(),
            'ngbge' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','E')->count(),
            'ngbgf' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','F')->count(),
            'ngbgg' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','G')->count(),
            'ngbgh' => Complaint::where('alamat','Bojongkoneng')->where('id_jeniskeluhan','H')->count(),

            'ngcla' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','A')->count(),
            'ngclb' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','B')->count(),
            'ngclc' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','C')->count(),
            'ngcld' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','D')->count(),
            'ngcle' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','E')->count(),
            'ngclf' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','F')->count(),
            'ngclg' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','G')->count(),
            'ngclh' => Complaint::where('alamat','Cilame')->where('id_jeniskeluhan','H')->count(),

            'ngcma' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','A')->count(),
            'ngcmb' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','B')->count(),
            'ngcmc' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','C')->count(),
            'ngcmd' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','D')->count(),
            'ngcme' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','E')->count(),
            'ngcmf' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','F')->count(),
            'ngcmg' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','G')->count(),
            'ngcmh' => Complaint::where('alamat','Cimareme')->where('id_jeniskeluhan','H')->count(),

            'ngcga' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','A')->count(),
            'ngcgb' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','B')->count(),
            'ngcgc' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','C')->count(),
            'ngcgd' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','D')->count(),
            'ngcge' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','E')->count(),
            'ngcgf' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','F')->count(),
            'ngcgg' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','G')->count(),
            'ngcgh' => Complaint::where('alamat','Cimanggu')->where('id_jeniskeluhan','H')->count(),

            'nggba' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','A')->count(),
            'nggbb' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','B')->count(),
            'nggbc' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','C')->count(),
            'nggbd' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','D')->count(),
            'nggbe' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','E')->count(),
            'nggbf' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','F')->count(),
            'nggbg' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','G')->count(),
            'nggbh' => Complaint::where('alamat','Gadobangkong')->where('id_jeniskeluhan','H')->count(),

            'ngmga' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','A')->count(),
            'ngmgb' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','B')->count(),
            'ngmgc' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','C')->count(),
            'ngmgd' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','D')->count(),
            'ngmge' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','E')->count(),
            'ngmgf' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','F')->count(),
            'ngmgg' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','G')->count(),
            'ngmgh' => Complaint::where('alamat','Margajaya')->where('id_jeniskeluhan','H')->count(),

            'ngmsa' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','A')->count(),
            'ngmsb' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','B')->count(),
            'ngmsc' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','C')->count(),
            'ngmsd' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','D')->count(),
            'ngmse' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','E')->count(),
            'ngmsf' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','F')->count(),
            'ngmsg' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','G')->count(),
            'ngmsh' => Complaint::where('alamat','Mekarsari')->where('id_jeniskeluhan','H')->count(),

            'ngpha' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','A')->count(),
            'ngphb' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','B')->count(),
            'ngphc' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','C')->count(),
            'ngphd' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','D')->count(),
            'ngphe' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','E')->count(),
            'ngphf' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','F')->count(),
            'ngphg' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','G')->count(),
            'ngphh' => Complaint::where('alamat','Pakuhaji')->where('id_jeniskeluhan','H')->count(),

            'ngsta' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','A')->count(),
            'ngstb' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','B')->count(),
            'ngstc' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','C')->count(),
            'ngstd' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','D')->count(),
            'ngste' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','E')->count(),
            'ngstf' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','F')->count(),
            'ngstg' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','G')->count(),
            'ngsth' => Complaint::where('alamat','Sukatani')->where('id_jeniskeluhan','H')->count(),

            'ngtma' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','A')->count(),
            'ngtmb' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','B')->count(),
            'ngtmc' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','C')->count(),
            'ngtmd' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','D')->count(),
            'ngtme' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','E')->count(),
            'ngtmf' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','F')->count(),
            'ngtmg' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','G')->count(),
            'ngtmh' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','H')->count(),
            //Padalarang
            'pdcma' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','A')->count(),
            'pdcmb' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','B')->count(),
            'pdcmc' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','C')->count(),
            'pdcmd' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','D')->count(),
            'pdcme' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','E')->count(),
            'pdcmf' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','F')->count(),
            'pdcmg' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','G')->count(),
            'pdcmh' => Complaint::where('alamat','Cempaka Mekar')->where('id_jeniskeluhan','H')->count(),

            'pdcba' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','A')->count(),
            'pdcbb' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','B')->count(),
            'pdcbc' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','C')->count(),
            'pdcbd' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','D')->count(),
            'pdcbe' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','E')->count(),
            'pdcbf' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','F')->count(),
            'pdcbg' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','G')->count(),
            'pdcbh' => Complaint::where('alamat','Ciburuy')->where('id_jeniskeluhan','H')->count(),

            'pdcra' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','A')->count(),
            'pdcrb' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','B')->count(),
            'pdcrc' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','C')->count(),
            'pdcrd' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','D')->count(),
            'pdcre' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','E')->count(),
            'pdcrf' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','F')->count(),
            'pdcrg' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','G')->count(),
            'pdcrh' => Complaint::where('alamat','Cimerang')->where('id_jeniskeluhan','H')->count(),

            'pdcda' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','A')->count(),
            'pdcdb' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','B')->count(),
            'pdcdc' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','C')->count(),
            'pdcdd' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','D')->count(),
            'pdcde' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','E')->count(),
            'pdcdf' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','F')->count(),
            'pdcdg' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','G')->count(),
            'pdcdh' => Complaint::where('alamat','Cipendeuy')->where('id_jeniskeluhan','H')->count(),

            'pdjma' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','A')->count(),
            'pdjmb' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','B')->count(),
            'pdjmc' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','C')->count(),
            'pdjmd' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','D')->count(),
            'pdjme' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','E')->count(),
            'pdjmf' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','F')->count(),
            'pdjmg' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','G')->count(),
            'pdjmh' => Complaint::where('alamat','Jayamekar')->where('id_jeniskeluhan','H')->count(),

            'pdkja' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','A')->count(),
            'pdkjb' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','B')->count(),
            'pdkjc' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','C')->count(),
            'pdkjd' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','D')->count(),
            'pdkje' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','E')->count(),
            'pdkjf' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','F')->count(),
            'pdkjg' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','G')->count(),
            'pdkjh' => Complaint::where('alamat','Kertajaya')->where('id_jeniskeluhan','H')->count(),

            'pdkma' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','A')->count(),
            'pdkmb' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','B')->count(),
            'pdkmc' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','C')->count(),
            'pdkmd' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','D')->count(),
            'pdkme' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','E')->count(),
            'pdkmf' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','F')->count(),
            'pdkmg' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','G')->count(),
            'pdkmh' => Complaint::where('alamat','Kertamulya')->where('id_jeniskeluhan','H')->count(),

            'pdlma' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','A')->count(),
            'pdlmb' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','B')->count(),
            'pdlmc' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','C')->count(),
            'pdlmd' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','D')->count(),
            'pdlme' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','E')->count(),
            'pdlmf' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','F')->count(),
            'pdlmg' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','G')->count(),
            'pdlmh' => Complaint::where('alamat','Tanimulya')->where('id_jeniskeluhan','H')->count(),
            //Cimahi Selatan
            'csbba' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','A')->count(),
            'csbbb' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','B')->count(),
            'csbbc' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','C')->count(),
            'csbbd' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','D')->count(),
            'csbbe' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','E')->count(),
            'csbbf' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','F')->count(),
            'csbbg' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','G')->count(),
            'csbbh' => Complaint::where('alamat','Cibeber')->where('id_jeniskeluhan','H')->count(),

            'cscba' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','A')->count(),
            'cscbb' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','B')->count(),
            'cscbc' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','C')->count(),
            'cscbd' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','D')->count(),
            'cscbe' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','E')->count(),
            'cscbf' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','F')->count(),
            'cscbg' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','G')->count(),
            'cscbh' => Complaint::where('alamat','Cibereum')->where('id_jeniskeluhan','H')->count(),

            'cslga' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','A')->count(),
            'cslgb' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','B')->count(),
            'cslgc' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','C')->count(),
            'cslgd' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','D')->count(),
            'cslge' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','E')->count(),
            'cslgf' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','F')->count(),
            'cslgg' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','G')->count(),
            'cslgh' => Complaint::where('alamat','Leuwigajah')->where('id_jeniskeluhan','H')->count(),

            'csmla' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','A')->count(),
            'csmlb' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','B')->count(),
            'csmlc' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','C')->count(),
            'csmld' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','D')->count(),
            'csmle' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','E')->count(),
            'csmlf' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','F')->count(),
            'csmlg' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','G')->count(),
            'csmlh' => Complaint::where('alamat','Melong')->where('id_jeniskeluhan','H')->count(),

            'csuta' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','A')->count(),
            'csutb' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','B')->count(),
            'csutc' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','C')->count(),
            'csutd' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','D')->count(),
            'csute' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','E')->count(),
            'csutf' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','F')->count(),
            'csutg' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','G')->count(),
            'csuth' => Complaint::where('alamat','Utama')->where('id_jeniskeluhan','H')->count(),
            //cimahi Tengah
            'ctbra' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','A')->count(),
            'ctbrb' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','B')->count(),
            'ctbrc' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','C')->count(),
            'ctbrd' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','D')->count(),
            'ctbre' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','E')->count(),
            'ctbrf' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','F')->count(),
            'ctbrg' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','G')->count(),
            'ctbrh' => Complaint::where('alamat','Baros')->where('id_jeniskeluhan','H')->count(),

            'ctcta' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','A')->count(),
            'ctctb' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','B')->count(),
            'ctctc' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','C')->count(),
            'ctctd' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','D')->count(),
            'ctcte' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','E')->count(),
            'ctctf' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','F')->count(),
            'ctctg' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','G')->count(),
            'ctcth' => Complaint::where('alamat','Cigugur Tengah')->where('id_jeniskeluhan','H')->count(),

            'ctkma' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','A')->count(),
            'ctkmb' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','B')->count(),
            'ctkmc' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','C')->count(),
            'ctkmd' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','D')->count(),
            'ctkme' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','E')->count(),
            'ctkmf' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','F')->count(),
            'ctkmg' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','G')->count(),
            'ctkmh' => Complaint::where('alamat','Karangmekar')->where('id_jeniskeluhan','H')->count(),

            'ctpsa' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','A')->count(),
            'ctpsb' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','B')->count(),
            'ctpsc' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','C')->count(),
            'ctpsd' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','D')->count(),
            'ctpse' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','E')->count(),
            'ctpsf' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','F')->count(),
            'ctpsg' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','G')->count(),
            'ctpsh' => Complaint::where('alamat','Padasuka')->where('id_jeniskeluhan','H')->count(),

            'ctsma' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','A')->count(),
            'ctsmb' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','B')->count(),
            'ctsmc' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','C')->count(),
            'ctsmd' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','D')->count(),
            'ctsme' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','E')->count(),
            'ctsmf' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','F')->count(),
            'ctsmg' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','G')->count(),
            'ctsmh' => Complaint::where('alamat','Setiamanah')->where('id_jeniskeluhan','H')->count(),
//cimahi utara
            'cucba' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','A')->count(),
            'cucbb' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','B')->count(),
            'cucbc' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','C')->count(),
            'cucbd' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','D')->count(),
            'cucbe' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','E')->count(),
            'cucbf' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','F')->count(),
            'cucbg' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','G')->count(),
            'cucbh' => Complaint::where('alamat','Cibabat')->where('id_jeniskeluhan','H')->count(),

            'cucpa' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','A')->count(),
            'cucpb' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','B')->count(),
            'cucpc' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','C')->count(),
            'cucpd' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','D')->count(),
            'cucpe' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','E')->count(),
            'cucpf' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','F')->count(),
            'cucpg' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','G')->count(),
            'cucph' => Complaint::where('alamat','Cipageran')->where('id_jeniskeluhan','H')->count(),

            'cucta' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','A')->count(),
            'cuctb' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','B')->count(),
            'cuctc' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','C')->count(),
            'cuctd' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','D')->count(),
            'cucte' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','E')->count(),
            'cuctf' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','F')->count(),
            'cuctg' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','G')->count(),
            'cucth' => Complaint::where('alamat','Citereup')->where('id_jeniskeluhan','H')->count(),

            'cupka' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','A')->count(),
            'cupkb' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','B')->count(),
            'cupkc' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','C')->count(),
            'cupkd' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','D')->count(),
            'cupke' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','E')->count(),
            'cupkf' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','F')->count(),
            'cupkg' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','G')->count(),
            'cupkh' => Complaint::where('alamat','Pasirkaliki')->where('id_jeniskeluhan','H')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function iterasi($id)
    //  {
    //      $items = hsl_transformasi::inRandomOrder($id)
    //       ->limit(5)
    //      ->get();
    //     // dd($item);
    //     //$item = hsl_transformasi::where('item', $item)->orderByRaw('RAND()')->take(2)->get();
    //     //DB::hsl_transformasi('hsl_transformasi')::orderbyRaw('RAND()')->take(5)->get();
    //    // $galleries = App\Gallery::inRandomOrder()->get();
    //    $items = hsl_transformasi::all();
    //     return view('pages.admin.transformasi.iterasi', [
    //         'items' => $items
    //     ]);
    //  }

    public function create()
    {
        return view('pages.admin.transformasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
       // $data['slug'] = Str::slug($request->title);

        hsl_transformasi::create($data);
        return redirect()->route('transformasi.index');
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
        $item = hsl_transformasi::findOrFail($id);

        return view('pages.admin.transformasi.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransformasiRequest $request, $id)
    {
        $data = $request->all();
        //$data['slug'] = Str::slug($request->title);

        $item = hsl_transformasi::findOrFail($id);

        $item->update($data);

        return redirect()->route('transformasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = hsl_transformasi::findOrFail($id);
        $item->delete();

        return redirect()->route('transformasi.index');
    }
}
