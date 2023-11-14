<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <style>
        .whitespace-nowrap {
            font-size: 11px !important;
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
        .numInputWrapper{
            display: none !Important;
        }
        .flatpickr-prev-month{
            display: none !Important;
        }
        .flatpickr-next-month{
            display: none !Important;
        }
        .submit_btn{
            width: fit-content;
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
                Salary Details
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                       href="#">Payroll</a>
                    <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </li>
                <li>Salary Details</li>
            </ul>
        </div>
        <div class="hide_table grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
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
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">


                <div class="card p-3">
                    <label class="block" style="margin-botton:20px;">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Mode of salary</span>
                    </label>

                    <div style="position: relative;" class="dropdown-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="modeofsalary">

                        </select>
                    </div>


                </div>

            </div>

            <div class="space-y-4 sm:space-y-5 lg:space-y-6">

                <div class="card p-3">
                    <label class="block" style="margin-botton:20px;">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Team Manager</span>
                    </label>

                    <div style="position: relative;" class="dropdown-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="teammanager" onchange="getmappedteamleader();">

                        </select>
                    </div>


                </div>


            </div>

        </div>


        <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
            <div class="my-3 flex h-8 items-center justify-between">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Salary Details -- Mode of salary
                </h2>

            </div>
            <div class="">


                <div class="table-resp" id="modeofsalarywise">

                </div>

            </div>

        </div>
        <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
            <div class="my-3 flex h-8 items-center justify-between">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Salary Details -- Team manager wise
                </h2>

            </div>
            <div class="">


                <div class="table-resp" id="managerwisesalary">

                </div>

            </div>

        </div>


        <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
            <div class="my-3 flex h-8 items-center justify-between">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    EmployeeList Salary Details
                </h2>

            </div>
            <div class="">


                <div class="salary-mode" id="employeessalarymode">

                </div>

            </div>

        </div>



        <div class="hideform" style="margin-top:30px;" >

            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6 form_hidden">
                <div class="col-span-12">
                    <div class="card p-4 sm:p-5">
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100" style="margin-bottom: 2rem;">
                            <button
                                    class="back_button btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                <- Back </button> </p> <form role="form" id="submitformdata" method="POST">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Profession Tax</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="professiontax" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                       <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>TDS</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="tdsamount" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                      <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Mobile Deduction</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="mobilededuction" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                       <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Pending Advance</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="pendingadvance" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                      <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Advance</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="advanceamount" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                      <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Rent</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="rentamount" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                       <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Late deduction</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="latedeductionamount" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Deduction</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="deductionamount" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>RD Amount</span>
                                    <span class="relative mt-1.5 flex regex-fields ">

                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Enter the amount" type="text" id="rdamount" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="fa-solid fa-coins"></i>
                                                    </span>
                                                </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <?php echo form_submit(['name'=>'insert','value'=>'Submit','type'=>'submit','class'=>'submit_btn btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90']);?>
                            </div>
                        </form>
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
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
    $(document).ready(function () {
        $('.hideform').hide();
        domreadyfunction();

        // Find the input element with the specified class and type
        var numInput = $('input.numInput[type="number"]');

        // Set the 'readonly' attribute to 'true'
        numInput.attr('readonly', true);
        var appPreloader = $(
            '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
        )
            .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

        // Append the appPreloader div as the first child of the body
        $('body').prepend(appPreloader);

        $('.js-example-basic-single').select2();
        $('.menu-toggle').click();
        $('.app-preloader').remove();

    });

    const currentDate = new Date();
    // Get the year, month, and day components
    const year = currentDate.getFullYear();
    const month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are 0-indexed
    const day = currentDate.getDate().toString().padStart(2, '0');


    $(document).ajaxStop(function () {

        console.log("All AJAX requests completed");
        $('.dropdown-cont').off('change', '.filter-dropdown').on('change', '.filter-dropdown', function () {
            dropdownchange();
        });
        $('.app-preloader').remove();


    });





    function forcreatingtables(dataArray,classname) {
        let table;
        if(classname == "modeofsalary"){
            table = $('<table>').addClass(
                ' modeofsalary table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
            );
        }else{
            table = $('<table>').addClass(
                'teammangerwisetable table table-striped table-bordered table-hover  is-hoverable w-full text-left'
            );
        }

        // Create the table header
        const thead = $('<thead>').appendTo(table);
        const headerRow = $('<tr>').appendTo(thead);
        // Define an array of headers to hide
        const headersToHide = [
            'EmployeeIDs'
        ];
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


                    const p = $('<p>').addClass(
                        'w-48 overflow-hidden text-ellipsis text-xs+').text(
                        dataItem[key]);
                    p.appendTo(td);

                    td.appendTo(row);
                }
            }


        });

        // Append the table to the container with ID 'table-container'
        return table;


    }


    function calculateSundaysInRange(joiningMonth, selectedYear) {
        const months = joiningMonth.split(',').map(Number);
        const years = selectedYear.split(',').map(Number);

        let totalSundays = 0;

        for (const year of years) {
            for (const month of months) {
                const firstDayOfMonth = new Date(year, month - 1, 1);
                const lastDayOfMonth = new Date(year, month, 0);

                while (firstDayOfMonth <= lastDayOfMonth) {
                    if (firstDayOfMonth.getDay() === 0) {
                        // 0 represents Sunday
                        totalSundays++;
                    }
                    firstDayOfMonth.setDate(firstDayOfMonth.getDate() + 1);
                }
            }
        }

        return totalSundays;
    }



    function createEmployeeTables(employeesMapped, classname) {

        let table;

        table = $('<table>').addClass(
            'table table-striped table-bordered modeofsalary1 table-hover  is-hoverable w-full text-left'
        );

        const thead = $('<thead>').appendTo(table);
        const headerRow = $('<tr>').appendTo(thead);
        const headersToHide = [
            ''
        ];
        let breakAfterValue = "Add_deduction";
        outerLoop: for (const categoryName in employeesMapped) {
            const employees = employeesMapped[categoryName];
            for (const employeeId in employees) {
                const employee = employees[employeeId];

                // Create table headers based on the first employee's keys
                for (const key in employee) {
                    const firstEmployee = employee[0];
                    for(const key in firstEmployee){
                        if (firstEmployee.hasOwnProperty(key) && !headersToHide.includes(key)) {
                            $('<th>').text(key).appendTo(headerRow).addClass(
                                'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                            ).css('font-weight', '500');

                            // Check if the current key matches the breakAfterValue
                            if (key === breakAfterValue) {
                                break outerLoop;// Break out of the inner loop when "LossofPay" is encountered
                            }

                        }
                    }

                }

            }

        }




        const tbody = $('<tbody>').appendTo(table);
        let totalpresent;
        let totalSundays;
        let row;
        let daysWithoutSundays;

        for (const categoryName in employeesMapped) {
            const employees = employeesMapped[categoryName];


            for (const employeeId in employees) {
                const employeeData = employees[employeeId];

                row = $('<tr>').appendTo(tbody).addClass(
                    'border-y border-transparent border-b-slate-200 dark:border-b-navy-500'
                );

                // Iterate through the properties of the "0" index object to create table cells
                const firstEmployee = employeeData[0];
                for (const employeeKey in firstEmployee) {
                    if (firstEmployee.hasOwnProperty(employeeKey) && !headersToHide.includes(employeeKey)) {
                        const td = $('<td>').addClass(
                            'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                        ).css('padding', '15px');
                        const joiningMonth = firstEmployee.Selected_Month; // "11,12"
                        const selectedYear = firstEmployee.Selected_Year; // "2023,2022"
                        const grossalaryvalue = firstEmployee.Gross_Salary;
                        totalpresent  = firstEmployee.Total_Present;
                        const isdeducted = firstEmployee.Is_Deduction;

                        totalSundays = calculateSundaysInRange(joiningMonth, selectedYear);
                        const totalDaysInMonth = new Date(selectedYear, joiningMonth , 0).getDate();

                        daysWithoutSundays = totalDaysInMonth - totalSundays;

                        let netAttendance;
                        var ts = parseInt(totalSundays);
                        var tp = parseInt(totalpresent);
                        netAttendance = ts + tp;
                        if (employeeKey === 'Total_Holidays') {


                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(totalSundays);
                            p.appendTo(td);



                            // Now, you have the total number of Sundays for this range
                            // You can use this value as needed in your table cell or further processing
                        }else  if (employeeKey === 'Mode') {
                            if(firstEmployee[employeeKey] == null)
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("Not Assigned");
                                div.appendTo(td);
                            }else{
                                const p = $('<p>').addClass(
                                    'w-48 overflow-hidden text-ellipsis text-xs+'
                                ).text(firstEmployee[employeeKey]);
                                p.appendTo(td);
                            }
                            // Now, you have the total number of Sundays for this range
                            // You can use this value as needed in your table cell or further processing
                        }else  if (employeeKey === 'TeamName') {
                            if(firstEmployee[employeeKey] == null)
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("Not Assigned");
                                div.appendTo(td);
                            }else{
                                const p = $('<p>').addClass(
                                    'w-48 overflow-hidden text-ellipsis text-xs+'
                                ).text(firstEmployee[employeeKey]);
                                p.appendTo(td);
                            }
                            // Now, you have the total number of Sundays for this range
                            // You can use this value as needed in your table cell or further processing
                        }else  if (employeeKey === 'Teammanager') {
                            if(firstEmployee[employeeKey] == null)
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("Not Assigned");
                                div.appendTo(td);
                            }else{
                                const p = $('<p>').addClass(
                                    'w-48 overflow-hidden text-ellipsis text-xs+'
                                ).text(firstEmployee[employeeKey]);
                                p.appendTo(td);
                            }
                            // Now, you have the total number of Sundays for this range
                            // You can use this value as needed in your table cell or further processing
                        }else  if (employeeKey === 'Total_WorkingDays') {

                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(daysWithoutSundays);
                            p.appendTo(td);

                            // Now, you have the total number of Sundays for this range
                            // You can use this value as needed in your table cell or further processing
                        }else if (employeeKey === 'NetMonthly_Attendance') {


                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(netAttendance);
                            p.appendTo(td);
                        }else if (employeeKey === 'Attendance_KPIPerformance') {

                            var tw = parseInt(daysWithoutSundays);
                            var tp = parseInt(totalpresent);
                            const KPIperformance = tp / tw;
                            const roundedKPI = KPIperformance.toFixed(2);
                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(roundedKPI);
                            p.appendTo(td);
                        }else if (employeeKey === 'GrossSalary_AfterLeaveDeduction') {

                            var gsv = parseInt(grossalaryvalue);
                            var tdm = parseInt(totalDaysInMonth);
                            var na = parseInt(netAttendance);
                            const result = (gsv / tdm) * na;
                            const roundedresult = result.toFixed(2);
                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(roundedresult);
                            p.appendTo(td);
                        }else if (employeeKey === 'Add_deduction') {

                            let editButton = $('<button>')
                                .text('Edit')
                                .data('grosssalary', firstEmployee.Gross_Salary)
                                .data('netattendance', netAttendance)
                                .data('employeeid', firstEmployee.Emp_id)
                                .data('monthindays', totalDaysInMonth)
                                .data('isdedornot', isdeducted)
                                .data('monthfor', firstEmployee.Selected_Month)
                                .attr('data-toggle',"modal")
                                .attr('data-target',"#exampleModal")
                                .addClass(
                                    'btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover-bg-accent-focus dark:focus-bg-accent-focus dark:active-bg-accent/90'
                                );

                            editButton.appendTo(td);
                            if(isdeducted==1)
                            {
                                let removebutton = $('<button>')
                                    .text('Remove')
                                    .data('deduction',firstEmployee.Emp_id)
                                    .addClass(
                                        'btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90'
                                    )
                                    .css('margin-left', '2rem')
                                    .css('padding', '5px');

                                removebutton.appendTo(td);

                                removebutton.on('click', function() {
                                    let removedeuction = $(this).data('deduction');
                                    removededuction(removedeuction);
                                });
                            }

                            editButton.on('click', function() {
                                $('.hide_table').hide();
                                $('.hideform').show();

                                let grossSalary = $(this).data('grosssalary');
                                let netAttendance = $(this).data('netattendance');
                                let employeeid = $(this).data('employeeid');
                                let monthsindays = $(this).data('monthindays');
                                let monthfor = $(this).data('monthfor');
                                let isded = $(this).data('isdedornot');

                                submitfunction(grossSalary,netAttendance,employeeid,monthsindays,monthfor,isded);

                            });
                        }else  if (employeeKey === 'Is_Deduction') {
                            if(firstEmployee[employeeKey] == 0)
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("Not Deducted");
                                div.appendTo(td);
                            }else{
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("Deducted");
                                div.appendTo(td);
                            }
                            // Now, you have the total number of Sundays for this range
                            // You can use this value as needed in your table cell or further processing
                        }else{
                            const p = $('<p>').addClass(
                                'w-48 overflow-hidden text-ellipsis text-xs+'
                            ).text(firstEmployee[employeeKey]);
                            p.appendTo(td);
                        }
                        td.appendTo(row);
                    }

                }
            }
        }






        return table;



    }

    function removededuction(removededuction)
    {
        var ajaxURL = "<?= base_url('api/removededuction'); ?>";
        $.ajax({
            url: ajaxURL,
            type: 'POST',
            dataType: 'json',
            data:{
                employeeid:removededuction
            },
            success: function (response) {
                 if(response==1)
                 {
                     toastr["success"]("Deduction Cleared");
                     dropdownchange(month,year);

                 }else{
                     toastr["error"]("Something went wrong");
                 }
            }
        });
    }

    function  submitfunction(grossSalary,netAttendance,employeeid,monthsindays,monthfor,isded)
    {
        if(isded==1)
        {
            var ajaxURL = "<?= base_url('api/checkalreadydeducted'); ?>";
            $.ajax({
                url: ajaxURL,
                type: 'GET',
                dataType: 'json',
                data:{
                    employeeid:employeeid
                },
                success: function (response) {
                    if(response !=0)
                    {
                        if(response[0].professionTax !== "0")
                        {
                            $('#professiontax').val(response[0].professionTax);
                        }
                        if(response[0].TDS !== "0")
                        {
                            $('#tdsamount').val(response[0].TDS);
                        }
                        if(response[0].advance !== "0")
                        {
                            $('#advance').val(response[0].advance);
                        }
                        if(response[0].lateDeduction !== "0")
                        {
                            $('#latedeductionamount').val(response[0].lateDeduction);
                        }
                        if(response[0].mobile !== "0")
                        {
                            $('#mobilededuction').val(response[0].mobile);
                        }
                        if(response[0].pendingAdvance !== "0")
                        {
                            $('#pendingadvance').val(response[0].pendingAdvance);
                        }
                        if(response[0].rdAMount !== "0")
                        {
                            $('#rdamount').val(response[0].rdAMount);
                        }
                        if(response[0].rent !== "0")
                        {
                            $('#rentamount').val(response[0].rent);
                        }

                    }
                }
            });
        }


        var gs = parseInt(grossSalary);
        var na = parseInt(netAttendance);
        var md = parseInt(monthsindays);

        var result = (gs/md)*na;


        submitfunctionInit(result,employeeid,monthfor)
    }



    function submitfunctionInit(result,employeeid,monthfor)
    {
        var ajaxURL = "<?= base_url('api/updatesalarydeduction'); ?>";

        $('#submitformdata').submit(function (event) {
            event.preventDefault();


            var professiontax = parseInt($('#professiontax').val(), 10) || 0;
            var TDSamount = parseInt($('#tdsamount').val(), 10) || 0;
            var MobileDecution = parseInt($('#mobilededuction').val(), 10) || 0;
            var pendingAdvance = parseInt($('#pendingadvance').val(), 10) || 0;
            var Advance = parseInt($('#advanceamount').val(), 10) || 0;
            var rentAMount = parseInt($('#rentamount').val(), 10) || 0;
            var Latededuction = parseInt($('#latedeductionamount').val(), 10) || 0;
            var Deduction = parseInt($('#deductionamount').val(), 10) || 0;
            var Rdamount = parseInt($('#rdamount').val(), 10) || 0;


            var totalSum = professiontax + TDSamount + MobileDecution + pendingAdvance + Advance + rentAMount + Latededuction + Deduction + Rdamount;
            let finalnetsalary;
            if(result==0){
                finalnetsalary=0
            }else{
                finalnetsalary=  result-totalSum;
            }


            $.ajax({
                url: ajaxURL,
                type: 'POST',
                dataType: 'json',
                data: {
                    employeeid:employeeid,
                    professiontax:professiontax,
                    TDSamount:TDSamount,
                    MobileDecution:MobileDecution,
                    pendingAdvance:pendingAdvance,
                    Advance:Advance,
                    rentAMount:rentAMount,
                    Latededuction:Latededuction,
                    Deduction:Deduction,
                    Rdamount:Rdamount,
                    finalnetsalary:finalnetsalary,
                    monthfor:monthfor
                },
                success: function (response) {
                    if(response==1)
                    {
                        $('.back_button').click();
                        toastr["success"]("Salary Deducted Successfully");
                        $('#professiontax').val('');
                        $('#tdsamount').val('');
                        $('#mobilededuction').val('');
                        $('#pendingadvance').val('');
                        $('#advanceamount').val('');
                        $('#rentamount').val('');
                        $('#latedeductionamount').val('');
                        $('#deductionamount').val('');
                        $('#rdamount').val('');
                        dropdownchange(month,year);
                    }else{
                        toastr["error"]("Failed to Update");
                    }
                }
            });

        });

    }

    // Append the table to the container with ID 'employee-tables'





    function dropdownchange(uniqueMonths = null , uniqueYears =null) {
        var ajaxURL = "<?= base_url('api/modeofsalarytotals'); ?>";
        var modeofsalary = $('#modeofsalary').val();

        const currentDate1 = new Date();
        // Get the year, month, and day components
        const year1 = currentDate1.getFullYear();
        const month1 = (currentDate1.getMonth() + 1).toString().padStart(2, '0'); // Months are 0-indexed
        const day1 = currentDate1.getDate().toString().padStart(2, '0');

        var data = {
            modeofsalary: modeofsalary
        };
        // Check if uniqueMonths is not null and add it to data
        if (uniqueMonths !== null) {
            data.selectedMonth = uniqueMonths;
        }else{
            data.selectedMonth = month1;
        }

        // Check if uniqueYears is not null and add it to data
        if (uniqueYears !== null) {
            data.selectedYear = uniqueYears;
        }else{
            data.selectedYear = year1;
        }
        $.ajax({
            url: ajaxURL, // Replace with your actual domain
            method: 'GET',
            dataType: 'json',
            data:data, // Expect JSON response
            success: function (data) {
                var classname = "modeofsalary1"
                var classname2 = "modeofsalary"
                var response = data.ConsolidateData;
                var employeemapped = data.EmployeesMapped;



                console.log(response);

                var modeofsalarywise = forcreatingtables(response,classname2);
                $('#modeofsalarywise').html(modeofsalarywise);


                var emoloyeetbl = createEmployeeTables(employeemapped,classname);
                $('#employeessalarymode').html(emoloyeetbl);

                if (!$.fn.DataTable.isDataTable('.modeofsalary')) {
                    // DataTable is not initialized, so initialize it
                    tables = $('.modeofsalary').DataTable({
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

                if (!$.fn.DataTable.isDataTable('.modeofsalary1')) {
                    // DataTable is not initialized, so initialize it
                    tables = $('.modeofsalary1').DataTable({
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


                // DataTable is not initialized, so initialize it


            }
        });

        var ajaxURL2 = "<?= base_url('api/modeofsalaryteamwise'); ?>";
        var teamanager = $('#teammanager').val();

        var data2 = {
            teamanager: teamanager
        };

        if (uniqueMonths !== null) {
            data2.selectedMonth = uniqueMonths;
        }

        // Check if uniqueYears is not null and add it to data
        if (uniqueYears !== null) {
            data2.selectedYear = uniqueYears;
        }

        $.ajax({
            url: ajaxURL2, // Replace with your actual domain
            method: 'GET',
            dataType: 'json',
            data:data2, // Expect JSON response
            success: function (data) {
                var classname = "teammangerwise1"
                var response = data.ConsolidateData;
                var employeemapped = data.EmployeesMapped;

                console.log(response);

                var teamwisesalary = forcreatingtables(response,classname);
                $('#managerwisesalary').html(teamwisesalary);



                if (!$.fn.DataTable.isDataTable('.teammangerwisetable')) {
                    // DataTable is not initialized, so initialize it
                    tables = $('.teammangerwisetable').DataTable({
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
    dropdownchange(month,year);


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

        var salaryajaxURL = "<?= base_url('api/get-modeofsalary'); ?>";
        $.ajax({
            url: salaryajaxURL, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                const selectElement = document.getElementById("modeofsalary");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((modeofsalary) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = modeofsalary.id;
                    optionElement.textContent = modeofsalary.type_name;
                    selectElement.appendChild(optionElement);
                });
                $('#modeofsalary').trigger('change');

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


    function callsalaryreportIf(fromDate,toDate)
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


        dropdownchange(uniqueMonths,uniqueYears);
    }

    function handleDateChange() {
        //    debugger;


        // Get the selected date range in the date picker format
        let fromDate = $('#from-date').val(); // Format: "mm/dd/yyyy"
        let toDate = $('#to-date').val(); // Format: "mm/dd/yyyy"



        // Check if both "from" and "to" dates are filled
        if (fromDate !== '' && toDate !== '') {

            callsalaryreportIf(fromDate,toDate);
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
    $(".back_button").click(function(){
        $('.hide_table').show();
        $('.hideform').hide();
        $('#professiontax').val('');
        $('#tdsamount').val('');
        $('#mobilededuction').val('');
        $('#pendingadvance').val('');
        $('#advanceamount').val('');
        $('#rentamount').val('');
        $('#latedeductionamount').val('');
        $('#deductionamount').val('');
        $('#rdamount').val('');
    });
</script>
</body>

</html>