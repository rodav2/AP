<?php 
include_once "header.php";
include_once "connexion.php";
include_once "Utilitaire.php";



if( isset($_POST['creationquestioncheckbox']) )
{
	
	die(var_dump( $_POST['checkbox']) );

	$result = Utilitaire::creationQuestion( $_POST['text_question'] , $_POST['module'], $_POST['text_reponse'], "checkbox", $_POST['checkbox']);	
}



if( isset($_POST['creationmodule']) )
{
	$result = Utilitaire::creationModule( $_POST['newmodule'] );	
	echo $result;
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
					<form class="navbar-form navbar-left" action="" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="newmodule" placeholder="Nom du module..." required="required"/>
						</div> 
						<input type="submit" class="btn btn-success" name="creationmodule" value="Créer le nouveau module"></input>
					</form>
				</div>

			</nav>

			<form action="creation.php" method="post">
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
													<input type="text" class="form-control" name="text_question" required="required"/><br/>												
													
													<div class="col-md-10" style="padding-right: 0;padding-left: 0;">
														<label class="reponse">Reponse :</label>
														<input type="text" class="form-control text_reponse" name="text_reponse[]" onkeyup="recupereReponse(this.value, this.parentElement.nextElementSibling.childNodes[1])" required="required"/>
													</div>
													<div class="col-md-2" style="top: 22px;">
														<input type="checkbox" class="form-control" name="checkbox[]" value=""/>
													</div>
													
													<button class="btn btn-info ajouterReponse checkbox" data="checkbox">Ajouter une réponse</button>

													<select name="Module" class="btn btn-default pull-right" style="margin-top: 10px;height: 35px;">
														<option value="Module" selected="selected" disabled="disabled">Module</option>
														<?php

														$BaseDeDonnees = ConnexionBDD::Connexion();

														$module = $BaseDeDonnees->query('SELECT id_module, module FROM modules');

														while ($donnees = $module->fetch())
														{
															echo ' <option value="'.$donnees['id_module'].'">'.$donnees['module'].'</option>';

														}	

														?>
													</select>
													<input type="submit" class="btn btn-success col-md-12" style="margin-top:10px" value="Enregistrer" id="envoyer" name="creationquestioncheckbox"></input>
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
												<input type="text" class="form-control" required="required"/><br/>

												<div class="col-md-10" style="padding-right: 0;padding-left: 0;">
													<label class="reponse">Reponse :</label>
													<input type="text" class="form-control text_reponse" name="radio" required="required"/>
												</div>
												<div class="col-md-2" style="top: 22px;">
													<input type="radio" class="form-control" id="radio" name="radio" checked="checked"/>
												</div>
												<button class="btn btn-info ajouterReponse radio" data="radio" >Ajouter une réponse</button>
												<select name="Module" class="btn btn-default pull-right" style="margin-top: 10px;height: 35px;">
														<option value="Module" selected="selected" disabled="disabled">Module</option>
													<?php

													$BaseDeDonnees = ConnexionBDD::Connexion();

													$module = $BaseDeDonnees->query('SELECT id_module, module FROM modules');

													while ($donnees = $module->fetch())
													{
														echo ' <option value="'.$donnees['id_module'].'">'.$donnees['module'].'</option>';

													}	

													?>
												</select>
												<input type="submit" class="btn btn-success col-md-12" style="margin-top:10px" value="Enregistrer" id="envoyer" name="creationquestionradius"></input>
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
												<input type="text" class="form-control" name="text" required="required"/><br/>
												
												<label class="reponse">Reponse :</label>
												<input type="text" class="form-control" style="height: 60px;" name="text" required="required"/>
												
												<select name="Module" class="btn btn-default pull-right" style="margin-top: 10px;height: 35px;">
														<option value="Module" selected="selected" disabled="disabled">Module</option>
													<?php

													$BaseDeDonnees = ConnexionBDD::Connexion();

													$module = $BaseDeDonnees->query('SELECT id_module, module FROM modules');

													while ($donnees = $module->fetch())
													{
														echo ' <option value="'.$donnees['id_module'].'">'.$donnees['module'].'</option>';

													}	

													?>
												</select>
												<input type="submit" class="btn btn-success col-md-12" style="margin-top:10px" value="Enregistrer" id="envoyer" name="creationquestiontext"></input>
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
           			$(element).before('<div class="col-md-10" style="padding-right: 0;padding-left: 0;"><label class="reponse">Reponse :</label><a href="#" class="remove_field" style="color:red">(Supprimer)</a><input type="text" class="form-control text_reponse" name="text_reponse[]" onkeyup="recupereReponse(this.value, this.parentElement.nextElementSibling.childNodes[1])" required="required"/></div><div class="col-md-2" style="top: 22px;"><input type="checkbox" class="form-control" name="checkbox[]" value=""/></div>'); 
        			break;
        		case 'radio':
        			var element = $('.radio');
        			$(element).before('<div class="col-md-10" style="padding-right: 0;padding-left: 0;"><label class="reponse">Reponse :</label><a href="#" class="remove_field" style="color:red">(Supprimer)</a><input type="text" class="form-control text_reponse" name="text_reponse[]" required="required"/></div><div class="col-md-2" style="top: 22px;"><input type="radio" class="form-control" id="radio" name="radio"/></div>'); 
        			break;							
        	}

        	

    });
    
    /*************** Suppression des reponses *********************/
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); 
       	$(this).parent('div').next().remove();
		$(this).parent('div').remove();

    });

   



});

	/*$(window).load(function(){
		
			$('input.text_reponse').keyup(function (){

				var valeur = $(this).val();
				console.log(valeur);

				var test = $(this).parent().next('div').children('input').attr('value', valeur);
				console.log(test);
	  	  });
	});*/


   /**************** generation de la valeur des checkbox *******************/
 	function recupereReponse(donnees, url) {

 		console.log(donnees);

 		console.log(url);

 		url.setAttribute('value', donnees);

		/*var test = this.parent().next('div').children().attr('value', element);
		console.log(test);*/
 	}

</script>

