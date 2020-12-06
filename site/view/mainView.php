<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   	<head>
       <title>Univers APP</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	   <script src="js/jquery-1.11.1.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>
   	</head>

	<script src="js/ajax.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jqyery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/test2.js"></script>

	

<body>

	<!-- Toutes les données du formulaire seront envoyées à la page 'insertCourse.php' avec la méthode POST. -->
	<form method="post" action="insertCourse.php">
		<table><caption>Ajout d'un cours</caption>
			<tr><td>Code : </td><td><input type="text" name="code" /></td></tr> </br>
			<tr><td>Nom : </td><td><input type="text" name="name" /></td></tr></br>
			<tr><td>Description : </td><td><textarea name="description" rows="5" cols="40"></textarea></tr></br> 
			<tr><td></td><td><input type="submit" value="Valider" /></tr></br>
		</table>
	</form>



	<!-- AFFICHER LES GALAXIES -->
	<?php
	//$request = DB::get()->query('select * from galaxie');
	$request = getGalaxies();
	?>
	<p>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Galaxies
				<a data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">  
						<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Type</th>
								<th>Longitude</th>
								<th>Latitude</th>
								<th>Modif</th>
								<th>Suppr</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while($data = $request->fetch()) {
								?>
								<tr>
									<td><?php echo	$data['nomg']; ?></td>
									<td><?php echo	$data['typeg']; ?></td>
									<td><?php echo	$data['lon']; ?></td>
									<td><?php echo	$data['lat']; ?></td>
									<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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

	<!-- POP UP AJOUT -->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title custom_align" id="Heading">Ajouter</h4>
		</div>
			<div class="modal-body">
			<div class="form-group">
			<input class="form-control " type="text" placeholder="Tiger Nixon">
			</div>
			<div class="form-group">
			
			<input class="form-control " type="text" placeholder="System Architect">
			</div>
			<div class="form-group">
			
		<input class="form-control " type="text" placeholder="Edinburgh">
			
			</div>
		</div>
			<div class="modal-footer ">
			<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
		</div>
			</div>
		<!-- /.modal-content --> 
		</div>
		<!-- /.modal-dialog --> 
	</div>

	<!-- POP UP MODIFICATION -->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
		</div>
			<div class="modal-body">
			<div class="form-group">
			<input class="form-control " type="text" placeholder="Tiger Nixon">
			</div>
			<div class="form-group">
			
			<input class="form-control " type="text" placeholder="System Architect">
			</div>
			<div class="form-group">
			
			
		<input class="form-control " type="text" placeholder="Edinburgh">
			
			</div>
		</div>
			<div class="modal-footer ">
			<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
		</div>
			</div>
		<!-- /.modal-content --> 
		</div>
		<!-- /.modal-dialog --> 
	</div>

	<!-- POP UP SUPPRIMER -->
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
		</div>
			<div class="modal-body">
		
		<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
		
		</div>
			<div class="modal-footer ">
			<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
		</div>
			</div>
		<!-- /.modal-content --> 
		</div>
		<!-- /.modal-dialog --> 
	</div>

</body>

</html>
