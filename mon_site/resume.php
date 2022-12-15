<?php
include_once("inc\head.inc.php");
?>
<main>
<section class="sommaire">
<h1>Resume des cours php de la semaine</h1>
<ul>
<li><a href="">Qu'est ce qu'un site dynamique</a></li>
<li><a href="">Les variables PHP</a></li>
<li><a href="">Les constantes PHP</a></li>
<li><a href="">Syntaxe et Concatenation</a></li>
<li><a href="">Fonctions prédéfinies</a></li>
<li><a href="">Fonction Utilisateur</a></li>
<li><a href="">Les boucles</a></li>
<li><a href="">Inclusion de Fichiers</a></li>
<li><a href="">Tableaux Array</a></li>
<li><a href="">Classes et objets</a></li>
<li><a href="">Les superglobales</a></li>
<li><a href="">Get et Formulaire POST</a></li>
<li><a href="">Les cookies</a></li>
</ul>
</section>

<section>
    <h1>Le PHP</h1>
<article class="art_1">
<h2>La calculatrice</h2>
<p>j'ai créé une variable que j'ai nommés bouton "button", laquelle initie un tableau.
    j'ai créé une variable cliqué, qui récupère l'information à savoir : si le bouton est cliqué et vérifie si le button a été cliqué ou pas avec in Array.
    puis j'ai créé un variable qui stock les données ces données sont alors vérifiées et toujours stocké dans le $out.
    je crée une fonction affichage qui est le résultat de ce qui a été cliqué.
    je crée une fonction reset qui va remettre à zero l'écran d'affichage de ma calculatrice :
    si tu appui sur C alors affichage = "rien".
    sinon si alors tu execute la chaine de caractère comme un script "eval";
    soit ce qu'il y a de stocké dans la valeur retourné de stock (out)
    puis enfin j'ai constitué un formulaire tableau qui incrémente en fonction des différentes variables.
</p>


</article>
</section>
</main>
<?php
include_once("inc/footer.inc.php");
?>