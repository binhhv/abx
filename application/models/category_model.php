<?php

	/**
	* 
	*/
	class Category_model extends CI_Model
	{

		 function __construct() 
		  {
		    /* Call the Model constructor */
		    parent::__construct();
		  }

		  function getListViewCategory(){
		  	$htmlCatgory = '';
		  	$query = $this->db->query("select * from categories where deleted = 0");
		  	foreach ($query->result() as $row) {
		  		$id = $row->id;
		  		$title = $row->title;
		  		$url = $row->url;
		  		$parentid = $row->parentid;
		  		$isparent = $row->isparent;
		  		$iscall = $row->iscall;
		  		$deleted = $row->deleted;

		  		if($isparent && $parentid == 0){
		  			$htmlCatgory .='<div class="row row-category"><div class="col-sm-12 col-md-12 col-xs-12"><h3>'.$title.'</h3></div>';
		  		}

		  		//$htmlCatgory .= $this->getChildCategory($id);

		  		$htmlCatgory .='</div>';
		  	}

		  	return $htmlCatgory;

		  }
		  function get($id){
		  	$query = $this->db->query("select * from categories where id = $id");
		  	return $query->row();
		  }
		  function getAll(){
		  	$query = $this->db->query("select * from categories");
		  	return $query->result();
		  }

		  /*function getChildCategory($id){
		  		$htmlCatgory ='';
		  		$htmlCatgory .= '<ul class="col-sm-3 col-xs-6 col-md-3">';
		  		$query = $this->db->query("select * from categories where parentid = $id and iscall = 0");
		  		foreach ($query->result() as $row) {
		  			$id = $row->id;
			  		$title = $row->title;
			  		$url = $row->url;
			  		$parentid = $row->parentid;
			  		$isparent = $row->isparent;
			  		$iscall = $row->iscall;
			  		$deleted = $row->deleted;

			  		if($isparent){
			  			$htmlCatgory .= '<li>' .$title ;
			  		}
			  		else{

			  		}
		  		}

		  }*/
	}
?>
