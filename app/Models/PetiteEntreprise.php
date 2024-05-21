<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Models/PetiteEntreprise.php;

class PetiteEntreprise extends Model
{
    use HasFactory;
    public function Projet() {
        return $this->hasMany(Projet::class);

    }
    public function Employe() 
    {
        return $this->hasMany(Employe::class,);
    }
    protected $fillable = [
        'nom','description'//,'listeProjets'
    ];
}
