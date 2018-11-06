<?php

class ChildrenManager{

	private $_bdd; // Instance de PDO.

	public function __construct($bdd)
	{
	$this->setBdd($bdd);
	}

	public function setBdd(PDO $bdd)
	{
	$this->_bdd = $bdd;
	}

	public function add(Children $children)
	{
	// Préparation de la requête d'insertion.
	// Assignation des valeurs pour le prénom, le nom, l'age, l'adresse, le contact des parent et le commentaire.
	// Exécution de la requête.
	}

	public function delete(Children $children)
	{
	// Exécute une requête de type DELETE.
	}

	public function get($id)
	{
	// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Children.
	}

	public function getList()
	{
	// Retourne la liste de tous les Children.
	}

	public function update(Children $children)
	{
	// Prépare une requête de type UPDATE.
	// Assignation des valeurs à la requête.
	// Exécution de la requête.
	}

}

?>