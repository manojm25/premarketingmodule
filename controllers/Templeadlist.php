<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Templeadlist extends CI_Controller {
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
    $this->load->view('templeadlist', $data);
}


    public function TempRecords() {
        // Load the database library if it's not already loaded
        $this->load->database();
    
        // Call the stored procedure
        $query = $this->db->query("CALL Templeadlist()");
        $result = $query->result();
    
        // Encode the result as JSON and echo it
        echo json_encode($result);
    }

    public function TempLeadfilterlist() {
        $this->load->database();
        // Retrieve the filter parameters from the AJAX request
        $teamleader = $this->input->get('teamleader');
        $telecaller = $this->input->get('telecaller');
        $leadstatus = $this->input->get('leadstatus');
        $teammanager = $this->input->get('teammanager');
        $isassigned = $this->input->get('isassigned');
        $isconverted =$this->input->get('isconverted');
        $hiddenleadsource= $this->input->get('hiddenleadsource');
        $hiddenMicroleadsource = $this->input->get('hiddenMicroleadsource');

        $hiddenleadsource = is_array($hiddenleadsource) ? implode(',', $hiddenleadsource) : '';
        $hiddenMicroleadsource = is_array($hiddenMicroleadsource) ? implode(',', $hiddenMicroleadsource) : '';

        $teamleader = is_array($teamleader) ? implode(',', $teamleader) : $teamleader;
        $telecaller = is_array($telecaller) ? implode(',', $telecaller) : $telecaller;
        $teammanager = is_array($teammanager) ? implode(',', $teammanager) : $teammanager;



        
        $sql = "CALL Templist2Filter(?, ?, ?, ?, ?, ?,?,?,?,?,?)";


       $result = $this->db->query($sql, array(0, $leadstatus, 0, $teammanager, $teamleader, $telecaller, 0, $isassigned, $isconverted, $hiddenleadsource,$hiddenMicroleadsource));

    
        // Convert the results to an array
        $filteredData = $result->result_array();
    
        // Return the filtered data as a JSON response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($filteredData));
    }

    public function TempUpdatelist()
    {
        $this->load->database();
    
        // Get the values from the FormData
        $leadId = $_POST['leadID'];
        $ContactNo = $_POST['contactno'];
        $EmailAddress = $_POST['emailaddress'];
        $Followupdate = $_POST['followupdate'];
        $Leadmicrocourse =$_POST['leadmicrosource'];
        $Leadname =$_POST['leadname'];
        $Leadsource =$_POST['leadsource'];
        $Leadstatus =$_POST['leadstatus'];
        $Locationname =$_POST['locationname'];
        $Notes =$_POST['notes'];
        $Teamleader=$_POST['teamleader'];
        $Teammanager=$_POST['teammanager'];
        $Telecaller=$_POST['telecaller'];
        $Isassigned= $_POST['isassigned'];
        
        
    
        // Define an associative array to map the POST values to database columns
        $updateData = array(
            'TeamLeader' => $Teamleader,
            'TeamManager' => $Teammanager,
            'Telecaller' => $Telecaller,
            'FollowUpDate' => $Followupdate,
            'Notes' => $Notes,
            'ContactNo' => $ContactNo,
            'EmailAddress' => $EmailAddress,
            'LeadMicroSource' => $Leadmicrocourse,
            'LeadName' => $Leadname,
            'LeadSource' => $Leadsource,
            'LeadStatus' => $Leadstatus,
            'Location' => $Locationname,
            'isassigned'=>$Isassigned
        );
    
        // Update the lead_master table with the provided values
        $this->db->where('lead_id', $leadId);
        $this->db->update('lead_master', $updateData);
    
        // Check if the update was successful
        if ($this->db->affected_rows() > 0) {
            $response = array('success' => true, 'message' => '1');
        } else {
            $response = array('success' => false, 'message' => 'Lead update failed');
        }
    
        // Return the JSON response
        echo json_encode($response);
    }
}