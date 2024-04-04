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
        <h1>Manage Package</h1>
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




                <form name="add_menu" id="add_menu" method="POST" enctype="multipart/form-data">
                    <div class="box">
                        <div class="box-body">
                            <!-- Form Element sizes -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h2 class="box-title">Edit Package</h2>
                                </div>

                                <div class="box-body">

                                    <?php $parent = $this->uri->segment(4); ?>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Select Main Service<strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <select class="form-control" name="category" required>
                                                <option selected disabled value="">Select Main services</option>
                                                <?php
                                                    foreach($category as $cat){
									            ?>
        <option value="<?php echo $cat->category_id; ?>"
            <?php if($cat->category_id==$package['package_parent_id']){ echo "selected"; }?>>
            <?php echo $cat->category_name;?></option>
                <?php  }
								                ?>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Title<strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <input class="form-control" name="title" placeholder="Title" type="text"
                                                value="<?php echo $package['package_name']; ?>" required>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Short Content<strong style="color:#F00;">*</strong> </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <textarea class="form-control" name="heading" id="editor2" rows="5" cols="40"
                                                type="text"><?php echo 
                                                 $package['heading']; ?></textarea>
                                        </div>
                                    </div>

                                      <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label><strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <a href="<?php echo base_url();?>uploads/service/<?php echo $package['file']; ?>"
                                                class="fancybox-media">
                                                <?php if(!empty($package['file'])){?>
                                                <img src="<?php echo base_url(); ?>uploads/service/<?php echo $package['file']; ?>"
                                                    width="150px" height="150px" />
                                                <?php } ?>
                                                
                                            </a>
                                        
                                        </div>
                                    </div>

                                      <div class="row">

                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Update Banner Image<strong
                                                    style="color:#F00;"></strong></label>

                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <input class="form-control" name="file[]" type="file" id="typ_name"
                                                onchange="Filevalidation()" style="width:40%;display:inline-block">
                                                Prefer 1920 X 350
                                            <br /><br />
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Content<strong style="color:#F00;">*</strong> </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <textarea class="form-control" name="desc_i" id="editor1" rows="5" cols="40"
                                                type="text"><?php echo 
												 $package['package_desc']; ?></textarea>
                                        </div>
                                    </div>
   


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Meta Title<strong style="color:#F00;">*</strong> </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <input class="form-control" name="metatitle"
                                                value="<?php echo $package['package_meta_title'];?>"
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
                                                required><?php echo $package['package_meta_desc'];?></textarea>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Meta Keyword<strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <textarea class="form-control" name="metakeyword" placeholder="meta keyword"
                                                type="text" rows="3"
                                                required><?php echo $package['package_meta_key'];?></textarea>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Tile Image<strong style="color:#F00;">*</strong></label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <a href="<?php echo base_url();?>uploads/service/<?php echo $package['package_image']; ?>"
                                                class="fancybox-media">
                                                <?php if(!empty($package['package_image'])){?>
                                                <img src="<?php echo base_url(); ?>uploads/service/<?php echo $package['package_image']; ?>"
                                                    width="150px" height="150px" />
                                                <?php } ?>
                                            </a>
                                        </div>
                                    </div>








                                    <div class="row">

                                        <div class="col-xs-12 col-sm-3 row-seperate">
                                            <label>Update Image<strong
                                                    style="color:#F00;"></strong></label>

                                        </div>
                                        <div class="col-xs-12 col-sm-9 row-seperate">
                                            <input class="form-control" name="image[]" type="file" id="typ_name"
                                                onchange="Filevalidation()" style="width:40%;display:inline-block">
                                                Prefer 570 X 300
                                            <br /><br />
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



<script type="text/javascript">
$(document).ready(function() {
    var maxField = 4;
    var addButton = $('.add_button');
    var wrapper = $('.field_wrapper');
    var fieldHTML =
        '<div> <input class="form-control" name="document_more[]" id="typ_name2" onchange="Filevalidation2()" multiple type="file" required style="width:40%;display:inline-block">&nbsp&nbsp;<a href="javascript:void(0);" class="remove_button" title="Remove field">&nbsp;<img src="<?php echo base_url();?>assets/admin/img/remove-icon.png"/></a></div><br>'; //New input field html 
    var x = 1;
    $(addButton).click(function() {
        if (x < maxField) {
            x++;
            $(wrapper).append(fieldHTML);
        }
    });
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    });
});
</script>

<script>
function getsubcat(val) {
    //alert(val)
    $.ajax({

        type: "POST",
        url: '<?php echo base_url('admin/Product/GetSubcat_edit'); ?>',
        data: 'getsubcat=' + val,
        success: function(data) {

            $("#subcat").html(data);
            $('#subcat').css('display', 'block');

        }
    });
}
</script>


<script>
Filevalidation1 = () => {
    const fi = document.getElementById('typ_name1');
    // Check if any file is selected.
    if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {

            const fsize = fi.files.item(i).size;
            const file = Math.round((fsize / 1024));
            // The size of the file.
            if (file >= 1096) {
                alert(
                    "File too Big, please select a file less than 1mb");
                $("#typ_name1").val('');
            } else if (file < 20) {
                alert(
                    "File too small, please select a file greater than 20kb");
                $("#typ_name1").val('');
            } else {
                /* document.getElementById('size').innerHTML = '<b>'
					+ file + '</b> KB';*/
            }
        }
    }
}
</script>



<script>
Filevalidation2 = () => {
    const fi = document.getElementById('typ_name2');
    // Check if any file is selected.
    if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {

            const fsize = fi.files.item(i).size;
            const file = Math.round((fsize / 1024));
            // The size of the file.
            if (file >= 1096) {
                alert(
                    "File too Big, please select a file less than 1mb");
                $("#typ_name2").val('');
            } else if (file < 20) {
                alert(
                    "File too small, please select a file greater than 20kb");
                $("#typ_name2").val('');
            } else {
                /* document.getElementById('size').innerHTML = '<b>'
					+ file + '</b> KB';*/
            }
        }
    }
}
</script>


<?php $this->load->view('admin/includes/footer');?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.min.js" integrity="sha512-lUZZrGg8oiRBygP81yUZ4XkAbmeJn7u7HW5nq7npQ+ZXTRvj3ErL6y1XXDq6fujbiJlu6gHsgNUZLKE6eSDm8w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css" integrity="sha512-YWDtZYKUekuPMIzojX205b/D7yCj/ZM82P4hkqc9ZctHtQjvq3ei11EvAmqxQoyrIFBd9Uhfn/X6nJ1Nnp+F7A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<script>

$('#tokenfield').tokenfield({
   createTokensOnBlur:true,
  showAutocompleteOnFocus: true
})

$('#tokenfield1').tokenfield({
   createTokensOnBlur:true,
  showAutocompleteOnFocus: true
})
</script> 