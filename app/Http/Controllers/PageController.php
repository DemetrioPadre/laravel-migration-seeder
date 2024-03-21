<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('orario_di_partenza', today()->toDateString())->get();
        dd($trains);
        return view('home');
    }
}
