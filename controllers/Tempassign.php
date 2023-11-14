<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tempassign extends CI_Controller {
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
    $this->load->view('tempassign', $data);
}


    public function Yettoassign() {
        // Load the database library if it's not already loaded
        $this->load->database();
    
        // Call the stored procedure
        $query = $this->db->query("CALL TempAssignList()");
        $result = $query->result();
    
        // Encode the result as JSON and echo it
        echo json_encode($result);
    }

    public function getemployeeslist()
{
    // Load the database library if it's not already loaded
    $this->load->database();

    // Specify the table names
    $managerTable = 'manager';
    $teamleaderTable = 'team_leader';
    $telecallerTable = 'telecaller';

    // Construct the SQL query to retrieve data from the three tables
    $this->db->select('*');
    $this->db->from($managerTable);
    $managerQuery = $this->db->get();

    $this->db->select('*');
    $this->db->from($teamleaderTable);
    $teamleaderQuery = $this->db->get();

    $this->db->select('*');
    $this->db->from($telecallerTable);
    $telecallerQuery = $this->db->get();

    // Check if there are matching rows in each table
    if ($managerQuery->num_rows() > 0 && $teamleaderQuery->num_rows() > 0 && $telecallerQuery->num_rows() > 0) {
        // Convert the results to arrays
        $managerResult = $managerQuery->result_array();
        $teamleaderResult = $teamleaderQuery->result_array();
        $telecallerResult = $telecallerQuery->result_array();

        // Combine the results into a single array
        $combinedResult = array(
            'manager' => $managerResult,
            'team_leader' => $teamleaderResult,
            'telecaller' => $telecallerResult
        );

        // Encode the combined result as JSON and send it as the response
        echo json_encode($combinedResult);
    } else {
        // No matching rows found in one or more tables, return an empty array as JSON
        echo json_encode([]);
    }
}

public function updatebulkemployeelist()
{
    $checkedIds = $this->input->post('checkedIds');
    $selectedEmployee = $this->input->post('selectedemployee');
    
    // Define the tables to check for employee value matches
    $tablesToCheck = ['manager', 'team_leader', 'telecaller'];

    // Load the CodeIgniter database library
    $this->load->database();

    // Initialize a variable to track the success of updates
    $updateSuccess = true;
    $additionalColumns = [];
    $leadMasterColumns = [];
    foreach ($checkedIds as $leadId) {
        // Initialize a variable to keep track of which table matched
        $matchingTable = '';
    
        // Iterate through the tables to check for matches
        foreach ($tablesToCheck as $table) {
            // Use the CodeIgniter database query builder to build the query
            $query = $this->db->get_where($table, ['employee_value' => $selectedEmployee]);
    
            if ($query->num_rows() > 0) {
                // Employee value matched in this table
                $matchingTable = $table;
                break; // Exit the loop since we found a match
            }
        }
    
        if ($matchingTable !== '') {
            // Update the lead in the lead_master table based on the matching table
            
    
            // Retrieve additional columns based on the matching table
            if ($matchingTable === 'manager') {
                // Get additional columns from the 'manager' table
                $managerRow = $query->row();
                
                if (isset($managerRow->telecaller_id)) {
                    $leadMasterColumns['Telecaller'] = $managerRow->telecaller_id;
                }
                if (isset($managerRow->team_leader_id)) {
                    $leadMasterColumns['TeamLeader'] = $managerRow->team_leader_id;
                }
                if(isset($managerRow->manager_id)){
                    $leadMasterColumns['TeamManager'] = $managerRow->manager_id;
                }
            } elseif ($matchingTable === 'team_leader') {
                // Get additional columns from the 'team_leader' table
                $teamLeaderRow = $query->row();
                if (isset($teamLeaderRow->telecaller_id)) {
                    $leadMasterColumns['Telecaller'] = $teamLeaderRow->telecaller_id;
                }
                if (isset($teamLeaderRow->manager_id)) {
                    $leadMasterColumns['TeamManager'] = $teamLeaderRow->manager_id;
                }
                if(isset($teamLeaderRow->team_leader_id)){
                    $leadMasterColumns['TeamLeader'] = $teamLeaderRow->team_leader_id;
                }
            } elseif ($matchingTable === 'telecaller') {
                // Get additional columns from the 'telecaller' table
                $telecallerRow = $query->row();
                if (isset($telecallerRow->team_leader_id)) {
                    $leadMasterColumns['TeamLeader'] = $telecallerRow->team_leader_id;
                }
                if (isset($telecallerRow->manager_id)) {
                    $leadMasterColumns['TeamManager'] = $telecallerRow->manager_id;
                }
                if(isset($telecallerRow->telecaller_id)){
                    $leadMasterColumns['Telecaller'] = $telecallerRow->telecaller_id;
                }
            }

            // Update the lead_master table
            if (!empty($leadMasterColumns)) {
                $this->db->where('lead_id', $leadId);
                $updateResult = $this->db->update('lead_master', $leadMasterColumns);

                

                if (!$updateResult) {
                    // Update failed, set updateSuccess to false
                    $updateSuccess = false;
                }else{
                    $data = ['isassigned' => 1];
                    $this->db->where('lead_id', $leadId);
                    $updateResult2 = $this->db->update('lead_master', $data);
                }
            }
        } else {
            $updateSuccess = false;
        }
    }

    // Return a JSON-encoded response indicating success (1) or failure (0)
    echo json_encode(['status' => $updateSuccess ? 1 : 0]);
}




}