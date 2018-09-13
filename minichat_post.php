<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Atbocslat1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (\Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

if(!empty($_POST["pseudo"]) AND $_POST['message']){

  $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES( :pseudo, :message)');
  $req->execute(array(
    'pseudo' => $pseudo = $_POST['pseudo'],
    'message' => $message = $_POST['message']
  ));
}

header('Location: minichat.php');
 ?>
