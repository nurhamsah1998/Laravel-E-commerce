<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.page.dashboard');
    }
    public function list_product()
    {
        return view('admin.page.produk');
    }
    public function setting()
    {
        return view('admin.page.pengaturan');
    }
}
