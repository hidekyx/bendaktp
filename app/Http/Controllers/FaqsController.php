<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FaqsController extends Controller
{
    public function faqs() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $faqs = Faqs::simplePaginate(10);
                return view("dashboard.main", [
                    'page' => "Faqs",
                    'logged_user' => $logged_user,
                    'faqs' => $faqs
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

    public function faqs_create() {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                return view("dashboard.main", [
                    'page' => "Faqs",
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

    public function faqs_store(Request $request) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $faqs = new Faqs($request->all());
                $faqs->save();
                Session::flash('success', 'FAQS berhasil disimpan');
                return redirect()->route('dashboard.faqs');
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

    public function faqs_edit($id_faqs) {
        if (Auth::check()) {
            $logged_user = Auth::user();
            if(Auth::user()->role->nama == "Admin") {
                $faqs = Faqs::find($id_faqs);
                return view("dashboard.main", [
                    'page' => "Faqs",
                    'subpage' => "Edit",
                    'logged_user' => $logged_user,
                    'faqs' => $faqs,
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

    public function faqs_update(Request $request, $id_faqs) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $faqs = Faqs::find($id_faqs);
                $faqs->fill($request->all());
                $faqs->save();
                Session::flash('success', 'FAQS berhasil diperbaharui');
                return redirect()->route('dashboard.faqs');
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

    public function faqs_delete($id_faqs) {
        if (Auth::check()) {
            if(Auth::user()->role->nama == "Admin") {
                $faqs = Faqs::find($id_faqs);
                $faqs->delete();
                Session::flash('success', 'FAQS berhasil dihapus');
                return redirect()->route('dashboard.faqs');
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