<center>
	<a href='?r=site'>Accueil</a>
	<div class='page-header'>
	<div id='import_image'>
		<h2>Importer une image</h2>
		<form method='POST' action='?r=image/add' enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2" for='image_title'>Titre</label>
				<div class="col-sm-10"> 
				<input type='text' class="form-control" name='image_title' id='image_title' placeholder="titre de l'image"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for='image_description'>Description</label>
				<div class="col-sm-10"> 
				<input type='text' class="form-control" name='image_description' id='image_description' placeholder="description de l'image"/>
				</div>
			</div>
			<div class="form-group">
				<input type="file" name="image_url[]" multiple>
			</div>
			<div class="form-group">
				<input type='submit' class="btn btn-primary" name='add_image' value='Importer'/>
			</div>
		</form>
	</h2>
</center> 