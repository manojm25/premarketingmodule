<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projectiondashboard extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
// Set cache control headers
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
$this->output->set_header('Pragma: no-cache');

if(!$this->session->userdata('uid'))
redirect('signin');
}
public function index() {
    $userfname = $this->session->userdata('fname');
    $accesslevel = $this->session->userdata('accesslevel');	
    $data = [
        'firstname' => $userfname,
        'accesslevel' => $accesslevel
    ];
    $this->load->view('projectiondashboard', $data);
}

public function getleadsinfoprojection()
    {
        $this->load->database();
    
        // Retrieve the filter parameters from the AJAX request
       
        $teamLeaderID=$this->input->get('teamLeaderID');
        $teamManagerID=$this->input->get('teamManagerID');
        $telecallerID = $this->input->get('telecallerID');
       
       
    
        // Assuming you have a database connection, you can execute the stored procedure
        $query = "CALL 	ProjectionDashboardCounts(?, ?, ?)";
        $stmt = $this->db->conn_id->prepare($query);
        $stmt->bind_param("iii", $telecallerID, $teamManagerID, $teamLeaderID);
        $stmt->execute();
    
        // Initialize an array to store the result sets
        $resultSets = [];
    
        // Loop through the result sets
        do {
            // Get the result set
            $result = $stmt->get_result();
    
            // If a result set is available, fetch it as an associative array
            if ($result !== false) {
                $resultSets[] = $result->fetch_all(MYSQLI_ASSOC);
                $result->free_result();
            }
        } while ($stmt->next_result());
    
        $stmt->close();
    
        // Return the filtered data as a JSON response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($resultSets));
    }

    public function getleadsdatefilterProjection() {
        // Load the database library
        $this->load->database();
    
        // Define your from and to dates
        $fromDate = $this->input->get('fromDate');
        $toDate = $this->input->get('toDate');
        $teamLeaderID = $this->input->get('teamLeaderID');
        $telecallerID = $this->input->get('telecallerID');
        $teamManagerID = $this->input->get('teamManagerID');
       
    
        
    
        // Prepare the SQL call statement with placeholders for the input parameters
        $sql = "CALL ProjectionDashboardCountsDateWise(?,?,?,?,?)";
    
        // Prepare and execute the stored procedure call
        $stmt = $this->db->conn_id->prepare($sql);
        $stmt->bind_param("sssss",$telecallerID,$teamManagerID,$teamLeaderID,$fromDate,$toDate);
        $stmt->execute();
    
        // Initialize an array to store the result sets
        $resultSets = [];
    
        // Fetch the results from the stored procedure
        do {
            $result = $stmt->get_result();
            if ($result !== false) {
                $resultSets[] = $result->fetch_all(MYSQLI_ASSOC);
                $result->free_result();
            }
        } while ($stmt->more_results() && $stmt->next_result());
    
        // Close the prepared statement
        $stmt->close();
    
        // Encode the resultSets in JSON
        $jsonResponse = json_encode($resultSets);
    
        // Set the content type to JSON and return the response
        $this->output
            ->set_content_type('application/json')
            ->set_output($jsonResponse);
    }
}