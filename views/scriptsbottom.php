<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "2000",
                         "hideDuration": "2000",
                        "timeOut": "2000",
                        "extendedTimeOut": "2000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }


                    function domreadyfunction()
                    {
                        var leadListName = $('main > div > ul > li > a.text-primary').text();
                        var selectedValues = ['Leads', 'Projection','Collections'];
                        var selectedValues2 = ['Employement Registration', 'Interview Registration','Attendance','Payroll'];

                        $('.removeadd').each(function() {


                            if (leadListName == "Leads" || leadListName == "Projection" ||leadListName== "Collections") {
                                $('.admissionmodule').removeClass().addClass('removeadd admissionmodule flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90');
                                $('.hrmodule').removeClass().addClass('removeadd hrmodule flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25');

                                // Loop through each 'commonul' element
                                $('.commonul').each(function() {
                                    var hasSelectedValue = false;

                                    // Loop through each anchor tag inside the current 'commonul' element
                                    $(this).find('li a span').each(function() {
                                        // Get the text content of the span within the anchor
                                        var spanText = $(this).text();

                                        // Check if the spanText is in the selectedValues array
                                        if (selectedValues.indexOf(spanText) !== -1) {
                                            hasSelectedValue = true;
                                            return false; // Exit the loop if a selected value is found
                                        }
                                    });

                                    // Hide the parent 'commonul' element if no selected values are found
                                    if (!hasSelectedValue) {
                                        $(this).hide();
                                    }
                                });
                            }else if(leadListName == "Employement Registration" || leadListName=="Interview Registration" || leadListName == "Attendance" || leadListName=="Payroll")
                            {
                                $('.hrmodule').removeClass().addClass('removeadd hrmodule flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90');
                                $('.admissionmodule').removeClass().addClass('removeadd admissionmodule flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25');
                                $('.commonul').each(function() {
                                    var hasSelectedValue = false;

                                    // Loop through each anchor tag inside the current 'commonul' element
                                    $(this).find('li a span').each(function() {
                                        // Get the text content of the span within the anchor
                                        var spanText = $(this).text();

                                        // Check if the spanText is in the selectedValues array
                                        if (selectedValues2.indexOf(spanText) !== -1) {
                                            hasSelectedValue = true;
                                            return false; // Exit the loop if a selected value is found
                                        }
                                    });

                                    // Hide the parent 'commonul' element if no selected values are found
                                    if (!hasSelectedValue) {
                                        $(this).hide();
                                    }
                                });
                            }
                        });
                        console.log(leadListName);
                    }


    </script>
<!--common functions in scriptsbottom-->
