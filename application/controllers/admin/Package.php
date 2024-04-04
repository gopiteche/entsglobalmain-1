<?php
Error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Package extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url', 'text'));
		$this->load->model("Admin_model");
		$this->load->library('image_lib');
			
		$this->load->library('session');
			if(!$this->session->userdata('adminId'))
			{
				redirect(base_url().'admin/login');	
			}	
				
    }
		
		
	public function index()
	{
		$data['seo_title']= "View Package | ".$this->data['admin_title']."";
		//$data['category'] = $this->Admin_model->fetch_all_by_desc('category','category_id');
		$data['category'] = $this->Admin_model->getAll_Category();
		if(!empty($this->input->post("category"))){
			$main = $this->input->post("category");
		$field = array('package_parent_id' => $main);
		$data['packages'] = $this->Admin_model->fetch_data('package',$field);
		} else {
			//$data['packages'] = $this->Admin_model->fetch_all_by_desc('package','package_id');
			$data['packages'] = $this->Admin_model->getAll_Package();
		}
		$this->load->view('admin/view_package',$data);
	
	}	
		
	public function Update(){
		$updated_rows_json = $_POST['updated_rows'];
		$updated_rows_ary = json_decode($updated_rows_json, true);
		
		foreach ($updated_rows_ary as $updated_row) {
			$updateData1 = [
			   'package_order' => $updated_row['updated_order'],
			];
			
			$this->db->where('package_id', $updated_row['id']);
			$this->db->update('entsglobal_package', $updateData1);
		}
	}
	
	public function Package_status(){
		
		$package_id = $_POST['package_id'];
		$package_status = $_POST['package_status'];
		
		//echo $package_id." - ".$package_status;exit;
		
		$updateData = [
		   'package_status' => $package_status,
		];
		
		$this->db->where('package_id', $package_id);
		$this->db->update('entsglobal_package', $updateData);
		
	}
	
		
    public function AddPackage()
	{
		
		$data['seo_title']= "Add Service | ".$this->data['admin_title']."";
		$data['category'] = $this->Admin_model->fetch_all_by_desc('category','category_id');
		if($_POST):
	
		$pack_data  	= array
			(  
				'package_parent_id'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('category')),
				'package_name'         => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('title')),
				'heading'         => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('heading')),
				
				'package_desc'          => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('desc_i')),
				'package_meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
				'package_meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
				'package_meta_key'       => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword')),
				'package_slug'          => $this->create_slug($this->input->post('title')),							
			);
			
		$cid = $this->Admin_model->insertsection('package',$pack_data);
		
		
		if($cid){
			$updateData1 = [
			   'package_order' => $cid,
			];
			
			$this->db->where('package_id', $cid);
			$this->db->update('entsglobal_package', $updateData1);	
		}
		
		$this->session->set_flashdata('success','Package Added Succesfully');
		
		
		if(!empty($_FILES["image"]["name"]))
		{
						
			for ($i = 0; $i < count($_FILES['image']['name']); $i++) 
			{
				if($_FILES["image"]["name"][$i]!='')
				{	
						
					$filename2 	= 	basename($_FILES["image"]["name"][$i]);
					$ext2 		= 	@end(explode('.', $filename2));
					$ext2 		= 	strtolower($ext2);			
					$gallery2    = 	"pack_".rand().'.'.$ext2;			
					$uploadfile2 = 	"uploads/service";
					move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
					$data_imgg  	= array('package_image'  =>$gallery2);
					$condd  	= 	array('package_id'  =>$cid);
					$add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'package');
				}
			}
		}


			if(!empty($_FILES["file"]["name"]))
		{
						
			for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
			{
				if($_FILES["file"]["name"][$i]!='')
				{	
						
					$filename2 	= 	basename($_FILES["file"]["name"][$i]);
					$ext2 		= 	@end(explode('.', $filename2));
					$ext2 		= 	strtolower($ext2);			
					$gallery2    = 	"pack_".rand().'.'.$ext2;			
					$uploadfile2 = 	"uploads/service";
					move_uploaded_file($_FILES["file"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
					$data_imgg  	= array('file'  =>$gallery2);
					$condd  	= 	array('package_id'  =>$cid);
					$add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'package');
				}
			}
		}
			
		

			
		
		$this->session->set_flashdata('success','Package Added Succesfully');
		redirect(base_url().'admin/Package/AddPackage');
		endif;
		$this->load->view('admin/add_package',$data);
	}
		
		
		
		
    public function EditPackage($cid)
	{  
		$data['category'] = $this->Admin_model->fetch_all_by_desc('category','category_id');
		
		
		$cond	=	array('package_id' => $cid);
		$data['package']	=	$this->Admin_model->fetch_one_row('package',$cond);
			
		
		$data['seo_title']=  "Edit package | ".$this->data['admin_title']."";
		if($_POST):
		$pack_data  	= array
			(  
				'package_parent_id'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('category')),
				'package_name'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('title')),
			
				'package_desc'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('desc_i')),
				'heading'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('heading')),
				'package_meta_title'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
				'package_meta_desc'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
				'package_meta_key'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword')),
				'package_slug'  => $this->change_slug($this->input->post('title'),$cid),	
				
					
								
			);
									
		$cond	=	array('package_id'	=>	$cid);
		$edit 	= 	$this->Admin_model->update_all($pack_data,$cond,'package');
		$this->session->set_flashdata('success','Package Updated Succesfully');
		if(!empty($_FILES["image"]["name"]))
		{
							
			for ($i = 0; $i < count($_FILES['image']['name']); $i++) 
			{
				if($_FILES["image"]["name"][$i]!='')
				{				
									
					@unlink('uploads/service/'.$data['package']['package_image']);			
					$filename2 	= 	basename($_FILES["image"]["name"][$i]);
					$ext2 		= 	@end(explode('.', $filename2));
					$ext2 		= 	strtolower($ext2);			
					$gallery2    = 	"pack_".rand().'.'.$ext2;			
					$uploadfile2 = 	"uploads/service";
					move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
					$image  	= 	array('package_image'  => $gallery2);
					$cond		= 	array('package_id' 	=>	$cid);
					$add_img2	=	$this->Admin_model->update_all($image,$cond,'package');
		
				}
			}
		}


		if(!empty($_FILES["file"]["name"]))
		{
							
			for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
			{
				if($_FILES["file"]["name"][$i]!='')
				{				
									
					@unlink('uploads/service/'.$data['package']['file']);			
					$filename2 	= 	basename($_FILES["file"]["name"][$i]);
					$ext2 		= 	@end(explode('.', $filename2));
					$ext2 		= 	strtolower($ext2);			
					$gallery2    = 	"pack_".rand().'.'.$ext2;			
					$uploadfile2 = 	"uploads/service";
					move_uploaded_file($_FILES["file"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
					$image  	= 	array('file'  => $gallery2);
					$cond		= 	array('package_id' 	=>	$cid);
					$add_img2	=	$this->Admin_model->update_all($image,$cond,'package');
		
				}
			}
		}		
			
		
		
	
			$this->session->set_flashdata('success','package Updated Succesfully');
			redirect(base_url().'admin/Package/EditPackage/'.$cid);
			endif;
			$this->load->view('admin/edit_package',$data);	
	    }
	 
	 
	 
	 
	public function  DeletePackage($cid)
	    { 
	        $cond = array('package_id' => $cid);
	        $data['package'] = $this->Admin_model->fetch_one_row('package',$cond); 
			
			@unlink('uploads/service/'.$data['package']['package_image']);	
			
	        $this->db->where('package_id',$cid);
	        $this->db->delete('package');			
			
			
	        $this->session->set_flashdata('success', 'Package Deleted Successfully.'); 
	        redirect(base_url().'admin/Package');
	    }
		
	
	
	public function create_slug($name)
	{
		
		$count 	= 	0;
		//$lower_name = strtolower($name);
		$name 	= 	url_title(strtolower($name));
        $slug_name 	= 	$name;             // Create temp name
		while(true) 
		{
			$this->db->select('*');
			$this->db->where('package_slug', $slug_name);   // Test temp name
			$query = $this->db->get('package');
			if ($query->num_rows() == 0) break;
			$slug_name 	=	$name . '-' . (++$count);  // Recreate new temp name
		}
		return $slug_name;
	}
		
		
		
		
	
	public function change_slug($name,$id)
	{
		$count 	= 	0;
		$name 	= 	url_title(strtolower($name));
		$slug_name 	= 	$name;  
		//echo $slug_name;
		//exit;           // Create temp name
		while(true) 
		{
			$this->db->select('*');
			$this->db->where('package_slug', $slug_name); 
			$this->db->where_not_in('package_id', $id);  // Test temp name
			$query 	= 	$this->db->get('package');
			if ($query->num_rows() == 0) break;
			$slug_name 	= 	$name . '-' . (++$count);  // Recreate new temp name
		}
		return $slug_name;
	}			
		
	
		
	
	 
 }