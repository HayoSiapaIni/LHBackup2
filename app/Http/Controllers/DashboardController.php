<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('seller/Dashboard');
    }
    public function navbar()
    {
        return view('partials/navbar');
    }
    public function kategori()
    {
        return view('seller/Kategori');
    }
    public function produk()
    {
        return view('seller/Produk');
    }

}
