<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Errors extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
// Set cache control headers
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
$this->output->set_header('Pragma: no-cache');
}

public function index() {
  
    $this->load->view('custom404page');
}

}
