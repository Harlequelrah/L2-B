<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form>
        <div>
            <label for="PHT">Prix Hors Taxe:</label>
            <input type="text" name="PHT" id="PHT" value="<?php echo $_POST['PHT'] ?>"">
        </div>

        <div>
            <label for="TVA">TVA:</label>
            <input type="text" name="TVA" id="TVA" value="<?php echo $_POST['TVA'] ?>"">
        </div>

        <div>
            <label for="NTVA">TVA:</label>
            <input type="text" name="NTVA" id="NTVA" value="<?php echo $_POST['TVA'] ?>"/>

        </div>
        <div>
            <label for="PTTC">Prix Toute Taxe Comprise :</label>
            <input type="text" name="PTTC" id="PTTC" value="<?php
            $PTTC=(1+(float)$_POST['TVA'])*(float)$_POST['PHT'];
            echo  $PTTC?>"/>
        </div>

    </form>

</body>
</html>
