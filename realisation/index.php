<!DOCTYPE html>
<html>
<head>
	<title> App gestion Crèche</title>
</head>
<body>

<?php

	ini_set('display_errors', 1);

	require_once("Children.class.php");
	require_once("ChildrenManager.class.php");
	
	$bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8', 'simplon', 'Simplon-123');
	

	$manager = new ChildrenManager($bdd);
	    
	$manager->getList();

?>

</body>
</html>