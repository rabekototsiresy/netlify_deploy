<?php
$base = new PDO("mysql:host=localhost;dbname=cafetaria",'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if(isset($_POST['nom']) && ($_POST['mdp']) && ($_POST['cmdp'])){
   $identifiant = $_POST['nom'];
    $MotDePasse = $_POST['mdp'];
    $confirmation = $_POST['cmdp'];
$requete = $base->prepare("INSERT INTO inscription (identifiant,MotDePasse,Confirmation) VALUE(?,?,?)");
$requete->execute(array($_POST['nom'],$_POST['mdp'],$_POST['cmdp']));

}else{
    /*
    echo"<h1>un champs vide</h1>";
    */
}
/*
$donne = $base->query('SELECT * FROM inscription');
while($donneRecuperer = $donne->fetch()){
    echo"<h1>".$donneRecuperer['identifiant'] ."-".$donneRecuperer['MotDePasse']."</h1>";
  
}
  */

?>



<!doctype html>
<html>
<head>
<meta charset = "utf - 8"/>
<title>projet bootstap</title>
<meta name = "viewport" content = "width = divice- width , initial-scal = 1.0">
<link href="css/styleAcceuil.css" rel="stylesheet">
<link href = "css/animate.min.css" rel = "stylesheet">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link href = "css/font-awesome.min.css" rel = "stylesheet">
    <link rel="shortcut icon" href="imaho.JPG">
 <style>        
a:hover{
 text-decoration:none;
color: white;
 
} 
     a{
        text-decoration:none;
color: white; 
     }
 </style> 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4" id = "corps">
                <h1>Bienvenue sur notre Cafetaria</h1>
                <h3>Notre offre</h3>
                <ol>
                    <li>Café</li>
                    <li>Cake</li>
                <li>ensemble</li>
                </ol>
                <p>si voulez mangez,connecter vous ou inscrivez s'il vous plait!!</p>
                <form>
            <div class="row">
            <div class="col-md-6 col-xs-6">
                <button class="btn btn-primary form-control"><a href="connexion.html">Connecter</a></button>
                </div>
            <div class="col-md-6 col-xs-6">
             <button class="btn btn-primary form-control" id="bouton"><a href="inscription.html">S'inscrire</a></button>
            </div>
            
                </div>
                </form>
            </div>
    </div>
    </div>
    
<script src= "js/bootstrap.min.js"></script>
<script src = "js/imagesloaded.min.js"></script>
<script src = "js/isotope.js"></script>
<script src = "js/jquery.flexslider.js"></script>
<script src = "js/jquery.js"></script>
<script src = "js/smoothscroll.js"></script>
<script src = "js/wow.min.js.js"></script>
    <script src="script.js"></script>
</body>
</html>