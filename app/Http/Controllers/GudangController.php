<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    public function all()
    {
        $data['gudang'] = \App\Gudang::all();
        return view('gudang.all')->with($data);
    }
    public function add()
    {
        return view('gudang.add');
    }

    public function save(Request $r)
    {
        $gudang = new \App\Gudang;
        $gudang->alamat = $r->input('alamat');
        $gudang->kapasitas = $r->input('kapasitas');
        $gudang->save();

        return redirect()->route('all_gudang');
    }
    public function delete($id)
    {
        \App\Gudang::find($id)->delete();
        return redirect(url('gudang/all'));
    }
}

