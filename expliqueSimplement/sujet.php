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
    <?php
        $id_sujet = $_GET['id'];
        $db = new PDO('mysql:host=localhost; dbname=explique_simplement','root', '');
        $str = 'SELECT * FROM sujet WHERE id = :id';
        $req = $db->prepare($str);
        $val = array(
        'id' => $id_sujet
        );$req->execute($val);
        $s = $req->fetch(PDO::FETCH_OBJ);
        echo '<h2>'.$s->contenu.' ?</h2>';
        ?>
        <strong>Explications:</strong><br/><br/>
        <?php
        $db = new PDO('mysql:host=localhost; dbname=explique_simplement','root', '');
        $str = 'SELECT * FROM explication WHERE id_sujet = :id_sujet';
        $req = $db->prepare($str);
        $val = array('id_sujet' => $id_sujet);
        $req->execute($val);
        while($s = $req->fetch(PDO::FETCH_OBJ))
        {
            echo $s->contenu.'. <em>Posté le '.$s->date_publication.'</em><br/><br/>';
        }
    ?>
    <strong>Nouvelle explication</strong>
    <form method="post" action="nouvelle_explication.php">
        <input type="hidden" name="id_sujet" value="<?php echo $id_sujet; ?>"
        />
        <textarea name="explication" placeholder="taper votre expliction
        ici"></textarea>
        <br/>
        <input type="submit" value="Publier" />
        <br/>
        <em>300 caractères maximum</em>
    </form>
</body>
</html>
