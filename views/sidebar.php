<div class="sidebar print:hidden">
    <div class="main-sidebar">
        <div
            class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
            <!-- Application Logo -->
            <div class="flex pt-4">
                <a href="index-2.html">
                    <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                        src="assets/images/app-logo.svg" alt="logo" />
                </a>
            </div>

            <!-- Main Sections Links -->
            <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
                <!-- Dashobards -->
                <a href="<?php echo site_url('Employeelistpage');?>"
                    class="removeadd hrmodule" x-tooltip.placement.right="'HR Module'">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-opacity="0.25" d="M21.0001 16.05V18.75C21.0001 20.1 20.1001 21 18.7501 21H6.6001C6.9691 21 7.3471 20.946 7.6981 20.829C7.7971 20.793 7.89609 20.757 7.99509 20.712C8.31009 20.586 8.61611 20.406 8.88611 20.172C8.96711 20.109 9.05711 20.028 9.13811 19.947L9.17409 19.911L15.2941 13.8H18.7501C20.1001 13.8 21.0001 14.7 21.0001 16.05Z" fill="currentColor"></path>
                        <path fill-opacity="0.5" d="M17.7324 11.361L15.2934 13.8L9.17334 19.9111C9.80333 19.2631 10.1993 18.372 10.1993 17.4V8.70601L12.6384 6.26701C13.5924 5.31301 14.8704 5.31301 15.8244 6.26701L17.7324 8.17501C18.6864 9.12901 18.6864 10.407 17.7324 11.361Z" fill="currentColor"></path>
                        <path d="M7.95 3H5.25C3.9 3 3 3.9 3 5.25V17.4C3 17.643 3.02699 17.886 3.07199 18.12C3.09899 18.237 3.12599 18.354 3.16199 18.471C3.20699 18.606 3.252 18.741 3.306 18.867C3.315 18.876 3.31501 18.885 3.31501 18.885C3.32401 18.885 3.32401 18.885 3.31501 18.894C3.44101 19.146 3.585 19.389 3.756 19.614C3.855 19.731 3.95401 19.839 4.05301 19.947C4.15201 20.055 4.26 20.145 4.377 20.235L4.38601 20.244C4.61101 20.415 4.854 20.559 5.106 20.685C5.115 20.676 5.11501 20.676 5.11501 20.685C5.25001 20.748 5.385 20.793 5.529 20.838C5.646 20.874 5.76301 20.901 5.88001 20.928C6.11401 20.973 6.357 21 6.6 21C6.969 21 7.347 20.946 7.698 20.829C7.797 20.793 7.89599 20.757 7.99499 20.712C8.30999 20.586 8.61601 20.406 8.88601 20.172C8.96701 20.109 9.05701 20.028 9.13801 19.947L9.17399 19.911C9.80399 19.263 10.2 18.372 10.2 17.4V5.25C10.2 3.9 9.3 3 7.95 3ZM6.6 18.75C5.853 18.75 5.25 18.147 5.25 17.4C5.25 16.653 5.853 16.05 6.6 16.05C7.347 16.05 7.95 16.653 7.95 17.4C7.95 18.147 7.347 18.75 6.6 18.75Z" fill="currentColor"></path>
                    </svg>
                </a>
                <a href="<?php echo site_url('Tempdashboard');?>"
                   class="removeadd admissionmodule" x-tooltip.placement.right="'Admission Module'">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-opacity="0.5" d="M14.2498 16C14.2498 17.5487 13.576 18.9487 12.4998 19.9025C11.5723 20.7425 10.3473 21.25 8.99976 21.25C6.10351 21.25 3.74976 18.8962 3.74976 16C3.74976 13.585 5.39476 11.5375 7.61726 10.9337C8.22101 12.4562 9.51601 13.6287 11.1173 14.0662C11.5548 14.1887 12.0185 14.25 12.4998 14.25C12.981 14.25 13.4448 14.1887 13.8823 14.0662C14.1185 14.6612 14.2498 15.3175 14.2498 16Z" fill="currentColor"></path>
                        <path d="M17.75 9.00012C17.75 9.68262 17.6187 10.3389 17.3825 10.9339C16.7787 12.4564 15.4837 13.6289 13.8825 14.0664C13.445 14.1889 12.9813 14.2501 12.5 14.2501C12.0187 14.2501 11.555 14.1889 11.1175 14.0664C9.51625 13.6289 8.22125 12.4564 7.6175 10.9339C7.38125 10.3389 7.25 9.68262 7.25 9.00012C7.25 6.10387 9.60375 3.75012 12.5 3.75012C15.3962 3.75012 17.75 6.10387 17.75 9.00012Z" fill="currentColor"></path>
                        <path fill-opacity="0.3" d="M21.25 16C21.25 18.8962 18.8962 21.25 16 21.25C14.6525 21.25 13.4275 20.7425 12.5 19.9025C13.5763 18.9487 14.25 17.5487 14.25 16C14.25 15.3175 14.1187 14.6612 13.8825 14.0662C15.4837 13.6287 16.7787 12.4562 17.3825 10.9337C19.605 11.5375 21.25 13.585 21.25 16Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>

            <!-- Bottom Links -->
            <div class="flex flex-col items-center space-y-3 py-3">

                <!-- Profile -->
                <div x-data="usePopper({placement:'right-end',offset:12})"
                    @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
                    <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar h-12 w-12">
                        <img class="rounded-full" src="assets/images/avatar/avatar-12.jpg" alt="avatar" />
                        <span
                            class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                    </button>

                    <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                        <div
                            class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
                            <div
                                class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800">
                                <div class="avatar h-14 w-14">
                                    <img class="rounded-full" src="assets/images/avatar/avatar-12.jpg" alt="avatar" />
                                </div>
                                <div>
                                    <a href="#"
                                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                        <?php echo $firstname; ?>
                                    </a>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        TeleCaller
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col pt-2 pb-5">

                                <div class="mt-3 px-4">
                                    <button
                                        class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <a href="<?php echo site_url('Logout');?>">Logout</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-panel" style="padding-left:56px;">
        <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
            <!-- Sidebar Panel Header -->
            <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
                <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">
                    Telecaller Leads

                </p>
                <button @click="$store.global.isSidebarExpanded = false"
                    class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Panel Body -->
            <div x-data="{expandedItem:null}" class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
                x-init="$el._x_simplebar = new SimpleBar($el);">


                <!-- First created leads page -->


                <!-- Leads 2.0 -->


                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-1')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Leads</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                        <li>
                                <a x-data="navLink" href="<?php echo site_url('Newlead');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>New lead</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Tempdashboard');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Leads Dashboard</span>
                                    </div>
                                </a>
                            </li>

                            <?php if ($accesslevel == 1) { ?>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Tempimport');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Import lead</span>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                            
                            <?php if ($accesslevel == 1) { ?>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Tempassign');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Assign Leads</span>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Templeadlist');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Leads List</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Projection list -->
                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-2')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Projection</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Projectionlist');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Projection list</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Projectiondashboard');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Projection dashboard</span>
                                    </div>
                                </a>
                            </li>


                        </ul>
                    </li>
                </ul>

                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-3')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Collections</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Collectionlist');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Collection list</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Collectiondashboard');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Collection dashboard</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-4')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Interview Registration</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Candidateregistrationfrom');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Candidate Registration</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Candidatelist');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Candidate List</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('CandidateDashboard');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Candidate Dashboard</span>
                                    </div>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>
                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-5')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Employement Registration</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Employeequeryform');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Employee Query Form</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Employeelistpage');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Employee List</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Employeedashboard');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Employee Dashboard</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('EmployeeBulkUpload');?>"
                                   :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                   class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Employee Bulk Upload</span>
                                    </div>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>
                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-6')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Attendance</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Attendance');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Attendance</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Attendancedashboard');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Attendance dashboard</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('AttendanceBulkUpload');?>"
                                   :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                   class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Attendance BulkUpload</span>
                                    </div>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>
                <ul class="commonul flex flex-1 flex-col px-4 font-inter">
                    <li x-data="accordionItem('menu-item-7')">
                        <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                            @click="expanded = !expanded"
                            class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                            href="javascript:void(0);">
                            <span>Payroll</span>
                            <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul x-collapse x-show="expanded">
                            <li>
                                <a x-data="navLink" href="<?php echo site_url('Salarydetails');?>"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                        </div>
                                        <span>Salary Details</span>
                                    </div>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </div>
</div>
