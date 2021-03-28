<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Complaint;
use App\User;
use App\Pelanggan;
use App\data_transformations;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dashboard', [
            //'complaint' => Complaint::where('alamat','Parongpong')->where('id_jeniskeluhan','A')->count(),
            'complaint' => Complaint::count(),
            'c' => Pelanggan::count(),
            //'p' => data_transformations::count(),
        ]);
    }
}
