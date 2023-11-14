<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />


    <?php include('header.php');?>
    <style>
        .form-group {
            position: relative;
            right: 0;
            bottom: 0;
            width: 250px;
        }

        .file-upload {
            position: relative;
            width: 100%;
            padding: 0;
            margin: 0;
            height: 32px;
        }

        .btn-upload {
            margin-top: 10px;
            width: 100%;
            height: 35px;
            color: #6c7293;
            background: #fff;
            font-size: 12px;
            font-weight: normal;
            text-align: center;
            border: 1px solid #799fc0;
            border-radius: 3px 3px 3px 10px;
            outline: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: left;
            padding: 0px 31px 0px 5px;
            border-bottom: 3px solid #799fc0;
            border-left: 1px solid #799fc0;
            overflow: hidden;
        }

        /*---==>Button Icon-==>*/
        .i-pic-upload {
            position: absolute;
            color: #6c72ab;
            background: #ebebeb;
            background-size: cover !important;
            font-size: 14px;
            border-top: 1px solid #799fc0;
            border-right: 1px solid #799fc0;
            border-bottom: 1px solid #799fc0;
            outline: none;
            padding: 8.4px 9px;
            top: 0;
            right: 0;
            width: 49px;
            height: 31px;
            border-radius: 0px 3px 3px 0px;
        }

        .i-deselect {
            color: red;
            position: absolute;
            top: 0;
            right: 0;
            display: none;
        }

        .i-deselect::before {
            font-family: 'fontawesome';
            content: '\f057';
            position: absolute;
            top: 1px;
            right: -14px;
            font-style: normal;
            font-weight: normal;
            text-align: start;
            font-size: 12px;
            cursor: pointer;
        }

        /*---==>Browse Text-==>*/
        .text-browse {
            background: #ebebeb;
            padding: 1px 5px;
            border-radius: 2px;
            font-size: 12px;
            margin-right: 5px;
            border-radius: 2px 2px 2px 5px;
        }

        .btn-upload:active {
            border-bottom-width: 2px;
            outline: none;
        }

        .text-browse:hover {
            background: #e0e0e0;
            color: #78838d;
        }

        .btn-upload:active .text-browse {
            background: #e0e0e0;
            color: #78838d;
            padding-left: 6px;
        }

        .btn-upload:active+.i-pic-upload {
            padding: 8.5px 8px;
        }

        .text-file-name {
            max-width: 170px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            padding: 0;
            text-align: left;
            font-size: 14px;
        }

        small {
            font-size: 20px;
        }

        .actions {
            margin-top: 19px;
        }

        section {
            padding: 30px !important;
        }

        .wizard-content .wizard>.steps>ul>li:after,
        .wizard-content .wizard>.steps>ul>li:before {
            content: '';
            z-index: 9;
            display: block;
            position: absolute
        }

        .wizard-content .wizard {
            width: 100%;
            overflow: hidden
        }

        .wizard-content .wizard .content {
            margin-left: 0 !important
        }

        .wizard-content .wizard>.steps {
            position: relative;
            display: block;
            width: 100%
        }

        .wizard-content .wizard>.steps .current-info {
            position: absolute;
            left: -99999px
        }

        .wizard-content .wizard>.steps>ul {
            display: table;
            width: 100%;
            table-layout: fixed;
            margin: 0;
            padding: 0;
            list-style: none
        }

        .wizard-content .wizard>.steps>ul>li {
            display: table-cell;
            width: auto;
            vertical-align: top;
            text-align: center;
            position: relative
        }

        .wizard-content .wizard>.steps>ul>li a {
            position: relative;
            padding-top: 52px;
            margin-top: 20px;
            margin-bottom: 20px;
            display: block
        }

        .wizard-content .wizard>.steps>ul>li:before {
            left: 0
        }

        .wizard-content .wizard>.steps>ul>li:after {
            right: 0
        }

        .wizard-content .wizard>.steps>ul>li:first-child:before,
        .wizard-content .wizard>.steps>ul>li:last-child:after {
            content: none
        }

        .wizard-content .wizard>.steps>ul>li.current>a {
            color: #2f3d4a;
            cursor: default
        }

        .wizard-content .wizard>.steps>ul>li.current .step {
            border-color: #009efb;
            background-color: #fff;
            color: #009efb
        }

        .wizard-content .wizard>.steps>ul>li.disabled a,
        .wizard-content .wizard>.steps>ul>li.disabled a:focus,
        .wizard-content .wizard>.steps>ul>li.disabled a:hover {
            color: #999;
            cursor: default
        }

        .wizard-content .wizard>.steps>ul>li.done a,
        .wizard-content .wizard>.steps>ul>li.done a:focus,
        .wizard-content .wizard>.steps>ul>li.done a:hover {
            color: #999
        }

        .wizard-content .wizard>.steps>ul>li.done .step {
            background-color: #009efb;
            border-color: #009efb;
            color: #fff
        }

        .wizard-content .wizard>.steps>ul>li.error .step {
            border-color: #f62d51;
            color: #f62d51
        }

        .wizard-content .wizard>.steps .step {
            background-color: #fff;
            display: inline-block;
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -24px;
            z-index: 10;
            text-align: center
        }

        .wizard-content .wizard>.content {
            overflow: hidden;
            position: relative;
            width: auto;
            padding: 0;
            margin: 0
        }

        .wizard-content .wizard>.content>.title {
            position: absolute;
            left: -99999px
        }

        .wizard-content .wizard>.content>.body {
            padding: 0 20px
        }

        .wizard-content .wizard>.content>iframe {
            border: 0;
            width: 100%;
            height: 100%
        }

        .wizard-content .wizard>.actions {
            position: relative;
            display: block;
            text-align: right;
            padding: 0 20px 20px
        }

        .wizard-content .wizard>.actions>ul {
            float: right;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .wizard-content .wizard>.actions>ul:after {
            content: '';
            display: table;
            clear: both
        }

        .wizard-content .wizard>.actions>ul>li {
            float: left
        }

        .wizard-content .wizard>.actions>ul>li+li {
            margin-left: 10px
        }

        .wizard-content .wizard>.actions>ul>li>a {
            background: #009efb;
            color: #fff;
            display: block;
            padding: 7px 12px;
            border-radius: 4px;
            border: 1px solid transparent
        }

        .wizard-content .wizard>.actions>ul>li>a:focus,
        .wizard-content .wizard>.actions>ul>li>a:hover {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .05) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .05) inset
        }

        .wizard-content .wizard>.actions>ul>li>a:active {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .1) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .1) inset
        }

        .wizard-content .wizard>.actions>ul>li>a[href="#previous"] {
            background-color: #fff;
            color: #54667a;
            border: 1px solid #d9d9d9
        }

        .wizard-content .wizard>.actions>ul>li>a[href="#previous"]:focus,
        .wizard-content .wizard>.actions>ul>li>a[href="#previous"]:hover {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .02) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .02) inset
        }

        .wizard-content .wizard>.actions>ul>li>a[href="#previous"]:active {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .04) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .04) inset
        }

        .wizard-content .wizard>.actions>ul>li.disabled>a,
        .wizard-content .wizard>.actions>ul>li.disabled>a:focus,
        .wizard-content .wizard>.actions>ul>li.disabled>a:hover {
            color: #999
        }

        .wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"],
        .wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:focus,
        .wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:hover {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .wizard-content .wizard.wizard-circle>.steps>ul>li:after,
        .wizard-content .wizard.wizard-circle>.steps>ul>li:before {
            top: 45px;
            width: 50%;
            height: 3px;
            background-color: #009efb
        }

        .wizard-content .wizard.wizard-circle>.steps>ul>li.current:after,
        .wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,
        .wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before {
            background-color: #F3F3F3
        }

        .wizard-content .wizard.wizard-circle>.steps .step {
            width: 50px;
            height: 50px;
            line-height: 45px;
            border: 3px solid #F3F3F3;
            font-size: 1.3rem;
            border-radius: 50%
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li:before {
            top: 39px;
            width: 50%;
            height: 2px;
            background-color: #009efb
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.current .step {
            border: 2px solid #009efb;
            color: #009efb;
            line-height: 36px
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.current .step:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li.done .step:after {
            border-top-color: #009efb
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.current:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:before {
            background-color: #F3F3F3
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.done .step {
            color: #FFF
        }

        .wizard-content .wizard.wizard-notification>.steps .step {
            width: 40px;
            height: 40px;
            line-height: 40px;
            font-size: 1.3rem;
            border-radius: 15%;
            background-color: #F3F3F3
        }

        .wizard-content .wizard.wizard-notification>.steps .step:after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            bottom: 0;
            left: 50%;
            margin-left: -8px;
            margin-bottom: -8px;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 8px solid #F3F3F3
        }

        .wizard-content .wizard.vertical>.steps {
            display: inline;
            float: left;
            width: 20%
        }

        .wizard-content .wizard.vertical>.steps>ul>li {
            display: block;
            width: 100%
        }

        .wizard-content .wizard.vertical>.steps>ul>li.current:after,
        .wizard-content .wizard.vertical>.steps>ul>li.current:before,
        .wizard-content .wizard.vertical>.steps>ul>li.current~li:after,
        .wizard-content .wizard.vertical>.steps>ul>li.current~li:before,
        .wizard-content .wizard.vertical>.steps>ul>li:after,
        .wizard-content .wizard.vertical>.steps>ul>li:before {
            background-color: transparent
        }

        @media (max-width:768px) {
            .wizard-content .wizard>.steps>ul {
                margin-bottom: 20px
            }

            .wizard-content .wizard>.steps>ul>li {
                display: block;
                float: left;
                width: 50%
            }

            .wizard-content .wizard>.steps>ul>li>a {
                margin-bottom: 0
            }

            .wizard-content .wizard>.steps>ul>li:first-child:before {
                content: ''
            }

            .wizard-content .wizard>.steps>ul>li:last-child:after {
                content: '';
                background-color: #009efb
            }

            .wizard-content .wizard.vertical>.steps {
                width: 15%
            }
        }

        @media (max-width:480px) {
            .wizard-content .wizard>.steps>ul>li {
                width: 100%
            }

            .wizard-content .wizard>.steps>ul>li.current:after {
                background-color: #009efb
            }

            .wizard-content .wizard.vertical>.steps>ul>li {
                display: block;
                float: left;
                width: 50%
            }

            .wizard-content .wizard.vertical>.steps {
                width: 100%;
                float: none;
            }

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
                    Employee QueryForm
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Employement Registration</a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </li>
                    <li>Employee QueryForm</li>
                </ul>
            </div>
            <div class="container">
                <div class="panel">
                    <div class="panel-body wizard-content">
                        <form role="form" id="basicdetailsformposting" method="POST"
                            class="tab-wizard wizard-circle wizard clearfix" style="font-size:15px;">
                            <h6>Basic Details</h6>
                            <section style="background-color:white;">
                                <br />

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                                    <label class="block">
                                        <span>First Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="First Name" type="text" id="firstname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Last Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="Last Name" type="text" id="lastname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>
                                            </span>
                                        </span>
                                    </label>
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
                                        <span>Phone Number</span>
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
                                    <label class="block">
                                        <span>Alternative Phone Number</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="+91 01234567890" type="text" id="alternatenumber" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Whatsapp Number</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="+91 01234567890" type="text" id="whatsappnumber" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>City</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="City Name" type="text" id="cityname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-building text-base"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Pincode</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="pincode" type="text" id="pincodename" maxlength="6" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Address</span>
                                        <textarea rows="4" placeholder="Your Address (Area and Street)"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="address"></textarea>
                                    </label>
                                    <div class="">
                                        <div class="">
                                            <span>Employee type</span>

                                        </div>
                                        <div class="max-w-2xl">

                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="employeetype" name="employeetype" type="radio"
                                                        value="1">
                                                    <span>Permanent</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="employeetype" name="employeetype" type="radio"
                                                        value="2">
                                                    <span>WFO</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="employeetype" name="employeetype" type="radio"
                                                        value="3">
                                                    <span>Temporary</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <label class="block">
                                        <span>Recruited By</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="refernceid">

                                            </select>
                                        </div>
                                    </label>
                                    <div class="">
                                        <div class="">
                                            <span>Joining Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-1">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="joiningdate">
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

                            </section>

                            <h6>BankDetails and Salary</h6>
                            <section style="background-color:white;">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Mode of Salary</span>
                                        <div class="relative mt-1.5 flex">
                                            <select class="js-example-basic-single" name="state" style="width: 100%;"
                                                id="modeofsalary" onchange="selectingmode();">

                                            </select>
                                        </div>
                                    </label>

                                    <label class="block accountblock">
                                        <span>Account number</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Account number" type="text" id="accountno" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-landmark"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <label class="block ifscblock">
                                        <span>IFSC Code</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="IFSC Code" type="text" id="ifsccode" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-landmark"></i>

                                            </span>
                                        </span>
                                    </label>

                                    <label class="block pfblock">
                                        <span>PF</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="" type="text" id="PFamount" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-coins"></i>

                                            </span>
                                        </span>
                                    </label>


                                    <div class="">
                                        <div class="">
                                            <span>PF Account opened Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="pfaccountdate">
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
                                        <span>Gross Salary</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="" type="text" id="grosssalary" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-sack-dollar"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>NET Salary</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="" type="text" id="netsalary" readonly="readonly" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-sack-dollar"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Bank Address</span>
                                        <textarea rows="4" placeholder="Your Bank Address (Area and Street)"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="bankaddress"></textarea>
                                    </label>

                                </div>
                            </section>

                            <h6>Devices Hand Over</h6>
                            <section style="background-color:white;">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                                    <div class="">
                                        <div class="">
                                            <span>Sim Handover</span>

                                        </div>
                                        <div class="max-w-2xl">

                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="simhandover" name="simhandover" type="radio"
                                                        value="yes">
                                                    <span>Yes</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="simhandover" name="simhandover" type="radio"
                                                        value="no">
                                                    <span>No</span>
                                                </label>

                                            </div>
                                        </div>

                                    </div>
                                    <label class="block">
                                        <span>Sim mobile number</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="+91 01234567890" type="text" id="simmobilenumber" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <div class="simcardhandoverdiv">
                                        <div class="">
                                            <span>Sim handover Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="simhandoverdate">
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
                                    <div class="simcardreturndiv">
                                        <div class="">
                                            <span>Sim return Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="simreturndate">
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
                                    <div class="">
                                        <div class="">
                                            <span>Laptop Handover</span>

                                        </div>
                                        <div class="max-w-2xl">

                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="laptophandover" name="laptophandover" type="radio"
                                                        value="yes">
                                                    <span>Yes</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="laptophandover" name="laptophandover" type="radio"
                                                        value="no">
                                                    <span>No</span>
                                                </label>

                                            </div>
                                        </div>

                                    </div>
                                    <label class="block">
                                        <span>Laptop Model No</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Laptop Model No" type="text" id="laptopmodelno" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-laptop"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <div class="laptophandoverdiv">
                                        <div class="">
                                            <span>Lap Handover Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="laptophandoverdate">
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
                                    <div class="laptopreturndiv">
                                        <div class="">
                                            <span>Lap Return Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="laptopreturndate">
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
                                    <div class="">
                                        <div class="">
                                            <span>ID card Handover</span>

                                        </div>
                                        <div class="max-w-2xl">

                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="idcardhandover" name="idcardhandover" type="radio"
                                                        value="yes">
                                                    <span>Yes</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="idcardhandover" name="idcardhandover" type="radio"
                                                        value="no">
                                                    <span>No</span>
                                                </label>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="idcardhandoverdatediv">
                                        <div class="">
                                            <span>ID card Handover Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="idcardhandoverdate">
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
                                    <div class="idcardreturndiv">
                                        <div class="">
                                            <span>ID card Return Date</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="idcardreturndate">
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
                                        <span>Others if any</span>
                                        <textarea rows="4" placeholder="Other devices if any"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="otherdeviceshandover"></textarea>
                                    </label>
                                </div>


                            </section>

                            <h6>Personal Details</h6>
                            <section style="background-color:white;">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div class="">
                                        <div class="">
                                            <span>Date of Birth</span>

                                        </div>
                                        <div class="max-w-xl">

                                            <div class="mt-5">
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
                                    <div class="">
                                        <div class="">
                                            <span>Gender</span>

                                        </div>
                                        <div class="max-w-2xl">

                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="gender" name="gender" type="radio" value="female">
                                                    <span>Female</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="gender" name="gender" type="radio" value="male">
                                                    <span>Male</span>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    <label class="block">
                                        <span>City of Residence</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Residence Name" type="text" id="residencename" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-building text-base"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Aadhar number</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="Enter aadhar number" type="text" id="aadharno" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-id-card"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <div>
                                        <label for="">Aaadhar photo</label>
                                        <div class="file-upload">
                                            <button class="btn-upload">
                                                <span class="text-browse">Browse..</span>
                                                <span class="text-file-name">No file selected</span>
                                            </button>
                                            <i class="fa fa-camera i-pic-upload aadharpicturedatabase64"></i>
                                            <i class="i-deselect"></i>
                                            <input type="file" class="form-control d-none" id="aadharpicture"
                                                style="display:none;">
                                        </div>
                                    </div>
                                    <label class="block">
                                        <span>PAN number</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="Enter PAN number" type="text" id="pancardnumber"
                                                oninput="this.value = this.value.toUpperCase()" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-id-card"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <div>
                                        <label for="">PAN card photo</label>
                                        <div class="file-upload">
                                            <button class="btn-upload">
                                                <span class="text-browse">Browse..</span>
                                                <span class="text-file-name">No file selected</span>
                                            </button>
                                            <i class="fa fa-camera i-pic-upload panpicturedatabase64"></i>
                                            <i class="i-deselect"></i>
                                            <input type="file" class="form-control d-none" id="pancardpicture"
                                                style="display:none;">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="">Photograph</label>
                                        <div class="file-upload">
                                            <button class="btn-upload">
                                                <span class="text-browse">Browse..</span>
                                                <span class="text-file-name">No file selected</span>
                                            </button>
                                            <i class="fa fa-camera i-pic-upload personalpicturebase64"></i>
                                            <i class="i-deselect"></i>
                                            <input type="file" class="form-control d-none" id="photograph"
                                                style="display:none;">
                                        </div>
                                    </div>
                                    <label class="block">
                                        <span>Emergency Contact No</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="+91 01234567890" type="text" id="emergencyno" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Emergency Contact Person</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Contact Name" type="text" id="emergencycontactperson" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Emergency Contact Relationship</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Relationship Name" type="text" id="relationshipname" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="far fa-user text-base"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Alternative Emergency Contact No</span>
                                        <span class="relative mt-1.5 flex regex-fields ">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                                placeholder="+91 01234567890" type="text" id="altemergencyno" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span>Present Address</span>
                                        <textarea rows="4" placeholder="Your Present Address (Area and Street)"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="presentaddress"></textarea>
                                    </label>
                                    <label class="block">
                                        <span>Permanent Address</span>
                                        <textarea rows="4" placeholder="Your Permanent Address (Area and Street)"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="permanentaddress"></textarea>
                                    </label>

                            </section>
                            <h6>Certificate Details</h6>
                            <section style="background-color:white;">
                                <div class="">
                                    <div class="">
                                        <span>Certificates Received Date</span>

                                    </div>
                                    <div class="max-w-xl">

                                        <div class="mt-5">
                                            <label class="relative flex">
                                                <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                    placeholder="Choose date..." type="text" readonly="readonly"
                                                    id="certificatereceiveddate">
                                                <span
                                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 transition-colors duration-200" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label for="title" class="block" style="margin-top:20px;">
                                        <span>Certificate</span>
                                        <div class="relative mt-1.5 flex">
                                            <input type="text" id="title" name="title"
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent " />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-file-contract"></i>

                                            </span>
                                        </div>
                                    </label>
                                    <label for="content" class="block" style="margin-top:20px;">
                                        <span>Certificate No</span>
                                        <div class="relative mt-1.5 flex">
                                            <input type="text" id="content" name="content"
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent " />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-file-contract"></i>
                                            </span>
                                        </div>

                                    </label>
                                    <label class="block" style="position:absolute;right:29px;">

                                        <div class="relative mt-1.5 flex">
                                            <button
                                                class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                                                id="add-task" style="width: fit-content;" type="button">
                                                Add details
                                            </button>
                                        </div>
                                    </label>
                                </div>

                                <div id="todos" class="grid grid-cols-1 gap-4 sm:grid-cols-2"
                                    style="margin-top:20px;padding: 25px;background-color: ghostwhite;display:none;">

                                </div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div class="" style="margin-top:20px;">
                                        <div class="">
                                            <span>Certificate Xerox Given</span>

                                        </div>
                                        <div class="max-w-2xl">

                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="xeroxgiven" name="xeroxgiven" type="radio"
                                                        value="yes">
                                                    <span>yes</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="xeroxgiven" name="xeroxgiven" type="radio" value="no">
                                                    <span>no</span>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </section>
                            <h6>Staff Status</h6>
                            <section style="background-color:white;">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div class="" style="margin-top:20px;">
                                        <div class="">
                                            <span>Staff Status</span>
                                        </div>
                                        <div class="max-w-2xl">
                                            <div class="inline-space mt-5 flex flex-wrap items-center">
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="liveorsentout" name="liveorsentout" type="radio"
                                                        value="live" checked>
                                                    <span>live</span>
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input class="liveorsentout" name="liveorsentout" type="radio"
                                                        value="sentout">
                                                    <span>sentout</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sentoutdiv">
                                        <div class="">
                                            <span>Sentout Date</span>
                                        </div>
                                        <div class="max-w-xl">
                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="sentoutdate">
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
                                    <label class="block sentoutdiv">
                                        <span>Sentout Reason</span>
                                        <textarea rows="4" placeholder="Sentout Reason"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="sentoutreason"></textarea>
                                    </label>
                                    <label class="block sentoutdiv">
                                        <span>Relevant documents</span>
                                        <textarea rows="4" placeholder="Relevant Documents"
                                            class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent "
                                            id="relevantdocuments"></textarea>
                                    </label>
                                    <label class="block">
                                        <span>Increment Amount</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="" type="text" id="incrementamount" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-coins"></i>

                                            </span>
                                        </span>
                                    </label>
                                    <div class="">
                                        <div class="">
                                            <span>Increment Given Date</span>
                                        </div>
                                        <div class="max-w-xl">
                                            <div class="mt-5">
                                                <label class="relative flex">
                                                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                                        placeholder="Choose date..." type="text" readonly="readonly"
                                                        id="incrementgivendate">
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
                                        <span>Total Salary After Increment</span>
                                        <span class="relative mt-1.5 flex regex-fields">
                                            <input
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="" type="text" id="totalsalaryafterincrement"
                                                readonly="readonly" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fas fa-sack-dollar"></i>

                                            </span>
                                        </span>
                                    </label>

                                </div>


                            </section>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2" style="display:none;">
                                <?php echo form_submit(['name'=>'insert','value'=>'Update Details','type'=>'submit','class'=>'submit_btn btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90']);?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <div id="x-teleport-target"></div>
    <?php include('scriptsbottom.php');?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
        var form = $("#basicdetailsformposting");


        form.steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#'
        });
        let revalue;
        const urlParams = new URLSearchParams(window.location.search);
        var encodedData = urlParams.get('data');
        var reval = urlParams.get('re');

        if (reval != null) {
            revalue = reval;
        } else {
            revalue = 0;
        }
        let dataObject;
        let reanother;
        if (encodedData != null) {
            dataObject = "null";

        } else {
            dataObject = null;
        }

        console.log(dataObject);
        let tableID;


        var counter = 0;

        function CreateCertificateDivs(empid) {
            var getcertificateURL = "<?= base_url('api/get-certificatedetails'); ?>";
            $.ajax({
                url: getcertificateURL,
                type: 'POST',
                dataType: 'json',
                data: {
                    empid: empid
                },
                success: function (response) {
                    console.log(response);

                    for (var i = 0; i < response.length; i++) {
                        var title = response[i].certificate_name;
                        var content = response[i].certifcate_number;
                        addTodo(title, content);
                    }
                    $('#todos').show();
                }
            });

        }

        /*---==>Custom FIle Upload--==>*/
        // For uploading photos and showing the preview of photos
        $(".file-upload").each(function () {

            var fI = $(this).children('input'),
                btn = $(this).children('.btn-upload'),
                i1 = $(this).children('.i-pic-upload'),
                i2 = $(this).children('.i-deselect'),
                dN = "No file Selected",
                tfN = $(this).find('.text-file-name'),
                bT = $(this).find('.text-browse');
            bT.text('Browse...');
            tfN.text('No file Selected');

            btn.click(function (b) {
                b.preventDefault();
                fI.click();
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        i1.css("background", "url(" + e.target.result + ") no-repeat center").removeClass(
                            'fa fa-camera');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            fI.change(function (e) {
                readURL(this);
                var fN = e.target.files[0].name;
                tfN.text(fN);
                i2.fadeIn(200);
                bT.text('Change...');
            });
            i2.click(function () {
                i2.fadeOut(100);
                window.setTimeout(function () {
                    i1.css("background", "#ebebeb").addClass('fa fa-camera');
                    bT.text('Browse...');
                    tfN.text('No file Selected');
                    fI.val(null);
                }, 200);

            });
        });

        // Adding certificates
        (function () {
            "use strict";
            domreadyfunction();

            var todoApp = (function () {
                document.addEventListener("DOMContentLoaded", function () {
                    init();
                });

                var init = function () {
                    document.getElementById("add-task").addEventListener("click", function () {
                        var newTitle = document.getElementById("title").value,
                            newContent = document.getElementById("content").value;
                        if (validate(newTitle)) {
                            addTodo(newTitle, newContent);
                        }
                    }, false);

                    document.getElementById("todos").addEventListener("click", function (e) {
                        if (e.target && e.target.nodeName == "BUTTON") {
                            deleteTodo(e.target.parentNode);
                        }
                    }, false);
                };

                var validate = function (newTitle, newContent) {
                    if (newTitle.length === 0) {
                        var target = document.getElementById("title");
                        target.className = target.className + " error";
                        return false;
                    } else {
                        return true;
                    }
                };

            }());
        }());



        function addTodo(title, content) {

            counter++;
            var newTodo = document.createElement("div");
            newTodo.id = "certificatesection-" + counter;


            var certificateLabel = document.createElement("label");
            certificateLabel.textContent = "Certificate";
            certificateLabel.setAttribute("for", "title");
            certificateLabel.className = "block title-bb";

            var divWithSpan = document.createElement("div");
            divWithSpan.className = "relative mt-1.5 flex";

            var certificateInput = document.createElement("input");
            var titleId = "title-" + Math.floor(Math.random() * 10000); // Generate a random ID
            certificateInput.setAttribute("type", "text");
            certificateInput.setAttribute("id", titleId);
            certificateInput.setAttribute("name", "title");
            certificateInput.className =
                "form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent";
            certificateInput.setAttribute("readonly", "readonly");
            certificateInput.value = title; // Set the value from user input

            var spanWithI = document.createElement("span");
            spanWithI.className =
                "pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent";

            var iElement = document.createElement("i");
            iElement.className = "fa-solid fa-file-contract";

            spanWithI.appendChild(iElement);
            divWithSpan.appendChild(certificateInput);
            divWithSpan.appendChild(spanWithI);

            var divWithSpani = document.createElement("div");
            divWithSpani.className = "relative mt-1.5 flex";

            var certificateNoLabel = document.createElement("label");
            certificateNoLabel.textContent = "Certificate No";
            certificateNoLabel.setAttribute("for", "content");
            certificateNoLabel.className = "block content-bb";

            var divWithSpanAndIi = document.createElement("div");
            divWithSpanAndIi.className = "relative mt-1.5 flex";

            var certificateNoInput = document.createElement("input");
            var contentId = "content-" + Math.floor(Math.random() *
                10000); // Generate a random ID
            certificateNoInput.setAttribute("type", "text");
            certificateNoInput.setAttribute("id", contentId);
            certificateNoInput.setAttribute("name", "content");
            certificateNoInput.setAttribute("readonly", "readonly");
            certificateNoInput.className =
                "form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent mt-2";
            certificateNoInput.value = content; // Set the value from user input

            var spanWithIi = document.createElement("span");
            spanWithIi.className =
                "pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent";

            var iElementi = document.createElement("i");
            iElementi.className = "fa-solid fa-file-contract";

            spanWithIi.appendChild(iElementi);
            divWithSpanAndIi.appendChild(certificateNoInput);
            divWithSpanAndIi.appendChild(spanWithIi);



            certificateLabel.appendChild(divWithSpan);
            newTodo.appendChild(certificateLabel);
            certificateNoLabel.appendChild(divWithSpanAndIi);
            newTodo.appendChild(certificateNoLabel);

            // Create the "Delete" button
            var button = document.createElement("button");
            var deleteBtn = document.createTextNode("Delete"); // Change the text as needed
            button.appendChild(deleteBtn);
            button.className =
                "btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90 mt-2";
            button.addEventListener("click", function () {
                deleteTodo(newTodo);
            }, false);
            newTodo.appendChild(button);
            document.getElementById("todos").appendChild(newTodo);
            $('#title').val('');
            $('#content').val('');

        }

        function deleteTodo(todo) {
            todo.parentNode.removeChild(todo);
        }

        $(document).ready(function () {


            $("#PFamount, #grosssalary").on('input', function () {
                var value1 = parseInt($("#PFamount").val()) || 0;
                var value2 = parseInt($("#grosssalary").val()) || 0;

                if (value2 === 0 && value1 === 0) {
                    $("#netsalary").val('');
                    $("#totalsalaryafterincrement").val('');
                } else if (value1 === 0 && value2 != 0) {
                    $("#netsalary").val(value2);
                    $("#totalsalaryafterincrement").val(value2);
                } else if (value1 != 0 && value2 === 0) {
                    $("#netsalary").val('');
                    $("#totalsalaryafterincrement").val('');
                } else {
                    var difference = value1 - value2;
                    $("#netsalary").val(Math.abs(difference));
                    var netsal = $('#netsalary').val();
                    $("#totalsalaryafterincrement").val(Math.abs(netsal));
                }

                if (value3 != 0 && value4 != 0) {

                    var value3 = parseInt($("#totalsalaryafterincrement").val()) || 0;
                    var value4 = parseInt($("#incrementamount").val()) || 0;

                    var sum = value3 + value4;
                    $("#totalsalaryafterincrement").val(sum);
                }

            });

            $("#incrementamount").on('input', function () {
                if ($('#grosssalary').val() == '') {

                    toastr["warning"]("First Add Gross Salary to Calculate Total!");

                    // alert("First Add Gross salary to calculate Total Salary");
                    $('#incrementamount').val('');
                    $('#totalsalaryafterincrement').val('');
                }
                var value1 = parseInt($("#incrementamount").val()) || 0;
                var value2 = parseInt($("#netsalary").val()) || 0;
                if (value1 === 0) {
                    $("#totalsalaryafterincrement").val(value2);
                } else {
                    var sum = value1 + value2;
                    $("#totalsalaryafterincrement").val(sum);
                }



            });



            // Find the anchor tag with href="#finish"
            var finishAnchor = $("a[href='#finish']");

            // Add an ID to the anchor tag
            finishAnchor.attr("id", "finishLink");

            $("#finishLink").click(function (e) {
                // Prevent the default anchor behavior (navigation)
                $(".submit_btn").click(); // Manually submit the form
            });
            $('.sentoutdiv').hide();
            $('.idcardreturndiv').hide();
            $('.idcardhandoverdatediv').hide();
            $('.laptopreturndiv').hide();
            $('.laptophandoverdiv').hide();
            $('.simcardreturndiv').hide();
            $('.simcardhandoverdiv').hide();



            $(".liveorsentout").change(function () {
                if ($(this).val() === "sentout") {
                    $(".sentoutdiv").show();
                } else {
                    $(".sentoutdiv").hide();
                }
            });

            //    Sim card details showing
            $(".simhandover").change(function () {
                if ($(this).val() === "yes") {
                    $(".simcardreturndiv").hide();
                    $('.simcardhandoverdiv').show();
                } else {
                    $(".simcardreturndiv").show();
                    $('.simcardhandoverdiv').hide();
                }
            });

            //    Laptop details showing
            $(".laptophandover").change(function () {
                if ($(this).val() === "yes") {
                    $(".laptopreturndiv").hide();
                    $('.laptophandoverdiv').show();
                } else {
                    $(".laptopreturndiv").show();
                    $('.laptophandoverdiv').hide();
                }
            });

            //    ID card details showing
            $(".idcardhandover").change(function () {
                if ($(this).val() === "yes") {
                    $(".idcardreturndiv").hide();
                    $('.idcardhandoverdatediv').show();
                } else {
                    $(".idcardreturndiv").show();
                    $('.idcardhandoverdatediv').hide();
                }
            });
            // Find all the list items (tabs) in your form
            var tabs = $("ul[role='tablist'] li[role='tab']");

            // Remove the "disabled" attribute from all tabs
            tabs.removeAttr("aria-disabled");

            // Update the class to remove the "disabled" class
            tabs.removeClass("disabled");
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


                    const urlParams = new URLSearchParams(window.location.search);
                    var refrid = urlParams.get('refid');
                    if (refrid != null) {
                        $('#refernceid').val(refrid);
                    } else {
                        $('#refernceid').val('0');
                    }
                    $('#refernceid').trigger('change');
                }
            });



            var modeofsalaryurl = "<?= base_url('api/get-modeofsalary'); ?>";
            $.ajax({
                url: modeofsalaryurl, // Replace with your actual domain
                method: 'GET',
                dataType: 'json', // Expect JSON response
                success: function (response) {
                    // console.log(response);
                    const selectElement = document.getElementById("modeofsalary");

                    // Create a default option
                    const defaultOption = document.createElement("option");
                    defaultOption.value = "0";
                    defaultOption.textContent = "--All--";
                    selectElement.appendChild(defaultOption);

                    // Loop through the data array and create <option> elements
                    response.forEach((modeofsalary) => {
                        const optionElement = document.createElement("option");
                        optionElement.value = modeofsalary.id;
                        optionElement.textContent = modeofsalary.type_name;
                        selectElement.appendChild(optionElement);
                    });

                    const urlParams = new URLSearchParams(window.location.search);
                    var mosid = urlParams.get('mosid');
                    if (mosid != null) {
                        $('#modeofsalary').val(mosid);
                    } else {
                        $('#modeofsalary').val('0');
                    }
                    $('#modeofsalary').trigger('change');

                }
            });


        }
        dropdownsections();
        let flag = false;
        $("#add-task").click(function () {
            // Check if both #title and #content are empty

            if ($('#title').val() === '' && $('#content').val() === '') {

                if (!flag) {
                    $('#todos').hide();
                }
                // Hide the #todos element
            } else {
                $('#todos').show();
                flag = true; // Show the #todos element if there's input
            }

        });
        var certificatedataArray = [];

        function selectingmode() {
            var modeofslsary = $('#modeofsalary').val();
            if (modeofslsary == 27) {

                $('.accountblock').hide();
                $('#accountno').val('');

                $('.ifscblock').hide();
                $('#ifsccode').val('');

                return;

            }
            $('.accountblock').show();
            $('.ifscblock').show();
        }

        function returnallformvalues() {


            // Select all the parent divs with IDs starting with "certificatesection-"
            var parentDivs = $('[id^="certificatesection-"]');

            // Initialize an empty array to store the data


            // Loop through each parent div
            parentDivs.each(function () {
                var parentDiv = $(this);

                // Extract the parent div name
                var parentDivName = parentDiv.attr('id');

                // Extract the title and content values within the parent div
                var title = parentDiv.find('input[name="title"]').val();
                var content = parentDiv.find('input[name="content"]').val();

                // Create an object with the data and push it to the dataArray
                var dataObject = {
                    title: title,
                    content: content
                };
                certificatedataArray.push(dataObject);
            });



            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var mail = $('#mail').val();
            var contactno = $('#contactno').val();
            var alternatenumber = $('#alternatenumber').val();
            var whatsappnumber = $('#whatsappnumber').val();
            var cityname = $('#cityname').val();
            var pincodename = $('#pincodename').val();
            var address = $('#address').val();

            var refernceid = $('#refernceid').val();

            var ifsccode = $('#ifsccode').val();

            var bankaddresss = $('#bankaddress').val();


            var grosssalary = $('#grosssalary').val();
            var netsalary = $('#netsalary').val();
            var simmobilenumber = $('#simmobilenumber').val();

            var accountno = $('#accountno').val();
            var laptopmodelno = $('#laptopmodelno').val();
            var otherdeviceshandover = $('#otherdeviceshandover').val();
            var residencename = $('#residencename').val();
            var pancardnumber = $('#pancardnumber').val();

            var element2 = $('.i-pic-upload.panpicturedatabase64');
            var backgroundUrl2 = element2.css('background');
            var dataUrl2 = backgroundUrl2.match(/url\(["']?data:([^"']*)["']?\)/);
            var pancardpicture;

            if (dataUrl2) {
                pancardpicture = 'data:' + dataUrl2[1];
            } else {
                pancardpicture = "Empty";
            }


            var presentaddress = $('#presentaddress').val();
            var permanentaddress = $('#permanentaddress').val();

            var element3 = $('.i-pic-upload.personalpicturebase64');
            var backgroundUrl3 = element3.css('background');
            var dataUrl3 = backgroundUrl3.match(/url\(["']?data:([^"']*)["']?\)/);
            var photograph;

            if (dataUrl3) {
                photograph = 'data:' + dataUrl3[1];
            } else {
                photograph = "Empty";
            }


            var emergencyno = $('#emergencyno').val();
            var emergencycontactperson = $('#emergencycontactperson').val();
            var altemergencyno = $('#altemergencyno').val();
            var aadharno = $('#aadharno').val();

            var element = $('.i-pic-upload.aadharpicturedatabase64');
            var backgroundUrl = element.css('background');
            var dataUrl = backgroundUrl.match(/url\(["']?data:([^"']*)["']?\)/);
            var aadharpicture;

            if (dataUrl) {
                aadharpicture = 'data:' + dataUrl[1];
            } else {
                aadharpicture = "Empty";
            }




            var sentoutreason = $('#sentoutreason').val();
            var relevantdocuments = $('#relevantdocuments').val();
            var incrementamount = $('#incrementamount').val();

            var totalsalaryafterincrement = $('#totalsalaryafterincrement').val();

            // Radio buttons
            var employeetype = $("input[name='employeetype']:checked").val() || null;

            var simhandover = $("input[name='simhandover']:checked").val() || null;
            var laptophandover = $("input[name='laptophandover']:checked").val() || null;
            var idcardhandover = $("input[name='idcardhandover']:checked").val() || null;
            var liveorsentout = $("input[name='liveorsentout']:checked").val() || null;
            var xeroxgiven = $("input[name='xeroxgiven']:checked").val() || null;
            var gender = $("input[name='gender']:checked").val() || null;


            // Dates of the forms

            var joiningdate = $('#joiningdate').val();
            var pfaccountdate = $('#pfaccountdate').val();
            var simhandoverdate = $('#simhandoverdate').val();
            var simreturndate = $('#simreturndate').val();
            var laptophandoverdate = $('#laptophandoverdate').val();
            var laptopreturndate = $('#laptopreturndate').val();
            var dateofbirth = $('#dateofbirth').val();
            var sentoutdate = $('#sentoutdate').val();
            var incrementgivendate = $('#incrementgivendate').val();
            var certificatereceiveddate = $('#certificatereceiveddate').val();
            var idcardhandoverdate = $('#idcardhandoverdate').val();
            var idcardreturndate = $('#idcardreturndate').val();
            var emergencyContactPerson = $('#emergencycontactperson').val();

            var pfamount = $('#PFamount').val();
            var isPF;
            if (pfamount != null && pfamount !== "") {

                isPF = "yes"

            } else {
                isPF = "no"
            }
            var modeofslary = $('#modeofsalary').val();

            var formData = {
                'tableID': tableID,
                'FirstName': firstname,
                'LastName': lastname,
                'Email': mail,
                'mobileNumber': contactno,
                'alternatenumber': alternatenumber,
                'whatsappnumber': whatsappnumber,
                'cityname': cityname,
                'pincode': pincodename,
                'address': address,
                'refernceID': refernceid,
                'ifsccode': ifsccode,
                'bankaddress': bankaddresss,
                'grosssalary': grosssalary,
                'netsalary': netsalary,
                'simmobilenumber': simmobilenumber,
                'accountno': accountno,
                'laptopmodelno': laptopmodelno,
                'otherdeviceshandover': otherdeviceshandover,
                'residencename': residencename,
                'pancardnumber': pancardnumber,
                'pancardpicture': pancardpicture,
                'presentaddress': presentaddress,
                'permanenetaddress': permanentaddress,
                'photographpicture': photograph,
                'emergencyno': emergencyno,
                'emergencycontactperson': emergencycontactperson,
                'alternateemergencyno': altemergencyno,
                'aadharnumber': aadharno,
                'aadharpicture': aadharpicture,
                'xeroxgiven': xeroxgiven,
                'sentoutreason': sentoutreason,
                'relevantdocuments': relevantdocuments,
                'incrementamount': incrementamount,
                'totalsalaryafterincrement': totalsalaryafterincrement,
                'employementtype': employeetype,
                'livesentout': liveorsentout,
                'simhandover': simhandover,
                'laptophandover': laptophandover,
                'idcardhandover': idcardhandover,
                'joiningdate': joiningdate,
                'pfaccountdate': pfaccountdate,
                'simhandoverdate': simhandoverdate,
                'simreturndate': simreturndate,
                'laptophandoverdate': laptophandoverdate,
                'laptopreturndate': laptopreturndate,
                'DOB': dateofbirth,
                'sentoutdate': sentoutdate,
                'incrementgivendate': incrementgivendate,
                'certificatereceiveddate': certificatereceiveddate,
                'idcardhandoverdate': idcardhandoverdate,
                'idcardreturndate': idcardreturndate,
                'certificatearray': certificatedataArray,
                'pfamount': pfamount,
                'isPF': isPF,
                'modeofsalary': modeofslary,
                'gender': gender,
                'emergencyContactRelationship':emergencyContactPerson
            };

            return formData;
        }


        $('#basicdetailsformposting').submit(function (event) {
            event.preventDefault();

            var getvalues = returnallformvalues();
            console.log(getvalues);



            var employeequeryformURL = "<?= base_url('api/post-employeequeryform'); ?>";
            var returnvalue = validateForm();
            if (returnvalue == 1) {
                toastr["warning"]("Sim card details cannot be incomplete");

            } else if (returnvalue == 2) {
                toastr["warning"]("Laptop details cannot be incomplete");

            } else if (returnvalue == 3) {
                toastr["warning"]("ID card details cannot be incomplete");

            } else if (returnvalue == 4) {
                toastr["warning"]("Joining date is required");

            } else if (returnvalue == 5) {
                toastr["warning"]("Sentout date is required");

            } else if (returnvalue == 6) {
                toastr["warning"]("Certificate date is required");

            } else if (returnvalue == 7) {
                toastr["warning"]("PF details cannot be Incomplete");

            } else if (returnvalue == 8) {
                toastr["warning"]("Increment Details cannot be Incomplete");

            } else if (returnvalue == 9) {
                toastr["warning"]("First Name or Last Name or DOB is missing");

            } else {

                if (validateForm()) {


                    $.ajax({
                        url: employeequeryformURL,
                        type: 'POST',
                        dataType: 'json',
                        data: getvalues,
                        success: function (response) {
                            console.log(reval);
                            if (reval == null && reanother== null)

                            {
                                if (response.statuscode == 1) {
                                    // var re = document.getElementById("re");


                                    var useridtoupdate = response.user_id;
                                    var redirectURL = "<?php echo site_url('Candidatelist');?>";


                                    // Append the user ID to the URL as a query parameter
                                    redirectURL += '?status=' + response.statuscode + '&userid=' +
                                        useridtoupdate;

                                    window.location.href = redirectURL;




                                } else {
                                    toastr["error"]("Something went wrong");

                                }
                            }else if(reanother== 0){
                                var redirectURL3 = "<?php echo site_url('Employeelistpage');?>";
                                // Append the user ID to the URL as a query parameter
                                redirectURL3 += '?status=5';

                                window.location.href = redirectURL3;

                            }else{
                                if (response.statuscode == 1) {

                                    
                                    var redirectURL2 = "<?php echo site_url('Employeelistpage');?>";


                                    // Append the user ID to the URL as a query parameter
                                    redirectURL2 += '?status=' + response.statuscode;

                                    window.location.href = redirectURL2;

                                }else{
                                    toastr["error"]("Something went wrong");
                                }
                                

                            }


                        }
                    });
                } else {
                    toastr["error"]("Empty Form Cannot be Submitted");

                }

            }



        });


        function validateForm() {

            var employeetype = $("input[name='employeetype']:checked").val() || null;

            var simhandover = $("input[name='simhandover']:checked").val() || null;
            var laptophandover = $("input[name='laptophandover']:checked").val() || null;
            var idcardhandover = $("input[name='idcardhandover']:checked").val() || null;
            var liveorsentout = $("input[name='liveorsentout']:checked").val() || null;

            var simhandoverdate = $('#simhandoverdate').val();
            var simreturndate = $('#simreturndate').val();
            var laptophandoverdate = $('#laptophandoverdate').val();
            var laptopreturndate = $('#laptopreturndate').val();

            var idcardhandoverdate = $('#idcardhandoverdate').val();
            var certificatereceiveddate = $('#certificatereceiveddate').val();
            var idcardreturndate = $('#idcardreturndate').val();
            var joiningdate = $('#joiningdate').val();
            var sentoutdate = $('#sentoutdate').val();
            var pfaccountdate = $('#pfaccountdate').val();
            var pfamount = $('#PFamount').val();
            var incrementamount = $('#incrementamount').val();
            var incrementgivendate = $('#incrementgivendate').val();
            var modeofslsary = $('#modeofsalary').val();
            var grosssalary = $('#grosssalary').val();
            // Define the IDs of the form fields you want to check



            if (simhandover != null) {
                if (simhandover == "yes") {
                    if (simhandoverdate == null || simhandoverdate ===
                        "") {
                        return 1;
                    }
                } else if (simhandover == "no") {
                    if (simreturndate == null || simreturndate ===
                        "") {
                        return 1;
                    }
                }

            }

            if (laptophandover != null) {
                if (laptophandover == "yes") {
                    if (laptophandoverdate == null || laptophandoverdate === "") {
                        return 2;
                    }
                } else if (laptophandover == "no") {
                    if (laptopreturndate == null || laptopreturndate === "") {
                        return 2;
                    }
                }

            }

            if (idcardhandover != null) {

                if (idcardhandover == "yes") {
                    if (idcardhandoverdate == null || idcardhandoverdate === "") {
                        return 3;
                    }
                } else if (idcardhandover == "no") {
                    if (idcardreturndate == null || idcardreturndate === "") {
                        return 3;
                    }
                }

            }



            if (joiningdate == null || joiningdate === "" && liveorsentout == "live") {
                return 4;
            }

            if (liveorsentout != null) {
                if (liveorsentout == "sentout") {
                    if (sentoutdate == null || sentoutdate === "") {
                        return 5;
                    }
                }
            }

            if (certificatedataArray.length > 0) {
                if (certificatereceiveddate == null || certificatereceiveddate === "") {
                    return 6;
                }
            }

            if (pfamount !== null && pfamount !== "") {
                if (pfaccountdate == null || pfaccountdate === "") {
                    return 7;
                }
            }

            if (pfaccountdate !== null && pfaccountdate !== "") {
                if (pfamount == null || pfamount === "") {
                    return 7;
                }
            }

            if (incrementamount !== null && incrementamount !== "") {
                if (incrementgivendate == null || incrementgivendate === "") {
                    return 8;
                }
            }

            if (incrementgivendate !== null && incrementgivendate !== "") {
                if (incrementamount == null || incrementamount === "") {
                    return 8;
                }
            }


            const fieldIdsToCheck = ['firstname', 'lastname', 'dateofbirth', 'joiningdate'];

            // Loop through the form fields and check if they are empty or have default values
            for (const fieldId of fieldIdsToCheck) {
                const fieldValue = $('#' + fieldId).val();

                if (!fieldValue.trim()) {
                    return 9; // If any other field is empty, return false
                }
            }





            return 10; // All fields are filled or have valid selections
        }

        function loadform() {
            if (dataObject != null) {

                tableID = encodedData;

                var tablemappedurl = "<?= base_url('api/get-tblusersrecords'); ?>";

                $.ajax({
                    url: tablemappedurl,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        tableID: tableID
                    },
                    success: function (data) {
                        var response = data[0];
                        console.log(response);
                        if (data.length > 0) {
                            // For restoring the added certificates

                            if (response.isCertificategiven == "1") {
                                CreateCertificateDivs(response.id);
                            }
                            $('#mail').val(response.Email);
                            $('#dateofbirth').val(response.DOB);
                            $('#firstname').val(response.FirstName);
                            $('#lastname').val(response.LastName);
                            if (response.aadharnumber != "0" && response.aadharnumber !== "") {
                                $('#aadharno').val(response.aadharnumber);
                            }

                            var aadharpicture = $('.i-pic-upload.aadharpicturedatabase64');
                            var base64ImageDataAadhar = response.aadharpicture;
                            aadharpicture.css('background', 'url(' + base64ImageDataAadhar + ')');
                            $('#accountno').val(response.accountno);
                            $('#address').val(response.address);
                            if (response.alternateemergencyno != "0" && response.alternateemergencyno !==
                                "") {
                                $('#altemergencyno').val(response.alternateemergencyno);
                            }

                            if (response.alternatenumber != "0" && response.alternatenumber !== "") {
                                $('#alternatenumber').val(response.alternatenumber);
                            }
                            $('#bankaddress').val(response.bankaddress);
                            $('#certificatereceiveddate').val(response.certificatereceiveddate);
                            $('#cityname').val(response.cityname);
                            $('#emergencycontactperson').val(response.emergencycontactperson);

                            if (response.emergencyno != "0" && response.emergencyno !== "") {
                                $('#emergencyno').val(response.emergencyno);
                            }
                            if (response.employementtype != "0" && response.employementtype !== "") {
                                var employementtype = response.employementtype;
                                $('input[name="employeetype"]').filter('[value="' + employementtype + '"]')
                                    .prop('checked', true);
                            }

                            if (response.grosssalary != "0" && response.grosssalary !== "") {
                                $('#grosssalary').val(response.grosssalary);
                            }
                            if (response.idcardhandover != "0" && response.idcardhandover !== "") {
                                var idcardhandoverval = response.idcardhandover;
                                $('input[name="idcardhandover"]').filter('[value="' + idcardhandoverval +
                                        '"]')
                                    .prop('checked', true);
                            }
                            if (response.idcardhandoverdate != "0000-00-00" && response
                                .idcardhandoverdate !=
                                "") {
                                $('#idcardhandoverdate').val(response.idcardhandoverdate);
                            }

                            if (response.idcardreturndate != "0000-00-00" && response.idcardreturndate !=
                                "") {
                                $('#idcardreturndate').val(response.idcardreturndate);
                            }

                            $('#ifsccode').val(response.ifsccode);
                            if (response.incrementamount != "0" && response.incrementamount != "") {
                                $('#incrementamount').val(response.incrementamount);
                            }

                            if (response.incrementgivendate != "0000-00-00" && response
                                .incrementgivendate !=
                                "") {
                                $('#incrementgivendate').val(response.incrementgivendate);
                            }
                            if (response.joiningdate != "0000-00-00" && response.joiningdate !=
                                "") {
                                $('#joiningdate').val(response.joiningdate);
                            }
                            if (response.laptophandover != "0" && response.laptophandover !== "") {
                                var laptophandoverval = response.laptophandover;
                                $('input[name="laptophandover"]').filter('[value="' + laptophandoverval +
                                        '"]')
                                    .prop('checked', true);
                            }
                            if (response.laptophandoverdate != "0000-00-00" && response
                                .laptophandoverdate !=
                                "") {
                                $('#laptophandoverdate').val(response.laptophandoverdate);
                            }
                            $('#laptopmodelno').val(response.laptopmodelno);
                            if (response.laptopreturndate != "0000-00-00" && response.laptopreturndate !=
                                "") {
                                $('#laptopreturndate').val(response.laptopreturndate);
                            }
                            if (response.livesentout !== "") {
                                var liveorsentoutval = response.livesentout;
                                $('input[name="liveorsentout"]').filter('[value="' + liveorsentoutval +
                                        '"]')
                                    .prop('checked', true);
                            }
                            $('#contactno').val(response.mobileNumber);

                            $('#modeofsalary').val(response.modeofsalary);
                            $('#modeofsalary').trigger('change');
                            if (response.netsalary != "0" && response.netsalary !== "") {
                                $('#netsalary').val(response.netsalary);
                            }
                            $('#otherdeviceshandover').val(response.otherdeviceshandover);
                            $('#pancardnumber').val(response.pancardnumber);

                            var panpicture = $('.i-pic-upload.panpicturedatabase64');

                            var base64ImageDataPancard = response.pancardpicture;
                            panpicture.css('background', 'url(' + base64ImageDataPancard + ')');

                            $('#permanentaddress').val(response.permanenetaddress);
                            if (response.pfaccountdate != "0000-00-00" && response.pfaccountdate != "") {
                                $('#pfaccountdate').val(response.pfaccountdate);
                            }
                            if (response.pfamount != "0" && response.pfamount !== "") {
                                $('#PFamount').val(response.pfamount);
                            }
                            var photographpicture = $('.i-pic-upload.personalpicturebase64');
                            var base64ImageDataPicture = response.photographpicture;
                            photographpicture.css('background', 'url(' + base64ImageDataPicture + ')');

                            if (response.pincode != "0" && response.pincode !== "") {
                                $('#pincodename').val(response.pincode);
                            }
                            $('#presentaddress').val(response.presentaddress);
                            if (response.rdAmount != "0" && response.rdAmount !== "") {
                                $('#RDamount').val(response.rdAmount);
                            }
                            $('#residencename').val(response.residencename);

                            if (response.sentoutdate != "0000-00-00" && response.sentoutdate != "") {
                                $('#sentoutdate').val(response.sentoutdate);
                            }
                            $('#sentoutreason').val(response.sentoutreason);

                            if (response.simhandover !== "") {
                                var simhandoverval = response.simhandover;
                                $('input[name="simhandover"]').filter('[value="' + simhandoverval + '"]')
                                    .prop(
                                        'checked', true);
                            }
                            if (response.simhandoverdate != "0000-00-00" && response.simhandoverdate !=
                                "") {
                                $('#simhandoverdate').val(response.simhandoverdate);
                            }

                            if (response.simmobilenumber != "0" && response.simmobilenumber !== "") {
                                $('#simmobilenumber').val(response.simmobilenumber);
                            }
                            if (response.simreturndate != "0000-00-00" && response.simreturndate != "") {
                                $('#simreturndate').val(response.simreturndate);
                            }

                            if (response.totalsalaryafterincrement != "0" && response
                                .totalsalaryafterincrement !== "") {
                                $('#totalsalaryafterincrement').val(response.totalsalaryafterincrement);
                            }
                            if (response.whatsappnumber != "0" && response.whatsappnumber !== "") {
                                $('#whatsappnumber').val(response.whatsappnumber);
                            }
                            if (response.xeroxgiven !== "") {
                                var xeroxgivenval = response.xeroxgiven;
                                $('input[name="xeroxgiven"]').filter('[value="' + xeroxgivenval + '"]')
                                    .prop(
                                        'checked', true);
                            }
                            if (response.gender !== "") {
                                var genderval = response.gender;
                                $('input[name="gender"]').filter('[value="' + genderval + '"]')
                                    .prop(
                                        'checked', true);
                            }

                            $('#refernceid').val(response.refernceID);
                            $('#refernceid').trigger('change');

                        }
                    }
                });



            } else {
                tableID = 0;
            }

            console.log(tableID);

            if(tableID == 0)
            {
                reanother=0
            }else{
                reanother=null;
            }


        }

        loadform();

        $(document).ajaxStop(function () {

            console.log("All AJAX requests completed");

            window.history.replaceState({}, document.title, window.location
                .pathname);




        });
    </script>
</body>

</html>