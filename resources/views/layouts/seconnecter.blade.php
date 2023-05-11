<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{mix("css/app.css")}}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href={{URL('img/icon.ico')}}>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed&display=swap" rel="stylesheet">
    <title>Se connecter</title>
    @livewireStyles
</head>
<body>
  <div class="illustration">
      <img src={{URL("img/connecter.jpg")}} alt="illustration" id="ilst_connecter">
  </div> 
  <div class="connect">
    <img src={{URL("img/Our_logo.png")}} alt="logo bnp" id="ilst_logo"><br>
    <div class="conteneur1">
      <form action="" >
        <div class="user">
          <svg  class="user_ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
          </svg>
          <input class="formulaire" type="text" placeholder="Email/User">
        </div>
        
        <div class="user">
          <svg class="user_ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path 
              d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
          </svg>
          <input class="formulaire" id="mdp" type="password" placeholder="Mot de passe">
        </div>
      </form>
      <a href="#">mot de passe oublié</a>
      <input type="submit" value="Se connecter" class="bouton_submit">
    </div>
  </div>
  @livewireScripts
</body>
</html>