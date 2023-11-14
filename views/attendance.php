<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <link href="assets/css/mdtimepicker.css" rel="stylesheet" type="text/css">
    <style>
        .whitespace-nowrap {
            font-size: 13px !important;
        }
        .sunday-row {
            background-color: cyan !important;
            color: black !important;
        }

        .sunday-row .login-time{
            background-color: cyan;
            color: black;
        }
        .sunday-row .logout-time{
            background-color: cyan;
            color: black;
        }
        .dataTables_filter {
            float: left !important;
            margin-left: 4%;
            display: none !important;
        }

        .dataTables_length {
            display: none !important;
        }

        .dataTables_info {
            display: none !important;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            width: 12rem;
        }

        .mb-4 {
            padding: 0px;
        }

        .text-xl {
            font-size: 16px !important;
            line-height: 1.75rem;
        }

        /* Style for the parent div */
        .container {
            display: flex;
            overflow-x: auto;
            /* Enable horizontal scrolling if necessary */
            white-space: nowrap;
            /* Prevent wrapping of divs */
        }

        /* Style for each div containing a table */
        .table-container {
            margin-right: 10px;
            /* Adjust the margin between divs as needed */
            border: 1px solid #ccc;
            overflow: hidden;
            /* Hide overflowing content */
        }

        /* Style for each table */
        .table-container table {
            width: auto;
            /* Allow tables to take their content width */
            border-collapse: collapse;
        }


        /* Style for table cells */
        .table-container td {
            padding: 8px;
            border: 1px solid #ccc;
        }
    </style>

</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
<!-- App preloader-->
<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
    <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
</div>

<!-- Page Wrapper -->
<div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
    <!-- Sidebar -->
    <div class="sidebar print:hidden">

        <!-- Sidebar Panel -->
        <?php include('sidebar.php');?>
    </div>

    <!-- App Header Wrapper-->
    <?php include('navbar.php');?>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Attendance
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                       href="#">Attendance</a>
                    <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </li>
                <li>Attendance</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">

                <!-- Dates filter from and to dates -->
                <div class="card p-3">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                        style="margin-botton:20px;">
                        From Date
                    </h2>
                    <label class="relative flex">
                        <input x-init="$el._x_flatpickr = flatpickr($el, {
                          altInput: true,
                          altFormat: 'F j, Y',
                           dateFormat: 'Y-m-d',
                           onChange: function(selectedDates, dateStr, instance) {
                           // This function will be called when the date is changed
                          handleDateChange();
                           }
                           })" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent fromandtodates"
                               placeholder="Choose date..." type="text" id="from-date" />
                        <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                    </label>

                </div>



            </div>
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <div class="card p-3">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                        style="margin-botton:20px;">
                        To Date
                    </h2>
                    <label class="relative flex">
                        <input x-init="$el._x_flatpickr = flatpickr($el, {
                           altInput: true,
                           altFormat: 'F j, Y',
                           dateFormat: 'Y-m-d',
                           onChange: function(selectedDates, dateStr, instance) {
                            // This function will be called when the date is changed
                           handleDateChange();
                           }
                           })" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent fromandtodates"
                               placeholder="Choose date..." type="text" id="to-date" />
                        <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                    </label>


                </div>

            </div>





        </div>

        <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;padding-top: 1rem;">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Attendance Filter
            </h2>

            <div class="grid grid-cols-4 gap-4 sm:grid-cols-4 sm:gap-5 lg:grid-cols-4 lg:gap-6 xl:grid-cols-4">
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <div class=" p-3 datepikcerdiv">
                        <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                            style="margin-botton:20px;">
                            Attendance datewise
                        </h2>
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, {
                         altInput: true,
                          altFormat: 'F j, Y',
                          dateFormat: 'Y-m-d',
                           onChange: function(selectedDates, dateStr, instance) {
                           // This function will be called when the date is changed
                           onchangedatefunction(dateStr);
                            }
                           })" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent fromandtodates"
                                   placeholder="Choose date..." type="text" id="to-date" />
                            <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </span>
                        </label>

                    </div>

                </div>

                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <div class=" p-3">
                        <label class="block" style="margin-botton:20px;">
                                <span
                                        class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Employees list</span>
                        </label>

                        <div style="position: relative;" class="select-cont">
                            <select class="js-example-basic-single filter-dropdown" name="state"
                                    style="width: 100%;" id="employeelist" >

                            </select>
                        </div>


                    </div>
                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <div class=" p-3">
                        <label class="block" style="margin-botton:20px;">
                                <span
                                        class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Team Manager</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state"
                                    style="width: 100%;" id="teammanager"
                                    onchange="getmappedteamleader();toloademployeelist();">

                            </select>
                        </div>


                    </div>
                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <div class=" p-3">
                        <label class="block" style="margin-botton:20px;">
                                <span
                                        class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Team Leader</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state"
                                    style="width: 100%;" id="teamleader" onchange="toloademployeelist();">

                            </select>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <!-- Zebra Table -->
        <!-- Begins -->
        <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;padding-top: 1rem;">

            <input type="hidden" id="joingdatehold" value="0" />
            <input type="hidden" id="employeenamevalehold" value="0" />
            <input type="hidden" id="empidvaluehold" value="0" />
            <input type="hidden" id="jobnamevaluehold" value="0" />
            <div class="my-3 flex h-8 items-center justify-between">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                    style="margin-bottom: 2rem;">
                    Attendance Table
                </h2>


            </div>
            <div class="">
                <div style="position: absolute;right: 53px;display: flex;z-index: 1000;top: 48px;"
                     class="hide-init">
                    <div class="">
                        <label class="block" style="margin-right: 2rem;">
                            <span>Joined Date</span>
                            <span class="relative mt-1.5 flex">
                                    <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Joining Date" type="text" id="joiningdate" readonly="readonly" />

                                    <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <i class="far fa-user text-base"></i>
                                    </span>
                                </span>
                        </label>
                    </div>

                    <div class="">
                        <label class="block" style="margin-right: 2rem;">
                            <span>Employee Name</span>
                            <span class="relative mt-1.5 flex">
                                    <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Employee name" type="text" id="employeename" readonly="readonly" />

                                    <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <i class="far fa-user text-base"></i>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <div>
                        <label class="block" style="margin-right: 2rem;">
                            <span>Designation</span>
                            <span class="relative mt-1.5 flex">
                                    <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Designation name" type="text" id="designationnane"
                                            readonly="readonly" />
                                    <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <i class="far fa-user text-base"></i>

                                    </span>
                                </span>
                        </label>
                    </div>
                    <div>
                        <label class="block" style="margin-right: -2rem;">
                            <span>Employee ID</span>
                            <span class="relative mt-1.5 flex">
                                    <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Employee ID" type="text" id="empID" readonly="readonly" />
                                    <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <i class="far fa-user text-base"></i>

                                    </span>
                                </span>
                        </label>
                    </div>

                </div>
                <div class="table-responsive" style="margin-top: 4rem;">
                    <div class="table-responsive" id="table-container">

                    </div>
                </div>

            </div>


        </div>

    </main>
</div>
<!--
    This is a place for Alpine.js Teleport feature
    @see https://alpinejs.dev/directives/teleport
  -->
<div id="x-teleport-target"></div>
<?php include('scriptsbottom.php');?>
<script src="assets/js/mdtimepicker.js"></script>

<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());

    // ****************** Attendance via another page *******************************************


    // ****************** Attendance via another page *******************************************



    $(document).ready(function () {


        domreadyfunction();
        $('.datepikcerdiv').hide();
        var appPreloader = $(
            '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
        )
            .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

        // Append the appPreloader div as the first child of the body
        $('body').prepend(appPreloader);


        $('.menu-toggle').click();
        $('.js-example-basic-single').select2();
        $('.app-preloader').remove();

    });


    $(document).ajaxStop(function () {

        console.log("All AJAX requests completed");
        $('.select-cont').off('change', '.filter-dropdown').on('change', '.filter-dropdown', function () {

        });
        $('.app-preloader').remove();



    });


    const currentDate = new Date();
    // Get the year, month, and day components
    const year = currentDate.getFullYear();
    const month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are 0-indexed
    const day = currentDate.getDate().toString().padStart(2, '0');

    // Format the date as "yyyy-MM-dd"
    const formattedDate = `${year}-${month}-${day}`;

    let flag = false;
    // loading table

    var selection = document.getElementById("employeelist");

    // From the dropdown goes  calling the calendar
    selection.onchange = function (event) {

        var empid = $('#employeelist').val();
        var joiingdatehold = document.getElementById("joingdatehold");
        var employeenamevalue = document.getElementById("employeenamevalehold");
        var emplidvalue = document.getElementById("empidvaluehold");
        var jobnamevaluehold = document.getElementById("jobnamevaluehold");
        if (empid == 0) {
            $('.datepikcerdiv').hide();
        } else {
            $('.datepikcerdiv').show();
        }
        var jobname = event.target.options[event.target.selectedIndex].dataset.jb;
        var joiningdate = event.target.options[event.target.selectedIndex].dataset.jd;
        var employeename = event.target.options[event.target.selectedIndex].dataset.name;

        employeenamevalue.value = employeename;
        emplidvalue.value = empid;
        jobnamevaluehold.value = jobname;
        joiingdatehold.value = joiningdate;

        if (empid != 0 && employeename != undefined && jobname != undefined && joiningdate != undefined) {

            getuserAttendanceLog(empid, employeename, jobname, joiningdate);

        } else {
            $('#empID').val('');
            $('#designationnane').val('');
            $('#employeename').val('');
            $('#joiningdate').val('');
            joiingdatehold.value = "0";
        }
        // Enable the input field



    };

    // From the date picker calling the calendar
    function onchangedatefunction(selecteddate) {

        var selectedates = new Date(selecteddate);

        var joiingdatehold = document.getElementById("joingdatehold");
        var employeenamevalue = document.getElementById("employeenamevalehold");
        var emplidvalue = document.getElementById("empidvaluehold");
        var jobnamevaluehold = document.getElementById("jobnamevaluehold");

        var getuserAttendcelogurl = "<?= base_url('api/get-attedancelog'); ?>";
        $.ajax({
            url: getuserAttendcelogurl,
            data: {
                empid: emplidvalue.value
            }, // Replace with your actual domain
            method: 'POST',
            dataType: 'json', // Expect JSON response
            success: function (attendancelog) {
                if (attendancelog) {

                    callcalender(emplidvalue.value, employeenamevalue.value, jobnamevaluehold.value,
                        joiingdatehold.value, attendancelog, selectedates);
                } else {
                    callcalender(emplidvalue.value, employeenamevalue.value, jobnamevaluehold.value,
                        joiingdatehold.value, attendancelog, selectedates);
                }
            }
        });
    }

    // Common function to get the employee attendance log if present
    function getuserAttendanceLog(empid, employeename, jobname, joiningdate) {

        const thisisthecurrentdate = new Date();
        var getuserAttendcelogurl = "<?= base_url('api/get-attedancelog'); ?>";
        $.ajax({
            url: getuserAttendcelogurl,
            data: {
                empid: empid
            }, // Replace with your actual domain
            method: 'POST',
            dataType: 'json', // Expect JSON response
            success: function (attendancelog) {
                if (attendancelog) {

                    callcalender(empid, employeename, jobname, joiningdate, attendancelog,
                        thisisthecurrentdate);
                } else {
                    callcalender(empid, employeename, jobname, joiningdate, attendancelog,
                        thisisthecurrentdate);
                }
            }
        });

    }

    // Calling the calendar with all neccesary fields
    function callcalender(empid, employeename, jobname, joiningdate, attendancelog, date) {
        var joiingdatehold = document.getElementById("joingdatehold");
        $('#empID').val(empid);
        $('#designationnane').val(jobname);
        $('#employeename').val(employeename);
        $('#joiningdate').val(joiningdate);
        joiingdatehold.value = joiningdate;
        updateCalendar(joiningdate, attendancelog, date);
        intializesavebtn(empid, employeename);
    }

    // *******************   This is the Calendar function to load the employee attendance log  ****************************
    function updateCalendar(selectedDate, attendancelog, receiveddate) {
        $('.app-preloader').remove();



        const selectedDates = new Date(selectedDate);
        const tableContainer = $("#table-container");
        tableContainer.empty(); // Clear the existing table, if any

        var joiingdatehold = document.getElementById("joingdatehold");
        if (joiingdatehold.value != "0") {}

        // Create a dictionary for the attendancelog data indexed by date
        const attendancelogData = {};
        if (attendancelog != undefined) {
            attendancelog.forEach(entry => {
                attendancelogData[entry.logdate] = entry;
            });
        }


        // Create the table element
        const table = $("<table></table>").attr({
            id: "calendar",
            class: "table table-striped table-bordered table-hover dataTables-example dataTable no-footer",
        });

        // Create the table head (thead) element
        const thead = $("<thead></thead>");

        // Create the table header row (tr) element
        const headerRow = $("<tr></tr>").addClass(
            "border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
        );

        // Define the header column titles
        const headerColumns = [
            "Date",
            "Logged In Time",
            "Logged Out Time",
            "Total Worked Hours",
            "Status",
            "Choose",
            "Action",
        ];

        // Create table header cells (th) and append them to the header row
        headerColumns.forEach((columnTitle) => {
            const th = $("<th></th>").addClass(
                "thclass whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
            ).text(columnTitle);
            headerRow.append(th);
        });

        // Append the header row to the thead element
        thead.append(headerRow);

        // Create the table body (tbody) element
        const tbody = $("<tbody></tbody>");

        const currentYear = receiveddate.getFullYear();
        const selectedMonth = receiveddate.getMonth() + 1;

        const nowpresntdate = new Date();

        const year3 = nowpresntdate.getFullYear();
        const month3 = (nowpresntdate.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
        const day3 = nowpresntdate.getDate().toString().padStart(2, '0');

        const formattedDate3 = `${year3}-${month3}-${day3}`;

        let newRow;

        if (joiingdatehold.value > formattedDate3) {
            toastr["warning"]("Employee Joining date Yet to come");
            $('.datepikcerdiv').hide();
            return;
        }
        // Create rows for the selected month
        for (let day = 1; day <= new Date(currentYear, selectedMonth, 0).getDate(); day++) {
            const date =
                `${currentYear}-${selectedMonth.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
            const isPastDate = new Date(date);

            const year2 = isPastDate.getFullYear();
            const month2 = (isPastDate.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
            const day2 = isPastDate.getDate().toString().padStart(2, '0');

            const formattedDate = `${year2}-${month2}-${day2}`;

            let status = joiingdatehold.value === date ? "Joined Date" : "";

            let saveButton = '';

            // Convert the date strings to Date objects
            const currentDate = new Date(formattedDate);
            const joiningDate = new Date(joiingdatehold.value);

            // Get the current date without the time component
            const currentDateWithoutTime = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth(),
                currentDate.getDate()
            );

            // Get the joining date without the time component
            const joiningDateWithoutTime = new Date(
                joiningDate.getFullYear(),
                joiningDate.getMonth(),
                joiningDate.getDate()
            );

            if (currentDateWithoutTime >= joiningDateWithoutTime && currentDateWithoutTime <= new Date()) {
                saveButton =
                    '<button class="save-button btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover-bg-primary-focus focus-bg-primary-focus active-bg-primary-focus/90 dark-bg-accent dark-hover-bg-accent-focus dark-focus-bg-accent-focus dark-active-bg-accent/90">Save</button>';
            }



            // Check if the current day is a Sunday (day 0)
            const isSunday = currentDate.getDay() === 0;

            // Add a CSS class to change the background color for Sundays
            const rowClass = isSunday ? "sunday-row" : "";


            newRow = `<tr id="${date}" class="${rowClass}">
               <td class="datval whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px;">${date}</td>
               <td class="logintime whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px;"><input type="text" class="login-time timepicker" onchange='calculateTotalWorkedHours();'></td>
               <td class="logoutime whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px;"><input type="text" class="logout-time timepicker" onchange='calculateTotalWorkedHours();'></td>
               <td class="total-hours whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px;"></td>
               <td class="statuscol whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px">${status}<span class="toappendstatus"></span></td>
               <td class="whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px;">
        <div class="relative mt-1.5 flex">
            <select class="financial-action-dropdown js-example-basic-single" style="width: 100%;">
                <option value="0">--select--</option>
                <option value="1">Present</option>
                <option value="2">Absent</option>
                <option value="3">Leave</option>
                <option value="4">Late</option>
                <option value="5">WFH</option>
                <option value="6">Halfday</option>
            </select>
        </div>
        </td>
        <td class="whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5" style="padding:15px;">
         ${saveButton}
      </td>
     </tr>`;

            // Append the new row to the tbody
            tbody.append(newRow);
        }

        // Append the thead and tbody to the table
        table.append(thead);
        table.append(tbody);
        console.log(table);

        // Append the table to the table container
        tableContainer.append(table);
        if (!$.fn.DataTable.isDataTable('.dataTables-example')) {
            // DataTable is not initialized, so initialize it
            tables = $('.dataTables-example').DataTable({
                pageLength: -1,
                scrollX: true,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
            });
        }

        $('.timepicker').mdtimepicker();
        $('.js-example-basic-single').select2();
        $('.thclass').click();

        // Get the table by its id
        const table1 = document.getElementById('calendar');

        // Get all the tr elements within the table's tbody
        const trElements = Array.from(table1.querySelectorAll('tbody tr'));
        // Reverse the order of the tr elements
        trElements.reverse();

        // Remove all tr elements from the tbody
        const tbody1 = table1.querySelector('tbody');
        tbody1.innerHTML = '';

        // Append the tr elements in the reversed order
        trElements.forEach(trElement => {
            tbody1.appendChild(trElement);
        });

        // Get all the table rows
        const tableRows = Array.from(table1.querySelectorAll('tbody tr'));

        // Sort the table rows based on the id attribute (which contains the date)
        tableRows.sort((row1, row2) => {
            const date1 = row1.id;
            const date2 = row2.id;
            if (date1 < date2) {
                return -1;
            } else if (date1 > date2) {
                return 1;
            } else {
                return 0;
            }
        });

        // Append the sorted rows back to the table
        const tbody2 = document.querySelector('tbody'); // Adjust the selector as needed
        tableRows.forEach(row => tbody2.appendChild(row));


        tableRows.forEach(row => {
            var dateCell = row.querySelector('.datval').textContent;
            var loginTimeCell = row.querySelector('.logintime input');
            var logoutTimeCell = row.querySelector('.logoutime input');
            var statusCol = row.querySelector('.statuscol');
            var totalworkedhoursCol = row.querySelector('.total-hours');
            var toappendStatus = statusCol.querySelector('.toappendstatus');

            var financialDropdown = row.querySelector('.financial-action-dropdown');
            if (attendancelogData[dateCell]) {
                const logEntry = attendancelogData[dateCell];
                console.log(logEntry);

                dateCell.textContent = ''; // Empty the content of the date cell
                loginTimeCell.value = ''; // Empty the value of the login time input
                logoutTimeCell.value = ''; // Empty the value of the logout time input
                toappendStatus.innerHTML = '';
                totalworkedhoursCol.textContent = '';

                // Set dropdown value and trigger the change event
                financialDropdown.value = 0; // Set the default value (0), you can change it as needed
                $(financialDropdown).trigger('change');

                // Empty the content of the status column, except the .toappendstatus span
                toappendStatus.innerHTML = '</br>' + logEntry.statustext;

                // Populate login time cell
                loginTimeCell.value = logEntry.logintime;
                logoutTimeCell.value = logEntry.logouttime;
                totalworkedhoursCol.textContent = logEntry.workedhours;

                // Set dropdown value and trigger the change event
                financialDropdown.value = logEntry.statusvalue;
                $(financialDropdown).trigger('change');
                // Append status text to the status column


            }

        });
    }


    // *******************   This is the Calendar function to load the employee attendance log  ****************************



    function intializesavebtn(empid, employeename) {
        $(document).on('click', '.save-button', function () {

            const $row = $(this).closest('tr');

            const $dropdown = $row.find('.financial-action-dropdown');
            const selectedText = $dropdown.find('option:selected').text();
            const loginTime = $row.find('.login-time').val();
            if ($dropdown.val() == 0) {
                // Append the selected option text to an element within the same row with the class 'statuscol'

                toastr["warning"]("Please Select the status to update");

            } else if (loginTime == '') {

                toastr["warning"]("Update Login Time to Update");

            } else {
                var $statusCol = $row.find('.statuscol');
                var $spanToAppend = $statusCol.find('.toappendstatus');
                if ($spanToAppend.length) {
                    // If the span is present, append the selected text inside it
                    $spanToAppend.html("</br>" + selectedText);
                }



                function createFormData(checkcuurrentval) {
                    if(checkcuurrentval == empid){
                        return {
                            logdate: $row.find('.datval').text(),
                            logintime: $row.find('.login-time').val(),
                            logouttime: $row.find('.logout-time').val(),
                            workedhours: $row.find('.total-hours').text(),
                            employee_id: empid,
                            employee_name: employeename,
                            statusvalue: $dropdown.val(),
                            statustext: $row.find('.statuscol .toappendstatus').text()
                        };
                    }

                }

                var checkcuurrentval = $('#empID').val();

                var postattendnacelog = "<?= base_url('api/post-attedancelog'); ?>";
                $.ajax({
                    url: postattendnacelog, // Replace with your actual domain
                    method: 'POST',
                    data: createFormData(checkcuurrentval), // Send the data object
                    dataType: 'json', // Expect JSON response
                    success: function (response) {
                        console.log(response);

                        if (response) {
                            toastr["success"]("Attendance log updated successfully");

                        } else {
                            toastr["error"]("Something went wrong");


                        }


                    }
                });
            }

        });


    }

    // Converting time to valid date objects
    function convertTimeTo24HourFormat(timeStr) {
        var parts = timeStr.split(/[:\s]+/);
        var hours = parseInt(parts[0], 10);
        var minutes = parseInt(parts[1], 10);
        var meridian = parts[2].toUpperCase();

        if (meridian === 'PM' && hours !== 12) {
            hours += 12;
        } else if (meridian === 'AM' && hours === 12) {
            hours = 0;
        }

        const formattedHours = hours.toString().padStart(2, '0');
        const formattedMinutes = minutes.toString().padStart(2, '0');

        return `${formattedHours}:${formattedMinutes}`;
    }

    function calculateTotalWorkedHours() {
        // Iterate through each row in the table
        $("#calendar tbody tr").each(function () {
            const $row = $(this);
            const loggedInTime = $row.find(".login-time").val();
            const loggedOutTime = $row.find(".logout-time").val();

            if (loggedInTime && loggedOutTime) {
                const formattedLoggedInTime = convertTimeTo24HourFormat(loggedInTime);
                const formattedLoggedOutTime = convertTimeTo24HourFormat(loggedOutTime);
                // Parse time strings to Date objects
                const loggedInDate = new Date(`2000-01-01T${formattedLoggedInTime}`);
                const loggedOutDate = new Date(`2000-01-01T${formattedLoggedOutTime}`);
                // Calculate the time difference in milliseconds
                const timeDifference = loggedOutDate - loggedInDate;

                // Convert milliseconds to hours (or any desired format)
                const hours = Math.floor(timeDifference / 1000 / 60 / 60);
                const minutes = Math.floor((timeDifference / 1000 / 60) % 60);

                let formattedTime = "";
                if (hours > 0) {
                    formattedTime += hours + " hr ";
                }
                if (minutes > 0) {
                    formattedTime += minutes + " min";
                }

                // Update the "Total worked hours" column
                $row.find(".total-hours").text(formattedTime);
            } else {
                // Handle cases where either login or logout time is not filled
                $row.find(".total-hours").text(""); // Clear the value
            }
        });
    }




    function dropdownlist() {
        var managerURL = "<?= base_url('api/get-teammanager'); ?>";
        $.ajax({
            url: managerURL, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                const selectElement = document.getElementById("teammanager");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((manager) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = manager.manager_id;
                    optionElement.textContent = manager.manager_name;
                    selectElement.appendChild(optionElement);
                });
                $('#teammanager').trigger('change');

            }
        });


    }
    dropdownlist();

    function getmappedteamleader() {

        var managervalue = parseInt($("#teammanager").val()) || 0;

        if (managervalue != 0) {
            var getteamderurl = "<?= base_url('api/get-teamleaderdropdown'); ?>";
            $.ajax({
                url: getteamderurl,
                data: {
                    managervalue: managervalue
                }, // Replace with your actual domain
                method: 'POST',
                dataType: 'json', // Expect JSON response
                success: function (response) {
                    $('#teamleader').empty();

                    const selectElement = document.getElementById("teamleader");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--select--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements
                    response.forEach((teamleader) => {
                        const optionElement = document.createElement("option");
                        optionElement.value = teamleader.team_leader_id;
                        optionElement.textContent = teamleader.team_leader_name;
                        optionElement.setAttribute('manager_id', teamleader.manager_id);
                        selectElement.appendChild(optionElement);
                    });

                    $('#teamleader').trigger('change');

                }
            });
        } else {
            $('#teamleader').empty();
        }


    }

    function handleDateChange() {
        //    debugger;


        // Get the selected date range in the date picker format
        let fromDate = $('#from-date').val(); // Format: "mm/dd/yyyy"
        let toDate = $('#to-date').val(); // Format: "mm/dd/yyyy"



        // Check if both "from" and "to" dates are filled
        if (fromDate !== '' && toDate !== '') {
            // Convert the date range to the "YYYY-MM-DD" format
            const fromDateConverted = fromDate;
            const toDateConverted = toDate;

            // Custom search function to filter records within the date range
            $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
                const applicationDate = moment(data[0],
                    'YYYY-MM-DD'); // Assuming the date is in column 6
                const startDate = moment(fromDateConverted);
                const endDate = moment(toDateConverted);

                // Check if the application date falls within the selected date range
                if (applicationDate >= startDate && applicationDate <= endDate) {
                    return true;
                }

                return false;
            });

            // Apply the search and redraw the DataTable
            tables.draw();

            // Remove the custom search function after filtering
            $.fn.dataTable.ext.search.pop();


        }

        // Get the table by its id
        const table1 = document.getElementById('calendar');

        // Get all the tr elements within the table's tbody
        const trElements = Array.from(table1.querySelectorAll('tbody tr'));
        // Reverse the order of the tr elements
        trElements.reverse();

        // Remove all tr elements from the tbody
        const tbody1 = table1.querySelector('tbody');
        tbody1.innerHTML = '';

        // Append the tr elements in the reversed order
        trElements.forEach(trElement => {
            tbody1.appendChild(trElement);
        });

        // Get all the table rows
        const tableRows = Array.from(table1.querySelectorAll('tbody tr'));

        // Sort the table rows based on the id attribute (which contains the date)
        tableRows.sort((row1, row2) => {
            const date1 = row1.id;
            const date2 = row2.id;
            if (date1 < date2) {
                return -1;
            } else if (date1 > date2) {
                return 1;
            } else {
                return 0;
            }
        });

        // Append the sorted rows back to the table
        const tbody2 = document.querySelector('tbody'); // Adjust the selector as needed
        tableRows.forEach(row => tbody2.appendChild(row));



    }

    function toloademployeelist() {
        var managervalue = parseInt($("#teammanager").val()) || 0;
        var teamleader = parseInt($("#teamleader").val()) || 0;

        var empURL = "<?= base_url('api/get-employeeslist'); ?>";
        $.ajax({
            url: empURL, // Replace with your actual domain
            method: 'POST',
            dataType: 'json',
            data: {
                managervalue: managervalue,
                teamleader: teamleader
            }, // Expect JSON response
            success: function (response) {
                $('#employeelist').empty();
                console.log(response);
                const selectElement = document.getElementById("employeelist");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((employeelist) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = employeelist.id;
                    optionElement.textContent = employeelist.FirstName;
                    optionElement.setAttribute('data-jb', employeelist.job_name);
                    optionElement.setAttribute('data-jd', employeelist.joiningdate);
                    optionElement.setAttribute('data-name', employeelist.FirstName);
                    selectElement.appendChild(optionElement);
                });
                $('#employeelist').trigger('change');

            }
        });


    }
    toloademployeelist();
</script>
</body>

</html>