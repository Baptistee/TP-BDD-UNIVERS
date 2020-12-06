	<!-- AFFICHER LES ASTRES -->
	<p>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Astres
				<a data-placement="top" data-toggle="tooltip" title="Add"><button class="btn btn-success btn-xs" data-title="Add" data-toggle="modal" data-target="#add" >+</button></a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">  
						<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Taille</th>
								<th>Unité taille</th>
								<th>Masse</th>
								<th>Unité masse</th>
								<th>Modif</th>
								<th>Suppr</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while($data = $request->fetch()) {
								?>
								<tr>
									<td><?php echo	$data['noma']; ?></td>
									<td><?php echo	$data['taillea']; ?></td>
									<td><?php echo	$data['tailleunite']; ?></td>
									<td><?php echo	$data['massea']; ?></td>
									<td><?php echo	$data['masseunite']; ?></td>
									<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >x</button></p></td>
									<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >-</button></p></td>
								</tr>
								<?php
							}
							$request->closeCursor();
							?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>

	<?php
		require_once("view/piedView.php");
	?>

	
	<!-- POP UP AJOUT -->
	<!--
		-->
		<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title custom_align" id="Heading">Ajouter</h4>
				</div>
				<div class="modal-body">
	
					<form method="post" action="index.php?uc=astre&action=ajouterAstre">
						<input name="noma" class="form-control " type="text" placeholder="Nom de l'astre">
							
						<input name="taillea" class="form-control " type="text" placeholder="Taille de l'astre">
							
						<input name="tailleunite" class="form-control " type="text" placeholder="Unité de la taille">
		
						<input name="massea" class="form-control " type="text" placeholder="Masse de l'astre">
		
						<input name="masseunite" class="form-control " type="text" placeholder="Unité de la masse">
		
						<div class="modal-footer ">
							<button class="btn btn-warning btn-lg" style="width: 100%;"><span> Valider </span></button>
						</div>
					</form>

				</div>				
			</div>
		</div>

	

	
    <!-- Problème avec ce code HTML-->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content">
          		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        			<h4 class="modal-title custom_align" id="Heading">Editer</h4>
      			</div>
          		<div class="modal-body">
      			</div>
          		<div class="modal-footer ">
        			<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Confirmer</button>
      			</div>
        	</div>
    
  		</div>
    </div>
    
    
    <!-- Problème avec ce code HTML-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      	<div class="modal-dialog">
    		<div class="modal-content">
          		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        			<h4 class="modal-title custom_align" id="Heading">Supprimer</h4>
      			</div>
          		<div class="modal-body">
       
       				<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Confirmer ?</div>
       
      			</div>
        		<div class="modal-footer ">
        			<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Oui</button>
        			<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Non</button>
      			</div>
        	</div>
  		</div> 
    </div>

