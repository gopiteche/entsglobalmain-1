<?php
Error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends MY_Controller 
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
		
		
	public function index(){

		//$data['category'] = $this->Admin_model->fetch_all_by_desc('category','category_id');
		$data['category'] = $this->Admin_model->getAll_Category();
		$this->load->view('admin/view_category',$data);
		}	
		
public function Update(){
		$updated_rows_json = $_POST['updated_rows'];
		$updated_rows_ary = json_decode($updated_rows_json, true);
		
		foreach ($updated_rows_ary as $updated_row) {
			$updateData1 = [
			   'cat_order' => $updated_row['updated_order'],
			];
			
			$this->db->where('category_id', $updated_row['id']);
			$this->db->update('entsglobal_category', $updateData1);
		}
	}
	
	public function Cat_status(){
		
		$cat_id = $_POST['cat_id'];
		$cat_status = $_POST['cat_status'];
		
		$updateData = [
		   'cat_status' => $cat_status,
		];
		
		$this->db->where('category_id', $cat_id);
		$this->db->update('entsglobal_category', $updateData);
		
	}
		
public function AddCategory()
    {
	   $data['seo_title']= "Services | ".$this->data['admin_title']."";
	   
	   if($_POST):
	   
	   $catdata  	= array(  
	                         'category_name'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('name')),
	                        'category_content'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('content')),
	                   'short'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('short')),
							 'category_slug'  => $this->create_slug($this->input->post('name')),
				'meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
				'meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
				'meta_key'       => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword'))
							);
							
		  $cid = $this->Admin_model->insertsection('category',$catdata);
		  
		  
		if($cid){
			$updateData1 = [
			   'cat_order' => $cid,
			];
			
			$this->db->where('category_id', $cid);
			$this->db->update('entsglobal_category', $updateData1);	
		}
		  
		  $this->session->set_flashdata('success','Category Added Succesfully');
		  
		   if(!empty($_FILES["image"]["name"]))
		{					
			$filename2 	= 	basename($_FILES["image"]["name"]);
			$ext2 		= 	@end(explode('.', $filename2));
			$ext2 		= 	strtolower($ext2);			
			$gallery2    = 	"service_tile_".rand().'.'.$ext2;			
			$uploadfile2 = 	"uploads/service";
			move_uploaded_file($_FILES["image"]["tmp_name"],  $uploadfile2."/".$gallery2);
			$data_imgg  	= array('image'  =>$gallery2);
			$condd  	= 	array('category_id'  =>$cid);
			$add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'category');			
		}



		 if(!empty($_FILES["file"]["name"]))
		{					
			$filename2 	= 	basename($_FILES["file"]["name"]);
			$ext2 		= 	@end(explode('.', $filename2));
			$ext2 		= 	strtolower($ext2);			
			$gallery2    = 	"service_banner_".rand().'.'.$ext2;			
			$uploadfile2 = 	"uploads/service";
			move_uploaded_file($_FILES["file"]["tmp_name"],  $uploadfile2."/".$gallery2);

			$config_manip = array(
				'image_library' => 'gd2',
				'source_image' => $uploadfile2."/".$gallery2,
				'maintain_ratio' => false,
				'width' => 1920,
				'height' => 350
			);

			$this->image_lib->initialize($config_manip);

			$this->image_lib->resize();

			$this->image_lib->clear();


			$data_imgg  	= array('file'  =>$gallery2);
			$condd  	= 	array('category_id'  =>$cid);
			$add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'category');			
		}
			
		  
		  redirect(base_url().'admin/Category/AddCategory');
		  endif;
		  $this->load->view('admin/add_category',$data);
	}


		
public function EditCategory($cid)
	{
		 $cond	=	array('category_id' => $cid);
		 $data['category']	=	$this->Admin_model->fetch_one_row('category',$cond);
		
		 $data['seo_title']=  "Edit Services | ".$this->data['admin_title']."";
		 if($_POST):
		
		 $catdata  	= array('category_name'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('name')),
		                         'category_content'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('content')),
		      'short'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('short')),
								 'category_slug'  => $this->change_slug($this->input->post('name'),$cid),	
				'meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
				'meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
				'meta_key'       => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword'))
									
							);
										
										
		$cond	=	array('category_id'	=>	$cid);
		$edit 	= 	$this->Admin_model->update_all($catdata,$cond,'category');
		$this->session->set_flashdata('success','Services Updated Succesfully');
		
		if(!empty($_FILES["image"]["name"]))
				{
					 @unlink('uploads/service/'.$data['category']['image']);			
									$filename2 	= 	basename($_FILES["image"]["name"]);
					                $ext2 		= 	@end(explode('.', $filename2));
					                $ext2 		= 	strtolower($ext2);			
					                $gallery2    = 	"service_tile_".rand().'.'.$ext2;			
					                $uploadfile2 = 	"uploads/service";
					  move_uploaded_file($_FILES["image"]["tmp_name"], $uploadfile2."/".$gallery2);
				      $image  	= 	array('image'  => $gallery2);
					  $cond		= 	array('category_id' 	=>	$cid);
					  $add_img2	=	$this->Admin_model->update_all($image,$cond,'category');
				}




		if(!empty($_FILES["file"]["name"]))
				{
					 @unlink('uploads/service/'.$data['file']['image']);			
									$filename2 	= 	basename($_FILES["file"]["name"]);
					                $ext2 		= 	@end(explode('.', $filename2));
					                $ext2 		= 	strtolower($ext2);			
					                $gallery2    = 	"service_banner_".rand().'.'.$ext2;			
					                $uploadfile2 = 	"uploads/service";
					  move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile2."/".$gallery2);

							$config_manip = array(
								'image_library' => 'gd2',
								'source_image' => $uploadfile2."/".$gallery2,
								'maintain_ratio' => false,
								'master_dim' => 'height',
								'width' => 1920,
								'height' => 350,
							);
		
							$this->image_lib->initialize($config_manip);
		
							$this->image_lib->resize();
		
							$this->image_lib->clear();



				      $image  	= 	array('file'  => $gallery2);
					  $cond		= 	array('category_id' 	=>	$cid);
					  $add_img2	=	$this->Admin_model->update_all($image,$cond,'category');
				}
		
		
		$this->session->set_flashdata('success','Category Updated Succesfully');
	    redirect(base_url().'admin/Category/EditCategory/'.$cid);
		endif;
		$this->load->view('admin/edit_category',$data);	
	}
	
	 
	public function  DeleteCategory($cid)
	 { 
	    
		$cond = array('package_parent_id' => $cid);
		$data['package'] = $this->Admin_model->fetch_one_row('package',$cond);
		$pack_id = $data['package']['package_id'];
			
		
		@unlink('uploads/service/'.$data['package']['package_image']);	
		
	    
	    $this->db->where('category_id',$cid);
	    $this->db->delete('category');
		
		$this->db->where('package_parent_id',$cid);
	    $this->db->delete('package');
	
		
	    $this->session->set_flashdata('success', 'Services Deleted Successfully.'); 
	    redirect(base_url().'admin/Category');
	}
		
	
	public function create_slug($name)
		{
			
			$count 	= 	0;
			$name 	= 	url_title(strtolower($name));
			$slug_name 	= 	$name;             // Create temp name
			while(true) 
			{
				$this->db->select('*');
				$this->db->where('category_slug', $slug_name);   // Test temp name
				$query = $this->db->get('category');
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
				$this->db->where('category_slug', $slug_name); 
				$this->db->where_not_in('category_id', $id);  // Test temp name
				$query 	= 	$this->db->get('category');
				if ($query->num_rows() == 0) break;
				$slug_name 	= 	$name . '-' . (++$count);  // Recreate new temp name
			}
			return $slug_name;
		}			
	
		
		
	
	 
 }