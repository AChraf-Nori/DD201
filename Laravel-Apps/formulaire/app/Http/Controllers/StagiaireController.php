<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('welcome', ['stagiaires' => $stagiaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_stagiaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'nom' => 'required|string',
            'note' => 'required|numeric|min:0|max:20'
        ];

        $request->validate($rules);


       
        if($validator->fails()) {
            return redirect('/stagiaire/create')->with('errors', $validator->errors());
                    // return response()->json(['message' => $validator->errors()], 201);


        }

        $stagiaire = Stagiaire::create([
            'nom' => $request->nom,
            'genre' => $request->genre,
            'date_naissance' => $request->dateNaissance,
            'note' => $request->note,
            'groupe' => $request->groupe,

        ]);


        // return response()->json(['message' => $stagiaire], 201);
        // return redirect()->route('stagiaire.index');
        return redirect('/')->with('success', 'Patient Added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stagiaire = Stagiaire::find($id);
        // if($stagiaire) {
            $stagiaire->delete();
        // }
        return redirect('/')->with('success', 'Stagiaire deleted successfuly');
                // return response()->json(['id' => $id], 201);

    }
}
