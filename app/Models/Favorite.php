<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable=['user_id','place_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function place()
    {
        return $this->belongsTo('App\Models\Place','place_id');
    }
}
