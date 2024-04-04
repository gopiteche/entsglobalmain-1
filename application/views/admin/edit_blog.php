<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
          <h1> Manage blog </h1>
          
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin/home"><i class="fa fa-dashboard"></i>Admin Home</a></li>
            
          </ol>
        </section>
		<section class="content">
            <div class="row">
                <div class="col-xs-12">  
            
                     <?php if($this->session->flashdata('success')) {?>
				    <div class="alert alert-success">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
			     	 <?php echo $this->session->flashdata('success');?>
				    </div>
					 <?php }?>
					 <?php if($this->session->flashdata('error')) {?>
					<div class="alert alert-error">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<?php echo $this->session->flashdata('error');?>
					</div>
            	        <?php }?>
            
			        <form name="add_menu" id="add_menu" method="POST" enctype="multipart/form-data" >
			             <div class="box">
                            <div class="box-body">
				                <!-- Form Element sizes -->
				                <div class="box box-success">
					                <div class="box-header with-border">
					                    <h2 class="box-title">Edit blog</h2>
					                </div>
									
					                <div class="box-body">
						 
                                      <?php $parent = $this->uri->segment(4); ?>




                                      <div class="row">
											<div class="col-xs-12 col-sm-3 row-seperate">
												<label>Date<strong style="color:#F00;">*</strong></label>
											</div>
											<div class="col-xs-12 col-sm-9 row-seperate">
													 <input class="form-control" name="bdate" type="date" onclick="this.showPicker()" value="<?php echo $blog['cdate']; ?>" required>	
											</div>
										</div>

                          
                          
                         
										 <div class="row">
											<div class="col-xs-12 col-sm-3 row-seperate">
												<label>Title<strong style="color:#F00;">*</strong></label>
											</div>
											<div class="col-xs-12 col-sm-9 row-seperate">
												<input class="form-control" name="title"  placeholder="Title" type="text" value="<?php echo $blog['blog_title']; ?>" required>	
											</div>
										 </div>

							   <div class="row">
                   <div class="col-xs-12 col-sm-3 row-seperate">
                    <label>Content<strong style="color:#F00;">*</strong></label>
                   </div>
                   <div class="col-xs-12 col-sm-9 row-seperate">
                        <textarea class="form-control" name="content" id="editor1"><?php echo $blog['blog_content']; ?></textarea>
                    </div>
                    </div>
                          <?php if(!empty($blog['blog_image'])){?>
            <div class="row">
				<div class="col-xs-12 col-sm-3 row-seperate">
					<label>Default Image<strong style="color:#F00;">*</strong></label>
											</div>
											<div class="col-xs-12 col-sm-9 row-seperate">
												<a href="<?php echo base_url();?>uploads/blogs/<?php echo $blog['blog_image']; ?>" class="fancybox-media">
			<img src="<?php echo base_url(); ?>uploads/blogs/<?php echo $blog['blog_image']; ?>" width="100px" height="100px" style="background-color: #26559f;"/>
												 </a>   
											</div>
										</div> 
										
										
				<?php } ?>						
										
										  
                          
                      
                          
                          
										<div class="row">
											<div class="col-xs-12 col-sm-3 row-seperate">
												<label>Update Default Image<strong style="color:#F00;"></strong></label>
											 
											</div>
										   <div class="col-xs-12 col-sm-9 row-seperate">
												<input  class="form-control" name="image[]"  type="file"  style="width:40%;display:inline-block" >
                                                Prefer 570 X 345
												<br /><br />
											</div>
										</div>



							   <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Meta Title<strong style="color:#F00;">*</strong> </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <input class="form-control" name="metatitle"
                                                value="<?php echo $blog['meta_title'];?>"
                                                placeholder="meta title" type="text" required>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Meta Description<strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <textarea class="form-control" name="metadescription"
                                                placeholder="meta Description" type="text" rows="3"
                                                required><?php echo $blog['meta_desc'];?></textarea>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Meta Keyword<strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <textarea class="form-control" name="metakeyword" placeholder="meta keyword"
                                                type="text" rows="3"
                                                required><?php echo $blog['meta_key'];?></textarea>
                                        </div>
                                    </div>
                       			
									  
                          
                          			
					                 </div><!-- /.box-body -->
				                </div><!-- /.box -->			  

                            </div><!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary" id="submitbutton">Update</button>
								<a href="javascript:history.go(-1)" class="btn btn-primary">Cancel</a>
									
							</div>
                        </div><!-- /.box -->
			        </form>
              
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section>
        <!-- Main content -->
        
        
    
        
        <!-- /.content -->
    </div><!-- /.content-wrapper -->
      

 <?php $this->load->view('admin/includes/footer');?>
 
   
 
 
 
  
    
 