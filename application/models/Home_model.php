<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends MY_Model {

	
	public function all_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function featured()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->order_by('product_id','RANDOM');
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function slider()
	{
		$this->db->select('*');
		$this->db->from('slider');
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function brand()
	{
		$this->db->select('*');
		$this->db->from('brand');
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function newarrivals()
	{
		$teg = "new";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('teg',$teg);
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function get_filter_category($category)
	{
		$this->db->select('*');
		$this->db->where('category_id',$category);
		$this->db->from('category');
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->row();
	}
	public function get_filter_subcategory($category)
	{
		$this->db->select('*');
		$this->db->from('subcategory');
		$this->db->where('category_id',$category);
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function get_filter_product($category)
	{
		$this->db->select('*');
		$this->db->where('category_id',$category);
		$this->db->from('product');
		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query->result();
	}
	public function getAllProduct()
	{
		$this->db->select('SQL_CALC_FOUND_ROWS null as rows,LEFT(product.name,25) as name,LEFT(product.description,30) as description,product.product_image,product.price',false);
		$this->db->from('product');
		$pageSize = $this->input->post('pageSize');
        $pageIndex = $this->input->post('pageIndex');
        $offsetRange = $pageSize*($pageIndex-1);       
      
        $this->db->limit($this->input->post('pageSize'),$offsetRange);
		$query = $this->db->get();
		//echo $this->db->last_query();
		if ($query->num_rows() > 0) {
			$allCount = $this->db->query('SELECT FOUND_ROWS() count;')->row()->count;
			$result = $query->result();
			return json_encode(array('status'=>1,'data'=>$result,'total'=>$allCount));
		}
	}

	
}
