<?php
require APPPATH.'/libraries/REST_Controller.php';
 
class Bom_api extends REST_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('category_model','category');
    }
 function category_get()
    {
    	if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }
 
        $category = $this->category->get( $this->get('id') );
         
        if($category)
        {
            $this->response($category, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
     
     function categories_get()
    {
        $categories = $this->category->getAll();
         
        if($categories)
        {
            $this->response($categories, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
   
}