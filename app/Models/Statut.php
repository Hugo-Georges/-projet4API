<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = ['libstatuts'];

    public function statuts()
    {
        return $this->hasMany(Commande::class);
    }
}
