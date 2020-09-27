<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
    	'money'
    ];

    protected $attributes = [
        'money' => 0,
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function mercenaries()
    {
        return $this->hasMany('App\Models\Mercenary');
    }
}
