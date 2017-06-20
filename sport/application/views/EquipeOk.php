
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
  
  <p> Création de l'équipe réussie! </p>
<?php 
  if (isset($_POST["nomEquipe"]) AND isset($_POST["passwordE"]) AND isset($_POST["prenom"]) AND isset($_POST["sport"]) AND isset($_POST["ville"]) AND isset($_POST["description"]) AND isset($_POST["mixité"]) AND isset($_POST["logo"]) AND isset($_POST["photo"]) )  {
  echo '<p> Vous venez de creer l\'équipe  ' . $_POST["nomEquipe"] . '</p>' ;  
		




    ?> 

    <p> Retour à <a href="<?php echo site_url('Liens/home'); ?>">l'accueil </a>. </p>
  
<?php 
  }
  
  else {
     
    
  }
  
  ?>
  
  
  


<?php include('footer.php') ?>

</body>
</html>