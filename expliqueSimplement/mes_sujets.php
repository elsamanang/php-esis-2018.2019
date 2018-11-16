<!DOCTYPE html>
<html>
<?php
    session_start();
    if(!isset($_SESSION['membre_connected']))
    {
        header('Location: index.php');
    }
    $id_membre = $_SESSION['id'];
?>
<head>
    <meta charset="utf-8" />
    <title>ExpliqueSimplement</title>
</head>
<body>
    <h1>ExpliqueSimplement</h1>
    <p>
        <a href="nouveau_sujet.php">Nouveau sujet</a><br />
        <a href="mes_sujets.php">Mes sujets</a><br />
        <a href="autres_sujets.php">Autres sujets</a><br />
        <a href="deconnecter.php">Se deconnecter</a><br />
    </p>
    <h1>Mes sujets</h1>
    <?php
        $db = new PDO('mysql:host=localhost; dbname=explique_simplement', 'root', '');
        $str = 'SELECT * FROM sujet WHERE id_membre = :id_membre';
        $req = $db->prepare($str);
        $val = array(
            'id_membre' => $id_membre
        );
        $req->execute($val);
        
        $tab_sujet = array();
        while($s = $req->fetch(PDO::FETCH_OBJ))
        {
            echo '<a href="sujet.php?id='.$s->id.'">'.$s->contenu.'</a> ? <em>Posté le '.$s->date_creation.'</em><br/><br/>';
        }
    ?>
</body>
</html>