<?php
	try {
		$pdo_options[PDO:: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost; dbname=exs', 'root', '', $pdo_options);
		$req = $bdd->query('SELECT * FROM user');
	    while ($donne = $req->fetch()) {
            if ($donne['pseudo'] == $_POST['pseudo'] && $donne['pwd'] == $_POST['mdp'])
                $nom = $donne['pseudo'];
		}
        $req->closeCursor();
        if (!empty($nom)){
            ?><h1> hey ! <?php echo $nom." bienvenue chez nous";?></h1><?php
        }
        else{
            header('Location:ulogin.php');
        }
	}
	catch(Exception $e) {
	    die('Erreur : '.$e->getMessage());
	}

?>