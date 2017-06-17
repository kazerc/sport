
<!DOCTYPE html>
<html lang="en">
<head>

   <link rel="stylesheet" type="text/css" href="http://php-christopherduboiis703078.codeanyapp.com/assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="http://php-christopherduboiis703078.codeanyapp.com/assets/css/form.css">
	
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
    
      echo '<p> Bonjour' . $_POST["login"] . '</p>' ;  
    
  }
  
  ?>
  
  
  


<?php include('footer.php') ?>

</body>
</html>