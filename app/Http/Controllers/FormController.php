<?php

namespace App\Http\Controllers;
use App\Traits\WablasTrait;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index(){
        return redirect('/');
    }
    public function store(Request $request){

        $kumpulData =   [];

        $data['phone']       = $request->noHp;
        $data['message']     = $request->pesan;
        $data['secret']      = false;
        $data['retry']       = false;
        $data['isGroup']      = false;
        array_push($kumpulData, $data);
        WablasTrait::sendText($kumpulData);

        return redirect()->back()->with('succes','Pesan Terkirim !!!');
    }
}
