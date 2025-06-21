<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function Pendaftar()
    {
        return view('pendaftar', [
            'nirm' => rand(0,9999999999),
        ]);
    }

    public function Pendaftar_Simpan(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'nirm' => 'required|numeric',
            'email' => 'required|email',
            'pass' => 'required',
            'nama' => 'required',
            'hp' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(url('/'))->with('error', 'harap isi form dengan benar');
        }
        
        $datas = [
            'nirm'          => $request['nirm'],
            'email'         => $request['email'],
            'pass'          => $request['pass'],
            'nama'          => $request['nama'],
            'hp'            => $request['hp'],
            'tempatlahir'   => $request['tempatlahir'],
            'tgllahir'      => $request['tgllahir'],
            'alamat'        => $request['alamat'],
            'prodi'         => '-',
            'tgldaftar'     => date('Y-m-d'),
            'status'        => 'daftar',
            'ta'            => '-',
            'semester'      => '-',
        ]; 
        $simpan = pendaftar::create($datas);
        if (!$simpan) {
            return redirect('/')->with('error', 'tidak berhasil mendaftar');
        } else {
            return redirect('/')->with('success', 'berhasil mendaftar');
        }
    }
}
