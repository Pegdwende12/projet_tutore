<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{

    protected $table= 'etudiants';

    protected $primaryKey='id_etudiant';
    protected $fillable = ['nom_etudiant', 'prenom_etudiant', 'email_etudiant', 'password'];

    use HasFactory;

    public function niveau(){

     return  $this->belongsTo (niveau:: class ,'id_niveau');

    }

    public function publications()
    {
        return $this->hasMany(Publication::class,'id_etudiant');
    }

    public function connaissance()
    {
        return $this->belongsToMany(Connaissance::class, 'publications','id_etudiant','id_connaissance')->withPivot('date_publication');
    }
       public function appreciation()
       {
           return $this->hasMany(appreciation::class, 'id_appreciation');
       }


}
