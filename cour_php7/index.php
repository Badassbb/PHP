<?php
session_start();
$_SESSION["nom"] = "Benji";
setcookie("prenom", "Benji", time() + 3600 * 24 * 30);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        if (isset($_COOKIE["prenom"])) {
            echo "<h1> Hello" . $_COOKIE["prenom"] . "</h1>";
        } else

            echo "<h1>Je te connais pas</h1>";
        ?>
    </p>
    <p>
        <a href="presentation.php?nom=Benjamin&age=43">Qui es tu ?</a>
    </p>

    <form method="POST" action="">
        <label for="">Nom :</label>
        <input type="text" name="nom">
        <input type="submit" value="confirmer">
    </form>
    <br>
    <br>
    <form action="presentation.php" method="post">
        <label for="">Nom :</label>
        <input type="text" name="nom"><br>
        <label for="">Email :</label>
        <input type="submit">
    </form>

</body>

</html>

<?php
if (isset($_POST['nom'])) {
    echo "bonjour" . $_POST['nom'] . " !";
}

if (isset($_GET['secret']) && !empty($_GET['secret']) && $_GET['secret'] === '255') {
    echo "vous avez trouvé le secret !";
}
?>