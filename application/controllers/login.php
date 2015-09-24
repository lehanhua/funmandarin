<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = "Fun Mandarin | Login";
        $this->data['currPage'] = "Login";
    }
    
     public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_login');
        $this->load->view('include/view_footer', $this->data);
    }   
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */