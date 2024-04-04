<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_model
{

    public function __construct()
	{ 

		parent::__construct();

	}



 public function get_profile_details($id)

	{

		$this->db->select('*');

        $this->db->from('admin');
		
        $this->db->where('adminId', $id);


	    $query = $this->db->get();


        return $query->result_array();


	}


	public function insertsection($table,$fields)

	{

	    $this->db->insert($table,$fields);

	    return ($this->db->insert_id());	

	}

	public function fetch_data_it($table,$fields,$primary)

		{
			$this->db->where($fields);
			$this->db->order_by($primary,'Asc');
			$query = $this->db->get($table);
			return $query->result();
		}  


	public function fetch_data($table,$fields)

    {

		$this->db->where($fields);

		$query = $this->db->get($table);
		
        return $query->result();

	}  

	public function fetch_data_by_desc($table,$fields,$id)

    {

		$this->db->where($fields);
		$this->db->order_by($id,"Desc");
		$query = $this->db->get($table);
		
        return $query->result();

	}  

		public function fetch_single_package($slug)

    {
    	$this->db->select("*");
		$this->db->from("package");
		$this->db->where("package_slug",$slug);
		$this->db->join("category","category.category_id = package.package_parent_id",'left');
		$query  = $this->db->get();
        $row    = $query->row_array();	
        return $row;


	}  
	
	public function fetch_all($table){
		$query = $this->db->get($table);		
	    return $query->result();
	} 

	public function getAll(){
		//$query = $this->db->get($table);		
	    //return $query->result();
		
		$this->db->from('entsglobal_banners');
		$this->db->order_by("ban_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 
	public function getAll_bystatus(){
		$this->db->from('entsglobal_banners');
		$this->db->where("ban_status", '1');
		$this->db->order_by("ban_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 
	
	public function getAll_Category(){		
		$this->db->from('entsglobal_category');
		$this->db->order_by("cat_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 

	public function getAll_by_Catstatus(){
		$this->db->from('entsglobal_category');
		$this->db->where("cat_status", '1');
		$this->db->order_by("cat_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 


	public function getAll_Package(){		
		$this->db->from('entsglobal_package');
		$this->db->order_by("package_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 

	public function getAll_by_Pacstatus(){
		$this->db->from('entsglobal_package');
		$this->db->where("package_status", '1');
		$this->db->order_by("package_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 



	public function update_all($fields,$cond,$table)

	{

		return $this->db->update($table, $fields, $cond);

	}

	public function fetch_one_row($table,$cond)

	{

		$this->db->select('*');

        $this->db->from($table);

        $this->db->where($cond);

        $query  = $this->db->get();

        $row    = $query->row_array();		

        return $row;


	}


	public function fetch_all_by_desc($table,$primary)
	{

		 $this->db->select('*');

		 $this->db->from($table);

		 $this->db->order_by($primary,'desc');

		 $query = $this->db->get();	

	     return $query->result();
	}  
	
	public function getAll_Industries(){		
		$this->db->from('entsglobal_industries');
		$this->db->order_by("industries_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 
	
	public function getAll_Industries_by_status(){		
		$this->db->from('entsglobal_industries');
		$this->db->where("industries_status", '1');
		$this->db->order_by("industries_order", "asc");
		$query = $this->db->get(); 
		return $query->result();
	} 


	public function fetch_all_featued($table)
	{

		 $this->db->select('*');

		 $this->db->from($table);
	     $this->db->where('featured',1);
		 $this->db->order_by('package_id','desc');

		 $query = $this->db->get();	

	     return $query->result();



	} 



    public function fetch_all_limit($table,$primary,$limit,$start)
	{

		$this->db->select('*');

		$this->db->from($table);

		$this->db->limit($limit,$start);

		$this->db->order_by($primary,'desc');

		$query = $this->db->get();	

		return $query->result();

    }	



				public function fetch_all_order($table,$primaryid,$order){
			
					$this->db->select('*');
					$this->db->from($table);
					$this->db->order_by($primaryid,$order);
					$query  = $this->db->get();
					return $query->result();
				
				}
				

				public function fetch_all_industries(){
			
					$this->db->select('*');
					$this->db->from('entsglobal_industries');
					$this->db->where("industries_status", '1');
					$this->db->order_by('industries_order','asc');
					$query  = $this->db->get();
					return $query->result();
				
				}
				



    public function fetch_all_order_cond($table,$field,$cond,$array)
	{

		//$this->db->order_by($field,$cond);

		$this->db->order_by("package_order", "asc");
		
		$this->db->where($array);

		$this->db->where("package_status", '1');
		$query  = $this->db->get($table);

		return $query->result();

	} 



	
	public function fetch_order_limit($table,$primaryid,$order,$limit){
			
			
		$this->db->select('*');
		$this->db->from($table);
		$this->db->limit($limit,0);
		$this->db->order_by($primaryid,$order);
		$query  = $this->db->get();
		if($limit>1)
		{
		return $query->result();
		}
		else
		{
		return $query->row_array();
		}

}




	public function fetch_single($table,$col,$id)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($col,$id);
			$query  = $this->db->get();
			$row    = $query->row_array();		
			return $row;
		}



		public function check_data($table,$col,$data)
		{
		
			$this->db->select('*');

			$this->db->from($table);

			$this->db->where($col,$data);

			$query = $this->db->get();

			return $query->row_array(); 

		}

	


	
	public function get_subcat($getsubcat)
	{
	 $array = array('subcat_parent_id' => $getsubcat);
	 $this->db->select('*');
		$this->db->from('subcat');
		$this->db->where($array);
		$query  = $this->db->get();
		return $query->result();
	  //return $query->num_rows();
	}
	
	public function fetch_category()
	{
	
	  $this->db->select('*');

			$this->db->from('category');
			
			$this->db->order_by('category.category_id','desc');
			
			//$this->db->where($cond);
			
			$query= $this->db->get();
		   
			$return_list = $query->result();
			
			
			$i=0;
			
			foreach($return_list as $category)
			{
			$cond_user = array('subcat_parent_id' => $category->category_id);
			
			$return_list[$i]->sub_category = $this->fetch_data('subcat',$cond_user);
			
			$i++;	
				
			}
			
			return $return_list;
	
	}



	public function fetch_all_services()

	{

		$this->db->select('*');

		$this->db->from('category');

		$this->db->order_by('cat_order','asc');
		$this->db->where("cat_status", '1');

		$query = $this->db->get();

		$return = $query->result();

		$i=0;

		foreach($return as $service)
		{

			$return[$i]->subservice = $this->fetch_sub_services($service->category_id);

		 $i++;

		}

		return $return;

		
	}



	public function fetch_sub_services($id)

	{

	$this->db->select('*');

	$this->db->from('package');

	$this->db->where('package_parent_id',$id);

	$this->db->where("package_status", '1');
	$this->db->order_by('package_order','asc');

	$query = $this->db->get();

	return $query->result();

	}




	public function fetch_blogs_paginate($rowno,$rowperpage,$pagination)
	{

		$this->db->select('*');

		$this->db->from('blog');

		$this->db->order_by('cdate','desc');

		if($pagination==FALSE)

		{

			$this->db->limit($rowperpage,$rowno);

		}

		$query = $this->db->get();

	 $result = $query->result();

		$pagination_count = count($result);


		if($pagination==FALSE)

		{

		return $result;

		}

		else
		{

			return $pagination_count;

		}


	}




	public function fetch_related_blogs($id)
	{

	$this->db->select('*');

	$this->db->from('blog');

	$this->db->where_not_in('blog_id',array($id));

	$this->db->order_by('cdate','desc');

	$this->db->limit(3,0);

	$result = $this->db->get(); 

	return $result->result();


	}




	




  

}