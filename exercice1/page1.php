<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <form action="Page2.php" method="POST">
        <label for="nom">NOM :</label> </br><input type="text" name="nom" id="nom"></br>
        <label for="MDP">MOT DE PASSE :</label></br><input type="password" name="MDP" id="MDP" required></br>
        <button type="submit"> Envoyer </button>
        <button type="reset"> Recommencer </button>
    </form>
</body>
</html>
