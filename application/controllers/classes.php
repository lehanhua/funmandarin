<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Classes extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = "Fun Mandarin | Classes";
        $this->data['currPage'] = "Classes";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_classes');
        $this->load->view('include/view_footer');
    }
    
}