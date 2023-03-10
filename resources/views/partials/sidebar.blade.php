<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="#" class="header-logo">
            <img src="{{asset('template/images/logo.svg')}}" alt="logo">
            <h3 class="logo-title light-logo">Webkit</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                <li class="active">
                    <a href="#" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" fill="#5773FF" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M833.935 1063.327c28.913 170.315 64.038 348.198 83.464 384.79 27.557 51.84 92.047 71.944 144 44.387 51.84-27.558 71.717-92.273 44.16-144.113-19.426-36.593-146.937-165.46-271.624-285.064Zm-43.821-196.405c61.553 56.923 370.899 344.81 415.285 428.612 56.696 106.842 15.811 239.887-91.144 296.697-32.64 17.28-67.765 25.411-102.325 25.411-78.72 0-154.955-42.353-194.371-116.555-44.386-83.802-109.102-501.346-121.638-584.245-3.501-23.717 8.245-47.21 29.365-58.277 21.346-11.294 47.096-8.02 64.828 8.357ZM960.045 281.99c529.355 0 960 430.757 960 960 0 77.139-8.922 153.148-26.654 225.882l-10.39 43.144h-524.386v-112.942h434.258c9.487-50.71 14.231-103.115 14.231-156.084 0-467.125-380.047-847.06-847.059-847.06-467.125 0-847.059 379.935-847.059 847.06 0 52.97 4.744 105.374 14.118 156.084h487.454v112.942H36.977l-10.39-43.144C8.966 1395.137.044 1319.128.044 1241.99c0-529.243 430.645-960 960-960Zm542.547 390.686 79.85 79.85-112.716 112.715-79.85-79.85 112.716-112.715Zm-1085.184 0L530.123 785.39l-79.85 79.85L337.56 752.524l79.849-79.85Zm599.063-201.363v159.473H903.529V471.312h112.942Z" fill-rule="evenodd" />
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Companies</span>
                    </a>
                </li>

                <li class=" ">
                    <a href="#employees" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-4">Employees</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="employees" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Users</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Roles</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Employees</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Teams</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" ">
                    <a href="#projects" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        <span class="ml-4">Projects</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="projects" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Project category</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>projects</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" ">
                    <a href="#tasks" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span class="ml-4">Tasks</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="tasks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Task status</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Tasks</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="las la-minus"></i><span>Kanban</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#5773FF" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <path class="st0" d="M410.431,63.966C370.965,24.479,316.251-0.015,256,0c-60.237-0.015-114.958,24.479-154.416,63.966 c-39.487,39.458-63.98,94.18-63.966,154.416c-0.014,57.076,21.986,109.21,57.881,148.053 c31.947,34.609,75.062,58.846,123.588,67.118v58.59c0,7.724,4.469,14.738,11.468,18c7,3.262,15.257,2.164,21.159-2.802 l144.725-121.715l-0.036,0.022c27.36-22.878,47.239-48.146,59.914-76.195c12.711-28.041,18.087-58.437,18.065-91.071 C474.397,158.146,449.91,103.424,410.431,63.966z M420.151,293.078c-10.006,22.029-25.562,42.266-49.237,62.13l-0.029,0.029 l-112.091,94.267v-33.373c0-10.304-7.906-18.913-18.167-19.784c-45.741-3.898-86.515-24.991-115.953-56.85 C95.258,307.61,77.339,265.19,77.325,218.382c0.014-49.404,19.974-93.945,52.338-126.346C162.054,59.672,206.603,39.714,256,39.706 c49.404,0.008,93.945,19.966,126.345,52.33c32.371,32.4,52.316,76.942,52.33,126.346 C434.661,246.781,430.111,271.026,420.151,293.078z" />
                                <path class="st0" d="M151.771,191.906c-14.62,0-26.476,11.856-26.476,26.476c0,14.62,11.856,26.476,26.476,26.476 c14.613,0,26.469-11.856,26.469-26.476C178.24,203.762,166.385,191.906,151.771,191.906z" />
                                <path class="st0" d="M256,191.906c-14.613,0-26.469,11.856-26.469,26.476c0,14.62,11.856,26.476,26.469,26.476 c14.62,0,26.476-11.856,26.476-26.476C282.476,203.762,270.62,191.906,256,191.906z" />
                                <path class="st0" d="M360.236,191.906c-14.62,0-26.469,11.856-26.469,26.476c0,14.62,11.848,26.476,26.469,26.476 c14.62,0,26.476-11.856,26.476-26.476C386.712,203.762,374.856,191.906,360.236,191.906z" />
                            </g>
                        </svg>
                        <span class="ml-4">Comments</span>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <span class="ml-4">Notifications</span>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="svg-icon">
                        <svg class="svg-icon" id="p-dash016" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span class="ml-4">Audits</span>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="svg-icon">
                        <svg class="svg-icon" id="p-dash19" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                        <span class="ml-4">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="pt-5 pb-2"></div>
    </div>
</div>