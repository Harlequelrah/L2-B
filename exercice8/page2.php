
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php



      if(isset($_FILES['file'])&&($_FILES['file']['error']==0)&&($_FILES['file']['size']<=1000000)){
        echo"<ul>";
        echo '<li>le ficher '.$_FILES['file']['name']. ' a bien été envoyé (Il ne comporte pas d erreur)</li>';
        echo '<li>le ficher pèse '.$_FILES['file']['size'] .' Ko et ne depasse pas 1MO.</li>';
        echo"</ul>";

        $c2=( ($_FILES['file']['type']=='application/x-zip-compressed')&&(pathinfo($_FILES['file']['name'])['extension']=='zip') );
        if($c2){
          echo"<ul>";
          echo "<li>le ficher est de type ZIP </li>";
          echo "<li>et porte l 'extension .zip</li>";
          echo"</ul>";

          $rep=__DIR__;
          mkdir($rep.'/telechargements', 0777, true);
          if(move_uploaded_file($_FILES['file']['tmp_name'],$rep.'/telechargements/'.basename($_FILES['file']['name']))){
          echo"<h2>ENVOIE EFFECTUE</h2>";}
          else {
            echo 'Une erreur s\'est produite lors du téléchargement du fichier.';
           }
        }
      }

    ?>

</body>
</html>
