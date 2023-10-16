<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fluxe extends Model
{
    use HasFactory;
    protected $fillable = [
        'source',
        'demande_id',
        'destination',
        'port',
        'type_flux',
        'regle_flux',
        'change_flux',
        'categorie_flux',
        'tcp_udp',
        'protocole_id',
        'departement_id',
        'sousdepartement_id',
        'action',
        'duree_id',
        'description',
        // 'chemin_description',
        'justification',
        // 'chemin_justification'
    ];
    public function demande(){
        
        return $this->belongsTo(Demande::class, "demande_id", "id");
    }

    public function adressesource(){
        
        return $this->hasMany(AdresseSource::class);
    }

    public function adressedestination(){
        
        return $this->hasMany(AdresseDestination::class);
    } 

    public function protocole(){
        
        return $this->belongsTo(Protocole::class, "protocole_id", "id");
    }

    public function departement(){
        
        return $this->belongsTo(Departement::class, "departement_id", "id");
    }

    public function sousdepartement(){
        
        return $this->belongsTo(SousDepartement::class, "sousdepartement_id", "id");
    }

    public function duree(){
        
        return $this->belongsTo(Duree::class, "duree_id", "id");
    }
}
