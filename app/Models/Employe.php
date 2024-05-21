<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','email','departement','tacheRea'
        ];
    public function Tache() {
        return $this->belongsTo(Tache::class);
    }
   
}
