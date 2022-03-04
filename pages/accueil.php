<h2 class="mt-5">Accueil</h2>
<?php
/* Sélection de toutes les lignes */
$resultQueryTasks = $mysqli->query("SELECT * FROM tasks ORDER BY id DESC");
//printf("Nombre de lignes affectées (SELECT): %d\n", $mysqli->affected_rows);
?>

<ul class="list-group">

<?php

        

        foreach($resultQueryTasks as $rowTask){

?>
  

    <li href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">

    
    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            

        <div>
           <div class="d-flex gap-2 w-100 justify-content-between">
            <h6 class="mb-0"><?php echo$rowTask["tache"] ;?></h6>
            <p class="mb-0 opacity-75"><?php echo$rowTask["dateins"] ;?></p> 
        </div>
        <small class="opacity-50 text-nowrap"><?php echo$rowTask["id"] ;?></small>
</ul>
    
<?php 

            if($rowTask["etat"] == "n"){


            $linkRealise= $dir_ws."crud.php?action=realiser&id=".$rowTask["id"];

?>
    <a herf="<?php echo $linkRealise ?>"type="button" classe="btn btn-outline-success">Réalisé</a>

<?php } ?>

<?php 

            if($rowTask["etat"] == "o"){


            $linksuppr= $dir_ws."crud.php?action=supprimer&id=".$rowTask["id"];


?>

<a herf="<?php echo $linkRealise ?>"type="button" classe="btn btn-outline-success">suppr</a>

<a href="#" type="button" class="btn btn-outline-danger">Supprimer</a>

<?php } ?>
  <?php
        
    }
    
  ?>

</li>