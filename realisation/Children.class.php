<?php 

class Children{

	public $children_id;
	public $children_firstname;
	public $children_lastname;
	public $children_birthday;
	public $children_adress;
	public $children_parents_contact;
	public $children_remarks;

	public function __construct($children_id, $children_firstname, $children_lastname, $children_birthday, $children_adress, $parents_contact, $children_remarks)
	{
		$this->id = $children_id;
		$this->firstname = $children_firstname;
		$this->lastname = $children_lastname;
		$this->birthday = $children_birthday;
		$this->adress = $children_adress;
		$this->parents_contact = $children_parents_contact;
		$this->remarks = $children_remarks;
	}

	// fonction d'hydratation permet d'assigner des valeurs au attribut de notre objet
	public function hydrate(array $donnees)
	{
	  foreach ($donnees as $key => $value)
	  {
	  	// On récupère le nom du setter correspondant à l'attribut.
	    $method = 'set'.ucfirst($key);
	    
	    // Si le setter correspondant existe.    
	    if (method_exists($this, $method))
	    {
	    	// On appelle le setter.
      		$this->$method($value);
	    }
	  }
	}

	// liste des setters (méthode chargée d'assigner une valeur à un attribut en vérifiant son intégrité) 

	public function setId($children_id)
	{
		// L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
		$this->children_id = (int) $_id;
	}
	
	public function setFirstname($children_firstname)
	{
		// On vérifie qu'il s'agit bien d'une chaîne de caractères.
		// Dont la longueur est inférieure à 50 caractères.
		if (is_string($_firstname) && strlen($_firstname) <= 50)
		{
		  $this->children_firstname = $_firstname;
		}
	}

	public function setLastname($children_lastname)
	{
		// On vérifie qu'il s'agit bien d'une chaîne de caractères.
		// Dont la longueur est inférieure à 50 caractères.
		if (is_string($_lastname) && strlen($_lastname) <= 50)
		{
		  $this->children_lastname = $_lastname;
		}
	}

	public function setBirthday($children_birthday)
	{
		// On vérifie qu'il s'agit bien d'une chaîne de caractères.
		// Dont la longueur est inférieure à 12 caractères.
		if (is_string($_birthday) && strlen($_birthday) <= 12)
		{
		  $this->children_birthday = $_birthday;
		}
	}

	public function setAdress($children_adress)
	{
		// On vérifie qu'il s'agit bien d'une chaîne de caractères.
		// Dont la longueur est inférieure à 255 caractères.
		if (is_string($_adress) && strlen($_adress) <= 255)
		{
		  $this->children_adress = $_adress;
		}
	}

	public function setParents_contact($children_parents_contact)
	{
		// On vérifie qu'il s'agit bien d'une chaîne de caractères.
		// Dont la longueur est inférieure à 100 caractères.
		if (is_string($_parents_contact) && strlen($_parents_contact) <= 100)
		{
		  $this->children_parents_contact = $_parents_contact;
		}
	}

	public function setRemarks($children_remarks)
	{
		// On vérifie qu'il s'agit bien d'une chaîne de caractères.
		// Dont la longueur est inférieure à 255 caractères.
		if (is_string($_remarks) && strlen($_remarks) <= 255)
		{
		  $this->children_remarks = $_remarks;
		}
	}




}

?>







