<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page3.css">
    <title>Document</title>
</head>
<body>
    <?php include_once("variables.php"); ?>
    <p class="blk" align="center">
        Mr/Mme <?php echo $_POST['nom'].' '.$_POST['prenom'].' agé de '.$_POST['age']?>
    </p>


    <p>
        <h3>MES LANGUES</h3>
     <?php
            echo"<ul>";
            foreach($languages as $lang)
            if(isset($_POST["$lang"])){
             echo"<li>$lang </li>";
            }
            echo"</ul>";
      ?>
    </p>

    <h3>MES COMPÉTENCES</h3>
     <?php
            echo"<ul>";
            foreach($competences as $compt)
            if(isset($_POST["$compt"])){
                echo"<li>$compt </li>";
            }
            echo"</ul>";
      ?>
    </p>

</body>
</html>
