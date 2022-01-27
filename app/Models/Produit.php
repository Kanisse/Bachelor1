<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

   
    protected $hidden=["id","created_at","updated_at"];

    public function categorie() {     
    return $this->belongsTo(Categorie::class); 
}

public function posts(){
    return $this->hasMany(posts::class);
}

public function factures(){
    $this->belongsToMany(Facture::class);
}

}


