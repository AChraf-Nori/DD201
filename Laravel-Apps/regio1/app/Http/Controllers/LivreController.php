<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{
    public function index() {
        $livres = Livre::all();
        return view('index')->with(['livres' => $livres]);
        // return response()->json($livres);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
       

        
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/livres', $imageName);

            Livre::create([
                "titre" => $request->input('titre'),
                "pages" => $request->input('pages'),
                "categorie_id" => intval($request->input('categorie_id')),
                "description" => $request->input('description'),
                "image" => $imageName,
            ]);

        }

        dd($path);
        // return redirect()->route('livre.index');
        // dd(['name' => $imageName]);
        // dd(intval($request->input('categorie_id')));
    }

    public function edit($id) {
        $livre = Livre::find($id);
        if($livre) {
            return view('livre.edit')->with(['livre' => $livre]);
        }
    }

    public function update(Request $request, $id) {



        $livre = Livre::find($id);
        if($livre) {
            $livre->update($request->all());
        }        
        
    }


    public function destroy($id) {

        $livre = Livre::findOrFail($id);
        $livre->delete();
        return redirect()->route('livre.index')->with('success', 'livre deleted successfully!');
    }
}
