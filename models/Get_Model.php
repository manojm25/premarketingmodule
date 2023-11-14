<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

//   1. For getting dropdown values for new lead form
public function getLeadSource() {
    // Specify the table name
    $table_name = 'lead_source'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getSinglemicrosource()
{
    // Specify the table name
    $table_name = 'lead_micro_source'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}
// 2. getting drodown lead micro source based on lead source
    public function getLeadMicrosource($leadSourceValue)
   {
    try {
        // Create a prepared statement
        $stmt = $this->db->conn_id->prepare("CALL GetLeadMicroSource(?)");

        // Bind the parameter
        $stmt->bind_param("s", $leadSourceValue);

        // Execute the stored procedure
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Fetch the rows as an array
        $resultArray = $result->fetch_all(MYSQLI_ASSOC);

        // Close the statement
        $stmt->close();

        return $resultArray;
    } catch (Exception $e) {
        $statuscode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
      return ['statuscode' => $statuscode];
    }
}

public function getLeadstatus()
{
     // Specify the table name
     $table_name = 'lead_status'; // Replace with your actual table name

     // Retrieve all records from the table
     $query = $this->db->get($table_name);
     return $query->result();
}

public function getTeammanager()
{
      // Specify the table name
      $table_name = 'manager'; // Replace with your actual table name

      // Retrieve all records from the table
      $query = $this->db->get($table_name);
      return $query->result();
}

public function getTeamleader()
{
    // Specify the table name
    $table_name = 'team_leader'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getTeleCaller()
{
     // Specify the table name
     $table_name = 'telecaller'; // Replace with your actual table name

     // Retrieve all records from the table
     $query = $this->db->get($table_name);
     return $query->result();
}

public function getMoa()
{
    // Specify the table name
    $table_name = 'moa'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getUniversities()
{
     // Specify the table name
     $table_name = 'universities'; // Replace with your actual table name

     // Retrieve all records from the table
     $query = $this->db->get($table_name);
     return $query->result();
}

public function getCourselist()
{
    // Specify the table name
    $table_name = 'course'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getCollectiontypelist()
{
      // Specify the table name
      $table_name = 'collection_type'; // Replace with your actual table name

      // Retrieve all records from the table
      $query = $this->db->get($table_name);
      return $query->result();
}

public function getSubcollectionlist()
{
    // Specify the table name
    $table_name = 'sub_collection'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getVendorlist()
{
     // Specify the table name
     $table_name = 'vendor'; // Replace with your actual table name

     // Retrieve all records from the table
     $query = $this->db->get($table_name);
     return $query->result();
}

public function getPaymentmodelist()
{
    
     // Specify the table name
     $table_name = 'payment_mode'; // Replace with your actual table name

     // Retrieve all records from the table
     $query = $this->db->get($table_name);
     return $query->result();
}
public function getBanklist()
{
     // Specify the table name
     $table_name = 'bank_list'; // Replace with your actual table name

     // Retrieve all records from the table
     $query = $this->db->get($table_name);
     return $query->result();
}

public function getReferencedBy()
{
    $this->db->select('FirstName, id');

        // Define the WHERE condition
        $this->db->where('category_id', 1);

        // Set the table name
        $this->db->from('tblusers');

        // Execute the query and get the result
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // Data found, return the results as an array
            $result = $query->result_array();
            return $result;
        } else {
            // No data found
            echo 'No data found';
        }
}

public function getJobs()
{
    // Specify the table name
    $table_name = 'job_table'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getInterviewStatus(){
    // Specify the table name
    $table_name = 'interviewstatus'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}

public function getModeofSalary(){
    // Specify the table name
    $table_name = 'modeofsalary'; // Replace with your actual table name

    // Retrieve all records from the table
    $query = $this->db->get($table_name);
    return $query->result();
}


public function getTemaleaderdropdown($managervalue)
{
        // Define the WHERE condition
        $this->db->where('manager_id', $managervalue);

        // Set the table name
        $this->db->from('team_leader');

        // Execute the query and get the result
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // Data found, return the results as an array
            $result = $query->result_array();
            return $result;
        } else {
            // No data found
            echo 'No data found';
        }
}


public function getEmployeelistdropdwon($managervalue, $teamleader)
{
    // Define the WHERE condition for isjoined
    $this->db->where('isjoined', 1);

    // Set the table name and select columns
    $this->db->from('tblusers');
    $this->db->select('tblusers.FirstName, tblusers.joiningdate, job_table.job_name , tblusers.id');
    $this->db->join('job_table', 'job_table.job_id = tblusers.jobposition', 'left');

    // Check if $managervalue is not equal to 0
    if ($managervalue != 0) {
        // Add a WHERE condition to filter by TeamManager
        $this->db->where('tblusers.TeamManger', $managervalue);
    }
    if($managervalue != 0 && $teamleader != 0){
        $this->db->where("(tblusers.TeamManger = $managervalue AND tblusers.TeamLeader = $teamleader)");
    }

    // Execute the query and get the result
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        // Data found, return the results as an array
        $result = $query->result_array();
        return $result;
    } else {
        // No data found
        echo 'No data found';
    }
}




    
}
