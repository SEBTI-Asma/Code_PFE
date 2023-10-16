<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Utilisateurs extends Component
{
    use WithPagination;
    public $newUser=[];
    public $activeuser;
    public $r;
    public $pwd;

    protected $rules= [
        'newUser.nom'=> 'required',
        'newUser.prenom'=> 'required',
        'newUser.email'=> 'required|email|unique:users,email',
        'newUser.user_name'=> 'required|unique:users,user_name', //rajouter le role en obligatoire
        'newUser.role'=> 'required', 
        'newUser.droit'=> 'required',
    ];
    protected $messages= [
        'newUser.nom.required'=> "Le nom de l'utilisateur est requis",
        'newUser.prenom.required'=> "Le nom de l'utilisateur est requis",
        'newUser.role.required'=> "Le role de l'utilisateur est requis",
        'newUser.droit.required'=> "Le droit de l'utilisateur est requis",
        'newUser.email.required'=> "L'email de l'utilisateur est requis",
        'newUser.user_name.required'=> "Le nom d'utilisateur est requis",
    ];
    public function render()
    {
        return view('livewire.utilisateurs.utilisateurs',[
            "users"=> User::latest()->paginate(20)
        ])

        ->extends("layouts.acceuil")
        ->section("contenu");
    }

    public function addUser()
    {
        

        //vérifier les informations envoyées par le formulaire sont correctes 
        $validationAttributes= $this->validate();

        $validationAttributes["newUser"]["password"] = Hash::make('password');
        $validationAttributes["newUser"]["telephone"] = 1111345;
        $validationAttributes["newUser"]["departement_id"] = rand(1,3);
        $validationAttributes["newUser"]["sous_departement_id"] = rand(1,3);
        $validationAttributes["newUser"]["active"] = 0;
        $validationAttributes["newUser"]["photo"] = "";
        //Ajouter un nouvel utilisateur
        User::create($validationAttributes["newUser"]);

        $this->newUser=[];

        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Utilisateur ajouté avec succés"]);
    }
    public function confirmDesactiver($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage",["message"=>[
            "text" => "Vous pouvez réactiver l'utilisateur via la corbeille",
            "title" => "Voulez-vous Désactiver $name ?",
            "type" => 'warning',
            "data" => [
                "user_id" => $id
            ]
        ]]);
    }
    public function desactiverUser($id){
        
        User::find($id)->update([
            'active' => 1,
        ]);
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Utilisateur désactivé avec succés"]);
        
    }
    public function confirmAdmin($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessageSimple",["message"=>[
            "title" => "Voulez-vous rendre l'utilisateur $name Simple?",
            "type" => 'warning',
            "data" => [
                "user_id" => $id
            ]
        ]]);
    }
    public function adminUser($id){
        
        User::find($id)->update([
            'droit' => 1,
        ]);
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"L'utilisateur est désormais Admin"]);
        
    }
    public function confirmSimple($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessageAdmin",["message"=>[
            "title" => "Voulez-vous rendre l'utilisateur $name Admin?",
            "type" => 'warning',
            "data" => [
                "user_id" => $id
            ]
        ]]);
    }
    public function simpleUser($id){
        
        User::find($id)->update([
            'droit' => 0,
        ]);
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"L'utilisateur est désormais Simple"]);
        
    }
    public function confirmRole($id){
        $this->dispatchBrowserEvent("showChangeRole",["message"=>[
            "type" => 'warning',
            "data" => [
                "user_id" => $id
            ]
        ]]);
    }
    public function changerRole($id,$rol){

        if ($rol==='demandeur')
            $this->r=0;
        else{
            if ($rol==='analyseur')
                 $this->r=1;
            else{
                if ($rol==='valideur')
                    $this->r=2;
                else{
                    if ($rol==='codeur')
                        $this->r=3;
                }
                    
            }
        }
        
        User::find($id)->update([
            'role'=>$this->r,
        ]);
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Le role est changé"]);
        
    }
    public function confirmGenererpwd($name, $id){
        $savepwd = Str::random(10);
        dd($savepwd);
        $this->pwd = Hash::make($savepwd);
        User::find($id)->update([
            'password'=>$this->pwd,
        ]);
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Mot de passe rénitializé avec succés"]);
    }

}
