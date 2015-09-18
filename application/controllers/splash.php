<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Splash extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->data['title'] = 'Fun Mandarin | Best place to learn Chinese in the Bay Area!';
        $this->data['currPage'] = "Splash";
    }
    
    public function index(){
        
        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_splash');
        $this->load->view('include/view_footer', $this->data);
    }
    
}

/* End of file splash.php */
/* Location: ./application/controllers/splash.php */