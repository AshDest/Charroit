<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prelevement extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile_id',
        'kilometre',
        'dateprelevement',
    ];

    public function mobile()
    {
        return $this->belongsTo(Mobile::class, 'mobile_id');
    }
}
