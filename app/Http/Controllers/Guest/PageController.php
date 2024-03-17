<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index(){
        $trains = Train::All();
        return view('welcome', compact('trains'));
    }
    public function filter(Request $request){

        $filteredTrains = Train::where('Data_Partenza', '>=' ,Carbon::today())->get();

        return view('about', compact('filteredTrains'));
    }
}
