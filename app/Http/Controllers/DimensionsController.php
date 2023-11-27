<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use Illuminate\Http\Request;

class DimensionsController extends Controller
{
    public function index()
    {
        return view('dimensions/index', [
            'dimensions' => Dimension::all(),
        ]);
    }

    public function create()
    {
        return view('dimensions/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required',
        ]);

        $dimension = new Dimension();
        $dimension->size = $request->size;
        $dimension->save();

        return redirect('/dimensions');
    }

    public function destroy($id)
    {
        $dimension = Dimension::FindOrFail($id);
        Dimension::destroy($id);
        return redirect('/dimensions');
    }
}
