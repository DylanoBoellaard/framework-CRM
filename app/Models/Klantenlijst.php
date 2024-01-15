<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klantenlijst extends Model
{
    use HasFactory;

    protected $fillable = [
        'Bedrijf',
        'Bedrijfsnaam',
        'KVKNummer',
        'Voornaam',
        'Achternaam',
        'Straat',
        'Huisnummer',
        'Postcode',
        'Plaats',
        'Email',
        'Telefoonnummer',
        'Functie',
    ];
}
