<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php setcookie('nom',$_POST['nom'],['httpOnly' =>true,'secure'=>true,'expires'=>time()+365*24]) ;?>
    <?php $tab=["nom","prenom","age","ville","code_postal","adresse"] ;?>

    <table border="">
    <?php foreach($tab as $x)
            echo "<tr>
             <td>$x</td>
             <td>$_POST[$x]</td>
            </tr>"
    ?>

    </table>

</body>
</html>
