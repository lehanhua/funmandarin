<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->data['title'] = 'Fun Mandarin | News';
        $this->data['currPage'] = "News";
    }
    
    public function index(){
        $this->data['news'] = $this->news_model->get_news();

        $this->load->view('include/view_header', $this->data);
        $this->load->view('view_news');
        $this->load->view('include/view_footer', $this->data);
    }

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */