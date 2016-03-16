<?php
    #Créer l'en tête html d'une page si la personne a une session ouverte
    function getHeader($startSession,$title){
        if ($startSession==True) {
            echo "<html><head><title>$title</title><meta charset='UTF-8'></head><body>";
        }
        else{
            session_start();
            echo "<html><head><title>$title</title><meta charset='UTF-8'></head><body>";
        }
    }
    function getFooter(){
        echo "</body></html>";
    }
?>
