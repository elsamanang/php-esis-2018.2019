<?php
    include("head.php");
?>
<style>
    form{
        padding: 2% 30%;
    }
    .a{
        width: 100%;
        padding:2% 3%;
    }
</style>
<form method="POST" action="ajout.php">
    <h3>Ajouter une nouvelle tache</h3>
    <input class="a" type="text" name="tache" placeholder="Tache :" required=""><br><br>
    <input class="a" type="text" name="desc" placeholder="Description : " required=""><br><br>
    <input class="b" type="submit" value="ajouter">
</form>