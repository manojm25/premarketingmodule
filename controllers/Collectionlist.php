<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Collectionlist extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
// Set cache control headers
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
$this->output->set_header('Pragma: no-cache');
if(!$this->session->userdata('uid')){
    redirect('signin');
    }

}
public function index() {
    $userfname = $this->session->userdata('fname');
    $accesslevel = $this->session->userdata('accesslevel');	
    $data = [
        'firstname' => $userfname,
        'accesslevel' => $accesslevel
    ];
    $this->load->view('collectionlist', $data);
}
public function getCollectionlist(){
     // Load the database library if it's not already loaded
     $this->load->database();

 

        $personids = $this->input->get('personids');
        $venddids = $this->input->get('venddids');
        $payssids = $this->input->get('payssids');

        $personids = implode(',', $personids);
        $venddids = implode(',', $venddids);
        $payssids = implode(',', $payssids);
      
        $sql = "CALL collection_list2(?,?,?)";


        $result = $this->db->query($sql, array($personids, $payssids, $venddids));

    
        // Convert the results to an array
        $filteredData = $result->result_array();
    
        // Return the filtered data as a JSON response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($filteredData));
}
}