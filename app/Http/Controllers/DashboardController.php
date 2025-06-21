<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $datas = pendaftar::select('id', 'nirm', 'email', 'pass', 'nama', 'hp', 'tempatlahir', 'tgllahir', 'alamat', 'prodi', 'tgldaftar', 'status', 'ta', 'semester')->orderBy('tgldaftar', 'DESC')->get();
        
        return view('dashboard', [
            'datas' => $datas,
        ]); 
    }

    public function Dashboard_Hapus($id)
    {
        $delete = pendaftar::where('id', $id)->first();
        $delete->delete();

        if (!$delete) {
            return redirect(url('/dashboard'))->with('error', 'tidak berhasil hapus');
        } else {
            return redirect(url('/dashboard'))->with('success', 'berhasil hapus');
        }
    }

    public function Dashboard_Tolak($id)
    {
        $update = pendaftar::where('id', $id)->first();
        $update->status = 'tolak';
        $update->save();

        if (!$update) {
            return redirect(url('/dashboard'))->with('error', 'tidak berhasil tolak');
        } else {
            return redirect(url('/dashboard'))->with('success', 'berhasil tolak');
        }
    }

    public function Dashboard_Validasi($id)
    {
        $update = pendaftar::where('id', $id)->first();
        $update->status = 'validasi';
        $update->save();

        if (!$update) {
            return redirect(url('/dashboard'))->with('error', 'tidak berhasil validasi');
        } else {
            return redirect(url('/dashboard'))->with('success', 'berhasil validasi');
        }
    }
}
