<?php
   

 $bdd=new PDO("mysql:host=localhost;dbname=formulaire;charset=UTF8","root","");
 
 $req = $bdd->query('SELECT * FROM etudiant');
 $listes = $req->fetchAll();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la liste des données</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<h1>La liste des données</h1>
    <table>

<tbody>

<tr class="champs">
<td>id</td>
<td>Nom</td>
<td>PRENOMS</td>
<td>NUMERO_AEJ</td>
<td>TELEPHONE</td>
<td>EMAIL</td>
<td>FONCTION</td>
<td>DATE</td>
</tr>

<?php foreach($listes as $liste ): ?>

<tr class="effet">
<td><?php echo $liste['id']?></td>
<td><?php echo $liste['nom']?></td>
<td><?php echo $liste['prenoms']?></td>
<td><?php echo $liste['numero_aej']?></td>
<td><?php echo $liste['telephone']?></td>
<td><?php echo $liste['email']?></td>
<td><?php echo $liste['fonction']?></td>
<td><?php echo $liste['date']?></td>
</tr>
<?php endforeach ?>


</tbody>






    </table>
</body>
</html>