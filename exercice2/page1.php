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
        <div>
               <h3><label for="vendeur">LISTE DES VENDEURS</label></h3>
            <ul>
                <li><input type=radio name="vendeur" value="M.Dupond" />M.Dupond</li>
                <li><input type=radio name="vendeur" value="M.Louis"  />M.Louis</li>
                <li><input type=radio name="vendeur" value="M.Martin" />M.Martin</li>
                <li><input type=radio name="vendeur" value="M.Durant" />M.Durant</li>
            </ul>
        </div>



        <div>
            <label for="listeprod"><h3>LISTE DES PRODUITS</h3></label>
            <select name="listeprod" id="listeprod">
                <option value="lampe">Lampe de bureau LED</option>
                <option value="sac">Sac à dos étanche</option>
                <option value="tasse">Tasse isotherme en acier inoxydable</option>
                <option value="enceinte">Enceinte Bluetooth portable</option>
                <option value="kit">Kit de survie en plein air</option>
                <option value="drone">Drone quadricoptère avec caméra HD</option>
                <option value="machine">Machine à café automatique</option>
                <option value="aspirateur">Aspirateur robot intelligent</option>
                <option value="oreiller">Oreiller en mousse à mémoire de forme</option>
                <option value="plante">Plante d'intérieur en pot</option>
            </select>
        </div>


        <div>
            <label for="nb_prod">Veuillez selectionne le nombre de produit à selectionner:</label>
            </div></br>
            <input type="number" name="nb_prod" id="nb_prod" min="0" value=""/>
        </div>


        </br>
        <input type="submit" name="SOUMETTRE" />


    </form>
</body>
</html>
