<div class="big_green">
    <div class="profile-pic-div" id="id_profile-pic-div" style="margin-left:55px">
            <img src="./img/BNP.PA.png" id="photo" >
            <input type="file" id="file">
            <label for="file" id="uploadBtn">Changer Photo</label>
    </div><br>
    <p id="P1" class="nom_poste" class="ellipse">{{userFullName()}}</p>
    <p id="P2" class="nom_poste">{{userTeam()}}</p>
</div>
<button class="burger" onclick="menuMobile()"><span class="bar"></span></button>
<div class="menu_vertical" >
    <ul class="rubrique">
        @can("simpledemandeur")
        <li class="{{setMenuActive('home')}}"><a href="{{route('home')}}" class="icon_menu_ver"><svg class="class_svg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path 
                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
        </svg></a><a href="{{route('home')}}" class="title">Acceuil</a></li>
        @endcan
        @can("simplemetier")
        <li class="{{setMenuActive('home')}}"><a href="{{route('home')}}" class="icon_menu_ver"><svg class="class_svg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path 
                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
        </svg></a><a href="{{route('home')}}" class="title {{setMenuActive('home')}}">Acceuil</a></li>
        @endcan
        @can("adminmetier")
        <li class="{{setMenuActive('home7')}}"><a href="{{route('home7')}}" class="icon_menu_ver">
        <img src="./img/dashboard.png" alt="" class="class_svg"></a>
        <a href="{{route('home7')}}" class="title">DashBoard</a></li>
        @endcan
        @can("simpledemandeuradmin")
        <li class="{{setMenuActive('home7')}}"><a href="{{route('home7')}}" class="icon_menu_ver"><svg class="class_svg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path 
                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
        </svg></a><a href="{{route('home7')}}" class="title">DashBoard</a></li>
        @endcan
        @can("simpledemandeur")
        <li id="demandes" class="{{setMenuActive('home2')}}"><a href="{{route('home2')}}" class="icon_menu_ver" ><svg  class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path 
                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
            </svg></a><a href="{{route('home2')}}" class="title" class="title1">Mes Demades</a>
        </li>
        @endcan
        @can("simplemetier")
        <li id="demandes" class="{{setMenuActive('home2')}}"><a href="{{route('home2')}}" class="icon_menu_ver" ><svg class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path 
            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z"/>
        </svg></a><a href="{{route('home2')}}" class="title" class="title1">Mes Demades</a>
        </li>
        @endcan
        @can("simplemetier")
        <li id="demandes" class="{{setMenuActive('home3')}}"><a href="{{route('home3')}}" class="icon_menu_ver" ><svg  class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path 
                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
            </svg></a><a href="{{route('home3')}}" class="title" class="title1">Demades Reçues</a>
        </li>
        @endcan
        @can("simpledemandeur")
        <li class="{{setMenuActive('home4')}}"><a href="{{route('home4')}}" class="icon_menu_ver"><svg  class="class_svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path 
                d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
        </svg></a><a href="{{route('home4')}}" class="title">Archives</a></li>
        @endcan
        @can("simplemetier")
        <li class="{{setMenuActive('home4')}}"><a href="{{route('home4')}}" class="icon_menu_ver"><svg  class="class_svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path 
                d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
        </svg></a><a href="{{route('home4')}}" class="title">Archives</a></li>
        @endcan
        @can("adminmetier")
        <li class="{{setMenuActive('home1')}}"><a href="{{route('home1')}}" class="icon_menu_ver"><svg  class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path 
                d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
        </svg></a><a href="{{route('home1')}}" class="title">Utilisateurs</a></li>
        @endcan
        @can("simpledemandeuradmin")
        <li class="{{setMenuActive('home1')}}"><a href="{{route('home1')}}" class="icon_menu_ver"><svg  class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path 
                d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
        </svg></a><a href="{{route('home1')}}" class="title">Utilisateurs</a></li>
        @endcan
        @can("simpledemandeur")
        <li class="{{setMenuActive('home5')}}"><a href="{{route('home5')}}" class="icon_menu_ver"><svg  class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path 
                d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
        </svg></a><a href="{{route('home5')}}" class="title">Aide</a></li>
        @endcan
        @can("simplemetier")
        <li class="{{setMenuActive('home5')}}"><a href="{{route('home5')}}" class="icon_menu_ver"><svg  class="class_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path 
                d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
        </svg></a><a href="{{route('home5')}}" class="title">Aide</a></li>
        @endcan
        @can("adminmetier")
        <li class="{{setMenuActive('home6')}}"><a href="{{route('home6')}}" class="icon_menu_ver"><svg  class="class_svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path 
                d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z"/>
            </svg></a><a href="{{route('home6')}}" class="title">Historique</a></li>
        @endcan
        @can("simpledemandeuradmin")
        <li class="{{setMenuActive('home6')}}"><a href="{{route('home6')}}" class="icon_menu_ver"><svg  class="class_svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path 
                d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z"/>
            </svg></a><a href="{{route('home6')}}" class="title">Historique</a></li>
        @endcan
    </ul>
</div>