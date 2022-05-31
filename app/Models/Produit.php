<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
     /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = ['nomProduit', 'prixUnitaire'];

    public function produits()
    {
        return $this->hasMany(LigneCommande::class);
    }
}
