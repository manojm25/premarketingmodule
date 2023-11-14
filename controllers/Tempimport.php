<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tempimport extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
// Set cache control headers
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
$this->output->set_header('Pragma: no-cache');
if (!$this->session->userdata('uid') || $this->session->userdata('accesslevel') !== '1') {
    redirect('tempdashboard');
}
}

public function index() {
    $userfname = $this->session->userdata('fname');
    $accesslevel = $this->session->userdata('accesslevel');	
    $data = [
        'firstname' => $userfname,
        'accesslevel' => $accesslevel
    ];
    $this->load->view('tempimport', $data);
}

}