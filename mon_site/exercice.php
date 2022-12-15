
<?php
include_once("inc\head.inc.php");
?>
<h2 class="titre_exe">Exercice 1</h2><br> 
<div class="exe_1">
<p>Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »</p>
</div>

<?php
for($i = 4; $i <= 12; $i++)
{
    echo "<p>$i</p>";
}

echo "<br>"

?>
<h2 class="titre_exe">Exercice 2</h2><br> 
<div class="exe_2">
<p>Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive.</p>
</div>
<?php
function decrementation($n) 
{
if($n > 0)
{
print("$n\n");
decrementation($n - 1);
}
}
decrementation(10);
?>

<h2 class="titre_exe">Exercice 3</h2><br> 
<div class="exe_3">
<p>Écrivez un script PHP, pour vérifier si la page est appelée depuis 'HTTPS' ou 'HTTP'.</p>
</div>
<?php
if(isset($_server ['https']))
{
    echo 'le server est bien sécurisé';
}
else {
    echo 'le server est non sécurisé';
}
?>

<h2 class="titre_exe">Exercice 4</h2><br> 
<div class="exe_4">
<p>Écrivez un script PHP pour rediriger un utilisateur vers une autre page.</p>
</div>
<?php


?>

<h2 class="titre_exe">Exercice 5</h2><br> 
<div class="exe_5">
<p>Écrivez un programme PHP pour supprimer les doublons d’un tableau triée.</p>
</div>

<?php
$nombre = array ("1","2","2","3","5","6","4","4","8","9","10","10");
$trie = array_unique($nombre);
print_r($trie);
?>

<h2 class="titre_exe">Exercice 6</h2><br> 
<div class="exe_6">
<p>Écrivez un programme pour calculer la factorielle d’un nombre en utilisant la boucle for en PHP</p>
</div>

<?php
function factorisation ($nbr)
{
    $facto = 1; 

        for ($i = 1; $i <= $nbr; $i++)
{ 
    $facto = $facto * $i;
} 

return $facto; 

} 

$nbr = 3; 
$facto = factorisation($nbr); 

echo "La factorielle de $nbr est $facto"; 
?>

<h2 class="titre_exe">Exercice 8</h2><br> 
<div class="exe_7">
<p>Écrivez un programme pour afficher le triangle d’etoile suivant en utilisant une boucle for.</p>
</div>

<?php
$g=20;
for ($l = 0; $l < $g; $l++)
{
    for ($esp = ($g - $l); $esp > 0; $esp--)
    {
        echo " ";
    }
    for($e = 0; $e <= $l; $e++)
    {
        echo "*";
    }
    echo "<br>";
}
?>

<h2 class="titre_exe">Exercice 9</h2><br> 
<div class="exe_8">
<p>Écrivez pour afficher la table de multiplication 5 * 5</p>
</div>
<?php
$nbr = 5;
$res = 1;

for ($m=0; $m <= 10; $m++) { 
    $res = $nbr*$m;
    echo $nbr . ' * ' . $m . ' = ' . $res . '<br>';
}



?>



<h2 class="titre_exe">Exercice 10</h2><br> 
<div class="exe_10">
<p>Réaliser une calculatrice en php</p>
</div>

<?php
   $button=[1,2,3,'+',4,5,6,'-',7,8,9,'*','C',0,'.','/','=']; //Tableau = array variable
   // Je créer une variable button et j'y affecte un tableau avec tout les boutons et valeurs d'on j'ai besoin 
   $cliqué='';// bouton cliqué sur une variable vide
   if(isset($_POST['cliqué']) && in_array($_POST['cliqué'],$button)){
       //vérifie la variable cliqué et vérifie quelle button et cliqué de ma variable button du tableau est cliqué avec la fonction in_array
    // inset détermine si la variable est différent de null et in_array — Indique si une valeur appartient à un tableau en l'ocurrence là $button
       $cliqué=$_POST['cliqué'];
       //_post renvoi l'information comme quoi il y a eu clique en JS sauf erreur cela serait "target-e du tableau d'event-mouse"
   }
   $stock='';//stock la valeur dans la variable $cliqué et stockées dans une variable vide
   /*vérifie la variable $stock et vérifie la fonction du tableau preg_match effectue une recherche de correspondance avec une expression rationnelle standard.
   *~^ signifie commencer au premier ou au début
   *\ré*\.? signifie type de données (int) et 
   * signifie zéro ou plus et . est concaténé
   *\d+ signifie type de données (int) au moins un ou plusieurs
   * +-/* les opérateurs
   *$ aux extrémités.
   */
   if(isset($_POST['stock']) && preg_match('~^(?:[\d.]+[*/+-]?)+$~',$_POST['stock'],$out)){
       $stock=$out[0]; //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard et le stock dans la variable $out qui est egal à stock.
       //si détermine si la valeur de stock et null ou pas et effectue la recherche si des operateurs en partant du début du tableau out ont étés stocké les stock dans $out.
   }
   $affichage=$stock.$cliqué;// afficher la valeur et les opérateurs et transmets l'unité à affichage soit stock + ce qui a été cliqué
   //Reset-C- condition
   if($cliqué == 'C'){
       $affichage=''; // si tu clique sur "C" alors affichage = 'rien'

   }elseif($cliqué=='=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~',$stock)){
    // sinon si alors tu execute la chaine de caractère comme un script PHP en retournant le résultat dans affichage
       $affichage.=eval("return $stock;");//eval — Exécute une chaîne comme un script PHP
   }
   //Formulaire de sortie
   echo "<form action="" method="POST">";
       echo "<table>";
       //création d'un tableau
           echo "<tr>";
           //création d'une ligne
               echo "<td colspan="4">$affichage</td>";
               // création d'une cellule de 4 colonnes
           echo "</tr>";
           //array_chunk-- Divise un tableau en morceaux
           //sépare les valeurs des boutons
           //Et créer tr.
           foreach(array_chunk($button,4) as $partie){
            //verifie les entrées des tableaux existant jusqu'à partie soit button/cliqué/affichage/stock/partie
               echo "<tr>";
               //créer en focntion taille du tableau et imbrique un tr correspondant à une valeur du morceau......
                   foreach($partie as $button){
                    //La structure de foreach fournit une façon simple de parcourir des tableaux. foreach ne fonctionne que pour les tableaux et les objets.
                       echo "<td",(sizeof($partie)!=4?" colspan=\"4\"":""),"><button name=\"cliqué\" value=\"$button\">$button</button></td>";
                   } // renvoi la taille de td et renvoi tous les éléments contenu et les ajoutes à chaque cellule.
               echo "</tr>";
               //balise fermente de la ligne.
           } 
       echo "</table>";
       //balise fermente du tableau
       echo "<input type=\"hidden\" name=\"stock\" value=\"$affichage\">";
       // affiche les éléments dans le input renvoyé par la variable $affichage.
   echo "</form>";
   //fermeture du formulaire

   // en résumé je comprends bien l'histoire mais je sais pas l'écrire
   ?>
<?php
include_once("inc/footer.inc.php");
?>
</body>
</html>