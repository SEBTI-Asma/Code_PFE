<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdresseSource;
use App\Models\AdresseDestination;
use App\Models\Demande;
use App\Models\Departement;
use App\Models\SousDepartement;
use App\Models\Protocole;
use App\Models\Fluxe;
use App\Models\User;
use Livewire\Component;
use App\Http\Livewire\length;
use App\Models\Duree;


class Mesdemandes extends Component
{
    public $currentPage = PAGEMESDEMANDE;
    public $sauve_id_user;
    public $sauve_objet_demande;
    public $id_flux_duree;
    public $newFluxe = [];
    public $newAdresseSource = [];
    public $newAdresseDestination = [];
    public $newDuree = [];
    public $Departements = [];
    public $fluxeinformation = [] ;
    public $fluxeduree = [] ;
    public $fluxeadressesource = [] ;
    public $fluxeadressedestination = [] ;
    public $Sousdepartements = [];
    public $Protocoles = [];
    public $Users = [];
    public $Demandes = [];
    public $Fluxes = [];
    public $searchdemande = ""; //done
    public $filtredemandeur = ""; //done
    public $id_user11;
    public $id_user12;
    public $id_flux55;
    public $filtrevalideur = ""; //done
    public $filtreanalyseur = ""; //done
    public $filtrecodeur = ""; //done
    public $filtredepartement = ""; //done
    public $filtreetat = ""; //done
    public $filtretype = ""; //done
    public $filtreregle = ""; //done
    public $filtreprotocole = ""; //done
    public $filtredateapplication = ""; //pas le time
    public $filtredatedemande = ""; //done
    public $filtrechange = ""; //done
    public $filtrecategoriechange = ""; //done
    public $affichage = 0;
    public $trieordre = false;

    protected $rules= [
        'newFluxe.source'=> 'required',
        'newFluxe.justification'=> 'required',
        'newFluxe.destination'=> 'required',
        'newFluxe.description'=> 'required',
        'newFluxe.type_flux'=> 'required',
        'newFluxe.port'=> 'required|numeric|min:4',
        'newFluxe.regle_flux'=> 'required',
        'newFluxe.tcp_udp'=> 'required',
        'newFluxe.change_flux'=> 'required',
        'newFluxe.categorie_flux'=> 'required',
        'newFluxe.action'=> 'required',
        'newFluxe.departement_id'=> 'required',
        'newFluxe.sousdepartement_id'=> 'required',
    ];
    protected $messages= [
        'newFluxe.source.required'=> "La source du flux est requis",
        'newFluxe.justification.required'=> "La justification du flux est requis",
        'newFluxe.destination.required'=> "La destination du flux est requis",
        'newFluxe.description.required'=> "La description du flux est requis",
        'newFluxe.type_flux.required'=> "Le type de flux du flux est requis",
        'newFluxe.port.required'=> "Le port du flux est requis",
        'newFluxe.regle_flux.required'=> "La regle du flux du flux est requis",
        'newFluxe.tcp/udp.required'=> "Le protocole tcp/udp du flux est requis",
        'newFluxe.change_flux.required'=> "Le change du flux est requis",
        'newFluxe.categorie_flux.required'=> "La categorie du flux du flux est requis",
        'newFluxe.action.required'=> "L'action' du flux est requis",
    ];

    public function render()
    {
        $this->Departements = [];
        $this->Sousdepartements = [];
        $this->Protocoles = [];
        $this->Users = [];

        //logique pour charger les departements
        foreach(Departement::all() as $departement){
            array_push($this->Departements, ["dep_id"=>$departement->id, "dep_nom"=>$departement->nomd]);
        }   

        //logique pour charger les sous departements
        foreach(SousDepartement::all() as $sousdepartement){
            array_push($this->Sousdepartements, ["sdep_id"=>$sousdepartement->id, "sdep_nom"=>$sousdepartement->nomsd]);
        }   

        //logique pour charger les protocoles
        foreach(Protocole::all() as $protocole){
            array_push($this->Protocoles, ["pro_id"=>$protocole->id, "pro_nom"=>$protocole->nomp]);
        }

        //logique pour charger les utilisateurs
        foreach(User::all() as $user){
            array_push($this->Users, ["user_id"=>$user->id, "user_nom"=>$user->nom, "user_prenom"=>$user->prenom, "user_role"=>$user->role]);
        }
        //appliquer les filtres
        $demandequery = Demande::query();

        if($this->searchdemande != ""){
            $demandequery->where("objet_demande","LIKE","%". $this->searchdemande. "%");
        }
        
        if($this->filtretype != ""){
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where("type_flux",$this->filtretype);
            $this->affichage=1;
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }
        if($this->filtreregle != ""){
            
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where("regle_flux",$this->filtreregle);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }
        if($this->filtreetat != ""){
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where("regle_flux",$this->filtreetat);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }
        if($this->filtrechange != ""){
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where("change_flux",$this->filtrechange);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }
        if($this->filtrecategoriechange != ""){
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where("change_flux",$this->filtrecategoriechange);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }
        if($this->filtredatedemande != ""){
            //dd($this->filtredatedemande);
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->whereBetween('created_at',[$this->filtredatedemande.' 00:00:00',$this->filtredatedemande.' 23:59:59']);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }

        if($this->filtredepartement != ""){
            //dd($this->filtredatedemande);
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where('departement_id',$this->filtredepartement);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }

        if($this->filtreprotocole != ""){
            //dd($this->filtredatedemande);
            $tableau = DB::table('demandes')
            ->join('fluxes', 'demandes.id', '=', 'fluxes.demande_id')
            ->select('demandes.*', 'fluxes.*')
            ->get();
            $fluxequery = $tableau->where('departement_id',$this->filtreprotocole);
            $this->affichage=1;
            
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu"); 
        }

        if($this->filtredemandeur != ""){
            foreach($this->Users as $user11){
                if($user11["user_nom"]." ".$user11["user_prenom"]===$this->filtredemandeur){
                    $id_user11=$user11["user_id"];
                }
            }
            $tableau = DB::table('demandes')
            ->get();
            $fluxequery = $tableau->where("user_id",'=',$id_user11);
            $this->affichage=1;
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu");
        }

        if($this->filtreanalyseur != ""){
            
            foreach($this->Users as $user12){
                if($user12["user_nom"]." ".$user12["user_prenom"]===$this->filtreanalyseur){
                    $id_user12=$user12["user_id"];
                }
            }
            
            $tableau = DB::table('actions')
            ->join('demandes', 'actions.demande_id', '=', 'demandes.id')
            ->select('actions.*', 'demandes.*')
            ->get();
            
            $fluxequery = $tableau->where("equipeUser",'=',1)->where("userTrai_id",'=',$id_user12);
            
            $this->affichage=1;
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu");
        }

        if($this->filtrevalideur != ""){
            
            foreach($this->Users as $user12){
                if($user12["user_nom"]." ".$user12["user_prenom"]===$this->filtrevalideur){
                    $id_user12=$user12["user_id"];
                }
            }
            $tableau = DB::table('actions')
            ->join('demandes', 'actions.demande_id', '=', 'demandes.id')
            ->select('actions.*', 'demandes.*')
            ->get();
            dd($tableau);
            $fluxequery = $tableau->where("equipeUser",'=',1)->where("userTrai_id",'=',$id_user12);
            
            $this->affichage=1;
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu");
        }

        if($this->filtrecodeur != ""){
            
            foreach($this->Users as $user12){
                if($user12["user_nom"]." ".$user12["user_prenom"]===$this->filtrecodeur){
                    $id_user12=$user12["user_id"];
                }
            }
            $tableau = DB::table('actions')
            ->join('demandes', 'actions.demande_id', '=', 'demandes.id')
            ->select('actions.*', 'demandes.*')
            ->get();
            
            $fluxequery = $tableau->where("equipeUser",'=',1)->where("userTrai_id",'=',$id_user12);
            
            $this->affichage=1;
            return view('livewire.mesdemandes.index',[ 
                "mesdemandesfiltre"=> $fluxequery
            ])
            ->extends("layouts.acceuil")
            ->section("contenu");
        }

        if ($this->affichage==0){
            if ($this->trieordre==false){
                return view('livewire.mesdemandes.index',[ 
                    "mesdemandes"=> $demandequery->latest()->paginate(30)
                    ])
                    ->extends("layouts.acceuil")
                    ->section("contenu");
            }
            if ($this->trieordre==true){
                return view('livewire.mesdemandes.index',[ 
                    "mesdemandes"=> $demandequery->oldest()->paginate(30)
                    ])
                    ->extends("layouts.acceuil")
                    ->section("contenu");
            }
        }

        

    }
    public function confirmAjoutDemande($id)
    {
        $this->dispatchBrowserEvent("showAjoutdemande",["message"=>[
            "title" => "Entrez l'objet de votre Demande",
            "type" => 'warning',
            "data" => [
                "user_id" => $id,
            ]
        ]]);
    }

    public function ajouterObjet($id,$value)
    {
        $this->sauve_id_user = $id;
        $this->sauve_objet_demande = $value;
        $this->currentPage = PAGECREATDEMANDE;

        $this->populate();
    }

    public function populate()
    {
        $this->Departements = [];
        $this->Sousdepartements = [];
        $this->Protocoles = [];

        //logique pour charger les departements
        foreach(Departement::all() as $departement){
            array_push($this->Departements, ["dep_id"=>$departement->id, "dep_nom"=>$departement->nomd]);
        }   

        //logique pour charger les sous departements
        foreach(SousDepartement::all() as $sousdepartement){
            array_push($this->Sousdepartements, ["sdep_id"=>$sousdepartement->id, "sdep_nom"=>$sousdepartement->nomsd]);
        }   

        //logique pour charger les protocoles
        foreach(Protocole::all() as $protocole){
            array_push($this->Protocoles, ["pro_id"=>$protocole->id, "pro_nom"=>$protocole->nomp]);
        }   
    }

    public function addDemande()
    {
        $demande = new Demande;
        $demande->user_id = $this->sauve_id_user;
        $demande->status = 2;  // vient d'etre soumise
        $demande->archivee = 0;
        $demande->objet_demande = $this->sauve_objet_demande;
        $demande->suivi = 0;
        $demande->annulee = 0;
        $demande->save();

        $validationAttributes = $this->validate();
        
        $validationAttributes["newFluxe"]["demande_id"] = $demande->id;
        $validationAttributes["newFluxe"]["protocole_id"] = rand(1,4);
        $validationAttributes["newFluxe"]["duree_id"] = rand(0,1);


        Fluxe::create($validationAttributes["newFluxe"]);

        $address = new AdresseSource();
        $address->fluxe_id = Fluxe::latest()->value('id');
        $address->adresse = $this->newAdresseSource['adresse'];
        $address->save();

        $address1 = new AdresseDestination();
        $address1->fluxe_id = Fluxe::latest()->value('id');
        $address1->adresse = $this->newAdresseDestination['adresse'];
        $address1->save();

        $address2 = new Duree();
        $address2->mois = $this->newDuree['mois'];
        $address2->semaines = $this->newDuree['semaines'];
        $address2->jours = $this->newDuree['jours'];
        $address2->save();

        Fluxe::find(Fluxe::latest()->value('id'))->update([
            'duree_id' => Duree::latest()->value('id'),
        ]);

        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Demande soumise avec succès"]);
        redirect('/mesDemades');
    }

    public function appliquerFilters(){
        
        $this->render();

    }

    public function opendemande($id){
        $this->currentPage = PAGECONSULTERDEMANDE;
        foreach(Fluxe::all() as $fluxe){
            if($fluxe->demande_id==$id){
                array_push($this->fluxeinformation, ["flux_id"=>$fluxe->id, "dem_id"=>$fluxe->demande_id, "source_flux"=>$fluxe->source,
                "destination_flux"=>$fluxe->destination, "port_flux"=>$fluxe->port,"type_flux"=>$fluxe->type_flux, 
                "regle_flux"=>$fluxe->regle_flux, "chang_flux"=>$fluxe->change_flux, "categorie_flux"=>$fluxe->categorie_flux,
                "tcp_udp"=>$fluxe->tcp_udp, "protocole_id"=>$fluxe->protocole_id, "departement_id"=>$fluxe->departement_id,
                "sousdepartement_id"=>$fluxe->sousdepartement_id, "action"=>$fluxe->action,"duree_id"=>$fluxe->duree_id,
                "description"=>$fluxe->description, "justification"=>$fluxe->justification, "created_at"=>$fluxe->created_at]);
            }
        }
        
        foreach($this->fluxeinformation as $fluxduree111){
            $id_flux_duree = $fluxduree111['duree_id'];
        }
        foreach(Duree::all() as $duree){
            if($duree->id==$id_flux_duree){
                array_push($this->fluxeduree, ["mois"=>$duree->mois, "semaines"=>$duree->semaines,
                "jours"=>$duree->jours]);
            }
        }
        foreach($this->fluxeinformation as $flux){
            foreach(AdresseSource::all() as $adresseS){
                if($adresseS->fluxe_id==$flux['flux_id']){
                    array_push($this->fluxeadressesource, ["adresse"=>$adresseS->adresse]);
                }
            }
        }
        foreach($this->fluxeinformation as $flux1){
            foreach(AdresseDestination::all() as $adresseD){
                if($adresseD->fluxe_id==$flux1['flux_id']){
                    array_push($this->fluxeadressedestination, ["adresse"=>$adresseD->adresse]);
                }
            }
        }
       
        
    }

    public function confirmAnnulerDemande($id){
        $this->dispatchBrowserEvent("showConfirmMessage",["message"=>[
            "title" => "Voulez-vous Annuler la demande?",
            "type" => 'warning',
            "data" => [
                "demande_id" => $id
            ]
        ]]);
    }

    public function annuler($id){
        Demande::find($id)->update([
            'annulee' => 1,
        ]);
        
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"La demande a été annulée"]);
        redirect('/mesDemades');
        
    }

    public function confirmArchiverDemande($id){
        
        $this->dispatchBrowserEvent("showConfirmMessage1",["message"=>[
            "title" => "Voulez-vous Archiver la demande?",
            "type" => 'warning',
            "data" => [
                "demande_id" => $id
            ]
        ]]);
    }

    public function archiver($id){
        Demande::find($id)->update([
            'archivee' => 1,
        ]);
        
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"La demande a été archivée"]);
        
    }
    public function ordonner(){
        if($this->trieordre == true)
        {
            $this->trieordre = false;
            //dd($this->trieordre);
            $this->render();
            //dd($this->trieordre);
        }
        if($this->trieordre == false)
        {
            $this->trieordre = true;
            $this->render();
            // dd('hhhh');
        }
        
    }
}
