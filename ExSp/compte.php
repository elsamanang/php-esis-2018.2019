<!DOCTYPE html>
<html>
<head>
	<title>ExpliqueSimplement</title>
</head>
<body>
    <h1>ExpliqueSimplement</h1>
	<h3>creer un compte</h3>
	<form action="creer_compte.php" method="POST">
       
		<label>Pseudo : </label><input class="a" type="text" name="pseudo"><br><br>
		<label>Mot de passe : </label><input class="a" type="password" name="mdp"><br><br>
        <label>Confirmez mot de passe : </label><input class="a" type="password" name="mdpconf"><br><br>
        <label>E-Mail : </label><input class="a" type="email" name="email"><br><br>
        <label>Sex : </label><select class="a" name="sexe"><option>M</option>
                            <option>F</option>
        </select><br><br>
		<input class="b" type="submit" value="valider"><br><a href="index.php">j'ai deja un compte</a>
	</form>
</body>
</html>