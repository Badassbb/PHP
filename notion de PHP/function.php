<?php
//function NomFonction(){
//    code execute par la fonction
//}
/*
function Bonjour(){
    echo '<h1>Bonjour à tous !</h1>';
}


function BonjourUser($prenom){
    echo 'Bonjour ' . $prenom. ' !';
}

BonjourUser('Pierre');

function NomAge($prenom, $age){
    echo $prenom. ' a ' . $age. ' ans';
}
NomAge('Pierre', 24);

function DireBonjour(){
    return "Bonjour";
}

function DireBonsoir(){
    echo "Bonsoir";
}
$Bonjour = DireBonjour();
//La fonction Direbonjour retourne la valeur "Bonjour" qui est stockée
//dans la variable $Bonjour.

$Bonsoir = DireBonsoir();
//La fonction DireBonsoir echo la valeur "Bonsoir" immédiatement mais 
//cette fonction ne retourne aucune valeur.

echo $Bonjour;
echo $Bonsoir;

function Hello(){
    return "Hello";
    echo "Ce texte ne sera jamais affiché";
}

$Hello = Hello();
echo $Hello .'<br/>';

echo strlen("bonjour à tous") .'<br/>';
echo str_word_count("Tu as que de la bouche") .'<br/>';
echo str_word_count("Bonjour à tous"). '<br/>';

echo str_repeat("bonjour <br/>",5);
$Texte = "Bonjour comment allez-vous ?";

echo str_replace("Bonjour", "Bonsoir", $Texte, $i);
echo '<br> Nombre de remplacements : ' .$i;

$minmaj = "Bonjour, Tu Vas BiEn ?";
echo strtolower($minmaj) .'<br/>';

echo strtoupper($minmaj) .'<br/>';

strpos("Bonjour", "o") .'<br/>';
strpos("Bonjour à tous", "tous") .'<br/>';
strpos("Bonjour on n'a ton pantalon", "on") .'<br/>';

$str = 'J\'aime le <strong>PHP</strong>';
echo htmlspecialchars($str);

echo nl2br("Bonjour !
Commen ça va ?");

//htmlspecialchars_decode();
$ch2tb = "Bonjour à tous";
print_r (explode(" ", $ch2tb));

echo "<br><br>";
print_r (str_split("Bonjour", 2)).'<br>';


$tb2ch = array ('Bonjour', 'à', 'tous');
echo implode("/", $tb2ch);
echo join("*", $tb2ch);
*/

//------------------------------Relative Array Fonction------------------/
/*
$voitures = array(
    "Citroen" => "DS3",
    "Renault" => "Clio",
    "Peugeot" => "306",
    "Toyota" => "Yaris"
);

print_r (array_keys($voitures));

echo "<br>". "<br>";

$loisirs = array(
    "sport" => "Trail",
    "voyage" => "Ecosse",
    "musique" => "Guitare"
);

print_r (array_values($loisirs));

echo "<br>". "<br>";

if (array_key_exists("Citroen", $voitures)){
    echo "La clef existe";
}else{
    echo "La clef n'existe pas";
}

echo "<br>". "<br>";
echo array_search("Clio", $voitures);

echo "<br>". "<br>";
$prenom = array("Pierre", "Paul", "Jacques");

if (in_array("Pierre", $prenom)){
    echo "Prénom trouvé";
}else{
    echo "prénom non trouvé";
}
echo "<br>". "<br>";
$sport = array("natation", "velo", "course");
echo count($sport);

echo "<br>". "<br>";

$compter = array("A", "velo", "natation", "velo", "A");
print_r (array_count_values($compter));

echo "<br>". "<br>";

$compare = array("a" => "bleu", "b" => "vert", "c" => "jaune");
$comparant = array("a" => "bleu", "b" => "vert");
print_r (array_diff_assoc($compare,$comparant));

echo "<br>". "<br>";

//Retourne le nombre d'éléments contenu dans le tableau
$fruits = ['ananas', 'orange', 'pomme', 'poire'];
$nbr_el = count($fruits);
echo $nbr_el;
print_r (array_count_values($fruits));

echo "<br>". "<br>";
//Pousse un ou plusieurs éléments à la fin d'un tableau
$na = array_push($fruits, 'tomate', 'banane', "clémentine");
echo "<br>". "<br>";

$fruits[] = 'cerise';
print_r (array_count_values($fruits));

echo "<br>". "<br>";
print_r(array_pop($fruits)); // retourne la dernière valeur d'un tableau

echo "<br>". "<br>";
print_r (array_unshift($fruits, 'fraise', 'framboise'));
//Ajoute un élément en début de tableau
print_r (array_count_values($fruits));

$newarr = array_map(function ($fruit){
    return $fruit.'modifier';
    
}, $fruits);
$legume1 = ['patate', 'courgette'];
$legume2 = ['potiron', 'carotte'];
//fusion un ou plusieurs tableau

$legume = array_merge($legume1, $legume2);
echo "<br>". "<br>";

print_r (array_count_values($legume));
echo "<br>". "<br>";

print_r(array_intersect_key($compare,$comparant));

echo "<br>". "<br>";
$remplissage = array_fill(0, 5, "vert");
print_r ($remplissage);

echo "<br>". "<br>";
$tbkeys = array("a", "b", "c", "d");
$remplir = array_fill_keys($tbkeys, "blue");

print_r ($remplir);

$couleur = array("blue", "red");

array_push($couleur, "yellow", "pink", "green");
print_r ($couleur);
echo "<br>". "<br>";

array_pop($couleur); // supprime la dernière valeur
print_r ($couleur);

echo "<br>". "<br>";
array_unshift($couleur, "jaune", "violet"); // ajout les valeurs au début du tableau
print_r ($couleur);

echo "<br>". "<br>";
array_shift($couleur); //supprime le première élément
print_r($couleur);

echo "<br>". "<br>";
$couleur1 = array("a" => "bleu", "b" => "vert", "c" => "jaune");
$couleur2 = array("a" => "rouge", "b" => "violet", "c" => "gris");

array_splice($couleur1, 0,2, $couleur2);
print_r($couleur1);

*/
// -----------------Fonction date-----------------------/
/* 
echo time();

d- Représente le jour du mois (de 01 à 31)
m- Représente un mois (de 01 à 12 )
n- Représente un mois (de 1 à 12)
y- Représente l'année (par exemple 2023)
l- (L minuscule) - Représente le jour de la semaine (ex : lundi)
N- Représente un jour de la semaine, en chiffre (Lundi = 1, Dimanche = 7)
H- Représente les heures (de 00 à 23)
i- Représente les minutes (de 00 à 59)
s- Représente les secondes (de 00 à 59)
*/
/*
echo "<br>". "<br>";
echo "Nous sommes le " .date("d/m/y"). '<br>';
echo "Auourd'hui c'est " .date("l") . '<br>';
echo "Il est " .date("H:i:s"). '<br>';

$jour = array(
    "",
    "lundi",
    "mardi",
    "mercredi",
    "jeudi",
    "vendredi",
    "samedi",
    "dimanche"
);

$mois = array(
    "",
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
);

$datefr = $jour[date("N")]. " ".date("d"). " ".$mois[date("n")]. " ".date("Y");
echo "Nous sommes le " .$datefr;

echo "<br>". "<br>";
setlocale(LC_TIME, "fr_FR");
echo "Nous sommes le " .strftime("%A %d %B %Y"). '<br>';
echo "Il est actuellement " .strftime("%H : %M : %S");
echo "<br>". "<br>";
$date1 = checkdate(12, 31, 2014);
$date2 = checkdate(13,31,2014);
$date3 = checkdate(25,01,-100);

if($date1){
    echo "La date est valide ! <br>";

}else {
    echo "La date n'est pas valide ! <br>";
}
echo "<br>". "<br>";
if($date2){
    echo "La date est valide ! <br>";

}else {
    echo "La date n'est pas valide ! <br>";
}
echo "<br>". "<br>";
if($date3){
    echo "La date est valide ! <br>";

}else {
    echo "La date n'est pas valide ! <br>";
}
echo "<pre>";
print_r (getdate());
echo "</pre>";

echo "<br>". "<br>";
echo "<pre>";
print_r (getdate(1));
echo "</pre>";
*/

//-------------------------Les constante en PHP-------------------------/
//La valeur d'une constante est....constante (exception : constantes "magiques")
//Le nom des constantes est sensible à la casse
//Par convention, on écrit les constantes en majuscules
//Le nom d'une constante commence par un underscore soit par une lettre

define("BIENVENUE", "Bienvenue sur mon site !");
echo BIENVENUE;

constant BIENVENUE = "Bienvenue sur mon site 2 !";
?>
