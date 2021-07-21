<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Market;
use App\Models\Product;
use App\Models\Team;


class DashboardController extends Controller
{
    public function index(){
        $petugas = User::all()->count();
        $market = Market::all()->count();
        $product = Product::all()->count();
        $team = Team::all()->count();
        return view('admin.dashboard.index', compact('petugas','market','product','team'));
    }
}
