<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

//*************** Error Codes for this Application  *******************************
// application/config/constants.php

// Success codes
define('SUCCESS_INSERT', 1);
define('SUCCESS_UPDATE',2);
// Error codes
define('ERROR_INSERT', 1001);
define('ERROR_INVALID_REQUEST', 1002);
define('INVALID_FORMAT',1003);
define('PROCEDURE_ERROR', 5001);
define('NODATA',1004);
 // Use any error code you prefer

//Success and Error messages
// In your configuration or constants file
define('ERROR_MESSAGES', array(
    SUCCESS_INSERT => 'Form data inserted into table successfully',
    ERROR_INSERT => 'Failed to insert form data into the table',
    ERROR_INVALID_REQUEST => 'Invalid request method',
    PROCEDURE_ERROR=>'Procedure Error occured',
    INVALID_FORMAT=>'Data Format is Invalid',
    NODATA =>'No data is found',
    SUCCESS_UPDATE=> 'Data is updated successfully',
));


define('COMMON_URL', 'http://localhost/dashProjectdemo/');
//Api url to call the data
define('API_URL', COMMON_URL .'api/get_data');

//Api url to post the data
define('POST_URL', COMMON_URL .'Welcome/post_data');
define('LEAD_POST_URL', COMMON_URL .'Newlead/lead_post');

//Api url to get the no of records
define('RECORDS_URL', COMMON_URL .'Welcome/get_total_records');

//Api url to get the no of records
define('LEAD_LIST_RECORDS',COMMON_URL . 'Leadlist/get_lead_Reocrds');

//Api url to get the no of records
define('ALL_RECORDS_URL',COMMON_URL . 'Welcome/get_student_report');

//Common Api Url


define('PROJECTS_LIST', COMMON_URL.'Leadlist/getprojectlist');

define('ALL_FILTER_VAR', COMMON_URL.'Leadlist/getleadfilterlist');
define('DASHBOARD_VAR', COMMON_URL.'Leadsdashboard/getleadsinfo');
define('DASHBOARD_VAR_DATE_FILTER', COMMON_URL.'getleadsdatefilter');
define('IMPORT_DATA', COMMON_URL.'Importlead/postdataintotable');
define('NOT_ASSIGNED_LIST', COMMON_URL.'Assignlead/notassignedlist');
define('UPDATE_LEADS', COMMON_URL.'Assignlead/updateleads');
// Temp pages
define('TEMP_IMPORT_DATA', COMMON_URL.'Tempimport/temppostdataintotable');
define('TEMP_ASSIGN', COMMON_URL.'Tempassign/Yettoassign');
define('GET_ALL_EMPLOYEES', COMMON_URL.'Tempassign/getemployeeslist');
define('ASSIGN_BULK', COMMON_URL.'Tempassign/updatebulkemployeelist');
define('DASHBOARD_VAR_DATE_FILTER_TEMP', COMMON_URL.'Tempdashboard/getleadsdatefilter');
define('DASHBOARD_VAR_TEMP', COMMON_URL.'Tempdashboard/getleadsinfo');
define('LEAD_LIST_RECORDS_TEMP', COMMON_URL.'Templeadlist/TempRecords');
define('ALL_FILTER_VAR_TEMP', COMMON_URL.'Templeadlist/TempLeadfilterlist');
define('LEAD_POST_URL_TEMP', COMMON_URL.'Templeadlist/TempUpdatelist');

// Projection pages
define('LEAD_LIST_RECORDS_TEMP_PROJECTION', COMMON_URL.'Projectionlist/TempProjectionRecords');
define('ALL_FILTER_VAR_TEMP_PROJECTION', COMMON_URL.'Projectionlist/TempProjectionLeadfilterlist');

define('MODE_OF_ADMISSION', COMMON_URL.'Projectionlist/Modeofadmission');
define('PROJECTION_STATUS', COMMON_URL.'Projectionlist/Projectionstatus');
define('UNIVERSITIES_LIST', COMMON_URL.'Projectionlist/Universitylist');
define('PROJECTION_SOURCE_LIST', COMMON_URL.'Projectionlist/Sourcelist');
define('COURSE_LIST', COMMON_URL.'Projectionlist/Courselist');
define('PROJECTION_LIST_UPDATE', COMMON_URL.'Projectionlist/Updateprojectionlist');
define('COLLECTION_TYPE_LIST', COMMON_URL.'Projectionlist/Collectionlist');
define('SUB_COLLECTION', COMMON_URL.'Projectionlist/SubCollectionlist');
define('PAYMENT_MODE', COMMON_URL.'Projectionlist/Paymentmodelist');
define('VENDOR_LIST', COMMON_URL.'Projectionlist/Vendorlist');
define('BANK_LIST', COMMON_URL.'Projectionlist/BAnklist');
define('DASHBOARD_VAR_PROJECT', COMMON_URL.'Projectiondashboard/getleadsinfoprojection');
define('DASHBOARD_VAR_PROJECT_FILTER', COMMON_URL.'Projectiondashboard/getleadsdatefilterProjection');


// Collection list
define('GET_COLLECTION_LIST', COMMON_URL.'Collectionlist/getCollectionlist');
define('UPDATE_CONVERTED', COMMON_URL.'Projectionlist/Updateconverted');
define('CANDIDATE_LIST', COMMON_URL.'Candidatelist/getCandidateList');

