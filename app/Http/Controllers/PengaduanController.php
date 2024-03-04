<?php

namespace App\Http\Controllers;

use App\Models\Ektp;
use App\Models\Faqs;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PengaduanController extends Controller
{
    public function pengaduan() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin" || Auth::user()->role->nama == "Camat") {
                $pengaduan = Pengaduan::simplePaginate(10);
                return view("dashboard.main", [
                    'page' => "Pengaduan",
                    'logged_user' => $logged_user,
                    'pengaduan' => $pengaduan
                ]);
            }
            else {
                Session::flash('error', 'Anda tidak diizinkan untuk mengakses halaman ini');
                return redirect('/');
            }
        }
        else {
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/login');
        }
    }

    public function pengaduan_cek_nik(Request $request) {
        $ektp = Ektp::where('nik', $request->get('nik'))->first();
        if($ektp) {
            return response()->json($ektp);
        }
        else {
            return response()->json(['error' => 'Not found'], 404);
        }
    }

    public function pengaduan_submit(Request $request) {
        $ektp = Ektp::where('nik', $request->get('nik'))->first();
        if($ektp) {
            $pengaduan = new Pengaduan($request->all());
            $pengaduan->status = "Menunggu Konfirmasi";
            if($request->file('file')) {
                $filenameWithExt = $request->file("file")->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file("file")->getClientOriginalExtension();
                $filenameSimpan = md5($filename. time()).'.'.$extension;
                $path = $request->file("file")->storeAs('public/pengaduan', $filenameSimpan);
                $pengaduan->file = $filenameSimpan;
            }

            $pengaduan->save();

            $kode_pengaduan = null;
            if($request->get('jenis_pengaduan') == "E-KTP Perubahan Status") { $kode_pengaduan = "P".$pengaduan->id_pengaduan.$request->get('nik'); }
            if($request->get('jenis_pengaduan') == "E-KTP Rusak") { $kode_pengaduan = "R".$pengaduan->id_pengaduan.$request->get('nik'); }
            if($request->get('jenis_pengaduan') == "E-KTP Hilang") { $kode_pengaduan = "H".$pengaduan->id_pengaduan.$request->get('nik'); }
            if($request->get('jenis_pengaduan') == "Gratifikasi E-KTP") { $kode_pengaduan = "G".$pengaduan->id_pengaduan.$request->get('nik'); }

            $pengaduan->kode_pengaduan = $kode_pengaduan;
            $pengaduan->save();

            // Session::flash('success', 'Pengaduan berhasil disimpan');
            // return redirect()->route('pengaduan');
            return redirect('status?kode='.$pengaduan->kode_pengaduan.'#status')->with('success', 'Harap simpan kode pengaduan anda: '.$pengaduan->kode_pengaduan);
        }
        else {
            Session::flash('error', 'NIK tidak ditemukan');
            return redirect()->route('pengaduan');
        }
    }

    public function pengaduan_process($id_pengaduan) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $pengaduan = Pengaduan::find($id_pengaduan);
                $pengaduan->status = "Sedang Diproses";
                $pengaduan->confirmed_at = date("Y-m-d H:i:s");
                $pengaduan->save();
                Session::flash('success', 'Pengaduan telah diproses');
                return redirect()->route('dashboard.pengaduan');
            }
            else {
                Session::flash('error', 'Anda tidak diizinkan untuk mengakses halaman ini');
                return redirect('/');
            }
        }
        else {
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/login');
        }
    }

    public function pengaduan_report_view($id_pengaduan) {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $pengaduan = Pengaduan::find($id_pengaduan);
                return view("dashboard.main", [
                    'page' => "Pengaduan",
                    'subpage' => "Report",
                    'logged_user' => $logged_user,
                    'pengaduan' => $pengaduan,
                ]);
            }
            else {
                Session::flash('error', 'Anda tidak diizinkan untuk mengakses halaman ini');
                return redirect('/');
            }
        }
        else {
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/login');
        }
    }

    public function pengaduan_report_action(Request $request, $id_pengaduan) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $pengaduan = Pengaduan::find($id_pengaduan);
                $pengaduan->status = "Pengaduan Selesai";
                $pengaduan->finished_at = date("Y-m-d H:i:s");

                if($request->file('bukti')) {
                    $filenameWithExt = $request->file("bukti")->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file("bukti")->getClientOriginalExtension();
                    $filenameSimpan = md5($filename. time()).'.'.$extension;
                    $path = $request->file("bukti")->storeAs('public/bukti', $filenameSimpan);
                    $pengaduan->bukti = $filenameSimpan;
                }

                $pengaduan->peninjauan = $request->get('peninjauan');
                $pengaduan->save();

                Session::flash('success', 'Pengaduan telah berhasil diselesaikan');
                return redirect()->route('dashboard.pengaduan');
            }
            else {
                Session::flash('error', 'Anda tidak diizinkan untuk mengakses halaman ini');
                return redirect('/');
            }
        }
        else {
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/login');
        }
    }
}