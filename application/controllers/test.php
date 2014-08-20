<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = 'test page';
        $this->data['currPage'] = "test";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_test');
        $this->load->view('include/view_footer');
    }
    
}