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
    .b{
		margin-left: 37%;
		width: 30%;
		padding: 2% 2%;
		border-color: #fff;
		background-color: #fff;
		color : rgb(0, 162, 232);
	}
	.b:hover{
		border: solid #fff;
		background-color: transparent;
		color: #fff;
	}
	label{
		color: #fff;
	}
	select{
		color: #fff;
	}
	option{
		background-color: rgba(0,14, 120, 0.5);
	}
</style>
<body>
	<form action="signup.php" method="POST">
		<h2>Enregistrez-Vous</h2>
		<label>Pseudo : </label><input class="a" type="text" name="pseudo"required=""><br><br>
		<label>Mot de passe : </label><input class="a" type="password" name="mdp" required=""><br><br>
        <label>Confirmez mot de passe : </label><input class="a" type="password" name="mdpc" required=""><br><br>
        <label>E-Mail : </label><input class="a" type="email" name="mail" required=""><br><br>
        <label>Sex : </label><select class="a" name="sex"><option>M</option>
                            <option>F</option>
        </select><br><br>
		<input class="b" type="submit" value="valider"><br><br>
	</form>
</body>
</html>