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
    echo "je vien de inscription";
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

  if (isset($_POST['connexion'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $sqlQuery = 'SELECT * FROM test_table WHERE Email = :Email AND Mdp = :Mdp';
    
    $result = $db->prepare($sqlQuery);
    $result->execute([
        'Email' => $mail,
        'Mdp' => $password,
    ]);
    
    $user = $result->fetch();
    
    if ($user) {
        // L'utilisateur existe dans la base de données
        header('Location: Accueil.html');
        exit; // Arrête l'exécution du script après la redirection
    } else {
        // L'utilisateur n'existe pas dans la base de données
        echo "Email ou mot de passe incorrect.";
    }
}
?>