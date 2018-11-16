<?php include("head.php"); ?>
    <?php
        $id= $_GET['id'];
       $pdo_options[PDO:: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
       $bdd = new PDO('mysql:host=localhost; dbname=tache', 'root', '', $pdo_options);
       $req = $bdd->prepare('SELECT * FROM element WHERE id = :id'); 
       $val = array(
        'id' => $id
    );
    $req->execute($val);
       if($donne = $req->fetch())
        {?>
        <h3><?php echo $donne['tache'] ;?></h3>
        <p><?php echo $donne['descr'] ;?></p>
       <?php 
       }$req->closeCursor();
    ?>
    <a href="sup.php?id=<?php echo $id;?>"><button>Suprimer</button></a>
    <a href="modif.php?id=<?php echo $id;?>"><button>Modifier</button></a>	
</body>
</html>