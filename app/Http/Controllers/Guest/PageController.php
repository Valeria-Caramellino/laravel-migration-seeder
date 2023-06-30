<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $links = config('store.someLinks');

        $trains = Train::all();

        return view('welcome', compact('links','trains'));  
    }
   
    public function other(){
        $links = config('store.someLinks');

        $trains = Train::all();

        return view('other', compact('links','trains'));  
    }
}
