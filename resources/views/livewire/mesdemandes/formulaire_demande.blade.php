<div>
    <h2 class="titre_page">Ajouter une demande</h2>
    <br>
    <p id="page_de" style='display:none'>page 2 de 3</p>
    <div class="grid">
        <div class="div1">
            <button class="left_right" title="Flux précédent">
                <svg width="19" height="28" viewBox="0 0 19 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path 
                    d="M17 2L2 14L17 26" stroke="#00472D" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="div2">
            <form action="" wire:submit.prevent="addDemande()">
                <div class="big_white">
                    <div class="deux_champs">
                        <div class="champ">
                            <label for="">Source</label><span>*</span> <br>
                            <input wire:model="newFluxe.source" type="text" name="valSource" id="idSource" class="class_input1">
                        </div>
                        <div class="champ">
                            <label for="">Destination</label><span>*</span><br>
                            <input wire:model="newFluxe.destination" type="text" name="valDestination" id="idDestination" class="class_input1">
                        </div>
                    </div>
                    <div class="deux_champs0">
                        <div class="champ1">
                            <label for="">Adresse Source</label><span>*</span><br>
                            <input type="text" placeholder="xxx.xxx.xxx.xxx" name="valAsource" id="idAsource" class="class_input2" wire:model="newAdresseSource.adresse">
                            <svg class="plus_add" width="15px" fill="#007348" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                            </svg>
                            
                        </div>
                        <div class="champ">
                            <label for="">Adresse Destination</label><span>*</span><br>
                            <input type="text" wire:model="newAdresseDestination.adresse" placeholder="xxx.xxx.xxx.xxx" name="valAdestination" id="idAdestination" class="class_input2">
                            <svg class="plus_add1" width="15px" fill="#007348" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="deux_champs1" style="display : none">
                        <div class="champ">
                            <input type="text" placeholder="xxx.xxx.xxx.xxx" name="valAdestination" id="idAdestination" class="class_input5"><br>
                            <input type="text" placeholder="xxx.xxx.xxx.xxx" name="valAdestination" id="idAdestination" class="class_input5">                      
                        </div>
                    </div> 
                    <div class="deux_champs">
                        <div class="champ">
                            <label for="">Port</label><span>*</span><br>
                            <input wire:model="newFluxe.port" type="text" name="valPort" id="idPort" class="class_input1">
                        </div>
                        <div class="champ">
                            <label for="">Tel</label><br>
                            <input type="text" name="valTel" id="idTel" class="class_input1">
                        </div>
                    </div>
                    <div class="deux_champs">
                        <div class="form_drop">
                            <label for="">Département</label><span>*</span><br>
                            <select name="list" class="Depart" wire:model="newFluxe.departement_id">
                                <option value="hide" class="select-hidden">Département</option>
                                @foreach ($Departements as $departement)
                                    <option value={{$departement['dep_id']}}>{{$departement['dep_nom']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form_drop">
                            <label for="">Sous Département</label><span>*</span><br>
                            <select name="list1" class="Depart" wire:model="newFluxe.sousdepartement_id">
                                <option value="hide" class="select-hidden">Sous Département</option>
                                @foreach ($Sousdepartements as $sousdepartement)
                                    <option value={{$sousdepartement['sdep_id']}}>{{$sousdepartement['sdep_nom']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="deux_champs">
                        <div class="unique_choice">
                            <div class="class_label">
                                <label for="">Type<span>*</span></label><br>
                            </div>
                            
                            <input wire:model="newFluxe.type_flux" class="space" type="radio" name="type" id="nouvelle" value=0>
                            <label for="Nouvelle">Nouvelle</label> <br>
                            <input wire:model="newFluxe.type_flux" class="space" type="radio" name="type" id="additionnelle" value=1>
                            <label for="Additionnelle">Additionnelle</label> <br>
                            <input wire:model="newFluxe.type_flux" class="space" type="radio" name="type" id="suppression" value=2>
                            <label for="Suppression">Suppression</label><br>
                        </div>
                        <div class="unique_choice" id="id_regle">
                            <div class="class_label">
                                <label for="">Règle<span>*</span></label><br>
                            </div>
                            
                            <input wire:model="newFluxe.regle_flux" class="space" type="radio" name="type1" id="ajout" value=0>
                            <label for="Ajout">Ajout</label> <br>
                            <input wire:model="newFluxe.regle_flux" class="space" type="radio" name="type1" id="suppression" value=1>
                            <label for="Suppression">Suppression</label> <br>
                            <input wire:model="newFluxe.regle_flux" class="space" type="radio" name="type1" id="modification" value=2>
                            <label for="Modification">Modification</label> <br>
                        </div>
                    </div>
                    <div class="deux_champs">
                        <div class="unique_choice">
                            <div class="class_label">
                                <label for="" >Change<span>*</span></label><br>
                            </div>
                            <input wire:model="newFluxe.change_flux" class="space" type="radio" name="type2" id="oui" value=0>
                            <label for="Oui">Oui</label> <br>
                            <input wire:model="newFluxe.change_flux" class="space" type="radio" name="type2" id="non" value=1>
                            <label for="Non">Non</label> <br>
                        </div>
                        <div class="unique_choice">
                            <div class="class_label" id="id_catchange">
                                <label for="" >Catégorie de Change<span>*</span></label><br>
                            </div>
                            <input wire:model="newFluxe.categorie_flux" class="space" type="radio" name="type3" id="temporaire" value=0>
                            <label for="">Temporaire</label> <br>
                            <input wire:model="newFluxe.categorie_flux" class="space" type="radio" name="type3" id="permanent" value=1>
                            <label for="">Permanent</label> <br>
                        </div>
                    </div>
                    <div class="deux_champs">
                        <div class="unique_choice">
                            <div class="class_label">
                                <label for="">TCP/UDP<span>*</span></label><br>
                            </div>
                            
                            <input wire:model="newFluxe.tcp_udp" class="space" type="radio" name="type4" id="tcp" value=0>
                            <label for="TCP">TCP</label> <br>
                            <input wire:model="newFluxe.tcp_udp" class="space" type="radio" name="type4" id="udp" value=1>
                            <label for="UDP">UDP</label> <br>
                        </div>
                        <div class="form_drop">
                            <label for="">Protocole</label><span>*</span><br>
                            <select name="list1" class="Depart" wire:model="newFluxe.protocole_id">
                                <option value="hide" class="select-hidden">Protocole</option>
                                @foreach ($Protocoles as $protocole)
                                    <option value={{$protocole['pro_id']}}>{{$protocole['pro_nom']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="deux_champs">
                        <div class="unique_choice">
                            <div class="class_label">
                                <label for="">Action<span>*</span></label><br>
                            </div>
                            
                            <input wire:model="newFluxe.action" class="space" type="radio" name="type5" id="deny" value=0>
                            <label for="Deny">Deny</label> <br>
                            <input wire:model="newFluxe.action" class="space" type="radio" name="type5" id="permit" value=1>
                            <label for="Permit">Permit</label> <br>
                        </div>
                        <div class="duree">
                            <div class="class_label">
                                <label for="">Durée<span>*</span></label><br>
                            </div>
                            <div class="compteur">
                                <div class="div_duree">
                                <input type="number" name="mois" min="0" max="999" wire:model="newDuree.mois"><br>
                                </div>
                                <div class="div_duree">
                                    <input type="number" name="semaine" min="0" max="999" wire:model="newDuree.semaines"><br>
                                </div>
                                <div class="div_duree">
                                    <input type="number" name="jours" min="0" max="999" wire:model="newDuree.jours"><br>
                                </div> 
                            </div>
                            <div class="label_comp">
                                <p>Mois</p>
                                <p>Semaines</p>
                                <p>Jours</p>
                            </div>
                        </div>
                    </div>
                    <div class="class_display">
                        <div class="div_margin">
                            <label for="">Description</label> <span>*</span><br>
                            <input wire:model="newFluxe.description" type="text" name="description" id="description" class="class_input3">
                        </div>
                        <div>
                            <label for="svg_file1" class="file_input">
                                <img src="./img/file.png"/>
                            </label>
                            <input type="file" name="svg_file1" id="svg_file1" style="display :none">
                        </div>
                    </div>
                    <div class="class_display">
                        <div class="div_margin">
                            <label for="">Justification</label> <span>*</span><br>
                            <input wire:model="newFluxe.justification" type="text" name="justification" id="justification" class="class_input3">
                        </div>
                        <div>
                            <label for="svg_file2" class="file_input" >
                                <img src="./img/file.png"/>
                            </label>
                            <input type="file" name="svg_file2" id="svg_file2" style="display :none">
                        </div>
                    </div>
                </div>
                <div class="sous_div1">
                    <button class="retour" title="Retour">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#c4c4c4" viewBox="0 0 256 256">
                            <path d="M232,144a64.07,64.07,0,0,1-64,64H80a8,8,0,0,1,0-16h88a48,48,0,0,0,0-96H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,45.66L51.31,80H168A64.07,64.07,0,0,1,232,144Z">
                            </path>
                        </svg>                                                            
                            
                    </button>
                    <button class="plus" title="Ajouter un flux">
                        <svg width="40px" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                        </svg> 
                    </button>
                    <input type="submit" value="Soumettre" class="soumettre">
                </div>
            </form>
        </div>
        <div class="div3">
            <button class="left_right" title="Flux suivant">
                <svg  width="19" height="28" viewBox="0 0 19 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path 
                        d="M2 26L17 14L2 2" stroke="#00472D" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
</div>