<?php
    // verifier dans la session si le membre est connecté
    // si la clé membre_connected n'est pas dans la session, donc il n'est pas connecté
    // alors on le redirige vers la page de connexion
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
    <strong>[<?php echo $_SESSION['pseudo'] ?> connecté]</strong>
    <h2>Welcome to ExpliqueSimplement</h2>
    <p>Si vous comprennez bien un concept, un sujet ou un domaine, <br/>
    expliquer le simplement dan vos propres mots, en donnant des exemples <br/>
    ou en faisant des analogies.</p>

    <p>
        <a href="nouveau_sujet.php">Nouveau sujet</a><br />
        <a href="mes_sujets.php">Mes sujets</a><br />
        <a href="autres_sujets.php">Autres sujets</a><br />
        <a href="deconnecter.php">Se deconnecter</a><br />
    </p>
</body>
</html>