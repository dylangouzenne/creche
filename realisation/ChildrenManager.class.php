<?php

class ChildrenManager{

	private $_bdd; // Instance de PDO.
	

	public function setBdd(PDO $bdd)
	{
		$this->_bdd = $bdd;
	}

	public function __construct($bdd)
	{
		$this->setBdd($bdd);
	}

	public function add(Children $add_children)
	{
		// Préparation de la requête d'insertion.
		// Assignation des valeurs pour le prénom, le nom, l'age, l'adresse, le contact des parent et le commentaire.
		// Exécution de la requête.
		
		$add_children->query("INSERT INTO children (children_firstname, children_lastname, children_birthday, children_adress, children_parents_contact, children_remarks)
		VALUES ('" . $children_firstname . "', '" . $children_lastname . "', '" . $children_birthday . "', '" . $children_adress . "', '" . $children_parents_contact . "', '" . $children_remarks . "')");
		
	}

	public function delete(Children $delete_children)
	{
		// Exécute une requête de type DELETE.
	}

	public function get(Children $id_children)
	{
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Children.
	}

	public function getList(Children $list_children)
	{
		// Retourne la liste de tous les Children.

		$list_children = $_bdd->query('SELECT * FROM children');
		while($data=$list_children->fetch())
		{
			echo
				'<tr>
					<td>' . $data['children_id'] . '</td>
					<td>' . $data['children_firstname'] . '</td>
					<td>' . $data['children_lastname'] . '</td>
					<td>' . $data['children_birthday'] . '</td>
					<td>' . $data['children_adress'] . '</td>
					<td>' . $data['children_parents_contact'] . '</td>
					<td>' . $data['children_remarks'] . '</td>
				</tr>';
		}	
	}

	public function update(Children $update_children)
	{
		// Prépare une requête de type UPDATE.
		// Assignation des valeurs à la requête.
		// Exécution de la requête.
	}

}

?>