<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <style>
        .dataTables_filter {
            float: left !important;
            margin-left: 4%;
            display: none !important;
        }

        #allassigned {
            margin-left: 13px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            width: 12rem;
        }
    </style>

</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        <div class="sidebar print:hidden">

            <!-- Sidebar Panel -->
            <?php include('sidebar.php');?>
        </div>

        <!--Nav bar goes here-->

        <?php include('navbar.php');?>

        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Employee List
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Employement Registration</a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </li>
                    <li>Employee List</li>
                </ul>
            </div>


            <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4 hide_filter">
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
                                Refernced By</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="refernceid">

                            </select>
                        </div>


                    </div>



                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">

                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Job Position</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="jobposition">

                            </select>
                        </div>


                    </div>



                </div>



            </div>




            <!-- Candiadate list -->
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Assign Employee List
                    </h2>

                </div>
                <div class="">
                    <div style="position:absolute;right:0px;display:flex;z-index: 1000;" class="hide-init">
                        <div class="card p-3" style="display:contents;">
                            <label class="block" style="margin-right: 10px;">
                                <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Assign Manager</span>
                            </label>

                            <div style="margin-right: 13px;">
                                <select class="js-example-basic-single" name="state" style="width: 100%;"
                                    id="managerlist" onchange="getmappedteamleader();">

                                </select>
                            </div>
                            <label class="block" style="margin-right: 10px;">
                                <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Assign Teamleader</span>
                            </label>

                            <div style="margin-right: 13px;">
                                <select class="js-example-basic-single" name="state" style="width: 100%;"
                                    id="teamleader">

                                </select>
                            </div>
                        </div>
                        <button
                            class="btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                            type="button" id="assignbtn" style="margin-right:20px;">
                            Submit
                        </button>
                    </div>


                    <div class="table-responsive" id="table-container">

                    </div>

                </div>

            </div>


            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Employee List
                    </h2>

                </div>
                <div class="">


                    <div class="table-resp" id="employeelisttblcontainter">
                          
                    </div>

                </div>

            </div>
        </main>
    </div>

    <div id="x-teleport-target"></div>
    <?php include('scriptsbottom.php');?>

    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
        const urlParams = new URLSearchParams(window.location.search);
        var isstatusform = urlParams.get('status');
        if(isstatusform == 1)
        {
            toastr["success"]("Data Edited Succesfully");
            window.history.replaceState({}, document.title, window.location
                .pathname);
        }else if(isstatusform==5)
        {
            toastr["success"]("Data Added Succesfully");
            window.history.replaceState({}, document.title, window.location
                .pathname);
        }
        $(document).ready(function () {
            domreadyfunction();
            var appPreloader = $(
                    '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                )
                .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');
            // Append the appPreloader div as the first child of the body
            $('body').prepend(appPreloader);
            // Remove appPreloader after the document is fully loaded
            $('.js-example-basic-single').select2();
            $('.menu-toggle').click();
            appPreloader.remove();
            dropdownsections();
        });
        //******************** Dedicated Dropdown Sections *********************************
        function dropdownsections() {
            var refernceURL = "<?= base_url('api/get-referencedby'); ?>";
            $.ajax({
                url: refernceURL, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (response) {

                    const selectElement = document.getElementById("refernceid");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--select--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements
                    response.forEach((refernce) => {
                        const optionElement = document.createElement("option");
                        optionElement.value = refernce.id;
                        optionElement.textContent = refernce.FirstName;
                        selectElement.appendChild(optionElement);
                    });

                    $('#refernceid').trigger('change');
                }
            });
            var jobsURL = "<?= base_url('api/get-jobstable'); ?>";
            $.ajax({
                url: jobsURL, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (response) {

                    const selectElement = document.getElementById("jobposition");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--select--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements
                    response.forEach((jobs) => {
                        const optionElement = document.createElement("option");
                        optionElement.value = jobs.job_id;
                        optionElement.setAttribute('data-category', jobs.category_id);
                        optionElement.textContent = jobs.job_name;
                        selectElement.appendChild(optionElement);
                    });

                    $('#jobposition').trigger('change');
                }
            });
            var managerlistURL = "<?= base_url('api/get-teammanager'); ?>";
            $.ajax({
                url: managerlistURL, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (response) {

                    const selectElement = document.getElementById("managerlist");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--select--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements
                    response.forEach((managerlist) => {
                        const optionElement = document.createElement("option");
                        optionElement.value = managerlist.manager_id;
                        optionElement.textContent = managerlist.manager_name;
                        selectElement.appendChild(optionElement);
                    });

                    $('#managerlist').trigger('change');
                }
            });

        }

        // Function to get the teamleader related with the manager
        function getmappedteamleader() {
            var managervalue = parseInt($("#managerlist").val()) || 0;

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

        // Yet to assign Employee list
        function NeedtoAssignemployeelist(refernce, jobposition) {
            var getcandidateURL = "<?= base_url('api/get-employeelist'); ?>";
            $.ajax({
                url: getcandidateURL,
                data: {
                    refernce: refernce,
                    jobposition: jobposition
                }, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (dataArray) {
                    var theurl = "<?= base_url('Employeequeryform'); ?>";
                    console.log(dataArray);
                    $('#table-container').empty();
                    const table = $('<table>').addClass(
                        'needtoassignetbl table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
                    );
                    // Create the table header
                    const thead = $('<thead>').appendTo(table);
                    const headerRow = $('<tr>').appendTo(thead);
                    // Define an array of headers to hide
                    const headersToHide = [
                        'RefID',
                        'TableID'
                    ];
                    // Iterate through the keys of the first object to create table headers
                    for (const key in dataArray[0]) {
                        if (dataArray[0].hasOwnProperty(key) && !headersToHide.includes(key)) {
                            $('<th>').text(key).appendTo(headerRow).addClass(
                                'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                            ).css('font-weight', '500');
                        }
                    }
                    if (dataArray.length > 0) {
                        const selectAllCheckbox = $('<th>').appendTo(headerRow).text('Assign').addClass(
                            'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        ).css('font-weight', '500');
                        $('<input>')
                            .attr({
                                'type': 'checkbox',
                                'id': 'allassigned' // Add the ID attribute
                            })
                            .click(function () {
                                // Check/uncheck all row checkboxes based on the header checkbox state
                                const isChecked = $(this).prop('checked');
                                $('tbody input[type="checkbox"]').prop('checked', isChecked);
                            })
                            .appendTo(selectAllCheckbox);
                        $('<th>').text('Actions').appendTo(headerRow).addClass(
                            'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        ).css('font-weight', '500');

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

                                if (key === 'DOB') {
                                    if (dataItem[key] == '0000-00-00') {
                                        const div = $('<div>').addClass(
                                            'badge bg-warning/10 text-warning dark:bg-warning/15'
                                        ).text("");
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }

                                } else if (key === 'JoiningDate') {
                                    if (dataItem[key] == '0000-00-00') {
                                        const div = $('<div>').text('');
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }

                                } else if (key === 'IncrementGivenDate') {
                                    if (dataItem[key] == '0000-00-00') {
                                        const div = $('<div>').text('');
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }

                                } else {
                                    const p = $('<p>').addClass(
                                        'w-48 overflow-hidden text-ellipsis text-xs+').text(
                                        dataItem[key]);
                                    p.appendTo(td);
                                }
                                td.appendTo(row);
                            }
                        }


                        const checkboxCell = $('<td>').appendTo(row).addClass(
                            'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                        );
                        $('<input>')
                            .attr({
                                'type': 'checkbox',
                                'id': dataItem.TableID, // Use lead_id for a unique id
                                'class': 'child-checkbox' // Add a class name
                            })
                            .appendTo(checkboxCell);
                        let editButton = $('<a>')
                            .text('Edit')
                            .attr('href',
                                            `${theurl}?data=${dataItem.TableID}&refid=${dataItem.RefID}&mos=${dataItem.ModeofsalryID}&re=1`
                                )
                            .addClass(
                                'btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover-bg-accent-focus dark:focus-bg-accent-focus dark:active-bg-accent/90'
                            );
                        const actionsCell = $('<td>').append(editButton).addClass(
                            'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                        );
                        row.append(actionsCell);


                    });
                    // Append the table to the container with ID 'table-container'
                    table.appendTo('#table-container');
                    if (!$.fn.DataTable.isDataTable('.needtoassignetbl')) {
                        // DataTable is not initialized, so initialize it
                        tables = $('.needtoassignetbl').DataTable({
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
                    handleDateChange();
                    
                }
            });
        }

        // Assigned Employee list
        function AssignedEmployeelist(refernce, jobposition) {
            var getAssignedURL = "<?= base_url('api/get-assignedEmployees'); ?>";

            $.ajax({
                url: getAssignedURL,
                data: {
                    refernce: refernce,
                    jobposition: jobposition
                }, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (dataArray) {
                    var theurl = "<?= base_url('Employeequeryform'); ?>";
                    console.log(dataArray);
                    $('#employeelisttblcontainter').empty();
                    const table = $('<table>').addClass(
                        'assignedlistemptbl table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
                    );
                    // Create the table header
                    const thead = $('<thead>').appendTo(table);
                    const headerRow = $('<tr>').appendTo(thead);
                    // Define an array of headers to hide
                    const headersToHide = [
                        'RefID',
                        'TableID'
                    ];
                    // Iterate through the keys of the first object to create table headers
                    for (const key in dataArray[0]) {
                        if (dataArray[0].hasOwnProperty(key) && !headersToHide.includes(key)) {
                            $('<th>').text(key).appendTo(headerRow).addClass(
                                'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                            ).css('font-weight', '500');
                        }
                    }
                    if (dataArray.length > 0) {
                       
                        $('<th>').text('Actions').appendTo(headerRow).addClass(
                            'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        ).css('font-weight', '500');

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

                                if (key === 'DOB') {
                                    if (dataItem[key] == '0000-00-00') {
                                        const div = $('<div>').addClass(
                                            'badge bg-warning/10 text-warning dark:bg-warning/15'
                                        ).text("");
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }

                                } else if (key === 'JoiningDate') {
                                    if (dataItem[key] == '0000-00-00') {
                                        const div = $('<div>').text('');
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }

                                } else if (key === 'IncrementGivenDate') {
                                    if (dataItem[key] == '0000-00-00') {
                                        const div = $('<div>').text('');
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }

                                } else {
                                    const p = $('<p>').addClass(
                                        'w-48 overflow-hidden text-ellipsis text-xs+').text(
                                        dataItem[key]);
                                    p.appendTo(td);
                                }
                                td.appendTo(row);
                            }
                        }

                        let editButton = $('<a>')
                            .text('Edit')
                            .attr('href',
                                            `${theurl}?data=${dataItem.TableID}&refid=${dataItem.RefID}&mos=${dataItem.ModeofsalryID}&re=1`
                                            )
                            .addClass(
                                'btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover-bg-accent-focus dark:focus-bg-accent-focus dark:active-bg-accent/90'
                            );
                        const actionsCell = $('<td>').append(editButton).addClass(
                            'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                        );
                        row.append(actionsCell);


                    });
                    // Append the table to the container with ID 'table-container'
                    table.appendTo('#employeelisttblcontainter');
                    if (!$.fn.DataTable.isDataTable('.assignedlistemptbl')) {
                        // DataTable is not initialized, so initialize it
                        tables = $('.assignedlistemptbl').DataTable({
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
                    handleDateChange();



                }
            });
        }

        // Load Assiging Employee list
        function dropdownchange() {
            var refernce = $('#refernceid').val();
            var jobposition = $('#jobposition').val();


            NeedtoAssignemployeelist(refernce, jobposition);

            AssignedEmployeelist(refernce, jobposition);

            // Check if the DataTable is already initialized




        }



        dropdownchange();
        $(document).ajaxStop(function () {

            console.log("All AJAX requests completed");
            $('.filter-dropdown').on('change', function () {
                dropdownchange();
            });
            $('.dataTables_scroll').css('padding-top', '18px');
        });


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



        }


        // For Assigning Teamanager and Teamleader
        $('#assignbtn').click(function () {
            const checkedIds = [];
            $('.child-checkbox:checked').each(function () {
                checkedIds.push($(this).attr('id'));
            });

            const managervalue = document.querySelector('#managerlist').value;
            const teamaleadervalue = document.querySelector('#teamleader').value;



            if (checkedIds.length > 0 && managervalue !== '0') {
                if (teamaleadervalue !== '0') {
                    var selectedmanager = parseInt($("#managerlist").val()) || 0;
                    var selectedteamleader = parseInt($("#teamleader").val()) || 0;

                    // Create an object to send as data
                    var dataToSend = {
                        checkedIds: checkedIds,
                        selectedmanager: selectedmanager,
                        selectedteamleader: selectedteamleader
                    };
                    var assignemployees = "<?= base_url('api/post-assiginingrespectives'); ?>";
                    $.ajax({
                        url: assignemployees, // Replace with your actual domain
                        method: 'POST',
                        data: dataToSend, // Send the data object
                        dataType: 'json', // Expect JSON response
                        success: function (response) {
                            // Handle the response from the server
                            if (response.status == 1) {

                                toastr["success"]("Assigned Successfully");
                                dropdownchange();
                                $('#managerlist').val('0');
                                $('#managerlist').trigger('change');
                                $('#teamleader').empty();



                            } else {
                                toastr["error"]("Something went wrong");

                            }
                        }
                    });
                } else {
                    toastr["warning"]("Teamleader is not Selected");
                }

            } else {
                toastr["warning"]("Checkbox or Dropdown value is not selected");
            }
        });



    </script>


</body>

</html>