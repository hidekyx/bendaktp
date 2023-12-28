<?php

namespace App\Http\Controllers;

use App\Models\Ektp;
use App\Models\Faqs;
use App\Models\Infografis;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontpageController extends Controller
{
    public function home() {
        $infografis = Infografis::get();
        $faqs = Faqs::get();
        return view("front.main", [
            'page' => "Home",
            'infografis' => $infografis,
            'faqs' => $faqs
        ]);
    }

    public function cek() {
        $currentURL = url()->full();
        $components = parse_url($currentURL);
        $ektp = null;
        if(isset($components['query'])) {
            parse_str($components['query'], $results);
            if($results['tipe'] == "nik" && $results['value'] != null ) {
                $ektp = Ektp::where('nik', $results['value'])->where('nik', '!=', null)->first();
            }
            elseif($results['tipe'] == "nama" && $results['value'] != null ) {
                $ektp = Ektp::where('nama', $results['value'])->where('nama', '!=', null)->first();
            }

            if(!$ektp) {
                Session::flash('error', 'NIK atau Nama tidak ditemukan');
            }
        }

        return view("front.main", [
            'page' => "Cek",
            'ektp' => $ektp
        ]);
    }

    public function pengaduan() {
        return view("front.main", [
            'page' => "Pengaduan",
        ]);
    }

    public function status() {
        $currentURL = url()->full();
        $components = parse_url($currentURL);
        $pengaduan = null;
        if(isset($components['query'])) {
            parse_str($components['query'], $results);
            if($results['kode'] != "" && $results['kode'] != null ) {
                $pengaduan = Pengaduan::where('kode_pengaduan', $results['kode'])->where('kode_pengaduan', '!=', null)->first();
            }

            if(!$pengaduan) {
                Session::flash('error', 'Kode pengaduan tidak ditemukan');
            }
        }

        return view("front.main", [
            'page' => "Status",
            'pengaduan' => $pengaduan
        ]);
    }
}