<?php

namespace App\Http\Controllers;
use App\Models\B_Keluar;
use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;

class BkeluarController extends Controller
{
    public function index()
    {
        $bkeluar = barang::with('barangs')->get();
        return view('admin.bkeluar.index', compact('bkeluar'));
    }
}
