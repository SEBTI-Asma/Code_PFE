<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{mix("css/app.css")}}>

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href={{URL('img/icon.ico')}}>
    <title>Gestion de Demandes</title>
</head>
<body class="body_class">
    <div class="menu">
        <x-menu />
    </div>
    <div class="horizontal" id="id_horizontal" style="height:100%">
        <div class="body-modal" id="id_body-modal" style="display: none;"></div>
        <x-navbar/>
       <x-settings/> 
       @yield('contenu')
    </div>
    @livewireScripts
    <script>
        /* ***********************************   RESPONSIVE FEATURE    *********************************** */
                                    // /* Menu mobile */

                            // function menuMobile() {
                            //   const btn = document.querySelector('.burger');
                            //   const header = document.querySelector('.menu');
                            //   const links = document.querySelectorAll('.menu .menu_vertical li');
                            //   console.log('No');
                            //   btn.addEventListener('click', () => {
                            //     header.classList.toggle('show-nav');
                            //   });
                            //   console.log('No');
                            //   links.forEach(link => 
                            //     {
                            //       link.addEventListener('click', () => 
                            //       {
                            //         header.classList.remove('show-nav');
                            //       });
                            //     });
                            // }

                            // menuMobile();
            /* ***********************************   END OF RESPONSIVE FEATURE    *********************************** */

        /* ***********************************   DROP DOWN CHECKBOX    *********************************** */
                    document.addEventListener('click', function handleClickOutsideBox(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const box = document.getElementById('Popup_check');
                    const fleche= document.getElementById('arrow');

                    if (!box.contains(event.target)) {
                        box.style.display = 'none';
                    }
                    if (fleche.contains(event.target)) {
                        box.style.display = 'flex';
                    }
                    });

                    // onclick filter
                    document.addEventListener('click', function o_c_filter(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const box = document.getElementById('id_filters');
                    const croix= document.getElementById('spanX');
                    const fleche= document.getElementById('icon_filter');
                    
                    // const container= document.getElementsByClassName('horizontal');
                    if (croix.contains(event.target)) {
                        box.style.display = 'none';
                    }
                    if (fleche.contains(event.target)) {
                        box.style.display = 'block';
                        // container.style.backgroundColor = 'black';
                    }
                    });
            /* ***********************************   END OF DROP DOWN CHECKBOX    *********************************** */

        /* ***********************************   POP UP PLUS D'INFO OPEN CLOSE  *********************************** */ 

                    document.addEventListener('click', function o_c_info(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const info = document.getElementById('id_info');
                    const box= document.getElementById('id_popup_infos');
                    const parent = document.getElementById('id_body-modal');
                    const close_sign = document.getElementById('spanX1');

                    if (info.contains(event.target)) {
                        box.style.display = 'block';
                        parent.style.display = 'block';
                    }
                    if (close_sign.contains(event.target)) {
                        box.style.display = 'none';
                        parent.style.display = 'none';
                    }
                    });

            /************************************************************************************************ */

        /* ************************ POP UP PLUS D'INFO WITH LINK ANALYSEUR   ****************************** */ 

                    document.addEventListener('click', function o_c_voir(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const viewmore = document.getElementById('lien_voir_more');
                    const txt_viewmore = document.getElementById('id_link_voir');
                    const viewless2 = document.getElementById('lien_voir_less');

                        if (viewmore.contains(event.target)) {
                        txt_viewmore.style.display = 'block';
                        viewmore.style.display = 'none';
                        viewless2.style.display = 'block';
                        }
                        
                    });

            /************************************************************************************************ */
        /* ****************************   POP UP MOINS D'INFO WITH LINK ANALYSEUR ********************** */ 

                    document.addEventListener('click', function o_c_voir_less(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const viewless = document.getElementById('lien_voir_less');
                    const txt_viewmore = document.getElementById('id_link_voir');
                    const viewmore = document.getElementById('lien_voir_more');

                        if (viewless.contains(event.target)) {
                        txt_viewmore.style.display = 'none';
                        viewless.style.display = 'none';
                        viewmore.style.display = 'block';
                        }
                        
                    });

            /************************************************************************************************ */
        /* ****************************   POP UP PLUS D'INFO WITH LINK VALIDEUR ********************** */ 

                    document.addEventListener('click', function o_c_voir1(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const viewmore = document.getElementById('lien_voir_more1');
                    const txt_viewmore = document.getElementById('id_link_voir1');
                    const viewless2 = document.getElementById('lien_voir_less1');

                        if (viewmore.contains(event.target)) {
                        txt_viewmore.style.display = 'block';
                        viewmore.style.display = 'none';
                        viewless2.style.display = 'block';
                        }
                        
                    });

            /************************************************************************************************ */
        /* ****************************   POP UP MOINS D'INFO WITH LINK ANALYSEUR ********************** */ 

                    document.addEventListener('click', function o_c_voir_less1(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const viewless = document.getElementById('lien_voir_less1');
                    const txt_viewmore = document.getElementById('id_link_voir1');
                    const viewmore = document.getElementById('lien_voir_more1');

                        if (viewless.contains(event.target)) {
                        txt_viewmore.style.display = 'none';
                        viewless.style.display = 'none';
                        viewmore.style.display = 'block';
                        }
                        
                    });

            /************************************************************************************************ */

        /* *******************************   POP UP OPEN CLOSE SETTINGS  **************************** */ 

                    document.addEventListener('click', function o_c_setting(event) {
                    // 👇️ the element the user clicked
                    console.log('user clicked: ', event.target);

                    const parametre = document.getElementById('setID');
                    const box = document.getElementById('id_settings');

                        if (parametre.contains(event.target)) {
                        box.style.display = 'block';
                        }
                        if (!parametre.contains(event.target)) {
                        box.style.display = 'none';
                        }
                        
                    });

        /*********************************** DEBUT CHANGER IMAGE ***********************************/  
            const imgDiv = document.querySelector('.profile-pic-div');
            const img = document.querySelector('#photo');
            const file = document.querySelector('#file');
            const uploadBtn = document.querySelector('#uploadBtn');

            //if user hover on img div 

            imgDiv.addEventListener('mouseenter', function(){
                uploadBtn.style.display = "block";
            });

            //if we hover out from img div

            imgDiv.addEventListener('mouseleave', function(){
                uploadBtn.style.display = "none";
            });

            //lets work for image showing functionality when we choose an image to upload

            //when we choose a photo to upload

            file.addEventListener('change', function(){
                //this refers to file
                const choosedFile = this.files[0];

                if (choosedFile) {

                    const reader = new FileReader(); //FileReader is a predefined function of JS

                    reader.addEventListener('load', function(){
                        img.setAttribute('src', reader.result);
                    });

                    reader.readAsDataURL(choosedFile);
                }
            });
            /*********************************** FIN CHANGER IMAGE ***********************************/

        /*********************************** SELECT ROLE IN USER MANAGEMENT ***********************************/  
            const selectBtn = document.querySelector(".select-btn"),
                    items = document.querySelectorAll(".role");
                    selectBtn.addEventListener("click", () => {
                    selectBtn.classList.toggle("open");
                });
                
                const selectBtn1 = document.querySelector(".select-btn1"),
                    items1 = document.querySelectorAll(".role3");
                    selectBtn1.addEventListener("click", () => {
                        selectBtn1.classList.toggle("open");
                    });
                items1.forEach(role3 => {
                    role3.addEventListener("click", () => {
                    role3.classList.toggle("checked");
                    let checked = document.querySelectorAll(".checked"),
                        btnText = document.querySelector(".btn-text1");
                        if(checked && checked.length > 0){
                            btnText.innerText = `${checked.length} Selectionné(s)`;
                        }else{
                            btnText.innerText = "Role";
                        }
                    });
                })
    
    </script>
    @include('sweetalert::alert')
</body>
</html>