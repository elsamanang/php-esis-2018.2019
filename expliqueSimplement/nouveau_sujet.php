<?php
    session_start();
    if(!isset($_SESSION['membre_connected']))
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ExpliqueSimplement</title>
</head>
<body>
    <h1>ExpliqueSimplement</h1>
    <h3>Créer un nouveau sujet</h3>
    <form method="post" action="creer_nouveau_sujet.php">
        <select name="debut">
            <option value="C'est quoi">C'est quoi</option>
            <option value="Pourquoi">Pourquoi</option>
        </select>
        <input type="text" name="sujet" placeholder="taper votre sujet ici" /> ?
        <input type="submit" value="Créer" />
        <br/>
        <em>54 caractères maximum</em>
    </form>
</body>
</html>