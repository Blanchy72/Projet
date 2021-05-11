<html>
<?php echo "veuillez remplir le formulaire</br>";?>
<form action="formulaire.php" method="post">
<p>rayon:<input type="text"name="rayon"/></p>
<p>hauteur:<input type="text" name="hauteur"/></p>
<button style="margin-left:22px" type="Submit">valider</button>
</form>
<?php
function volumeCone($rayon,$hauteur){
	$volume=$rayon*$rayon*$hauteur*(1/3)
echo "Le volume d'un cone de rayon $rayon et de hauteur $hauteur est de $volume"}
Volumecone($_Get['$rayon'],$_Get['$hauteur']);
?>
</html>