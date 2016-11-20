<?php 

include_once "header.php";
include_once "connexion.php";

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">		 
					<label >Question :</label>
					<input type="text" class="form-control" />
				</div>
				<div class="checkbox">	 
					<label><input type="checkbox" />Check me out</label>
				</div> 
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>