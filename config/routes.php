<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'signin';
$route['404_override'] = 'errors/index';
$route['translate_uri_dashes'] = FALSE;
$route['api/get-data'] = 'api/get_data';
// for posting new lead
$route['api/lead-post-data']='api/insert_leadpost_data';
// getting leadsource dropdown
$route['api/get-leadsource']='api/getLeadsource';
// getting leadmicrosource dropdown
$route['api/get-leadmicrosource']='api/getLeadmicrosource';
// getting leadmicrosource dropdown
$route['api/get-singlemicrosource']='api/getSinglemicrosource';
// getting lead status
$route['api/get-leadstatus']='api/getLeadstatus';
// getting team manager list
$route['api/get-teammanager']='api/getTeammanager';
// getting team leader list
$route['api/get-teamleader']='api/getTeamleader';
// getting team caller list
$route['api/get-teamcaller']='api/getTeleCaller';
// getting mode of admission dropdown
$route['api/get-moa']='api/getMoa';
// getting the universities list
$route['api/get-universitieslist']='api/getUniversities';
// getting course list
$route['api/get-courselist']='api/getCourselist';
// getting collection type list
$route['api/get-collectiontypelist']='api/getCollectiontypelist';
// getting sub collection list
$route['api/get-subcollectionlist']='api/getSubcollectionlist';
// getting vendor list
$route['api/get-vendorlist']='api/getVendorlist';
// getting payment mode list
$route['api/get-paymentmodelist']='api/getPaymentmodelist';
// getting bank list
$route['api/get-banklist']='api/getBanklist';
// getting leads counts in dashboard
$route['api/get-leadcounts']='api/getleadsinfo';
// getting leads counts in dashboard with from and to dates
$route['api/get-leadcountsbasedondates']='api/getleadsdatefilter';
// getting projection list in page
$route['api/get-projectionlist']='api/getprojectionlist';
// getting projection filterd list
$route['api/get-filteredprojectionlist']='api/getfilteredprojectionlist';
// updating the projection list
$route['api/update-projectionlist']='api/Updateprojectionlist';
// Importing excel sheet
$route['api/upload-excel']='api/temppostdataintotable';
// getting lead source counts detailed wise
$route['api/getting-leadsourcecounts']='api/getLeadsourcecounts';
// get the lead source counts datewise
$route['api/get-sourcecountsdatewise']='api/sourcecountsgetdatewise';
// getting the collection result
$route['api/get-collectiondata']='api/getcollectiondata';
// filtering collection data count
$route['api/get-filteredcollectiondata']='api/getfilteredcollectiondata';
// filter collection data based on date
$route['api/get-collectiondatadatewise']='api/datewisefiltercollection';
// get incollection list counts
$route['api/get-incollectioncounts']='api/getIncollectionCounts';
// referenced by dropdowns
$route['api/get-referencedby']='api/getReferencedBy';
// getting jobs dropdowns
$route['api/get-jobstable']='api/getJobs';
// candidate details post
$route['api/post-candidate']='api/postCandidate';
// get the list of candidate list
$route['api/get-candidatelist']='api/getCandidateList';
// get the interview status dropdown value
$route['api/get-interviewstatus']='api/getInterviewStatus';
// changing the interview status
$route['api/post-changeinterviewstatus']='api/postchangestatus';
// Employeee Query Form Post to Tblusers table
$route['api/post-employeequeryform']='api/postcemployeequeryform';
// get dashboard data
$route['api/get-candidatedashboarddata']='api/getCandidateDashboard';
// get the mode of salary
$route['api/get-modeofsalary']='api/getModeofSalary';
// get the employee list who are live and sentout
$route['api/get-employeelist']='api/getEmployeelist';
// getting teamleader dropdown
$route['api/get-teamleaderdropdown']='api/getTemaleaderdropdown';
// assiging teamanger , teamleaderd
$route['api/post-assiginingrespectives']='api/Postassigingrespectives';
// assiging teamanger , teamleaderd
$route['api/get-assignedEmployees']='api/getAssignedEmployees';
// update the job status
$route['api/post-jobstatus']='api/postjobstatus';
// employees list
$route['api/get-employeeslist']='api/getEmployeelistdropdwon';
// attendance log post
$route['api/post-attedancelog']='api/PostAttendancelog';
// get the attendance log
$route['api/get-attedancelog']='api/GetAttendancelog';
// get the certificate details
$route['api/get-certificatedetails']='api/getCertificateDetails';
// get  tblrecords with id
$route['api/get-tblusersrecords']='api/gettblrecords';
// get live users and sentout users
$route['api/get-liveandsentoutusers']='api/getLiveandSentoutusers';
// get the attendance report summary
$route['api/get-attendancereportsummary']='api/getEmployeeAttendanceSummary';
// salary dashboard 
// mode of salary wise
$route['api/modeofsalarytotals']='api/calculateSalaryModeTotals';
// mode of teamanager wise
$route['api/modeofsalaryteamwise']='api/calculateSalaryModeTotalsTeamwise';
//get the attendance report of all consolidate
$route['api/getconsolidateattendance']='api/getconsolidateattendancereport';
//get today attendance report
$route['api/gettodayattendancereport']='api/gettodayattendancereport';
//update the salary deduction for the month
$route['api/updatesalarydeduction']='api/salarydeduction';
//check if already deducted
$route['api/checkalreadydeducted']='api/checkalreadydeducted';
//remove the deduction
$route['api/removededuction']='api/removededuction';
//get the attendance bulk upload sheet
$route['api/gettheattendancesheet']='api/gettheattendancesheet';
//get the attendance bulk upload sheet
$route['api/gettheemployeesheet']='api/gettheemployeesheet';
//get the file path
$route['api/gettheresume']='api/gettheresume';
