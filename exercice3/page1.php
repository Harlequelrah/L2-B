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
    <form action="page2.php" method="POST">
    </br>
    </br>
    <p><label for="nom">NOM :</label></p>
       <input type="text" name="nom" value="" placeholder="Veuillez saisir votre nom">
       </br>
       </br>
       <div>
               <h3><label for="lvl">Niveau en PHP</label></h3>
            <ul>
                <li><input type=radio name="lvl" value="Debutant" />Debutant</li>
                <li><input type=radio name="lvl" value="Confirmé"  />Confirmé</li>
            </ul>
        </div>
        </br>
        <input type="submit" name="SOUMETTRE" />
         </br>
         </br>
        <input type="reset" name="ANNULER" />


    </form>
</body>
</html>
