<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/enregistad.css">
    <title>enregistrement_ad</title>
</head>
<body>

     

<div class="container-fluid tete">
        <div class="row teta">
            <div class=" col-md-3 offset-md-1 logo1">
                <img src="../image/Logo.png" alt="">
            </div>
            <div class=" col-md-8 texte">
                <h1>Gestion des administrateurs</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid formu">
        <div class=" row fofo">
            <div class=" col-md-2 offset-md-4 log">
                <img src="../image/Logo.png" alt="">
            </div>
            <div class=" col-md-10">
                <form action="user.php" method="post">
                    Nom<input type="text" name="nom" id="" class="inputnom"><br>
                    Prenom <input type="text" name="prenom" id="" class="inputprenom"><br>
                    E-mail <input type="email" name="email" id="" class="inputmail"><br>
                     Passwords<input type="passwords" name="passwords" id="" class="inputpasswords"><br>
                    confirmer pass <input type="passwords" name="pconf" id="" class="inputpasswords1">
                    
                    <button type="submit" value="fermer" name="fermer" id="fermer"><a  class="buton" href="../index.html">Fermer</a></button> 
                <form action="admin.php" method="post">
                    Nom<input type="text" name="nom" id="" class="inputnom" required=""><br>
                    Prenom <input type="text" name="prenom" id="" class="inputprenom" required><br>
                    E-mail <input type="email" name="email" id="" class="inputmail" required><br>
                     Passwords<input type="passwords" name="passwords" id="" class="inputpasswords" required><br>
                    confirmer pass <input type="passwords" name="pconf" id="" class="inputpasswords1" required>
                    
                    <button type="submit" value="fermer" name="fermer" id="fermer"><a  class="buton" href="../index.php">Fermer</a></button> 
                    <span class="buton1"><button type="submit" value="Valider" name="valider" id="Valider"> Valider</button></span>

                </form>
             


            </div>
        </div>

    </div>
    <div class="container-fluid footer">
        <div class="row foot">
            <div class="col-md-1">
                <p class="p1">www.auf.org</p>
            </div>
            <div class=" col-md-6 offset-md-1">
                <p class="p2">2022 &copy;Tous droits réservés</p>

            </div>

        </div>
    </div>
</body>
</html>