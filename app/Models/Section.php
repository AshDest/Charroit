<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation'
    ];

    public function mobile()
    {
        return $this->hasMany(Mobile::class);
    }

}
