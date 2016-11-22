<?php 
include_once "header.php";
include_once "connexion.php";

foreach ($_POST['radio'] AS $val) {
	echo $val;
}


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

			<form action="" method="post">
				<div class="col-md-4">
					<h2 class="text-center">Choix multiple</h2><br/>
					<p id="multiple">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<form role="form">
											<div class="col-md-12">
												<div class="form-group">
													<label>Question :</label>
													<input type="text" class="form-control"/><br/>

												
														<div class="col-md-10" style="padding-right: 0;padding-left: 0;">
															<label class="reponse">Reponse :</label>
															<input type="text" class="form-control" name="checkbox"/>
														</div>
														<div class="col-md-2" style="top: 22px;">
															<input type="checkbox" class="form-control" id="checkbox" name="checkbox"/>
														</div>
													
													<button class="btn btn-default ajouterReponse checkbox" data="checkbox">Ajouter une réponse</button><button type="submit" class="btn btn-default pull-right" style="margin-top:10px">Enregistrer</button>
												</div>
											</div>	
									</form>
								</div>
							</div>
						</div>
					</p>
				</div>
			</form>

			<form action="" method="post">
				<div class="col-md-4">
					<h2 class="text-center">Choix unique</h2><br/>
					<p id="unique" >
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<form role="form">
										<div class="col-md-12">
											<div class="form-group">
												<label>Question :</label>
												<input type="text" class="form-control "/><br/>
													<div class="col-md-10" style="padding-right: 0;padding-left: 0;">
														<label class="reponse">Reponse :</label>
														<input type="text" class="form-control" name="radio"/>
													</div>
													<div class="col-md-2" style="top: 22px;">
														<input type="radio" class="form-control" id="radio" name="radio" checked="checked"/>
													</div>
												<button class="btn btn-default ajouterReponse radio" data="radio" >Ajouter une réponse</button><button type="submit" class="btn btn-default pull-right" style="margin-top:10px">Enregistrer</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</p>
				</div>
			</form>

			<form action="" method="post">
				<div class="col-md-4">
					<h2 class="text-center">Choix complet</h2><br/>
					<p id="complet" >
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<form role="form">
										<div class="col-md-12">
											<div class="form-group">
												<label>Question :</label>
												<input type="text" class="form-control" name="text"/><br/>
												
												<label class="reponse">Reponse :</label>
												<input type="text" class="form-control" style="height: 60px;" name="text"/>
												<button type="submit" class="btn btn-default pull-right" style="margin-top:10px">Enregistrer</button>
											</div>
										</div>	
									</form>
								</div>
							</div>
						</div>
					</p>
				</div>
			</form>

		</div>
	</div>
</div>


<script>
$(document).ready(function() {

	 var wrapper = $('.form-group');
    
    $('.ajouterReponse').click(function(e){ 
        e.preventDefault();
        	
        	var dataelement = $(this).attr('data');

        	switch(dataelement){
        		case 'checkbox':
        			var element = $('.checkbox');
           			$(element).before('<div class="col-md-12" style="padding-right: 0;padding-left: 0;"><div class="col-md-10" style="padding-right: 0;padding-left: 0;"><label class="reponse">Reponse :</label><a href="#" class="remove_field">(Supprimer)</a><input type="text" class="form-control" /></div><div class="col-md-2" style="top: 22px;"><input type="checkbox" class="form-control" id="checkbox" name="checkbox[]"/></div></div>'); 
        			break;
        		case 'radio':
        			var element = $('.radio');
        			$(element).before('<div class="col-md-12" style="padding-right: 0;padding-left: 0;"><div class="col-md-10" style="padding-right: 0;padding-left: 0;"><label class="reponse">Reponse :</label><a href="#" class="remove_field">(Supprimer)</a><input type="text" class="form-control" /></div><div class="col-md-2" style="top: 22px;"><input type="radio" class="form-control" id="radio" name="radio"/></div></div>'); 
        			break;							
        	}
    });
    
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); 
        $(this).parent('div').parent('div').remove();
    })
});

</script>

