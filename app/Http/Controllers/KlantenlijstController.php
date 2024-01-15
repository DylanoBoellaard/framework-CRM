<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klantenlijst;

class KlantenlijstController extends Controller
{
    public function view()
    {
        return view('klantenlijst');
    }

    public function create()
    {
        return view('klantenlijst-create');
    }

    public function store(Request $request)
    {
        //dd($request);

        $data = $request->validate([
            'Bedrijf' => 'required|numeric',
            'Bedrijfsnaam' => 'nullable|required_if:Bedrijf,1|string',
            'KVKNummer' => 'nullable|required_if:Bedrijf,1|string',
            'Voornaam' => 'nullable|required_if:Bedrijf,0|string',
            'Achternaam' => 'nullable|required_if:Bedrijf,0|string',
            'Straat' => 'nullable|required_if:Bedrijf,0|string',
            'Huisnummer' => 'nullable|required_if:Bedrijf,0|string',
            'Postcode' => 'nullable|required_if:Bedrijf,0|string',
            'Plaats' => 'nullable|required_if:Bedrijf,0|string',
            'Email' => 'nullable|required_if:Bedrijf,0|email',
            'Telefoonnummer' => 'nullable|required_if:Bedrijf,0|string',
            'Functie' => 'nullable|required_if:Bedrijf,0|string',
        ]);

        Klantenlijst::create($data);

        return redirect()->route('klantenlijst.view');
    }
}
