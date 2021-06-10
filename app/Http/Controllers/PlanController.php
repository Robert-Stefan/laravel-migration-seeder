<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    // ARCHIVIO PACCHETTI VIAGGI
    public function index() {
        return view('plans');
    }
}
