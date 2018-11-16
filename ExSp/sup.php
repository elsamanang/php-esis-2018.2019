<?php
     $id= $_GET['id'];
     $pdo_options[PDO:: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
     $bdd = new PDO('mysql:host=localhost; dbname=tache', 'root', '', $pdo_options);
     $req = $bdd->prepare('DELETE FROM element WHERE id = :id'); 
     $val = array(
      'id' => $id);
      $req->execute($val);
      header("location:index.php");
?>