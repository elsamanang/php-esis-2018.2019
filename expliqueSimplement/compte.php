<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ExpliqueSimplement</title>
</head>
<body>
    <h1>ExpliqueSimplement</h1>
    <h3>Créer un nouveau compte</h3>
    <form method="post" action="creer_compte.php">
        <label>Pseudo : </label>
        <input type="text" name="pseudo" />
        <br/>
        <label>Mot de passe:</label>
        <input type="password" name="mdp" />
        <br/>
        <label>Confirmer:</label>
        <input type="password" name="mdpconf" />
        <br/>
        <label>Email:</label>
        <input type="text" name="email" />
        <br/>
        <label>Sexe:</label>
        <select name="sexe">
            <option value="f">Femme</option>
            <option value="m">Homme</option>
        </select>
        <br/>
        <input type="submit" value="Créer" /> <a href="index.php">J'ai déjà un compte</a>
    </form>
</body>
</html>