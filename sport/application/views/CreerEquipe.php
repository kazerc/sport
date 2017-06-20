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



	<h1 id="equipe"> Creation d'une équipe </h1>

			

	<form method="POST" action="<?php echo site_url('Data/okcreation'); ?>">

	 <p>
	 <label for="nomEquipe" class="nomEquipe"  > Nom de l'équipe:</label>
     <input id="nomEquipe" name="nomEquipe" required="required" type="text" placeholder="nom"/>
	</p>
    <p> 
      <label for="passwordE" class="passwordE" > Mot de passe de l'équipe: </label>
      <input id="passwordE" name="passwordE" required="required" type="password" placeholder="ex. X8df!90EO" /> 
    </p>
	<p>
	 <label for="sport" class="sport"  > Sport pratiqué:</label>
     <input id="sport" name="sport" required="required" type="text" placeholder="sport"/>
	</p>
	<p>
	 <label for="ville" class="ville"  > Ville de l'équipe:</label>
     <input id="ville" name="ville" required="required" type="text" placeholder="ville"/>
	</p>	
	<p>
			 <label for="description" class="description"  > Description:    </label>     
		<textarea name="description" id="description" required="required" placeholder="description"></textarea>
	</p>
	<p>
			 <label for="mixité" class="mixité"  > Mixité: </label>     
			 <input type="radio" value="oui" name="mixité" > Équipe mixte<br>
  			<input type="radio" value="non" name="mixité" > Équipe non mixte<br>
	</p>
	<p>

			<label for="logo" class="logo"> Logo :</label>                
			<input id="logo" name="logo" required="required" type="file"/>
	</p>
	<p>
			 <label for="photo" class="photo"> Photo:</label>     
			<input id="photo" name="photo"  required="required" type="file"/>
	</p>


			<p class="button"> 
      			<input type="submit" value="Validez" /> 
				<input type="reset" value="Effacer"/>
   			 </p>

	</form>
</div>



	


		<?php include('footer.php') ?>

	</body>

</html>