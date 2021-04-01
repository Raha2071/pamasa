<div class="content">
	<div class="animated fadeIn">
		<div style="text-align: right">
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Produit</h3>
							<button class="btn-success btn-sm btn" data-toggle="modal" data-target="#productModal"
									style="float: right"><i class="fas fa-plus"></i> Nouveau Produit
							</button>
						</div>
						<!-- /.Modal -->
						<div class="modal fade" id="productModal">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="<?= base_url('manipulate_product'); ?>" method="POST"
										  id="productForm">
										<div class="modal-header">
											<h4 class="modal-title">Nouveau Produit</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<input type="hidden" class="form-control" name="type" value="Cacao">
											</div>
											<div class="form-group">
												<label>Title</label>
												<input type="hidden" name="coffeeId">
												<input type="text" class="form-control" placeholder="Title"
													   name="Title">
											</div>
											<div class="form-group">
												<label>Prix</label>
												<input type="number" class="form-control" placeholder="Prix"
													   name="Prix">
											</div>
											<div class="form-group">
												<label>Quantite</label>
												<input type="number" class="form-control" placeholder="Quantite"
													   name="qty">
											</div>
											<div class="form-group">
												<label>Kgs</label>
												<input type="number" class="form-control" placeholder="Kgs" name="kgs">
											</div>
											<div class="form-group">
												<label>Details</label>
												<textarea class="form-control" name="details"></textarea>
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close
											</button>
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<div class="modal fade" id="deleteModel">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="<?= base_url('deleteProduct'); ?>" method="POST"
										  id="deleteForm">
										<div class="modal-header">
											<h4 class="modal-title">Effacer Produit</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<input type="hidden" class="form-control" name="type" value="Coffee">
											<div class="form-group">
												<input type="hidden" name="coffeeId">
												<p style="text-align: center"><b> Are you sure you want to delete ?</b>
												</p>
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default" data-dismiss="modal">Annuler
											</button>
											<button type="submit" class="btn btn-primary">Effacer</button>
										</div>
									</form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Prix</th>
									<th>Quantite</th>
									<th>Kgs</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<?php
								$i = 1;
								foreach ($products as $product) {
									?>
									<tr>
										<td><?= $i; ?></td>
										<td>
											<a href="<?= base_url('produit/' . $product['id']); ?>"><?= $product['title']; ?></a>
										</td>
										<td><?= $product['price']; ?></td>
										<td><?= $product['quantity']; ?></td>
										<td><?= $product['kgs']; ?></td>
										<td style="text-align: center">
											<button class="btn btn-sm btn-success" data-target="#productModal"
													data-toggle="modal" data-id="<?= $product['id']; ?>"><span
													class="fas fa-pen"></span> Edit
											</button>
											<button class="btn btn-sm btn-danger" data-target="#deleteModel"
													data-toggle="modal" data-id="<?= $product['id']; ?>"><span class="fas fa-trash"></span>
												Delete
											</button>
										</td>
									</tr>
									<?php
									$i++;
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</div>
<script src="<?= base_url(); ?>/assets/admin/plugins/jquery/jquery.min.js"></script>
<script>
	$(function () {
		$(document).on('submit', '#productForm', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulate_product') ?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache: false,
				async: false,
				success: function (data) {
					var json = null;
					try {
						json = JSON.parse(data);
						if (json.hasOwnProperty("error")) {
							alert(json.error);
						} else {
							alert(json.success);
							$('#productForm')[0].reset();
							$('#productModal').hide();
							window.location.reload();
						}
					} catch (e) {
						alert("System error please try again later");
						console.log(e);
					}
				}
			});
		});

		$("#productModal").on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data("id");
			$.getJSON("<?=base_url();?>/getCacao/" + id, function (data) {
				// alert(id);
				$("#productModal [name='coffeeId']").val(data.id).change();
				$("#productModal [name='Title']").val(data.title).change();
				$("#productModal [name='Prix']").val(data.price).change();
				$("#productModal [name='qty']").val(data.quantity).change();
				$("#productModal [name='kgs']").val(data.kgs).change();
				$("#productModal [name='details']").val(data.details).change();
			});
			return;
		})
		$("#deleteModel").on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data("id");
			$("#deleteModel [name='coffeeId']").val(id).change();
			return;
		})
		$(document).on('submit', '#deleteForm', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('deleteProduct') ?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache: false,
				async: false,
				success: function (data) {
					var json = null;
					try {
						json = JSON.parse(data);
						if (json.hasOwnProperty("error")) {
							alert(json.error);
						} else {
							alert(json.success);
							$('#deleteForm')[0].reset();
							$('#deleteModel').hide();
							window.location.reload();
						}
					} catch (e) {
						alert("System error please try again later");
						console.log(e);
					}
				}
			});
		});
	});
</script>
