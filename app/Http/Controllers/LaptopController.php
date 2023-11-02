<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index() {
        $laptops = Laptop::all();
        return response()->json($laptops);
    }

    public function create(Request $request) {
        $request->validate([
            'kode_laptop' => 'required|unique:laptops',
            'merk' => 'required',
            'warna' => 'required',
            'harga' => 'required|intege'
        ]);

       $laptop->kode_laptop = $request->kode_laptop;
       $laptop->merk = $request->merk;
       $laptop->warna = $request->warna;
       $laptop->harga = $request->harga;

       $laptop->save();

       return response()->json("Laptop berhasil ditambahkan!");
    }

    public function show($id) {
        $laptop = Laptop::find($id);
        return response()->json($laptop);
    }

    public function update(Request $request, $id) {
        $laptop = Laptop::find($id);

        $request->validate([
            'kode_laptop' => 'required|unique:laptops',
            'merk' => 'required',
            'warna' => 'required',
            'harga' => 'required|intege'
        ]);

       $laptop->kode_laptop = $request->kode_laptop;
       $laptop->merk = $request->merk;
       $laptop->warna = $request->warna;
       $laptop->harga = $request->harga;

       $laptop->save();

       return response()->json($laptop);
        
    }

    public function delete($id) {
        $laptop = Laptop::find($id);
        $laptop->delete();
        return response()->json("Laptop berhasil dihapus!");
    }
}