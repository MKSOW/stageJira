<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    public function typeProjet() 
    {
        return $this->belongsTo(TypeProjet::class);
    } 
    public function EtatProjet() 
    {
        return $this->belongsTo(EtatProjet::class);
    }
    public function Employe() {
        return $this->hasOne(Employe::class);
    }
    protected $fillable = [ 'nom' ,'description','debut','fin','tacheProjet'];
}
