<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Waardes extends Controller {

    public function view() {
        $data = DB::table('sensor_1')->get();
        return view('dashboard', ['data' => $data]);
    }
}
