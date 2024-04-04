<?php

Error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');
class Blogs extends MY_Controller 
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

			  $data['seo_title']= "View Blogs | ".$this->data['admin_title']."";
			  $data['blog_data'] = $this->Admin_model->fetch_all_by_desc('blog','blog_id');
			  $this->load->view('admin/view_blog',$data);
		
		   }	
		
	
		
     public function AddBlogs()
      {

			   $data['seo_title']= "Add Blogs | ".$this->data['admin_title']."";
			   
						if($_POST):
			   
			   $servdata  	= array
			       (  
						'blog_title'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('title')),	
						'blog_content'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('content')),
						'cdate'  => date("Y-m-d",strtotime($this->input->post('bdate'))),
						'meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
						'meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
						'meta_key'       => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword')),
                        'blog_slug'          => $this->create_slug($this->input->post('title')),						
					);
									
				$cid = $this->Admin_model->insertsection('blog',$servdata);

				$this->session->set_flashdata('success','blog Added Succesfully');
				  
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
										$uploadfile2 = 	"uploads/blogs";
										move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
									    $data_imgg  	= array('blog_image'  =>$gallery2);
									    $condd  	= 	array('blog_id'  =>$cid);
									    $add_imgg	=	$this->Admin_model->update_all($data_imgg,$condd,'blog');
									 
						            }
						    }
					}
				  
				  
				  
				$this->session->set_flashdata('success','Blogs Added Succesfully');
				  
				redirect(base_url().'admin/Blogs/AddBlogs');
				endif;
				$this->load->view('admin/add_blog',$data);
	        }




		
        public function EditBlogs($cid)
	        {
				$cond	=	array('blog_id' => $cid);
				$data['blog']	=	$this->Admin_model->fetch_one_row('blog',$cond);
				
				$data['seo_title']=  "Edit Blogs | ".$this->data['admin_title']."";
				if($_POST):
				
				$servdata  	= array
				 ( 
				 	'blog_title'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('title')),
					'blog_content'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('content')),
					'meta_title'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metatitle')),
					'cdate'  => date("Y-m-d",strtotime($this->input->post('bdate'))),
					'meta_desc'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metadescription')),
					'meta_key'       => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('metakeyword')),
					'blog_slug'  => $this->change_slug($this->input->post('title'),$cid),				
					);												
												
				$cond	=	array('blog_id'	=>	$cid);
				$edit 	= 	$this->Admin_model->update_all($servdata,$cond,'blog');
				$this->session->set_flashdata('success','blog Updated Succesfully');
				
				if(!empty($_FILES["image"]["name"]))
					{
										
						for ($i = 0; $i < count($_FILES['image']['name']); $i++) 
							{
								if($_FILES["image"]["name"][$i]!='')
									{				
												
										@unlink('uploads/blogs/'.$data['blog']['blog_image']);			
														
										$filename2 	= 	basename($_FILES["image"]["name"][$i]);
										$ext2 		= 	@end(explode('.', $filename2));
										$ext2 		= 	strtolower($ext2);			
										$gallery2    = 	"serv_".rand().'.'.$ext2;			
										$uploadfile2 = 	"uploads/blogs";
										move_uploaded_file($_FILES["image"]["tmp_name"][$i],  $uploadfile2."/".$gallery2);
										$image  	= 	array('blog_image'  => $gallery2);
										$cond		= 	array('blog_id' 	=>	$cid);
										$add_img2	=	$this->Admin_model->update_all($image,$cond,'blog');
											
						            }
						    }
					}
				
				
				$this->session->set_flashdata('success','Blogs Updated Succesfully');
				redirect(base_url().'admin/Blogs/EditBlogs/'.$cid);
				endif;
				$this->load->view('admin/edit_blog',$data);	
	        }
	 
	    public function  DeleteBlogs($cid)
	        { 
				$cond = array('blog_id' => $cid);
				$data['blog'] = $this->Admin_model->fetch_one_row('blog',$cond);
				@unlink('uploads/blogs/'.$data['blog']['blog_image']);	
				
				$this->db->where('blog_id',$cid);
				$this->db->delete('blog');
				$this->session->set_flashdata('success', 'Blogs Deleted Successfully.'); 
				redirect(base_url().'admin/Blogs');
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
				$this->db->where('blog_slug', $slug_name);   // Test temp name
				$query = $this->db->get('blog');
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
				$this->db->where('blog_slug', $slug_name); 
				$this->db->where_not_in('blog_id', $id);  // Test temp name
				$query 	= 	$this->db->get('blog');
				if ($query->num_rows() == 0) break;
				$slug_name 	= 	$name . '-' . (++$count);  // Recreate new temp name
			}
			return $slug_name;
		}	
		
	
	    
	
	   
				
		
	
	 
    }