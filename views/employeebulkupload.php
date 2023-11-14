<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <style>
        .hidden-row {
            display: none;
        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

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
                Import Employee
            </h2>

            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                       href="#">Employement Registration</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Import Employee</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Input File -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between append_button">
                    <h2
                        class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Input File
                    </h2>
                    <!-- <button
                    class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    type="button" id="saveLead">
                    Download sample data
                </button> -->
                    <button id="download-button" class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover-bg-accent-focus dark:focus-bg-accent-focus dark:active-bg-accent/90">Download Sample Data</button>
                </div>
                <div class="max-w-xl">
                    <p>
                        Choose file to see preview below.
                    </p>
                    <div class="inline-space mt-5 flex flex-wrap">

                        <label
                            class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <input tabindex="-1" type="file"
                                   class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                                   id="excel_file" />
                            <span class="flex items-center space-x-2">
                                    <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                                    <span>Choose File</span>
                                </span>
                        </label>


                    </div>
                </div>

            </div>
        </div>

        <!-- Begins -->
        <div class="card px-4 pb-4 sm:px-5" style="margin-top:30px;">
            <div class="my-3 flex h-8 items-center justify-between ">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Employee List
                </h2>
                <button
                    class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    type="button" id="saveLead">
                    Upload Employee Details
                </button>

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
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    $(document).ready(function () {
        domreadyfunction();
        $('.menu-toggle').click();

    });
    window.addEventListener("DOMContentLoaded", () => Alpine.start());

    // Function for excel upload file
    const excel_file = document.getElementById('excel_file');
    function convertBase64ToExcel(data) {

        var contentType = 'application/vnd.ms-excel';
        var blob1 = b64toBlob(data, contentType);
        var blobUrl1 = URL.createObjectURL(blob1);
        $('.app-preloader').remove();
        window.open(blobUrl1);
        toastr["success"]("AttendanceUpload Sheet downloaded successfully");
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
    var ajaxURL = "<?= base_url('api/gettheemployeesheet'); ?>";

    $('#download-button').click(function() {
        // Perform an Ajax request to download the Excel sheet
        $.ajax({
            type: 'GET',
            url: ajaxURL,
            beforeSend: function () {
                var appPreloader = $(
                    '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                )
                    .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

                // Append the appPreloader div as the first child of the body
                $('body').prepend(appPreloader);
            },// URL to your server-side script
            success: function(response) {
                $('.app-preloader').remove();
                // Handle the server response
                if (response==0) {
                    // You can add a success message or redirect the user
                    toastr["error"]("Something went wrong");
                } else{
                    // Decode the base64 data and trigger the download
                    var decodedResponse = JSON.parse(response);
                    convertBase64ToExcel(decodedResponse);

                }
            },
            error: function(xhr, status, error) {
                // Handle Ajax errors
                toastr["error"]("Ajax request error: " + status);

            }
        });
    });

    excel_file.addEventListener('change', (event) => {



        var reader = new FileReader();


        reader.readAsArrayBuffer(event.target.files[0]);

        reader.onload = function (event) {


            var data = new Uint8Array(reader.result);

            var work_book = XLSX.read(data, {
                type: 'array'
            });

            var sheet_name = work_book.SheetNames;

            var sheet_data = XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name[0]], {
                header: 1
            });



            var expectedHeaders = ["FirstName", "LastName","Email","mobileNumber","alternatenumber","whatsappnumber","cityname","pincode","address","joiningdate", "modeofsalary","accountno","ifsccode","pfamount","pfaccountdate","grosssalary","netsalary","bankaddress","DOB","gender","residencename","aadharnumber","pancardnumber","emergencyno","emergencycontactperson","emergencyContactRelationship","alternateemergencyno","presentaddress","permanenetaddress","livesentout","incrementamount","incrementgivendate","totalsalaryafterincrement","simhandover","simhandoverdate","simreturndate","laptophandover","laptophandoverdate","laptopreturndate","idcardhandover","idcardhandoverdate","idcardreturndate"];
            if (sheet_data.length === 1) {
                toastr["warning"]("The sheet contains only the header row. Please provide data rows.");

            }else{
                var actualHeaders = sheet_data[0].map(header => header.toLowerCase());
                for (var expectedHeader of expectedHeaders) {
                    if (!actualHeaders.includes(expectedHeader.toLowerCase())) {
                        toastr["warning"]("The header does not contain the expected column");

                        return; // Exit the function if there is a header mismatch
                    }
                }

                // Find the index of the "FollowUpDate" column
                var followUpDateIndex = sheet_data[0].indexOf("joiningdate");
                var dobIndex = sheet_data[0].indexOf("DOB");
                var joingdateindex = sheet_data[0].indexOf("joiningdate");
                var pfaccountdateindex = sheet_data[0].indexOf("pfaccountdate");
                var incrementgivendateindex = sheet_data[0].indexOf("incrementgivendate");
                var simhandoverdateindex = sheet_data[0].indexOf("simhandoverdate");
                var simreturndateindex = sheet_data[0].indexOf("simreturndate");
                var laptophandoverdateindex = sheet_data[0].indexOf("laptophandoverdate");
                var laptopreturndateindex = sheet_data[0].indexOf("laptopreturndate");
                var idcardhandoverdateindex = sheet_data[0].indexOf("idcardhandoverdate");
                var idcardreturndateindex = sheet_data[0].indexOf("idcardreturndate");

                for (var row = 1; row < sheet_data.length; row++) {
                    var dateValue = sheet_data[row][followUpDateIndex];
                    var dobValue = sheet_data[row][dobIndex];
                    var joingdateValue = sheet_data[row][joingdateindex];
                    var pfaccountdateValue = sheet_data[row][pfaccountdateindex];
                    var incrementgivendateValue = sheet_data[row][incrementgivendateindex];
                    var simhandoverdateValue = sheet_data[row][simhandoverdateindex];
                    var simreturndateValue = sheet_data[row][simreturndateindex];
                    var laptophandoverdateValue = sheet_data[row][laptophandoverdateindex];
                    var laptopreturndateValue = sheet_data[row][laptopreturndateindex];
                    var idcardhandoverdateValue = sheet_data[row][idcardhandoverdateindex];
                    var idcardreturndateValue = sheet_data[row][idcardreturndateindex];

                    if (typeof dateValue === 'number') {
                        var date = new Date((dateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedDate = date.toISOString().split('T')[0];
                        sheet_data[row][followUpDateIndex] = formattedDate;
                    }

                    if (typeof dobValue === 'number') {
                        var dobDate = new Date((dobValue - (25567 + 2)) * 86400 * 1000);
                        var formattedDob = dobDate.toISOString().split('T')[0];
                        sheet_data[row][dobIndex] = formattedDob;
                    }
                    if (typeof joingdateValue === 'number') {
                        var joingdateDate = new Date((joingdateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedjoingdate = joingdateDate.toISOString().split('T')[0];
                        sheet_data[row][joingdateindex] = formattedjoingdate;
                    }
                    if (typeof pfaccountdateValue === 'number') {
                        var pfaccountdateDate = new Date((pfaccountdateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedpfaccountdate = pfaccountdateDate.toISOString().split('T')[0];
                        sheet_data[row][pfaccountdateindex] = formattedpfaccountdate;
                    }
                    if (typeof incrementgivendateValue === 'number') {
                        var incrementgivendateDate = new Date((incrementgivendateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedincrementgivendate = incrementgivendateDate.toISOString().split('T')[0];
                        sheet_data[row][incrementgivendateindex] = formattedincrementgivendate;
                    }
                    if (typeof simhandoverdateValue === 'number') {
                        var simhandoverdateDate = new Date((simhandoverdateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedsimhandoverdate = simhandoverdateDate.toISOString().split('T')[0];
                        sheet_data[row][simhandoverdateindex] = formattedsimhandoverdate;
                    }
                    if (typeof simreturndateValue === 'number') {
                        var simreturndateDate = new Date((simreturndateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedsimreturndate = simreturndateDate.toISOString().split('T')[0];
                        sheet_data[row][simreturndateindex] = formattedsimreturndate;
                    }
                    if (typeof laptophandoverdateValue === 'number') {
                        var laptophandoverdateDate = new Date((laptophandoverdateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedlaptophandoverdate = laptophandoverdateDate.toISOString().split('T')[0];
                        sheet_data[row][laptophandoverdateindex] = formattedlaptophandoverdate;
                    }
                    if (typeof laptopreturndateValue === 'number') {
                        var laptopreturndateDate = new Date((laptopreturndateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedlaptopreturndate = laptopreturndateDate.toISOString().split('T')[0];
                        sheet_data[row][laptopreturndateindex] = formattedlaptopreturndate;
                    }
                    if (typeof idcardhandoverdateValue === 'number') {
                        var idcardhandoverdateDate = new Date((idcardhandoverdateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedidcardhandoverdate = idcardhandoverdateDate.toISOString().split('T')[0];
                        sheet_data[row][idcardhandoverdateindex] = formattedidcardhandoverdate;
                    }
                    if (typeof idcardreturndateValue === 'number') {
                        var idcardreturndateDate = new Date((idcardreturndateValue - (25567 + 2)) * 86400 * 1000);
                        var formattedidcardreturndate = idcardreturndateDate.toISOString().split('T')[0];
                        sheet_data[row][idcardreturndateindex] = formattedidcardreturndate;
                    }
                }


                handleSheetData(sheet_data);

                if (sheet_data.length > 0) {
                    var table = $('<table class="table table-striped table-bordered"></table>');
                    var tableHeader = $('<thead></thead>');
                    var tableBody = $('<tbody></tbody>');

                    // Create table headers dynamically
                    var headerHTML = '<tr>';
                    sheet_data[0].forEach(function(header) {
                        headerHTML += '<th>' + header + '</th>';
                    });
                    headerHTML += '</tr>';
                    tableHeader.html(headerHTML);

                    table.append(tableHeader);

                    // Create table rows dynamically
                    sheet_data.slice(1).forEach(function(row) {
                        var isEmptyRow = row.every(function(cell) {
                            return cell === null || cell === '' || cell === ' ';
                        });

                        if (!isEmptyRow) {
                            var rowHTML = '<tr>';
                            for (var i = 0; i < row.length; i++) {
                                var cell = (row[i] !== undefined) ? row[i] : '';
                                rowHTML += '<td>' + cell + '</td>';
                            }
                            rowHTML += '</tr>';
                            tableBody.append(rowHTML);
                        }
                    });

                    table.append(tableBody);

                    // Append the table to the container
                    $('#table-container').append(table);
                }




                excel_file.value = '';


            }





        }
        // Define a function to handle sheet_data
        function handleSheetData(data) {
            var apiURL2 = "<?= base_url('api/upload-excel'); ?>";
            console.log(data);
            $(document).on('click', '#saveLead', function () {
                // Check if sheet_data is not null or empty
                // alert("button clicked");

                if (data && data.length > 0) {

                    $.ajax({
                        url: apiURL2, // Replace with the URL of your PHP script
                        method: 'POST', // Use POST method to send data
                        data: {
                            sheet_data: JSON.stringify(data)
                        }, // Convert sheet_data to JSON string
                        dataType: 'json',
                        beforeSend: function() {
                            var appPreloader = $(
                                '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
                            )
                                .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

                            // Append the appPreloader div as the first child of the body
                            $('body').prepend(appPreloader);
                        },// Expect JSON response from the server
                        success: function (response) {
                            $('.app-preloader').remove();
                            console.log(response);
                            if (response.statuscode==1) {

                                toastr["success"]("Employee list uploaded successfully");
                                $('#table-container').empty();
                                data = null;
                            }else{
                                toastr["error"]("Something wnet wrong");
                                $('#table-container').empty();
                                data = null;
                            } // Handle the response message here
                        },
                        error: function (jqXHR, textStatus, errorThrown,response) {
                            console.error("AJAX Error:", textStatus, errorThrown);
                            toastr["error"]("Error uploading data");
                            console.log(jqXHR.responseText); // Log the full response for debugging

                        }
                    });
                } else {
                    console.log('No data to process.');
                }
            });



        }

    });








</script>
</body>

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->

</html>