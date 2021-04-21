<!-- Highlighting rows and columns -->
	<div class="row">
			<div class="product-list col-xl-7">
					<!-- /reseach result -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Liste des utilisateurs</h5>
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
								<th>Email</th>
								<th>Telephone</th>
								<th>Addresse</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php
						function status($stattus){
							switch ($stattus) {
								case '2':
									echo "<span class='badge badge-danger'>Desactive</span>";
									break;
								case '1':
									echo "<span class='badge badge-primary'>Active</span>";
									break;
								
								default:
									break;
							}
						}
						$i=1;
						foreach($users as $user){?>
							<tr>
								<td><?=$i;?></td>
								<td><?=$user['names'];?></td>
								<td><?=$user['email'];?></td>
								<td><?=$user['phone'];?></td>
								<td><span><?=$user['address'];?></span></td>
								<td><?=status($user['status']);?></td>
								<td class="text-center">
									<button class="edit-button btn-success btn-sm btn" data-id="<?=$user['id'];?>">View</button>

								</td>
							</tr>
							<?php $i++; }?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Formulaire de l'Utilisateur</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<form id="register">
							<input type="hidden" name="productId">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="mr-2"></i></legend>
											<input type="hidden" name="Id">
											<div class="form-group">
												<label>Noms: </label>
												<input type="text" required class="form-control" name="names">
											</div>
											<div class="form-group ">
												<label>Role:</label>
												<select class="select2" style="width: 100%;" name="role">
													<option selected="" desabled="">Category...</option>
													<option value="1">Manager</option>
													<option value="2">Chef Branche</option>
													<option value="3">Vendeur</option>
												</select>
											</div>
											<div class="form-group ">
												<label>Branche:</label>
												<select class="select2" style="width: 100%;" name="brancheId">
													<option selected="" desabled="">Brnache...</option>
													<?php foreach($branches as $branche): ?>
													<option value="<?=$branche['id'];?>"><?=$branche['names'];?></option>
													<?php endforeach; ?>
												</select>
											</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="mr-2"></i></legend>

										<div class="form-group">
											<label>Email: </label>
											<input type="email" name="email" class="form-control">
										</div>
										<div class="form-group">
											<label>Phone: </label>
											<input type="number"  name="phone" class="form-control">
										</div>

										<div class="form-group">
											<label>Addresse:</label>
											<input type="text" name="address" class="form-control">
										</div>
										<div class="form-group ">
											<label>Status:</label>
											<select style="width: 100%;" name="status" class="form-control">
												<option selected="" desabled="">Choisir...</option>
												<option value="1">Active</option>
												<option value="2">Blocquer</option>									</select>
										</div>
							
										<center><div class="form-group">
											<button type="reset" class="btn btn-danger">Annuler</button>
											<button type="submit" class="btn btn-primary">Enregister</button>

										</div>
										</fieldset>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
													</div>
				<!-- /highlighting rows and columns -->
				<script>
					$(document).on('submit', '#register', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulation_User') ?>",
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
			$.getJSON("<?=base_url('getUser/');?>"+id,function(data){
				$("#register [name='Id']").val(data.id).change();
        		$("#register [name='names']").val(data.names).change();
        		$("#register [name='email']").val(data.email).change();
        		$("#register [name='address']").val(data.address).change();
        		$("#register [name='role']").val(data.priviledge).prop({selected:true}).trigger('change');
        		$("#register [name='brancheId']").val(data.brancheId).prop({selected:true}).trigger('change');
        		$("#register [name='phone']").val(data.phone).change();
        		$("#register [name='status']").val(data.status).prop({selected:true}).trigger('change');;
      		});
      	return;
		});
	</script>
