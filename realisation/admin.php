<!DOCTYPE html>
<html>
<head>
	<title> Admin gestion Crèche</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>


<form>
	
	<div class="row">
		<div class="col">
			<label for="firstname">Prénom</label>
			<input type="text" class="form-control" id="firstname" placeholder="Prénom de l'enfant">
		</div>
		<div class="col">
			<label for="lastname">Nom</label>
			<input type="text" class="form-control" id="lastname" placeholder="Nom de l'enfant">
		</div>
	</div>

	<div class="col">
		<label for="birthday">Date anniversaire</label>
		<input type="date" class="form-control" id="birthday" placeholder="Date anniversaire enfant">
	</div>

	<div class="row">
		<div class="col">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
		</div>
		<div class="col">
			<label for="parent_contact">Parent contact</label>
			<input type="text" class="form-control" id="parent_contact" placeholder="entrer info contact parent">
		</div>
	</div>

	<div class="form-group">
		<label for="remarks">Remarque</label>
		<textarea class="form-control" id="remarks" rows="3"></textarea>
	</div>

	<div class="row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </div>


</form>


</body>
</html>