<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

     /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = ['libCommande', 'dateCreation', 'user_id', 'statuts_id'];

    public function commandes()
    {
        return $this->hasMany(LigneCommande::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statuts()
    {
        return $this->belongsTo(statuts::class);
    }
}

