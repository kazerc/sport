
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
  
  <p> Inscription réussie! </p>
<?php 
  if (isset($_POST["login"]) AND isset($_POST["password"]) AND isset($_POST["prenom"]) AND isset($_POST["nom"]) AND isset($_POST["mail"]) AND isset($_POST["mail"]) AND isset($_POST["avatar"]) )  {
  echo '<p> Bonjour ' . $_POST["login"] . '</p>' ;  
		




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