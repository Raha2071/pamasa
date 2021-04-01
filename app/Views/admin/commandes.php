<div class="content">
	<div class="animated fadeIn">
		<div style="text-align: right">
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><?=$title;?></h3>
						</div>
						<!-- /.Modal -->
						<div class="modal fade" id="productModal">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="<?= base_url('replayRequest'); ?>" method="POST" id="replayForm">
										<div class="modal-header">
											<h4 class="modal-title" id="title"></h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label>Email</label>
												<input type="hidden" name="requestId">
												<input type="hidden" name="status">
												<input type="email" class="form-control" readonly
													   name="email">
											</div>
											<div class="form-group">
												<label>Message</label>
												<textarea class="form-control" name="message"></textarea>
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default" data-dismiss="modal">Annuler
											</button>
											<button type="submit" class="btn btn-primary">Envoyer</button>
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
									<th>Prix Total</th>
									<th>Email</th>
									<th>Telephone</th>
									<th>Addresse</th>
									<th>Details</th>
									<th>Date</th>
									<th>Status</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<?php
								function status($status){
									switch ($status){
										case 1:
											return "Accept";
											break;
										case 2:
											return "Reject";
											break;
										case 0:
											return "En cours";
											break;
									}
								}
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
										<td><?= $product['quantity']*$product['price']; ?></td>
										<td><?= $product['email']; ?></td>
										<td><?= $product['phone']; ?></td>
										<td><?= $product['address']; ?></td>
										<td><?= $product['details']; ?></td>
										<td><?= $product['created_at']; ?></td>
										<td><?= status($product['status']); ?></td>
										<td style="text-align: center">
											<?php if ($product['status']==0) { ?>
												<button class="btn btn-sm btn-success" data-target="#productModal"
														data-toggle="modal" data-id="<?= $product['id']; ?>"
														data-mail="<?= $product['email']; ?>" data-status="1">
													<span
														class="fa fa-reply"></span> Accept
												</button>
												<button class="btn btn-sm btn-danger" data-target="#productModal"
														data-toggle="modal" data-id="<?= $product['id']; ?>"
														data-mail="<?= $product['email']; ?>" data-status="2"><span
														class="fa fa-times"></span> Annuler
												</button>
												<?php
											}
											?>
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
		$(document).on('submit', '#replayForm', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('replayRequest') ?>",
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
							$('#replayForm')[0].reset();
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
			var email = $(e.relatedTarget).data("mail");
			var status = $(e.relatedTarget).data("status");
			if (status==1){
				$("#title").text("Accept Commande")
			}else{
				$("#title").text("Annuler Commande")
			}
				$("#productModal [name='requestId']").val(id).change();
				$("#productModal [name='email']").val(email).change();
				$("#productModal [name='status']").val(status).change();

		})
	});
</script>
