<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procedure_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    // For Lead dashboard counts with filters

    public function getleadsinfo($teamLeaderID,$teamManagerID,$telecallerID){
        try {
            $query = "CALL GetFilteredLeadCounts(?, ?, ?)";
            $stmt = $this->db->conn_id->prepare($query);
            $stmt->bind_param("iii", $teamManagerID, $teamLeaderID, $telecallerID);
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
            return $resultSets;
        } catch (Exception $e) {
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }


    }

    // For Lead dashboard counts with filters and also with from and to dates
    public function getleadsdatefilter($fromDate,$toDate,$teamManagerID,$teamLeaderID,$telecallerID)
    {
        try{
            $sql = "CALL GetFilteredLeadCountsDateWise(?,?,?,?,?)";

            // Prepare and execute the stored procedure call
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->bind_param("sssss",$fromDate,$toDate,$teamManagerID,$teamLeaderID,$telecallerID);
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
            return $resultSets;
        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    // for projection list page table to load calling the procedure
    public function TempProjectionRecords(){

        // Call the stored procedure
        $query = $this->db->query("CALL ProjectionList()");
        $result = $query->result();

        return $result;
    }

    // Projection list with all filters calling via procedure
    public function TempProjectionLeadfilterlist($modofadmission,$statusofdropdown,$universitieslist,$sourcelist,$courselist,$isprojection,$peridvalue)
    {
        try{
            $peridvalue = is_array($peridvalue) ? implode(',', $peridvalue) : $peridvalue;
            $sql = "CALL ProjectionFilteredList(?, ?, ?, ?, ?,?,?)";



            // Execute the stored procedure using Query Builder
            $result = $this->db->query($sql, array($modofadmission,$universitieslist,$courselist,$statusofdropdown,$sourcelist,$isprojection,$peridvalue));

            // print_r(array($teamleader, $telecaller, $leadstatus, $teammanager, $leadoveralstatus, $teamlist));

            // Convert the results to an array
            $filteredData = $result->result_array();



            return $filteredData;

        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function Updateprojectionlist($collectionType,$subCollectionType,$paymentsModes,$bankList,$Upireference,$Vendorlist,$ScreenshotLink,$CertificateLink,$RulesLink,$BasicDetails,$phtotstudent,$projectionId,$fees,$paidfeess,$pendingfees,$photoname)
    {
        try{
            if (
                $collectionType !== null && $collectionType != "" &&
                $subCollectionType !== null &&  $subCollectionType != "" &&
                $paymentsModes !== null && $paymentsModes != "" &&
                $bankList !== null && $bankList != "" &&
                $Upireference !== null && $Upireference != "" &&
                $Vendorlist !== null && $Vendorlist != ""  &&
                $ScreenshotLink !== null && $ScreenshotLink != "" &&
                $CertificateLink !== null && $CertificateLink != "" &&
                $RulesLink !== null && $RulesLink != "" &&
                $BasicDetails !== null && $BasicDetails != "" &&
                $phtotstudent !== null && $phtotstudent != "" &&
                $fees !== null && $fees != "" &&
                $paidfeess !== null && $paidfeess != "" &&
                $pendingfees !== null && $pendingfees != ""
            ) {
                // Conditions are met, update the isconverted column in lead_master
                // Get the lead_id based on the projection_id
                $this->db->where('projection_id', $projectionId);
                $query = $this->db->get('projection_master');
                $result = $query->row();

                if ($result) {
                    $leadId = $result->lead_id;
                    $this->db->where('lead_id', $leadId);
                    $this->db->update('lead_master', array('isconverted' => 1));
                    $dbError = $this->db->error();

                    if ($dbError['code'] === 0) {
                        // Update was successful
                        return true;
                    } else {
                        // Update failed, and you can check the error message
                        return false;
                    }
                }
            }else{
                $this->db->where('projection_id', $projectionId);
                $query = $this->db->get('projection_master');
                $result = $query->row();

                if ($result) {
                    $leadId = $result->lead_id;
                    $this->db->where('lead_id', $leadId);
                    $this->db->update('lead_master', array('isconverted' => 0));
                    $dbError = $this->db->error();

                    if ($dbError['code'] === 0) {
                        // Update was successful
                        return true;
                    } else {
                        // Update failed, and you can check the error message
                        return false;
                    }
                }
            }
        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function updateArrayforprojectionlist($updateData,$projectionId)
    {
        try{
            $this->db->where('projection_id', $projectionId);
            $this->db->update('projection_master', $updateData);
            return $this->db->affected_rows() > 0;
        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function getLeadsourcecounts()
    {
        try {
            $sql = "CALL Leadcountss()"; // Assuming the stored procedure takes no parameters

            // Prepare and execute the stored procedure call
            $stmt = $this->db->conn_id->prepare($sql);
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

            // Return the result sets
            return $resultSets;

        } catch (Exception $e) {
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function getdatewiseleadsourcecounts($fromdate,$todate)
    {
        try {

            $sql = "CALL LeadcountssDatewise(?, ?)";

            // Prepare and execute the stored procedure call with parameters
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->bind_param("ss", $fromdate, $todate); // Assuming both parameters are strings; adjust as needed
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

            // Return the result sets
            return $resultSets;

        } catch (Exception $e) {
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function getcollectiondata()
    {
        try{
            $sql = "CALL CalculateCollection()"; // Assuming the stored procedure takes no parameters

            // Prepare and execute the stored procedure call
            $stmt = $this->db->conn_id->prepare($sql);
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

            // Return the result sets
            return $resultSets;
        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function getfilteredcollectiondata($teamLeaderID,$teamManagerID,$telecallerID,$paymentID,$VendorID)
    {
        try {
            $query = "CALL CalculateFilteredCollection(?, ?, ?,?,?)";
            $stmt = $this->db->conn_id->prepare($query);
            $stmt->bind_param("iiiii", $teamLeaderID, $teamManagerID, $telecallerID,$paymentID,$VendorID);
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
            return $resultSets;
        } catch (Exception $e) {
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }


    public function datewisefiltercollection($fromDate,$toDate,$teamManagerID,$teamLeaderID,$telecallerID,$paymentmodeID,$vendormodeID)
    {
        try{
            $sql = "CALL CalculateCollectionDateWise(?,?,?,?,?,?,?)";

            // Prepare and execute the stored procedure call
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->bind_param("sssssss",$fromDate,$toDate,$paymentmodeID,$vendormodeID,$teamManagerID,$teamLeaderID,$telecallerID);
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
            return $resultSets;
        }catch(Exception $e){
            $errorCode = PROCEDURE_ERROR;
            // Now you can use $errorCode and $errorMessage as needed
            return ['statuscode' => $errorCode];
        }
    }

    public function getIncollectionCounts($ismanagerids,$isteamleaderids,$istelecallerids,$vendorids,$paymentids,$collectionshow)
    {
        $ismanagerids = implode(',', $ismanagerids);
        $isteamleaderids = implode(',', $isteamleaderids);
        $istelecallerids = implode(',', $istelecallerids);
        $vendorids = implode(',',$vendorids);
        $paymentids = implode(',',$paymentids);

        $sql = "CALL Incollectionlistcounts(?, ?, ?,?,?,?)";

        $stmt = $this->db->conn_id->prepare($sql);
        $stmt->bind_param("ssssss",$ismanagerids,$isteamleaderids,$istelecallerids,$paymentids,$vendorids,$collectionshow);
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

        return $resultSets;
    }



}
