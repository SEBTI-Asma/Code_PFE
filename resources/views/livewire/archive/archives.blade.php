<div>
    <h2 class="titre_page">Archives</h2>
    <br>
    <div class="filter">
        <div class="div_checkbox">   
            <input type="checkbox" name="" class="check_box"  id="check">
            <svg id="arrow" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path 
                d="M10.4004 14.3999L15.6004 19.5999L20.8004 14.3999" stroke="#00472D" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
        </div>
        <button class="recent" title="Inverser l'ordre de tri" wire:click='ordonner()'>
            <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path 
                d="M6.7469 24.541C7.24475 25.1514 8.05327 25.1514 8.55113 24.541L13.6492 18.291C14.147 17.6807 14.147 16.6895 13.6492 16.0791C13.1513 15.4687 12.3428 15.4687 11.8449 16.0791L8.92153 19.6631V1.5625C8.92153 0.698242 8.35198 0 7.64702 0C6.94206 0 6.37251 0.698242 6.37251 1.5625V19.6631L3.4491 16.084C2.95125 15.4736 2.14273 15.4736 1.64488 16.084C1.14702 16.6943 1.14702 17.6855 1.64488 18.2959L6.74292 24.5459L6.7469 24.541Z" fill="black"/>
            <path 
                d="M19.2531 0.458984C18.7552 -0.151367 17.9467 -0.151367 17.4489 0.458984L12.3508 6.70898C11.853 7.31934 11.853 8.31055 12.3508 8.9209C12.8487 9.53125 13.6572 9.53125 14.1551 8.9209L17.0785 5.33691V23.4375C17.0785 24.3018 17.648 25 18.353 25C19.0579 25 19.6275 24.3018 19.6275 23.4375V5.33691L22.5509 8.91602C23.0488 9.52637 23.8573 9.52637 24.3551 8.91602C24.853 8.30566 24.853 7.31445 24.3551 6.7041L19.2571 0.454101L19.2531 0.458984Z" fill="black"/>
            </svg> 
        </button>
        <button class="recent"  title="Filtres" id="icon_filter">
            <svg width="15" height="20" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.0616 0H0.938589C0.105855 0 -0.31434 1.26299 0.275699 2.00054L7.49999 11.0323V21.0937C7.49999 21.4761 7.64925 21.8345 7.89988 22.0538L11.0249 24.7872C11.6414 25.3267 12.5 24.7799 12.5 23.8271V11.0323L19.7245 2.00054C20.3133 1.26445 19.896 0 19.0616 0Z" fill="black"/>
            </svg>                    
        </button>
        <button class="recent" title="Imprimer">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 8V1H17V8" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5 17H3C2.46957 17 1.96086 16.7893 1.58579 16.4142C1.21071 16.0391 1 15.5304 1 15V10C1 9.46957 1.21071 8.96086 1.58579 8.58579C1.96086 8.21071 2.46957 8 3 8H19C19.5304 8 20.0391 8.21071 20.4142 8.58579C20.7893 8.96086 21 9.46957 21 10V15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 13H5V21H17V13Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                       
        </button>
        <div id="div_class_search">
            <button id="class_icon_search"class="recent recent1" title="Recherche">
                <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M2.16698 15.7824L5.2823 12.6666C5.42291 12.5259 5.50103 12.3353 5.50103 12.1353V11.6259C6.60404 12.4884 7.99141 13.001 9.50063 13.001C13.0909 13.001 16 10.0914 16 6.50048C16 2.90959 13.0909 0 9.50063 0C5.91036 0 3.00127 2.90959 3.00127 6.50048C3.00127 8.00996 3.51372 9.39756 4.37613 10.5008H3.86681C3.66683 10.5008 3.47622 10.5789 3.33561 10.7195L0.220291 13.8354C-0.073431 14.1292 -0.073431 14.6042 0.220291 14.8948L1.10458 15.7793C1.3983 16.0731 1.87325 16.0731 2.16698 15.7824ZM5.50103 6.50048C5.50103 4.29094 7.28835 2.50018 9.50063 2.50018C11.7098 2.50018 13.5002 4.28781 13.5002 6.50048C13.5002 8.71001 11.7129 10.5008 9.50063 10.5008C7.29148 10.5008 5.50103 8.71314 5.50103 6.50048Z" fill="black"/>
                </svg>                    
            </button>
            <div class="inputsearch">
                <input type="text" wire:model.debounce.250ms="searchdemande" placeholder="Search ... " id="mysearch">
            </div>
            <span class="clear" id="clear" onclick="document.getElementById('mysearch').value=''"></span>
        </div>
    </div>
    <div class="drop_check" id="Popup_check">
        <select name="choix[]" multiple>
            <option class="check_option" value="Tous">Tous</option>
            <option class="check_option" value="Lus">Lus</option>
            <option class="check_option" value="Non-Lus">Non-Lus</option>
            <option class="check_option" value="Suivis">Suivis</option>
            <option class="check_option" value="Non-Suivis">Non-Suivis</option>
        </select>
    </div>
    <form action="" class="form_filter_class" wire:submit.prevent='appliquerFilters()' >
        <div class="tous_filtres" id="id_filters">
            <span id="spanX" style="color:black;">X</span>
            <div class="deux_filtres">
                <div class="filter_popup1">
                    <input class="cherche" wire:model.defer='filtredemandeur' list="user1" name="cherche_demandeur" placeholder="     Demandeur...">
                    <datalist id="user1" wire:model.defer='filtredemandeur'>
                        @foreach ($Users as $user)
                            @if ($user['user_nom']==0)
                                <option value="{{$user['user_nom']}} {{$user['user_prenom']}}">
                            @endif
                            
                        @endforeach
                    </datalist>
                </div>
                <div class="filter_popup1">
                    <input class="cherche" wire:model.defer='filtreanalyseur' list="user2" name="cherche_analyseur" placeholder="     Analyseur...">
                    <datalist id="user2" wire:model.defer='filtreanalyseur'>
                        @foreach ($Users as $user)
                            @if ($user['user_role']==1)
                                <option value="{{$user['user_nom']}} {{$user['user_prenom']}}">
                            @endif
                        @endforeach
                    </datalist>
                </div>
            </div>
            <div class="deux_filtres">
                <div class="filter_popup1">
                    <input class="cherche" wire:model.defer='filtrevalideur' list="user3" name="cherche_valideur" placeholder="     Valideur...">
                    <datalist id="user3" wire:model.defer='filtrevalideur'>
                        @foreach ($Users as $user)
                            @if ($user['user_role']==2)
                                <option value="{{$user['user_nom']}} {{$user['user_prenom']}}">
                            @endif
                        @endforeach
                    </datalist>
                </div>
                <div class="filter_popup1">
                    <input class="cherche" wire:model.defer='filtrecodeur' list="user4" name="cherche_codeur" placeholder="     Codeur...">
                    <datalist id="user4" wire:model.defer='filtrecodeur'>
                        @foreach($Users as $user)
                            @if($user['user_role']==3)
                                <option value="{{$user['user_nom']}} {{$user['user_prenom']}}">
                            @endif
                        @endforeach
                    </datalist>
                </div>
            </div>
            <div class="deux_filtres">
                <div class="filter_popup2" >
                    <select name="Filtre1" class="list" wire:model.defer='filtredepartement'>
                        <option value="hide" class="select-hidden">Département</option>
                        @foreach ($Departements as $departement)
                                    <option value={{$departement['dep_id']}}>{{$departement['dep_nom']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter_popup2">
                    <select name="Filtre2" class="list" wire:model.defer='filtreetat'>
                        <option value="hide" class="select-hidden">Etat</option>
                        <option value=1 >Analysée</option>
                        <option value=3 >Codée</option>
                        <option value=0 >En cours</option>
                        <option value=2 >Validée</option>
                    </select>
                </div>
            </div>
            <div class="deux_filtres">
                <div class="filter_popup2">
                    <select name="Filtre3" class="list" wire:model.defer='filtretype'>
                        <option value="hide" class="select-hidden">Type</option>
                        <option value=0>Additionnel</option>
                        <option value=1>Nouvelle</option>
                        <option value=2>Suppression</option>
                    </select>
                </div>
                <div class="filter_popup2">
                    <select name="Filtre4" class="list" wire:model.defer='filtreregle'>
                        <option value="hide" class="select-hidden">Règle</option>
                        <option value=0>Ajout</option>
                        <option value=1>Modification</option>
                        <option value=2>Suppression</option>
                    </select>
                </div>
            </div>
            <div class="filter_popup2">
                <select name="Filtre5" class="list" wire:model.defer='filtreprotocole'>
                    <option value="hide" class="select-hidden">Protocole</option>
                    @foreach ($Protocoles as $protocole)
                        <option value={{$protocole['pro_id']}}>{{$protocole['pro_nom']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="deux_filtres">
                <div class="filter_popup3">
                    <label  for="">Date d'application :</label>
                    <br>
                    <input class="date" wire:model='filtredateapplication' type="date" name="dateapplication" id="">
                </div>
                <div class="filter_popup3">
                    <label  for="">Date de Demande :</label>
                    <br>
                    <input class="date" wire:model.defer='filtredatedemande' type="date" name="datedemande" id="">
                </div>
            </div>
            <div class="deux_filtres1">
                <div class="filter_popup4">
                    <label for="">Change :</label><br>
                    <input class="space" wire:model.defer='filtrechange' type="radio" name="change" id="changeoui" value=0>
                    <label for="changeoui">Oui</label> <br>
                </div>
                <div class="filter_popup5">
                    <label  for="">Catégorie de Change :</label><br>
                    <input class="space" wire:model.defer='filtrecategoriechange' type="radio" name="catchange" id="temporaire" value=0>
                    <label for="temporaire">Temporaire</label> <br>
                </div>
            </div>
            <input class="bouton_appliquer" type="submit" value="Appliquer">
        </div>
    </form>
    <div class="toutes_demandes">
    @if($affichage==0)
        @foreach($mesdemandes as $mademande)
            @if($mademande->archivee==1)
                @if ($mademande->annulee==0)
                    @if ($mademande->status==0)
                        <div class="une_demandes" style='cursor:pointer; border-left: 6px solid #88C8AA;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademande->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademande->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademande->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademande->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademande->id}})'>{{$mademande->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if ($mademande->status==1)
                        <div class="une_demandes" style='cursor:pointer; border-left: 6px solid #D10000;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademande->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademande->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademande->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademande->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademande->id}})'>{{$mademande->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if ($mademande->status==2)
                        <div class="une_demandes"  style='cursor:pointer;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademande->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademande->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademande->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademande->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademande->id}})'>{{$mademande->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        @endforeach
    @endif
    @if($affichage==1)
        @foreach($mesdemandesfiltre as $mademandefiltre)
            @if($mademandefiltre->archivee==1)
                @if ($mademandefiltre->annulee==0)
                    @if ($mademande->status==0)
                        <div class="une_demandes" style='cursor:pointer; border-left: 6px solid #88C8AA;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademandefiltre->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademandefiltre->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademandefiltre->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademandefiltre->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademandefiltre->id}})'>{{$mademandefiltre->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if ($mademande->status==1)
                        <div class="une_demandes" style='cursor:pointer; border-left: 6px solid #D10000;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademandefiltre->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademandefiltre->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademandefiltre->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademandefiltre->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademandefiltre->id}})'>{{$mademandefiltre->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if ($mademande->status==2)
                        <div class="une_demandes"  style='cursor:pointer;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademandefiltre->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademandefiltre->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademandefiltre->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademandefiltre->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademandefiltre->id}})'>{{$mademandefiltre->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        @endforeach
    @endif
    @if($affichage==2)
        @foreach($mesdemandesfiltre1 as $mademandefiltre1)
            @if($mademandefiltre1->archivee==1)
                @if ($mademandefiltre1->annulee==0)
                    @if ($mademande->status==0)
                        <div class="une_demandes" style='cursor:pointer; border-left: 6px solid #88C8AA;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademandefiltre1->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademandefiltre1->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademandefiltre1->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademandefiltre1->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademandefiltre1->id}})'>{{$mademandefiltre1->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if ($mademande->status==1)
                        <div class="une_demandes" style='cursor:pointer; border-left: 6px solid #D10000;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademandefiltre1->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademandefiltre1->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademandefiltre1->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademandefiltre1->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademandefiltre1->id}})'>{{$mademandefiltre1->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if ($mademande->status==2)
                        <div class="une_demandes"  style='cursor:pointer;'>
                            <div class="check_arch">
                                <input type="checkbox" name="" class="check_box" >
                                <div class="div_centrer" title="Archiver" wire:click='confirmArchiverDemande({{$mademandefiltre1->id}})'>
                                    <svg class="archives" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#88C8AA">
                                    <path 
                                        d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                                    </svg>
                                </div>
                                <div class="div_centrer" title="Suivi / Non Suivi">
                                    <svg id="demande" width="16" height="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7L11 1Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 1V7H17" fill="#FBFBFB"/>
                                        <path d="M11 1V7H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 12H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 16H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8H6H5" fill="#FBFBFB"/>
                                        <path d="M7 8H6H5" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </div>          
                                <p wire:click.stop='opendemande({{$mademandefiltre1->id}})'>Vous</p>
                            </div>
                            <span wire:click.stop='opendemande({{$mademandefiltre1->id}})' style="padding-bottom:0; color:black;">
                                <p style="margin:auto;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; width:300px;">{{$mademandefiltre1->objet_demande}}</p>
                            </span>
                            <p wire:click.stop='opendemande({{$mademandefiltre1->id}})'>{{$mademandefiltre1->created_at}}</p>
                            <div class ="div_centrer" title="Afficher les détails" id="id_info">
                                <svg class="more_infos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path 
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        @endforeach
    @endif
    <div class="popup_infos" id="id_popup_infos" style="display: none;">
        <div class="section_analyse">
            <div class="two_column">
                <p class="info_motif">Plus d'info</p>
                <span id="spanX1" style="color:black;">X</span>
            </div>
            
            <div class="two_column">
                <p class="bold_text">Analysée par :</p>
                <p class="simple_text" style="margin-right:50px ;">Mr user name</p>
            </div>
            <div class="two_column">
                <p class="bold_text">Le :</p>
                <p class="simple_text" style="margin-right:60px ;">11/05/2023</p>
            </div>
            <div class="two_column">
                <p class="bold_text">Motifs :</p>
                <p class="simple_text" id="lien_voir_more" style="margin-right:100px ;">Voir plus</p>
                <p class="simple_text" id="lien_voir_less" style="margin-right:100px ; display:none;">Voir moins</p>
            </div>
            <div class="link_voir" id="id_link_voir"style="display: none;">
                <p class="paragraphe" >
                    ici seront insérés les motifs de validation
                </p>
            </div>
        </div>
        <div class="section_valide">
            <div class="two_column">
                <p class="bold_text">Validée par :</p>
                <p class="simple_text" style="margin-right:50px ;" >Mr user name</p>
            </div>
            <div class="two_column">
                <p class="bold_text">Le :</p>
                <p class="simple_text" style="margin-right:60px ;">11/05/2023</p>
            </div>
            <div class="two_column">
                <p class="bold_text">Motifs :</p>
                <p class="simple_text" id="lien_voir_more1" style="margin-right:100px ;">Voir plus</p>
                <p class="simple_text" id="lien_voir_less1" style="margin-right:100px ; display:none;">Voir moins</p>
            </div>
            <div class="link_voir"  id="id_link_voir1" style="display: none;">
                <p class="paragraphe"  >
                    ici seront insérés les motifs de validation
                </p>
            </div>
        </div>
        <div class="section_code">
            <div class="two_column">
                <p class="bold_text">Codée par :</p>
                <p class="simple_text" style="margin-right:50px ;">Mr user name</p>
            </div>
            <div class="two_column">
                <p class="bold_text">Le :</p>
                <p class="simple_text" style="margin-right:60px ;">11/05/2023</p>
            </div>
        </div>
    </div>
    @if ($affichage==false)
        <div style="float:right; margin-right:22px;">
            {{ $mesdemandes->links('paginate')}} 
        </div>
    @endif

</div>
<script>
        window.addEventListener("showAjoutdemande", event=>{
            const { value: text } = Swal.fire({
            title: event.detail.message.title,
            input: 'text',
            inputPlaceholder: 'Objet de ma demande',
            showCancelButton: false,
            inputValidator: (value) => {
                return new Promise((resolve) => {
                if (value === '') {
                    resolve('Vous devez entrer un objet')
                } else {
                    resolve();
                    @this.ajouterObjet(event.detail.message.data.user_id,value);
                }
                })
            }
            })            
        })

</script>