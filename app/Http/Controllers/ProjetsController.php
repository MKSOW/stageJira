<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Tache;
use App\Models\Employe;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Projets=Projet::all();
        $Taches = Tache::all();
        $Employes = Employe::all();  
        return view('Projets.index', compact('Projets','Taches','Employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Projets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'debut_projet' => 'required|min:3|max:255',
            'fin_projet' => 'required|min:3|max:255',
            'projetDePE' => 'required|min:3|max:255'

        ]);
        Projet::create($request->post());
        return redirect()->route('Projets.index')->with('status','l\'entreprise a été ajouter avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $Projet)
    {
        return view('Projets.show', ['Projet' => $Projet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $Projet)
    {
        return view('Projets.edit', ['Projet' => $Projet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $Projet)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'debut_projet' => 'required|min:3|max:255',
            'fin_projet' => 'required|min:3|max:255',
            'projetDePE' => 'required|min:3|max:255'

        ]);
        $Projet->update($request->post());
        return redirect()->route('Projets.index')->with('status','Le nom du Projet à été ajouter avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $Projet)
    {
        $Projet->delete();
        return redirect()->route('Projets.index');
    }
}
