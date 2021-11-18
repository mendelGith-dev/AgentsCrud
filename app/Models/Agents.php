<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    protected $fillable = [ //la variable qui recupère les attribut 
        "nom",
        "postnom",
        "prenom",
        "username",
        "password",
        "zone_id",
        "grade",
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
