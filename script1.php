<?php
	$log = $_REQUEST['email'];
	$pass = $_REQUEST['passwd'];
	$bdd = new PDO('mysql:host=localhost;dbname=parc_auto;charset=UTF8', 'root','');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$result = $bdd->query('SELECT * FROM gestionnaire');
	while($donnees = $result->fetch()){
		if(($donnees['login']==$log) && ($donnees['password']==$pass)){
			echo "Bienvenue ".$donnees['prenom']." ".$donnees['nom'];
		}
	}
	$result ->closeCursor();
	?>