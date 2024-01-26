<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language=javascript type="text/javascript" src="page2.js"></script>
</head>
<body>
    <form action="page2.php" method="POST">
        <div>
            <label for="PHT">Prix Hors Taxe:</label>
            <input type="text" name="PHT" id="PHT" value="">
        </div>

        <div>
            <label for="TVA">TVA:</label>
            <input type="text" name="TVA" id="TVA" value="">
        </div>

        <button  type="sumbit" Onclick="verif()"> SOUMETTRE </button>
        <button type="reset"> ANNULER </button>

        <!-- <div>
            <input type="text" name="Y" id="Y" value="">
            <input type="hidden" name="Z" id="Z" value="">
        </div> -->

    </form>

</body>
</html>
