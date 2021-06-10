<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    // ARCHIVIO PACCHETTI VIAGGI
    public function index() {
        //get all plans
        $plans = Plan::all();
        //dump($plans);

        return view('plans', compact('plans') );
    }
}
