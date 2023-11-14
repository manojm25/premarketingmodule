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
                    Collection Dashboard
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Collections</a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </li>
                    <li>Collection Dashboard</li>
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
                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Payment Mode</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="paymentmode">

                            </select>
                        </div>


                    </div>

                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">


                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Vendor name</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="vendorname">

                            </select>
                        </div>


                    </div>

                </div>




            </div>

            <!-- Begins -->
            <div class="" style="margin-top:30px;background-color: white;padding: 22px;">
                <div class="grid grid-cols-3 gap-4 sm:grid-cols-3 sm:gap-8 lg:grid-cols-3" style="text-align:center;">
                    <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                        <p class="font-medium">Total</p>
                        <div class="flex items-center justify-center pt-4">

                            <div class="flex justify-between space-x-2 totalcollection">

                            </div>

                        </div>
                    </div>
                    <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                        <p class="font-medium">Payment Wise Collection</p>
                        <div class="card p-3" style="display: -webkit-inline-box;padding-right: 0rem;">
                            <div class="table-container paymentwisecollection" style="overflow: auto;">

                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                        <p class="font-medium">Vendor Wise Collection</p>
                        <div class="card p-3" style="display: -webkit-inline-box;padding-right: 0rem;">
                            <div class="table-container vedorwisecollection" style="overflow: auto;">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-3 gap-4 sm:grid-cols-3 sm:gap-8 lg:grid-cols-3"
                style="text-align:center;margin-top: 44px;background-color: white;padding: 28px;">
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <p class="font-medium">Manager Wise Collection</p>
                    <div class="card p-3" style="display: -webkit-inline-box;padding-right: 0rem;">
                        <div class="table-container managerwisecollection" style="overflow: auto;">

                        </div>
                    </div>
                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <p class="font-medium">Teamleader Wise Collection</p>
                    <div class="card p-3" style="display: -webkit-inline-box;padding-right: 0rem;">
                        <div class="table-container teamleaderwisecollection" style="overflow: auto;">

                        </div>
                    </div>
                </div>
                <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                    <p class="font-medium">TeleCaller Wise Collection</p>
                    <div class="card p-3" style="display: -webkit-inline-box;padding-right: 0rem;">
                        <div class="table-container telecallerwisecollection" style="overflow: auto;">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Zebra Table -->

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
            // gettingrecords();

            $(document).ajaxStop(function () {

                console.log("All AJAX requests completed");
                $('.app-preloader').remove();
                // gettingrecords();
                // gettingrecords();

            });

        });

        function gettingrecords() {
            var collectiondashboarddata = "<?= base_url('api/get-collectiondata'); ?>";
            $.ajax({
                url: collectiondashboarddata, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    console.log(data);
                    const lastArray = data[data.length - 1];

                    // Extract values from the object in the last sub-array
                    const lastObject = lastArray[0];
                    const totalcollectionamout = lastObject.TotalCollectionAmount;
                    const totalcollectioncontainer = $('.totalcollection');

                    function createCountElement(label, count) {
                        const countElement = $('<div>').addClass('mb-4');

                        const labelElement = $('<p>').addClass('text-xs+').text(label);

                        // Remove the "-" sign if count is negative
                        const countValue = count < 0 ? -count : count;

                        const countValueElement = $('<p>').addClass(
                            'text-xl font-semibold text-slate-700 dark:text-navy-100').text(
                            countValue);

                        countElement.append(labelElement, countValueElement);

                        return countElement;
                    }
                    const totalcollectionamynt = createCountElement("Collection", "₹ " +
                        totalcollectionamout);
                    totalcollectioncontainer.append(totalcollectionamynt);

                    // Create tables and tbody elements
                    const PaymentTable = $('<table>').addClass('is-zebra w-full text-left');
                    const PaymentThead = $('<thead>'); // Create a thead element for the manager table
                    const PaymentTbody = $('<tbody>');


                    const PaymentHeaderRow = $('<tr>').appendTo(PaymentThead);
                    $('<th>').text('Payment Type').appendTo(PaymentHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(PaymentHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const VendorTable = $('<table>').addClass('is-zebra w-full text-left');
                    const VendorThead = $(
                        '<thead>'); // Create a thead element for the team leader table
                    const VendorTbody = $('<tbody>');


                    const VendorHeaderRow = $('<tr>').appendTo(VendorThead);
                    $('<th>').text('Vendor Type').appendTo(VendorHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(VendorHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const ManagerwiseTable = $('<table>').addClass('is-zebra w-full text-left');
                    const ManagerwiseThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const ManagerwiseTbody = $('<tbody>');

                    const ManagerwiseHeaderRow = $('<tr>').appendTo(ManagerwiseThead);
                    $('<th>').text('Manager').appendTo(ManagerwiseHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(ManagerwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const TeamleaderwiseTable = $('<table>').addClass('is-zebra w-full text-left');
                    const TeamleaderwiseThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const TeamleaderwiseTbody = $('<tbody>');

                    const TeamleaderwiseHeaderRow = $('<tr>').appendTo(TeamleaderwiseThead);
                    $('<th>').text('Team Leader').appendTo(TeamleaderwiseHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(TeamleaderwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const TeleCallerwiseTable = $('<table>').addClass('is-zebra w-full text-left');
                    const TeleCallerwiseThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const TeleCallerwiseTbody = $('<tbody>');

                    const TeleCallerwiseHeaderRow = $('<tr>').appendTo(TeleCallerwiseThead);
                    $('<th>').text('TeleCaller').appendTo(TeleCallerwiseHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(TeleCallerwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );


                    for (let i = 0; i < data.length; i++) {
                        const section = data[i];

                        // Loop through each data type within the section (Manager, TeamLeader, Telecaller)
                        for (let j = 0; j < section.length; j++) {
                            const item = section[j];

                            if ('mode_name' in item) {
                                // This is Manager data
                                const paymentrow2 = $('<tr>').appendTo(PaymentTbody);
                                $('<td>').text(item.mode_name).appendTo(paymentrow2).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                $('<td>').text('₹ ' + item.mode_collection).appendTo(paymentrow2).addClass(
                                    'whitespace-nowrap px-4 py-3 sm:px-5');

                            } else if ('vendor_name' in item) {
                                // This is TeamLeader data
                                const row = $('<tr>').appendTo(VendorTbody);
                                $('<td>').text(item.vendor_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                $('<td>').text('₹ ' + item.vendor_collection).appendTo(row).addClass(
                                    'whitespace-nowrap px-4 py-3 sm:px-5');

                            } else if ('manager_name' in item) {
                                // This is Telecaller data
                                const row = $('<tr>').appendTo(ManagerwiseTbody);
                                $('<td>').text(item.manager_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                $('<td>').text('₹ ' + item.manager_collection).appendTo(row).addClass(
                                    'whitespace-nowrap px-4 py-3 sm:px-5');

                            } else if ('team_leader_name' in item) {
                                const row = $('<tr>').appendTo(TeamleaderwiseTbody);
                                $('<td>').text(item.team_leader_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                $('<td>').text('₹ ' + item.team_leader_collection).appendTo(row).addClass(
                                    'whitespace-nowrap px-4 py-3 sm:px-5');
                            } else if ('telecaller_name' in item) {
                                const row = $('<tr>').appendTo(TeleCallerwiseTbody);
                                $('<td>').text(item.telecaller_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                                $('<td>').text('₹ ' + item.telecaller_collection).appendTo(row).addClass(
                                    'whitespace-nowrap px-4 py-3 sm:px-5');
                            }
                        }
                    }

                    // Append the tables to their respective elements
                    PaymentTable.append(PaymentThead, PaymentTbody);
                    VendorTable.append(VendorThead, VendorTbody);
                    ManagerwiseTable.append(ManagerwiseThead, ManagerwiseTbody);
                    TeamleaderwiseTable.append(TeamleaderwiseThead, TeamleaderwiseTbody);
                    TeleCallerwiseTable.append(TeleCallerwiseThead, TeleCallerwiseTbody);

                    // Append the tables to the corresponding divs
                    $('.paymentwisecollection').html(PaymentTable);
                    $('.vedorwisecollection').html(VendorTable);
                    $('.managerwisecollection').html(ManagerwiseTable);
                    $('.teamleaderwisecollection').html(TeamleaderwiseTable);
                    $('.telecallerwisecollection').html(TeleCallerwiseTable);

                }
            });
        }

        var paymenturl = "<?= base_url('api/get-paymentmodelist'); ?>";
        $.ajax({
            url: paymenturl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("paymentmode");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((payment_modes) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = payment_modes.mode_id;
                    optionElement.textContent = payment_modes.mode_name;
                    selectElement.appendChild(optionElement);
                });


                $('#paymentmode').trigger('change');
            }
        });


        var vendorlisturl = "<?= base_url('api/get-vendorlist'); ?>";
        $.ajax({
            url: vendorlisturl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("vendorname");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((vendor) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = vendor.vendor_id;
                    optionElement.textContent = vendor.vendor_name;
                    selectElement.appendChild(optionElement);
                });


                $('#vendorname').trigger('change');
            }
        });

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



        $('.filter-dropdown').off('change').on('change', function () {

            var teamLeaderID = $('#teamleader').val();
            var telecallerID = $('#telecaller').val();
            var teamManagerID = $('#teammanager').val();
            var paymentmodeID = $('#paymentmode').val();
            var vendormodeID = $('#vendorname').val();

            var appPreloader = $(
                    '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                )
                .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

            // Append the appPreloader div as the first child of the body
            $('body').prepend(appPreloader);
            var theurl = "<?= base_url('api/get-filteredcollectiondata'); ?>";
            $.ajax({
                url: theurl,
                data: {
                    teamLeaderID: teamLeaderID,
                    telecallerID: telecallerID,
                    teamManagerID: teamManagerID,
                    paymentID: paymentmodeID,
                    vendorID: vendormodeID
                }, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    console.log(data);
                    $('.app-preloader').remove();
                    $('.totalcollection').empty();


                    const lastArray = data[data.length - 1];

                    // Extract values from the object in the last sub-array
                    const lastObject = lastArray[0];
                    const totalcollectionamout = lastObject.TotalCollectionAmount;
                    const totalcollectioncontainer = $('.totalcollection');


                    var leadurl = "<?= base_url('Collectionlist'); ?>"

                    function createCountElement(label, count, link) {
                        const countElement = $('<div>').addClass('mb-4');

                        const labelElement = $('<p>').addClass('text-xs+').text(label);

                        // Remove the "-" sign if count is negative
                        const countValue = count < 0 ? -count : count;

                        const countValueElement = $('<p>').addClass(
                            'text-xl font-semibold text-slate-700 dark:text-navy-100').text(
                            countValue);

                        const linkWithCount =
                            `${link}?Collection=1`;

                        const linkElement = $('<a>').attr('href', linkWithCount).append(
                            countValueElement);

                        countElement.append(labelElement, linkElement);

                        return countElement;
                    }
                    const totalcollectionamynt = createCountElement("Collection", "₹ " +
                        totalcollectionamout, leadurl);
                    totalcollectioncontainer.html(totalcollectionamynt);

                    // Create tables and tbody elements
                    const PaymentTable = $('<table>').addClass('is-zebra w-full text-left');
                    const PaymentThead = $(
                        '<thead>'); // Create a thead element for the manager table
                    const PaymentTbody = $('<tbody>');


                    const PaymentHeaderRow = $('<tr>').appendTo(PaymentThead);
                    $('<th>').text('Payment Type').appendTo(PaymentHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(PaymentHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const VendorTable = $('<table>').addClass('is-zebra w-full text-left');
                    const VendorThead = $(
                        '<thead>'); // Create a thead element for the team leader table
                    const VendorTbody = $('<tbody>');


                    const VendorHeaderRow = $('<tr>').appendTo(VendorThead);
                    $('<th>').text('Vendor Type').appendTo(VendorHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(VendorHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const ManagerwiseTable = $('<table>').addClass('is-zebra w-full text-left');
                    const ManagerwiseThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const ManagerwiseTbody = $('<tbody>');

                    const ManagerwiseHeaderRow = $('<tr>').appendTo(ManagerwiseThead);
                    $('<th>').text('Manager').appendTo(ManagerwiseHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(ManagerwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Admission').appendTo(ManagerwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    const TeamleaderwiseTable = $('<table>').addClass(
                        'is-zebra w-full text-left');
                    const TeamleaderwiseThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const TeamleaderwiseTbody = $('<tbody>');

                    const TeamleaderwiseHeaderRow = $('<tr>').appendTo(TeamleaderwiseThead);
                    $('<th>').text('Team Leader').appendTo(TeamleaderwiseHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(TeamleaderwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Admission').appendTo(TeamleaderwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );


                    const TeleCallerwiseTable = $('<table>').addClass(
                        'is-zebra w-full text-left');
                    const TeleCallerwiseThead = $(
                        '<thead>'); // Create a thead element for the telecaller table
                    const TeleCallerwiseTbody = $('<tbody>');

                    const TeleCallerwiseHeaderRow = $('<tr>').appendTo(TeleCallerwiseThead);
                    $('<th>').text('TeleCaller').appendTo(TeleCallerwiseHeaderRow).addClass(
                        'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Collection').appendTo(TeleCallerwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );
                    $('<th>').text('Admission').appendTo(TeleCallerwiseHeaderRow).addClass(
                        'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                    );

                    function Paymenttype(row, mode_collection, link, id) {
                        const linkWithCount =
                            `${link}?paymentid=${id}`;
                        const linkElement = $('<a>').attr('href', linkWithCount);
                        const td = $('<td>').appendTo(row).addClass(
                            'whitespace-nowrap px-4 py-3 sm:px-5');
                        td.attr('data-id', id);

                        linkElement.text(
                            mode_collection); // Display the isConverted value in the link
                        linkElement.appendTo(td);
                    }

                    function Vendortype(row, vendor_collection, link, id) {
                        const linkWithCount =
                            `${link}?vendorid=${id}`;
                        const linkElement = $('<a>').attr('href', linkWithCount);
                        const td = $('<td>').appendTo(row).addClass(
                            'whitespace-nowrap px-4 py-3 sm:px-5');
                        td.attr('data-id', id);

                        linkElement.text(
                            vendor_collection); // Display the isConverted value in the link
                        linkElement.appendTo(td);
                    }

                    function PerID(row, collection, link, id) {
                        const linkWithCount =
                            `${link}?perid=${id}&managerid=${id}&teamleaderid=${id}&telecallerid=${id}`;
                        const linkElement = $('<a>').attr('href', linkWithCount);
                        const td = $('<td>').appendTo(row).addClass(
                            'whitespace-nowrap px-4 py-3 sm:px-5');
                        td.attr('data-id', id);

                        linkElement.text(collection); // Display the isConverted value in the link
                        linkElement.appendTo(td);
                    }




                    for (let i = 0; i < data.length; i++) {
                        const section = data[i];

                        // Loop through each data type within the section (Manager, TeamLeader, Telecaller)
                        for (let j = 0; j < section.length; j++) {
                            const item = section[j];

                            if ('mode_name' in item) {
                                // This is Manager data
                                const paymentrow2 = $('<tr>').appendTo(PaymentTbody);
                                $('<td>').text(item.mode_name).appendTo(paymentrow2).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                Paymenttype(paymentrow2, '₹ ' + item.mode_collection, leadurl, item
                                    .mode_id);


                            } else if ('vendor_name' in item) {
                                // This is TeamLeader data
                                const row = $('<tr>').appendTo(VendorTbody);
                                $('<td>').text(item.vendor_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                Vendortype(row, '₹ ' + item.vendor_collection, leadurl, item
                                    .vendor_id);

                            } else if ('manager_name' in item) {
                                // This is Telecaller data
                                const row = $('<tr>').appendTo(ManagerwiseTbody);
                                $('<td>').text(item.manager_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                PerID(row, '₹ ' + item.manager_collection, leadurl, item
                                    .manager_id);
                                PerID(row, item.admission_count, leadurl, item.manager_id);
                            } else if ('team_leader_name' in item) {
                                const row = $('<tr>').appendTo(TeamleaderwiseTbody);
                                $('<td>').text(item.team_leader_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                PerID(row, '₹ ' + item.team_leader_collection, leadurl, item
                                    .team_leader_id);

                                PerID(row, item.admission_count, leadurl, item.team_leader_id);
                            } else if ('telecaller_name' in item) {
                                const row = $('<tr>').appendTo(TeleCallerwiseTbody);
                                $('<td>').text(item.telecaller_name).appendTo(row).addClass(
                                    'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                PerID(row, '₹ ' + item.telecaller_collection, leadurl, item
                                    .telecaller_id);
                                PerID(row, item.admission_count, leadurl, item.telecaller_id);
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



                    const ManagerwiseTotal = calculateDynamicTotal(ManagerwiseTbody, getIdCallback);

                    const TeamleaderwiseTotal = calculateDynamicTotal(TeamleaderwiseTbody,
                        getIdCallback);
                    const TeleCallerwiseTotal = calculateDynamicTotal(TeleCallerwiseTbody,
                        getIdCallback);
                    const paymentwiseTotal = calculateDynamicTotal(PaymentTbody, getIdCallback);
                    const vendorwiseTotal = calculateDynamicTotal(VendorTbody, getIdCallback);



                    function addTotalRow(tableBody, totalSecondColumn, totalThirdColumn, ids,
                        category, link) {
                        const totalRow = $('<tr>');

                        // Create a non-linked cell for the "Total" label
                        const totalLabelCell = $('<td>').text(`Total`).addClass(
                            'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                        // Create an anchor tag for the second column total
                        let totalSecondColumnCell;
                        // Create an anchor tag for the second column total
                        if (category == 'Payment') {
                            totalSecondColumnCell = $('<a>')
                                .attr('href',
                                    `${link}?${category.toLowerCase()}id=${ids}&payid=${ids}`)
                                .text(`₹ ${totalSecondColumn.toFixed(2)}`);


                        } else if (category == 'Vendor') {
                            totalSecondColumnCell = $('<a>')
                                .attr('href',
                                    `${link}?${category.toLowerCase()}id=${ids}&venid=${ids}`)
                                .text(`₹ ${totalSecondColumn.toFixed(2)}`);
                        } else {
                            totalSecondColumnCell = $('<a>')
                                .attr('href',
                                    `${link}?${category.toLowerCase()}id=${ids}&perid=${ids}`)
                                .text(`₹ ${totalSecondColumn.toFixed(2)}`);
                        }






                        // Create an anchor tag for the third column total (if provided)
                        const totalThirdColumnCell = totalThirdColumn !== null && !isNaN(
                                totalThirdColumn) ? $('<a>')
                            .attr('href',
                                `${link}?${category.toLowerCase()}id=${ids}&perid=${ids}&payid=${ids}&venid=${ids}`
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






                    addTotalRow(PaymentTbody, paymentwiseTotal.totalSecondColumn, null,
                        paymentwiseTotal.ids, 'Payment', leadurl);

                    // Call addTotalRow for Vendor table (no third column)
                    addTotalRow(VendorTbody, vendorwiseTotal.totalSecondColumn, null,
                        vendorwiseTotal.ids, 'Vendor', leadurl);

                    // Call addTotalRow for Managerwise table
                    addTotalRow(ManagerwiseTbody, ManagerwiseTotal.totalSecondColumn,
                        ManagerwiseTotal.totalThirdColumn, ManagerwiseTotal.ids, 'Manager',
                        leadurl);

                    // Call addTotalRow for Teamleaderwise table
                    addTotalRow(TeamleaderwiseTbody, TeamleaderwiseTotal.totalSecondColumn,
                        TeamleaderwiseTotal.totalThirdColumn, TeamleaderwiseTotal.ids,
                        'TeamLeader', leadurl);

                    // Call addTotalRow for TeleCallerwise table
                    addTotalRow(TeleCallerwiseTbody, TeleCallerwiseTotal.totalSecondColumn,
                        TeleCallerwiseTotal.totalThirdColumn, TeleCallerwiseTotal.ids,
                        'TeleCaller', leadurl);
                    // Append the tables to their respective elements
                    PaymentTable.append(PaymentThead, PaymentTbody);
                    VendorTable.append(VendorThead, VendorTbody);
                    ManagerwiseTable.append(ManagerwiseThead, ManagerwiseTbody);
                    TeamleaderwiseTable.append(TeamleaderwiseThead, TeamleaderwiseTbody);
                    TeleCallerwiseTable.append(TeleCallerwiseThead, TeleCallerwiseTbody);

                    // Append the tables to the corresponding divs
                    $('.paymentwisecollection').html(PaymentTable);
                    $('.vedorwisecollection').html(VendorTable);
                    $('.managerwisecollection').html(ManagerwiseTable);
                    $('.teamleaderwisecollection').html(TeamleaderwiseTable);
                    $('.telecallerwisecollection').html(TeleCallerwiseTable);

                    handleDateChange();

                }
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
            var paymentmodeID = $('#paymentmode').val();
            var vendormodeID = $('#vendorname').val();



            // Check if both "from" and "to" dates are filled
            if (fromDate !== '' && toDate !== '') {
                var appPreloader = $(
                        '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                    )
                    .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

                // Append the appPreloader div as the first child of the body
                $('body').prepend(appPreloader);


                var apiURL11 = "<?= base_url('api/get-collectiondatadatewise'); ?>";
                $.ajax({
                    url: apiURL11,
                    data: {
                        fromDate: fromDate,
                        toDate: toDate,
                        teamLeaderID: teamLeaderID,
                        telecallerID: telecallerID,
                        teamManagerID: teamManagerID,
                        paymentmodeID: paymentmodeID,
                        vendormodeID: vendormodeID
                    }, // Replace with your actual domain
                    method: 'GET',
                    dataType: 'json', // Expect JSON response
                    success: function (data) {
                        console.log(data);
                        $('.totalcollection').empty();

                        const lastArray = data[data.length - 1];

                        // Extract values from the object in the last sub-array
                        const lastObject = lastArray[0];
                        var totalcollectionamout = lastObject.TotalCollectionAmount;
                        if (totalcollectionamout == null) {
                            totalcollectionamout = 0;
                        }
                        const totalcollectioncontainer = $('.totalcollection');
                        var leadurl = "<?= base_url('Collectionlist'); ?>"

                        function createCountElement(label, count, link) {
                            const countElement = $('<div>').addClass('mb-4');

                            const labelElement = $('<p>').addClass('text-xs+').text(label);

                            // Remove the "-" sign if count is negative
                            const countValue = count < 0 ? -count : count;

                            const countValueElement = $('<p>').addClass(
                                'text-xl font-semibold text-slate-700 dark:text-navy-100').text(
                                countValue);

                            const linkWithCount =
                                `${link}?Collection=1`;

                            const linkElement = $('<a>').attr('href', linkWithCount).append(
                                countValueElement);

                            countElement.append(labelElement, linkElement);

                            return countElement;
                        }
                        const totalcollectionamynt = createCountElement("Collection", "₹ " +
                            totalcollectionamout, leadurl);
                        totalcollectioncontainer.html(totalcollectionamynt);

                        // Create tables and tbody elements
                        const PaymentTable = $('<table>').addClass('is-zebra w-full text-left');
                        const PaymentThead = $(
                            '<thead>'); // Create a thead element for the manager table
                        const PaymentTbody = $('<tbody>');


                        const PaymentHeaderRow = $('<tr>').appendTo(PaymentThead);
                        $('<th>').text('Payment Type').appendTo(PaymentHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Collection').appendTo(PaymentHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );

                        const VendorTable = $('<table>').addClass('is-zebra w-full text-left');
                        const VendorThead = $(
                            '<thead>'); // Create a thead element for the team leader table
                        const VendorTbody = $('<tbody>');


                        const VendorHeaderRow = $('<tr>').appendTo(VendorThead);
                        $('<th>').text('Vendor Type').appendTo(VendorHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Collection').appendTo(VendorHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );

                        const ManagerwiseTable = $('<table>').addClass('is-zebra w-full text-left');
                        const ManagerwiseThead = $(
                            '<thead>'); // Create a thead element for the telecaller table
                        const ManagerwiseTbody = $('<tbody>');

                        const ManagerwiseHeaderRow = $('<tr>').appendTo(ManagerwiseThead);
                        $('<th>').text('Manager').appendTo(ManagerwiseHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Collection').appendTo(ManagerwiseHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Admission').appendTo(ManagerwiseHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );

                        const TeamleaderwiseTable = $('<table>').addClass(
                            'is-zebra w-full text-left');
                        const TeamleaderwiseThead = $(
                            '<thead>'); // Create a thead element for the telecaller table
                        const TeamleaderwiseTbody = $('<tbody>');

                        const TeamleaderwiseHeaderRow = $('<tr>').appendTo(TeamleaderwiseThead);
                        $('<th>').text('Team Leader').appendTo(TeamleaderwiseHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Collection').appendTo(TeamleaderwiseHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Admission').appendTo(TeamleaderwiseHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );


                        const TeleCallerwiseTable = $('<table>').addClass(
                            'is-zebra w-full text-left');
                        const TeleCallerwiseThead = $(
                            '<thead>'); // Create a thead element for the telecaller table
                        const TeleCallerwiseTbody = $('<tbody>');

                        const TeleCallerwiseHeaderRow = $('<tr>').appendTo(TeleCallerwiseThead);
                        $('<th>').text('TeleCaller').appendTo(TeleCallerwiseHeaderRow).addClass(
                            'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Collection').appendTo(TeleCallerwiseHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );
                        $('<th>').text('Admission').appendTo(TeleCallerwiseHeaderRow).addClass(
                            'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
                        );


                        function Paymenttype(row, mode_collection, link, id) {
                            const linkWithCount =
                                `${link}?paymentid=${id}`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                            td.attr('data-id', id);

                            linkElement.text(
                                mode_collection); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }

                        function Vendortype(row, vendor_collection, link, id) {
                            const linkWithCount =
                                `${link}?vendorid=${id}`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                            td.attr('data-id', id);

                            linkElement.text(
                                vendor_collection); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }

                        function PerID(row, collection, link, id) {
                            const linkWithCount =
                                `${link}?perid=${id}&managerid=${id}&teamleaderid=${id}&telecallerid=${id}`;
                            const linkElement = $('<a>').attr('href', linkWithCount);
                            const td = $('<td>').appendTo(row).addClass(
                                'whitespace-nowrap px-4 py-3 sm:px-5');
                            td.attr('data-id', id);

                            linkElement.text(collection); // Display the isConverted value in the link
                            linkElement.appendTo(td);
                        }

                        for (let i = 0; i < data.length; i++) {
                            const section = data[i];
                            for (let j = 0; j < section.length; j++) {
                                const item = section[j];
                                if ('mode_name' in item) {
                                    // This is Manager data
                                    const paymentrow2 = $('<tr>').appendTo(PaymentTbody);
                                    $('<td>').text(item.mode_name).appendTo(paymentrow2).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                    Paymenttype(paymentrow2, '₹ ' + item.mode_collection, leadurl, item
                                        .mode_id);
                                } else if ('vendor_name' in item) {
                                    // This is TeamLeader data
                                    const row = $('<tr>').appendTo(VendorTbody);
                                    $('<td>').text(item.vendor_name).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                    Vendortype(row, '₹ ' + item.vendor_collection, leadurl, item
                                        .vendor_id);
                                } else if ('manager_name' in item) {
                                    // This is Telecaller data
                                    const row = $('<tr>').appendTo(ManagerwiseTbody);
                                    $('<td>').text(item.manager_name).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                    PerID(row, '₹ ' + item.manager_collection, leadurl, item
                                        .manager_id);
                                    PerID(row, item.admission_count, leadurl, item.manager_id);
                                } else if ('team_leader_name' in item) {
                                    const row = $('<tr>').appendTo(TeamleaderwiseTbody);
                                    $('<td>').text(item.team_leader_name).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                    PerID(row, '₹ ' + item.team_leader_collection, leadurl, item
                                        .team_leader_id);

                                    PerID(row, item.admission_count, leadurl, item.team_leader_id);
                                } else if ('telecaller_name' in item) {
                                    const row = $('<tr>').appendTo(TeleCallerwiseTbody);
                                    $('<td>').text(item.telecaller_name).appendTo(row).addClass(
                                        'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');

                                    PerID(row, '₹ ' + item.telecaller_collection, leadurl, item
                                        .telecaller_id);
                                    PerID(row, item.admission_count, leadurl, item.telecaller_id);
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



                        const ManagerwiseTotal = calculateDynamicTotal(ManagerwiseTbody, getIdCallback);

                        const TeamleaderwiseTotal = calculateDynamicTotal(TeamleaderwiseTbody,
                            getIdCallback);
                        const TeleCallerwiseTotal = calculateDynamicTotal(TeleCallerwiseTbody,
                            getIdCallback);
                        const paymentwiseTotal = calculateDynamicTotal(PaymentTbody, getIdCallback);
                        const vendorwiseTotal = calculateDynamicTotal(VendorTbody, getIdCallback);



                        function addTotalRow(tableBody, totalSecondColumn, totalThirdColumn, ids,
                            category, link) {
                            const totalRow = $('<tr>');

                            // Create a non-linked cell for the "Total" label
                            const totalLabelCell = $('<td>').text(`Total`).addClass(
                                'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                            let totalSecondColumnCell;
                            // Create an anchor tag for the second column total
                            if (category == 'Payment') {
                                totalSecondColumnCell = $('<a>')
                                    .attr('href', `${link}?${category.toLowerCase()}id=${ids}&payid=${ids}`)
                                    .text(`₹ ${totalSecondColumn.toFixed(2)}`);


                            } else if (category == 'Vendor') {
                                totalSecondColumnCell = $('<a>')
                                    .attr('href', `${link}?${category.toLowerCase()}id=${ids}&venid=${ids}`)
                                    .text(`₹ ${totalSecondColumn.toFixed(2)}`);
                            } else {
                                totalSecondColumnCell = $('<a>')
                                    .attr('href', `${link}?${category.toLowerCase()}id=${ids}&perid=${ids}`)
                                    .text(`₹ ${totalSecondColumn.toFixed(2)}`);
                            }




                            // Create an anchor tag for the third column total (if provided)
                            const totalThirdColumnCell = totalThirdColumn !== null && !isNaN(
                                    totalThirdColumn) ? $('<a>')
                                .attr('href',
                                    `${link}?${category.toLowerCase()}id=${ids}&perid=${ids}&payid=${ids}&venid=${ids}`
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






                        addTotalRow(PaymentTbody, paymentwiseTotal.totalSecondColumn, null,
                            paymentwiseTotal.ids, 'Payment', leadurl);

                        // Call addTotalRow for Vendor table (no third column)
                        addTotalRow(VendorTbody, vendorwiseTotal.totalSecondColumn, null,
                            vendorwiseTotal.ids, 'Vendor', leadurl);

                        // Call addTotalRow for Managerwise table
                        addTotalRow(ManagerwiseTbody, ManagerwiseTotal.totalSecondColumn,
                            ManagerwiseTotal.totalThirdColumn, ManagerwiseTotal.ids, 'Manager',
                            leadurl);

                        // Call addTotalRow for Teamleaderwise table
                        addTotalRow(TeamleaderwiseTbody, TeamleaderwiseTotal.totalSecondColumn,
                            TeamleaderwiseTotal.totalThirdColumn, TeamleaderwiseTotal.ids,
                            'TeamLeader', leadurl);

                        // Call addTotalRow for TeleCallerwise table
                        addTotalRow(TeleCallerwiseTbody, TeleCallerwiseTotal.totalSecondColumn,
                            TeleCallerwiseTotal.totalThirdColumn, TeleCallerwiseTotal.ids,
                            'TeleCaller', leadurl);
                        // Append the tables to their respective elements
                        PaymentTable.append(PaymentThead, PaymentTbody);
                        VendorTable.append(VendorThead, VendorTbody);
                        ManagerwiseTable.append(ManagerwiseThead, ManagerwiseTbody);
                        TeamleaderwiseTable.append(TeamleaderwiseThead, TeamleaderwiseTbody);
                        TeleCallerwiseTable.append(TeleCallerwiseThead, TeleCallerwiseTbody);

                        // Append the tables to the corresponding divs
                        $('.paymentwisecollection').html(PaymentTable);
                        $('.vedorwisecollection').html(VendorTable);
                        $('.managerwisecollection').html(ManagerwiseTable);
                        $('.teamleaderwisecollection').html(TeamleaderwiseTable);
                        $('.telecallerwisecollection').html(TeleCallerwiseTable);
                    }
                });
            }
        }
    </script>
</body>

</html>