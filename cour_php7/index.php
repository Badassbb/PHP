<?php

declare(strict_types=1);

?>

<?php
$x = 8;
$y = 4;

$addition = $x + $y;

echo "$addition <br>";

$lastName = array("John", "Morgan", "Silver", "Jack");
var_dump($lastName);
?>

<?= "Ceci est une ecriture courte de echo <br>" ?>
<?php
/*    
   $x = "Hello, moi c'est John"; //string
    $y = true; //bolean
    $v = 5; // int
    $w = 5.5; //decimal
    $a = array("lundi", "mardi", "mercredi", "jeudi");
    $b = null;
    class Voiture
    {
        function __construct()
        {
            $this->couleur = "Bleu";
        }
    }

    $maVoiture = new Voiture();
    //echo $x;
    var_dump($x, $y, $v, $w, $a, $maVoiture, $b); //renseigne sur le type de la variable interroger.
    */


$x = "le Site apprendre-a-coder.com c'est de la balle !";

echo strlen($x); //compte de nombre de lettres soit 50 puisque la premiere lettre et 0
echo str_word_count($x); // compte le nombre de mot
echo strrev($x);
echo strpos($x, "bille");

$var1 = "apprendre à cuir";
$var2 = "apprendre à apprendre";
$var3 = "apprendre à kagué";

str_replace($var1, $var2, $var3);


define("Mon_URL", "http://apprendre-a-coder.com"); // definie une constante

echo "Le site " . Mon_URL . "c'est de la balle !";

$maCouleur = $Bleu ?? $rouge ?? $orange ?? "pas de couleur"; // ?? vérifie si la couleur est définie préalablement si non il passe au suivant. 
echo  $maCouleur;
echo "<br>";
$x = 10;
$y = 2;
$a = 5;
$b = 5;
$c = 10;
$d = 20;

echo $x <=> $y; // opérateur de comparaison Un entier inférieur, égal ou supérieur à zéro lorsque $a est inférieur, égal, ou supérieur à $b respectivement.
echo "<br>";
echo $a <=> $b; // opérateur de comparaison Un entier inférieur, égal ou supérieur à zéro lorsque $a est inférieur, égal, ou supérieur à $b respectivement.
echo "<br>";
echo $c <=> $d; // opérateur de comparaison Un entier inférieur, égal ou supérieur à zéro lorsque $a est inférieur, égal, ou supérieur à $b respectivement.
echo "<br>";

echo $x <> $y; // true si $a est différent de $b après le transtypage.

echo "<br>";
echo $x > 10 and $y < 3;

//$x .= $y //

//condition if / else if / else

$motivation = 8;

if ($motivation < 3) {
    echo "Oulala, il faut se motiver";
} else if ($motivation <= 7) {
    echo "allez courage, tu vas y arrivé";
} else {
    echo "C'est génial ! Continues...";
}

$objectif = "";
switch ($objectif) {
    case "travailler en Freelance":
        echo "Freelance, c'est génial !";
        break;
    case "travailler de la maison":
        echo "Ta raison c'est de la balle !";
        break;
    case "coder mon site Web":
        echo "bonne chance !";
        break;
    default:
        echo "choisis un objectif";
}
// Boucles
$x = 0;

/*
    while ($x <= 10) /*condition*/ /*{
        echo "La valeur de x est : $x <br>";
        $x++;
        // code a executer si la condition est vraie
    }

    for ($x = 0; $x <= 10; $x++) {
        echo "La valeur de x est: $x <br>";
    }

    //fonction

    function maFonction($message)
    {
        echo $message;
    }

    maFonction("Voici mon message");

    //fonction avec un argument par défaut

    function maFonction2($message = "pas de message !")
    {
        echo $message;
    }

    maFonction2();


    function maFonction3($message, $times)
    {
        for ($i = 1; $i <= $times; $i++)

            echo "$message <br>";
    }

    maFonction3("Coucou,n c'est moi !", 15);

    function addition($x, $y)
    {
        return $x + $y;
    }

    echo addition(2, 5);

    $z = addition(2, 5);
    echo "$z <br>";

    ?>


    <?php
    function addition1(int $x, int $y): int // demande un type strict en loccurence un nombre de type intéger
    // on rajoute declare(strict_types=1); en debut de script tout en haut quoi.
    {
        $z = $x + $y;
        var_dump($z);
        return $z;
    }
    $result = addition1(2, 3);
    echo $result;

    //echo addition1(2, 5);

    //echo $z = addition1("2", 5);
    //echo $z;
    ?>
*/


// Les tableaux
$joursdelasemaine = array("Lundi", "mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
//ci-dessus j'initie un tableau des jours de la semaine

echo "$joursdelasemaine[0] <br>";
// ici je demande à sélectionner la première entrée du tableau

//
for ($j = 0; $j < count($joursdelasemaine); $j++) {
    // Ici je crée une boucle qui va partir du début du tableau et qui va écrire tous les jours inscrit dans ma variable jours de la semaine soit 7 jours de Lundi à Dimanche.
    //echo count($joursdelasemaine); demande de sortir le nombre de donner comprises dans mon tableau
    echo "$joursdelasemaine[$j] <br>";
}
$personnes = array("pierre" => 30, "Paul" => 40, "Jacques" => 50);
// Je crée un tableau de 3 entrée dans lesquelles il y a une valeur supplémentaire pour chaque entrée. 
echo $personnes["Paul"];

foreach ($personnes as $nom => $age) {
    //parcours le tableau $personnes et je boucle en initiant une variable $nom qui va récupérer ou prendre en compte Pierre, Paul et Jacques.
    //Puis, je crée une 2eme variable $age qui récupére la deuxième partie du tableau comme une colonne ou il est renseigné l'age. 
    echo "$nom a $age ans. <br>";
    // enfin je demande d'afficher ma variable nom a tel age ans et de revenir à la ligne. On appelle ces valeurs des clés et des valeurs en français.
    // Key => value. 
}
//var_dump($personnes);

class Etudiant
{ // je crée un Objet Etudiant
    public $etudie = true;
    public $nom; // je crée une propriétée nom
    public $age; // je crée une propriétée age
    public $notes; // je crée une propriétée notes

    public function __construct($nom, $age, $notes) // fonction constructeur qui instantie la création d'un objet et qui permet de pouvoir renseigner plusieurs objets.
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->notes = $notes;
    }
    public function sePresente()
    {
        if ($this->etudie) {
            echo "Je m'appelle $this->nom et j'ai $this->age ans.<br>";
            foreach ($this->notes as $matiere => $notes) {
                echo "En $matiere, j'ai obtenu $notes/20.<br>";
            }
        }
    }
}
$notesJohn = array("Maths" => 17, "Français" => 9, "Anglais" => 12);

$John = new Etudiant("John", "8", $notesJohn);

$John->sePresente();

$notesBenjamin = array("Maths" => 17, "Français" => 12, "Anglais" => 15, "PHP" => 12, "HTML/CSS" => 15);
$Benjamin = new Etudiant("Benjamin", "42", $notesBenjamin);


$Benjamin->sePresente();
?>
