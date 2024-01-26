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
    <?php include_once("variables.php") ?>
    <form action="page2.php" method="POST">
        <div>
        <p><label for="nom">NOM :</label></p>
       <input type="text" name="nom" value="" placeholder="Veuillez saisir votre nom">
        </div>

        <div>
        <p><label for="prenom">PRENOM :</label></p>
       <input type="text" name="prenom" value="" placeholder="Veuillez saisir votre/vos prenoms">
        </div>
        <div>
            <label for="age">Veuillez choisir votre age:</label>
        </div>
        <div>
            <input type="number" name="age" id="age" min="0" value=""/>
        </div>

        <div>
            <h3>LANGUES</h3>
            <?php
            foreach($languages as $lang)
            echo"
            <input type='checkbox' id='$lang' name='$lang' value='$lang'>
            <label for='$lang'>$lang</label>
               ";
            ?>
        </div>

       <div>
           <h3>COMPÉTENCES INFORMATIQUES</h3>


            <?php
            foreach($competences as $compt)
            echo"
            <input type='checkbox' id='$compt' name='$compt' value='$compt'>
            <label for='$compt'>$compt</label>  ";
            ?>
       </div>





        <input type="submit" name="SOUMETTRE" />


    </form>
</body>
</html>
