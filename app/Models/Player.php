<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $primaryKey = 'player_id';

    public function team()
    {
        return $this->belongsTo(\App\Models\Team::class, 'team_id');
    }
}
