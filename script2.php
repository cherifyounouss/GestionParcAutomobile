<?php
	$log = $_REQUEST['login'];
	$pass = $_REQUEST['pwd'];
	$bdd = new PDO('mysql:host=localhost;dbname=parc_auto;charset=UTF8', 'root','');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$result = $bdd->query('SELECT * FROM departement');
	while($donnees = $result->fetch()){
		if(($donnees['email_chef']==$log) && ($donnees['password']==$pass)){
			echo "Bienvenue ".$donnees['prenom']." ".$donnees['nom'];
		}
	}
	$result ->closeCursor();
	?>