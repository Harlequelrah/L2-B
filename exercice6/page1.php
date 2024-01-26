<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page4.css">

</head>
<body>
    <form action="page2.php" method="POST">
        <fieldset>
            <legend>Adresse CLient</legend>
            <ul>
                <li>
                 <label for="nom"> NOM : </label>
                 <input type="text" name="nom" id="nom" value=""  placeholder="Saisissez votre nom" required/>
                </li>
                <li>
                 <label for="prenom"> PRENOM :</label>
                 <input type="text" name="prenom" id="prenom" value=""  placeholder="Saisissez votre/vos prenom(s)" required/>
                </li>
                <li>
                  <label for="age"> AGE :</label>
                  <input type="number" name="age" id="age" value="" min="0" max="150" required/>
                </li>
                <li>
                 <label for="adresse"> ADRESSE :</label>
                 <input type="text" name="adresse" id="adresse" value="" required/>
                </li>
                <li>
                 <label for="ville"> VILLE :</label>
                 <input type="text" name="ville" id="ville" value="" placeholder="Saisissez votre adresse" required/>
                </li>
                <li>
                 <label for="code_postal">CODE_POSTAL:</label>
                 <input type="text" name="code_postal" id="code_postal" value="" placeholder="Saisissez votre code_postale" required/>
                </li>
            </ul>

        </fieldset>

        <input type="submit" name ="soumettre" Onclick="verif()"  />
        <input type="reset" name ="annuler" />
    </form>

</body>
<script language="javascript" src="page3.js"></script>

</html>
