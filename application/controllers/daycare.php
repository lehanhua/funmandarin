<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Daycare extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = "Fun Mandarin | Daycare";
        $this->data['currPage'] = "Daycare";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_daycare');
        $this->load->view('include/view_footer', $this->data);
    }
    
}

/* End of file daycare.php */
/* Location: ./application/controllers/daycare.php */