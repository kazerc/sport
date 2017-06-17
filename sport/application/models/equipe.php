<?php


public function creerEquipe(){
 
  $bdd = mysql_connect ('dwarves.iut-fbleau.fr', 'duboisc', '60f36d1201');
mysql_select_db ('duboisc', $bdd) ;


	// on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
	mysql_query ("INSERT INTO Equipe VALUES(' ','".$_POST['nomEquipe']."','".$_POST['passwordE']."','".$_POST['sport']."','".$_POST['ville']."','".$_POST['description']."','".$_POST['mixité']."','".$_POST['logo']."','".$_POST['photo']."')") or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

  	mysql_close();











?>