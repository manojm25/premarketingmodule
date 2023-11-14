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
                    Employee Dashboard
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
                    <li>Employee Dashboard</li>
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
                           dropdownchange();
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
                            dropdownchange();
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
                                Team Manager</span>
                        </label>

                        <div style="position: relative;" class="dropdown-cont">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="teammanagerdetails" onchange="getmappedteamleader();">

                            </select>
                        </div>


                    </div>


                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">


                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Team Leader</span>
                        </label>

                        <div style="position: relative;" class="dropdown-cont">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="teamleaderdetails">

                            </select>
                        </div>


                    </div>

                </div>




            </div>


            <div class="mt-5 grid grid-cols-1 gap-4 px-4 sm:grid-cols-4 sm:px-5">
                <div
                    class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5">
                    <p class="text-xs uppercase text-amber-50">Total Staff</p>
                    <div class="flex items-end justify-between space-x-2">
                        <p class="mt-4 text-2xl font-medium text-white totalsatff"></p>

                    </div>
                    <div class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                </div>
                <div
                    class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5">
                    <p class="text-xs uppercase text-sky-100">Sim card Users</p>
                    <div class="flex items-end justify-between space-x-2">
                        <p class="mt-4 text-2xl font-medium text-white simcardusers"></p>

                    </div>
                    <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                    </div>
                </div>
                <div
                    class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                    <p class="text-xs uppercase text-pink-100">Laptop Users</p>
                    <div class="flex items-end justify-between space-x-2">
                        <p class="mt-4 text-2xl font-medium text-white laptopusers"></p>

                    </div>
                    <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                </div>
                <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5"
                    style="--tw-gradient-to: #5272F2;--tw-gradient-from: #5272F2;">
                    <p class="text-xs uppercase text-pink-100">Idcard Users</p>
                    <div class="flex items-end justify-between space-x-2">
                        <p class="mt-4 text-2xl font-medium text-white idcardusers"></p>

                    </div>
                    <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                </div>
                <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5"
                    style="--tw-gradient-to: #008170;--tw-gradient-from: #008170;">
                    <p class="text-xs uppercase text-sky-100">Live Users</p>
                    <div class="flex items-end justify-between space-x-2">
                        <p class="mt-4 text-2xl font-medium text-white liveusers"></p>

                    </div>
                    <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                    </div>
                </div>
                <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5"
                    style="--tw-gradient-to: #E9B824;--tw-gradient-from: #E9B824;">
                    <p class="text-xs uppercase text-amber-50">Sentout Users</p>
                    <div class="flex items-end justify-between space-x-2">
                        <p class="mt-4 text-2xl font-medium text-white sentoutusers"></p>

                    </div>
                    <div class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                </div>
            </div>




            <!-- Table Section -->
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Employee List -- Live Users
                    </h2>

                </div>
                <div class="">

                    <div class="table-responsive" id="liveuserscontainer">

                    </div>

                </div>

                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Employee List -- Sentout Users
                    </h2>

                </div>
                <div class="">

                    <div class="table-responsive" id="sentoutuserscontainer">

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
            domreadyfunction();
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




        $(document).ajaxStop(function () {

            console.log("All AJAX requests completed");
            $('.dropdown-cont').off('change', '.filter-dropdown').on('change', '.filter-dropdown', function () {
                dropdownchange();
            });
            $('.app-preloader').remove();


        });

        function dropdownlist() {
            var managerURL = "<?= base_url('api/get-teammanager'); ?>";
            $.ajax({
                url: managerURL, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (response) {
                    const selectElement = document.getElementById("teammanagerdetails");

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

            var managervalue = parseInt($("#teammanagerdetails").val()) || 0;

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
                        $('#teamleaderdetails').empty();

                        const selectElement = document.getElementById("teamleaderdetails");

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

                        $('#teamleaderdetails').trigger('change');

                    }
                });
            } else {
                $('#teamleaderdetails').empty();
            }


        }



        function forcreatingtables(dataArray) {


            const table = $('<table>').addClass(
                'table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
            );
            // Create the table header
            const thead = $('<thead>').appendTo(table);
            const headerRow = $('<tr>').appendTo(thead);
            // Define an array of headers to hide
            const headersToHide = [
                'jobPossition'
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

                        if (key === 'Teammanager' || key === 'Teamleader') {

                            if (dataItem[key] == "Not Assigned") {
                                const div = $('<div>').addClass(
                                    'badge bg-error/10 text-error dark:bg-error/15'
                                ).text("Not Assigned");
                                div.appendTo(td);
                            } else {
                                const div = $('<div>').text(dataItem[key]);
                                div.appendTo(td);
                            }


                        }else if(key === 'LiveorSentout'){
                            if(dataItem[key] == "live")
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("Live");
                                div.appendTo(td);
                            }else if (dataItem[key] == "sentout"){
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("Sentout");
                                div.appendTo(td);
                            }else{
                                const div = $('<div>').text(dataItem[key]);
                                div.appendTo(td);
                            }
                        }else if(key === 'Simhandover'){
                            if(dataItem[key] == "" || dataItem[key] == "no")
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("no");
                                div.appendTo(td);
                            }else if(dataItem[key] == "yes"){
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("yes");
                                div.appendTo(td);
                            }else{
                                const div = $('<div>').text(dataItem[key]);
                                div.appendTo(td);
                            }
                        }else if(key === 'Laptophandover'){
                            if(dataItem[key] == "" || dataItem[key] == "no")
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("no");
                                div.appendTo(td);
                            }else if(dataItem[key] == "yes"){
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("yes");
                                div.appendTo(td);
                            }else{
                                const div = $('<div>').text(dataItem[key]);
                                div.appendTo(td);
                            }
                        }else if(key === 'IDCardhandover'){
                            if(dataItem[key] == "" || dataItem[key] == "no")
                            {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("no");
                                div.appendTo(td);
                            }else if(dataItem[key] == "yes"){
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("yes");
                                div.appendTo(td);
                            }else{
                                const div = $('<div>').text(dataItem[key]);
                                div.appendTo(td);
                            }
                        }else if(key === 'LiveorsentoutDate' || key === 'SimhandoverDate' || key === 'SimreturnDate' || key === 'LaptophandoverDate' || key === 'LaptopreturnDate' || key === 'IDCardhandoverDate'|| key === 'IDCardreturnDate' ){
                            if(dataItem[key] == "0000-00-00")
                            {
                                const div = $('<div>')
                                .text("");
                                div.appendTo(td);
                            }else{
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


            });

            // Append the table to the container with ID 'table-container'
            return table;


        }

        function dropdownchange() {
            var teamleaderval = $('#teamleaderdetails').val();
            var teammangerval = $('#teammanagerdetails').val();
            var fromdate = $('#from-date').val();
            var todate = $('#to-date').val();


            var getlivenandsentoutusers = "<?= base_url('api/get-liveandsentoutusers'); ?>";
            $.ajax({
                url: getlivenandsentoutusers,
                data: {
                    teamleaderval: teamleaderval,
                    teammangerval: teammangerval,
                    fromdate: fromdate,
                    todate: todate
                }, // Replace with your actual domain
                method: 'POST',
                dataType: 'json', // Expect JSON response
                success: function (dataArray) {

                    var alltotal = dataArray;
                    var idcardusers = alltotal.IdcardUsers;
                    var laptopusers = alltotal.LaptopUsers;
                    var liveusers = alltotal.LiveUsers;
                    var sentoutusers = alltotal.SentoutUsers;
                    var simcardusers = alltotal.SimcardUsers;
                    var totalcounts = alltotal.Totalcount;

                    var liveuserslist = forcreatingtables(liveusers);
                    $('#liveuserscontainer').html(liveuserslist);

                    var sentoutuserslist = forcreatingtables(sentoutusers);
                    $('#sentoutuserscontainer').html(sentoutuserslist);



                    $('.totalsatff').text(totalcounts[0].TotalStaff);
                    $('.simcardusers').text(totalcounts[0].Simcardusers);
                    $('.laptopusers').text(totalcounts[0].Laptopusers);
                    $('.idcardusers').text(totalcounts[0].IDCardusers);
                    $('.liveusers').text(totalcounts[0].Liveusers);
                    $('.sentoutusers').text(totalcounts[0].Sentoutusers);

                     // Check if the DataTable is already initialized
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
        dropdownchange();
    </script>
</body>

</html>