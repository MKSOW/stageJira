<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public function Tache() {
        return $this->hasMany(Tache::class);
    }
    protected $fillable = [
        'nom','description','debut_projet','fin_projet','projetDePE'
    ];
}
