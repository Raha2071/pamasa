
					<div class="row">
							<div class="product-list col-xl-5">
								<!-- /reseach result -->
								
								<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Liste de Factures</h5>
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
						foreach($invoice as $product){?>
							<tr>
								<td><?=$i;?></td>
								<td><?=$product['names'];?></td>
								<td><?=$product['id'];?></td>
								<td><?=$product['id'];?></td>
								<td><span><?=$product['id'];?></span></td>
								<td class="text-center">
									<button class="view-archive btn-success btn-sm btn" data-id="<?=$product['id'];?>">View</button>
									
								</td>
							</tr>
							<?php $i++; }?>
						</tbody>
					</table>
				</div>
							</div>
			<div class="col-xl-7" id="brancheH">
				<div class="card">
					<form id="Invoicesubmission">
					<div class="card-header bg-transparent header-elements-inline" >
						<h6 class="card-title">Ets. Pamasa |<span> Facture</span></h6>
						<div class="header-elements">
							<button type="button" class="btn btn-light btn-sm ml-3" id="printInvoice"><i class="icon-printer mr-2"></i> Imprimer</button>
	                	</div>
					</div>
					<style>
						.media-body {
							margin: 20px;
							margin-top:-6px;
						}
					</style>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
							<div class="media flex-column flex-md-row mb-4" >
                  				<a href="#" class="align-self-md-center">
									<img src="<?=base_url();?>/assets/global_assets/images/pamasa.jpeg" class="mb-3 mt-2" alt="" style="width: 150px;">
								</a>
									<div class="media-body list-unstyled">
										<li class="media-title font-weight-semibold"><span></span>Ets. Pamasa</li>
										<li class="media-title font-weight-semibold">Branche</li>
										<li class="media-title font-weight-semibold"></li>
										<li class="media-title font-weight-semibold"></li>
										<h6 class="card-title">Facture N°: <span id='invoiceN'></span></h6>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="mb-4">
									<div class="text-sm-left">
									<ul class="list list-unstyled mb-0">
											<li>Date: <span class="font-weight-semibold"><?= date('d-m-Y H:i:s');?></span></li>
										</ul>
										<ul class="list list-unstyled mb-0">
										<h4 class="mb-2 mt-md-2"><small>A</small></h4>
											<span  id='clientInfo'></span></span>
										</ul>
										
									</div>
								</div>
							</div>
						</div>
						

					<div class="table-responsive">
					    <table class="table table-sm" id="productTable">
					        <thead>
					            <tr>
									<th>#</th>
					                <th>Description</th>
					                <th>Qty</th>
					                <th>PU</th>
					                <th>PT</th>
									<th id="hiddenth"></th>
					            </tr>
					        </thead>
					        <tbody>
					            
					        </tbody>
					    </table>
					</div>
					

					<div class="card-body">
						<div class="d-md-flex flex-md-wrap">

							<div class="pt-2 mb-3 wmin-md-400 ml-auto">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<th>Montant</th>
											</tr>
											<tr>
												<th>Total due:</th>
												<td><h5 class="font-weight-semibold" id="total"></h5></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<span class="text-muted">La marchndise vendue n'est rimise ni echanger</span>
					</div>
					</div>
					</form>
				</div>
						</div>
                    </div>
                    <!-- /dashboard content -->
    </div>
	</div>

<script>
		$(document).on('click','.view-archive',function(e){
			var row ='';
			var total =0
			var id=$(this).data('id');
			$.getJSON("<?= base_url('getClientArchive');?>/"+id,function(data){
					$.each(data, function (index, obj) {
						$("#productTable tbody").children().remove()
						var amount =obj.qty*obj.unitprice;
						total+=parseInt(obj.qty*obj.unitprice);
						row += "<tr>" +
								"<td>"+(index+1) + "</td>" +
								"<td>" + obj.produit + "</td>" +
								"<td class='text-center'>" + obj.qty + "</td>" +
								"<td class='text-center '>" + obj.unitprice + "</td>" +
								"<td class='text-center'>" + amount + "</td>" +
                                "<td class='text-center'>" + obj.created_at+ "</td>" +
							"</tr>";
						})
						$("#productTable tbody").html(row);
						$("#total").text(total)
					})
				})
	function printData()
	{
		$(".removeProduct").hide();
		$("#hiddenbutton").hide();
		$("#hiddeninvoice").hide();
		$("#printInvoice").hide();
		var printContents=document.getElementById("Invoicesubmission").innerHTML;
		var originalContents = document.body.innerHTML;

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;
		window.location.reload()
	}

	$('#printInvoice').on('click',function(){
		printData();
	})
</script>

