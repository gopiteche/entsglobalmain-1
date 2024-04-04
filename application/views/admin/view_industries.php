<?php $this->load->view('admin/includes/header');?>
      <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
       <?php $this->load->view('admin/includes/sidebar');?>
    </aside>

      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Manage Industries</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>admin/home"><i class="fa fa-dashboard"></i>Admin Home</a></li>
            </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">  
            
                    <div class="box">
             
                        <div class="box-header with-border">
					        <div><h2 class="box-title">View Industries</h2></div>
                      
					    </div>
                    
 <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

</style>	                   
                   
                		<div class="box-body">
			
                  			<table id="datatable" class="table table-bordered table-striped delTable">
                    			<thead>
                                    <tr>
                                        <th class="no-sort">Sl no</th>
                                        <th>Title</th>   
                                        <th>Banner Image</th>         
                                        <th>Image</th>
										<th>Status</th>	
                                        <th>Action</th>
                                       
                                       
                                    </tr>
                    			</thead>
                    			
                                <tbody>
                    				<?php $i=1;?>
                    				<?php 					
									
									foreach($industries as $service):?>
                       			    <tr id="<?php echo $service->industries_id;?>" data-order="<?= $i; ?>">
					               
										<td><?php echo $i++; ?></td>
										<td><?php echo $service->title; ?></td>

                                        <td>
                                            <?php if(!empty($service->file)){?>
                                          <a href="<?php echo base_url();?>uploads/industries/<?php echo $service->file; ?>" class="fancybox-media">
                                              <img src="<?php echo base_url(); ?>uploads/industries/<?php echo $service->file;?>" height="100px" width="100px" />
                                          </a>
                                          <?php } ?>
                                        </td>									
										<td>
										    <?php if(!empty($service->image)){?>
										  <a href="<?php echo base_url();?>uploads/industries/<?php echo $service->image; ?>" class="fancybox-media">
											  <img src="<?php echo base_url(); ?>uploads/industries/<?php echo $service->image;?>" height="100px" width="100px" />
										  </a>
										  <?php } ?>
										</td>
										
										<td>	
											<!-- <input type="checkbox" name="industries_status" id="industries_status_<?php echo $service->industries_id;?>" onchange="industriesstatus(<?php echo $service->industries_id;?>)" data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" <?php echo ($service->industries_status == '1') ? 'checked' : ''; ?>> -->											
											
											<label class="switch">
												<input type="checkbox" name="industries_status" id="industries_status_<?php echo $service->industries_id;?>" onchange="industriesstatus(<?php echo $service->industries_id;?>)"  <?php echo ($service->industries_status == '1') ? 'checked' : ''; ?>>
												<span class="slider"></span>
											</label>
											
										</td>
											
									   <td>
									   
											<a style="color:rgb(102, 102, 102);" href="<?php echo base_url(); ?>admin/Industries/EditIndustries/<?php echo $service->industries_id;?>" class="edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i style="color:rgb(255, 204, 102);" class="fa fa-pencil-square-o"></i>  Edit</a><br>
							
											<a style="color:rgb(102, 102, 102);" href="<?php echo base_url();?>admin/Industries/DeleteIndustries/<?php echo $service->industries_id;?>" class="delete" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you absolutely sure you want to delete?');"><i style="color:red" class="fa fa-times"></i>  Delete</a>
										</td>
                      				</tr>
					  				<?php endforeach;?> 
                    			</tbody> 
                   				
                                    <input type="hidden" id="alert-notification" value="Are you sure you want to delete this banner record?">
                  			</table>
							
							<form method="POST" action="javascript:;">
								<input type="submit" class="btn btn-primary" name="update_order" id="update" value="Update Industries Order" >
							</form>
                     
                		</div><!-- /.box-body -->
              		</div> 
              
              
                </div><!-- /.col -->
             </div><!-- /.row -->
        </section>
        
      </div><!-- /.content-wrapper -->
 <?php $this->load->view('admin/includes/footer');?>
 
   
<!-- script for drag and drop option -->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
function industriesstatus(id){
	
	let checkbox = document.getElementById('industries_status_'+id);
   
	if (checkbox.checked) {
		var status = '1';
	} else {
		var status = '0';
	}
	
	
	$.ajax({
		url: '<?php echo base_url(); ?>admin/Industries/Industries_status',
		type: 'POST',
		data:{industries_id : id, industries_status : status},
		error: function() {
			alert('Something is wrong');
		},
		
		success: function() {
			//window.location.reload();
		}
	});
	
}
$(document).ready(function() {
	//alert();
	jQuery("table tbody").sortable();
    // Save button click event
		$("[name='update_order']").click(function(e){
			e.preventDefault();
			UpdateOrder();
		}); 
});
 
 function UpdateOrder() {
    var jsonObj = [];
    var id = '';
    var existing_order = '';
    var updated_order = '';
    var updated_row = {};
    jQuery("table tbody tr").each(function (index, value) {
      if((index+1) != $(this).data('order'))
      { // To check whether the current row order has been changed or not. Only the changed order rows only needs to be updated.
        id = $(this).attr("id");
        existing_order = $(this).data('order');
        updated_order = (index+1);
        updated_row = {}
        updated_row ["id"] = id;
        updated_row ["existing_order"] = existing_order; // I just added for your reference. If you do not need this value, comment this line.
        updated_row ["updated_order"] = updated_order;
        jsonObj.push(updated_row);
      }
    });
    console.log(JSON.stringify(jsonObj));
//ex: [{"id":"2","existing_order":2,"updated_order":1},{"id":"3","existing_order":3,"updated_order":2},{"id":"1","existing_order":1,"updated_order":3}]
    $('form').append("<input type='hidden' name='updated_rows' id='updated_rows' value='"+JSON.stringify(jsonObj)+"'>").submit(); // To send the values to server side script (here, PHP). Please do empty validation before you send to server if you need
	
	
	var upadte_row = document.getElementById("updated_rows").value;
	
	$.ajax({
		url: '<?php echo base_url(); ?>admin/Industries/Update',
		type: 'POST',
		data:{updated_rows : upadte_row },
		error: function() {
			alert('Something is wrong');
		},
		
		success: function() {
			window.location.reload();
		}
	});
	
}
</script>
 
 
  
    
 