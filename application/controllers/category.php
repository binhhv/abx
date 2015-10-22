<?php 
class Category extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('category_model','category');
    }

    public function index(){
    	 $data['subview'] = 'common/category';
          $data['title'] = 'Danh mục sản phẩm';
          $data['listCategory'] = $this->category->getListViewCategory();
        $this->load->view('common/layout-common', $data);
    }

	}
?>