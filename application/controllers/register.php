<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = "Fun Mandarin | Register";
        $this->data['currPage'] = "Register";
    }
    
    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        //form validation rules here
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('include/view_header', $this->data);
            $this->load->view('view_register');
            $this->load->view('include/view_footer');
        } else {
            //store to DB

            //show success page
            echo "submitted successfully";
        }
    }    
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */