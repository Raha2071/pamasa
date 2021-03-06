
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
                                Branche:
                                <select class="select2" style="width: 100%;" name="branche" required>
										<option selected="" desabled="">Branche...</option>
										<?php foreach($branche as $show):
										echo '<option value="'.$show["id"].'">'.$show['names'].'</option>';
										 endforeach;?>
								</select>
                                <div class="form-control-feedback">
                                </div>
                            </div>
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
                                Produire
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
                            <h5 class="media-title font-weight-semibold">Rapport General
                            </h5>
                            <div class="brancheInfo">
                            </div>
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
									<table border='1' width="100%" id="reportTable">
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
                                            <th>Total</th>
										</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
                    </div>
                    <div class="d-sm-flex">
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
        $(function(){
            $(".select2").select2();
         })
		$(document).on('submit', '#generalReportForm', function (event) {
			var row = "";
			var total=0
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('/brancheReportForm');?>",
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
						total+=parseInt(amount  );
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
                        row+="<tr>"+
                            "<td class='text-center' colspan='8'>Total</td>"+
                            "<td class='text-center' rowspan='"+(data.length)+"'>" +total+ "</td>" +
                            "</tr>";
						$("#reportTable tbody").html(row);
				}
			});
		});
        $(".select2").on("change",function(){
            var id = $(".select2 option:selected").val();
            var info =''
            $.getJSON("<?=base_url('/brancheinfo');?>/"+id,function(data){
                var status = data.status;
                    switch (status){
                            case '1':
                                status ='Active';
                            break;
                            case '0':
                                status ='blocquer';
                            break;  
                        }
                 info +='<h5 class="media-title font-weight-semibold">Branche: '+data.names+'</h5>'+
                         '<h5 class="media-title font-weight-semibold">Location: '+data.location+'</h5>'+
                         '<h5 class="media-title font-weight-semibold">Gerant: '+data.user+'</h5>'+
                         '<h5 class="media-title font-weight-semibold">Status: '+status+'</h5>'; 
                $(".brancheInfo").html(info)
            })
        })
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