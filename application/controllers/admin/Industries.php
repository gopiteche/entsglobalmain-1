<?php
Error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Industries extends MY_Controller 
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
			  $data['seo_title']= "View industries | ".$this->data['admin_title']."";
			  //$data['industries'] = $this->Admin_model->fetch_all_by_desc('industries','industries_id');
			  $data['industries'] = $this->Admin_model->getAll_Industries();
			  $this->load->view('admin/view_industries',$data);
		
		    }	
			
		public function Update(){
			$updated_rows_json = $_POST['updated_rows'];
			$updated_rows_ary = json_decode($updated_rows_json, true);
			
			foreach ($updated_rows_ary as $updated_row) {
				$updateData1 = [
				   'industries_order' => $updated_row['updated_order'],
				];
				
				$this->db->where('industries_id', $updated_row['id']);
				$this->db->update('entsglobal_industries', $updateData1);
			}
		}
		
		public function Industries_status(){
			
			$industries_id = $_POST['industries_id'];
			$industries_status = $_POST['industries_status'];
			
			$updateData = [
			   'industries_status' => $industries_status,
			];
			
			$this->db->where('industries_id', $industries_id);
			$this->db->update('entsglobal_industries', $updateData);
			
		}
		
	
		
         public function Addindustries()
            {
			   $data['seo_title']= "Add Industries | ".$this->data['admin_title']."";
			   if($_POST):
			   
			    $servdata  	= array
			       (  
						'title'  		=> preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('title')),	
						'content'  		=> preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('content')),	
						'short'  		=> preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('short')),	
						'meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
						'meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
						'meta_key'      => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword')),	
						'slug'          => $this->create_slug($this->input->post('title')),				
					);
									
				$cid = $this->Admin_model->insertsection('industries',$servdata);
				$this->session->set_flashdata('success','Industry Added Succesfully');
				
				if($cid){
					$updateData1 = [
					   'industries_order' => $cid,
					];
					
					$this->db->where('industries_id', $cid);
					$this->db->update('entsglobal_industries', $updateData1);	
				}
				  
				if(!empty($_FILES["image"]["name"]))
					{
										
						for ($i = 0; $i < count($_FILES['image']['name']); $i++) 
							{
								if($_FILES["image"]["name"][$i]!='')
								    {	
												
																	
										$filename2 	= 	basename($_FILES["image"]["name"][$i]);
										$ext2 		= 	@end(explode('.', $filename2));
										$ext2 		= 	strtolower($ext2);			
										$gallery2    = 	"serv_".rand().'.'.$ext2;			
										$uploadfile2 = 	"uploads/industries";
										move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
									    $data_imgg  	= array('image'  =>$gallery2);
									    $condd  	= 	array('industries_id'  =>$cid);
									    $add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'industries');
									 
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
										$gallery2    = 	"serv_".rand().'.'.$ext2;			
										$uploadfile2 = 	"uploads/industries";
										move_uploaded_file($_FILES["file"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
									    $data_imgg  	= array('file'  =>$gallery2);
									    $condd  	= 	array('industries_id'  =>$cid);
									    $add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'industries');
									 
						            }
						    }
					}
				  
				  
				  
				  
				$this->session->set_flashdata('success','industries Added Succesfully');
				  
				redirect(base_url().'admin/industries/Addindustries');
				endif;
				$this->load->view('admin/add_industries',$data);
	        }
		
        public function Editindustries($cid)
	        {
				$cond	=	array('industries_id' => $cid);
				$data['Indust']	=	$this->Admin_model->fetch_one_row('industries',$cond);
				
				$data['seo_title']=  "Edit industries | ".$this->data['admin_title']."";
				if($_POST):
				
				$servdata  	= array
				    (  
					'title'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('title')),
					'content'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('content')),	
					'short'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('short')),	
						'meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
				'meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
				'meta_key'       => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword')),	
                'slug'  => $this->change_slug($this->input->post('title'),$cid),				
					);												
												
				$cond	=	array('industries_id'	=>	$cid);
				$edit 	= 	$this->Admin_model->update_all($servdata,$cond,'industries');
				$this->session->set_flashdata('success','Industries details Updated Succesfully');
				
				if(!empty($_FILES["image"]["name"]))
					{
										
						for ($i = 0; $i < count($_FILES['image']['name']); $i++) 
							{
								if($_FILES["image"]["name"][$i]!='')
									{				
												
										@unlink('uploads/industries/'.$data['service']['image']);			
														
										$filename2 	= 	basename($_FILES["image"]["name"][$i]);
										$ext2 		= 	@end(explode('.', $filename2));
										$ext2 		= 	strtolower($ext2);			
										$gallery2    = 	"serv_".rand().'.'.$ext2;			
										$uploadfile2 = 	"uploads/industries";
										move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
										$image  	= 	array('image'  => $gallery2);
										$cond		= 	array('industries_id' 	=>	$cid);
			$add_img2	=	$this->Admin_model->update_all($image,$cond,'industries');
											
						            }
						    }
					}



					if(!empty($_FILES["file"]["name"]))
					{
										
						for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
							{
								if($_FILES["file"]["name"][$i]!='')
									{				
												
										@unlink('uploads/industries/'.$data['service']['file']);			
														
										$filename2 	= 	basename($_FILES["file"]["name"][$i]);
										$ext2 		= 	@end(explode('.', $filename2));
										$ext2 		= 	strtolower($ext2);			
										$gallery2    = 	"serv_".rand().'.'.$ext2;			
										$uploadfile2 = 	"uploads/industries";
										move_uploaded_file($_FILES["file"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
										$image  	= 	array('file'  => $gallery2);
										$cond		= 	array('industries_id' 	=>	$cid);
			$add_img2	=	$this->Admin_model->update_all($image,$cond,'industries');
											
						            }
						    }
					}
				
				
				$this->session->set_flashdata('success','industries Updated Succesfully');
				redirect(base_url().'admin/industries/Editindustries/'.$cid);
				endif;
				$this->load->view('admin/edit_industries',$data);	
	        }
	 
	    public function  Deleteindustries($cid)
	        { 
				$cond = array('industries_id' => $cid);
				$data['service'] = $this->Admin_model->fetch_one_row('industries',$cond);
				@unlink('uploads/industries/'.$data['service']['image']);	
				
				$this->db->where('industries_id',$cid);
				$this->db->delete('industries');
				$this->session->set_flashdata('success', 'Industry Deleted Successfully.'); 
				redirect(base_url().'admin/industries');
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
			$this->db->where('slug', $slug_name);   // Test temp name
			$query = $this->db->get('industries');
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
			$this->db->where('slug', $slug_name); 
			$this->db->where_not_in('industries_id', $id);  // Test temp name
			$query 	= 	$this->db->get('industries');
			if ($query->num_rows() == 0) break;
			$slug_name 	= 	$name . '-' . (++$count);  // Recreate new temp name
		}
		return $slug_name;
	}			
		
		
    }