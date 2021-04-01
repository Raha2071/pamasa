
    <!-- Content area -->
    <div class="content">

    <!-- Inner container -->
    <div class="d-md-flex align-items-md-start">

        <!-- Left sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left border-0 shadow-0 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Filter -->
                <div class="card">
                    <div class="card-header bg-transparent header-elements-inline">
                        <span class="text-uppercase font-size-sm font-weight-semibold">Formulaire</span>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form id="generalReportForm">
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                Du:<input type="date" class="form-control" name="fromDate" required>
                                <div class="form-control-feedback">
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                               Au:<input type="date" class="form-control" name="untilDate" required>
                                <div class="form-control-feedback">
                                </div>
                            </div>

                            <button type="submit" class="btn bg-blue btn-block">
                                Afficher
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /filter -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /left sidebar component -->


        <!-- Right content -->
        <div class="flex-fill overflow-auto">

            <!-- Details -->
            <div class="card" id="printReport">
                <div class="card-body">
                    <div class="media flex-column flex-md-row mb-4">
                        <a href="#" class="align-self-md-center mr-md-3 mb-2 mb-md-0">
                            <img src="<?=base_url('');?>/assets/global_assets/images/pamasa.jpeg" class="rounded" width="200" height="150" alt="">
                        </a>

                        <div class="media-body">
                            <h5 class="media-title font-weight-semibold">Ets. Pamasa</h5>
                            <h5 class="media-title font-weight-semibold">Rapport General</h5>
                            <h5 class="media-title font-weight-semibold"><?=$branche['names'];?></h5>
                            <h5 class="media-title font-weight-semibold"><?=$branche['location'];?></h5>
                            <ul class="list-inline list-inline-dotted text-muted mb-0">
                                <li class="list-inline-item">Date: <?=date('Y-m-d');?></li>
                            </ul>
                        </div>
                        <div class="ml-sm-3 mt-2 mt-sm-0">
                            <button class="btn btn-light" onclick="(printR(printReport));" id="printButton">
                                <i class="icon-printer mr-2"></i>
                                Imprimer
                            </button>
                        </div>
                        
                    </div>
                    <div class="mb-4">
                                <div class="form-group">
									<table class="table" id="reportTable">
										<thead>
										<tr>
                                            <th>#</th>
											<th>Designation</th>
                                            <th>Quantite</th>
											<th>PUV</th>
                                            <th>PTV</th>
											<th>Branche</th>
											<th>Agent</th>
											<th>Date</th>
										</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
                    </div>
                    <div class="d-sm-flex">

                    <div class="pt-2 mb-3 wmin-md-400 ml-auto">
						<h6 class="mb-3"></h6>
										<div class="table-responsive">
											<table class="table">
												<tbody>
													<tr>
													</tr>
													<tr>
														<th></th>
														<td class=""><h5 class="" id="total"></h5></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
                    </div>
                </div>
            </div>
            <!-- /details -->

        </div>
        <!-- /right content -->

    </div>
    <!-- /inner container -->

    </div>
    <!-- /content area -->
    <script>
		$(document).on('submit', '#generalReportForm', function (event) {
			var row = "";
			var total=0
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('/brancheGeneralForm');?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache:false,
				async:false,
				success: function (data) {
					$("#productTable tbody").children().remove()
					row="";
					total=0;
					$.each(data, function (index, obj) {
						var amount =obj.qty*obj.unitprice;
						total+=parseInt(obj.qty*obj.unitprice);
						row += "<tr>" +
								"<td>"+(index+1) + "</td>" +
								"<td>" + obj.produit +"-" +obj.category+ "</td>" +
								"<td class='text-center'>" + obj.qty + "</td>" +
								"<td class='text-center '>" + obj.unitprice + "</td>" +
								"<td class='text-center'>" + amount + "</td>" +
                                "<td class='text-center '>" + obj.branche+ "</td>" +
                                "<td class='text-center '>" + obj.user+ "</td>" +
                                "<td class='text-center'>" + obj.created_at+ "</td>" +
							"</tr>";
						})
						$("#reportTable tbody").html(row);
						$("#total").text(total)
				}
			});
		});
        function printR(printReport){
		document.getElementById("printButton").style.display = "none";
		var printContents = document.getElementById('printReport').innerHTML;
		var originalContents = document.body.innerHTML;

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;
        window.location.reload()
        }
    </script>