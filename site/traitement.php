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
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    echo "<ul>";
    echo '<li>' .'Mail : ' .$mail .'</li><BR>';
    echo '<li>' .'password : ' .$password .'</li><BR>';
    echo "</ul>";
    $sqlQuery = 'INSERT INTO test_table(Email, Mdp) VALUES (:Email, :Mdp)';
    echo "étape 1";
  
    
    $insertRecipe = $db->prepare($sqlQuery);
    echo "étape 2";
  
    $insertRecipe->execute([
      'Email' => $mail,
      'Mdp' => $password,
    ]);
    echo "étape 3";
  
  }

  if (isset($_POST['connexion'])){
    echo "yes bébé";
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    echo "<ul>";
    echo '<li>' .'Mail : ' .$mail .'</li><BR>';
    echo '<li>' .'password : ' .$password .'</li><BR>';
    echo "</ul>";

   
    if (isset($_POST['email']) &&  isset($_POST['password'])) {
      foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
          $loggedUser = [
              'email' => $user['email'],
          ];
      } else {
          $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
              $_POST['email'],
              $_POST['password']
          );
      }
  }
}


  }
  

 
 ?>