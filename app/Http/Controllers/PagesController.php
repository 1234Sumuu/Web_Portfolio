<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\About;
use App\Models\Service;
use App\Models\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        // $services = Service::all();
        // $portfolios = Portfolio::all();
        // $abouts = About::all();
        return view('pages.index', compact('main'));
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    // public function main(){
    //     return view('pages.main');
    // }
}
