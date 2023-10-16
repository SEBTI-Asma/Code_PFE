<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nom',
        'email',
        'password',
        'prenom',
        'telephone',
        'departement_id',
        'sous_departement_id',
        'role',
        'droit',
        'active',
        'photo',
        'user_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function departement(){

        return $this->belongsTo(Departement::class, "departement_id", "id");
    }

    public function sousdepartement(){

        return $this->belongsTo(SousDepartement::class, "sous_departement_id", "id");
    }

    public function demande(){

        return $this->hasMany(Demande::class);
    }

    public function action(){

        return $this->hasMany(Action::class);
    }

    public function hasRole($role){

        if ($this->role == $role){
            return true;
        }
        else{
            return false;
        }
    }

    public function hasDroit($droit){

        if ($this->droit == $droit){
            return true;
        }
        else{
            return false;
        }
    }

}
