<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target PHP</title>
</head>
<body>
    <?php
$prenom = $nom = $pseudo = "";


function securisation($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = stripcslashes($donnees);
    $donnees = strip_tags($donnees);
    return $donnees;
}

$prenom = securisation($_POST['prenom']);
$nom = securisation($_POST['nom']);
$pseudo = securisation($_POST['pseudo']);

echo "Ton prénom est : " . $prenom. '<br>';
echo "Ton nom est : " .$nom.  '<br>';
echo "Ton pseudo est " .$pseudo;

?>
</body>
</html>