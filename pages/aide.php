<?php


/* requete de lecture
je test si il y a des resultats
si il y a des  resultats je ferme ma boucle
sinon pas de resultats j'informe mon utilisateur


$resultQueryAide = $mysqli->query("SELECT * FROM aide ORDER BY id DESC");
//var_dump($resultQueryAide);
//si il n'y a pas de resultat j'informe mon utilisateur
if ($resultQueryAide->num_rows<1 ) {

?>
    
<h2>il n'y a pas de resultats </h2>


<?php

} else {

?>

<?php
{ 
    foreach($resultQueryAide as $rowaide){

}

?>*/
