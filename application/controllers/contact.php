<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = 'Fun Mandarin | Contact';
        $this->data['currPage'] = "Contact";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_contact');
        $this->load->view('include/view_footer', $this->data);
    }
    
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */