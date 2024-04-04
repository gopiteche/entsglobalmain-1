<?php

Error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends MY_Controller 
 {
	  public function __construct()
		{
				parent::__construct();
				$this->load->database();
                $this->load->library('form_validation');
				$this->load->helper(array('form', 'url', 'text'));
                $this->load->model("Admin_model");
				$this->load->library('image_lib');
				//$this->pr_details=get_profile_details();
				$this->load->library('session');
				if(!$this->session->userdata('adminId'))
				{
					redirect(base_url().'admin/login');	
				}	
				//get user details
        }
		
		
	   public function index(){
		  $data['seo_title']= "View Career | ".$this->data['admin_title']."";
		  $data['career'] = $this->Admin_model->fetch_all_by_desc('careers','career_id');
		  $this->load->view('admin/view_career',$data);
		
		}
		
		
		
		
		
		
		
		
		
public function AddCareer()

	{
		 
		
		 
		 $data['seo_title']=  "Add Career | ".$this->data['admin_title']."";
		  
		  
		  if($_POST):
		
		 $careerdata  	= array(  
		      'career_tittle'  => $title =  preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('tittle')),
								'career_desc'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('desc_i')),
								'career_location' => $this->input->post('location'),
								'career_req' => $this->input->post('exp'),
								'career_type' => $this->input->post('type'),
								//'career_duties' => $this->input->post('duties'),
								//'career_req' => $this->input->post('require'),
								//'career_skills' => $this->input->post('skills'),
								'career_date' => $this->input->post('date'),
								'career_slug' => $slug = url_title($title, 'dash', true),
							);
										
	
		
		$edit 	= 	$this->Admin_model->insertsection('careers',$careerdata);
		
		$this->session->set_flashdata('success','Career Added Succesfully');
		
		redirect(base_url().'admin/Career');
		
		endif;
		
		$this->load->view('admin/add_career',$data);	
	}
		
		
			
		
	
		

		
public function EditCareer($cid)

	{

		 $cond	=	array('career_id' => $cid);

		 $data['career']	=	$this->Admin_model->fetch_one_row('careers',$cond);

		 $data['seo_title']=  "Edit Career | ".$this->data['admin_title']."";
		 
		 if($_POST):
		
		 $careerdata  	= array(  
				'career_tittle'  => $title =  preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('tittle')),
				'career_desc'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('desc_i')),
				'career_location' => $this->input->post('location'),
				'career_req' => $this->input->post('exp'),
				'career_type' => $this->input->post('type'),
				//'career_duties' => $this->input->post('duties'),
				//'career_req' => $this->input->post('require'),
				//'career_skills' => $this->input->post('skills'),
				'career_date' => $this->input->post('date'),
				'career_slug' => $slug = url_title($title, 'dash', true),
							);		
										
		$cond	=	array('career_id'	=>	$cid);
		$edit 	= 	$this->Admin_model->update_all($careerdata,$cond,'careers');
		$this->session->set_flashdata('success','Career Updated Succesfully');
		redirect(base_url().'admin/Career/EditCareer/'.$cid);
		endif;
		$this->load->view('admin/edit_career',$data);

	}
	
	
	
	
	
	 
	public function  DeleteCareer($cid)
	 { 
	   
	    $this->db->where('career_id',$cid);
	    $this->db->delete('careers');
	    $this->session->set_flashdata('success', 'Career Deleted Successfully.'); 
	    redirect(base_url().'admin/Career');
	}
		
	
	
	
		
		
	
	 
 }