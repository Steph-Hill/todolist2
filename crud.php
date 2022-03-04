<?php


    include ("config.php");

    if(isset($_GET["action"])){

        switch ($_GET["action"]) {


            case "ajouter":
                var_dump($_POST);
                //$marequete = "INSERT INTO `tasks` (`id`, `tache`, `etat`) VALUES (NULL,'".$_POST ["tache"]."','n')";


                echo "je dois ajouter";

                break;


                    case "modifier":

                        $marequete = "UPDATE `tasks` SET `etat` = 'o' WHERE `tasks`.`id` ='".$_GET["id"]."'";

                        echo "je modifie";

                        break;


                            case "supprimer":

                                $marequete="delete from tasks where id=".$_GET["id"];

                                break;
            
            // j'execute ma requete   

            
            
        }


    }else{
//redirection par defaut

        header("location: ".$dir_ws) ;

    }




?>