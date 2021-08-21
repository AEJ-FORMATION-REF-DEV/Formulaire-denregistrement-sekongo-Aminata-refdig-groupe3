<?php

 $bdd=new PDO("mysql:host=localhost;dbname=formulaire;charset=UTF8","root","");

if(isset($_POST['envoyer'])){

    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $numero_aej= $_POST['numero_aej'];
    $telephone= $_POST['telephone'];
    $email = $_POST['email'];
    $fonction = $_POST['fonction'];
    $req =  $bdd->prepare("INSERT INTO etudiant(nom,prenoms,numero_aej,telephone,email,fonction) VALUES(?,?,?,?,?,?)");
    $req ->execute(array($nom,$prenoms,$numero_aej,$telephone,$email,$fonction));
   header('location:tableau.php');
   echo" le formulaire a été bien envoyer merci!";
   }


  ?>