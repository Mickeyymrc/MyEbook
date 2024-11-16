<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\User;

use Illuminate\Http\Request;

use App\Http\Requests\LivreRequest;

use Illuminate\Support\Facades\Storage;



class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function util(){

        $users = User::all();
        return view('utilisateur', compact('users'));
    }

    public function voirLivre(Livre $livre){
        $livres = Livre::oldest()->get();
        return view('showBooks', compact('livres'));
    }

    public function index()
    {
        $users = User::all();
        return view('utilisateur', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("form");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LivreRequest $request)
    {
        //
        $formFields = $request -> validated();

        $formFields['image'] = $request->file('image')->store('profile','public');



        $formFields['pdf_file'] = $request->file('pdf_file')->store('pdfs', 'public');


         // Creating Livre instance
         Livre::create($formFields);

        return redirect()->route('livre');

    }

    public function download($id)
    {
        $livre = Livre::find($id);

        if (!$livre) {
            return redirect()->back()->with('error', 'Livre not found');
        }

        $filePath = $livre->pdf_file;

        if (!Storage::disk('public')->exists($filePath)) {
            return redirect()->back()->with('error', 'File not found');
        }

        return Storage::disk('public')->download($filePath);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('utilisateurs')->with('success', 'Livre supprimé avec succès.');
        }

        return redirect()->route('utilisateurs')->with('error', 'Livre non trouvé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }



    public function voirLivresRomance()
    {
        $livres = Livre::where('genre', 'romance')->get();
        return view('romanceBooks', compact('livres'));
    }


    public function voirLivresFantaisie(){
        $livres = Livre::where('genre', 'fantaisie')->get();
        return view('fantaisieBooks', compact('livres'));
    }

    public function voirLivresScience(){
        $livres = Livre::where('genre', 'science et fiction')->get();
        return view('scienceBooks', compact('livres'));
    }
    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Livre $livre)
    // {
    //     //
    // }
}
