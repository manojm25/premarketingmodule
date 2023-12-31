<!DOCTYPE html>
<html lang="en">

<head>
<?php include('header.php');?>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
<?php include('scriptsbottom.php');?>
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="h-12 w-12" src="assets/images/app-logo.svg" alt="logo" />
                <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
                    TeleCaller Leads
                </p>
            </a>
        </div>
        <div class="hidden w-full place-items-center lg:grid">
            <div class="w-full max-w-lg p-6">
                <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                    src="assets/images/telecallingimg2.png" alt="image" />
                <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                    src="assets/images/illustrations/dashboard-meet-dark.svg" alt="image" />
            </div>
        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="assets/images/app-logo.svg" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Welcome To TeleCaller Leads
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            Please sign up to continue
                        </p>
                    </div>
                </div>

                <!-- <div class="mt-10 flex space-x-4">
                    <button
                        class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <img class="h-5.5 w-5.5" src="assets/images/logos/google.svg" alt="logo" />
                        <span>Google</span>
                    </button>
                    <button
                        class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <img class="h-5.5 w-5.5" src="assets/images/logos/github.svg" alt="logo" />
                        <span>Github</span>
                    </button>
                </div> -->

                <!-- Signup Form Starts from here -->

                <div class="my-7 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p class="text-tiny+ uppercase">sign up with email</p>

                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <?php echo form_open('Signup',['name'=>'userregistration','autocomplete'=>'off']);?>
                <?php if($this->session->flashdata('error')){?>
                    <script>
                            toastr["error"]("<?php  echo $this->session->flashdata('error');?>");
                        </script>
                 <?php } ?>
                <div class="mt-4 space-y-4">
                    <!-- First Name -->
                    <label class="relative flex">
                        

                    <?php echo form_input(['name'=>'firstname','class'=>'form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900','value'=>set_value('firstname'),'placeholder'=>'Enter First Name']);?>
                    <?php
                       if (form_error('firstname')) {
                       echo "<script>
                       toastr['error']('" . form_error('firstname') . "');
                      </script>";
                      }
                      ?>
                
                        
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                    </label>
                    <!-- Last Name -->
                    <label class="relative flex">

                    <?php echo form_input(['name'=>'lastname','class'=>'form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900','value'=>set_value('lastname'),'placeholder'=>'Enter Last Name']);?>
                   
                   <?php
                       if (form_error('lastname')) {
                       echo "<script>
                       toastr['error']('" . form_error('lastname') . "');
                      </script>";
                      }
                      ?>
                        
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                    </label>

                    <!-- Email input here -->
                    <label class="relative flex">
                        

                            <?php echo form_input(['name'=>'emailid','class'=>'form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900','value'=>set_value('emailid'),'placeholder'=>'Enter your Email id']);?>
                            <?php
                       if (form_error('emailid')) {
                       echo "<script>
                       toastr['error']('" . form_error('emailid') . "');
                      </script>";
                      }
                      ?>
                           
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                    </label>
                    <label class="relative flex">

                            <?php echo form_password(['name'=>'password','maxlength'=>'10','class'=>'copy-paste form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900','value'=>set_value('password'),'placeholder'=>'Password']);?>
                            <?php
                       if (form_error('password')) {
                       echo "<script>
                       toastr['error']('" . form_error('password') . "');
                      </script>";
                      }
                      ?>
                       
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                    </label>
                    <label class="relative flex">

                            <?php echo form_password(['name'=>'confirmpassword','maxlength'=>'10','class'=>'copy-paste form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900','value'=>set_value('confirmpassword'),'placeholder'=>'Confrim Password']);?>
                            <?php
                       if (form_error('confirmpassword')) {
                       echo "<script>
                       toastr['error']('" . form_error('confirmpassword') . "');
                      </script>";
                      }
                      ?>
                          
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                    </label>

                    <!-- Signup Form ends from here -->
                    <!-- <div class="mt-4 flex items-center space-x-2">
                        <input
                            class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                            type="checkbox" />
                        <p class="line-clamp-1">
                            I agree with
                            <a href="#" class="text-slate-400 hover:underline dark:text-navy-300">
                                privacy policy
                            </a>
                        </p>
                    </div> -->
                </div>
                <?php echo form_submit(['name'=>'insert','value'=>'Signup','class'=>'btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90']);?>
                
                <div class="mt-4 text-center text-xs+">
                    <p class="line-clamp-1">
                        <span>Already have an account? </span>
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="<?php echo site_url('Signin');?>">Sign In</a>
                    </p>
                </div>
            </div>
        </main>
    </div>

    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());

        $('.copy-paste').on('paste', function(e) {
            e.preventDefault();

        });

    </script>
</body>

</html>