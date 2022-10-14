# guerra

Jules= la partie gauche <br>
Loris= la partie droite <br>
Vincent= Login, Signin, main et bdd <br>

Un code minimum avant mardi 04/10 à 17h <br> <br>
$req = $bdd->prepare('UPDATE players_stats SET "nom de ce que tu veux modifier"="nom de ce que tu veux modifier"+1 WHERE players.id=players_stats.player_id');<br>
$req->execute(array($_SESSION['id'])); 
