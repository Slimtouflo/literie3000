<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function index()
    {
        return view('marques/index', [
            'marques' => Marque::all(),
        ]);
    }

    public function create()
    {
        return view('Marques/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
        ]);

        $marque = new Marque();
        $marque->name = $request->name;
        $marque->save();

        return redirect('/marques');
    }

    public function destroy($id)
    {
        $marque = Marque::FindOrFail($id);
        Marque::destroy($id);
        return redirect('/marques');
    }
}
