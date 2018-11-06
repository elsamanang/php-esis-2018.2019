<?php

$pseudo = strip_tags($_POST['pseudo']);
$pwd = strip_tags($_POST['mdp']);
$cpwd = strip_tags($_POST['mdpc']);
$mail = strip_tags($_POST['mail']);
$sex = strip_tags($_POST['sex']);
if (!empty($pseudo) && !empty($cpwd) && !empty($pwd) && !empty($mail) && !empty($sex)) {
	if ($pwd == $cpwd) {
		try {
            $pdo_options[PDO:: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost; dbname=ExS', 'root', '', $pdo_options);
            $req = $bdd->prepare('INSERT INTO user(pseudo, pwd, sex, mail) VALUES (:pseudo, :pwd, :sex, :mail)');
            $req->execute(array(
                'pseudo' =>$pseudo ,
                'pwd' => $pwd,
                'sex' => $sex,
                'mail' => $mail
            ));
            header('Location:ulogin.php'); 
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
	}
	else{
		header('Location:usignup.php');
	}
}
else{
	header('Location:usignup.php');
}
?>