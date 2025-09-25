<?php

namespace App\Http\Controllers;


use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('packs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0', // Validation float/numeric
            'advantages' => 'required|string',    // Champ de la liste des avantages
            'image' => 'nullable|image|max:10548',
        ]);

        $pack = new Pack;
        $pack->name = $request->name;
        $pack->description = $request->description;
        $pack->price = $request->price;
        $pack->advantages = $request->advantages; // Sauvegarde de la liste brute

        // 2. Traitement de l'image (stockage classique)
        if ($request->hasFile('image')) {
            $imageName = Str::uuid()->toString() . '.' . $request->image->extension();
            // Assurez-vous que le dossier 'images/packs' existe dans public/
            $request->image->move(public_path('images/packs'), $imageName);
            $pack->image = $imageName;
        }

        // 3. Sauvegarde du pack
        $pack->save();

        // 4. Redirection
        return redirect()->route('dashboard')->with('success', 'Pack de services créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pack $pack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pack $pack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pack $pack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pack $pack)
    {
        Pack::destroy($pack);
    }
}
