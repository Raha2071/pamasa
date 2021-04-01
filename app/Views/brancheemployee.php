<!-- Highlighting rows and columns -->
<div class="row">
			<div class="product-list col-xl-6">
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
				<th>Status</th>
				<th></th>
				<th class="text-center"></th>
			</tr>
				</thead>
				<tbody>
				<?php
				$i=1;
				foreach($users as $branche){?>
					<tr>
						<td><?=$i;?></td>
						<td><?=$branche['names'];?></td>
						<td><?=$branche['address'];?></td>				
						<td><?=$branche['status'];?></td>
					<td></td>
					<td>
						<span class="edit-button btn btn-sm btn-success " data-id="<?=$branche['id'];?>"><i class="">Details</i></span>
					</td>
				</tr>
				<?php $i++; }?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-3" id="form">
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Info Employee</h5>
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
