<?php

namespace App\Http\Controllers;

use App\Models\Ektp;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function beranda() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin" || Auth::user()->role->nama == "Camat") {
                $ektp_kategori = Ektp::select('keterangan', Ektp::raw('count(*) as total'))->groupBy('keterangan')->get();
                $pengaduan_kategori = Pengaduan::select('jenis_pengaduan', Pengaduan::raw('count(*) as total'))->groupBy('jenis_pengaduan')->get();

                $ektp = Ektp::selectRaw('DATE(created_at) as date, COUNT(*) as total')->groupBy('date')->get();
                $ektp_tanggal = [];
                $ektp_jumlah = [];
                foreach ($ektp as $record) {
                    $ektp_tanggal[] = Carbon::parse($record->date)->format('Y-m-d');
                    $ektp_jumlah[] = $record->total;
                }

                $pengaduan = Pengaduan::selectRaw('DATE(created_at) as date, COUNT(*) as total')->groupBy('date')->get();
                $pengaduan_tanggal = [];
                $pengaduan_jumlah = [];
                foreach ($pengaduan as $record) {
                    $pengaduan_tanggal[] = Carbon::parse($record->date)->format('Y-m-d');
                    $pengaduan_jumlah[] = $record->total;
                }

                return view("dashboard.main", [
                    'page' => "Beranda",
                    'logged_user' => $logged_user,
                    'ektp_kategori' => $ektp_kategori,
                    'ektp_tanggal' => $ektp_tanggal,
                    'ektp_jumlah' => $ektp_jumlah,
                    'pengaduan_kategori' => $pengaduan_kategori,
                    'pengaduan_tanggal' => $pengaduan_tanggal,
                    'pengaduan_jumlah' => $pengaduan_jumlah,
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
}