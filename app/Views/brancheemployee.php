<!-- Highlighting rows and columns -->

<div class="row">
<div class="col-xl-3" id="brancheH">
								<!-- Latest posts -->
								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">Branche-Infos</h6>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>
									<div class="card-header bg-transparent header-elements-inline">
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="mb-4">
												<img src="<?=base_url('')?>/assets/global_assets/images/pamasa.jpeg" class="mb-3 mt-2" alt="" style="width: 120px;">
												<!-- <ul class="list list-unstyled mb-0">
												</ul> -->
											</div>
										</div>

											<div class="col-sm-6">
												<div class="mb-4">
													<div class="text-sm-right">
														<h4 class="text-primary mb-2 mt-md-2">Branche ID:<?=$branche['id'];?></h4>
															<ul class="list list-unstyled mb-0">
																<li><i>Noms du Branche: <?=$branche['names'];?> </i></li>
																<!-- <li>Code: <i> </i></li> -->
																<li>Addresse: <?=$branche['location'];?><i> </i></li>
															</ul>
														<ul class="list list-unstyled mb-0">
															
															<!-- <li>Date: <span class="font-weight-semibold"><?= date('d-m-Y h:i:s');?></span></li> -->
														</ul>
													</div>
												</div>
											</div>
									</div>
									<div class="d-md-flex flex-md-wrap">
<!-- 
							<div class="mb-2 ml-auto">
								<span class="text-muted">Infos:</span>
								<div class="d-flex flex-wrap wmin-md-400">
								</div>
							</div> -->
						</div>
						</div>
						</div>
						</div>
			<div class="product-list col-xl-7">
					<!-- /reseach result -->
					<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Liste des Travailleurs</h5>
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
				<th>Email</th>
				<th>Status</th>
				<th class="text-center"></th>
			</tr>
				</thead>
				<tbody>
				<?php
				function status($stattus){
					switch ($stattus) {
						case '2':
							echo "<span class='badge badge-success'>Desactiver</span>";
							break;
						case '1':
							echo "<span class='badge badge-primary'>Active</span>";
							break;
						
						default:
							break;
					}
				}
				$i=1;
				foreach($users as $branche){?>
					<tr>
						<td><?=$i;?></td>
						<td><?=$branche['names'];?></td>
						<td><?=$branche['address'];?></td>
						<td><?=$branche['email'];?></td>
						<td><?=status($branche['status']);?></td>
					<td>
						<span class="edit-button btn btn-sm btn-success " data-id="<?=$branche['id'];?>"><i class="">Vue</i></span>
					</td>
				</tr>
				<?php $i++; }?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-2" id="form">
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Informations de l' Employee</h5>
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
				<input type="hidden" name="Id">
				<div class="show"></div>
				
			</form>
		</div>
	</div>
</div>
</div>
</div>
<!-- /highlighting rows and columns -->
<script>
	
    $("#form").hide();
	$(".edit-button").on('click',function(){
		var id = $(this).data('id');
        
        var text='';
		$.getJSON("<?=base_url('getUser/');?>"+id,function(data){
            
            if($("#form").show()){
                var d = data.status;
            switch (d){
                    case '1':
                        d ='Active';
                    break;
                    case '0':
                        d ='blocquer';
                    break;  
                }
            text +='<div class="form-group">'+
            '<p><label>Noms: '+ data.names +'</label></p>'+
            '<p><label >E-Mail: <span class="btn bg-slate-700 btn-sm rounded-round">'+ data.email +'</span></label></p>'+
            '<p><label>Addresse: '+ data.address +'</label></p>'+
            '<p><label>Telephone: '+ data.phone +'</label></p>'+
            '<p><label>Status: <i class="btn bg-teal-400 btn-labeled btn-sm rounded-round">'+ d +'</i></label>'+
            '</div>';
			$("#register [name='Id']").val(data.id).change();
			$(".show").html(text);
            }
			
		});
		return;
	});
</script>
