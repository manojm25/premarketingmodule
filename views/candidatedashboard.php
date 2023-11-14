<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />


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
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">
        <div class="sidebar print:hidden">

            <!-- Sidebar Panel -->
            <?php include('sidebar.php');?>
        </div>
        <?php include('navbar.php');?>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Candidate dashboard
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Interview Registration</a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </li>
                    <li>Candidate dashboard</li>
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
                    <div class="card p-3">
                        <label class="block" style="margin-botton:20px;">
                            <span
                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Interview Status</span>
                        </label>

                        <div style="position: relative;">
                            <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="interviewstatus">

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


            <p class="font-medium" style="margin-top: 1rem;margin-bottom: -1rem;color: black;">Consolidate Hr wise Table
            </p>
            <div class="container" style="margin-top: 27px;justify-content:center;">

                <div class="table-container consolidatetablehrwise" style="overflow: auto;height: fit-content;">

                </div>
                <div class="mt-5 grid grid-cols-1 gap-4 px-4 sm:grid-cols-4 sm:px-5">
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5">
                        <p class="text-xs uppercase text-amber-50">Total Ref Count</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white totalrefferedamount"></p>

                        </div>
                        <div class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5">
                        <p class="text-xs uppercase text-sky-100">Refered And Joined</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white referedandjoined"></p>

                        </div>
                        <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                        </div>
                    </div>

                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Live Users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white liveusers"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5"
                        style="--tw-gradient-to: #5272F2;--tw-gradient-from: #5272F2;">
                        <p class="text-xs uppercase text-pink-100">Sentout Users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white sentoutcount"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5"
                        style="--tw-gradient-to: #008170;--tw-gradient-from: #008170;">
                        <p class="text-xs uppercase text-sky-100">Laptop users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white laptopusers"></p>

                        </div>
                        <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                        </div>
                    </div>
                    <div class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5"
                        style="--tw-gradient-to: #E9B824;--tw-gradient-from: #E9B824;">
                        <p class="text-xs uppercase text-amber-50">Laptop not users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white laptopnotusers"></p>

                        </div>
                        <div class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">IDCard users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white idcardusers"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">IDCard not users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white idcardnotusers"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Simcard users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white simcardusers"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Simcard not users</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white simcardnotusers"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Certifcate Given</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white certificategivencount"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Certifcate Not Given</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white certificatenotgivencount"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                </div>


            </div>


            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Candidate Master List
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="table-container">

                    </div>

                </div>


            </div>




            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Refered and Joined List
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="refjoinedlist">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Sim Card Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="simcarduserslist">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Sim Card Not Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="simnotcarduserslist">

                    </div>

                </div>


            </div>
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Laptop Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="laptopuserslist">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Laptop Not Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="laptopnotuserslist">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        ID card Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="idcarduserslist">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        ID card not Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="idcardnotuserslist">

                    </div>

                </div>


            </div>

            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Live Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="liveusers">

                    </div>

                </div>


            </div>
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Sentout Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="sentoutusers">

                    </div>

                </div>


            </div>
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Certificate Given Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="certifcategiven">

                    </div>

                </div>


            </div>
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Certificate Not Given Users
                    </h2>

                </div>
                <div class="">
                    <div class="table-responsive" id="certificatenotgiven">

                    </div>

                </div>


            </div>
        </main>

    </div>
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
            appPreloader.remove();
            $('.app-preloader').remove();
        });

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


            var interviewStatusURL = "<?= base_url('api/get-interviewstatus'); ?>";
            $.ajax({
                url: interviewStatusURL, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (response) {

                    const selectElement = document.getElementById("interviewstatus");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--select--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements

                    response.forEach((interviewstatus) => {
                        if (interviewstatus.status_name !== "INTERVIEW CONDUCTED") {
                            const optionElement = document.createElement("option");
                            optionElement.value = interviewstatus.status_id;
                            optionElement.textContent = interviewstatus.status_name;
                            selectElement.appendChild(optionElement);
                        }
                    });

                    $('#interviewstatus').trigger('change');
                }
            });



        }
        dropdownsections();


        $(document).ajaxStop(function () {

            console.log("All AJAX requests completed");
            $('.filter-dropdown').on('change', function () {
                dropdownchange();
            });
            $('.dataTables_scroll').css('padding-top', '18px');

        });



        function forcreatingtables(dataArray) {


            const table = $('<table>').addClass(
                'table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
            );
            // Create the table header
            const thead = $('<thead>').appendTo(table);
            const headerRow = $('<tr>').appendTo(thead);
            // Define an array of headers to hide
            const headersToHide = [
                'TableID',
                'RefID'
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

                        if (key === 'InterviewStatus') {

                            if (dataItem[key] == 0 || dataItem[key] == 4) {
                                const div = $('<div>').addClass(
                                    'badge bg-warning/10 text-warning dark:bg-warning/15'
                                ).text("interview conducted");
                                div.appendTo(td);
                            } else if (dataItem[key] == 1) {
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("Selected and joined");
                                div.appendTo(td);
                            } else if (dataItem[key] == 2) {
                                const div = $('<div>').addClass(
                                    'badge bg-success/10 text-success dark:bg-success/15'
                                ).text("Selected and yet to join");
                                div.appendTo(td);
                            } else if (dataItem[key] == 3) {
                                const div = $('<div>').addClass(
                                    'badge bg-error/10 text-error dark:bg-error/15'
                                ).text("Rejected");
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


            });

            // Append the table to the container with ID 'table-container'
            return table;


        }


        function forcreatingconsolidatetable(data) {
            console.log(data);
            const Table = $('<table>').addClass('is-zebra w-full text-left');
            const Thead = $('<thead>');
            const Tbody = $('<tbody>');

            const HeaderRow = $('<tr>').appendTo(Thead);
            $('<th>').text('Staff Name').appendTo(HeaderRow).addClass(
                'whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
            );
            $('<th>').text('Live').appendTo(HeaderRow).addClass(
                'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
            );
            $('<th>').text('Sentout').appendTo(HeaderRow).addClass(
                'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
            );
            $('<th>').text('Grandtotal').appendTo(HeaderRow).addClass(
                'whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:'
            );

            let liveTotal = 0;
            let sentoutTotal = 0;
            let grandTotalTotal = 0;

            for (let i = 0; i < data.length; i++) {
                const item = data[i];

                if ('ReferredByName' in item) {
                    const row = $('<tr>').appendTo(Tbody);
                    if (item.ReferredByName !== "Unknown") {
                        $('<td>').text(item.ReferredByName).appendTo(row).addClass(
                            'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
                        $('<td>').text(item.Live).appendTo(row).addClass(
                            'whitespace-nowrap px-4 py-3 sm:px-5');
                        $('<td>').text(item.Sentout).appendTo(row).addClass(
                            'whitespace-nowrap px-4 py-3 sm:px-5');
                        $('<td>').text(item.GrandTotal).appendTo(row).addClass(
                            'whitespace-nowrap px-4 py-3 sm:px-5');
                        liveTotal += parseInt(item.Live);
                        sentoutTotal += parseInt(item.Sentout);
                        grandTotalTotal += parseInt(item.GrandTotal);
                    }
                }
            }

            // Add the "Total" row
            const totalRow = $('<tr>').appendTo(Tbody);
            $('<td>').text('Total').appendTo(totalRow).addClass(
                'whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5');
            $('<td>').text(liveTotal).appendTo(totalRow).addClass(
                'whitespace-nowrap px-4 py-3 sm:px-5');
            $('<td>').text(sentoutTotal).appendTo(totalRow).addClass(
                'whitespace-nowrap px-4 py-3 sm:px-5');
            $('<td>').text(grandTotalTotal).appendTo(totalRow).addClass(
                'whitespace-nowrap px-4 py-3 sm:px-5');

            Table.append(Thead, Tbody);
            $('.consolidatetablehrwise').html(Table);
        }


        function dropdownchange() {
            var refernce = $('#refernceid').val();
            var jobposition = $('#jobposition').val();
            var interviewstatus = $('#interviewstatus').val();
            var fromdate = $('#from-date').val();
            var todate = $('#to-date').val();


            var getcandidateURL = "<?= base_url('api/get-candidatedashboarddata'); ?>";
            $.ajax({
                url: getcandidateURL,
                data: {
                    refernce: refernce,
                    jobposition: jobposition,
                    interviewstatus: interviewstatus,
                    fromdate: fromdate,
                    todate: todate
                }, // Replace with your actual domain
                method: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    var appPreloader = $(
                            '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                        )
                        .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

                    // Append the appPreloader div as the first child of the body
                    $('body').prepend(appPreloader);
                }, // Expect JSON response
                success: function (dataArray) {

                    $('.app-preloader').remove();
                    console.log(dataArray);
                    var alltotal = dataArray.Alltotal[0];


                    $('.totalrefferedamount').text(alltotal.TotalReferredCount);
                    $('.referedandjoined').text(alltotal.ReferedAndJoined);
                    $('.liveusers').text(alltotal.Liveusers);
                    $('.sentoutcount').text(alltotal.Sentoutusers);
                    $('.laptopusers').text(alltotal.Laptopusers);
                    $('.laptopnotusers').text(alltotal.Laptopnotusers);
                    $('.idcardusers').text(alltotal.IDCardusers);
                    $('.idcardnotusers').text(alltotal.IDCardnotusers);
                    $('.simcardusers').text(alltotal.Simcardusers);
                    $('.simcardnotusers').text(alltotal.Simcardnotusers);
                    $('.certificategivencount').text(alltotal.CertificateGivenusers);
                    $('.certificatenotgivencount').text(alltotal.NotCertificateGivenusers);


                    //   for total Refered and joined list
                    var referencelist = dataArray.ReferredList;

                    var tableinfo = forcreatingtables(referencelist);
                    $('#table-container').html(tableinfo);
                    var referenceANdjoinedlist = dataArray.ReferredAndJoinedList;
                    var tableinfo2 = forcreatingtables(referenceANdjoinedlist);
                    $('#refjoinedlist').html(tableinfo2);
                    var simcarduserslist = dataArray.SimcardUsers;
                    var tableinfo3 = forcreatingtables(simcarduserslist);
                    $('#simcarduserslist').html(tableinfo3);

                    var simcardusersNotlist = dataArray.SimcardNotUsers;
                    var tableinfo4 = forcreatingtables(simcardusersNotlist);
                    $('#simnotcarduserslist').html(tableinfo4);


                    var LaptopUsers = dataArray.LaptopUsers;
                    var tableinfo5 = forcreatingtables(LaptopUsers);
                    $('#laptopuserslist').html(tableinfo5);

                    var LaptopNotUsers = dataArray.LaptopNotUsers;
                    var tableinfo6 = forcreatingtables(LaptopNotUsers);
                    $('#laptopnotuserslist').html(tableinfo6);

                    var IdcardUsers = dataArray.IdcardUsers;
                    var tableinfo7 = forcreatingtables(IdcardUsers);
                    $('#idcarduserslist').html(tableinfo7);


                    var IdcardNotUsers = dataArray.IdcardNotUsers;
                    var tableinfo8 = forcreatingtables(IdcardNotUsers);
                    $('#idcardnotuserslist').html(tableinfo8);


                    var LiveUsers = dataArray.LiveUsers;
                    var tableinfo9 = forcreatingtables(LiveUsers);
                    $('#liveusers').html(tableinfo9);

                    var SentoutUsers = dataArray.SentoutUsers;
                    var tableinfo10 = forcreatingtables(SentoutUsers);
                    $('#sentoutusers').html(tableinfo10);


                    var certificategievnusers = dataArray.CertifcateGiven;
                    var tableinfo11 = forcreatingtables(certificategievnusers);
                    $('#certifcategiven').html(tableinfo11);


                    var certificateNotgievnusers = dataArray.CertifcateNotGiven;
                    var tableinfo12 = forcreatingtables(certificateNotgievnusers);
                    $('#certificatenotgiven').html(tableinfo12);


                    var newtemptable = dataArray.NewTemptable;

                    forcreatingconsolidatetable(newtemptable);

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
        dropdownchange()
    </script>
</body>

</html>