<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Update_Model");
        $this->load->model("Insert_Model");
        $this->load->model("Get_Model");
        $this->load->model("Procedure_Model");


        // Load the model
    }

    private function getErrorMessage($statuscode)
    {
        // Get the error messages array from the constant
        $messages = ERROR_MESSAGES;

        // Check if the status code exists in the messages array
        if (array_key_exists($statuscode, $messages)) {
            return $messages[$statuscode];
        } else {
            return "No error status code found";
        }
    }

    //************************************ */ 1. New Lead page API'S *************************************************

    //***** Inserting lead post data from the new lead ******
    public function insert_leadpost_data()
    {
        if ($this->input->server("REQUEST_METHOD") === "POST") {
            $leadname = $this->input->post("leadname");
            $locationname = $this->input->post("locationname");
            $contactno = $this->input->post("contactno");
            $emailaddress = $this->input->post("emailaddress");
            $leadsource = $this->input->post("leadsource");
            $followupdate = date(
                "Y-m-d",
                strtotime($this->input->post("followupdate"))
            ); // Convert date format
            $leadmicrosource = $this->input->post("leadmicrosource");
            $leadstatus = $this->input->post("leadstatus");
            $teammanager = $this->input->post("teammanager");
            $teamleader = $this->input->post("teamleader");
            $telecaller = $this->input->post("telecaller");
            $notes = $this->input->post("notes");
            $leadtype = $this->input->post("leadtype");

            // Create an array of data to be inserted into the database
            $data = [
                "LeadName" => $leadname,
                "Location" => $locationname,
                "ContactNo" => $contactno,
                "EmailAddress" => $emailaddress,
                "LeadSource" => $leadsource,
                "LeadStatus" => $leadstatus,
                "LeadMicroSource" => $leadmicrosource,
                "TeamManager" => $teammanager,
                "TeamLeader" => $teamleader,
                "Telecaller" => $telecaller,
                "FollowUpDate" => $followupdate,
                "LeadType" => $leadtype,
                "Notes" => $notes,
            ];

            // Call the model to insert data into the database
            $inserted = $this->Insert_Model->insertLeadData($data);

            if ($inserted) {
                // Insertion was successful
                $statuscode = SUCCESS_INSERT;
                $message = $this->getErrorMessage($statuscode);
            } else {
                // Insertion failed
                $statuscode = ERROR_INSERT;

                $message = $this->getErrorMessage($statuscode);
            }
        } else {
            // Invalid request method
            $statuscode = ERROR_INVALID_REQUEST;
            $message = $this->getErrorMessage($statuscode);
        }

        // Create a response array
        $response = ["statuscode" => $statuscode, "message" => $message];

        // Encode the response as JSON and echo it
        echo json_encode($response);
    }

    //************ loading dropdown for new lead form ***************
    // 1.loading lead source
    public function getLeadsource()
    {
        $leadSourceData = $this->Get_Model->getLeadSource();

        // Encode the result as JSON and echo it
        echo json_encode($leadSourceData);
    }
    public function getSinglemicrosource()
    {
        $result = $this->Get_Model->getSinglemicrosource();

        // Encode the result as JSON and echo it
        echo json_encode($result);
    }

    // 2. loading lead micro source based on lead source id
    public function getLeadmicrosource()
    {
        $leadssourcevalue = $this->input->post("leadsourcevalue");

        $result = $this->Get_Model->getLeadMicrosource($leadssourcevalue);
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }

        echo json_encode($response);
    }

    // 3. loading lead status for new lead form
    public function getLeadstatus()
    {
        $leadStatusData = $this->Get_Model->getLeadstatus();

        // Encode the result as JSON and echo it
        echo json_encode($leadStatusData);
    }
    // 4. loading team manager list
    public function getTeammanager()
    {
        $Teammanagerlist = $this->Get_Model->getTeammanager();

        // Encode the result as JSON and echo it
        echo json_encode($Teammanagerlist);
    }
    public function getTeamleader()
    {
        $TeamLeaderlist = $this->Get_Model->getTeamleader();
        echo json_encode($TeamLeaderlist);
    }

    public function getTeleCaller()
    {
        $Telecallerlist = $this->Get_Model->getTeleCaller();
        echo json_encode($Telecallerlist);
    }

    //************************************ */ 1. New Lead page API'S *************************************************

    //************************************ */ 2. Leads dashboard API'S *************************************************

    public function getleadsinfo()
    {
        $teamLeaderID = $this->input->get("teamLeaderID");
        $telecallerID = $this->input->get("telecallerID");
        $teamManagerID = $this->input->get("teamManagerID");

        $result = $this->Procedure_Model->getleadsinfo(
            $teamLeaderID,
            $teamManagerID,
            $telecallerID
        );
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }

        echo json_encode($response);
    }

    public function getleadsdatefilter()
    {
        $fromDate = $this->input->get("fromDate");
        $toDate = $this->input->get("toDate");
        $teamLeaderID = $this->input->get("teamLeaderID");
        $telecallerID = $this->input->get("telecallerID");
        $teamManagerID = $this->input->get("teamManagerID");

        $result = $this->Procedure_Model->getleadsdatefilter(
            $fromDate,
            $toDate,
            $teamManagerID,
            $teamLeaderID,
            $telecallerID
        );
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }

        echo json_encode($response);
    }
    //************************************ */ 2. Leads dashboard API'S *************************************************

    //************************************ */ 3. Import data for assigingleads *************************************************
    public function temppostdataintotable()
    {
        $json_data = $this->input->post("sheet_data");
        $istable = $this->input->post("istable");

        if (!empty($json_data)) {
            $data_array = json_decode($json_data, true);

            if (!empty($data_array) && isset($data_array[0]) && isset($data_array[1])) {
                if($istable != null)
                {
                    array_splice($data_array[0], 1, 0, 'employee_name');
                }


                $headers = $data_array[0];
                $data = $data_array[1];
                if($istable != null)
                {
                    for ($i = 1; $i < count($data_array); $i++) {
                        array_splice($data_array[$i], 1, 0, ''); // Insert an empty string at the 1st index of each subsequent row
                    }
                }


            }
            if (empty($data)) {
                // $data is not empty, proceed with further processing
                $statuscode = 6;
                $message="empty data";

                $response = ["statuscode" => $statuscode, "message" => $message];
                echo json_encode($response);
                exit();
            }



            $expectedHeaders = ["FirstName", "LastName","Email","mobileNumber","alternatenumber","whatsappnumber","cityname","pincode","address","joiningdate", "modeofsalary","accountno","ifsccode","pfamount","pfaccountdate","grosssalary","netsalary","bankaddress","DOB","gender","residencename","aadharnumber","pancardnumber","emergencyno","emergencycontactperson","emergencyContactRelationship","alternateemergencyno","presentaddress","permanenetaddress","livesentout","incrementamount","incrementgivendate","totalsalaryafterincrement","simhandover","simhandoverdate","simreturndate","laptophandover","laptophandoverdate","laptopreturndate","idcardhandover","idcardhandoverdate","idcardreturndate"];
            $expectedHeaderstempimport = ["LeadName", "ContactNo", "EmailAddress", "Leadsource", "Leadstatus", "LeadMicroSource", "FollowUpDate"];
            $expectedHeadersattendance = ["employee_id", "logintime", "logouttime", "statusvalue", "statustext", "workedhours", "logdate"];

            // Initialize an array to store the trimmed data


            $filteredDataArray = [];
            foreach ($data_array as $subArray) {
                // Check if the sub-array is not empty
                if (!empty(array_filter($subArray))) {
                    // Fill missing columns with null or empty values
                    $subArray = array_pad($subArray, count($headers), null);
                    $filteredDataArray[] = $subArray;
                }
            }

            if (count(array_diff($expectedHeaders, $headers)) === 0) {
                $table_name = "tblusers";
                $headers = array_shift($data_array);



                $column_mapping = [
                    "FirstName" => "FirstName",
                    "LastName" => "LastName",
                    "Email" => "Email",
                    "mobileNumber" => "mobileNumber",
                    "alternatenumber" => "alternatenumber",
                    "whatsappnumber"=>"whatsappnumber",
                    "cityname"=>"cityname",
                    "pincode"=>"pincode",
                    "address"=>"address",
                    "joiningdate"=>"joiningdate",
                    "modeofsalary" =>"modeofsalary",
                    "accountno" => "accountno",
                    "ifsccode" =>"ifsccode",
                    "pfamount"=>"pfamount",
                    "pfaccountdate"=>"pfaccountdate",
                    "grosssalary"=>"grosssalary",
                    "netsalary"=>"netsalary",
                    "bankaddress"=>"bankaddress",
                    "DOB"=>"DOB",
                    "gender"=>"gender",
                    "residencename"=>"residencename",
                    "aadharnumber"=>"aadharnumber",
                    "pancardnumber"=>"pancardnumber",
                    "emergencyno"=>"emergencyno",
                    "emergencycontactperson"=>"emergencycontactperson",
                    "emergencyContactRelationship"=>"emergencyContactRelationship",
                    "alternateemergencyno"=>"alternateemergencyno",
                    "presentaddress"=>"presentaddress",
                    "permanenetaddress"=>"permanenetaddress",
                    "livesentout"=>"livesentout",
                    "incrementamount"=>"incrementamount",
                    "incrementgivendate"=>"incrementgivendate",
                    "totalsalaryafterincrement"=>"totalsalaryafterincrement",
                    "simhandover"=>"simhandover",
                    "simhandoverdate"=>"simhandoverdate",
                    "simreturndate"=>"simreturndate",
                    "laptophandover"=>"laptophandover",
                    "laptophandoverdate"=>"laptophandoverdate",
                    "laptopreturndate"=>"laptopreturndate",
                    "idcardhandover"=>"idcardhandover",
                    "idcardhandoverdate"=>"idcardhandoverdate",
                    "idcardreturndate"=>"idcardreturndate"
                ];



                $modeofsalaryMapping = [
                    "IDBI BANK SALARY" => 29,
                    "CSB SALARY ACCOUNT" =>26,
                    "DIRECT CASH" =>27,
                    "HOLD" =>28,
                    "INDIVIDUAL RTGS" =>30,
                    "SENT OUT SALARY" =>31

                ];

                if (isset($column_mapping["modeofsalary"])) {
                    $modeofsalaryIndex = array_search("modeofsalary", $headers);

                    // Check if "modeofsalary" index is found in the headers
                    if ($modeofsalaryIndex !== false) {
                        // Loop through the data and replace "modeofsalary" values with their corresponding IDs
                        foreach ($filteredDataArray as &$row) {
                            if (isset($row[$modeofsalaryIndex]) && isset($modeofsalaryMapping[$row[$modeofsalaryIndex]])) {
                                $row[$modeofsalaryIndex] = $modeofsalaryMapping[$row[$modeofsalaryIndex]];
                            }
                        }
                    }
                }

                $result= $this->Insert_Model->temppostdataintotable($column_mapping,$headers,$table_name,$filteredDataArray);
                if($result){
                    $statuscode = SUCCESS_INSERT;
                    $message = $this->getErrorMessage($statuscode);

                }else{
                    $statuscode = ERROR_INSERT;
                    $message = $this->getErrorMessage($statuscode);

                }
            }else if(count(array_diff($expectedHeaderstempimport, $headers)) === 0) {
                // Define the table name
                $table_name = "lead_master"; // Replace with your table name

                // Get the headers from the first row of the data
                $headers = array_shift($data_array);

                // Define an associative array to map JSON headers to table columns
                $column_mapping = [
                    "LeadName" => "LeadName",
                    "ContactNo" => "ContactNo",
                    "EmailAddress" => "EmailAddress",
                    "Leadsource" => "Leadsource",
                    "Leadstatus" => "Leadstatus",
                    "LeadMicroSource" => "LeadMicroSource",
                    "TeamManager" => "TeamManager",
                    "TeamLeader" => "TeamLeader",
                    "Telecaller" => "Telecaller",
                    "FollowUpDate" => "FollowUpDate",
                    "SiteVisited" => "SiteVisited",
                    "ProjectEnquiries" => "ProjectEnquiries",
                    "LeadType" => "LeadType",
                    "Notes" => "Notes",
                    "LeadOverallStatus" => "LeadOverallStatus",
                    "isconverted" => "isconverted",
                    // Add more columns and mapping as needed
                ];

                $result= $this->Insert_Model->temppostdataintotable($column_mapping,$headers,$table_name,$filteredDataArray);
                if($result){
                    $statuscode = SUCCESS_INSERT;
                    $message = $this->getErrorMessage($statuscode);
                }else{
                    $statuscode = ERROR_INSERT;
                    $message = $this->getErrorMessage($statuscode);
                }
            }else if(count(array_diff($expectedHeadersattendance, $headers)) === 0) {
                // Define the table name
                $table_name = "attendancelog"; // Replace with your table name

                // Iterate over the $data_array


                foreach ($filteredDataArray as $key => $row) {
                    if ($key === 0) {
                        continue; // Skip the header row
                    }

                    $employeeId = $row[0]; // Assuming employee_id is in the first column

                    // Query the database to fetch employee_name based on employee_id
                    $this->db->select('FirstName');
                    $this->db->where('id', $employeeId);
                    $query = $this->db->get('tblusers');

                    if ($query->num_rows() > 0) {
                        $result = $query->row();
                        $employeeName = $result->FirstName;

                        // Update the employee_name in the filteredDataArray
                        $filteredDataArray[$key][1] = $employeeName;
                    } else {
                        // If no match found, set employee_name as an empty string
                        $filteredDataArray[$key][1] = '';
                    }
                }




                // Get the headers from the first row of the data
                $headers = array_shift($data_array);

                // Define an associative array to map JSON headers to table columns
                $column_mapping = [
                    "employee_id" => "employee_id",
                    "employee_name" => "employee_name",
                    "logintime" => "logintime",
                    "logouttime" => "logouttime",
                    "statusvalue" => "statusvalue",
                    "statusvalue" => "statusvalue",
                    "statustext" =>"statustext",
                    "workedhours" =>"workedhours",
                    "logdate" =>"logdate",
                ];

                $result= $this->Insert_Model->temppostdataintotable($column_mapping,$headers,$table_name,$filteredDataArray);
                if($result)
                {
                    $statuscode = SUCCESS_INSERT;
                    $message = $this->getErrorMessage($statuscode);
                }else if($result && $result ==3)
                {
                    $statuscode = 3;
                    $message = "employee not found";
                } else{
                    $statuscode = ERROR_INSERT;
                    $message = $this->getErrorMessage($statuscode);
                }

            }else {
                // Headers do not match
                echo "The header does not match the expected header. Please provide the correct header.";
            }
        } else {
            $statuscode = NODATA;
            $message = $this->getErrorMessage($statuscode);
        }

        // Create a response array
        $response = [
            'statuscode' => $statuscode,
            'message' => $message,
        ];
        echo json_encode($response);

    }

    //************************************ */ 3. Import data for assigingleads *************************************************

    //************************************ */ 4.Projection list page section *************************************************
    public function getprojectionlist(){
        $result= $this->Procedure_Model->TempProjectionRecords();
        echo json_encode($result);
    }

    public function getfilteredprojectionlist()
    {
        $modofadmission = $this->input->get('modofadmission');
        $statusofdropdown = $this->input->get('statusofdropdown');
        $universitieslist = $this->input->get('universitieslist');
        $sourcelist = $this->input->get('sourcelist');
        $courselist = $this->input->get('courselist');
        $isprojection = $this->input->get('isprojection');
        $peridvalue = $this->input->get('peridvalue');



        $result=$this->Procedure_Model->TempProjectionLeadfilterlist($modofadmission,$statusofdropdown,$universitieslist,$sourcelist,$courselist,$isprojection,$peridvalue);
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }
        echo json_encode($response);
    }

//    for updating the projection list
    public function Updateprojectionlist()
    {
        // Get the values from the FormData
        $projectionId = $_POST['projectionID'];
        $projectionDate = $_POST['projectionDate'];
        $collectionDate = $_POST['collectiondate'];
        $studentname = $_POST['studentname'];
        $mobilenumber = $_POST['mobilenumber'];
        $emailaddress = $_POST['emailaddress'];
        $moa = $_POST['moa'];
        $university = $_POST['university'];
        $course = $_POST['course'];

        $followupdate = $_POST['followupdate'];
        $leadstatus = $_POST['leadstatus'];
        $amountbyTelecaller = $_POST['amountbyTelecaller'];
        $amountbyTeamleader = $_POST['amountbyTeamleader'];
        $amountbyManager = $_POST['amountbyManager'];
        $leadsource = $_POST['leadsource'];
        $leadname = $_POST['leadname'];
        $remarks = $_POST['remarks'];

        $statusToUpdate = $_POST['StatusOfUpdate'];


        // *****************************************************


        $collectionType = $_POST['collectionType'] ?? null;
        $subCollectionType = $_POST['subCollectionType'] ?? null;
        $paymentsModes = $_POST['paymentsModes'] ?? null;
        $bankList = $_POST['bankList'] ?? null;
        $Upireference = $_POST['Upireference'] ?? null;
        $Vendorlist = $_POST['Vendorlist'] ?? null;
        $ScreenshotLink = $_POST['ScreenshotLink'] ?? null;
        $CertificateLink = $_POST['CertificateLink'] ?? null;
        $RulesLink = $_POST['RulesLink'] ?? null;
        $BasicDetails = $_POST['BasicDetails'] ?? null;
        $phtotstudent =$_POST['phtot'] ?? null;
        $fees = $_POST['fees'] ?? null;
        $paidfeess = $_POST['paidfeess'] ?? null;
        $pendingfees = $_POST['pendingfees'] ?? null;
        $photoname= $_POST['photo_name'] ?? null;
        $isprojection =$_POST['isprojection'] ?? null;

        $result=$this->Procedure_Model->Updateprojectionlist($collectionType,$subCollectionType,$paymentsModes,$bankList,$Upireference,$Vendorlist,$ScreenshotLink,$CertificateLink,$RulesLink,$BasicDetails,$phtotstudent,$projectionId,$fees,$paidfeess,$pendingfees,$photoname);


        if($result){
            $updateData = array(
                'collection_date'=>$collectionDate,
                'projection_date' => $projectionDate,
                'student_name' => $studentname,
                'mobile_number' => $mobilenumber,
                'email_id' => $emailaddress,
                'moa' => $moa,
                'universities' => $university,
                'course' => $course,
                'fees' => $fees,
                'followup_date' => $followupdate,
                'amount_collected' => $amountbyTelecaller,
                'amount_collected_tl' => $amountbyTeamleader,
                'amount_collected_tm' => $amountbyManager,
                'lead_source' => $leadsource,
                'lead_name' => $leadname,
                'status'=>$leadstatus,
                'remarks' => $remarks,
                'collection_type' => $collectionType,
                'sub_collection' => $subCollectionType,
                'payment_mode' => $paymentsModes,
                'bank_name' => $bankList,
                'upi_refernce' => $Upireference,
                'vendor_name' => $Vendorlist,
                'screenshot_link' => $ScreenshotLink,
                'certificate_link' => $CertificateLink,
                'rules_link' => $RulesLink,
                'basic_details' => $BasicDetails,
                'photo'=>$phtotstudent,
                'paidfees'=>$paidfeess,
                'pendingfees'=>$pendingfees,
                'photo_name'=>$photoname,
                'isprojection'=>$isprojection
            );

            $result2=$this->Procedure_Model->updateArrayforprojectionlist($updateData,$projectionId);
            if($result2){
                $statuscode = SUCCESS_INSERT;
                $message = $this->getErrorMessage($statuscode);
            }else{
                $statuscode = ERROR_INSERT;
                $message = $this->getErrorMessage($statuscode);
            }
            $response = ["statuscode" => $statuscode, "message" => $message];

            echo json_encode($response);
        }

    }


    //************************************ */ 4.Projection list page section *************************************************

    public function getLeadsourcecounts()
    {
        $result= $this->Procedure_Model->getLeadsourcecounts();
        echo json_encode($result);
    }

    public function sourcecountsgetdatewise()
    {
        $fromdate = $this->input->get("fromdate");
        $todate = $this->input->get("todate");

        $result= $this->Procedure_Model->getdatewiseleadsourcecounts($fromdate,$todate);
        echo json_encode($result);
    }
    public function getMoa()
    {
        $GetMoa = $this->Get_Model->getMoa();
        echo json_encode($GetMoa);
    }

    public function getUniversities()
    {
        $getUniversities = $this->Get_Model->getUniversities();
        echo json_encode($getUniversities);
    }

    public function getCourselist()
    {
        $getcourselist = $this->Get_Model->getCourselist();
        echo json_encode($getcourselist);
    }
    public function getCollectiontypelist()
    {
        $collectionTypelist = $this->Get_Model->getCollectiontypelist();
        echo json_encode($collectionTypelist);
    }
    public function getSubcollectionlist()
    {
        $Subcollectionlist = $this->Get_Model->getSubcollectionlist();
        echo json_encode($Subcollectionlist);
    }
    public function getVendorlist()
    {
        $Vendorlist = $this->Get_Model->getVendorlist();
        echo json_encode($Vendorlist);
    }
    public function getPaymentmodelist()
    {
        $Paymentmodelist = $this->Get_Model->getPaymentmodelist();
        echo json_encode($Paymentmodelist);
    }
    public function getBanklist()
    {
        $Banklist = $this->Get_Model->getBanklist();
        echo json_encode($Banklist);
    }

    public function getcollectiondata()
    {
        $result= $this->Procedure_Model->getcollectiondata();
        echo json_encode($result);
    }

    public function getfilteredcollectiondata()
    {

        $teamLeaderID = $this->input->get("teamLeaderID");
        $telecallerID = $this->input->get("telecallerID");
        $teamManagerID = $this->input->get("teamManagerID");
        $paymentID = $this->input->get("paymentID");
        $VendorID = $this->input->get("vendorID");

        $result = $this->Procedure_Model->getfilteredcollectiondata(
            $teamLeaderID,
            $teamManagerID,
            $telecallerID,
            $paymentID,
            $VendorID

        );
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }

        echo json_encode($response);

    }

    public function datewisefiltercollection()
    {
        $fromDate = $this->input->get("fromDate");
        $toDate = $this->input->get("toDate");
        $teamLeaderID = $this->input->get("teamLeaderID");
        $telecallerID = $this->input->get("telecallerID");
        $teamManagerID = $this->input->get("teamManagerID");
        $paymentmodeID = $this->input->get("paymentmodeID");
        $vendormodeID = $this->input->get("vendormodeID");


        $result = $this->Procedure_Model->datewisefiltercollection(
            $fromDate,
            $toDate,
            $teamManagerID,
            $teamLeaderID,
            $telecallerID,
            $paymentmodeID,
            $vendormodeID
        );
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }

        echo json_encode($response);
    }

    public function getIncollectionCounts()
    {
        $this->load->database();
        // Retrieve the filter parameters from the AJAX request
        $ismanagerids = $this->input->get('ismanagerids');
        $isteamleaderids = $this->input->get('isteamleaderids');
        $istelecallerids = $this->input->get('telecallerids');
        $paymentids = $this->input->get('paymentids');
        $vendorids = $this->input->get('vendorids');
        $collectionshow = $this->input->get('collectionshow');

        $result=$this->Procedure_Model->getIncollectionCounts($ismanagerids,$isteamleaderids,$istelecallerids,$vendorids,$paymentids,$collectionshow);
        $response = $result;
        echo json_encode($response);
    }

    public function getReferencedBy()
    {
        $result = $this->Get_Model->getReferencedBy();

        // Encode the result as JSON and echo it
        echo json_encode($result);
    }

    public function getJobs()
    {
        $result = $this->Get_Model->getJobs();

        // Encode the result as JSON and echo it
        echo json_encode($result);
    }

    public function postCandidate()
    {
        $this->load->database();
        $upload_path = $this->config->item('upload_path');


        $candiadtefirstname = $this->input->post('candiadtefirstname');
        $candiadtelastname = $this->input->post('candiadtelastname');
        $candidateid = $this->input->post('candidateid');
        $dateofbirth = $this->input->post('dateofbirth');
        $refernceid = $this->input->post('refernceid');
        $jobposition = $this->input->post('jobposition');
        $salaryexpected = $this->input->post('salaryexpected');
        $interviewdate = $this->input->post('interviewdate');
        $jobcategory =$this->input->post('jobcategory');
        $mobileNumber =$this->input->post('mobileNumber');

        $data = [
            "FirstName" => $candiadtefirstname,
            "LastName" => $candiadtelastname,
            "candidateID" => $candidateid,
            "DOB" => $dateofbirth,
            "refernceID" => $refernceid,
            "jobposition" => $jobposition,
            "exSalary" => $salaryexpected,
            "interviewDate" => $interviewdate,
            "category_id" => $jobcategory,
            "mobileNumber"=>$mobileNumber
        ];

        $result =$this->Insert_Model->postCandidate($upload_path,$data);

        if ($result != 0) {
            // Insertion was successful
            $statuscode = SUCCESS_INSERT;
            $message = $this->getErrorMessage($statuscode);
        } else {
            // Insertion failed
            $statuscode = ERROR_INSERT;

            $message = $this->getErrorMessage($statuscode);
        }
        // Create a response array
        $response = $statuscode;

        // Encode the response as JSON and echo it
        echo json_encode($response);
    }

    public function getCandidateList()
    {
        $this->load->database();
        $refernce = $this->input->get('refernce');
        $jobposition = $this->input->get('jobposition');
        $sql = "CALL Candidatelist(?, ?)";
        $result = $this->db->query($sql, array($jobposition,$refernce));


        // Convert the results to an array
        $filteredData = $result->result_array();


        echo json_encode($filteredData);
    }

    public function getEmployeelist()
    {
        $this->load->database();
        $refernce = $this->input->get('refernce');
        $jobposition = $this->input->get('jobposition');
        $sql = "CALL Employeelist(?, ?)";
        $result = $this->db->query($sql, array($jobposition,$refernce));


        // Convert the results to an array
        $filteredData = $result->result_array();


        echo json_encode($filteredData);
    }
    public function getInterviewStatus()
    {
        $result = $this->Get_Model->getInterviewStatus();

        // Encode the result as JSON and echo it
        echo json_encode($result);
    }

    public function postchangestatus()
    {
        $checkedIds = $this->input->post('checkedIds');
        $interviewstatus = $this->input->post('interviewstatus');

        $result =$this->Update_Model->postchangestatus($checkedIds,$interviewstatus);
        if ($result) {
            // Insertion was successful
            $statuscode = SUCCESS_INSERT;
            $message = $this->getErrorMessage($statuscode);
        } else {
            // Insertion failed
            $statuscode = ERROR_INSERT;

            $message = $this->getErrorMessage($statuscode);
        }
        // Create a response array
        $response = $statuscode;

        // Encode the response as JSON and echo it
        echo json_encode($response);
    }

    public function postcemployeequeryform()
    {
        $formData = $this->input->post();

        // Check if the 'certificatearray' exists and has data
        if (isset($formData['certificatearray']) && is_array($formData['certificatearray']) && count($formData['certificatearray']) > 0) {
            // If 'certificatearray' has data, set 'isCertificategiven' to true
            $formData['isCertificategiven'] = true;
            $newCertificateArray = $formData['certificatearray'];
        } else {
            // If 'certificatearray' is empty, set 'isCertificategiven' to false
            $formData['isCertificategiven'] = false;
            $newCertificateArray = array();
        }

        // Remove 'certificatearray' from the data as we're handling it separately
        unset($formData['certificatearray']);

        // Insert or update data in 'tblusers'
        if ($formData['tableID'] == 0) {
            unset($formData['tableID']);
            $joiningdate = $formData['joiningdate'];
            $joiningmonth = date('m', strtotime($joiningdate));
            $formData['joiningmonth'] = $joiningmonth;
            $this->db->insert('tblusers', $formData);
            $userId = $this->db->insert_id(); // Get the last inserted user ID
        } else {
            $tableid=$formData['tableID'];
            unset($formData['tableID']);
            $joiningdate = $formData['joiningdate'];
            $joiningmonth = date('m', strtotime($joiningdate));
            $formData['joiningmonth'] = $joiningmonth;
            $this->db->where('id', $tableid);

            $this->db->update('tblusers', $formData);
            $userId = $tableid;
        }

        // Now, insert data from 'certificatearray' into 'certificates_table'
        if ($formData['isCertificategiven']) {
            // Delete existing certificates with the same 'employee_id'
            $this->db->where('employee_id', $userId);
            $this->db->delete('certificates_table');

            // Insert new certificates
            foreach ($newCertificateArray as $certificate) {
                $certificateData = array(
                    'certificate_name' => $certificate['title'],
                    'certifcate_number' => $certificate['content'],
                    'employee_id' => $userId
                );
                $this->db->insert('certificates_table', $certificateData);
            }
        }

        // Now, insert data from 'certificatearray' into 'certificates_table'

        $result =  $this->db->affected_rows() > 0;

        if ($result) {
            // Insertion was successful
            $statuscode = SUCCESS_INSERT;
            $message = $this->getErrorMessage($statuscode);
        } else {
            // Insertion failed
            $statuscode = ERROR_INSERT;

            $message = $this->getErrorMessage($statuscode);
        }
        // Create a response array
        // Set the response to include the user ID
        $response = [
            'statuscode' => $statuscode,
            'user_id' => $userId, // Include the user ID in the response
            'message' => $message,
        ];

        // Encode the response as JSON and echo it
        echo json_encode($response);
    }

    public function getCandidateDashboard()
    {
        $refernce = $this->input->get("refernce");
        $jobposition = $this->input->get("jobposition");
        $interviewstatus = $this->input->get("interviewstatus");
        $fromdate = $this->input->get("fromdate");
        $todate = $this->input->get("todate");

        $refernce = is_array($refernce) ? implode(',', $refernce) : $refernce;
        $jobposition = is_array($jobposition) ? implode(',', $jobposition) : $jobposition;
        $interviewstatus = is_array($interviewstatus) ? implode(',', $interviewstatus) : $interviewstatus;

        $sql = "CALL GetCandidateInfo(?, ?,?,?,?)";

        $stmt = $this->db->conn_id->prepare($sql);
        $stmt->bind_param("sssss",$refernce,$fromdate,$todate,$interviewstatus,$jobposition);
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



        $data = [
            'ReferredList' => $resultSets[0],
            'ReferredAndJoinedList' => $resultSets[1],
            'SimcardUsers' => $resultSets[2],
            'SimcardNotUsers' => $resultSets[3],
            'LaptopUsers' => $resultSets[4],
            'LaptopNotUsers' => $resultSets[5],
            'IdcardUsers' => $resultSets[6],
            'IdcardNotUsers' => $resultSets[7],
            'LiveUsers' => $resultSets[8],
            'SentoutUsers' => $resultSets[9],
            'NewTemptable' =>$resultSets[10],
            'Alltotal' =>$resultSets[11],
            'CertifcateGiven' =>$resultSets[12],
            'CertifcateNotGiven' =>$resultSets[13]
        ];

        echo json_encode($data);
    }



    public function getModeofSalary()
    {
        $result = $this->Get_Model->getModeofSalary();

        // Encode the result as JSON and echo it
        echo json_encode($result);
    }


    public function getEmployeelistdropdwon()
    {
        $managervalue = $this->input->post("managervalue");
        $teamleader = $this->input->post("teamleader");
        $result = $this->Get_Model->getEmployeelistdropdwon($managervalue,$teamleader);

        // Encode the result as JSON and echo it
        echo json_encode($result);
    }


    public function getTemaleaderdropdown()
    {
        $managervalue = $this->input->post("managervalue");

        $result = $this->Get_Model->getTemaleaderdropdown($managervalue);
        if (isset($result["statuscode"])) {
            $message = $this->getErrorMessage($result["statuscode"]);
            $response = [
                "statuscode" => $result["statuscode"],
                "message" => $message,
            ];
        } else {
            // No error, return the result as JSON
            $response = $result;
        }

        echo json_encode($response);
    }


    public function Postassigingrespectives()
    {
        $checkedIds = $this->input->post('checkedIds');
        $selectedmanager = $this->input->post('selectedmanager');
        $selectedteamleader = $this->input->post('selectedteamleader');

        $result = $this->Update_Model->Postassigingrespectives($checkedIds, $selectedmanager, $selectedteamleader);

        if ($result) {
            echo json_encode(array('status' => 1));
        } else {
            echo json_encode(array('status' => 0));
        }
    }


    public function getAssignedEmployees()
    {
        $this->load->database();
        $refernce = $this->input->get('refernce');
        $jobposition = $this->input->get('jobposition');
        $sql = "CALL AssignedEmployees(?, ?)";
        $result = $this->db->query($sql, array($jobposition,$refernce));


        // Convert the results to an array
        $filteredData = $result->result_array();


        echo json_encode($filteredData);
    }

    public function postjobstatus()
    {
        $isuseridform = $this->input->post('isuseridform');
        $this->db->set('isjoined', 1);
        $this->db->where('id', $isuseridform);
        $this->db->update('tblusers');
        $result= $this->db->affected_rows() > 0;
        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function PostAttendancelog()
    {
        $formData = $this->input->post();

        $employeeId = $formData['employee_id'];
        $logDate = $formData['logdate'];

        // Check if a record with the same 'logdate' and 'employee_id' exists
        $this->db->where('employee_id', $employeeId);
        $this->db->where('logdate', $logDate);
        $existingRecord = $this->db->get('attendancelog')->row();

        if ($existingRecord) {
            // If a matching record exists, delete it
            $this->db->where('employee_id', $employeeId);
            $this->db->where('logdate', $logDate);
            $this->db->delete('attendancelog');
        }

        // Insert the new record
        $this->db->insert('attendancelog', $formData);

        $result = $this->db->affected_rows() > 0;
        echo json_encode($result);
    }


    public function GetAttendancelog()
    {
        $empid = $this->input->post('empid');
        $sql = "SELECT * FROM attendancelog WHERE employee_id = ?";
        $query = $this->db->query($sql, array($empid));
        if ($query) {
            $results = $query->result();

            echo json_encode($results);
        } else {
            echo json_encode(false);

        }
    }

    // 02-11-2023

    public function getCertificateDetails()
    {
        $empid = $this->input->post('empid');
        $sql = "SELECT * FROM certificates_table WHERE employee_id = ?";
        $query = $this->db->query($sql, array($empid));
        if ($query) {
            $results = $query->result();

            echo json_encode($results);
        } else {
            echo json_encode(false);

        }
    }

    public function gettblrecords()
    {
        $tableID = $this->input->get('tableID');
        $sql = "SELECT * FROM tblusers WHERE id = ?";
        $query = $this->db->query($sql, array($tableID));
        if ($query) {
            $results = $query->result();

            echo json_encode($results);
        } else {
            echo json_encode(false);

        }
    }

    public function getLiveandSentoutusers()
    {
        $teamleaderval = $this->input->post('teamleaderval');
        $teammangerval = $this->input->post('teammangerval');
        $fromdate = $this->input->post('fromdate');
        $todate = $this->input->post('todate');

        $sql = "CALL liveandsentoutusers(?,?,?,?)";

        $stmt = $this->db->conn_id->prepare($sql);
        $stmt->bind_param("ssss",$fromdate,$todate,$teammangerval,$teamleaderval);
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

        $data = [

            'SimcardUsers' => $resultSets[0],
            'LaptopUsers' => $resultSets[1],
            'IdcardUsers' => $resultSets[2],
            'LiveUsers' => $resultSets[3],
            'SentoutUsers' => $resultSets[4],
            'Totalcount'=>$resultSets[5]
        ];
        echo json_encode($data);
    }


    public function getEmployeeAttendanceSummary() {
        $empid = $this->input->post('empid');
        $year = $this->input->post('currentyear');
        $query = $this->db->query("
            SELECT
                employee_id,
                employee_name,
                logdate AS Logged_Date,
                YEAR(logdate) AS selected_year,
                MONTH(logdate) AS selected_month,
                COUNT(DISTINCT logdate) AS total_days,
                COUNT(DISTINCT CASE WHEN statusvalue = 1 THEN logdate END) AS totalpresentdays,
                COUNT(DISTINCT CASE WHEN statusvalue = 2 THEN logdate END) AS totalabsentdays,
                COUNT(DISTINCT CASE WHEN statusvalue = 4 THEN logdate END) AS totallatedays,
                COUNT(DISTINCT CASE WHEN statusvalue = 6 THEN logdate END) AS totalhalfdays
            FROM attendancelog
            WHERE (? = 0 OR employee_id = ?) AND YEAR(logdate) = ?
            GROUP BY employee_id, employee_name, selected_year, selected_month;
        ", array($empid, $empid, $year));

        $result = $query->result();
        echo json_encode($result);
    }



    private function getAdditionalDetails($employeeIDs,$selectedMonth = null,$selectedYear = null) {
        $employeeIDsArray = explode(',', $employeeIDs); // Split the comma-separated string into an array

        $additionalDetails = array();

        foreach ($employeeIDsArray as $employeeID) {
            $this->db->select('u.joiningdate, u.joiningmonth, t.FirstName AS referedby, u.FirstName AS StaffName, ms.type_name AS Mode,m.manager_name AS Teammanager, u.id AS Emp_id, u.livesentout AS LiveorSentout, jb.job_name AS Desgination, tm.team_name AS TeamName');

            // Calculate the number of days worked without being late


               if ($selectedYear !== null && $selectedMonth !== null) {
                   $this->db->select('COUNT(CASE WHEN ad.statusvalue != 4 THEN 1 ELSE NULL END) AS Days_WithoutLate');
                   $this->db->select('COUNT(CASE WHEN ad.statusvalue = 3 THEN 1 ELSE NULL END) AS Fullday_Leaves');
                   $this->db->select('COUNT(CASE WHEN ad.statusvalue = 6 THEN 1 ELSE NULL END) AS Halfday_leave');
                   $this->db->select('COUNT(CASE WHEN ad.statusvalue = 4 THEN 1 ELSE NULL END) AS NoofLates_WithWorked');
                   $this->db->select('COUNT(CASE WHEN ad.statusvalue = 4 THEN 1 ELSE NULL END) AS Late_LossofPay');
                $this->db->select('COUNT(CASE WHEN DAYOFWEEK(ad.logdate) != 1 THEN 1 ELSE NULL END) AS Total_WorkingDays');
                   $this->db->select('COUNT(CASE WHEN ad.statusvalue = 2 THEN 1 ELSE NULL END) AS Total_Absentdays');
                   $this->db->select('COUNT(CASE 
        WHEN ad.statusvalue != 3 AND DAYOFWEEK(ad.logdate) != 1 THEN 
            CASE 
                WHEN ad.statusvalue = 6 THEN 0.5 
                ELSE 1 
            END 
        ELSE 
            0 
        END
    ) AS Total_Present');
                   $this->db->select('"" AS Total_WorkingDays');
                   $this->db->select('"" AS Total_Holidays');
                   if (!empty($selectedYear) && is_array($selectedYear)) {
                       $selectedYear = reset($selectedYear);
                   }
                   $this->db->select("$selectedYear AS Selected_Year");

                   if (!empty($selectedMonth) && is_array($selectedMonth)) {
                       $selectedMonth = reset($selectedMonth);
                   }
                   $this->db->select("$selectedMonth AS Selected_Month");

                   $this->db->select('"" AS NetMonthly_Attendance');
                   $this->db->select('"" AS Attendance_KPIPerformance');
                   $this->db->select('u.grosssalary AS Gross_Salary');
                   $this->db->select('"" AS GrossSalary_AfterLeaveDeduction');
                   $this->db->select('u.pfamount AS PF_amount');
                   $this->db->select('u.rdAmount AS RD_amount');
                   $this->db->select('
    CASE
        WHEN EXISTS (SELECT 1 FROM salarydeduction sd WHERE sd.employee_id = u.id)
        THEN (SELECT sd.netsalaryWithdeduction FROM salarydeduction sd WHERE sd.employee_id = u.id)
        ELSE u.totalsalaryafterincrement
    END AS Net_salary', FALSE
                   );
                   $this->db->select('(SELECT CASE WHEN EXISTS (SELECT 1 FROM salarydeduction sd WHERE sd.employee_id = u.id) THEN 1 ELSE 0 END) AS Is_Deduction');
                   $this->db->select('"" AS Add_deduction');
               }


            $this->db->from('tblusers u');
            $this->db->join('tblusers t', 'u.refernceID = t.id', 'left');
            $this->db->join('modeofsalary ms', 'u.modeofsalary = ms.id', 'left');
            $this->db->join('job_table jb', 'u.jobposition = jb.job_id', 'left');
            $this->db->join('manager m', 'u.TeamManger = m.manager_id', 'left');
            $this->db->join('team tm', 'm.team_id = tm.team_id', 'left');

            $this->db->join('attendancelog ad', 'u.id = ad.employee_id', 'left');

            $this->db->where('u.id', $employeeID);
            // Add filters for selectedYear and selectedMonth
            if ($selectedYear !== null) {
                $this->db->where_in('YEAR(ad.logdate)', $selectedYear);
            }
            if ($selectedMonth !== null) {
                $this->db->where_in('MONTH(ad.logdate)', $selectedMonth);
            }
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $additionalDetails = $query->result_array();


            }
        }

        return $additionalDetails;
    }






    public function calculateSalaryModeTotals() {
        $selectedMonth = isset($_GET['selectedMonth']) ? $_GET['selectedMonth'] : null;
        $selectedYear = isset($_GET['selectedYear']) ? $_GET['selectedYear'] : null;

        $modeofsalary = $this->input->get('modeofsalary');
        $this->db->select('IFNULL(ms.type_name, "Salary mode yet to assign") AS Mode');
        $this->db->select('COUNT(u.id) AS TotalStaffs');
        $this->db->select('SUM(CASE WHEN u.livesentout = "live" THEN u.totalsalaryafterincrement ELSE 0 END) AS TotalLiveAmount');
        $this->db->select('SUM(CASE WHEN u.livesentout = "sentout" THEN u.totalsalaryafterincrement ELSE 0 END) AS TotalSentoutAmount');
        $this->db->select('COUNT(CASE WHEN u.livesentout = "live" THEN 1 ELSE NULL END) AS TotalLive');
        $this->db->select('COUNT(CASE WHEN u.livesentout = "sentout" THEN 1 ELSE NULL END) AS TotalSentout');
        $this->db->select('SUM(u.totalsalaryafterincrement) AS TotalAmount');
        $this->db->select('GROUP_CONCAT(u.id) AS EmployeeIDs', false);
        $this->db->from('tblusers u');
        $this->db->where('u.isjoined', 1);
        $this->db->join('modeofsalary ms', 'u.modeofsalary = ms.id', 'left');
        if ($modeofsalary != 0) {
            $this->db->where('u.modeofsalary', $modeofsalary);
        }
        $this->db->group_by('Mode');



        $query = $this->db->get();

        $result= $query->result();
        $modeEmployeeDetails = array();

        // Iterate through the result
        foreach ($result as $row) {
            $mode = $row->Mode;
            $employeeIDs = explode(',', $row->EmployeeIDs);

            $employeeDetails = array();

            // Fetch additional details for each employee using $employeeIDs
            foreach ($employeeIDs as $employeeID) {
                // Query the database to retrieve additional details for this employee
                if($selectedMonth != null && $selectedYear != null)
                {
                    $additionalDetails = $this->getAdditionalDetails($employeeID ,$selectedMonth,$selectedYear);
                }else
                {
                    $additionalDetails = $this->getAdditionalDetails($employeeID);
                }

                // Add the additional details to the array for this employee
                $employeeDetails[$employeeID] = $additionalDetails;
            }

            // Add the mode and its employee details to the result array
            $modeEmployeeDetails[$mode] = $employeeDetails;
        }

        $data = [

            'ConsolidateData' =>  $result,
            'EmployeesMapped' => $modeEmployeeDetails
        ];

        // Respond with JSON containing the mode and employee details
        echo json_encode($data);
    }


    public function calculateSalaryModeTotalsTeamwise() {
        $teamanager = $this->input->get('teamanager');
        $selectedMonth = isset($_GET['selectedMonth']) ? $_GET['selectedMonth'] : null;
        $selectedYear = isset($_GET['selectedYear']) ? $_GET['selectedYear'] : null;
        $this->db->select('IFNULL(ms.manager_name, "Not Assigned") AS TeammanagerWise');
        $this->db->select('COUNT(u.id) AS TotalStaffs');
        $this->db->select('SUM(CASE WHEN u.livesentout = "live" THEN u.totalsalaryafterincrement ELSE 0 END) AS TotalLiveAmount');
        $this->db->select('SUM(CASE WHEN u.livesentout = "sentout" THEN u.totalsalaryafterincrement ELSE 0 END) AS TotalSentoutAmount');
        $this->db->select('COUNT(CASE WHEN u.livesentout = "live" THEN 1 ELSE NULL END) AS TotalLive');
        $this->db->select('COUNT(CASE WHEN u.livesentout = "sentout" THEN 1 ELSE NULL END) AS TotalSentout');
        $this->db->select('SUM(u.totalsalaryafterincrement) AS TotalAmount');
        $this->db->select('GROUP_CONCAT(u.id) AS EmployeeIDs', false);
        $this->db->from('tblusers u');
        $this->db->join('manager ms', 'u.TeamManger = ms.manager_id', 'left');
        $this->db->where('u.isjoined', 1);
        if ($teamanager != 0) {
            $this->db->where('u.TeamManger', $teamanager);
        }
        $this->db->group_by('TeammanagerWise');



        $query = $this->db->get();

        $result= $query->result();

        $TeamwiseEmployeedetails = array();

        // Iterate through the result
        foreach ($result as $row) {
            $managerwise = $row->TeammanagerWise;
            $employeeIDs = explode(',', $row->EmployeeIDs);

            $employeeDetails = array();

            // Fetch additional details for each employee using $employeeIDs
            foreach ($employeeIDs as $employeeID) {
                // Query the database to retrieve additional details for this employee
                if($selectedMonth != null && $selectedYear != null)
                {
                    $additionalDetails = $this->getAdditionalDetails($employeeID ,$selectedMonth,$selectedYear);
                }else
                {
                    $additionalDetails = $this->getAdditionalDetails($employeeID);
                }


                // Add the additional details to the array for this employee
                $employeeDetails[$employeeID] = $additionalDetails;
            }

            // Add the mode and its employee details to the result array
            $TeamwiseEmployeedetails[$managerwise] = $employeeDetails;
        }

        $data = [

            'ConsolidateData' =>  $result,
            'EmployeesMapped' => $TeamwiseEmployeedetails
        ];

        // Respond with JSON containing the mode and employee details
        echo json_encode($data);
    }

    public function getconsolidateattendancereport() {
        $months = $this->input->post('months'); // Array of numeric months (e.g., [1, 2, 3])
        $managervalue = $this->input->post('managervalue');
        $years = $this->input->post('years'); // Array of years (e.g., [2023, 2024])

        // Perform a join between tblusers and attendancelog based on employee_id
        $this->db->select('a.employee_id, a.employee_name, a.logdate AS Logged_Date, YEAR(a.logdate) AS selected_year, MONTH(a.logdate) AS selected_month');
        $this->db->select('COUNT(DISTINCT a.logdate) AS total_days');
        $this->db->select('COUNT(DISTINCT CASE WHEN a.statusvalue = 1 THEN a.logdate END) AS totalpresentdays');
        $this->db->select('COUNT(DISTINCT CASE WHEN a.statusvalue = 2 THEN a.logdate END) AS totalabsentdays');
        $this->db->select('COUNT(DISTINCT CASE WHEN a.statusvalue = 4 THEN a.logdate END) AS totallatedays');
        $this->db->select('COUNT(DISTINCT CASE WHEN a.statusvalue = 6 THEN a.logdate END) AS totalhalfdays');
        $this->db->from('attendancelog a');
        $this->db->join('tblusers u', 'u.id = a.employee_id');

        if (!empty($years)) {
            $this->db->where_in('YEAR(a.logdate)', $years);
        }

        if (!empty($months)) {
            $this->db->where_in('MONTH(a.logdate)', $months);
        }

        // Add the condition to filter by managervalue (Teammanger)
        if ($managervalue != 0) {
            $this->db->where('u.TeamManger', $managervalue);
        }

        $this->db->group_by('a.employee_id');

        $query = $this->db->get();
        $result = $query->result();
        echo json_encode($result);
    }

    public function gettodayattendancereport()
    {
        $formattedDate = $this->input->post('formattedDate');
        $selectedDate=$this->input->post('selectedDate');

if($selectedDate != null)
{
    $recordsSql = "SELECT * FROM attendancelog WHERE logdate = ?";
    $recordsQuery = $this->db->query($recordsSql, array($selectedDate));

    // Query to calculate counts
    $countsSql = "SELECT
        SUM(CASE WHEN statusvalue = 1 THEN 1 ELSE 0 END) AS presentCount,
        SUM(CASE WHEN statusvalue = 2 THEN 1 ELSE 0 END) AS absentCount,
        SUM(CASE WHEN statusvalue = 3 THEN 1 ELSE 0 END) AS leaveCount,
        SUM(CASE WHEN statusvalue = 4 THEN 1 ELSE 0 END) AS lateCount,
        SUM(CASE WHEN statusvalue = 6 THEN 1 ELSE 0 END) AS halfDayCount
    FROM attendancelog
    WHERE logdate = ?";
    $countsQuery = $this->db->query($countsSql, array($selectedDate));

}else{
    // Query to retrieve records
    $recordsSql = "SELECT * FROM attendancelog WHERE logdate = ?";
    $recordsQuery = $this->db->query($recordsSql, array($formattedDate));


    $countsSql = "SELECT
        SUM(CASE WHEN statusvalue = 1 THEN 1 ELSE 0 END) AS presentCount,
        SUM(CASE WHEN statusvalue = 2 THEN 1 ELSE 0 END) AS absentCount,
        SUM(CASE WHEN statusvalue = 3 THEN 1 ELSE 0 END) AS leaveCount,
        SUM(CASE WHEN statusvalue = 4 THEN 1 ELSE 0 END) AS lateCount,
        SUM(CASE WHEN statusvalue = 6 THEN 1 ELSE 0 END) AS halfDayCount
    FROM attendancelog
    WHERE logdate = ?";
    $countsQuery = $this->db->query($countsSql, array($formattedDate));
}





        $response = array(
            'records' => $recordsQuery->result_array(),
            'counts' => $countsQuery->row_array()
        );

        // Encode the response as JSON
        echo json_encode($response);
    }

    public function  salarydeduction()
    {
        $employeeid = $this->input->post('employeeid');
        $this->db->where('employee_id', $employeeid);
        $this->db->delete('salarydeduction');

        $professiontax = $this->input->post('professiontax');
        $TDSamount = $this->input->post('TDSamount');
        $MobileDecution = $this->input->post('MobileDecution');
        $pendingAdvance = $this->input->post('pendingAdvance');
        $Advance = $this->input->post('Advance');
        $rentAMount = $this->input->post('rentAMount');
        $Latededuction = $this->input->post('Latededuction');
        $Deduction = $this->input->post('Deduction');
        $Rdamount = $this->input->post('Rdamount');
        $finalnetsalary = $this->input->post('finalnetsalary');
        $monthfor= $this->input->post('monthfor');

        $insertData = array(
            'employee_id'=>$employeeid,
            'professionTax' => $professiontax,
            'TDS' => $TDSamount,
            'mobile' => $MobileDecution,
            'pendingAdvance' => $pendingAdvance,
            'advance' => $Advance,
            'rent' => $rentAMount,
            'lateDeduction' => $Latededuction,
            'Deduction' => $Deduction,
            'rdAMount' => $Rdamount,
            'netsalaryWithdeduction' => $finalnetsalary,
            'deductionmonth'=>$monthfor
        );
        $this->db->insert('salarydeduction', $insertData);
        $check = $this->db->affected_rows() > 0;

        // Check for success or handle any errors
        if ($check) {
            // Insert successful
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }

    public function checkalreadydeducted()
    {
        $employeeid = $this->input->get('employeeid');

        // Check if the employee_id already exists in the salarydeduction table
        $this->db->where('employee_id', $employeeid);
        $query = $this->db->get('salarydeduction');

        if ($query->num_rows() > 0) {
            // Employee_id found in the table, return the result as JSON
            echo json_encode($query->result());
        } else {
            // Employee_id not found in the table, return the result as JSON
            echo json_encode(0);
        }
    }

    public function removededuction()
    {
        $employeeid = $this->input->post('employeeid');
        $this->db->where('employee_id', $employeeid);
        $this->db->delete('salarydeduction');

        // Check for success or handle any errors
        if ($this->db->affected_rows() > 0) {
            // Deletion successful
            echo json_encode(1);
        } else {
            // No records were deleted
            echo json_encode(0);
        }
    }

    public function gettheattendancesheet()
    {
        // Load the configuration file
        $this->config->load('config');

        // Retrieve the value of 'excel_path' from the configuration
        $excel_path = $this->config->item('excel_path');

        if (file_exists($excel_path)) {
            // Read the Excel file content
            $file_content = file_get_contents($excel_path);

            // Encode the file content as base64
            $base64_data = base64_encode($file_content);

            // Send the base64-encoded file data as a JSON response
            echo json_encode($base64_data);
        }else{
            echo json_encode(0);
        }


    }

    public function gettheemployeesheet()
    {
        // Load the configuration file
        $this->config->load('config');

        // Retrieve the value of 'excel_path' from the configuration
        $excel_path = $this->config->item('employee_excel');

        if (file_exists($excel_path)) {
            // Read the Excel file content
            $file_content = file_get_contents($excel_path);

            // Encode the file content as base64
            $base64_data = base64_encode($file_content);

            // Send the base64-encoded file data as a JSON response
            echo json_encode($base64_data);
        }else{
            echo json_encode(0);
        }


    }

    public function  gettheresume()
    {
        $tableId = $this->input->post('tableId');

        $this->db->select('filePath');

        // Define the WHERE condition
        $this->db->where('id', $tableId);

        // Set the table name
        $this->db->from('tblusers');

        // Execute the query and get the result
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // Data found, return the results as an array
            $row = $query->row();
            $filepath = $row->filePath;

            if(file_exists($filepath))
            {
                $file_content = file_get_contents($filepath);

                // Encode the file content as base64
                $base64_data = base64_encode($file_content);

                // Send the base64-encoded file data as a JSON response
                echo json_encode($base64_data);
            }else{
                echo json_encode(1);
            }

        } else {
            // No data found
            echo json_encode(0);
        }

    }







}