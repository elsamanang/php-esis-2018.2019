<?php
    $id_sujet = $_POST['id_sujet'];
    $explication = $_POST['explication'];
    if(empty($explication))
    {
        echo "L'explication est vide <br/>";
        echo '<a href="sujet.php?id='.$id_sujet.'">Recommencer</a>';
    }
    else if(strlen($explication) > 300)
    {
        echo "L'explication est trop longue <br/>";
        echo '<a href="sujet.php?id='.$id_sujet.'">Recommencer</a>';
    }
    else
    {
        $db = new PDO('mysql:host=localhost; dbname=explique_simplement','root', '');
        $str = 'INSERT INTO explication VALUES(null, :id_sujet, :contenu,:date_publication)';
        $req = $db->prepare($str);
        $val = array(
        'id_sujet' => $id_sujet,
        'contenu' => $explication,
        'date_publication' => date('Y-m-d')
        );
        $req->execute($val);
        echo "Votre explication a été bien publiée<br />";
        echo '<a href="sujet.php?id='.$id_sujet.'">Retour au sujet</a>';
    }
?>

 











 
