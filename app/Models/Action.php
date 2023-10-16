<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    public function user(){
        
        return $this->belongsTo(User::class, 'userTrai_id', 'id');
    }

    public function demande(){
        
        return $this->belongsTo(Demande::class, 'demande_id', 'id');
    }
}
