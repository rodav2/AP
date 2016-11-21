<?php 

include_once "header.php";
include_once "connexion.php";

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Création de nouvelle question</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#multiple">Choix multiple</a>
						</li>
						<li>
							<a href="#unique">Choix unique</a>
						</li>
						<li class="">
							<a href="#complet">reponse a compléter</a>
						</li>
					</ul>
				</div>	

			</nav>
			<p id="multiple">
				<strong>choix multiple</strong>

				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<form role="form">
									<div class="col-md-6">
										<div class="form-group">
											<label>Question :</label>
											<input type="text" class="form-control" id="text" />

											<label>Reponse :</label>
											<input type="text" class="form-control" id="text" /><input type="checkbox" class="form-control" id="checkbox" />
											<button class="btn btn-default">Ajouter une réponse</button><button type="submit" class="btn btn-default pull-right">Enregistrer</button>
										</div>
									</div>	
							</form>
						</div>
					</div>
				</div>
			</p>

			<p id="unique" >
				<strong>choix unique</strong>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<form role="form">
								<div class="col-md-6">
									<div class="form-group">
										<label>Question :</label>
										<input type="text" class="form-control" id="text" />
	
										<label>Reponse :</label>
										<input type="text" class="form-control" id="text" /><input type="radio" class="form-control" id="radio" />
										<button class="btn btn-default">Ajouter une réponse</button><button type="submit" class="btn btn-default pull-right">Enregistrer</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</p>

			<p id="complet" >
				<strong>choix complet</strong>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<form role="form">
								<div class="col-md-6">
									<div class="form-group">
										<label>Question :</label>
										<input type="text" class="form-control" id="text" />
										
										<label>Reponse :</label>
										<input type="text" class="form-control" id="text" />
										<button class="btn btn-default">Ajouter une réponse</button><button type="submit" class="btn btn-default pull-right">Enregistrer</button>
									</div>
								</div>	
							</form>
						</div>
					</div>
				</div>
			</p>
		</div>
	</div>
</div>
