<?php
    session_start();
    $id_membre = $_SESSION['id'];

    $debut = $_POST['debut'];
    $sujet = $_POST['sujet'];

    if(empty($sujet))
    {
        echo "Le sujet est vide <br/>";
        echo '<a href="nouveau_sujet.php">Recommencer</a>';
    }
    else if(strlen($sujet) > 54)
    {
        echo "Le sujet est trop long <br/>";
        echo '<a href="nouveau_sujet.php">Recommencer</a>';
    }
    else
    {
        $s = $debut.' '.$sujet;
        $db = new PDO('mysql:host=localhost; dbname=explique_simplement', 'root', '');
        $str = 'INSERT INTO sujet VALUES(null, :id_membre, :contenu, :date_creation)';
        $req = $db->prepare($str);
        $val = array(
            'id_membre' => $id_membre,
            'contenu' => $s,
            'date_creation' => date('Y-m-d') 
        );
        $req->execute($val);

        echo "Sujet créé!<br />";
        echo '<a href="mes_sujets.php">Mes sujets</a>';
    }
?>