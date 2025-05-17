<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublikasiMandiri;

class PublikasiController extends Controller
{

    public function index()
    {
        $mandiri = PublikasiMandiri::latest()->paginate(10);
        return view('pages.publication', compact('mandiri'));
    }

}
