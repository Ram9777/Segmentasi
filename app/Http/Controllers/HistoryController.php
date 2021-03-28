<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Adminn\ComplaintRequest;
use App\Complaint;
use App\Pelanggan;
//use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class HistoryController extends Controller
{
    public function index(request $request, $id){
        $items = Complaint::findorfail($id);
        var_dump($items);
        return view('pages.history',[
            'items' => $items
        ]);
    }
}
