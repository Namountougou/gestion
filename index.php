<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/style.css" />
    <link
      rel="stylesheet"
      href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css"
    />
    <title>document</title>
  </head>
  <body>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4 logo">
          <img src="./image/logo_auf_2020_.jpg" alt="" />
        </div>
      </div>
      <div class="row ">
        <div class="col-md-12 coco">
            <h3 class="con">
            <a href="admin_php/user.php">se connecter</a></h3>
            <h3 class="ins" id="sinscrire"><a href="admin_php/enregistad.php">s'inscrire</a></h3>
          
        </div>
      </div>
    </div>
    <div class="container-fluid footer">
      <div class="col-md col-xs-8">
        <h1>Agence Universitaire de la Francophonie</h1>
      </div>
      <div class="row ww text-light">
        <div class="col-md-1 col-xs-2">
          <p class="p1">www.auf.org</p>
        </div>
        <div class="col-md-4 offset-md-7 col-xs-12">
          <p class="p2">copyrigth.auf.2022 Tous droits réservés</p>
        </div>
      </div>
    </div>
    <?php
  
    include './abonnes_php/connect_db.php';
    $req=$base->prepare('SELECT COUNT(*) FROM administrateurs');
    $req->execute();
    $nb=$req->fetchColumn();
    
    if($nb>0){
      echo "<script>
        let buton=document.getElementById('sinscrire');
        buton.style.display='none';
      </script>";
    }
    ?>
  </body>
</html>
