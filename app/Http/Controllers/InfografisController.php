<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InfografisController extends Controller
{
    public function infografis() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin" || Auth::user()->role->nama == "Camat") {
                $infografis = Infografis::simplePaginate(10);
                return view("dashboard.main", [
                    'page' => "Infografis",
                    'logged_user' => $logged_user,
                    'infografis' => $infografis
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

    public function infografis_create() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                return view("dashboard.main", [
                    'page' => "Infografis",
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

    public function infografis_store(Request $request) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $infografis = new Infografis($request->all());

                $filenameWithExt = $request->file("file")->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file("file")->getClientOriginalExtension();
                $filenameSimpan = md5($filename. time()).'.'.$extension;
                $path = $request->file("file")->storeAs('public/infografis', $filenameSimpan);
                $infografis->file = $filenameSimpan;

                $infografis->save();
                Session::flash('success', 'Infografis berhasil disimpan');
                return redirect()->route('dashboard.infografis');
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

    public function infografis_edit($id_infografis) {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $infografis = Infografis::find($id_infografis);
                return view("dashboard.main", [
                    'page' => "Infografis",
                    'subpage' => "Edit",
                    'logged_user' => $logged_user,
                    'infografis' => $infografis,
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

    public function infografis_update(Request $request, $id_infografis) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $infografis = Infografis::find($id_infografis);
                $infografis->judul = $request->get('judul');

                if($request->file('file')) {
                    $filenameWithExt = $request->file("file")->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file("file")->getClientOriginalExtension();
                    $filenameSimpan = md5($filename. time()).'.'.$extension;
                    $path = $request->file("file")->storeAs('public/infografis', $filenameSimpan);
                    $infografis->file = $filenameSimpan;
                }

                $infografis->save();
                Session::flash('success', 'Infografis berhasil diperbaharui');
                return redirect()->route('dashboard.infografis');
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

    public function infografis_delete($id_infografis) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $infografis = Infografis::find($id_infografis);
                $infografis->delete();
                Session::flash('success', 'Infografis berhasil dihapus');
                return redirect()->route('dashboard.infografis');
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