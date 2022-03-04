

<?php

//Vérification de $_GET["mod"]

    if(isset($_GET["mod"])){

        switch ($_GET["mod"]) {
            
            case "ajouter":

                include($dir_fs."pages/ajouter.php");
     

                break;

                    case "accueil":

                    include($dir_fs."pages/accueil.php");

                        case "aide":

                            include($dir_fs."pages/aide.php");
             

                

                


        }
    
    }else{

        include($dir_fs."pages/accueil.php");

    }

?>