<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicituds";

    protected $fillable = ['state','user_id',];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
