<section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
  
  <ul class="sidebar-menu">



       <li class="treeview <?php if($this->uri->segment(2)=="Banner")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Home Banner</span> </a>
      <ul class="treeview-menu">
        <li class="<?php if($this->uri->segment(3)=="Banner"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Banner"> <i class="fa fa-plus-square"></i><span>View / Edit Banner</span></a> </li>
       
      </ul>
    </li>

        <li class="treeview <?php if($this->uri->segment(2)=="Inner")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Inner Banner</span> </a>
      <ul class="treeview-menu">
        <li class="<?php if($this->uri->segment(3)=="Inner"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Inner"> <i class="fa fa-plus-square"></i><span>View / Edit Inner Banner</span></a> </li>
       
      </ul>
    </li>



    <li class="treeview <?php if($this->uri->segment(2)=="Category")  :echo 'active'; endif; ?>"> <a href="#"> <i
                    class="fa fa-cog" aria-hidden="true"></i> <span>Main Services</span> </a>
            <ul class="treeview-menu">

                <li class="<?php if($this->uri->segment(3)=="AddCategory"):echo 'active'; endif; ?>"> <a
                        href="<?php echo base_url();?>admin/Category/AddCategory"> <i
                            class="fa fa-plus-square"></i><span>Add Main Services</span></a> </li>

                 <li class="<?php if($this->uri->segment(3)=="AddCategory"):echo 'active'; endif; ?>"> <a
                        href="<?php echo base_url();?>admin/Category"> <i class="fa fa-plus-square"></i><span>Edit / View Main Services</span></a> </li>

            </ul>
        </li>
	 
	 
	 
	
	<li class="treeview <?php if($this->uri->segment(2)=="Package")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-cogs" aria-hidden="true"></i> <span>Sub Services </span> </a>
      <ul class="treeview-menu">
         
        <li class="<?php if($this->uri->segment(3)=="AddPackage"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Package/AddPackage"> <i class="fa fa-plus-square"></i><span>Add Sub Services</span></a> </li>
        <li class="<?php if(($this->uri->segment(3)=="EditPackage") || ($this->uri->segment(3)=="")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Package"> <i class="fa fa-plus-square"></i> <span>View / Edit Sub Services</span></a> </li>
      </ul>
    </li> 
	 

     <li class="treeview <?php if($this->uri->segment(2)=="Industries")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-building" aria-hidden="true"></i> <span>Industries </span> </a>
      <ul class="treeview-menu">
         
 <li class="<?php if($this->uri->segment(3)=="AddIndustries"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Industries/AddIndustries"> <i class="fa fa-plus-square"></i><span>Add Industries </span></a> </li>
<li class="<?php if(($this->uri->segment(3)=="EditIndustries") || ($this->uri->segment(3)=="")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Industries"> <i class="fa fa-plus-square"></i> <span>View / Edit Industries </span></a> </li>
      </ul>
    </li>

    <li class="treeview <?php if($this->uri->segment(2)=="Career")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i> <span>Careers</span> </a>
      <ul class="treeview-menu">
         
        <li class="<?php if(($this->uri->segment(3)=="AddCareer")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Career/AddCareer"> <i class="fa fa-plus-square"></i> <span>Add Career</span></a> </li>
         
        <li class="<?php if(($this->uri->segment(3)=="EditCareer") || ($this->uri->segment(3)=="")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Career"> <i class="fa fa-plus-square"></i> <span>View Career</span></a> </li>
        
      </ul>
    </li>
	
	
	
	<li class="treeview <?php if($this->uri->segment(2)=="Testimonial")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-quote-right" aria-hidden="true"></i> <span>Testimonial</span> </a>
      <ul class="treeview-menu">
         
        <li class="<?php if($this->uri->segment(3)=="AddTestimonial"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Testimonial/AddTestimonial"> <i class="fa fa-plus-square"></i><span>Add Testimonial</span></a> </li>
        <li class="<?php if(($this->uri->segment(3)=="EditTestimonial") || ($this->uri->segment(3)=="")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Testimonial"> <i class="fa fa-plus-square"></i> <span>View / Edit Testimonial</span></a> </li>
      </ul>
    </li>


    <li class="treeview <?php if($this->uri->segment(2)=="Blogs")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-rss" aria-hidden="true"></i> <span>Blogs</span> </a>
      <ul class="treeview-menu">
         
        <li class="<?php if($this->uri->segment(3)=="AddBlogs"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Blogs/AddBlogs"> <i class="fa fa-plus-square"></i><span>Add Blogs</span></a> </li>
        <li class="<?php if(($this->uri->segment(3)=="EditBlogs") || ($this->uri->segment(3)=="")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Blogs"> <i class="fa fa-plus-square"></i> <span>View / Edit Blogs</span></a> </li>
      </ul>
    </li>
    
    
    <li class="treeview <?php if($this->uri->segment(2)=="Contact")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa  fa-map-marker" aria-hidden="true"></i> <span>Contact Us</span> </a>
      <ul class="treeview-menu">

        <li class="<?php if($this->uri->segment(3)=="AddBlogs"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Contact/AddContact"> <i class="fa fa-plus-square"></i><span>Add Contact Location</span></a> </li>
      
      <li class="<?php if(($this->uri->segment(2)=="EditContact")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Contact/ViewContact"> <i class="fa fa-plus-square"></i> <span>Manage Contact Us</span></a> </li> 
        
        
      </ul>
    </li>
    
    
   
    

 <li class="treeview <?php if($this->uri->segment(2)=="CMS")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-file-code-o" aria-hidden="true"></i> <span>CMS Page</span> </a>
      <ul class="treeview-menu">
        <li class="<?php if(($this->uri->segment(3)=="ViewCMS") || ($this->uri->segment(3)=="EditCMS")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/CMS/ViewCMS"> <i class="fa fa-plus-square"></i> <span>Edit/View Pages</span></a> </li>
      </ul>
  </li>
       
    
    
    

    
    
    
    <li class="treeview <?php if($this->uri->segment(2)=="Seo")  :echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-file-text" aria-hidden="true"></i> <span>Seo</span> </a>
      <ul class="treeview-menu">
        <li class="<?php if(($this->uri->segment(3)=="EditSeo") || ($this->uri->segment(3)=="")):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/Seo"> <i class="fa fa-plus-square"></i> <span>View Seo Page</span></a> </li>
      </ul>
    </li>
	
	
    <li class="treeview <?php if($this->uri->segment(2)=="change_password" ):echo 'active'; endif; ?>"> <a href="#"> <i class="fa fa-cog"></i> <span>Settings</span> </a>
      <ul class="treeview-menu">
        <li class="<?php if($this->uri->segment(2)=="change_password"):echo 'active'; endif; ?>" > <a href="<?php echo base_url();?>admin/change_password"> <i class="fa fa-lock"></i> <span>Change Password</span></a> </li>
        <li> <a href="<?php echo base_url();?>admin/login/logout"> <i class="fa fa-sign-out"></i> <span>Logout</span></a> </li>
      </ul>
    </li>
	
	
	
  </ul>
</section>
<!-- /.sidebar -->