<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

//    Inserting lead data from the new lead into **lead_master** table
   public function insertLeadData($data)
   {
        $this->db->insert('lead_master', $data);
        return $this->db->affected_rows() > 0;
   }

   public function postCandidate($upload_path,$data)
   {
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'pdf|doc|docx';
        
       
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('pdf_file')) {
            return 0;
        } else {
            $datas = $this->upload->data();
            $config['file_name'] = $data['FirstName'] . '_' . date('YmdHis');
            $file_path = $upload_path.$datas['file_name'];
            $data['filePath'] = $file_path;
            $data['isresumeupload'] = true;
            $this->db->insert('tblusers', $data);
            return $this->db->affected_rows() > 0;
        }    
   }

   //    For Inserting Excel data to the lead_master table

   public function temppostdataintotable($column_mapping,$headers,$table_name,$data_array)
   {
        try{

            if ($table_name === 'attendancelog') {
                // Assuming the employee IDs are stored as a comma-separated string
                $employeeIdString = $data_array[1][array_search('employee_id', $headers)];

                // Split the comma-separated string into an array of employee IDs
                $employeeIds = explode(',', $employeeIdString);

                for ($i = 1; $i < count($data_array); $i += 2) {
                    $row = $data_array[$i]; // Get the data row
                    $employeeId = (int) $row[array_search('employee_id', $headers)]; // Cast to integer

                    if (!in_array($employeeId, $employeeIds)) {
                        // Employee ID not found in the provided list, return 3
                        return 3;
                    }
                }
            }



                    $this->db->trans_start();
                    $this->db->trans_strict(false);

                    if($table_name == "attendancelog")
                    {
                        for ($i = 1; $i < count($data_array); $i++) { // Start the loop from the second row
                            $row = $data_array[$i]; // Get the data row
                            $lead_data = array();

                            // Map JSON data to table columns based on the column_mapping array
                            foreach ($headers as $index => $header) {
                                if (isset($column_mapping[$header])) {
                                    $column_name = $column_mapping[$header];
                                    $lead_data[$column_name] = $row[$index];
                                }
                            }
                            // Check if a record with the same employee_id and logdate exists
                            $employeeId = $lead_data['employee_id'];
                            $logdate = $lead_data['logdate'];

                            $existingRecord = $this->db->get_where($table_name, ['employee_id' => $employeeId, 'logdate' => $logdate])->row();
                            if ($existingRecord) {
                                // Remove the existing record
                                $this->db->delete($table_name, ['employee_id' => $employeeId, 'logdate' => $logdate]);
                            }

                            // Insert each row into the table
                            if (!empty($lead_data)) {
                                $this->db->insert($table_name, $lead_data);

                            }
                        }

                    }else if($table_name == "tblusers") {

                        foreach (array_slice($data_array, 1) as $row) {
                            $lead_data = array();

                            // Map JSON data to table columns based on the column_mapping array
                            foreach ($headers as $index => $header) {
                                if (isset($column_mapping[$header])) {
                                    $column_name = $column_mapping[$header];
                                    $lead_data[$column_name] = $row[$index];
                                }
                            }




                            // Insert each row into the lead_master table
                            if (!empty($lead_data)) {
                                $this->db->insert($table_name, $lead_data);
                                $insertedUserIds[] = $this->db->insert_id();
                            }
                        }




                    }
                        else{
                        foreach ($data_array as $row) {
                            $lead_data = array();

                            // Map JSON data to table columns based on the column_mapping array
                            foreach ($headers as $index => $header) {
                                if (isset($column_mapping[$header])) {
                                    $column_name = $column_mapping[$header];
                                    $lead_data[$column_name] = $row[$index];
                                }
                            }

                            // Insert each row into the lead_master table
                            if (!empty($lead_data)) {
                                $this->db->insert($table_name, $lead_data);


                            }
                        }
                    }
        

                    // Commit the batch insert
                    $this->db->trans_complete();
        
                    if ($this->db->trans_status() === false) {
                        return false;
                    } else {
                        if($table_name == "tblusers")
                        {
                            if (!empty($insertedUserIds)) {
                                $this->db->where_in('id', $insertedUserIds);
                                $this->db->update('tblusers', ['isjoined' => 1]);
                            }
                        }

                        return true;
                    }
                
        
        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
   }
    
}
