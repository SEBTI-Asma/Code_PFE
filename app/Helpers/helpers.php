<?php
use Illuminate\Support\Str;
use App\Models\Demande;

define("PAGEMESDEMANDE", "mesdemandes");
define("PAGECREATDEMANDE", "formulaire_demande");
define("PAGECONSULTERDEMANDE", "consulterdemande");
define("PAGECONSULTERDEMANDEARCHIVE", "consulterdemandearchive");
define("PAGEARCHIVE", "achives");
define("PAGEDEMANDERECUES", "demandesrecues");
define("PAGECONSULTERDEMANDERECUES", "consulterdemanderecues");

function userFullName(){
    return auth()->user()->prenom." ".auth()->user()->nom;
}

function userTeam(){
    if (auth()->user()->role==0)
        return ('Demandeur');
    else{
        if (auth()->user()->role==1)
            return ('Analyseur');
        else{
            if (auth()->user()->role==2)
                return ('Valideur');
            else{
                if (auth()->user()->role==3)
                    return ('Codeur');
            }
                
        }
            
    
    }
    
}

function userrole($user){
    if ($user->role==0)
        return ('Demandeur');
    else{
        if ($user->role==1)
            return ('Analyseur');
        else{
            if ($user->role==2)
                return ('Valideur');
            else{
                if ($user->role==3)
                    return ('Codeur');
            }
                
        }
            
    
    }
    
}

function fluxdepartement($id){
    if ($id==0)
        return ('Achat');
    else{
        if ($id==1)
            return ('DSI');
        else{
            if ($id==2)
                return ('Opération');
            else{
                if ($id==3)
                    return ('RH');
                else{
                    if ($id==4)
                        return ('SIMEX');
                }
            }
                
        }
    }
    
}

function fluxsousdepartement($id){
    if ($id==0)
        return ('Architecture');
    else{
        if ($id==1)
            return ('Business Partener/BMO');
        else{
            if ($id==2)
                return ('Etudes');
            else{
                if ($id==3)
                    return ('Infrastructure Réseau & Telecom');
                else{
                    if ($id==4)
                        return ('Production Support Technique');
                    else
                        if($id==5)
                            return ('Sécurité & Risque IT');
                }
            }
                
        }
    }
    
}

function fluxprotocole($id){
    if ($id==0)
        return ('HTTP');
    else{
        if ($id==1)
            return ('HTTPS');
        else{
            if ($id==2)
                return ('ICMP');
            else{
                if ($id==3)
                    return ('SMTP');
            }
                
        }
    }
    
}

function userdroit($user){
    if ($user->droit==0)
        return ('Simple');
    else{
        if ($user->droit==1)
            return ('Admin');
                
        }
            
    
    }

function setMenuClass($route, $classe){
    $routeActuel = request()->route()->getName();

    if(contains($routeActuel, $route) ){
        return $classe;
    }
    return "";
}

function contains($container, $contenu){
    return Str::contains($container, $contenu);
}

function setMenuActive($route){
    $routeActuel = request()->route()->getName();

    if($routeActuel === $route ){
        return "active";
    }
    return "";
}

function statusdemande($id){
    return Demande::find($id)->status;
}