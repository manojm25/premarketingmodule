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

                    <!-- Dates filter from and to dates -->
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
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
                    <div class="space-y-4 sm:space-y-5 lg:space-y-6">

                        <!-- Dates filter from and to dates -->
                        <div class="card p-3">
                            <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                                style="margin-botton:20px;">
                                Select Attendance Date
                            </h2>
                            <label class="relative flex">
                                <input x-init="$el._x_flatpickr = flatpickr($el, {
                          altInput: true,
                          altFormat: 'F j, Y',
                           dateFormat: 'Y-m-d',
                           onChange: function(selectedDates, dateStr, instance) {
                           // This function will be called when the date is changed
                          triggerattendnace();
                           }
                           })" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent fromandtodates"
                                       placeholder="Choose date..." type="text" id="attedancedate" />
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
                <div class="mt-5 grid grid-cols-1 gap-4 px-4 sm:grid-cols-4 sm:px-5">

                    <div
                            class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5">
                        <p class="text-xs uppercase text-amber-50">Today present</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white todaypresentcount"></p>

                        </div>
                        <div class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                            class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5">
                        <p class="text-xs uppercase text-sky-100">Today Absent</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white todayabsentcount"></p>

                        </div>
                        <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                        </div>
                    </div>
                    <div
                            class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Today late</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white todaylatecount"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5"
                         style="--tw-gradient-to: #5272F2;--tw-gradient-from: #5272F2;">
                        <p class="text-xs uppercase text-pink-100">Today Leave</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white todayleavecount"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5"
                         style="--tw-gradient-to: #008170;--tw-gradient-from: #008170;">
                        <p class="text-xs uppercase text-sky-100">Today Halfday Leave</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white todayhalfdayleavecount"></p>

                        </div>
                        <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                        </div>
                    </div>

                </div>

                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Attendance Report -- Day wise
                    </h2>



                </div>
                <div class="">
                    <div class="table-responsive" id="daywise-individual-month">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;padding-top: 1rem;">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Attendance Filter
                </h2>

                <div class="grid grid-cols-3 gap-4 sm:grid-cols-3 sm:gap-5 lg:grid-cols-4 lg:gap-6 xl:grid-cols-3">


                    <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                        <div class=" p-3">
                            <label class="block" style="margin-botton:20px;">
                                <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Employees list</span>
                            </label>

                            <div style="position: relative;">
                                <select class="js-example-basic-single filter-dropdown" name="state"
                                    style="width: 100%;" id="employeelist" onchange="getEmpDetails();">

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
                        Individual Attendance Report -- Month wise
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




            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Consolidate Attendance Report -- Month wise
                    </h2>



                </div>
                <div class="">
                    <div class="table-responsive" id="consolidate-att-rep">

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

        function todayattendancereport(formattedDate)
        {
            var ajaxURL ="<?= base_url('api/gettodayattendancereport'); ?>";

            var data = {
                formattedDate: formattedDate
            };

            let attedancedate = $('#attedancedate').val(); // Format: "mm/dd/yyyy"


            // Check if uniqueMonths is not null and add it to data
            if (attedancedate != null ) {
                data.selectedDate = attedancedate;

            }else{
                data.selectedDate = null;
            }

            $.ajax({
                url: ajaxURL, // Replace with your actual domain
                method: 'POST',
                dataType: 'json',
                data: data,
                success: function (response) {
                    console.log(response);
                    var counts = response.counts;
                    $('.todaypresentcount').text(counts.presentCount);
                    $('.todayabsentcount').text(counts.absentCount);
                    $('.todaylatecount').text(counts.lateCount);
                    $('.todayleavecount').text(counts.leaveCount);
                    $('.todayhalfdayleavecount').text(counts.halfDayCount);

                    var tabledata = response.records;
                    var classname = "recordstbl"
                    var tablecreated = forcreatingtables(tabledata,classname)
                    $('#daywise-individual-month').html(tablecreated);

                    if (!$.fn.DataTable.isDataTable('.recordstbl')) {
                        // DataTable is not initialized, so initialize it
                        tables = $('.recordstbl').DataTable({
                            pageLength: 25,
                            responsive: true,
                            scrollX: true,
                            dom: '<"html5buttons"B>lTfgitp',
                            buttons: [{
                                extend: 'copy',
                            },
                                {
                                    extend: 'csv',
                                },
                                {
                                    extend: 'excel',
                                    title: 'ExampleFile',
                                },
                                {
                                    extend: 'pdf',
                                    title: 'ExampleFile',
                                },
                                {
                                    extend: 'print',
                                    customize: function (win) {
                                        $(win.document.body).addClass('white-bg');
                                        $(win.document.body).css('font-size',
                                            '10px');

                                        $(win.document.body)
                                            .find('table')
                                            .addClass('compact')
                                            .css('font-size', 'inherit');
                                    },
                                },
                            ],
                            columnDefs: [{
                                targets: 6,
                                type: 'date',
                            }, // 7th column (index 6) is the "Application Date" column
                            ],
                        });
                    }
                }
            });
        }
        todayattendancereport(formattedDate);
        function triggerattendnace()
        {
            todayattendancereport(formattedDate);
        }

        // From the dropdown goes  calling the calendar
        selection.onchange = function (event) {

            var empid = $('#employeelist').val();
            var joiingdatehold = document.getElementById("joingdatehold");
            var employeenamevalue = document.getElementById("employeenamevalehold");
            var emplidvalue = document.getElementById("empidvaluehold");
            var jobnamevaluehold = document.getElementById("jobnamevaluehold");
            if (empid == 0) {
                $('.datepikcerdiv').hide();
                $('#table-container').empty();
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

            const nowpresntdate = new Date();

            const year3 = nowpresntdate.getFullYear();
            const month3 = (nowpresntdate.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
            const day3 = nowpresntdate.getDate().toString().padStart(2, '0');

            if (empid != 0 && employeename != undefined && jobname != undefined && joiningdate != undefined) {
                $('#empID').val(empid);
                $('#designationnane').val(jobname);
                $('#employeename').val(employeename);
                $('#joiningdate').val(joiningdate);

                getAttendanceRecord(empid, employeename, jobname, joiningdate, year3);

            } else {
                $('#empID').val('');
                $('#designationnane').val('');
                $('#employeename').val('');
                $('#joiningdate').val('');
                joiingdatehold.value = "0";
            }
            // Enable the input field
        };

        function onchangedatefunction(selecteddate) {

            var selectedates = new Date(selecteddate);
            const selectedatesyear = selectedates.getFullYear();
            const selectedatesmonth = (selectedates.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
            const selectedatesday = selectedates.getDate().toString().padStart(2, '0');

            var joiingdatehold = document.getElementById("joingdatehold");
            var employeenamevalue = document.getElementById("employeenamevalehold");
            var emplidvalue = document.getElementById("empidvaluehold");
            var jobnamevaluehold = document.getElementById("jobnamevaluehold");
            $('#empID').val(emplidvalue.value);
            $('#designationnane').val(jobnamevaluehold.value);
            $('#employeename').val(employeenamevalue.value);
            $('#joiningdate').val(joiingdatehold.value);

            getAttendanceRecord(emplidvalue.value, employeenamevalue.value, jobnamevaluehold.value, joiingdatehold
                .value, selectedatesyear);

        }


        function getallattendancereport(managervalue,month,year) {

            var ajaxURL = "<?= base_url('api/getconsolidateattendance'); ?>";

            $.ajax({
                url: ajaxURL, // Replace with your actual domain
                method: 'POST',
                dataType: 'json',
                data: {
                    months: month,
                    managervalue: managervalue,
                    years: year
                },
                success: function (response) {
                    console.log(response);
                    var classname = "consolidate-tbl";
                    var createtable = forcreatingtables(response, classname);
                    $('#consolidate-att-rep').html(createtable);
                    if (!$.fn.DataTable.isDataTable('.consolidate-att-rep')) {
                        // DataTable is not initialized, so initialize it
                        tables = $('.consolidate-att-rep').DataTable({
                            pageLength: 25,
                            responsive: true,
                            scrollX: true,
                            dom: '<"html5buttons"B>lTfgitp',
                            buttons: [{
                                extend: 'copy',
                            },
                                {
                                    extend: 'csv',
                                },
                                {
                                    extend: 'excel',
                                    title: 'ExampleFile',
                                },
                                {
                                    extend: 'pdf',
                                    title: 'ExampleFile',
                                },
                                {
                                    extend: 'print',
                                    customize: function (win) {
                                        $(win.document.body).addClass('white-bg');
                                        $(win.document.body).css('font-size',
                                            '10px');

                                        $(win.document.body)
                                            .find('table')
                                            .addClass('compact')
                                            .css('font-size', 'inherit');
                                    },
                                },
                            ],
                            columnDefs: [{
                                targets: 6,
                                type: 'date',
                            }, // 7th column (index 6) is the "Application Date" column
                            ],
                        });
                    }
                }
            });
        }




        function forcreatingtables(dataArray,classname) {

            $('#table-container').empty();
            let table;
            if(classname=="consolidate-tbl")
            {
                table = $('<table>').addClass(
                    'table table-striped table-bordered table-hover consolidate-att-rep is-hoverable w-full text-left'
                );
            }else if(classname=="recordstbl") {
                table = $('<table>').addClass(
                    'table table-striped table-bordered table-hover recordstbl is-hoverable w-full text-left'
                );
            }else{
                table = $('<table>').addClass(
                    'table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
                );
            }


            // Create the table header
            const thead = $('<thead>').appendTo(table);
            const headerRow = $('<tr>').appendTo(thead);
            // Define an array of headers to hide
            const headersToHide = ['Logged_Date','attendancelog_id','statusvalue'];
            // Iterate through the keys of the first object to create table headers
            for (const key in dataArray[0]) {
                if (dataArray[0].hasOwnProperty(key) && !headersToHide.includes(key)) {
                    $('<th>').text(key).appendTo(headerRow).addClass(
                        'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    ).css('font-weight', '500');
                }
            }


            // Create the table body and rows
            const tbody = $('<tbody>').appendTo(table);
            const months = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            // Iterate through the data array to create table rows
            dataArray.forEach((dataItem) => {
                const row = $('<tr>').appendTo(tbody).addClass(
                    'border-y border-transparent border-b-slate-200 dark:border-b-navy-500'
                );

                // Iterate through the object properties to create table cells
                for (const key in dataItem) {
                    if (dataItem.hasOwnProperty(key) && !headersToHide.includes(
                            key)) {
                        const td = $('<td>').addClass(
                                'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                            )
                            .css('padding', '15px');

                        if (key === 'selected_month') {
                            const selectedMonthValue = parseInt(dataItem[key]);
                            if (selectedMonthValue >= 1 && selectedMonthValue <= 12) {
                                const monthName = months[selectedMonthValue - 1]; // Get the month name
                                const div = $('<div>').addClass(
                                    'w-48 overflow-hidden text-ellipsis text-xs+'
                                ).text(monthName); // Set the month name as the text
                                div.appendTo(td);
                            }
                        } else if (key === 'total_days') {
                            const selectedYearValue = parseInt(dataItem['selected_year']);
                            const selectedMonthValue = parseInt(dataItem['selected_month']);
                            var daysInMonth = getLastDayOfMonth(selectedYearValue, selectedMonthValue);
                            const div = $('<div>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(daysInMonth); // Set the number of days as the text
                            div.appendTo(td);
                        } else {
                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+').text(
                                dataItem[key]);
                            p.appendTo(td);
                        }
                        td.appendTo(row);
                    }
                }


            });

            // Append the table to the container with ID 'table-container'
            return table;


        }

        function getLastDayOfMonth(year, month) {
            // Adjust month value to be 0-based (0 = January, 11 = December)
            month = month - 1;

            // Create a new date for the first day of the next month
            var nextMonth = new Date(year, month + 1, 1);

            // Subtract 1 day from the first day of the next month to get the last day of the selected month
            var lastDay = new Date(nextMonth - 1);

            return lastDay.getDate(); // Get the day of the month
        }


        function getAttendanceRecord(empid, employeename, jobname, joiningdate, year3) {

            var ajaxURL = "<?= base_url('api/get-attendancereportsummary'); ?>";

            $.ajax({
                url: ajaxURL, // Replace with your actual domain
                method: 'POST',
                dataType: 'json',
                data: {
                    empid: empid,
                    currentyear: year3
                }, // Expect JSON response
                success: function (response) {
                    console.log(response);
                    var classname = "indiviudual-tbl";
                    var result = forcreatingtables(response,classname);
                    $('#table-container').html(result);

                    if (!$.fn.DataTable.isDataTable('.dataTables-example')) {
                        // DataTable is not initialized, so initialize it
                        tables = $('.dataTables-example').DataTable({
                            pageLength: 25,
                            responsive: true,
                            scrollX: true,
                            dom: '<"html5buttons"B>lTfgitp',
                            buttons: [{
                                    extend: 'copy',
                                },
                                {
                                    extend: 'csv',
                                },
                                {
                                    extend: 'excel',
                                    title: 'ExampleFile',
                                },
                                {
                                    extend: 'pdf',
                                    title: 'ExampleFile',
                                },
                                {
                                    extend: 'print',
                                    customize: function (win) {
                                        $(win.document.body).addClass('white-bg');
                                        $(win.document.body).css('font-size',
                                            '10px');

                                        $(win.document.body)
                                            .find('table')
                                            .addClass('compact')
                                            .css('font-size', 'inherit');
                                    },
                                },
                            ],
                            columnDefs: [{
                                    targets: 6,
                                    type: 'date',
                                }, // 7th column (index 6) is the "Application Date" column
                            ],
                        });
                    }
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

            // Get the selected date range in the date picker format
            let fromDate = $('#from-date').val(); // Format: "mm/dd/yyyy"
            let toDate = $('#to-date').val(); // Format: "mm/dd/yyyy"

            // Check if both "from" and "to" dates are filled
            if (fromDate !== '' && toDate !== '') {
                callattendancereportIf(fromDate,toDate,managervalue)
            }else{
                getallattendancereport(managervalue,month,year);
            }


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

        function callattendancereportIf(fromDate,toDate,currentmanagervalue)
        {
            // Parse the selected dates into Date objects
            let fromDateObj = new Date(fromDate);
            let toDateObj = new Date(toDate);

            // Get the start and end year and month
            let startYear = fromDateObj.getFullYear();
            let startMonth = fromDateObj.getMonth() + 1; // Month is 0-indexed, so add 1
            let endYear = toDateObj.getFullYear();
            let endMonth = toDateObj.getMonth() + 1;

            // Determine the months and years within the date range
            let dateRange = [];
            let yearsInRange = [];

            while (startYear < endYear || (startYear === endYear && startMonth <= endMonth)) {
                dateRange.push({ year: startYear, month: startMonth });
                yearsInRange.push(startYear);
                if (startMonth === 12) {
                    startMonth = 1;
                    startYear++;
                } else {
                    startMonth++;
                }
            }

            // Extract unique years from the yearsInRange array
            let uniqueYears = [...new Set(yearsInRange)];
            // Extract unique month values from the dateRange array
            let uniqueMonths = [...new Set(dateRange.map(item => item.month))];


            getallattendancereport(currentmanagervalue,uniqueMonths,uniqueYears);
        }

        function handleDateChange() {
            //    debugger;


            // Get the selected date range in the date picker format
            let fromDate = $('#from-date').val(); // Format: "mm/dd/yyyy"
            let toDate = $('#to-date').val(); // Format: "mm/dd/yyyy"



            // Check if both "from" and "to" dates are filled
            if (fromDate !== '' && toDate !== '') {
                callattendancereportIf(fromDate,toDate);

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