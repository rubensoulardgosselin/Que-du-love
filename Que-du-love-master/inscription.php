<?php
  try
  {
	$db = new PDO('mysql:host=localhost;dbname=test_mamazon;charset=utf8', 'root', 'mysql');
  }
  catch (Exception $e)
  {
        die('Erreur : ' . $e->getMessage());
  }

  if (isset($_POST['valider'])){
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
  

  $sqlQuery = 'INSERT INTO test_table(Identifiant, Email, Mdp) VALUES (:Identifiant, :Email, :Mdp)';
  echo "étape 1";


  $insertRecipe = $db->prepare($sqlQuery);
  echo "étape 2";

  $insertRecipe->execute([
    'Identifiant' => $login,
    'Email' => $mail,
    'Mdp' => $password,
  ]);
  echo "étape 3";
 ?>
