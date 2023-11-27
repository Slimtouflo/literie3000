<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Marque;
use App\Models\Matelas;
use Illuminate\Http\Request;

class MatelasController extends Controller
{
    public function index() {
        return view('matelas/index', [
            'matelas' => Matelas::with('dimension','marque')->get(),
        ]);
    }

    public function create()
    {
        return view('matelas/create', [
            'dimensions' => Dimension::all()->sortBy('size'),
            'marques' => Marque::all()->sortBy('name'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'prix'=>'required',
        ]);

        $lit = new Matelas();
        $lit->marque_id = $request->marque_id;
        $lit->type = $request->type;
        $lit->dimension_id = $request->dimension_id;
        $lit->prix = $request->prix;
        $lit->promo = $request->promo;
        $lit->image = $request->image;
        $lit->save();

        return redirect('/matelas');
    }
}
