<?php

namespace App\Http\Controllers;

use App\Models\Ektp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EktpController extends Controller
{
    public function ektp() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::simplePaginate(10);
                return view("dashboard.main", [
                    'page' => "Ektp",
                    'logged_user' => $logged_user,
                    'ektp' => $ektp
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

    public function ektp_create() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                return view("dashboard.main", [
                    'page' => "Ektp",
                    'subpage' => "Create",
                    'logged_user' => $logged_user,
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

    public function ektp_store(Request $request) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $ektp = new Ektp($request->all());
                $ektp->status = "Sedang Dikonfirmasi";
                $ektp->kewarganegaraan = "WNI";
                $ektp->save();
                Session::flash('success', 'E-KTP berhasil disimpan');
                return redirect()->route('dashboard.ektp');
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

    public function ektp_edit($id_ektp) {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                return view("dashboard.main", [
                    'page' => "Ektp",
                    'subpage' => "Edit",
                    'logged_user' => $logged_user,
                    'ektp' => $ektp,
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

    public function ektp_update(Request $request, $id_ektp) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                $ektp->fill($request->all());
                $ektp->save();
                Session::flash('success', 'E-KTP berhasil diperbaharui');
                return redirect()->route('dashboard.ektp');
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

    public function ektp_delete($id_ektp) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                $ektp->delete();
                Session::flash('success', 'E-KTP berhasil dihapus');
                return redirect()->route('dashboard.ektp');
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

    public function ektp_process($id_ektp) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                $ektp->status = "Sedang Proses";
                $ektp->processed_at = date("Y-m-d H:i:s");
                $ektp->save();
                Session::flash('success', 'E-KTP telah diproses');
                return redirect()->route('dashboard.ektp');
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

    public function ektp_print_view($id_ektp) {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                return view("dashboard.main", [
                    'page' => "Ektp",
                    'subpage' => "Print",
                    'logged_user' => $logged_user,
                    'ektp' => $ektp,
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

    public function ektp_print_action(Request $request, $id_ektp) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                $ektp->status = "Selesai Dicetak";
                $ektp->printed_at = date("Y-m-d H:i:s");
                $ektp->nik = $request->get('nik');
                $ektp->save();
                Session::flash('success', 'E-KTP telah dicetak');
                return redirect()->route('dashboard.ektp');
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

    public function ektp_retrieve($id_ektp) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                $ektp->status = "Telah Diambil";
                $ektp->retrieved_at = date("Y-m-d H:i:s");
                $ektp->save();
                Session::flash('success', 'E-KTP telah diambil');
                return redirect()->route('dashboard.ektp');
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

    public function ektp_detail($id_ektp) {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $ektp = Ektp::find($id_ektp);
                return view("dashboard.main", [
                    'page' => "Ektp",
                    'subpage' => "Detail",
                    'logged_user' => $logged_user,
                    'ektp' => $ektp,
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