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
        p:hover {
            cursor: pointer;
            /* Change 'pointer' to the desired cursor style */
        }

        td:hover {
            cursor: pointer;
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
        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Projection Dashboard
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Projection</a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </li>
                    <li>Projection Dashboard</li>
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


                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Team Leader</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="teamleader">

                            </select>
                        </div>


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

                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Tele Caller</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="telecaller">

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

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="teammanager">

                            </select>
                        </div>


                    </div>

                </div>



            </div>

            <!-- Begins -->


            <div class="" style="margin-top:30px;">

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-8 lg:grid-cols-2">
                    <div class="card justify-between p-5">
                        <p class="font-medium">Assigned Leads</p>
                        <div class="flex items-center justify-between pt-4">
                            <div class="flex justify-between space-x-2 totalleads">

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary dark:text-accent"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>





                </div>

            </div>


            <!-- Zebra Table -->


            <div class="container" style="margin-top: 27px;">
                <div class="table-container managerleads">

                </div>

                <div class="table-container teamleaderleads">

                </div>

                <div class="table-container telecallerleads">

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

            $(document).ajaxStop(function () {

                console.log("All AJAX requests completed");

                $('.app-preloader').remove();
            });

        });



        //  Date wise searching data
        function handleDateChange() {
          
            
            

            // Get the selected date range in the date picker format
            const fromDate = $('#from-date').val(); // Format: "mm/dd/yyyy"
            const toDate = $('#to-date').val(); // Format: "mm/dd/yyyy"
            var teamLeaderID = $('#teamleader').val();
            var telecallerID = $('#telecaller').val();
            var teamManagerID = $('#teammanager').val();


            // Check if both "from" and "to" dates are filled
            if (fromDate !== '' && toDate !== '') {

                var appPreloader = $('<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">')
          .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

          // Append the appPreloader div as the first child of the body
          $('body').prepend(appPreloader);


                var apiURL11 = "<?php echo DASHBOARD_VAR_PROJECT_FILTER; ?>";
                $.ajax({
                    url: apiURL11,
                    data: {
                        fromDate: fromDate,
                        toDate: toDate,
                        teamLeaderID: teamLeaderID,
                        telecallerID: telecallerID,
                        teamManagerID: teamManagerID
                    }, // Replace with your actual domain
                    method: 'GET',
                    dataType: 'json', // Expect JSON response
                    success: function (data) {
                        console.log(data);
                        $('.app-preloader').remove();
                        $('.assignedleads').empty();
                        $('.totalleads').empty();
                        if (data.length > 0) {
                            // Get the last sub-array
                            const lastArray = data[data.length - 1];

                            // Extract values from the object in the last sub-array
                            const lastObject = lastArray[0];
                            const totalLeads = lastObject.TotalLeads;
                            const projectioncounts = lastObject.ProjectionCount;
                            const notinterestedcounts = lastObject.NotInterestedCount;




                            var leadurl = "<?= base_url('Projectionlist'); ?>"

                            // $('.assignedleads').text(assignedLeads);

                            const assignedLeadsContainer = $('.assignedleads');

                            function createCountElement(label, count,link) {
                                const countElement = $('<div>').addClass('mb-4');

                                const labelElement = $('<p>').addClass('text-xs+').text(label);

                                // Remove the "-" sign if count is negative
                                const countValue = count < 0 ? -count : count;

                                const countValueElement = $('<p>').addClass(
                                    'text-xl font-semibold text-slate-700 dark:text-navy-100').text(
                                    countValue);

                                    let id= 0;
                                    if(label === "Projection"){
                                        id=1;
                                    }else{
                                        id=0;
                                    }

                                    
                            let fromdatevalue;
                            let todatevalue;
                            if(fromDate !== '' && toDate !== ''){
                                fromdatevalue = fromDate
                                todatevalue = toDate
                            }
                                    const linkWithCount =
                                    `${link}?label=${label}&id=${id}&fromdate=${fromdatevalue}&todate=${todatevalue}`;

                                    const linkElement = $('<a>').attr('href', linkWithCount).append(
                                    countValueElement);

                                    countElement.append(labelElement, linkElement);

                                  return countElement;
                            }

                            // const converted = createCountElement("Conv", OverallIsConverted);
                            // const notconverted = createCountElement("NotConv", OverallNotConverted);


                            const totalLeadsElement = createCountElement("Total", totalLeads);


                            assignedLeadsContainer.append(totalLeadsElement);


                            const totalLeadsContainer = $('.totalleads');
                            // $('.totalleads').text(totalLeads);
                            const projectcouu = createCountElement("Projection", projectioncounts,leadurl);
                            const notintecouu = createCountElement("NotInterested", notinterestedcounts,leadurl);


                            totalLeadsContainer.append(projectcouu, notintecouu);


                        } else {
                            console.log('Data array is empty.');
                        }

                        $('.managerleads').empty();
                        $('.teamleaderleads').empty();
                        $('.telecallerleads').empty();

                        // Create tables and tbody elements
                        const managerTable = $('<table>').addClass('is-zebra w-full text-left');
                        const managerThead = $('<thead>'); // Create a thead element for the manager table
                        const managerTbody = $('<tbody>');



                        const teamLeaderTable = $('<table>').addClass('is-zebra w-full text-left');
                        const teamLeaderThead = $(
                            '<thead>'); // Create a thead element for the team leader table
                        const teamLeaderTbody = $('<tbody>');

                        const telecallerTable = $('<table>').addClass('is-zebra w-full text-left');
                        const telecallerThead = $(
                            '<thead>'); // Create a thead element for the telecaller table
                        const telecallerTbody = $('<tbody>');

                        // Define headers for the manager table within the thead element
                        const managerHeaderRow = $('<tr>').appendTo(managerThead);
                        $('<th>').text('Manager Name').appendTo(managerHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Projection').appendTo(managerHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Not Inter').appendTo(managerHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );

                        // Define headers for the team leader table within the thead element
                        const teamLeaderHeaderRow = $('<tr>').appendTo(teamLeaderThead);
                        $('<th>').text('Team Leader Name').appendTo(teamLeaderHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        );
                        $('<th>').text('Projection').appendTo(teamLeaderHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        );
                        $('<th>').text('Not Inter').appendTo(teamLeaderHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        );

                        // Define headers for the telecaller table within the thead element
                        const telecallerHeaderRow = $('<tr>').appendTo(telecallerThead);
                        $('<th>').text('Telecaller Name').appendTo(telecallerHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        );
                        $('<th>').text('Projection').appendTo(telecallerHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        );
                        $('<th>').text('Not Inter').appendTo(telecallerHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        );


                        function Perprojectioncount(row, Count, id, link) {
                            const linkWithCount =
                                `${link}?perid=${id}&id=1`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                             td.attr('data-id',id);
                            linkElement.text(Count); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }

                        function PerNotinterestedCount(row, Count, id, link) {
                            const linkWithCount =
                            `${link}?perid=${id}&id=0`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                            td.attr('data-id',id);
                            linkElement.text(Count); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }




                        for (let i = 0; i < data.length; i++) {
                            const section = data[i];

                            // Loop through each data type within the section (Manager, TeamLeader, Telecaller)
                            for (let j = 0; j < section.length; j++) {
                                const item = section[j];

                                if ('ManagerName' in item) {
                                    // This is Manager data
                                    const managerrow2 = $('<tr>').appendTo(managerTbody);
                                    $('<td>').text(item.ManagerName).appendTo(managerrow2).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    // $('<td>').text(item.ProjectionCount).appendTo(managerrow2).addClass(
                                    //     'whitespace-nowrap px-4 py-3 sm:px-5');
                                    Perprojectioncount(managerrow2,item.ProjectionCount,item.ManagerID,leadurl);
                                    // $('<td>').text(item.NotInterestedCount).appendTo(managerrow2).addClass(
                                    //     'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    PerNotinterestedCount(managerrow2,item.NotInterestedCount,item.ManagerID,leadurl);
                                } else if ('TeamLeaderName' in item) {
                                    // This is TeamLeader data
                                    const row = $('<tr>').appendTo(teamLeaderTbody);
                                    $('<td>').text(item.TeamLeaderName).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    // $('<td>').text(item.ProjectionCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap px-4 py-3 sm:px-5');
                                    Perprojectioncount(row,item.ProjectionCount,item.TeamLeaderID,leadurl);
                                    // $('<td>').text(item.NotInterestedCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    PerNotinterestedCount(row,item.NotInterestedCount,item.TeamLeaderID,leadurl);
                                } else if ('TelecallerName' in item) {
                                    // This is Telecaller data
                                    const row = $('<tr>').appendTo(telecallerTbody);
                                    $('<td>').text(item.TelecallerName).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    // $('<td>').text(item.ProjectionCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap px-4 py-3 sm:px-5');
                                    Perprojectioncount(row,item.ProjectionCount,item.TelecallerID,leadurl);
                                    // $('<td>').text(item.NotInterestedCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    PerNotinterestedCount(row,item.NotInterestedCount,item.TelecallerID,leadurl);
                                }
                            }
                        }

                        function getIdCallback(row) {
                            const id = row.find('td[data-id]').first().attr('data-id');
                            return id;
                        }

                        function calculateDynamicTotal(tableBody, getIdCallback) {
                            let totalSecondColumn = 0;
                            let totalThirdColumn = 0;
                            const ids = [];

                            tableBody.find('tr').each(function () {
                                const cells = $(this).find('td');
                                const columnCount = cells.length;

                                if (columnCount === 2 || columnCount === 3) {
                                    const secondColumnCell = cells.eq(1);
                                    const thirdColumnCell = cells.eq(2);

                                    const secondColumnValue = parseFloat(secondColumnCell.text()
                                        .replace('₹', '').trim().replace(/,/g, ''));
                                    if (!isNaN(secondColumnValue)) {
                                        totalSecondColumn += secondColumnValue;
                                    }

                                    if (columnCount === 3) {
                                        const thirdColumnValue = parseFloat(thirdColumnCell
                                            .text().replace('₹', '').trim().replace(/,/g,
                                                ''));
                                        if (!isNaN(thirdColumnValue)) {
                                            totalThirdColumn += thirdColumnValue;
                                        }

                                        // Extract the ID using the provided callback function

                                    }
                                    const id = getIdCallback($(this));
                                    if (id) {
                                        ids.push(id);
                                    }
                                }
                            });

                            return {
                                totalSecondColumn,
                                totalThirdColumn,
                                ids,
                            };
                        }

                        const ManagerwiseTotal = calculateDynamicTotal(managerTbody, getIdCallback);

                        const TeamleaderwiseTotal = calculateDynamicTotal(teamLeaderTbody,
                            getIdCallback);
                        const TeleCallerwiseTotal = calculateDynamicTotal(telecallerTbody,
                            getIdCallback);


                        function addTotalRow(tableBody, totalSecondColumn, totalThirdColumn, ids,
                                             category, link) {
                            const totalRow = $('<tr>');

                            // Create a non-linked cell for the "Total" label
                            const totalLabelCell = $('<td>').text(`Total`).addClass(
                                'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                            let totalSecondColumnCell;

                            totalSecondColumnCell = $('<a>')
                                .attr('href',
                                    `${link}?perid=${ids}&fromdate=${fromDate}&todate=${toDate}&id=1`
                                )
                                .text(`${totalSecondColumn.toFixed(0)}`);


                            // Create an anchor tag for the third column total (if provided)
                            const totalThirdColumnCell = totalThirdColumn !== null && !isNaN(
                                totalThirdColumn) ? $('<a>')
                                .attr('href',
                                    `${link}?perid=${ids}&fromdate=${fromDate}&todate=${toDate}&id=0`
                                )
                                .text(totalThirdColumn)
                                .addClass('sd') : '';




                            // Append the cells to the total row
                            totalRow.append(totalLabelCell, $('<td>').addClass(
                                'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5').append(
                                totalSecondColumnCell));

                            // If the third column is not null, add it to the total row
                            if (totalThirdColumnCell !== '') {
                                totalRow.append($('<td>').addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5').append(
                                    totalThirdColumnCell));
                            }

                            // Set the IDs and category as data attributes on the total row
                            totalRow.data('ids', ids);
                            totalRow.data('category', category);

                            tableBody.append(totalRow);
                        }


                        addTotalRow(managerTbody, ManagerwiseTotal.totalSecondColumn,
                            ManagerwiseTotal.totalThirdColumn, ManagerwiseTotal.ids, 'Manager',
                            leadurl);

                        // Call addTotalRow for Teamleaderwise table
                        addTotalRow(teamLeaderTbody, TeamleaderwiseTotal.totalSecondColumn,
                            TeamleaderwiseTotal.totalThirdColumn, TeamleaderwiseTotal.ids,
                            'TeamLeader', leadurl);

                        // Call addTotalRow for TeleCallerwise table
                        addTotalRow(telecallerTbody, TeleCallerwiseTotal.totalSecondColumn,
                            TeleCallerwiseTotal.totalThirdColumn, TeleCallerwiseTotal.ids,
                            'TeleCaller', leadurl);

                        // Append the tables to their respective elements
                        managerTable.append(managerThead, managerTbody);
                        teamLeaderTable.append(teamLeaderThead, teamLeaderTbody);
                        telecallerTable.append(telecallerThead, telecallerTbody);

                        // Append the tables to the corresponding divs
                        $('.managerleads').html(managerTable);
                        $('.teamleaderleads').html(teamLeaderTable);
                        $('.telecallerleads').html(telecallerTable);
                    }
                });
            }

        }


        // For getting table records

        // For getting team leader
        var apiURL5 = "<?= base_url('api/get-teamleader'); ?>";
        $.ajax({
            url: apiURL5, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                const selectElement = document.getElementById("teamleader");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((teamleader) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = teamleader.team_leader_id;
                    optionElement.textContent = teamleader.team_leader_name;
                    selectElement.appendChild(optionElement);
                });

                $('#teamleader').trigger('change');
            }
        });

        // For getting telecaller
        var apiURL6 = "<?= base_url('api/get-teamcaller'); ?>";
        $.ajax({
            url: apiURL6, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("telecaller");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((telecaller) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = telecaller.telecaller_id;
                    optionElement.textContent = telecaller.telecaller_name;
                    selectElement.appendChild(optionElement);
                });

                $('#telecaller').trigger('change');
            }
        });

        // For getting team manager
        var apiURL4 = "<?= base_url('api/get-teammanager'); ?>";
        $.ajax({
            url: apiURL4, // Replace with your actual domain
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



        $('.filter-dropdown').change(function () {
            var teamLeaderID = $('#teamleader').val();
            var telecallerID = $('#telecaller').val();
            var teamManagerID = $('#teammanager').val();

            var appPreloader = $('<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">')
          .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

           // Append the appPreloader div as the first child of the body
           $('body').prepend(appPreloader);

            //ALL_FILTER_VAR
            var apiURL10 = "<?php echo DASHBOARD_VAR_PROJECT; ?>";
            $.ajax({
                url: apiURL10,
                data: {
                    teamLeaderID: teamLeaderID,
                    telecallerID: telecallerID,
                    teamManagerID: teamManagerID
                }, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    console.log(data);
                    $('.assignedleads').empty();
                    $('.totalleads').empty();
                    $('.app-preloader').remove();
                    if (data.length > 0) {
                        // Get the last sub-array
                        const lastArray = data[data.length - 1];

                        // Extract values from the object in the last sub-array
                        const lastObject = lastArray[0];
                        const totalLeads = lastObject.TotalLeads;
                        const projectioncounts = lastObject.ProjectionCount;
                        const notinterestedcounts = lastObject.NotInterestedCount;



                        var leadurl = "<?= base_url('Projectionlist'); ?>"


                        // $('.assignedleads').text(assignedLeads);

                        const assignedLeadsContainer = $('.assignedleads');

                        function createCountElement(label, count,link) {
                                const countElement = $('<div>').addClass('mb-4');

                                const labelElement = $('<p>').addClass('text-xs+').text(label);

                                // Remove the "-" sign if count is negative
                                const countValue = count < 0 ? -count : count;

                                const countValueElement = $('<p>').addClass(
                                    'text-xl font-semibold text-slate-700 dark:text-navy-100').text(
                                    countValue);

                                    let id= 0;
                                    if(label === "Projection"){
                                        id=1;
                                    }else{
                                        id=0;
                                    }
                                    const linkWithCount =
                                    `${link}?label=${label}&id=${id}`;

                                    const linkElement = $('<a>').attr('href', linkWithCount).append(
                                    countValueElement);

                                    countElement.append(labelElement, linkElement);

                                  return countElement;
                            }

                        // const converted = createCountElement("Conv", OverallIsConverted);
                        // const notconverted = createCountElement("NotConv", OverallNotConverted);


                        const totalLeadsElement = createCountElement("Total", totalLeads);


                        assignedLeadsContainer.append(totalLeadsElement);


                        const totalLeadsContainer = $('.totalleads');
                        // $('.totalleads').text(totalLeads);
                        const projectcouu = createCountElement("Projection", projectioncounts,leadurl);
                        const notintecouu = createCountElement("NotInterested",
                            notinterestedcounts,leadurl);


                        totalLeadsContainer.append(projectcouu, notintecouu);


                        // Use these variables to update your cards or perform other actions
                    } else {
                        console.log('Data array is empty.');
                    }

                    $('.managerleads').empty();
                    $('.teamleaderleads').empty();
                    $('.telecallerleads').empty();

                    // Create tables and tbody elements
                    const managerTable = $('<table>').addClass('is-zebra w-full text-left');
                    const managerThead = $(
                        '<thead>'); // Create a thead element for the manager table
                    const managerTbody = $('<tbody>');

                    const teamLeaderTable = $('<table>').addClass('is-zebra w-full text-left');
                    const teamLeaderThead = $(
                        '<thead>'); // Create a thead element for the team leader table
                    const teamLeaderTbody = $('<tbody>');

                    const telecallerTable = $('<table>').addClass('is-zebra w-full text-left');
                    const telecallerThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const telecallerTbody = $('<tbody>');

                    // Define headers for the manager table within the thead element
                    const managerHeaderRow = $('<tr>').appendTo(managerThead);
                    $('<th>').text('Manager Name').appendTo(managerHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Projection').appendTo(managerHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Not Inter').appendTo(managerHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    // Define headers for the team leader table within the thead element
                    const teamLeaderHeaderRow = $('<tr>').appendTo(teamLeaderThead);
                    $('<th>').text('Team Leader Name').appendTo(teamLeaderHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    );
                    $('<th>').text('Projection').appendTo(teamLeaderHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    );
                    $('<th>').text('Not Inter').appendTo(teamLeaderHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    );

                    // Define headers for the telecaller table within the thead element
                    const telecallerHeaderRow = $('<tr>').appendTo(telecallerThead);
                    $('<th>').text('Telecaller Name').appendTo(telecallerHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    );
                    $('<th>').text('Projection').appendTo(telecallerHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    );
                    $('<th>').text('Not Inter').appendTo(telecallerHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                    );

                    function Perprojectioncount(row, Count, id, link) {
                            const linkWithCount =
                                `${link}?perid=${id}&id=1`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                        td.attr('data-id', id);
                            linkElement.text(Count); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }

                        function PerNotinterestedCount(row, Count, id, link) {
                            const linkWithCount =
                            `${link}?perid=${id}&id=0`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                            td.attr('data-id', id);
                            linkElement.text(Count); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }




                        for (let i = 0; i < data.length; i++) {
                            const section = data[i];

                            // Loop through each data type within the section (Manager, TeamLeader, Telecaller)
                            for (let j = 0; j < section.length; j++) {
                                const item = section[j];

                                if ('ManagerName' in item) {
                                    // This is Manager data
                                    const managerrow2 = $('<tr>').appendTo(managerTbody);
                                    $('<td>').text(item.ManagerName).appendTo(managerrow2).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    // $('<td>').text(item.ProjectionCount).appendTo(managerrow2).addClass(
                                    //     'whitespace-nowrap px-4 py-3 sm:px-5');
                                    Perprojectioncount(managerrow2,item.ProjectionCount,item.ManagerID,leadurl);
                                    // $('<td>').text(item.NotInterestedCount).appendTo(managerrow2).addClass(
                                    //     'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    PerNotinterestedCount(managerrow2,item.NotInterestedCount,item.ManagerID,leadurl);
                                } else if ('TeamLeaderName' in item) {
                                    // This is TeamLeader data
                                    const row = $('<tr>').appendTo(teamLeaderTbody);
                                    $('<td>').text(item.TeamLeaderName).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    // $('<td>').text(item.ProjectionCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap px-4 py-3 sm:px-5');
                                    Perprojectioncount(row,item.ProjectionCount,item.TeamLeaderID,leadurl);
                                    // $('<td>').text(item.NotInterestedCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    PerNotinterestedCount(row,item.NotInterestedCount,item.TeamLeaderID,leadurl);
                                } else if ('TelecallerName' in item) {
                                    // This is Telecaller data
                                    const row = $('<tr>').appendTo(telecallerTbody);
                                    $('<td>').text(item.TelecallerName).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    // $('<td>').text(item.ProjectionCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap px-4 py-3 sm:px-5');
                                    Perprojectioncount(row,item.ProjectionCount,item.TelecallerID,leadurl);
                                    // $('<td>').text(item.NotInterestedCount).appendTo(row).addClass(
                                    //     'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                    PerNotinterestedCount(row,item.NotInterestedCount,item.TelecallerID,leadurl);
                                }
                            }
                        }

                    function getIdCallback(row) {
                        const id = row.find('td[data-id]').first().attr('data-id');
                        return id;
                    }


                    function calculateDynamicTotal(tableBody, getIdCallback) {
                        let totalSecondColumn = 0;
                        let totalThirdColumn = 0;
                        const ids = [];

                        tableBody.find('tr').each(function () {
                            const cells = $(this).find('td');
                            const columnCount = cells.length;

                            if (columnCount === 2 || columnCount === 3) {
                                const secondColumnCell = cells.eq(1);
                                const thirdColumnCell = cells.eq(2);

                                const secondColumnValue = parseFloat(secondColumnCell.text()
                                    .replace('₹', '').trim().replace(/,/g, ''));
                                if (!isNaN(secondColumnValue)) {
                                    totalSecondColumn += secondColumnValue;
                                }

                                if (columnCount === 3) {
                                    const thirdColumnValue = parseFloat(thirdColumnCell
                                        .text().replace('₹', '').trim().replace(/,/g,
                                            ''));
                                    if (!isNaN(thirdColumnValue)) {
                                        totalThirdColumn += thirdColumnValue;
                                    }

                                    // Extract the ID using the provided callback function

                                }
                                const id = getIdCallback($(this));
                                if (id) {
                                    ids.push(id);
                                }
                            }
                        });

                        return {
                            totalSecondColumn,
                            totalThirdColumn,
                            ids,
                        };
                    }


                    const ManagerwiseTotal = calculateDynamicTotal(managerTbody, getIdCallback);

                    const TeamleaderwiseTotal = calculateDynamicTotal(teamLeaderTbody,
                        getIdCallback);
                    const TeleCallerwiseTotal = calculateDynamicTotal(telecallerTbody,
                        getIdCallback);


                    function addTotalRow(tableBody, totalSecondColumn, totalThirdColumn, ids,
                                         category, link) {
                        const totalRow = $('<tr>');

                        // Create a non-linked cell for the "Total" label
                        const totalLabelCell = $('<td>').text(`Total`).addClass(
                            'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                        let totalSecondColumnCell;

                        totalSecondColumnCell = $('<a>')
                            .attr('href',
                                `${link}?perid=${ids}&id=1`
                            )
                            .text(`${totalSecondColumn.toFixed(0)}`);


                        // Create an anchor tag for the third column total (if provided)
                        const totalThirdColumnCell = totalThirdColumn !== null && !isNaN(
                            totalThirdColumn) ? $('<a>')
                            .attr('href',
                                `${link}?perid=${ids}&id=0`
                            )
                            .text(totalThirdColumn)
                            .addClass('sd') : '';




                        // Append the cells to the total row
                        totalRow.append(totalLabelCell, $('<td>').addClass(
                            'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5').append(
                            totalSecondColumnCell));

                        // If the third column is not null, add it to the total row
                        if (totalThirdColumnCell !== '') {
                            totalRow.append($('<td>').addClass(
                                'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5').append(
                                totalThirdColumnCell));
                        }

                        // Set the IDs and category as data attributes on the total row
                        totalRow.data('ids', ids);
                        totalRow.data('category', category);

                        tableBody.append(totalRow);
                    }


                    addTotalRow(managerTbody, ManagerwiseTotal.totalSecondColumn,
                        ManagerwiseTotal.totalThirdColumn, ManagerwiseTotal.ids, 'Manager',
                        leadurl);

                    // Call addTotalRow for Teamleaderwise table
                    addTotalRow(teamLeaderTbody, TeamleaderwiseTotal.totalSecondColumn,
                        TeamleaderwiseTotal.totalThirdColumn, TeamleaderwiseTotal.ids,
                        'TeamLeader', leadurl);

                    // Call addTotalRow for TeleCallerwise table
                    addTotalRow(telecallerTbody, TeleCallerwiseTotal.totalSecondColumn,
                        TeleCallerwiseTotal.totalThirdColumn, TeleCallerwiseTotal.ids,
                        'TeleCaller', leadurl);



                    // Append the tables to their respective elements
                    managerTable.append(managerThead, managerTbody);
                    teamLeaderTable.append(teamLeaderThead, teamLeaderTbody);
                    telecallerTable.append(telecallerThead, telecallerTbody);

                    // Append the tables to the corresponding divs
                    $('.managerleads').html(managerTable);
                    $('.teamleaderleads').html(teamLeaderTable);
                    $('.telecallerleads').html(telecallerTable);

                    handleDateChange();



                }
            });

        });
    </script>


</body>

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->

</html>