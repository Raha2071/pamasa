<div class="content">
	<div class="animated fadeIn">
		<div style="text-align: right">
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Users</h3>
							<button class="btn-info btn" data-toggle="modal" data-target="#userModel"
									style="float: right"><i class="fas fa-plus"></i> New User
							</button>
						</div>
						<!-- /.Modal -->
						<div class="modal fade" id="userModel">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="<?= base_url('manipulate_user'); ?>" method="POST" id="userForm">
										<div class="modal-header">
											<h4 class="modal-title">New User</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label>Names</label>
												<input type="hidden" name="user_Id">
												<input type="text" class="form-control" placeholder="Enter names"
													   name="names">
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" placeholder="email@example.com"
													   name="email">
											</div>
											<div class="form-group">
												<label>Phone</label>
												<input type="number" class="form-control" placeholder="Phone Number"
													   name="phone">
											</div>
											<!--											<div class="form-group">-->
											<!--												<label>User Type</label>-->
											<!--												<select class="form-control" name="userType">-->
											<!--													<option selected disabled>Select Type</option>-->
											<!--													<option value="0">Administrator</option>-->
											<!--													<option value="1">Project Manager</option>-->
											<!--												</select>-->
											<!--											</div>-->
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
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>#</th>
									<th>Names</th>
									<th>Type</th>
									<th>Email</th>
									<th>Phone</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<?php
								function privilege($pr)
								{
									switch ($pr) {
										case 0:
											return "Admin";
											break;
										case 1:
											return "Cashier";
											break;
										case 2:
											return "Manager";
											break;

									}
								}

								$i = 1;
								foreach ($users as $user) {
									?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $user['names']; ?></td>
										<td><?= privilege($user['privilege']); ?></td>
										<td><?= $user['email']; ?></td>
										<td><?= $user['phone']; ?></td>
										<td style="text-align: center">
											<button class="btn btn-sm btn-success" data-target="#userModel"
													data-toggle="modal" data-id="<?= $user['id']; ?>"><span
													class="fas fa-pen"></span> Edit
											</button>
											<button class="btn btn-sm btn-danger"><span class="fas fa-check"></span>
												Deactivate
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
		$(document).on('submit', '#userForm', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulate_user') ?>",
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
							$('#userForm')[0].reset();
							$('#userModel').hide();
							window.location.reload();
						}
					} catch (e) {
						alert("System error please try again later");
						console.log(e);
					}
				}
			});
		});

		$("#userModel").on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data("id");
			$.getJSON("<?=base_url();?>/get_user/" + id, function (data) {
				// alert(id);
				$("#userModel [name='user_Id']").val(data.id).change();
				$("#userModel [name='names']").val(data.names).change();
				$("#userModel [name='email']").val(data.email).change();
				$("#userModel [name='phone']").val(data.phone).change();
				// $("#userModel [name='userType']").val(data.privilege).trigger('change');
			});
			return;
		})
	});
</script>
