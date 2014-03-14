<?php if (!defined('BASEPATH')) die();
class Metro extends CI_Controller {
   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('welcome-metro');
      $this->load->view('include/footer');
	}
}
/* End of file front.php */
/* Location: ./application/controllers/front.php */
