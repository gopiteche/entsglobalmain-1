<?php 

Error_reporting(0);
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends MY_Controller
{
		// construct
    public function __construct()
		{
			parent::__construct();
			$this->load->database();
            $this->load->library('form_validation');
			$this->load->helper(array('form', 'url', 'text'));
            $this->load->model("Admin_model");
			//$this->pr_details=get_profile_details();
			$this->load->library('session');
				if(!$this->session->userdata('adminId'))
				{
					redirect(base_url().'admin/login');	
				}	
				
				
				//get user details
        }
		
		
	public function index(){  		   
		//$data['banner_data']	=	$this->Admin_model->fetch_all('banners');
		$data['banner_data']	=	$this->Admin_model->getAll('banners');
		$parent =  $this->uri->segment(4);	
		$data['seo_title'] 	= 	"View Banners | ".$this->data['admin_title'].""; 
		$this->load->view('admin/view_banners',$data);	
	}
	
	
       
	public function EditBanner($bid){			
			
	$cond=array('ban_id' => $bid);			
	$data['banner_data'] 	= 	$this->Admin_model->fetch_one_row('banners',$cond);			
	$data['seo_title'] 	= 	"Edit Banner | ".$this->data['admin_title'].""; 			
							
		if($_POST):
		
			$this->form_validation->set_rules('main_heading', 'main_heading', 'required');
			$this->form_validation->set_rules('sub_heading', 'sub_heading', 'required');
 

			if ($this->form_validation->run() == FALSE){
				$this->load->view('admin/view_banners');			
			}
			else{				
				$ban_data = array(
					'ban_main_heading' => $this->input->post('main_heading'),
					'ban_sub_heading' => $this->input->post('sub_heading'),
					'ban_link' => $this->input->post('ban_txt'),		
			    );
			
				$this->Admin_model->update_all($ban_data,$cond,'banners');
			
			
				if(!empty($_FILES["image"]["name"])){
								
					for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
						if($_FILES["image"]["name"][$i]!=''){											
							@unlink('uploads/banners/'.$data['banner_data']['ban_image']);
																		
							$filename2 	= 	basename($_FILES["image"]["name"][$i]);
							$ext2 		= 	@end(explode('.', $filename2));
							$ext2 		= 	strtolower($ext2);			
							$gallery2    = 	"banner_".rand().'.'.$ext2;			
							$uploadfile2 = 	"uploads/banners";
							move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
							
							$more_docs  	= 	array(
								   'ban_id'  =>$bid,
								   'ban_image'  => $gallery2,);
							$add_img2	=	$this->Admin_model->update_all($more_docs,$cond,'banners');
							
						}
					}
				}
			}	
			
			$this->session->set_flashdata('success', 'Banner updated Successfully.'); 				
			redirect(base_url().'admin/Banner');				
		endif;
		
		$this->load->view('admin/edit_banner', $data);
				
    }
		
	public function Update(){
		$updated_rows_json = $_POST['updated_rows'];
		$updated_rows_ary = json_decode($updated_rows_json, true);
		
		foreach ($updated_rows_ary as $updated_row) {
			$updateData1 = [
			   'ban_order' => $updated_row['updated_order'],
			];
			
			$this->db->where('ban_id', $updated_row['id']);
			$this->db->update('entsglobal_banners', $updateData1);
		}
	}
	
	public function Ban_status(){
		
		$ban_id = $_POST['ban_id'];
		$ban_status = $_POST['ban_status'];
		
//echo $ban_id.'  -  '.$ban_status;
		//exit;
		
		$updateData = [
		   'ban_status' => $ban_status,
		];
		
		$this->db->where('ban_id', $ban_id);
		$this->db->update('entsglobal_banners', $updateData);
		
	}
}