<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
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
                    Candidate Registration
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
                    <li>Candidate Registration</li>
                </ul>
            </div>

            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12">
                    <div class="card p-4 sm:p-5">
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">

                        </p>
                        <form role="form" id="candidateregisterform" method="POST">
                            <div class="mt-4 space-y-4">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Candidate First Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Employee name" type="text" id="candiadtefirstname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Candidate Last Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Employee name" type="text" id="candiadtelastname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>

                                            </span>
                                        </span>
                                    </label>
                                </div>

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Candidate id</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Employee Id" type="text" id="candidateid"
                                                readonly="readonly" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>

                                            </span>
                                        </span>
                                    </label>

                                    <div class="">
                                        <div class="">
                                            <span>Interview Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-1">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="interviewdate">
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
                                        <span>Referred By</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="refernceid">

                                            </select>
                                        </div>
                                    </label>
                                    <label class="block">
                                        <span>Job Position</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="jobposition">

                                            </select>
                                        </div>
                                    </label>
                                    <div class="">
                                        <div class="">
                                            <span>Date of Birth</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-1">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="dateofbirth">
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

                                    <label class="block">
                                        <span>Mobile No / Whatsapp No</span>
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
                                        <span>Salary Expected</span>
                                        <div class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Salary Expected" type="text" id="salaryexpected" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-rupee-sign"></i>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                                    <div>
                                        <span class="font-medium text-slate-600 dark:text-navy-100">Upload Resume</span>
                                        <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                                            <div class="filepond--root filepond--hopper"
                                                data-style-button-remove-item-position="left"
                                                data-style-button-process-item-position="right"
                                                data-style-load-indicator-position="right"
                                                data-style-progress-indicator-position="right"
                                                data-style-button-remove-item-align="false" style="height: 76px;">
                                                <div id="selectedFileName"></div>

                                                <input class="filepond--browser" type="file"
                                                    id="filepond--browser-2d1b7a7h2" name="filepond"
                                                    aria-controls="filepond--assistant-2d1b7a7h2"
                                                    aria-labelledby="filepond--drop-label-2d1b7a7h2" multiple=""
                                                    accept=".pdf"><a class="filepond--credits"
                                                    aria-hidden="true" href="https://pqina.nl/" target="_blank"
                                                    rel="noopener noreferrer"
                                                    style="transform: translateY(68px);">Powered by PQINA</a>
                                                <div class="filepond--drop-label"
                                                    style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label
                                                        for="filepond--browser-2d1b7a7h2"
                                                        id="filepond--drop-label-2d1b7a7h2" aria-hidden="true">
                                                        Choose File <span class="filepond--label-action"
                                                            tabindex="0">Browse</span></label></div>
                                                <div class="filepond--list-scroller"
                                                    style="transform: translate3d(0px, 60px, 0px);">
                                                    <ul class="filepond--list" role="list"></ul>
                                                </div>
                                                <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                    <div class="filepond--panel-top filepond--panel-root"></div>
                                                    <div class="filepond--panel-center filepond--panel-root"
                                                        style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                                    </div>
                                                    <div class="filepond--panel-bottom filepond--panel-root"
                                                        style="transform: translate3d(0px, 68px, 0px);"></div>
                                                </div><span class="filepond--assistant"
                                                    id="filepond--assistant-2d1b7a7h2" role="status" aria-live="polite"
                                                    aria-relevant="additions"></span>
                                                <div class="filepond--drip"></div>
                                                <fieldset class="filepond--data"></fieldset>
                                            </div>
                                        </div>
                                    </div>

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

            // Remove appPreloader after the document is fully loaded


            $('.js-example-basic-single').select2();
            $('.menu-toggle').click();
            appPreloader.remove();

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
                    toastr["warning"]("Numeric character length should not exceed 10 characters.");
                    
                    event.preventDefault(); // Prevent pasting
                } else {
                    // Set the input value to the cleaned numeric text
                    $(this).val(numericText);
                }
            });
            dropdownsections();
        });
        // Function to generate a random candidate ID starting with "c1233"
        function generateRandomCandidateId() {
            // Create a random number between 1000 and 9999
            var randomNum = Math.floor(Math.random() * 9000) + 1000;

            // Construct the candidate ID
            var candidateId = "C" + randomNum;

            return candidateId;
        }

        // Function to set the generated candidate ID in the input field
        function setCandidateIdInInput() {
            var candidateId = generateRandomCandidateId();
            document.getElementById('candidateid').value = candidateId;
        }

        setCandidateIdInInput();
        var fileInput = document.getElementById('filepond--browser-2d1b7a7h2');
        var selectedFileName = document.getElementById('selectedFileName');

        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                var selectedFile = fileInput.files[0];
                var fileExtension = selectedFile.name.split('.').pop().toLowerCase();
                var allowedExtensions = ['pdf'];

                if (allowedExtensions.indexOf(fileExtension) === -1) {
                    // The selected file extension does not match pdf, doc, or docx
               
                    toastr["warning"]("Please choose a PDF file");
                    fileInput.value = ''; // Clear the selected file
                    selectedFileName.textContent = ''; // Clear the displayed name
                } else {
                    selectedFileName.textContent = 'Selected File: ' + selectedFile.name;
                }
            } else {
                selectedFileName.textContent = '';
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
        }



        var postregistrationurl = "<?= base_url('api/post-candidate'); ?>";
        $('#candidateregisterform').submit(function (event) {
            event.preventDefault();
            var fileInput = document.getElementById('filepond--browser-2d1b7a7h2');

            // Perform form validation here
            if (validateForm()) {

                if (fileInput.files.length > 0) {
                    const formData = new FormData();
                    formData.append('candiadtefirstname', $('#candiadtefirstname').val());
                    formData.append('candiadtelastname', $('#candiadtelastname').val());
                    formData.append('candidateid', $('#candidateid').val());
                    formData.append('dateofbirth', $('#dateofbirth').val());
                    formData.append('refernceid', $('#refernceid').val());
                    formData.append('jobposition', $('#jobposition').val());
                    formData.append('salaryexpected', $('#salaryexpected').val());
                    formData.append('interviewdate', $('#interviewdate').val());
                    formData.append('mobileNumber', $('#contactno').val());

                    const selectedJobOption = $('#jobposition option:selected');
                    const jobCategory = selectedJobOption.data('category');
                    formData.append('jobcategory', jobCategory);

                    var selectedfile = $('#filepond--browser-2d1b7a7h2')[0].files[0];
                    formData.append('pdf_file', selectedfile);


                    $.ajax({
                        url: postregistrationurl,
                        type: 'POST',
                        data: formData,
                        processData: false, // Don't process the data
                        contentType: false, // Don't set the content type
                        success: function (response) {
                            console.log(response);
                            if (response==1) {
                                toastr["success"]("Candidate Registered Successfully");
                                
                                 $('#candiadtefirstname').val('');
                                 $('#candiadtelastname').val('');
                                 $('#dateofbirth').val('');
                                 $('#refernceid').val('0');
                                 $('#refernceid').trigger('change');
                                 $('#jobposition').val('0');
                                 $('#jobposition').trigger('change');
                                 $('#salaryexpected').val('');
                                 $('#interviewdate').val('');
                                 $('#interviewdate').val('');
                                 $('#contactno').val('');
                                 $('#filepond--browser-2d1b7a7h2').val('');
                                 setCandidateIdInInput();
                                 $("#selectedFileName").text("");

                            }else if (/^<br \/>/.test(response)){
                                toastr["error"]("File Size not compatible, Try to Compress and reupload");
                                
                            }
                        },
                        error: function (error) {
                            // Handle errors here
                            console.error(error);
                            toastr["error"]("Error occurred while submitting the form.");
                           
                        }
                    });
                } else {
                    toastr["warning"]("Please Upload a Resume to Continue");
                   
                }


            } else {
                toastr["warning"]("Please fill in all fields.");
                
            }
        });


        function validateForm() {
            // Define the IDs of the form fields you want to check
            const fieldIdsToCheck = ['candiadtefirstname', 'candiadtelastname', 'dateofbirth', 'refernceid',
                'jobposition', 'salaryexpected', 'interviewdate'
            ];

            // Loop through the form fields and check if they are empty or have default values
            for (const fieldId of fieldIdsToCheck) {
                const fieldValue = $('#' + fieldId).val();

                // For dropdown lists, check if the selected value is the default (e.g., '0' for '--select--')
                if ((fieldId === 'jobposition' || fieldId === 'refernceid') && fieldValue === '0') {
                    return false; // Dropdown has not been selected
                }

                if (!fieldValue.trim()) {
                    return false; // If any other field is empty, return false
                }
            }


            return true; // All fields are filled or have valid selections
        }
        //******************** Dedicated Dropdown Sections *********************************
    </script>

</body>

</html>