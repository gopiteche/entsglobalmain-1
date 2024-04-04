<?php

Error_reporting(0);

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inner extends MY_Controller
{
		// construct
    public function __construct()
		{
			parent::__construct();
			$this->load->database();
   $this->load->library('form_validation');
			$this->load->helper(array('form', 'url', 'text'));
      $this->load->model("Admin_model");			
			$this->load->library('session');
				if(!$this->session->userdata('adminId'))
				{
					redirect(base_url().'admin/login');	
				}	
				
				
				//get user details
        }
		
		
	public function index()

		{  
		   
		 $data['banner_data']	=	$this->Admin_model->fetch_all('innbanners');
		 $parent =  $this->uri->segment(4);	
			$data['seo_title'] 	= 	"View Banners | ".$this->data['admin_title'].""; 
			$this->load->view('admin/view_innbanners',$data);
		
   }
	
	
       
	public function EditInnBanner($bid)
		{
			
			
			$cond=array('ban_id' => $bid);
			
			$data['banner_data'] 	= 	$this->Admin_model->fetch_one_row('innbanners',$cond);
			
			$data['seo_title'] 	= 	"Edit Banner | ".$this->data['admin_title'].""; 
			
							
			if($_POST):

				$this->form_validation->set_rules('title', 'title', 'required');	
 

    			if ($this->form_validation->run() == FALSE)
                {

                      $this->load->view('admin/view_innbanners');			
                }
                else
                {
				
			$ban_data = array(

					'title' => $this->input->post('title')										
			
			    );
			
			$this->Admin_model->update_all($ban_data,$cond,'innbanners');
			
			
		    if(!empty($_FILES["image"]["name"]))
			{
								
				for ($i = 0; $i < count($_FILES['image']['name']); $i++) 
				{
					if($_FILES["image"]["name"][$i]!='')
					{
											
						@unlink('uploads/banners/'.$data['banner_data']['ban_image']);
																	
						$filename2 	= 	basename($_FILES["image"]["name"][$i]);
						$ext2 		= 	@end(explode('.', $filename2));
						$ext2 		= 	strtolower($ext2);			
						$gallery2    = 	"banner_".rand().'.'.$ext2;			
						$uploadfile2 = 	"uploads/banners";

						move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);

						$config_manip = array(
							'image_library' => 'gd2',
							'source_image' => $uploadfile2."/".$gallery2,
							'maintain_ratio' => TRUE,
							'width' => 1920,
							'height' => 300
						);
	
						$this->image_lib->initialize($config_manip);
	
						$this->image_lib->resize();
	
						$this->image_lib->clear();

						$more_docs  	= 	array(
							   'ban_id'  =>$bid,
							   'image'  => $gallery2);
						$add_img2	=	$this->Admin_model->update_all($more_docs,$cond,'innbanners');
							
				    }
				}
			}
		}	
			
			$this->session->set_flashdata('success', 'Inner Banner updated Successfully.'); 
				
			redirect(base_url().'admin/Inner');
				
			endif;
			
			$this->load->view('admin/edit_innbanner', $data);
				
        }
		
	
}