<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\pelanggan;
use App\Models\transaksi;
use App\Models\user;


class FikriController extends Controller
{
    //
    public function index(){
        $transaksi = transaksi::all();
        return view('transaksi',[
            'transaksi' => $transaksi
        ]);
    }


    public function search($key){
        $barang = barang::where('');
        return view('barang0129',[
            'barang' => $barang
        ]);
    }


    public function tambah(){
        $barang = barang::all();
        $pelanggan = pelanggan::all();
        return view('tambah-transaksi',[
            'barang' => $barang,
            'pelanggan' => $pelanggan
        ]);
        
    }

    public function edit($id){
        $barang = barang::all();
        $pelanggan = pelanggan::all();
        $transaksi = transaksi::all();
        return view('edit-transaksi',[
            'barang' => $barang,
            'pelanggan' => $pelanggan,
            'transaksi' => $transaksi
        ]);
    }

    public function update(Request $request, $id){
        transaksi::where('id', $id)->update([
            'id_pelanggan'=>$request->id_pelanggan,
            'id_barang'=>$request->id_
        ]);
    }

    public function destroy($id)
    {
        $transaksi = transaksi::where('id', $id)->first();
        $transaksi->delete();

        return redirect()->route('');
    }

}
