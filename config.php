<?php

 //Parametrage de ma base de donnée, $host.

            $host ="localhost";

            $username = "root";

            $password = "";

            $database = "todolist2";


            $dir_fs = $_SERVER['DOCUMENT_ROOT']."/";

            $dir_ws = "/";

 
//Connexion à ma base de donnés todolist



            $mysqli = @new mysqli($host, $username, $password, $database);


            if ($mysqli->connect_errno) {
            
            /* Use your preferred error logging method here */
            echo("ERREURE DE CONNEXION   !!!!!"); 
            
            exit(); //j'arrete l'execution du programme

            //error_log('Connection error: ' . $mysqli->connect_errno);

            }








?>