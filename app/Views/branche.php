<!-- Highlighting rows and columns -->
<div class="row">
	<div class="product-list col-xl-8">
					<!-- /reseach result -->
		<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Liste de branches</h5>
			<div class="header-elements">
				<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
					<a class="list-icons-item" data-action="reload"></a>
					<a class="list-icons-item" data-action="remove"></a>
				</div>
			</div>
		</div>

		<table class="table table-bordered  table-hover datatable-highlight">
			<thead>
			<tr>
				<th>#</th>
				<th>Nom</th>
				<th>Addresse</th>
				<th>Status</th>
				<th></th>
				<th class="text-center"></th>
			</tr>
				</thead>
				<tbody>
				<?php
				$i=1;
				foreach($branches as $branche){?>
					<tr>
						<td><?=$i;?></td>
						<td><?=$branche['names'];?></td>
						<td><?=$branche['location'];?></td>				
						<td><?=$branche['status'];?></td>
					<td></td>
					<td>
						<div class="list-icons">
							<span class="edit-button list-icons-item icon icon-pencil " data-id="<?=$branche['id'];?>"></span>
							<a class="list-icons-item" href="<?=base_url('brancheemployees/');?><?=$branche['id'];?>"><span class="icon-users"></span></a>
							<a class="list-icons-item" href="<?=base_url('brancheproducts/');?><?=$branche['id'];?>"><span class="icon-cart2" ></span></a>
						</div>
					</td>
				</tr>
				<?php $i++; }?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-4">
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Nouvelle Branche</h5>
			<div class="header-elements">
				<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
					<a class="list-icons-item" data-action="reload"></a>
					<a class="list-icons-item" data-action="remove"></a>
				</div>
			</div>
		</div>

		<div class="card-body">
			<form action="<?=base_url("manipulationBranche");?>" id="register">
				<input type="hidden" name="Id">
				<div class="form-group">
					<label>Noms: <span class="text-muted">Entrer un le nom de la Branche</span></label>
					<input type="text" required class="form-control" name="names">
				</div>
				<div class="form-group">
					<label>Addressse:</label>
					<input type="text" required class="form-control" name="location">
				</div>
				<div class="form-group ">
					<label>Chef du Branche: <span class="text-muted"></span></label>
					<select class="select2" style="width: 100%;" name="employeeId">
						<option selected="" desabled="">Choisir...</option>
						<?php foreach ($users as $chef){
							echo '<option value="'.$chef["id"].'">'.$chef['names'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label>Status:</label>
					<select name="status" class="form-control">
						<option selected="" desabled="">Choisir</option>
						<option value="1">Active</option>
						<option value="2">Fermer</option>
					</select>
				</div>
				<div class="form-group">
					<label>Description <span class="text-muted">Entrer un le PVU</span></label>
					<textarea name="description" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="reset" class="btn btn-danger">Annuler</button>
					<button type="submit" class="btn btn-primary">Ajouter</button>

				</div>
			</form>
		</div>
	</div>
</div>

</div>
			</div>
<!-- /highlighting rows and columns -->
<script>
	$(document).on('submit', '#register', function (event) {
		event.preventDefault();
		$.ajax({
			url: "<?php echo base_url('manipulation_branche') ?>",
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			cache:false,
			async:false,
			success: function (data) {
				var json = null;
				try {
					json = JSON.parse(data);
					if (json.hasOwnProperty("error")) {
						alert(json.error);
					} else {
						alert(json.success);
						$('#register')[0].reset();
						$('#register').hide();
						window.location.reload();
					}
				} catch (e) {
					alert("System error please try again later");
					console.log(e);
				}
			}
		});
	});
	$(".edit-button").on('click',function(){
		var id = $(this).data('id');
		// console.log(id);
		$.getJSON("<?=base_url('getBranche/');?>"+id,function(data){
			$("#register [name='Id']").val(data.id).change();
			$("#register [name='names']").val(data.names).change();
			$("#register [name='location']").val(data.location).change();
			$("#register [name='description']").val(data.description).change();
			$("#register [name='employeeId']").val(data.employeeId).trigger('change');
			$("#register [name='status']").val(data.status).trigger('change');
		});
		return;
	});
</script>
