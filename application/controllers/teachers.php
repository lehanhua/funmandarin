<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Teachers extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = "Fun Mandarin | Teachers";
        $this->data['currPage'] = "Teachers";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_teachers');
        $this->load->view('include/view_footer');
    }
    
}

/* End of file teachers.php */
/* Location: ./application/controllers/teachers.php */