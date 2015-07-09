<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class About extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = 'Fun Mandarin | About Us';
        $this->data['currPage'] = "About";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_about');
        $this->load->view('include/view_footer');
    }
    
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */