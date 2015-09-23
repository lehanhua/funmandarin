<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = "Fun Mandarin | Register";
        $this->data['currPage'] = "Register";
        $this->data['jsFile'] = "register.js";
    }
    
    public function index() {
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_register');
        $this->load->view('include/view_footer', $this->data);
    }

    //temporary function to handle the registration process
    public function classes($classId){
        echo "class".$classId;
    }
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */