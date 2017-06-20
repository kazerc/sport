<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">
	<meta charset="utf-8">
	<title>Club de sport de l'IUT de Senart</title>

</head>
<body>

  <?php include('header.php') ?>

<?php 
  if (isset($_POST["login"]) AND isset($_POST["password"]))  {
  echo '<p> Bonjour ' . $_POST["login"] . '</p>' ;  
    
  }
  
  else {
   
  }
  
  ?>

<div class="bouton">
	<a href="<?php echo site_url('Liens/team'); ?>" class="bouton"><input type="button" value="Créer une équipe"/>
</a>
</div>

<div class="bouton">
<a href="<?php echo site_url('Liens/event'); ?>" class="bouton"><input type="button" value="Créer un événement" />
	</a>
</div>

<div class="bouton">
<a href="<?php echo site_url('Liens/calendrier'); ?>"><input type="button" value="Accéder au calendrier" href="lien"/>
	</a>
	</div>

<div class="bouton">
<a href="<?php echo site_url('Liens/rejoindre'); ?>" class="bouton"><input type="button" value="Rejoindre une équipe" href="lien"/>
	</a>
</div>

<div class="bouton">
<input type="button" value="Désigner un entraineur" href="lien"/>
</div>

<?php include('footer.php') ?>

</body>
</html>