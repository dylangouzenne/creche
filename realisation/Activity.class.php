<?php

class Activity{

	public $activity_id;
	public $activity_name;
	public $activity_type;
	public $activity_number_max_child;

	public function __construct($activity_id, $activity_name, $activity_type, $activity_number_max_child){
		
		$this->id = $activity_id;
		$this->name = $activity_name;
		$this->type = $activity_type;
		$this->number_max_child = $activity_number_max_child;	
	}


	// activity list display function
	public function show(){
		
		// intégré la connexion a la base de données

		echo
		"<div class = ficheEnfant>
			<div>".$this->id."</div>
			<div>".$this->name."</div>
			<div>".$this->type."</div>
			<div>".$this->number_max_child."</div>
		</div>";
	}






}


?>