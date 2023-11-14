<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <style>
        .suggestion-list {
            position: absolute;
            bottom: -111px;
            left: 0;
            right: 0;
            background-color: white;
            border: 1px solid #ccc;
            border-top: none;
            max-height: 150px;
            overflow-y: auto;
            list-style: none;
            padding: 0;
            margin: 0;
            z-index: 100;
        }

        .suggestion-list li {
            padding: 8px 12px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }

        .suggestion-list li:last-child {
            border-bottom: none;
        }

        .gap-4 {
            gap: 3rem;
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
                    Collection list
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
                    <li>Collection list</li>
                </ul>
            </div>


            <div class="card col-span-12 lg:col-span-12 xl:col-span-12 enable-display" >
                <div class="mt-3 flex items-center justify-between px-4 sm:px-5">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Collection History
                    </h2>
                </div>

                <div class="mt-5 grid grid-cols-1 gap-4 px-4 sm:grid-cols-4 sm:px-5">
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5">
                        <p class="text-xs uppercase text-sky-100">Total Collection</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white totalcollection"></p>

                        </div>
                        <div class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5">
                        <p class="text-xs uppercase text-amber-50">Total</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white totalamount"></p>

                        </div>
                        <div class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Pending</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white pending"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                    <div
                        class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5">
                        <p class="text-xs uppercase text-pink-100">Admission</p>
                        <div class="flex items-end justify-between space-x-2">
                            <p class="mt-4 text-2xl font-medium text-white admissioncount"></p>

                        </div>
                        <div class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                    </div>
                </div>

                <div class="scrollbar-sm mt-5 min-w-full overflow-x-auto" id="tblcont">
                    
                </div>
            </div>

            <!-- Begins -->
            <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Collection List
                    </h2>

                    <input type="hidden" id="perid" value="0" />
                    <input type="hidden" id="paymentype" value="0" />
                    <input type="hidden" id="vendortype" value="0" />
                    <input type="hidden" id="showcollection" value="0" />

                </div>
                <div class="">
                    <div class="table-responsive" id="table-container">

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

        const urlParams = new URLSearchParams(window.location.search);
      
      
    
        const iscollection = urlParams.get('Collection');

        if (urlParams.keys().next().done) {
            $('.enable-display').hide();
        } else {
              $('.enable-display').show();
        }

    

        const ismanagerids = [];
        const isteamleaderids = [];
        const telecallerids = [];
        const vendorids = [];
        const paymentids = [];

        
       


        $(document).ready(function () {
            domreadyfunction();
            gettingAllRecords();

            Incollectionlistcounts();
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

            $('.regex-fields input').on('input', function () {
                // Remove any non-numeric characters using a regular expression
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });

            // Allow pasting of numeric characters with a maximum length of 10
            $('.regex-fields input').on('paste', function (event) {
                // Get the pasted text
                const pastedText = (event.originalEvent || event).clipboardData.getData(
                    'text/plain');

                // Remove any non-numeric characters from the pasted text using a regular expression
                const numericText = pastedText.replace(/[^0-9]/g, '');

                // Check if the length of the numeric text is greater than 10
                if (numericText.length > 10) {
                    // Alert the user
                    alert('Numeric character length should not exceed 10 characters.');
                    event.preventDefault(); // Prevent pasting
                } else {
                    // Set the input value to the cleaned numeric text
                    $(this).val(numericText);
                }
            });
        });




        // For getting table records
        function gettingAllRecords() {
            var apiURL = "<?php echo GET_COLLECTION_LIST; ?>";

            const isperid = urlParams.get('perid');
        const isvenid = urlParams.get('vendorid');
        const ispayid = urlParams.get('paymentid');

            const personids=[];
        const venddids=[];
        const payssids =[];

        if (isperid != null) {
            personids.push(isperid);
        }else{
            personids.push(0);
        }
        if (isvenid != null) {
            venddids.push(isvenid);
        }else{
            venddids.push(0);
        }
        if (ispayid != null) {
            payssids.push(ispayid);
        }else{
            payssids.push(0);
        }
           
            $.ajax({
                url: apiURL, // Replace with your actual domain
                data: {
                    personids: personids,
                    venddids: venddids,
                    payssids: payssids
                },
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (dataArray) {

                    $('#table-container').empty();
                    const table = $('<table>').addClass(
                        'table table-striped table-bordered table-hover dataTables-example is-hoverable w-full text-left'
                    );
                    // Create the table header
                    const thead = $('<thead>').appendTo(table);
                    const headerRow = $('<tr>').appendTo(thead);
                    const headersToHide = [
                        'projection_id',
                        'lead_id',
                        'LeadStatusID',
                        'LeadSourceID',
                        'BankName',
                        'upi_refernce',
                        'remarks',
                        'VendorName',
                        'screenshot_link',
                        'certificate_link',
                        'rules_link',
                        'basic_details',
                        'LeadSource',
                        'collection_id',
                        'CollectionType',
                        'SubCollection'
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

                        for (const key in dataItem) {
                            if (dataItem.hasOwnProperty(key) && !headersToHide.includes(key)) {
                                const td = $('<td>').addClass(
                                        'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                                    )
                                    .css('padding', '15px');

                                if (key === 'PaymentStatus') {
                                    if (dataItem[key] === 'Notverified') {
                                        const div = $('<div>').addClass(
                                            'badge bg-warning/10 text-warning dark:bg-warning/15'
                                        ).text(dataItem[key]);
                                        div.appendTo(td);
                                    } else {
                                        const div = $('<div>').text(dataItem[key]);
                                        div.appendTo(td);
                                    }
                                } else if (key === 'StudentName') {
                                    const div = $('<div>').addClass('flex items-center space-x-4');
                                    const span = $('<span>').addClass(
                                        'font-medium text-slate-700 dark:text-navy-100').text(
                                        dataItem[key]);
                                    span.appendTo(div);
                                    div.appendTo(td);
                                } else if (key === 'Fees' || key === 'PaidFees' || key ===
                                    'PendingFees') {
                                    const p = $('<p>').addClass(
                                        'text-sm+ font-medium text-slate-700 dark:text-navy-100'
                                    ).text('₹ ' + dataItem[key]);
                                    p.appendTo(td);
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
                                    extend: 'copy'
                                },
                                {
                                    extend: 'csv'
                                },

                                {
                                    extend: 'excel',
                                    title: 'ExampleFile'
                                },
                                {
                                    extend: 'pdf',
                                    title: 'ExampleFile'
                                },
                                {
                                    extend: 'print',
                                    customize: function (win) {
                                        $(win.document.body).addClass('white-bg');
                                        $(win.document.body).css('font-size', '10px');

                                        $(win.document.body).find('table')
                                            .addClass('compact')
                                            .css('font-size', 'inherit');
                                    }
                                }
                            ],
                            columnDefs: [{
                                    targets: 6,
                                    type: 'date'
                                } // 7th column (index 6) is the "Application Date" column
                            ]
                        });
                    }
                }
            });
            window.history.replaceState({}, document.title, window.location
                .pathname);
        }

        function Incollectionlistcounts() {
            var collectionshow = document.getElementById("showcollection");
            
            const iscollection = urlParams.get('Collection');
            if(iscollection != null){
             collectionshow.value =iscollection;
           }
        

            const ismanagerid = urlParams.get('managerid');
            if (ismanagerid != null) {
                ismanagerids.push(ismanagerid);
            } else {
                ismanagerids.push(0);
            }

            const isteamleaderid = urlParams.get('teamleaderid');
            if (isteamleaderid != null) {
                isteamleaderids.push(isteamleaderid);
            } else {
                isteamleaderids.push(0);
            }
            const istelecallerid = urlParams.get('telecallerid');
            if (istelecallerid != null) {
                telecallerids.push(istelecallerid);
            } else {
                telecallerids.push(0);
            }

            const isvendorid = urlParams.get('vendorid');
            if (isvendorid != null) {
                vendorids.push(isvendorid);
            } else {
                vendorids.push(0);
            }

            const ispaymentid = urlParams.get('paymentid');
            if (ispaymentid != null) {
                paymentids.push(ispaymentid);
            } else {
                paymentids.push(0);
            }
            var incollectionurl = "<?= base_url('api/get-incollectioncounts'); ?>";
            $.ajax({
                url: incollectionurl,
                data: {
                    ismanagerids: ismanagerids,
                    isteamleaderids: isteamleaderids,
                    telecallerids: telecallerids,
                    vendorids: vendorids,
                    paymentids: paymentids,
                    collectionshow:collectionshow.value
                }, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (data) {
                    console.log(data);
                    if (data.length > 0) {
                        const lastArray = data[data.length - 1];

                        // Extract values from the object in the last sub-array
                        const lastObject = lastArray[0];
                        const totalfees = lastObject.TotalFees;
                        const totalpaidfees = lastObject.TotalPaidFees;
                        const totalpendingfees = lastObject.TotalPendingFees;
                        const admissioncount = lastObject.AdmissionCount;

                        $('.totalamount').text('₹ ' + totalfees);
                        $('.pending').text('₹ ' + totalpendingfees);
                        $('.admissioncount').text(admissioncount);
                        $('.totalcollection').text('₹ ' + totalpaidfees);


                        const tableContainer = document.getElementById('tblcont');

                    for (let i = 0; i < data.length -
                        1; i++) { // Loop through all main arrays except the last one
                        const mainArray = data[i];

                        if (mainArray.length > 0) { // Check if the main array is not empty
                            for (let j = 0; j < mainArray.length; j++) { // Loop through the sub-arrays
                                const subArray = mainArray[j];

                                const table = document.createElement('table');
                                table.className = 'is-hoverable w-full text-left';

                              

                                table.innerHTML = `
          <tbody>
            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
              <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="flex items-center space-x-4">
                  <div>
                    <p class="mt-1 text-xs text-slate-400 dark:text-navy-300">Name</p>
                    <p class="font-medium text-slate-600 dark:text-navy-100">${subArray.Name}</p>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="flex items-center space-x-4">
                  <div>
                    <p class="mt-1 text-xs text-slate-400 dark:text-navy-300">Collection</p>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      <i class="fa-solid fa fa-inr"></i>${subArray.Paid}
                    </p>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="flex items-center space-x-4">
                  <div>
                    <p class="mt-1 text-xs text-slate-400 dark:text-navy-300">Total</p>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      <i class="fa-solid fa fa-inr"></i>${subArray.Total}
                    </p>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="flex items-center space-x-4">
                  <div>
                    <p class="mt-1 text-xs text-slate-400 dark:text-navy-300">Pending</p>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      <i class="fa-solid fa fa-inr"></i>${subArray.Pending}
                    </p>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="flex items-center space-x-4">
                  <div>
                    <p class="mt-1 text-xs text-slate-400 dark:text-navy-300">Admission</p>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      <i class="fa-solid fa fa-person"></i>${subArray.AdmissionCount}
                    </p>
                  </div>
                </div>
              </td>
              
            </tr>
          </tbody>
        `;

                                // Append the table to the container
                                tableContainer.appendChild(table);
                            }
                        }
                    }

                    }



                    

                }
            });

        }
    </script>


</body>

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->

</html>