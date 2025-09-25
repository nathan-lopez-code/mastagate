<?php

namespace App\Http\Controllers;


use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255|unique:packs,name',
            'description'   => 'nullable|string',
            'price'         => 'nullable|numeric|min:0',
            'advantages'    => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB

            // Les bool
            'active'        => 'boolean',
            'is_trending'   => 'boolean',
            'is_quotation'  => 'boolean',
        ], [
            // Messages d'erreur personnalisés
            'name.required'     => 'Le nom du pack est obligatoire.',
            'name.unique'       => 'Ce nom de pack existe déjà.',
            'advantages.required' => 'La liste des avantages est obligatoire.',
            'price.numeric'     => 'Le prix doit être un nombre.',
            'image.image'       => "Le fichier doit être une image.",
        ]);

        // 2. Gestion du Téléversement de l'Image (si présente)
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Stocke l'image dans le dossier 'public/packs'
            $imagePath = $request->file('image')->store('packs', 'public');
        }

        // 3. Création du Pack
        $pack = Pack::create([
            'name'          => $validatedData['name'],
            'description'   => $validatedData['description'],
            // Si 'is_quotation' est coché, le prix sera null dans la BDD
            'price'         => $request->input('is_quotation') ? null : $validatedData['price'],
            'advantages'    => $validatedData['advantages'],
            'image'         => $imagePath,

            'active'        => $request->boolean('active'),
            'is_trending'   => $request->boolean('is_trending'),
            'is_quotation'  => $request->boolean('is_quotation'),
        ]);

        // 4. Redirection et Message de Succès
        return redirect()->route('dashboard') // Assurez-vous d'avoir une route 'index' pour les packs
        ->with('success', 'Le Pack de Services "'.$pack->name.'" a été créé avec succès.');
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
        // Passe l'instance du pack à la vue d'édition
        return view('packs.edit', compact('pack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pack $pack)
    {
        $validatedData = $request->validate([
            'name'          => [
                'required',
                'string',
                'max:255',
                Rule::unique('packs')->ignore($pack->id),
            ],
            'description'   => 'nullable|string',
            'price'         => 'nullable|numeric|min:0',
            'advantages'    => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active'        => 'boolean',
            'is_trending'   => 'boolean',
            'is_quotation'  => 'boolean',
        ], [
            'name.required'     => 'Le nom du pack est obligatoire.',
            'name.unique'       => 'Ce nom de pack existe déjà.',
            'advantages.required' => 'La liste des avantages est obligatoire.',
            'price.numeric'     => 'Le prix doit être un nombre.',
            'image.image'       => "Le fichier doit être une image.",
        ]);

        // 2. Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprime l'ancienne image si elle existe
            if ($pack->image) {
                Storage::disk('public')->delete($pack->image);
            }
            // Stocke la nouvelle image
            $imagePath = $request->file('image')->store('packs', 'public');
        } else {
            // Conserve l'image existante si aucune nouvelle n'est fournie
            $imagePath = $pack->image;
        }

        // 3. Mise à jour du Pack
        $pack->update([
            'name'          => $validatedData['name'],
            'description'   => $validatedData['description'],
            'price'         => $request->boolean('is_quotation') ? null : $validatedData['price'],
            'advantages'    => $validatedData['advantages'],
            'image'         => $imagePath,
            'active'        => $request->boolean('active'),
            'is_trending'   => $request->boolean('is_trending'),
            'is_quotation'  => $request->boolean('is_quotation'),
        ]);

        // 4. Redirection avec un message de succès
        return redirect()->route('dashboard')
            ->with('success', 'Le Pack de Services "'.$pack->name.'" a été mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pack $pack)
    {

        // Supprime l'article
        $nom_pack= $pack->name;
        $pack->delete();

        // Redirection après la suppression
        return redirect()->route('dashboard')->with('success', 'pack '.$nom_pack.' supprimé avec succes!' );
    }
}
