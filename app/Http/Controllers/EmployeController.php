<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Employes=Employe::All();
        return view('Employe.index',['Employe'=>$Employes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'prenom' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'departement' => 'required|min:3|max:255',
            'tacheRea' => 'required|min:3|max:255'

        ]);
        Employe::create($request->post());
        return redirect()->route('Employe.index')->with('status','Les employes ont été ajouter avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $Employe)
    {
        return view('Employe.show',['Employe' => $Employe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $Employe)
    {
        return view('Employe.edit',['Employe'=>$Employe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $Employe)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'prenom' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'departement' => 'required|min:3|max:255',
            'tacheRea' => 'required|min:3|max:255'

        ]);
        $Employe->update($request->all());
        return redirect()->route('Employe.index')->with('status','Les employes ont été ajouter avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $Employe)
    {
        $Employe->delete();
        return redirect()->route('Employe.index');
    }
}
