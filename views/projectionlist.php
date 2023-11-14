<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include('header.php');?>
    <style>
        #selectedFileName {
            position: absolute;
            right: 22px;
        }

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
                Projection list
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
                <li>Projection list</li>
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


                <div class="card p-3">
                    <label class="block" style="margin-botton:20px;">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Mode of Admission</span>
                    </label>

                    <div style="position: relative;" class="div-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="modeofadmission">

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
                    <label class="block">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Status
                            </span>
                    </label>

                    <div style="position: relative;" class="div-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="statusdropdown">

                        </select>
                    </div>
                </div>




            </div>
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <div class="card p-3">
                    <label class="block" style="margin-botton:20px;">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Universities</span>
                    </label>

                    <div style="position: relative;" class="div-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="universitieslist">

                        </select>
                    </div>


                </div>
                <div class="card p-3">
                    <label class="block" style="margin-botton:20px;">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Source</span>
                    </label>

                    <div style="position: relative;" class="div-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="sourcelist">

                        </select>
                    </div>


                </div>



            </div>
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <div class="card p-3">
                    <label class="block" style="margin-botton:20px;">
                            <span
                                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                Course</span>
                    </label>

                    <div style="position: relative;" class="div-cont">
                        <select class="js-example-basic-single filter-dropdown" name="state" style="width: 100%;"
                                id="courselist">

                        </select>
                    </div>


                </div>



            </div>


        </div>




        <!-- Begins -->
        <div class="card px-4 pb-4 sm:px-5 hide_table" style="margin-top:30px;">
            <div class="my-3 flex h-8 items-center justify-between">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Projection List
                </h2>

            </div>
            <div class="">
                <div class="table-responsive" id="table-container">

                </div>

            </div>

        </div>

        <!-- Form for edit -->
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6 form_hidden">
            <div class="col-span-12">
                <div class="card p-4 sm:p-5">
                    <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                        <button
                                class="back_button btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <- Back </button> </p> <form role="form" id="postupdateform" method="POST">
                        <div class="mt-4 space-y-4">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div class="">
                                    <div class="">
                                        <span>Projection Date</span>

                                    </div>
                                    <div class="max-w-xl">

                                        <div class="mt-5">
                                            <label class="relative flex">
                                                <input type="hidden" id="isprojection" value="2" />
                                                <input type="hidden" id="isconvertedValuehold" value="3" />
                                                <input type="hidden" id="peridholdvalue" value="0" />
                                                <input
                                                        x-init="const currentDate = new Date();
                                                            const formattedDate = currentDate.toISOString().split('T')[0];
                                                            $el._x_flatpickr = flatpickr($el, { defaultDate: formattedDate });"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text"
                                                        readonly="readonly" id="projectionDate">
                                                <input
                                                        x-init="const currentDate = new Date();
                                                            const formattedDate = currentDate.toISOString().split('T')[0];
                                                            $el._x_flatpickr = flatpickr($el, { defaultDate: formattedDate });"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="hidden"
                                                        readonly="readonly" id="CollectionDate">
                                                <span
                                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     class="h-5 w-5 transition-colors duration-200"
                                                                     fill="none" viewBox="0 0 24 24"
                                                                     stroke="currentColor" stroke-width="1.5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <label class="block flex flex-col">
                                    <span style="margin-bottom: 1.25rem;">Student name</span>
                                    <span class="relative flex">
                                                    <input
                                                            class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Student Name" type="text" id="studentname" />
                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Lead Id" type="text" id="leadIDholding" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="far fa-user text-base"></i>
                                                    </span>
                                                </span>
                                </label>

                            </div>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Mobile Number</span>
                                    <span class="relative mt-1.5 flex regex-fields ">
                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="+91 01234567890" type="text" id="mobile_number" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </span>
                                </label>

                                <label class="block">
                                    <span>Email Address</span>
                                    <div class="relative mt-1.5 flex">
                                        <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Email address" type="text" id="mail_address" />
                                        <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="fa-regular fa-envelope text-base"></i>
                                                    </span>
                                    </div>
                                </label>


                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Mode of Admission</span>
                                    <div class="relative mt-1.5 flex">
                                        <select class="js-example-basic-single" name="state"
                                                style="width: 100%;" id="moa_list">

                                        </select>
                                    </div>
                                </label>
                                <label class="block">
                                    <span>University</span>
                                    <div class="relative mt-1.5 flex">
                                        <select class="js-example-basic-single" name="state"
                                                style="width: 100%;" id="university_list">

                                        </select>
                                    </div>
                                </label>
                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Course</span>
                                    <div class="relative mt-1.5 flex">
                                        <select class="js-example-basic-single" name="state"
                                                style="width: 100%;" id="course_list">

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
                                                       placeholder="Choose date..." type="text"
                                                       readonly="readonly" id="followupdate1">
                                                <span
                                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     class="h-5 w-5 transition-colors duration-200"
                                                                     fill="none" viewBox="0 0 24 24"
                                                                     stroke="currentColor" stroke-width="1.5">
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
                                    <span>Lead Source</span>
                                    <div class="relative mt-1.5 flex">
                                        <select class="js-example-basic-single" name="state"
                                                style="width: 100%;" id="source_list">

                                        </select>
                                    </div>
                                </label>
                                <label class="block">
                                    <span>Remarks</span>
                                    <textarea rows="4" placeholder="Your Address (Area and Street)"
                                              class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                              id="remarkstxtarea"></textarea>
                                </label>

                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Lead Name</span>
                                    <span class="relative mt-1.5 flex" style="margin-top:0px;">
                                                    <input
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                            placeholder="Lead Name" type="text" id="lead_name" />
                                                    <span
                                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </span>
                                </label>
                                <label class="block">
                                    <span>Lead Status</span>
                                    <div class="relative mt-1.5 flex">
                                        <select class="js-example-basic-single" name="state"
                                                style="width: 100%;" id="status_list">

                                        </select>
                                    </div>
                                </label>

                            </div>
                            <div class="mt-4 space-y-4" id="postcollectionform">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Collection Type</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="collectiontype"
                                                    style="width: 100%;" id="collection_type">

                                            </select>
                                        </div>
                                    </label>
                                    <label class="block">
                                        <span>SubCollection Type</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="subcollectiontype"
                                                    style="width: 100%;" id="subcollection_type">

                                            </select>
                                        </div>
                                    </label>

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Fees</span>
                                        <span class="relative flex regex-fields">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the Fees" type="text" id="feesname1" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>
                                    <label class="block">
                                        <span>Paid Fees</span>
                                        <span class="relative flex regex-fields">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the Fees" type="text" id="paidfees" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>
                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Pending fees</span>
                                        <span class="relative flex regex-fields">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the Fees" type="text" id="pendingfees"
                                                                readonly="readonly" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>
                                    <label class="block">
                                        <span>Payment Mode</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="paymentmode"
                                                    style="width: 100%;" id="payment_modes">

                                            </select>
                                        </div>
                                    </label>



                                </div>


                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Collection Status</span>
                                        <span class="relative flex regex-fields">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the collectionstatus" type="text"
                                                                id="collectionstatus" readonly="readonly"
                                                                value="NotVerified" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>
                                    <label class="block">
                                        <span>Bank List</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state"
                                                    style="width: 100%;" id="bank_list">

                                            </select>
                                        </div>
                                    </label>

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>UPI Reference</span>
                                        <span class="relative flex ">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the Upi reference" type="text"
                                                                id="Upireference" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>

                                    <label class="block">
                                        <span>Vendor name</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state"
                                                    style="width: 100%;" id="vendor_list">

                                            </select>
                                        </div>
                                    </label>

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Screenshot Link</span>
                                        <span class="relative flex ">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the screenshot link" type="text"
                                                                id="screenshotlink" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>

                                    <label class="block">
                                        <span>Certificate Link</span>
                                        <span class="relative flex ">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the certificate link" type="text"
                                                                id="certificatelink" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Rules Link</span>
                                        <span class="relative flex ">
                                                        <input
                                                                class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                placeholder="Enter the rules link" type="text"
                                                                id="ruleslink" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                    </span>
                                    </label>

                                    <label class="block">
                                        <span>Basic Details</span>

                                        <textarea rows="4" placeholder="Enter Basic Details of the Student"
                                                  class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                  id="basicDetails"></textarea>
                                    </label>




                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Amount Collected by TeleCaller</span>
                                        <span class="relative mt-1.5 flex">
                                                        <input
                                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                                placeholder="Telecaller name" type="text"
                                                                id="telecaller_list" autocomplete="off" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                        <ul class="suggestion-list" id="suggestion-list"></ul>
                                                    </span>

                                    </label>
                                    <label class="block">
                                        <span>Amount Collected by Teammanager</span>
                                        <span class="relative mt-1.5 flex">
                                                        <input
                                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                                placeholder="Teammanager name" type="text"
                                                                id="teammanager_list" readonly="readonly" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                        <ul class="suggestion-list" id="suggestion-list_teammanager">
                                                        </ul>
                                                    </span>

                                    </label>
                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Amount Collected by TeamLeader</span>
                                        <span class="relative mt-1.5 flex">
                                                        <input
                                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                                placeholder="Teammanager name" type="text"
                                                                id="teamleader_list" readonly="readonly" />
                                                        <span
                                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <i class="far fa-user text-base"></i>
                                                        </span>
                                                        <ul class="suggestion-list" id="suggestion-list_teamleader">
                                                        </ul>
                                                    </span>

                                    </label>
                                    <label class="block">
                                        <span>Image</span>
                                        <span class="relative flex">
                                                        <input class="hidden" type="file" id="imagelink"
                                                               name="imagelink" onchange="displayImage()" />
                                                        <label for="imagelink"
                                                               class="form-input peer flex-grow rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent cursor-pointer">
                                                            Choose File
                                                            <!-- This label will act as the file upload button -->
                                                        </label>
                                                    </span>
                                    </label>
                                    <p id="selectedFileName" class="text-slate-400/70"></p>
                                </div>


                            </div>


                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <?php echo form_submit(['name'=>'insert','value'=>'Update Details','type'=>'submit','class'=>'submit_btn btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90']);?>
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
    const urlParams = new URLSearchParams(window.location.search);
    const isprojection = urlParams.get('id');
    const isperid = urlParams.get('perid');
    var getprojectioninput = document.getElementById("isprojection");
    var getperidvlaue = document.getElementById("peridholdvalue");
    if (isprojection != null) {
        getprojectioninput.value = isprojection;
    }
    if (isperid != null) {
        getperidvlaue.value = isperid;
    }

    $(document).ready(function () {
        domreadyfunction();
        $('#CollectionDate').hide();

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
            $('.div-cont').off('change', '.filter-dropdown').on('change', '.filter-dropdown', function () {
                filterdropdown();
            });
            handleDateChange();
        });

        // 2000 milliseconds (2 seconds)
        filterdropdown();

        $('#postcollectionform').hide();
        $('#leadIDholding').hide();

        $('.form_hidden').hide();

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

        $("#feesname1, #paidfees").on('input', function () {
            var value1 = parseInt($("#feesname1").val()) || 0;
            var value2 = parseInt($("#paidfees").val()) || 0;
            if (value2 === 0 || value1 === 0) {
                $("#pendingfees").val('');
            } else {
                var difference = value1 - value2;
                $("#pendingfees").val(Math.abs(difference));
            }
        });





        // For getting mode of admission
        var getiingmoaurl = "<?= base_url('api/get-moa'); ?>";
        $.ajax({
            url: getiingmoaurl,
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                // Get references to the select elements
                const selectElement = document.getElementById("modeofadmission");
                const formselectElement = document.getElementById("moa_list");

                // Create a default option for each select element
                const defaultOption1 = document.createElement("option");
                defaultOption1.value = "0";
                defaultOption1.textContent = "--All--";
                selectElement.appendChild(defaultOption1);

                const defaultOption2 = document.createElement("option");
                defaultOption2.value = "0";
                defaultOption2.textContent = "--All--";
                formselectElement.appendChild(defaultOption2);

                // Loop through the data array and create <option> elements
                response.forEach((modeofadmission) => {
                    // Create a new option element for each dropdown
                    const optionElement1 = document.createElement("option");
                    optionElement1.value = modeofadmission.moa_id;
                    optionElement1.textContent = modeofadmission.admission_name;
                    selectElement.appendChild(optionElement1);

                    const optionElement2 = document.createElement("option");
                    optionElement2.value = modeofadmission.moa_id;
                    optionElement2.textContent = modeofadmission.admission_name;
                    formselectElement.appendChild(optionElement2);
                });

                // Trigger the change event if needed
                $('#modeofadmission').trigger('change');
                $('#moa_list').trigger('change');
            }
        });


        // For getting status dropdown




        // For getting universities list
        var gettinguniersitiesurl = "<?= base_url('api/get-universitieslist'); ?>";
        $.ajax({
            url: gettinguniersitiesurl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                //   console.log(response);

                const selectElement = document.getElementById("universitieslist");
                const formselectElement = document.getElementById("university_list");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);


                const defaultOption2 = document.createElement("option");
                defaultOption2.value = "0";
                defaultOption2.textContent = "--All--";
                formselectElement.appendChild(defaultOption2);

                // Loop through the data array and create <option> elements
                response.forEach((universities) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = universities.uni_id;
                    optionElement.textContent = universities.uni_name;
                    selectElement.appendChild(optionElement);

                    const optionElement2 = document.createElement("option");
                    optionElement2.value = universities.uni_id;
                    optionElement2.textContent = universities.uni_name;
                    formselectElement.appendChild(optionElement2);


                });

                $('#universitieslist').trigger('change');
                $('#university_list').trigger('change');
            }
        });

        // For getting source list
        var gettingleadosurceurl = "<?= base_url('api/get-leadsource'); ?>";
        $.ajax({
            url: gettingleadosurceurl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("sourcelist");
                const formselectElement = document.getElementById("source_list");
                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                const defaultOption2 = document.createElement("option");
                defaultOption2.value = "0";
                defaultOption2.textContent = "--All--";
                formselectElement.appendChild(defaultOption2);


                // Loop through the data array and create <option> elements
                response.forEach((sourcelist) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = sourcelist.lead_source_id;
                    optionElement.textContent = sourcelist.lead_source_name;
                    selectElement.appendChild(optionElement);

                    const optionElement2 = document.createElement("option");
                    optionElement2.value = sourcelist.lead_source_id;
                    optionElement2.textContent = sourcelist.lead_source_name;
                    formselectElement.appendChild(optionElement2);
                });

                $('#sourcelist').trigger('change');
                $('#source_list').trigger('change');
            }
        });


        // For getting course list
        var gettingcourselisturl = "<?= base_url('api/get-courselist'); ?>";
        $.ajax({
            url: gettingcourselisturl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("courselist");
                const formselectElement = document.getElementById("course_list");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                const defaultOption2 = document.createElement("option");
                defaultOption2.value = "0";
                defaultOption2.textContent = "--All--";
                formselectElement.appendChild(defaultOption2);

                // Loop through the data array and create <option> elements
                response.forEach((courselist) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = courselist.course_id;
                    optionElement.textContent = courselist.course_name;
                    selectElement.appendChild(optionElement);

                    const optionElement2 = document.createElement("option");
                    optionElement2.value = courselist.course_id;
                    optionElement2.textContent = courselist.course_name;
                    formselectElement.appendChild(optionElement2);
                });

                $('#courselist').trigger('change');
                $('#course_list').trigger('change');
            }
        });

        // For getting collection Type
        var collectiontypeurl = "<?= base_url('api/get-collectiontypelist'); ?>";
        $.ajax({
            url: collectiontypeurl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("collection_type");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((collection_type) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = collection_type.collectiontype_id;
                    optionElement.textContent = collection_type.collection_name;
                    selectElement.appendChild(optionElement);
                });

                $('#collection_type').trigger('change');
            }
        });

        // For getting sub collection Type
        var subcollectionurl = "<?= base_url('api/get-subcollectionlist'); ?>";
        $.ajax({
            url: subcollectionurl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("subcollection_type");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((subcollection_type) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = subcollection_type.subcollection_id;
                    optionElement.textContent = subcollection_type.sub_name;
                    selectElement.appendChild(optionElement);
                });


                $('#subcollection_type').trigger('change');
            }
        });

        // For getting Payment mode
        var paymenturl = "<?= base_url('api/get-paymentmodelist'); ?>";
        $.ajax({
            url: paymenturl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("payment_modes");

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


                $('#payment_modes').trigger('change');
            }
        });

        // For getting bank mode
        var banklisturl = "<?= base_url('api/get-banklist'); ?>";
        $.ajax({
            url: banklisturl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("bank_list");

                // Create a default option
                const defaultOption = document.createElement("option");
                defaultOption.value = "0";
                defaultOption.textContent = "--All--";
                selectElement.appendChild(defaultOption);

                // Loop through the data array and create <option> elements
                response.forEach((bank_list) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = bank_list.bank_id;
                    optionElement.textContent = bank_list.bank_name;
                    selectElement.appendChild(optionElement);
                });


                $('#bank_list').trigger('change');
            }
        });

        var vendorlisturl = "<?= base_url('api/get-vendorlist'); ?>";
        $.ajax({
            url: vendorlisturl, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // console.log(response);
                const selectElement = document.getElementById("vendor_list");

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


                $('#vendor_list').trigger('change');
            }
        });

        // filterdropdown();


    });

    var gettingleadstatusurl = "<?= base_url('api/get-leadstatus'); ?>";
    $.ajax({
        url: gettingleadstatusurl, // Replace with your actual domain
        method: 'GET',
        dataType: 'json', // Expect JSON response
        success: function (response) {
            // console.log(response);
            const selectElement = document.getElementById("statusdropdown");
            const formselectElement = document.getElementById("status_list");
            // Create a default option
            const defaultOption1 = document.createElement("option");
            defaultOption1.value = "0";
            defaultOption1.textContent = "--All--";
            selectElement.appendChild(defaultOption1);

            const defaultOption2 = document.createElement("option");
            defaultOption2.value = "0";
            defaultOption2.textContent = "--All--";
            formselectElement.appendChild(defaultOption2);

            // Loop through the data array and create <option> elements
            response.forEach((leadstatus) => {
                if (leadstatus.lead_status_name !== "Pipeline" && leadstatus
                        .lead_status_name !==
                    "Sure pipeline") {
                    const optionElement = document.createElement("option");
                    optionElement.value = leadstatus.lead_status_id;
                    optionElement.textContent = leadstatus.lead_status_name;
                    selectElement.appendChild(optionElement);
                }

                if (leadstatus.lead_status_name !== "Pipeline" && leadstatus
                        .lead_status_name !==
                    "Sure pipeline") {
                    const optionElement2 = document.createElement("option");
                    optionElement2.value = leadstatus.lead_status_id;
                    optionElement2.textContent = leadstatus.lead_status_name;
                    formselectElement.appendChild(optionElement2);
                }
            });



            $('#statusdropdown').trigger('change');
            $('#status_list').trigger('change');
        }
    });


    // For getting team manager
    var teammanagerurl = "<?= base_url('api/get-teammanager'); ?>";
    $.ajax({
        url: teammanagerurl, // Replace with your actual domain
        method: 'GET',
        dataType: 'json', // Expect JSON response
        success: function (response) {


            response.forEach(function (item) {
                managerlist.push({
                    manager_name: item.manager_name,
                    manager_id: item.manager_id
                });
            });
        }
    });

    var teamleaderurl = "<?= base_url('api/get-teamleader'); ?>";
    $.ajax({
        url: teamleaderurl, // Replace with your actual domain
        method: 'GET',
        dataType: 'json', // Expect JSON response
        success: function (response) {


            response.forEach(function (item) {
                teamleaderlist.push({
                    teamleader_name: item.team_leader_name,
                    teamleader_id: item.team_leader_id
                });
            });
        }
    });


    var telecalleerurl = "<?= base_url('api/get-teamcaller'); ?>";
    // Your AJAX call
    $.ajax({
        url: telecalleerurl, // Replace with your actual domain
        method: 'GET',
        dataType: 'json', // Expect JSON response
        success: function (response) {

            console.log(response);
            // Extract both telecaller_name and telecaller_id values and push them into the suggestions array
            response.forEach(function (item) {
                const telecallerName = item.telecaller_name;
                const teleCallerID = item.telecaller_id;
                const managerID = item.manager_id;
                const teamLeaderID = item.team_leader_id;

                suggestions.push({
                    telecaller_name: telecallerName,
                    telecaller_id: teleCallerID,
                    manager_id: managerID,
                    team_leader_id: teamLeaderID
                });
            });
        }
    });



    function displayFileName() {
        const fileInput = document.getElementById('imagelink');
        const selectedFileName = document.getElementById('selectedFileName');

        if (fileInput.files.length > 0) {
            selectedFileName.textContent = 'Selected file: ' + fileInput.files[0].name;
        } else {
            selectedFileName.textContent = '';
        }
    }
    const suggestions = [];
    const managerlist = [];
    const teamleaderlist = [];

    var gettingTelecallerid = null;
    var gettingTeamleaderid = null;
    var gettingManagerid = null;

    const $inputField = $('#telecaller_list');




    const $input = $('#telecaller_list');
    const $suggestionList = $('#suggestion-list');
    const $managerappend = $('#teammanager_list');
    const $teamleaderappend = $('#teamleader_list');

    function clearManagerAndTeamLeader() {
        $managerappend.val('');
        $teamleaderappend.val('');
    }

    // console.log($suggestionList);




    $inputField.css('user-select', 'none')
        .on('copy cut paste drag drop', function (e) {
            e.preventDefault(); // Prevent copying, pasting, cutting, dragging, and dropping
        })
        .on('select', clearManagerAndTeamLeader);


    // Sample suggestion data, replace this with your data source.

    function updateSuggestions() {
        const inputValue = $input.val().toLowerCase();
        $suggestionList.empty();

        if (inputValue === '') {
            $suggestionList.empty(); // Clear the suggestion list if input is empty.
            return;
        }

        suggestions.forEach(suggestion => {
            if (suggestion.telecaller_name.toLowerCase().includes(inputValue)) {
                // Create an <li> element with data attributes to store values
                const $li = $('<li>')
                    .text(suggestion.telecaller_name)
                    .attr('data-name', suggestion.telecaller_name)
                    .attr('data-telecaller-id', suggestion.telecaller_id)
                    .attr('data-manager-id', suggestion.manager_id)
                    .attr('data-team-leader-id', suggestion.team_leader_id);

                // Add a click event listener to the <li> element
                $li.on('click', function () {
                    handleSuggestionSelection($(this));
                });

                $suggestionList.append($li);
                $managerappend.val('');
                $teamleaderappend.val('');
                gettingTelecallerid = null;
                gettingTeamleaderid = null;
                gettingManagerid = null;
            }
        });


    }

    // Listen for changes in the input value


    function handleSuggestionSelection($li) {
        const selectedName = $li.data('name');
        const selectedManagerId = $li.data('manager-id');
        const selectedTeamLeaderId = $li.data('team-leader-id');
        const selectedTelecallerID = $li.data('telecaller-id');
        $input.val(selectedName);
        const selectedManagerIdString = selectedManagerId.toString();
        const selectedTeamLeaderIdString = selectedTeamLeaderId.toString();

        const selectedManager = managerlist.find(manager => manager.manager_id === selectedManagerIdString);
        const selectedTeamLeader = teamleaderlist.find(teamleader => teamleader.teamleader_id ===
            selectedTeamLeaderIdString);

        if (selectedManager && selectedTeamLeader) {
            const managerName = selectedManager.manager_name;
            const teamLeaderName = selectedTeamLeader.teamleader_name;
            // Append the names to the appropriate lists
            $managerappend.val(managerName);
            $teamleaderappend.val(teamLeaderName);
            gettingTelecallerid = selectedTelecallerID;
            gettingTeamleaderid = selectedTeamLeader.teamleader_id;
            gettingManagerid = selectedManager.manager_id;
        }

        $suggestionList.empty();
    }



    // Event listener for input changes.
    $input.on('input', updateSuggestions);

    // Close suggestion list when clicking outside.
    $(document).on('click', function (e) {
        if (!$input.is(e.target) && !$suggestionList.is(e.target) && $suggestionList.has(e
            .target).length === 0) {
            $suggestionList.empty();
        }
    });



    //  Date wise searching data
    function handleDateChange() {
        // debugger;

        // Get the selected date range in the date picker format
        const fromDate = $('#from-date').val(); // Format: "mm/dd/yyyy"
        const toDate = $('#to-date').val(); // Format: "mm/dd/yyyy"

        // Check if both "from" and "to" dates are filled
        if (fromDate !== '' && toDate !== '') {
            // Convert the date range to the "YYYY-MM-DD" format
            const fromDateConverted = $('#from-date').val();
            const toDateConverted = $('#to-date').val();

            // Custom search function to filter records within the date range
            $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
                const applicationDate = moment(data[0],
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

            window.history.replaceState({}, document.title, window.location
                .pathname);
        }

    }


    // For getting table records
    function gettingAllRecords() {
        var apiURL = "<?= base_url('api/get-projectionlist'); ?>";
        $.ajax({
            url: apiURL, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (dataArray) {
                $('.app-preloader').remove();
                console.log(dataArray);
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
                    'moa',
                    'universities',
                    'course',
                    'amount_collected',
                    'amount_collected_tm',
                    'amount_collected_tl',
                    'collection_type',
                    'sub_collection',
                    'payment_mode',
                    'bank_name',
                    'upi_refernce',
                    'vendor_name',
                    'screenshot_link',
                    'rules_link',
                    'basic_details',
                    'photo',
                    'certificate_link',
                    'fees',
                    'AmountCollected',
                    'AmountCollectedManager',
                    'AmountCollectedTeamLeader',
                    'paidfees',
                    'pendingfees',
                    'photo_name',


                ];
                // Iterate through the keys of the first object to create table headers
                for (const key in dataArray[0]) {
                    if (dataArray[0].hasOwnProperty(key) && !headersToHide.includes(key)) {
                        $('<th>').text(key).appendTo(headerRow).addClass(
                            'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        ).css('font-weight', '500');
                    }
                }
                if (dataArray.length > 0) {
                    $('<th>').text('Actions').appendTo(headerRow).addClass(
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

                    for (const key in dataItem) {
                        if (dataItem.hasOwnProperty(key) && !headersToHide.includes(
                            key)) {
                            $('<td>').text(dataItem[key]).appendTo(row).addClass(
                                'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                            )
                                .css('padding', '15px');
                        }
                    }
                    const editButton = $('<button>')
                        .text('Edit')
                        .addClass(
                            'btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90'
                        )
                        .attr('data-toggle', 'modal') // Add data-toggle attribute
                        .attr('data-target',
                            '#exampleModal') // Add data-target attribute
                        .attr('onclick', `editRow(${JSON.stringify(dataItem)})`);
                    const actionsCell = $('<td>').append(editButton).addClass(
                        'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                    )
                        .css('padding', '15px');
                    row.append(actionsCell);
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
    }

    $('#status_list').change(function () {

        var statuslist = $('#status_list').val();


        if (statuslist == 12 && statuslist != 14) {
            $('#postcollectionform').show();
        } else {
            $('#postcollectionform').hide();
        }
    });






    function filterdropdown() {



        var modofadmission = $('#modeofadmission').val();
        var statusofdropdown = $('#statusdropdown').val();
        var universitieslist = $('#universitieslist').val();
        var sourcelist = $('#sourcelist').val();
        var courselist = $('#courselist').val();
        var isprojection = $('#isprojection').val();
        var peridvalue = $('#peridholdvalue').val();


        var appPreloader = $(
            '<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">'
        )
            .append('<div class="app-preloader-inner relative inline-block h-48 w-48"></div>');

        // Append the appPreloader div as the first child of the body
        $('body').prepend(appPreloader);


        //ALL_FILTER_VAR
        var apiURL10 = "<?= base_url('api/get-filteredprojectionlist'); ?>";
        $.ajax({
            url: apiURL10,
            data: {
                modofadmission: modofadmission,
                statusofdropdown: statusofdropdown,
                universitieslist: universitieslist,
                sourcelist: sourcelist,
                courselist: courselist,
                isprojection: isprojection,
                peridvalue: peridvalue
            }, // Replace with your actual domain
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (dataArray) {

                $('.app-preloader').remove();
                console.log(dataArray);

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
                    'moa',
                    'universities',
                    'course',
                    'amount_collected',
                    'amount_collected_tm',
                    'amount_collected_tl',
                    'collection_type',
                    'sub_collection',
                    'payment_mode',
                    'bank_name',
                    'upi_refernce',
                    'vendor_name',
                    'screenshot_link',
                    'rules_link',
                    'basic_details',
                    'photo',
                    'certificate_link',
                    'fees',
                    'AmountCollected',
                    'AmountCollectedManager',
                    'AmountCollectedTeamLeader',
                    'paidfees',
                    'pendingfees',
                    'photo_name',
                ];
                // Iterate through the keys of the first object to create table headers
                for (const key in dataArray[0]) {
                    if (dataArray[0].hasOwnProperty(key) && !headersToHide.includes(key)) {
                        $('<th>').text(key).appendTo(headerRow).addClass(
                            'whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5'
                        ).css('font-weight', '500');
                    }
                }
                if (dataArray.length > 0) {
                    $('<th>').text('Actions').appendTo(headerRow).addClass(
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

                    for (const key in dataItem) {
                        if (dataItem.hasOwnProperty(key) && !headersToHide.includes(
                            key)) {
                            $('<td>').text(dataItem[key]).appendTo(row).addClass(
                                'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                            )
                                .css('padding', '15px');
                        }
                    }
                    const editButton = $('<button>')
                        .text('Edit')
                        .addClass(
                            'btn h-6 rounded bg-primary px-3 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90'
                        )
                        .attr('data-toggle', 'modal') // Add data-toggle attribute
                        .attr('data-target',
                            '#exampleModal') // Add data-target attribute
                        .attr('onclick', `editRow(${JSON.stringify(dataItem)})`);
                    const actionsCell = $('<td>').append(editButton).addClass(
                        'whitespace-nowrap border border-l-0 border-slate-200 px-3 py-3 dark:border-navy-500 lg:px-5'
                    )
                        .css('padding', '15px');
                    row.append(actionsCell);
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
                                    $(win.document.body).addClass(
                                        'white-bg');
                                    $(win.document.body).css('font-size',
                                        '10px');

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




                const urlParams = new URLSearchParams(window.location.search);
                let fromdatevalue = urlParams.get('fromdate');
                let todatevalue = urlParams.get('todate');

                if (fromdatevalue != null && todatevalue != null) {

                    $('#from-date').val(fromdatevalue); // Format: "mm/dd/yyyy"
                    $('#to-date').val(todatevalue); // Format: "mm/dd/yyyy"


                } else {
                    window.history.replaceState({}, document.title, window.location
                        .pathname);
                }
            }
        });

    }





    var isPhotoNullOrEmpty = true;

    function editRow(rowData) {

        // Do something with the rowData, e.g., display it in a modal or perform an action
        console.log('Clicked row data:', rowData);
        $('.hide_table').hide();
        $('.hide_filter').hide();


        if (rowData.student_name != null) {
            $('#studentname').val(rowData.student_name);
        }
        if (rowData.projection_id != null) {
            $('#leadIDholding').val(rowData.projection_id);
        }

        if (rowData.mobile_number != null) {
            $('#mobile_number').val(rowData.mobile_number);
        }
        if (rowData.email_id != null) {
            $('#mail_address').val(rowData.email_id);
        }
        if (rowData.followup_date != null) {
            $('#followupdate1').val(rowData.followup_date);
        }
        if (rowData.LeadStatusID != null && rowData.LeadStatusID != "") {
            $('#status_list').val(rowData.LeadStatusID);
            $('#status_list').trigger('change');
        } else {
            $('#status_list').val('0');
            $('#status_list').trigger('change');
        }
        if (rowData.LeadSourceID != null && rowData.LeadSourceID != "") {
            $('#source_list').val(rowData.LeadSourceID);
            $('#source_list').trigger('change');
        } else {
            $('#source_list').val('0');
            $('#source_list').trigger('change');
        }
        if (rowData.lead_name != null) {
            $('#lead_name').val(rowData.lead_name);
        }

        if (rowData.AmountCollected != null) {

            $('#telecaller_list').val(rowData.AmountCollected);

            gettingTelecallerid = rowData.amount_collected;


        }
        if (rowData.AmountCollectedManager != null) {

            $('#teammanager_list').val(rowData.AmountCollectedManager);

            gettingManagerid = rowData.amount_collected_tm;
        }
        if (rowData.AmountCollectedTeamLeader != null) {

            $('#teamleader_list').val(rowData.AmountCollectedTeamLeader);

            gettingTeamleaderid = rowData.amount_collected_tl;
        }

        if (rowData.course != null && rowData.course != "") {
            $('#course_list').val(rowData.course);
            $('#course_list').trigger('change');
        } else {
            $('#course_list').val('0');
            $('#course_list').trigger('change');
        }

        if (rowData.moa != null && rowData.moa != "") {
            $('#moa_list').val(rowData.moa);
            $('#moa_list').trigger('change');
        } else {
            $('#moa_list').val('0');
            $('#moa_list').trigger('change');
        }
        if (rowData.universities != null && rowData.universities != "") {
            $('#university_list').val(rowData.universities);
            $('#university_list').trigger('change');
        } else {
            $('#university_list').val('0');
            $('#university_list').trigger('change');
        }

        if (rowData.remarks != null) {
            $('#remarkstxtarea').val(rowData.remarks);
        }
        if (rowData.fees != null) {
            $('#feesname1').val(rowData.fees);
        }

        if (rowData.collection_type != null && rowData.collection_type != "") {
            $('#collection_type').val(rowData.collection_type);
            $('#collection_type').trigger('change');
        } else {
            $('#collection_type').val('0');
            $('#collection_type').trigger('change');
        }
        if (rowData.sub_collection != null && rowData.sub_collection != "") {
            $('#subcollection_type').val(rowData.sub_collection);
            $('#subcollection_type').trigger('change');
        } else {
            $('#subcollection_type').val('0');
            $('#subcollection_type').trigger('change');
        }
        if (rowData.payment_mode != null && rowData.payment_mode != "") {
            $('#payment_modes').val(rowData.payment_mode);
            $('#payment_modes').trigger('change');
        } else {
            $('#payment_modes').val('0');
            $('#payment_modes').trigger('change');
        }
        if (rowData.bank_name != null && rowData.bank_name != "") {
            $('#bank_list').val(rowData.bank_name);
            $('#bank_list').trigger('change');
        } else {
            $('#bank_list').val('0');
            $('#bank_list').trigger('change');
        }
        if (rowData.vendor_name != null && rowData.vendor_name != "") {
            $('#vendor_list').val(rowData.vendor_name);
            $('#vendor_list').trigger('change');
        } else {
            $('#vendor_list').val('0');
            $('#vendor_list').trigger('change');
        }
        if (rowData.upi_refernce != null) {
            $('#Upireference').val(rowData.upi_refernce);

        }
        if (rowData.screenshot_link != null) {
            $('#screenshotlink').val(rowData.screenshot_link);

        }
        if (rowData.certificate_link != null) {
            $('#certificatelink').val(rowData.certificate_link);

        }
        if (rowData.rules_link != null) {
            $('#ruleslink').val(rowData.rules_link);

        }
        if (rowData.basic_details != null) {
            $('#basicDetails').val(rowData.basic_details);

        }
        // senddata(rowData.photo);
        if (rowData.photo === null || rowData.photo == "") {
            isPhotoNullOrEmpty = true;
            $('#selectedFileName').empty();
        } else {
            isPhotoNullOrEmpty = false;
        }

        if (rowData.amount_collected != null) {
            amount_collected = gettingTelecallerid;
        }
        if (rowData.amount_collected_tm != null) {
            amount_collected_tm = gettingManagerid;
        }
        if (rowData.amount_collected_tl != null) {
            amount_collected_tl = gettingTeamleaderid;
        }

        if (rowData.photo_name != null) {
            const selectedFileNameElement = document.getElementById('selectedFileName');
            selectedFileNameElement.textContent = rowData.photo_name;
        }

        if (rowData.paidfees != null) {
            $('#paidfees').val(rowData.paidfees);
        }
        if (rowData.pendingfees != null) {
            $('#pendingfees').val(rowData.pendingfees);
        }


        $('.form_hidden').show();


    }

    let base64ImageData = null; // Declare a variable to store the base64 data

    function displayImage() {
        const input = document.getElementById('imagelink');
        const selectedFileNameElement = document.getElementById('selectedFileName');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                // Set the base64ImageData variable to the base64 data URL
                base64ImageData = e.target.result;
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(input.files[0]);
            selectedFileNameElement.textContent = input.files[0].name;
        }
        isPhotoNullOrEmpty = false;
    }

    var postleadurl = "<?= base_url('api/update-projectionlist'); ?>";

    $('#postupdateform').submit(function (event) {
        event.preventDefault();
        var statuslistvalue = $('#status_list').val();
        var collectiondate = $('#CollectionDate').val();
        // Perform form validation here
        if (validateForm()) {
            if (statuslistvalue != 12 || statuslistvalue == 14) {
                var chnageprojectionstatus = 0;
                if (statuslistvalue == 11) {
                    chnageprojectionstatus = 0;
                } else {
                    chnageprojectionstatus = 1;
                }
                const formData = {
                    StatusOfUpdate: 0,
                    collectiondate: collectiondate,
                    projectionID: $('#leadIDholding').val(),
                    projectionDate: $('#projectionDate').val(),
                    studentname: $('#studentname').val(),
                    mobilenumber: $('#mobile_number').val(),
                    emailaddress: $('#mail_address').val(),
                    moa: $('#moa_list').val(),
                    university: $('#university_list').val(),
                    course: $('#course_list').val(),
                    fees: $('#feesname1').val(),
                    followupdate: $('#followupdate1').val(),
                    leadstatus: $('#status_list').val(),
                    amountbyTelecaller: gettingTelecallerid,
                    amountbyTeamleader: gettingTeamleaderid,
                    amountbyManager: gettingManagerid,
                    leadsource: $('#source_list').val(),
                    leadname: $('#studentname').val(),
                    remarks: $('#remarkstxtarea').val(),
                    collectionType: null,
                    subCollectionType: null,
                    paymentsModes: null,
                    bankList: null,
                    Upireference: null,
                    Vendorlist: null,
                    ScreenshotLink: null,
                    CertificateLink: null,
                    RulesLink: null,
                    BasicDetails: null,
                    phtot: null,
                    isprojection: chnageprojectionstatus
                };

                console.log(formData);


                $.ajax({
                    url: postleadurl,
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    success: function (response) {
                        // Handle the response from the server

                        alert('Form Updated successfully.');
                        $('.hide_table').show();
                        $('.hide_filter').show();
                        $('.form_hidden').hide();

                        gettingAllRecords();
                        gettingTelecallerid = null;
                        gettingTeamleaderid = null;
                        gettingManagerid = null;




                    },
                    error: function (error) {
                        // Handle errors here
                        console.error(error);
                        alert('Error occurred while submitting the form.');
                    }
                });
                // } else {
                //     alert("Respective amount collected missing");
                // }
            } else {
                // console.log("Need to Check Other Fields");

                if (validateConvertedList()) {
                    if (!isPhotoNullOrEmpty) {
                        const selectedFileNameElement = document.getElementById('selectedFileName');
                        var storedFileName = selectedFileNameElement.textContent;

                        if (gettingTelecallerid != null || gettingTeamleaderid != null ||
                            gettingManagerid !=
                            null) {
                            var chnageprojectionstatus1 = 0;
                            if (statuslistvalue == 11) {
                                chnageprojectionstatus1 = 0;
                            } else {
                                chnageprojectionstatus1 = 1;
                            }
                            const formData1 = {
                                StatusOfUpdate: 1,
                                collectiondate: collectiondate,
                                projectionID: $('#leadIDholding').val(),
                                projectionDate: $('#projectionDate').val(),
                                studentname: $('#studentname').val(),
                                mobilenumber: $('#mobile_number').val(),
                                emailaddress: $('#mail_address').val(),
                                moa: $('#moa_list').val(),
                                university: $('#university_list').val(),
                                course: $('#course_list').val(),
                                fees: $('#feesname1').val(),
                                paidfeess: $('#paidfees').val(),
                                pendingfees: $('#pendingfees').val(),
                                followupdate: $('#followupdate1').val(),
                                leadstatus: $('#status_list').val(),
                                amountbyTelecaller: gettingTelecallerid,
                                amountbyTeamleader: gettingTeamleaderid,
                                amountbyManager: gettingManagerid,
                                leadsource: $('#source_list').val(),
                                leadname: $('#studentname').val(),
                                remarks: $('#remarkstxtarea').val(),
                                collectionType: $('#collection_type').val(),
                                subCollectionType: $('#subcollection_type').val(),
                                paymentsModes: $('#payment_modes').val(),
                                bankList: $('#bank_list').val(),
                                Upireference: $('#Upireference').val(),
                                Vendorlist: $('#vendor_list').val(),
                                ScreenshotLink: $('#screenshotlink').val(),
                                CertificateLink: $('#certificatelink').val(),
                                RulesLink: $('#ruleslink').val(),
                                BasicDetails: $('#basicDetails').val(),
                                phtot: base64ImageData,
                                photo_name: storedFileName,
                                isprojection: chnageprojectionstatus1
                            };

                            $.ajax({
                                url: postleadurl,
                                type: 'POST',
                                dataType: 'json',
                                data: formData1,
                                success: function (response) {
                                    // Handle the response from the server

                                    alert('Form Updated successfully.');
                                    $('.hide_table').show();
                                    $('.hide_filter').show();
                                    $('.form_hidden').hide();

                                    gettingAllRecords();
                                    gettingTelecallerid = null;
                                    gettingTeamleaderid = null;
                                    gettingManagerid = null;


                                    isPhotoNullOrEmpty = true;


                                },
                                error: function (error) {
                                    // Handle errors here
                                    console.error(error);
                                    alert('Error occurred while submitting the form.');
                                }
                            });
                        } else {
                            alert("Respective amount collected status not filled");
                        }

                    } else {
                        alert("Please select the photo");
                    }

                } else {
                    alert('Please fill in all fields.');
                }
            }

        } else {
            alert('Please fill in all fields.'); // Display an error message
        }
    });

    $(".back_button").click(function () {
        $('.hide_table').show();
        $('.hide_filter').show();
        $('.form_hidden').hide();

        $('#studentname').val('');
        $('#leadIDholding').val('');
        $('#mobile_number').val('');
        $('#mail_address').val('');
        $('#moa_list').val('0');
        $('#moa_list').trigger('change');

        $('#university_list').val('0');
        $('#university_list').trigger('change');

        $('#course_list').val('0');
        $('#course_list').trigger('change');

        $('#feesname1').val('');
        $('#paidfees').val('');
        $('#pendingfees').val('');


        $('#followupdate1').val('0');
        $('#followupdate1').trigger('change');

        $('#status_list').val('0');
        $('#status_list').trigger('change');

        $('#telecaller_list').val('');


        $('#teammanager_list').val('');

        $('#teamleader_list').val('');

        $('#source_list').val('0');
        $('#source_list').trigger('change');

        $('#lead_name').val('');
        $('#remarkstxtarea').val('');

        $('#collection_type').val('0');
        $('#collection_type').trigger('change');

        $('#subcollection_type').val('0');
        $('#subcollection_type').trigger('change');

        $('#payment_modes').val('0');
        $('#payment_modes').trigger('change');

        $('#bank_list').val('0');
        $('#bank_list').trigger('change');

        $('#Upireference').val('');

        $('#vendor_list').val('0');
        $('#vendor_list').trigger('change');

        $('#screenshotlink').val('');

        $('#certificatelink').val('');

        $('#ruleslink').val('');

        $('#basicDetails').val('');

        $('#selectedFileName').empty();



    });

    function validateForm() {
        // Define the IDs of the form fields you want to check
        const fieldIdsToCheck = ['studentname', 'mobile_number', 'projectionDate', 'mail_address', 'moa_list',
            'university_list', 'course_list', 'followupdate1', 'status_list', 'source_list',
            'lead_name', 'remarkstxtarea'
        ];

        // Loop through the form fields and check if they are empty or have default values
        for (const fieldId of fieldIdsToCheck) {
            const fieldValue = $('#' + fieldId).val();

            // For dropdown lists, check if the selected value is the default (e.g., '0' for '--select--')
            if ((fieldId === 'moa_list' || fieldId === 'university_list' || fieldId === 'course_list' || fieldId ===
                'status_list' || fieldId === 'source_list') && fieldValue === '0') {
                return false; // Dropdown has not been selected
            }

            if (!fieldValue.trim()) {
                return false; // If any other field is empty, return false
            }
        }


        return true;
    }

    function validateConvertedList() {
        const fieldIdsToCheck = ['collection_type', 'subcollection_type', 'payment_modes', 'bank_list',
            'Upireference', 'vendor_list',
            'screenshotlink', 'certificatelink', 'ruleslink', 'basicDetails', 'feesname1', 'paidfees',
            'pendingfees'
        ];
        // Loop through the form fields and check if they are empty or have default values
        for (const fieldId of fieldIdsToCheck) {
            const fieldValue = $('#' + fieldId).val();

            // For dropdown lists, check if the selected value is the default (e.g., '0' for '--select--')
            if ((fieldId === 'collection_type' || fieldId === 'subcollection_type' || fieldId === 'payment_modes' ||
                fieldId ===
                'bank_list' || fieldId === 'vendor_list') && fieldValue === '0') {
                return false; // Dropdown has not been selected
            }

            if (!fieldValue.trim()) {
                return false; // If any other field is empty, return false
            }
        }


        return true;
    }
</script>


</body>

<!-- Mirrored from lineone.piniastudio.com/dashboards-personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 06:01:57 GMT -->

</html>