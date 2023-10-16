<div>
<h2 class="titre_page">Gestion des utilisateurs</h2>
        <br>
        <div class="utilisateurs">
            <div class="ajout_user">
                <label for="" id="label_user">Ajouter Utilisateur</label>
                <form class="formulaire_user" wire:submit.prevent="addUser()">
                    <div class="first_ligne">
                        <div >
                            <label for="">Nom<span>*</span></label><br>
                            <input type="text" wire:model="newUser.nom" name="nom" placeholder="Nom" class="first form-control @error('newUser.nom') is-invalid @enderror">
                            @error('newUser.nom')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong><br>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>
                        <div >
                            <label for="">Prénom<span>*</span></label><br>
                            <input type="text" wire:model="newUser.prenom" name="prenom" placeholder="Prénom" class="first form-control @error('newUser.prenom') is-invalid @enderror">
                            @error('newUser.prenom')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong><br>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="third">
                            <label for="">Role<span>*</span></label>
                            <div class="contenaire">
                                <div class="select-btn">
                                    <span class="btn-text">Selectionner role</span>
                                    <span class="arrow-dwn">
                                        <svg   width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.67188 2.3999L8.70243 7.5999L14.733 2.3999" stroke="#007348" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </div>
                                <ul class="list-role">
                                    <li class="role" >
                                        <input type="radio" name="ad_simple" id="admin" wire:model="newUser.droit" value=1 class="form-control @error('newUser.droit') is-invalid @enderror">
                                        <label for="admin">Administrateur</label> <br>
                                    </li>
                                    <li class="role" id="role1" wire:model="newUser.droit">
                                        <input type="radio" name="ad_simple" id="simple" wire:model="newUser.droit" value=0 class="form-control @error('newUser.droit') is-invalid @enderror">
                                        <label for="simple">Simple</label> <br>
                                    </li>
                                    <li class="role" id="role2" >
                                        <input type="radio" name="equipe" id="demandeur" wire:model="newUser.role" value=0 class="form-control @error('newUser.role') is-invalid @enderror">
                                        <label for="demandeur">Demandeur</label> <br>
                                    </li>
                                    <li class="role" wire:model="newUser.role">
                                        <input type="radio" name="equipe" id="analyse" wire:model="newUser.role" value=1 class="form-control @error('newUser.role') is-invalid @enderror">
                                        <label for="analyse">Analyseur</label> <br>
                                    </li>
                                    <li class="role" wire:model="newUser.role">
                                        <input type="radio" name="equipe" id="valide" wire:model="newUser.role" value=2 class="form-control @error('newUser.role') is-invalid @enderror">
                                        <label for="valide">Valideur</label> <br>
                                    </li>
                                    <li class="role" wire:model="newUser.role">
                                        <input type="radio" name="equipe" id="code" wire:model="newUser.role" value=3 class="form-control @error('newUser.role') is-invalid @enderror">
                                        <label for="code">Codeur</label> <br>
                                    </li>
                                </ul>
                            </div>
                            @error('newUser.droit')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong><br>{{ $message }}</strong>
                                </span>
                            @enderror
                            @error('newUser.role')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong><br>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="second_ligne">
                        <div>
                            <label for="">E-mail<span>*</span></label><br>
                            <input type="email" wire:model="newUser.email" name="email" placeholder="prenom.nom@bnpparibas.com" class="first_mail form-control @error('newUser.nom') is-invalid @enderror">
                            @error('newUser.email')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong><br>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div >
                            <label for="">Nom d'utilisateur<span>*</span></label><br>
                            <input type="text" wire:model="newUser.user_name" name="nom_user" placeholder="nom_prenom" class="first form-control @error('newUser.user_name') is-invalid @enderror"> 
                            @error('newUser.user_name')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                    <strong><br>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="submit" class="add_user" value="Ajouter" style="height: 39px;">
                    </div>
                    
                </form>
            </div>
            <div class="filtre_user">
                <div class="contenaire">
                    <div class="select-btn1">
                        <span class="btn-text1">Role</span>
                        <span class="arrow-dwn">
                            <svg   width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.67188 2.3999L8.70243 7.5999L14.733 2.3999" stroke="#007348" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <ul class="list-role">
                        <li class="role3">
                            <span class="checkbox11">
                                <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path 
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 
                                    12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 
                                    0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                </svg>
                            </span>
                            <span class="item-text">Administrateur</span>
                        </li>
                        <li class="role3">
                            <span class="checkbox11">
                                <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path 
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 
                                    12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 
                                    0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                </svg>
                            </span>
                            <span class="item-text">Simple</span>
                        </li>
                        <li class="role3">
                            <span class="checkbox11">
                                <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path 
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 
                                    12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 
                                    0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                </svg>
                            </span>
                            <span class="item-text">Demandeur</span>
                        </li>
                        <li class="role3">
                            <span class="checkbox11">
                                <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path 
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 
                                    12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 
                                    0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                </svg>
                            </span>
                            <span class="item-text">Analyseur</span>
                        </li>
                        <li class="role3">
                            <span class="checkbox11">
                                <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path 
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 
                                    12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 
                                    0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                </svg>
                            </span>
                            <span class="item-text">Valideur</span>
                        </li>
                        <li class="role3">
                            <span class="checkbox11">
                                <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path 
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 
                                    12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 
                                    0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                </svg>
                            </span>
                            <span class="item-text">Codeur</span>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="voir_user">
                <table class="tableau_user">
                    <tr class="ligne_princp">
                        <th><input type="checkbox" name="" id=""></th>
                        <th>Nom et Prénom</th>
                        <th>Nom d'utilisateur</th>
                        <th>Role</th>
                        <th>Droits</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        @if($user->active==0)
                            <td><input type="checkbox" name="" id=""></td>
                            <td>{{ $user->nom }} {{ $user->prenom }}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ userrole($user)}}</td>
                            <td>{{ userdroit($user)}}</td>
                            <td>
                                <button class="btn_role" wire:click="confirmRole({{ $user->id}})">Role</button>
                                @if($user->droit==1)
                                    <button class="btn_admin" wire:click="confirmAdmin('{{ $user->nom }} {{ $user->prenom }}', {{ $user->id}})">Simple</button>
                                @elseif($user->droit==0)
                                    <button class="btn_admin" wire:click="confirmSimple('{{ $user->nom }} {{ $user->prenom }}', {{ $user->id}})">Admin</button>
                                @endif
                                <button class="btn_disable" wire:click="confirmDesactiver('{{ $user->nom }} {{ $user->prenom }}', {{ $user->id}})">Désactiver</button>
                                <button class="btn_mdp">Génerer mdp</button>
                            </td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            <div style="float:right; margin-right:22px;">
               {{ $users->links('paginate')}} 
            </div>
            <button class="btn_trash">Corbeille</button>
        </div>
    </div>
</div>
<script>
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: event.detail.message,
            showConfirmButton: false,
            timer: 1500
        })
    })
    window.addEventListener("showConfirmMessage", event=>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: event.detail.message.type,
            showCancelButton: true,
            confirmButtonColor: '#4367E9',
            cancelButtonColor: 'red',
            confirmButtonText: 'Oui, désactiver !',
            cancelButtonText: 'Annuler',
            }).then((result) => {
            if (result.isConfirmed) {
                @this.desactiverUser(event.detail.message.data.user_id)
            }
        })
    })
    window.addEventListener("showConfirmMessageAdmin", event=>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: event.detail.message.type,
            showCancelButton: true,
            confirmButtonColor: '#4367E9',
            cancelButtonColor: 'red',
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler',
            }).then((result) => {
            if (result.isConfirmed) {
                @this.adminUser(event.detail.message.data.user_id)
            }
        })
    })
    window.addEventListener("showConfirmMessageSimple", event=>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: event.detail.message.type,
            showCancelButton: true,
            confirmButtonColor: '#4367E9',
            cancelButtonColor: 'red',
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler',
            }).then((result) => {
            if (result.isConfirmed) {
                @this.simpleUser(event.detail.message.data.user_id)
            }
        })
    })
    window.addEventListener("showChangeRole", event=>{
        const { value: role } = Swal.fire({
        title: 'Changer le role',
        input: 'select',
        confirmButtonColor: '#4367E9',
        cancelButtonColor: 'red',
        confirmButtonText: 'Confirmer',
        cancelButtonText: 'Annuler',
        inputOptions: {
            'demandeur': 'Demandeur',
            'analyseur': 'Analyseur',
            'valideur': 'Valideur',
            'codeur': 'Codeur'
        },
        inputPlaceholder: 'Selectionez un role',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === '') {
                resolve('Vous devez séléctionner un role')
            } else {
                resolve();
                @this.changerRole(event.detail.message.data.user_id,value);
            }
            })
        }
        })
    })
</script>


