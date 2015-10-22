<?php
 
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
         $this->load->helper('url');
    }
     
    public function index(){
         $data['subview'] = 'common/index';
          $data['title'] = 'Home';
        $this->load->view('common/layout-common', $data);
    }
}
?>