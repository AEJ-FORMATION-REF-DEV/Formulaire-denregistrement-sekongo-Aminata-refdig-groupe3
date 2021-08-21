
<?php
   

 $bdd=new PDO("mysql:host=localhost;dbname=formulaire;charset=UTF8","root","");

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div>
        <a href="tableau.php">Liste</a>

<form method="POST" action="traitement.php">
<h2>Formulaire d'Enregistrement</h2>
<p>
    <label class="lab" for="nom">Nom</label>
    <input type="text" name="nom" class="inp"> 
</p>

<p>
    <label class="lab" for="prenoms">Prénoms</label>
    <input type="text" name="prenoms" class="inp">
</p>

<p>
    <label class="lab" for="numero_aej">Numéro AEJ</label>
    <input type="text" name="numero_aej" class="inp">
</p>

<p>
    <label class="lab" for="téléphone">Téléphone</label>
    <input type="text" name="telephone" class="inp">
</p>

<p>
    <label class="lab" for="email">Email</label>
    <input type="text" name="email" class="inp">
</p>
<p>
    <label class="lab">Fonction</label>
    <select name="fonction" id="fonction">
        <option value="">Sélectionner</option>
<option value="Réferent Digital">Réferent Digital</option>
<option value="Développeur Data IA">Développeur Data IA</option>
<option value="Développeur Web & Mobile">Développeur Web & Mobile</option>
</select>
</p>


<p>
    <input class="envoyer" type="submit" name="envoyer" values="envoyer">

</p>

</form>
    </div>
</body>
</html>
