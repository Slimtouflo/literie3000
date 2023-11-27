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
            'prix'=>'required|min:0',
            'promo' =>'min:0',
        ]);

        $lit = new Matelas();
        $lit->marque = $request->marque;
        $lit->type = $request->type;
        $lit->dimension = $request->dimension;
        $lit->prix = $request->prix;
        $lit->promo = $request->promo;
        $lit->image = $request->image;
        $lit->save();

        return redirect('/matelas');
    }

    public function show($id)
    {
        $matelas = Matelas::findorfail($id);

        return view('matelas/show', ['matelas' => $matelas]);
    }

    public function edit($id)
    {
        $matelas = Matelas::findOrFail($id);

        return view('matelas/edit', [
            'dimensions' => Dimension::all()->sortBy('size'),
            'marques' => Marque::all()->sortBy('name'),
            'matelas' => $matelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $lit = Matelas::findorfail($id);

        $request->validate([
            'type'=>'required',
            'prix'=>'required',
        ]);

        $lit->marque = $request->marque;
        $lit->type = $request->type;
        $lit->dimension = $request->dimension;
        $lit->prix = $request->prix;
        $lit->promo = $request->promo;
        $lit->image = $request->image;
        $lit->save();

        return redirect('/matelas');
    }

    public function destroy($id)
    {
        $matelas = Matelas::findOrFail($id);
        
        Matelas::destroy($id);

        return redirect('/matelas');
    }
}
