<?php include("head.php"); ?>
    <h3>Bienvenue dans les gestionnaire des taches</h3>
	<p>Ici se trouve toutes les taches qui vous sont assignées et vous avez la possibilité d'en rajouter en cliquant sur l'onlget nouveau<br>
    Vous pouvez supprimer ou encore modifier une tache selon votre vouloir.</p><br><br>
    <ol>
    <?php
       $pdo_options[PDO:: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
       $bdd = new PDO('mysql:host=localhost; dbname=tache', 'root', '', $pdo_options);
       $req = $bdd->query('SELECT * FROM element ORDER BY ID DESC'); 
       while ($donne = $req->fetch())
        {?>
            <li><a href="detail.php?id=<?php echo $donne['id'] ;?>"><?php echo $donne['tache'] ;?></a></li>   
       <?php 
       }
       $req->closeCursor();
    ?>	
			
    </ol>
</body>
</html>