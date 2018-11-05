<!DOCTYPE html>
<html>
<head>
	<title>EXS</title>
</head>
<style type="text/css">
	body{
		padding: 10% 10%;
	}
	h2{
		text-align: center;
		color: #fff;
		font-size: 2.5em;
	}
	form{
		background-color: rgba(0,14, 120, 0.5);
		margin-left: 25%;
		width: 40%;
		padding: 3% 5%;
	}
	.a{
		width: 100%;
		padding: 1.5% 2%;
		border: none;
		background-color: transparent;
		border-bottom: solid #fff;
	}
	label{
		color: #fff;
	}
</style>
<body>
	<form action="login.php" method="POST">
		<h2>Connectez-Vous</h2>
		<label>Pseudo : </label><input class="a" type="text" name="pseudo"required=""><br><br>
		<label>Mot de passe : </label><input class="a" type="password" name="mdp" required=""><br><br>
		<input type="submit" value="Connexion"><br><br>
	</form>
</body>
</html>