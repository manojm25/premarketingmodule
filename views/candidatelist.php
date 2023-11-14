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
                    Candidate List
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
                    <li>Candidate List</li>
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
                        Candidate List
                    </h2>

                </div>
                <div class="">

                    <div style="position:absolute;right:0px;display:flex;z-index: 1000;" class="hide-init">
                        <div class="card p-3" style="display:contents;">
                            <label class="block" style="margin-right: 10px;">
                                <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                    Change Interview Status</span>
                            </label>

                            <div style="margin-right: 13px;">
                                <select class="js-example-basic-single" name="state" style="width: 100%;"
                                    id="interviewstatus">

                                </select>
                            </div>
                        </div>
                        <button
                            class="btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                            type="button" id="interviewstatubutton" style="margin-right:20px;">
                            Submit
                        </button>
                    </div>



                    <div class="table-responsive" id="table-container">

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
        var isuseridform = urlParams.get('userid');
        if (isstatusform != null && isuseridform != null) {
            if(isstatusform == "1")
            {
                toastr["success"]("Data added Succesfully");
                window.history.replaceState({}, document.title, window.location
                    .pathname);

                    var value1 = parseInt(isuseridform) || 0;
                     var updatejobstatus = "<?= base_url('api/post-jobstatus'); ?>";
                    $.ajax({
                    url: updatejobstatus, // Replace with your actual domain
                    method: 'POST',
                    data: {
                        isuseridform:value1
                    }, // Send the data object
                    dataType: 'json', // Expect JSON response
                    success: function (response) {
                         if(response == 1)
                         {
                            toastr["success"]("Employee is now live");
                         }
                    }
                });

            }
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

        $('#interviewstatubutton').click(function () {
            const checkedIds = [];
            $('.child-checkbox:checked').each(function () {
                checkedIds.push($(this).attr('id'));
            });
            const dropdownValue = document.querySelector('#interviewstatus').value;
            if (checkedIds.length > 0 && dropdownValue !== '0') {
                var interviewstatus = $('#interviewstatus').val();
                var changestatusurl = "<?= base_url('api/post-changeinterviewstatus'); ?>";

                var dataToSend = {
                    checkedIds: checkedIds,
                    interviewstatus: interviewstatus
                };

                console.log(dataToSend);

                $.ajax({
                    url: changestatusurl, // Replace with your actual domain
                    method: 'POST',
                    data: dataToSend, // Send the data object
                    dataType: 'json', // Expect JSON response
                    success: function (response) {
                        // Handle the response from the server
                        if (response = 1) {
                            toastr["success"]("Candidate status changed Successfully");
                            
                            dropdownchange();
                            $('#interviewstatus').val('0');
                            $('#interviewstatus').trigger('change');

                        } else {
                            toastr["error"]("Something went wrong");
                            
                        }
                    }
                });

            } else {
                toastr["warning"]("Checkbox is not checked or select the candidate");
               
            }

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
                        const optionElement = document.createElement("option");
                        optionElement.value = interviewstatus.status_id;
                        optionElement.textContent = interviewstatus.status_name;
                        selectElement.appendChild(optionElement);
                    });

                    $('#interviewstatus').trigger('change');
                }
            });


        }


        //******************** Dedicated Dropdown Sections *********************************

        // Load candidate list
        function dropdownchange() {
            var refernce = $('#refernceid').val();
            var jobposition = $('#jobposition').val();

            var getcandidateURL = "<?= base_url('api/get-candidatelist'); ?>";
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
                            if (key === 'InterviewStatus') {
                                const selectAllCheckbox = $('<th>').appendTo(headerRow).text(
                                    'Interviewstatus').addClass(
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
                            } else {
                                $('<th>').text(key).appendTo(headerRow).addClass(
                                    'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                                ).css('font-weight', '500');
                            }
                        }
                    }
                    if (dataArray.length > 0) {
                        $('<th>').text('Actions').appendTo(headerRow).addClass(
                            'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        ).css('font-weight', '500');
                        $('<th>').text('Resumes').appendTo(headerRow).addClass(
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
                                    const cellCheckbox = $('<input>')
                                        .attr({
                                            'type': 'checkbox',
                                            'class': 'child-checkbox',
                                            'id': dataItem
                                                .TableID // Add a class to identify individual checkboxes
                                        })
                                        .appendTo(td);

                                } else {
                                    const p = $('<p>').addClass(
                                        'w-48 overflow-hidden text-ellipsis text-xs+').text(
                                        dataItem[key]);
                                    p.appendTo(td);
                                }
                                td.appendTo(row);
                            }
                        }
                        let editButton;
                        for (const key in dataItem) {
                            if (key === 'InterviewStatus') {
                                if (dataItem[key] == 1) {
                                    editButton = $('<a>')
                                        .text('Add to Employee list')
                                        .addClass(
                                            'btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover-bg-accent-focus dark:focus-bg-accent-focus dark:active-bg-accent/90'
                                        )
                                        .attr('href',
                                            `${theurl}?data=${dataItem.TableID}&refid=${dataItem.RefID}`
                                            );
                                } else {

                                }
                            }

                        }

                        let resumebutton;
                        resumebutton = $('<button>')
                            .text('Download')
                            .attr('id',dataItem.TableID)
                            .addClass(
                                'getresume btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover-bg-accent-focus dark:focus-bg-accent-focus dark:active-bg-accent/90'
                            );



                        const actionsCell = $('<td>').append(editButton).addClass(
                            'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                        );
                        const resumeCell = $('<td>').append(resumebutton).addClass(
                            'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                        );
                        row.append(actionsCell,resumeCell);
                    });

                    // Append the table to the container with ID 'table-container'
                    table.appendTo('#table-container');

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
                    handleDateChange();
                }
            });
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
                    const applicationDate = moment(data[1],
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

        function convertBase64ToExcel(data) {

            var contentType = 'application/pdf';
            var blob1 = b64toBlob(data, contentType);
            var blobUrl1 = URL.createObjectURL(blob1);
            $('.app-preloader').remove();
            window.open(blobUrl1);

        }

        function b64toBlob(b64Data, contentType, sliceSize) {
            contentType = contentType || '';
            sliceSize = sliceSize || 512;

            var byteCharacters = atob(b64Data);
            var byteArrays = [];

            for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                var slice = byteCharacters.slice(offset, offset + sliceSize);

                var byteNumbers = new Array(slice.length);
                for (var i = 0; i < slice.length; i++) {
                    byteNumbers[i] = slice.charCodeAt(i);
                }

                var byteArray = new Uint8Array(byteNumbers);

                byteArrays.push(byteArray);
            }

            var blob = new Blob(byteArrays, {type: contentType});
            return blob;
        };


        $(document).on("click",".getresume",function() {
            var thisID = $(this).attr('id');

            $.ajax({
                url: "<?= base_url('api/gettheresume'); ?>", // URL of your PHP file
                method: 'POST',
                data: { tableId: thisID },
                beforeSend()
                {
                    $('.hide-init').hide();
                    var appPreloader = $(
                        '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                    )
                        .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');
                    $('body').prepend(appPreloader);
                },// Data to send
                success: function(response) {
                    $('.app-preloader').remove();
                    $('.hide-init').show();
                    // Handle the response here
                    if (response==1) {
                        toastr["error"]("File does not exist in the path");
                    } else if(response==0) {
                        toastr["error"]("Resume does not exist for the user");
                    }else{
                        var decodedResponse = JSON.parse(response);
                        convertBase64ToExcel(decodedResponse);

                    }
                },
                error: function() {
                    $('.app-preloader').remove();
                    $('.hide-init').show();
                    toastr["error"]("Error in fetching file path");

                }
            });
        });

       
    </script>

</body>

</html>