<!-- Highlighting rows and columns -->
		<div class="row">
			<div class="product-list col-xl-6">
					<!-- /reseach result -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Liste de Medicamentss</h5>
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
								<th>quantite</th>
								<th>PUA</th>
								<th>PUV</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$i=1;
						foreach($products as $product){?>
							<tr>
								<td><?=$i;?></td>
								<td><?=$product['names'];?></td>
								<td><?=$product['quantity'];?></td>
								<td><?=$product['purchasedprice'];?></td>
								<td><span><?=$product['sellingPrice'];?></span></td>
								<td class="text-center">
									<button class="edit-button btn-success btn-sm btn" data-id="<?=$product['id'];?>">View</button>
									
								</td>
							</tr>
							<?php $i++; }?>
						</tbody>
					</table>
				</div>
							</div>
				<div class="col-xl-6">
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Enregistrement du Medicament</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<form id="registerProduct">
							<input type="hidden" name="productId">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="mr-2"></i></legend>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Barcode</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="barcode" name="barcode" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Nom du Mdc.</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Medicament"name="names" required>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Type du Mdc:</label>
											<div class="col-lg-9">
											<select name="category" class="form-control select2" required>
												<option selected="" desabled="">Category...</option>
												<?php foreach($category as $show):
												echo '<option value="'.$show["id"].'">'.$show['names'].'</option>';
												endforeach;?>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Quantité:</label>
											<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Quantité"name="quantity" required>
											</div>
										</div>

										<div class="form-group row" id="pieces">
											<label class="col-lg-3 col-form-label">Cartons de:</label>
											<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="pieces de cartons"name="qtypieces" required>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="mr-2"></i></legend>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">PAU</label>
											<div class="col-lg-9">
												<input type="text" name="purchasedPrice" placeholder="Prix d'Achat Unitaire" class="form-control" required>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">PVU</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Prix de Vente Unitaire" name="sellingPrice" class="form-control"required>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Description</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" name="description" placeholder="Enter your message here"></textarea>
											</div>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="reset" class="btn btn-danger">Annuler</button>
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
				<!-- /highlighting rows and columns -->
				<script>
					$('#pieces').hide();
					$('select').on('change',function(){
					var id =$(".select2 option:selected").val();
					// console.log(id);
					if(id==3){
						$('#pieces').show();
					}
					})
		$(document).on('submit', '#registerProduct', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulationProduct') ?>",
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
							$('#registerProduct')[0].reset();
							$('#registerProduct').hide();
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
			$.getJSON("<?=base_url('getProduct/');?>"+id,function(data){
				$("#registerProduct [name='barcode']").val(data.barcode).change();
				$("#registerProduct [name='productId']").val(data.id).change();
        		$("#registerProduct [name='names']").val(data.names).change();
        		$("#registerProduct [name='quantity']").val(data.quantity).change();
        		$("#registerProduct [name='qtypieces']").val(data.qtypieces).change();
        		$("#registerProduct [name='purchasedPrice']").val(data.purchasedprice).change();
        		$("#registerProduct [name='sellingPrcie']").val(data.sellingPrcie).change();
        		$("#registerProduct [name='category']").val(data.categoryId).prop({selected:true}).trigger("change");
        		$("#registerProduct [name='description']").val(data.description);
				$("#registerProduct [name='sellingPrice']").val(data.sellingPrice);
      		});
      	return;
		});
	</script>
