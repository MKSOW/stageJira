<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Employe;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $Taches=Tache::all();
        $Employes = Employe::all();  
        return view('Taches.index',compact('Taches','Employes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Taches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'debut' => 'required|min:3|max:255',
            'fin' => 'required|min:3|max:255',
            'tacheProjet' => 'required|min:3|max:255'
        ]);
        Tache::create($request->post());
        return redirect()->route('Taches.index')->with('status','Les taches ont été ajouter avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tache $Tache)
    {
         return view('Taches.show',['Tache'=>$Tache]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $Tach)

    {
        $Tache=Tache::find($Tach);
        return view('Taches.edit',['Tache'=>$Tache]);
        
       
        // echo "<pre>";
        // print_r($Tache);
        // echo "</pre> ";
        // echo $Tach;
    }

    /**
     * Update the specified resource in storage.
     */ 
    public function update(Request $request, $Tach)
    
    {
        $Tache=Tache::find($Tach);
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'debut' => 'required|min:3|max:255',
            'fin' => 'required|min:3|max:255',
            'tacheProjet' => 'required|min:3|max:255'

        ]);
        // $Tache->fill($request->post())->save();
        $Tache->update($request->all());
        return redirect()->route('Taches.index')->with('stutas','Les taches ont été ajouter avec sussès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tache $Tache)
    {
        $Tache->delete();
        //console.log("FIN DESTROY TASK");
        return redirect()->route('Taches.index');
    }
    
}
