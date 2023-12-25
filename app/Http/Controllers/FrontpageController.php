<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use App\Models\Infografis;

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
}