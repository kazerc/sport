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

    <div id="register">
      <form  action="models/event.php" autocomplete="on" method="POST">
        <h1 id="registerh1">Ajouter un evenement </h1>
        <p>
          <select name="type" id="nom">
            <option value="entrainement" selected>entrainement</option>
            <option value="competition">competition</option>
          </select>
        </p>
        <p> 
          <label for="debut" class="debut"  > Date de début</label>
          <input type="date" id="debut" name ="debut" placeholder="format yyyy-mm-jj"/> 
          <input type="time" name="debut">
        </p>
        <p>
          <label for="fin" class="fin"  > Date de fin</label>
          <input type="date" id="fin" name ="fin" placeholder="format yyyy-mm-jj"/>
          <input type="time" name="debut">
        </p>
        <p>
          <label for="periodicite" class="periodicite"  > Périodicité</label>
          <select name="periodicite" id="periodicite">
            <option value="non" selected>non</option>
            <option value="jour">jour</option>
            <option value="semaine">semaine</option>
            <option value="mois">mois</option>
          </select>
        </p>
        <p> 
          <label for="lieu" class="lieu"  > Lieu</label>
          <input type="text" id="lieu" name ="lieu" placeholder="lieu"/>
        </p>
        <p>
          <label for="description" class="description"  > Description</label>
          <input type="text" id="description" name ="description" placeholder="description"/> 
        </p>
        <p class="login button"> 
          <input type="submit" value="Ajoutez" /> 
        </p>
      </form>
    </div>
    <?php   include('footer.php'); ?>
  </body>
</html>