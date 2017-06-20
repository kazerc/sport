<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">
    <meta charset="utf-8">
    <title>Club de sport de l'IUT de Senart</title>
  </head>
  <body>
    <?php
      include('header.php');
      ?>
    <div id="register">
    
    <form action="<?php echo site_url('Data/joinEquipe'); ?>" method="post">
        <select name="name">
            <option value="-1"  selected="selected"></option>
<?php 

$connexion = mysqli_connect('dwarves.iut-fbleau.fr','duboisc','60f36d1201','duboisc');
$req = mysqli_query($connexion,'SELECT DISTINCT nom FROM Equipe');
$a = 0;
foreach ($req as $equipe) {

  echo '<option value=' .$a. '>'.$equipe['nom'].'</option>';
  $a++;
}

?>

        


    </select>


    <div>
        <input type="password" id="password" name ="password" placeholder="mot de passe"/>
    </div>

    <div class="button">
        <button type="submit" value="envoyer" name="rejoindre_equipe">rejoindre</button>
    </div>


</form>

    </div>
    <?php
      include('footer.php');
      ?>
  </body>
</html>