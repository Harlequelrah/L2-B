<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <?php
    if(isset($_POST['MDP']) && $_POST['MDP']=="mot"){
        echo '<h1>Le mot de passe entré ('.$_POST['MDP'].')  est le bon mot de passe</h1>'; }
    if(isset($_POST['MDP']) && $_POST['MDP']!="mot") {
        echo '<h1>Le mot de passe entré ('.$_POST['MDP'].')  n\'est pas le bon mot de passe</h1>' ; }

    ?>

</body>
</html>
