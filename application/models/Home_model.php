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

	
}
