<!DOCTYPE>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ma page php</title>
</head>
<body>
    
    
    <?php
    /*$heure_connexion = 17;
    if($heure_connexion < 18){
        echo "passez une bonne journée \n";
        $journee= "oui";
    }
    else{
        echo "passez une bonne soirée \n";
        $journee = "non";
    }
    echo 'fait-il jour ? La réponse est ' .$journee. '.';

     $note = 12;
    if($note<10){
        echo "vous n'avez pas eu la moyenne";
    }elseif($note==10){
        echo "vous avez eu juste la moyenne";
    }else {
        echo "vous avez eu plus que la moyenne";
    }

    $note = 15;
    $difficulte = "moyen";
if ($note<=12 AND $difficulte=="facile"){

    echo "c'est nul !";

}elseif($note>12 AND $difficulte=="facile"){

    echo "Pas mal, mais c'était facile";

}elseif($note<=12 AND $diffculte=="difficile"){

    echo "Ne vous découragez pas, c'était difficile";

}else{

    echo"bravo !";
}

if($difficulte == "facile" OR $difficulte == "moyen"){

    echo "<br/>Ce contrôle n'était pas difficile";

}else{

    echo "<br/>Ce contrôle était dur";
}

$note = 12;

if($note == 0){
    echo "Tu es nul !";
}
elseif($note == 8){
    echo "Ce n'est pas bon";
}elseif($note == 12){
    echo "c'est moyen";
}elseif($note == 16){
    echo "Bien joué";
}elseif ($note == 20){
    echo "bravo tu peux être fière de toi";
}
else{
    echo "Je n'i pas de commentaire pour cette note";
}

switch($note){
    case 0 :
        echo "Tu es nul !";
        break;
            case 4 :
        echo "C'est très mauvais";
        break;
            case 8 :
                echo "allé encore du travail et tu vas y arriver";
                    break;
                    case 10 :
                        echo  "Juste la moyenne";
                        break;
        case 12 :
            echo "Tu peux faire mieux";
            break;
            case 14 :
                echo "Tu vois, tu a bien travaillé";
                break;
                case 16 :
                    echo "Bien joué";
                    break;
                    case 18 :
                        echo "tu frôles la perfection";
                        break;
                        case 20 :
                            echo "parfait";
                            break;
                            default : 
                            echo "Je n'ai pas de commentaire pour cette note";
$age = 24;
if ($age>=18){
    $autorisation = true;
}else{
    $autorisation = false;
}
$autrisation = ($age >=18) ? true : false;
                        }

$prenoms = array('Pierre', 'Paul', 'Jacques');
for($x = 0; $x <= 2; $x++){
    echo $prenoms[$x].'<br/>';
}

foreach($prenoms as $items){
    echo $items. '<br/>';
}

$prenom[0] = 'Pierre';
$prenom[1] = 'Paul';
$prenom[2] = 'Jacques';

$age = array(
    'Pierre' => 24,
    'Paul' => 22,
    'Jacques' => 'non renseigné');

foreach($age as $valeurs){
    echo $valeurs.'<br/>';
}

foreach($age as $clef => $valeurs){
    echo 'l\'age de' .$clef. 'est' .$valeurs.'<br/>';
}
$age['Pierre'] = 24;
$age['Paul'] = 22;
$age['Jacques'] = 'non renseigné';

echo $prenom[0].'<br/>';
echo $age['Pierre'].'<br/>';

echo'<pre>';

print_r($age); //affiche un tableau de façon sommaire un bloc

echo '</pre>'
*/

$membres = array(
    array('Pierre', 24, 'pierre.giraud@edhec.com'),
    array('Benjamin', 43, 'benjamin.bazelaire@outlook.fr'),
    array('John', 8, 'John.bazelaire@gmail.com')
);

echo $membres[0][0]. ' a ' .$membres[0][1]. ' ans' . ' son email est : ' .$membres [0][2] . '.<br/>';
echo $membres[1][0]. ' a ' .$membres[1][1]. ' ans' . ' son email est : ' .$membres [1][2] . '.<br/>';
echo $membres[2][0]. ' a ' .$membres[2][1]. ' ans' . ' son email est : ' .$membres [2][2] . '.<br/>';

for($ligne = 0; $ligne < 3 ; $ligne++){
   $membre_num = $ligne+1;
   echo 'Membre numéro : ' .$membre_num. '<br/>';
   echo "<ul>";
   for($col = 0; $col < 3; $col++){
    echo '<li>' .$membres[$ligne][$col]. '</li>';
   } 
   echo '<br/>';
   echo '</ul>';
}
?>
</body>
</html>