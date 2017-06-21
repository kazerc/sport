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

  <div id="register">

    <form action="<?php echo site_url('Data/okinscription'); ?>" autocomplete="on" method="POST">
      <h1 id="registerh1">Inscription </h1>
      <p>
        <label for="nom" class="nom"> Nom </label>
        <input id="nom" name="nom" required="required" type="text" placeholder="nom" />
      </p>
      <p>
        <label for="prenom" class="prenom"> Prenom </label>
        <input id="prenom" name="prenom" required="required" type="text" placeholder="prenom" />
      </p>
      <p>
        <label for="login" class="login"> Login </label>
        <input id="login" name="login" required="required" type="text" placeholder="login ou email" />
      </p>

      <p>
        <label for="password" class="password"> Mot de passe </label>
        <input id="password" name="password" required="required" type="password" placeholder="ex. X8df!90EO" />
      </p>
      <p>
        <label for="mail" class="mail"> E-mail </label>
        <input id="mail" name="mail" required="required" type="email" placeholder="adresse mail" />
      </p>
      <p>

        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <label for="avatar" class="avatar"> Avatar </label>
        <input type="file" name="avatar" id="avatar" required="required">

      </p>
      <p class="login button">
        <input type="submit" value="Validez" />
      </p>

    </form>
  </div>


  <?php include( 'footer.php') ?>

</body>

</html>