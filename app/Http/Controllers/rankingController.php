<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rankingController extends Controller
{
    public function ranking() {
        return view ('WEB.ranking.ranking');
    }
}
