<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">

  <meta charset="utf-8">
  <title>Club de sport de l'IUT de Senart</title>

</head>

<body>

  <?php include( 'header.php') ?>

  <?php echo '<p> Bonjour ' . $_SESSION[ 'login'] . '</p>'; ?>


  <p> Rejoindre une équipe </p>
  <p> Vous venez de rejoindre l'équipe </p>

  <p> Retour à <a href="<?php echo site_url('Liens/main'); ?>">l'accueil </a>. </p>





  <?php include( 'footer.php') ?>

</body>

</html>