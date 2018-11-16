<?php
    $id= $_GET['id'];
    $tache = strip_tags($_POST['tache']);
    $descr = strip_tags($_POST['desc']);
     $pdo_options[PDO:: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
     $bdd = new PDO('mysql:host=localhost; dbname=tache', 'root', '', $pdo_options);
     $req = $bdd->prepare('UPDATE element SET tache= :tache, descr= :descr WHERE id = :id'); 
     $val = array(
        'tache' => $tache,
        'descr' =>$descr,
      'id' => $id);
      $req->execute($val);
      header("location:index.php");
?>