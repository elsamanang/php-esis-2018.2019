<?php

$tache = strip_tags($_POST['tache']);
$descr = strip_tags($_POST['desc']);
if (!empty($tache) AND !empty($descr)) {
    $db = new PDO('mysql:host=localhost; dbname=tache', 'root', '');
    $str = 'INSERT INTO element VALUES (null,:tache, :descr)';
    $val = (array(
                'tache' =>$tache ,
                'descr' => $descr,
            ));
    $req = $db->prepare($str);
    $req->execute($val);
    header("location:index.php");
}
else{
    header("location:new.php");
    
}