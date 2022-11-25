<?php
try {
    $bd_url = "localhost";
    $bd_name = "lara";
    $bd_login = "root";
    $bd_pass = "";
    $bdd = new PDO('mysql:host=' . $bd_url . ';dbname=' . $bd_name, $bd_login, $bd_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
} catch (Exception $e) {
    die(header("HTTP/1.1 500 Connexion a la base de donne impossible"));
}
?>

<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_GET['nom']; 
     $telephone = $_GET['telephone']; 
     $salaire = $_GET['salaire'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' telephone : ' . $telephone . ' salaire : ' . $salaire; 
     exit;
  }
?>

<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/employe.css">
    <title>Document</title>
</head>
<body>
<form method="{{ ('employe.blade') }}" action="GET">
 
 <fieldset>
   <legend>Employe</legend>
   <label for="name">Votre nom</label><input type="text" id="name">
   <label for="name">Telephone</label><input type="text" id="telephone">
   <label for="salaire">Salaire</label><input type="number" id="salaire">
   <input type="submit">
 </fieldset>
 
 <fieldset>
   <textarea></textarea>
  </fieldset>
</body>
</html>
<style>
  body{
    font-size:100%;
  }
  
  .parent_textarea{
    font-size:100%;
  }
  
  fieldset{
    width:550px;
    padding:30px;
    margin:50px auto;
    border:none;
    background:rgba(230,230,230,1);
    border-radius:3px;
    border:1px solid rgba(55,55,55,1);
    position:relative;
  }
  
  input{color:blue;}
  
  
  input[type="email"]{
    color:red;
  }
  
  legend{
    display:block;
    position:absolute;
    top:0px;
    left:0;
    right:0;
    height:35px;
    line-height:35px;
    background:rgba(255,255,255,1);
  }
  
  label{
    display:inline-block;
    width:150px;
  }
  
  
  input[type="text"], input[type="email"],input[type="password"]{
    background:rgba(255,255,255,1);
    height:40px;
    width:350px;
    border:1px solid rgba(55,55,55,1);
    padding:0 20px;
    margin:20px 0;
    font-size:1.1em;
  }
  
  input[type="email"]:focus:valid{
    background:#ddffdd;
  }
  
  input[type="email"]:focus:invalid{
    background:#ffdddd;
  }
  
  input:required{
    border:1px dashed orange;
  }
  
  input:optional{
    background:rgba(255,255,255,0.5);
  }
  
  input::placeholder{
    color:grey;
    font-style:italic;
  }
  
  
  textarea{
    display:block;
    width:350px;
    padding:20px;
    border:1px solid rgba(55,55,55,1);
    margin:20px 0;
    min-height:250px;
    font-size:1.1em;
  }
  
  input[type="submit"]{
  text-decoration:none;
  color:#F7F7F8;
  display:block;
  background:linear-gradient(to bottom, #FDD13B, #FEAE00);
  padding:20px 50px;
  border-radius:5px;
  border:1px solid #FEAE00;
  box-shadow:0 0 0 1px #FFF0D2 inset, 0 2px 2px #d0c2de;
  margin:auto;
  }
  
  input[type="submit"]:hover{
    background:#FEAE00;
  }
  
  input[type="submit"]:active{
    background:#FEAE00;
    box-shadow: 0 0px 10px rgba(178,37,78,0.5) inset; /*#b2254e*/
  }
</style>
