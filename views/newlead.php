<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <style>
        #leadsource {
            max-height: 150px;
            overflow-y: auto;
            z-index: 1;
            /* Adjust the z-index value as needed */
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
                    New Lead
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Leads</a>
                        <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li>New Lead</li>
                </ul>
            </div>



            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12">
                    <div class="card p-4 sm:p-5">
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">

                        </p>
                        <form role="form" id="newleadform" method="POST">
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Name</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Lead Name" type="text" id="leadname" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="far fa-user text-base"></i>

                                        </span>
                                    </span>
                                </label>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Location</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Location Name" type="text" id="locationname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-building text-base"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Contact No</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="+91 01234567890" type="text" id="contactno" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
                                    </label>

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Email Address</span>
                                        <div class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Email address" type="text" id="mail" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-envelope text-base"></i>
                                            </span>
                                        </div>
                                    </label>
                                    <label class="block">
                                        <span>Lead source</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="leadsource" onchange="toloadmicrosource();">

                                            </select>
                                        </div>
                                    </label>
                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Lead micro source</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="microsource">

                                            </select>
                                        </div>
                                    </label>
                                    <label class="block">
                                        <span>Lead status</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="leadstatus">

                                            </select>
                                        </div>
                                    </label>
                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Team manager</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="teammanager">

                                            </select>
                                        </div>
                                    </label>
                                    <label class="block">
                                        <span>Team Leader</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="teamleader">

                                            </select>
                                        </div>
                                    </label>
                                    <label class="block">
                                        <span>Tele Caller</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="telecaller">

                                            </select>
                                        </div>
                                    </label>
                                    <div class="">
                                        <div class="">
                                            <span>Followup Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="followupdate">
                                                    <span
                                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="1.5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                                            
                                            <label class="block">
                                                <span>Notes</span>
                                                <textarea rows="4" placeholder="Extra Notes(other info if any)"
                                                    class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                    id="txtarea"></textarea>
                                            </label>
                                        </div>

                                


                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <?php echo form_submit(['name'=>'insert','value'=>'Submit','type'=>'submit','class'=>'btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90']);?>
                                </div>
                            </div>
                        </form>
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

           

            $(document).ajaxStop(function () {

                console.log("All AJAX requests completed");
                $('.app-preloader').remove();
                $('.js-example-basic-single').select2();
            $('.menu-toggle').click();
            });


            // Regex for not allowing special or numeric characters in input field
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

        function clearoformvalues() {
            $('#leadsource').val('0');
            $('#leadsource').trigger('change');

            $('#microsource').val('0');
            $('#microsource').trigger('change');

            $('#leadstatus').val('0');
            $('#leadstatus').trigger('change');

            $('#teammanager').val('0');
            $('#teammanager').trigger('change');

            $('#teamleader').val('0');
            $('#teamleader').trigger('change');

            $('#telecaller').val('0');
            $('#telecaller').trigger('change');

            $('#leadname').val('');
            $('#locationname').val('');
            $('#contactno').val('');
            $('#mail').val('');
            $('#txtarea').val('');
            $('#followupdate').val('');
        }

        var postleadurl = "<?= base_url('api/lead-post-data'); ?>";
        $('#newleadform').submit(function (event) {
            event.preventDefault();

            // Perform form validation here
            if (validateForm()) {

                var selectedValuerdio = $("input[name='paidstatsus']:checked").val();


                const formData = {
                    leadname: $('#leadname').val(),
                    locationname: $('#locationname').val(),
                    contactno: $('#contactno').val(),
                    emailaddress: $('#mail').val(),
                    leadsource: $('#leadsource').val(),
                    leadmicrosource: $('#microsource').val(),
                    leadstatus: $('#leadstatus').val(),
                    teammanager: $('#teammanager').val(),
                    teamleader: $('#teamleader').val(),
                    telecaller: $('#telecaller').val(),
                    followupdate: $('#followupdate').val(),
                    leadtype: selectedValuerdio,
                    notes: $('#txtarea').val()
                };
                console.log(formData);

                $.ajax({
                    url: postleadurl,
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    success: function (response) {
                        console.log(response);
                        // Handle the response from the server
                        if (response.statuscode == 1) {
                            alert('Form submitted successfully.');
                            clearoformvalues();
                        } else {
                            alert('Something Went Wrong');
                        }
                    },
                    error: function (error) {
                        // Handle errors here
                        console.error(error);
                        alert('Error occurred while submitting the form.');
                    }
                });

            } else {
                alert('Please fill in all fields.'); // Display an error message
            }
        });


        function validateForm() {
            // Define the IDs of the form fields you want to check
            const fieldIdsToCheck = ['leadname', 'locationname', 'contactno', 'mail', 'leadsource', 'microsource',
                'leadstatus', 'teammanager', 'teamleader', 'telecaller', 'followupdate'
            ];

            // Loop through the form fields and check if they are empty or have default values
            for (const fieldId of fieldIdsToCheck) {
                const fieldValue = $('#' + fieldId).val();

                // For dropdown lists, check if the selected value is the default (e.g., '0' for '--select--')
                if ((fieldId === 'leadsource' || fieldId === 'microsource' || fieldId === 'leadstatus' || fieldId ===
                        'teammanager' || fieldId === 'teamleader' || fieldId === 'telecaller') && fieldValue === '0') {
                    return false; // Dropdown has not been selected
                }

                if (!fieldValue.trim()) {
                    return false; // If any other field is empty, return false
                }
            }


            return true; // All fields are filled or have valid selections
        }
        // For getting lead source
        var apiURL = "<?= base_url('api/get-leadsource'); ?>";
        $.ajax({
            url: apiURL, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                const selectElement = document.getElementById("leadsource");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--select--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((sourcename) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = sourcename.lead_source_id;
                    optionElement.textContent = sourcename.lead_source_name;
                    selectElement.appendChild(optionElement);
                });

                $('#leadsource').trigger('change');
            }
        });

        // For getting Micro Source

        function toloadmicrosource() {

            var leadsourcevalue = parseInt($('#leadsource').val(), 10);
            var apiURL2 = "<?= base_url('api/get-leadmicrosource'); ?>";
            $.ajax({
                url: apiURL2, // Replace with your actual domain
                method: 'POST',
                data: {
                    leadsourcevalue: leadsourcevalue
                },
                dataType: 'json', // Expect JSON response
                success: function (response) {
                    console.log(response);
                    $('#microsource').empty();
                    const selectElement = document.getElementById("microsource");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--select--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements
                    response.forEach((microsourcename) => {
                        const optionElement = document.createElement("option");
                        optionElement.value = microsourcename.lead_micro_source_id;
                        optionElement.textContent = microsourcename.lead_micro_source_name;
                        selectElement.appendChild(optionElement);
                    });

                    $('#microsource').trigger('change');
                }
            });
        }


        // For getting lead status
        var apiURL3 = "<?= base_url('api/get-leadstatus'); ?>";
        $.ajax({
            url: apiURL3,
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                const selectElement = document.getElementById("leadstatus");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--select--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((leadstatus) => {
                    // Check if the lead_status_id is not 12 (or any other ID to be ignored)
                    if (leadstatus.lead_status_id !== '12') {
                        const optionElement = document.createElement("option");
                        optionElement.value = leadstatus.lead_status_id;
                        optionElement.textContent = leadstatus.lead_status_name;
                        selectElement.appendChild(optionElement);
                    }
                });

                $('#leadstatus').trigger('change');
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
                defaultOption.textContent = "--select--";
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
                defaultOption.textContent = "--select--";
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
                defaultOption.textContent = "--select--";
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
    </script>
</body>

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->

</html>