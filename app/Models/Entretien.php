<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;

    protected $fillable = [
        'garage_id',
        'mobile_id',
        'date_entretien',
        'entretien',
        'cout'
    ];

    public function mobile()
    {
        return $this->belongsTo(Mobile::class, 'mobile_id');
    }

    public function garage()
    {
        return $this->belongsTo(Garage::class, 'garage_id');
    }
}
