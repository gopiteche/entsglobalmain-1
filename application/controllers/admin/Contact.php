<?php

Error_reporting(0);
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
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
		
		
		
	
		
		// View CMS Pages   
       public function ViewContact()
		{			 
		   $data['seo_title'] 	= 	"View Contact Details| ".$this->data['admin_title'].""; 
		   $parent =  $this->uri->segment(4);
		   $data['contact_data']	=	$this->Admin_model->fetch_all('contact');
		   $this->load->view('admin/view_contact', $data);
	   }
		

	      public function AddContact()
            {
			   $data['seo_title']= "Add Contact | ".$this->data['admin_title']."";
			   if($_POST):
			   
			    $servdata  	= array
			       (  
				'location'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('location')),	
				'address'  => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('address')),						
				'phone'    => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('phone')),
				'email'     => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $this->input->post('email')));
									
				$cid = $this->Admin_model->insertsection('contact',$servdata);
				$this->session->set_flashdata('success','contact Added Succesfully');
				  
			
				  
				redirect(base_url().'admin/Contact/AddContact');
				endif;
				$this->load->view('admin/add_contact',$data);
	        }
		
	 	public function EditContact($cid)
		{
			$cond=array('contact_id' => $cid);
			$data['contact_data'] 	= 	$this->Admin_model->fetch_one_row('contact',$cond);
			$data['seo_title'] 	= 	"Edit Contact Details | ".$this->data['admin_title'].""; 
											
			if($_POST):
			 $cms_data  = array(
			                     
								   'location'=> $this->input->post('location'),
			                       'address'=> $this->input->post('address'),
								   'phone	'=> $this->input->post('phone'),
								   'email	'=> $this->input->post('email'));

				$cms_cond  		= 	array('contact_id'  => $cid,);
				$this->Admin_model->update_all($cms_data,$cms_cond,'contact');
				
				$this->session->set_flashdata('success', 'Contact Details Updated Successfully.'); 
				redirect(base_url().'admin/Contact/ViewContact');
				
			endif;
			$this->load->view('admin/edit_contactdetails', $data);
        }
		
		
		 public function  DeleteContact($cid)
	        { 
				$cond = array('contact_id' => $cid);
				$data['blog'] = $this->Admin_model->fetch_one_row('contact',$cond);
				
				
				$this->db->where('contact_id',$cid);
				$this->db->delete('contact');
				$this->session->set_flashdata('success', 'Contact Deleted Successfully.'); 
				redirect(base_url().'admin/Contact/ViewContact');
	        }



			public function DefaultContact($cid)

			{

				$update_cond_1 = array('default' => 1);

				$update_data_1 = array('default' => 0);

				$this->Admin_model->update_all($update_data_1,$update_cond_1,'contact');


				$update_cond_2 = array('contact_id' => $cid);
				
				$update_data_2 = array('default' => 1);

				$this->Admin_model->update_all($update_data_2,$update_cond_2,'contact');

				$this->session->set_flashdata('success', 'Default contact changed successfully'); 

				redirect(base_url().'admin/Contact/ViewContact');

			}
		
	
				
			    			
}