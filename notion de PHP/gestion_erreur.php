<?php
if(!file_exists("inconnu.txt")){
    die("Fichier non trouvé");
}else{
    $fichier = fopen("inconnu.txt","r");
}
?>