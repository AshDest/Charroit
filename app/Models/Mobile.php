<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'num_chassis',
        'marque',
        'couleur',
        'anneefabrication',
        'kilometrage',
        'rest_km',
        'nbre_entretien',
        'intervalle',
        'type_id',
        'section_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
    public function typemobile()
    {
        return $this->belongsTo(Type_Mobile::class, 'type_id');
    }
}
