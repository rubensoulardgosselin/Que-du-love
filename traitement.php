<?php

  echo "<H1>Informations récupérées par le serveur</H1>";
  echo 'Ces infos sont récupérées depuis le serveur web';
  echo '<ul>';
  echo '<li> adresse IP du client : ' .$_SERVER["REMOTE_ADDR"] .'</li><BR>';
  echo '<li>adresse IP du serveur : ' .$_SERVER["SERVER_ADDR"] .'</li><BR>';
  echo '<li>URL du serveur : ' .$_SERVER["HTTP_HOST"] .'</li><BR>';
  echo '</ul>';

  if(isset($_POST['valider'])){
    echo "<H1>Méthode POST utilisée</H1>";
    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $cb = $_POST['ninja'];
    echo "<ul>";
    echo '<li>' .'Login : ' .$login .'</li><BR>' ;
    echo '<li>' .'Mail : ' .$mail .'</li><BR>';
    echo '<li>' .'password : ' .$password .'</li><BR>';
    echo '<li>' .$cb .'</li><BR>';
    echo "</ul>";
  }
  else{
    echo "<H1>Méthode GET utilisée</H1>";
    echo 'Ces informations sont dans l\'url, après le point d\'interrogation';
    $login_get = $_GET['login'];
    $mail_get = $_GET['mail'];
    $password_get = $_GET['password'];
    $cb_get = $_GET['ninja'];

    echo "<ul>";
    echo '<li>' .'Login : ' .$login_get .'</li><BR>' ;
    echo '<li>' .'Mail : ' .$mail_get .'</li><BR>';
    echo '<li>' .'password : ' .$password_get .'</li><BR>';
    echo '<li>' .$cb_get .'</li><BR>';
    echo "</ul>";
  }
 ?>
