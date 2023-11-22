<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    spl_autoload_register(function(string $class){
        require "./$class.php";
    });
    
    $jose = new Homme("José","Dujardin",45);
    $jose->setPrenom("Jean")->setNom("Garcia")->setAge(18);
    $jose->vieillir();
    $jose->afficher();

    $leopoldin = new Homme("Léopoldin", "Marilatour", 18);

    $jose->marier($leopoldin);
    $jose->afficher();
    $leopoldin->afficher();

    ?>
</body>
</html>