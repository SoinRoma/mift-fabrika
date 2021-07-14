<?php

$this->title = 'About';


$this->registerJsFile("/app-assets/vendors/js/vendors.min.js",
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);

$this->registerJsFile('/app-assets/vendors/js/tables/datatable/datatables.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/vendors/js/charts/apexcharts.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('app-assets/vendors/js/pickers/daterange/moment.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/vendors/js/pickers/daterange/daterangepicker.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);


$this->registerJsFile('/app-assets/js/scripts/configs/vertical-menu-light.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/core/app-menu.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/core/app.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/scripts/components.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/scripts/footer.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);

$this->registerJsFile('/app-assets/js/scripts/pages/table-extended.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);





$this->registerCssFile("@web/app-assets/vendors/css/tables/datatable/datatables.min.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);

$this->registerCssFile("@web/app-assets/vendors/css/charts/apexcharts.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);

$this->registerCssFile("@web/app-assets/vendors/css/pickers/daterange/daterangepicker.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);


?>


?>








<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center py-0">
                                        <div class="media-left pr-0"><img class="mr-1" src="/app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                                        </div>
                                        <div class="media-right pl-0">
                                            <div class="row border-left text-center">
                                                <div class="col-12 px-50 py-75 border-bottom">
                                                    <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                                                </div>
                                                <div class="col-12 px-50 py-75">
                                                    <h6 class="media-heading mb-0">Close</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer">
                                    <div class="media d-flex align-items-center justify-content-between">
                                        <div class="media-left pr-0">
                                            <div class="media-body">
                                                <h6 class="media-heading">New Offers</h6>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="custom-control custom-switch">
                                                <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                <label class="custom-control-label" for="notificationSwtich"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center border-0">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/html/ltr/vertical-menu-template/index.html">
                    <div class="brand-logo"><img class="logo" src="/app-assets/images/logo/logo.png" /></div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" nav-item"><a href="/html/ltr/vertical-menu-template/index.html"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li><a href="dashboard-ecommerce.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                    <li><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class=" nav-item"><a href="app-email.html"><i class="menu-livicon" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a href="app-chat.html"><i class="menu-livicon" data-icon="comments"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a href="app-todo.html"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a href="app-calendar.html"><i class="menu-livicon" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class=" nav-item"><a href="app-kanban.html"><i class="menu-livicon" data-icon="grid"></i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                <ul class="menu-content">
                    <li><a href="app-invoice-list.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Invoice List</span></a>
                    </li>
                    <li><a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">Invoice</span></a>
                    </li>
                    <li><a href="app-invoice-edit.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Invoice Edit</span></a>
                    </li>
                    <li><a href="app-invoice-add.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">Invoice Add</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="app-file-manager.html"><i class="menu-livicon" data-icon="save"></i><span class="menu-title" data-i18n="File Manager">File Manager</span></a>
            </li>
            <li class=" navigation-header"><span>UI Elements</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="retweet"></i><span class="menu-title" data-i18n="Content">Content</span></a>
                <ul class="menu-content">
                    <li><a href="content-grid.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Grid">Grid</span></a>
                    </li>
                    <li><a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Typography">Typography</span></a>
                    </li>
                    <li><a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Text Utilities">Text Utilities</span></a>
                    </li>
                    <li><a href="content-syntax-highlighter.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Syntax Highlighter">Syntax Highlighter</span></a>
                    </li>
                    <li><a href="content-helper-classes.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Helper Classes">Helper Classes</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="colors.html"><i class="menu-livicon" data-icon="drop"></i><span class="menu-title" data-i18n="Colors">Colors</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="bulb"></i><span class="menu-title" data-i18n="Icons">Icons</span></a>
                <ul class="menu-content">
                    <li><a href="icons-livicons.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="LivIcons">LivIcons</span></a>
                    </li>
                    <li><a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="BoxIcons">BoxIcons</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="square"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                <ul class="menu-content">
                    <li><a href="card-basic.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                    </li>
                    <li><a href="card-actions.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="widgets.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Widgets">Widgets</span><span class="badge badge-light-primary badge-pill badge-round float-right">New</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="box-add"></i><span class="menu-title" data-i18n="Components">Components</span></a>
                <ul class="menu-content">
                    <li><a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Alerts">Alerts</span></a>
                    </li>
                    <li><a href="component-buttons-basic.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Buttons">Buttons</span></a>
                    </li>
                    <li><a href="component-breadcrumbs.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                    </li>
                    <li><a href="component-carousel.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Carousel">Carousel</span></a>
                    </li>
                    <li><a href="component-collapse.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Collapse">Collapse</span></a>
                    </li>
                    <li><a href="component-dropdowns.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
                    </li>
                    <li><a href="component-list-group.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List Group">List Group</span></a>
                    </li>
                    <li><a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Modals">Modals</span></a>
                    </li>
                    <li><a href="component-pagination.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Pagination">Pagination</span></a>
                    </li>
                    <li><a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Navbar">Navbar</span></a>
                    </li>
                    <li><a href="component-tabs-component.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Tabs Component">Tabs Component</span></a>
                    </li>
                    <li><a href="component-pills-component.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Pills Component">Pills Component</span></a>
                    </li>
                    <li><a href="component-tooltips.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Tooltips">Tooltips</span></a>
                    </li>
                    <li><a href="component-popovers.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Popovers">Popovers</span></a>
                    </li>
                    <li><a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Badges">Badges</span></a>
                    </li>
                    <li><a href="component-pill-badges.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Pill Badges">Pill Badges</span></a>
                    </li>
                    <li><a href="component-progress.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Progress">Progress</span></a>
                    </li>
                    <li><a href="component-media-objects.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Media Objects">Media Objects</span></a>
                    </li>
                    <li><a href="component-spinner.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Spinner">Spinner</span></a>
                    </li>
                    <li><a href="component-bs-toast.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Toasts">Toasts</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="briefcase"></i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
                <ul class="menu-content">
                    <li><a href="ex-component-avatar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Avatar</span></a>
                    </li>
                    <li><a href="ex-component-chips.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chips">Chips</span></a>
                    </li>
                    <li><a href="ex-component-divider.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Divider">Divider</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Forms &amp; Tables</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="check"></i><span class="menu-title" data-i18n="Form Elements">Form Elements</span></a>
                <ul class="menu-content">
                    <li><a href="form-inputs.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Input">Input</span></a>
                    </li>
                    <li><a href="form-input-groups.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Input Groups">Input Groups</span></a>
                    </li>
                    <li><a href="form-number-input.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Number Input">Number Input</span></a>
                    </li>
                    <li><a href="form-select.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Select">Select</span></a>
                    </li>
                    <li><a href="form-radio.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Radio">Radio</span></a>
                    </li>
                    <li><a href="form-checkbox.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Checkbox">Checkbox</span></a>
                    </li>
                    <li><a href="form-switch.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Switch">Switch</span></a>
                    </li>
                    <li><a href="form-textarea.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Textarea">Textarea</span></a>
                    </li>
                    <li><a href="form-quill-editor.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Quill Editor">Quill Editor</span></a>
                    </li>
                    <li><a href="form-file-uploader.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="File Uploader">File Uploader</span></a>
                    </li>
                    <li><a href="form-date-time-picker.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="form-layout.html"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="Form Layout">Form Layout</span></a>
            </li>
            <li class=" nav-item"><a href="form-wizard.html"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
            </li>
            <li class=" nav-item"><a href="form-validation.html"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Form Validation">Form Validation</span></a>
            </li>
            <li class=" nav-item"><a href="form-repeater.html"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Repeater">Form Repeater</span></a>
            </li>
            <li class=" nav-item"><a href="table.html"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18n="Table">Table</span></a>
            </li>
            <li class="active nav-item"><a href="table-extended.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Table extended">Table extended</span></a>
            </li>
            <li class=" nav-item"><a href="table-datatable.html"><i class="menu-livicon" data-icon="morph-map"></i><span class="menu-title" data-i18n="Datatable">Datatable</span></a>
            </li>
            <li class=" navigation-header"><span>Pages</span>
            </li>
            <li class=" nav-item"><a href="page-user-profile.html"><i class="menu-livicon" data-icon="user"></i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
            </li>
            <li class=" nav-item"><a href="page-faq.html"><i class="menu-livicon" data-icon="question-alt"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="page-knowledge-base.html"><i class="menu-livicon" data-icon="info-alt"></i><span class="menu-title" data-i18n="Knowledge Base">Knowledge Base</span></a>
            </li>
            <li class=" nav-item"><a href="page-search.html"><i class="menu-livicon" data-icon="search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
            </li>
            <li class=" nav-item"><a href="page-account-settings.html"><i class="menu-livicon" data-icon="wrench"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="User">User</span></a>
                <ul class="menu-content">
                    <li><a href="page-users-list.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List">List</span></a>
                    </li>
                    <li><a href="page-users-view.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="View">View</span></a>
                    </li>
                    <li><a href="page-users-edit.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlink"></i><span class="menu-title" data-i18n="Starter kit">Starter kit</span></a>
                <ul class="menu-content">
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-1-column.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="1 column">1 column</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-2-columns.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="2 columns">2 columns</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-fixed-navbar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Fixed navbar">Fixed navbar</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-floating-navbar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Floating navbar">Floating navbar</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-fixed.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Fixed layout">Fixed layout</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-static.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Static layout">Static layout</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                <ul class="menu-content">
                    <li><a href="auth-login.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                    </li>
                    <li><a href="auth-register.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                    </li>
                    <li><a href="auth-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                    </li>
                    <li><a href="auth-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Reset Password">Reset Password</span></a>
                    </li>
                    <li><a href="auth-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="share"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                <ul class="menu-content">
                    <li><a href="page-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                    </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                        <ul class="menu-content">
                            <li><a href="error-404.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="404">404</span></a>
                            </li>
                            <li><a href="error-500.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="500">500</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="page-not-authorized.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                    </li>
                    <li><a href="page-maintenance.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Charts &amp; Maps</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="pie-chart"></i><span class="menu-title" data-i18n="Charts">Charts</span><span class="badge badge-pill badge-round badge-light-info float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a href="chart-apex.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                    </li>
                    <li><a href="chart-chartjs.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                    </li>
                    <li><a href="chart-chartist.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chartist">Chartist</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="maps-google.html"><i class="menu-livicon" data-icon="globe"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
            </li>
            <li class=" navigation-header"><span>Extensions</span>
            </li>
            <li class=" nav-item"><a href="ext-component-sweet-alerts.html"><i class="menu-livicon" data-icon="warning-alt"></i><span class="menu-title" data-i18n="Sweet Alert">Sweet Alert</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-toastr.html"><i class="menu-livicon" data-icon="morph-map"></i><span class="menu-title" data-i18n="Toastr">Toastr</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-noui-slider.html"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="NoUi Slider">NoUi Slider</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="menu-livicon" data-icon="priority-high"></i><span class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-tour.html"><i class="menu-livicon" data-icon="paper-plane"></i><span class="menu-title" data-i18n="Tour">Tour</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-swiper.html"><i class="menu-livicon" data-icon="morph-orientation-tablet"></i><span class="menu-title" data-i18n="Swiper">Swiper</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-treeview.html"><i class="menu-livicon" data-icon="morph-sort-alt"></i><span class="menu-title" data-i18n="Treeview">Treeview</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-block-ui.html"><i class="menu-livicon" data-icon="expand"></i><span class="menu-title" data-i18n="Block-UI">Block-UI</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-media-player.html"><i class="menu-livicon" data-icon="music"></i><span class="menu-title" data-i18n="Media Player">Media Player</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-miscellaneous.html"><i class="menu-livicon" data-icon="loader-10"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
            </li>
            <li class=" nav-item"><a href="ext-component-i18n.html"><i class="menu-livicon" data-icon="globe"></i><span class="menu-title" data-i18n="i18n">i18n</span></a>
            </li>
            <li class=" navigation-header"><span>Others</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-menu-arrow-bottom"></i><span class="menu-title" data-i18n="Menu Levels">Menu Levels</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                    </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                        <ul class="menu-content">
                            <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                            </li>
                            <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="disabled nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-preview"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>
            <li class=" navigation-header"><span>Support</span>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation" target="_blank"><i class="menu-livicon" data-icon="morph-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i class="menu-livicon" data-icon="help"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Bootstrap Tables Extended</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Table extended
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- table Transactions start -->
            <section id="table-transactions">
                <div class="card">
                    <div class="card-header">
                        <!-- head -->
                        <h5 class="card-title">Transactions</h5>
                        <!-- Single Date Picker and button -->
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <fieldset class="has-icon-left">
                                        <input type="text" class="form-control single-daterange" />
                                        <div class="form-control-position">
                                            <i class="bx bx-calendar font-medium-1"></i>
                                        </div>
                                    </fieldset>
                                </li>
                                <li class="ml-2"><button class="btn btn-primary">Download</button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="table-extended-transactions" class="table mb-0">
                            <thead>
                            <tr>
                                <th>status</th>
                                <th>name</th>
                                <th>card</th>
                                <th>date</th>
                                <th>amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><i class="bx bxs-circle success font-small-1 mr-50"></i><span>Paid</span></td>
                                <td class="text-bold-600">Mike Brennan</td>
                                <td><img src="/app-assets/images/cards/amer-express.png" class="mr-50" alt="card" height="25" width="35"> **** 7617</td>
                                <td>10.09.17</td>
                                <td class="text-bold-600">$1,934</td>
                            </tr>
                            <tr>
                                <td><i class="bx bxs-circle danger font-small-1 mr-50"></i><span>Expired</span></td>
                                <td class="text-bold-600">Devin Payne</td>
                                <td><img src="/app-assets/images/cards/discover.png" class="mr-50" alt="card" height="25" width="35"> **** 7617</td>
                                <td>11.08.18</td>
                                <td class="text-bold-600">$232</td>
                            </tr>
                            <tr>
                                <td><i class="bx bxs-circle danger font-small-1 mr-50"></i><span>Expired</span></td>
                                <td class="text-bold-600">Michael Pena</td>
                                <td><img src="/app-assets/images/cards/mastercard.png" class="mr-50" alt="card" height="25" width="35"> **** 7617</td>
                                <td>11.08.18</td>
                                <td class="text-bold-600">$564</td>
                            </tr>
                            <tr>
                                <td><i class="bx bxs-circle success font-small-1 mr-50"></i><span>Paid</span></td>
                                <td class="text-bold-600">Devin Payne</td>
                                <td><img src="/app-assets/images/cards/visa.png" class="mr-50" alt="card" height="25" width="35">
                                    **** 7617</td>
                                <td>11.08.18</td>
                                <td class="text-bold-600">$232</td>
                            </tr>
                            <tr>
                                <td><i class="bx bxs-circle success font-small-1 mr-50"></i><span>Paid</span></td>
                                <td class="text-bold-600">Michael Pena</td>
                                <td><img src="/app-assets/images/cards/discover.png" class="mr-50" alt="card" height="25" width="35"> **** 7617</td>
                                <td>11.08.18</td>
                                <td class="text-bold-600">$564</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </section>
            <!-- table Transactions end -->
            <!-- table success start -->
            <section id="table-success">
                <div class="card">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="table-extended-success" class="table mb-0">
                            <thead>
                            <tr>
                                <th>campaign</th>
                                <th>account details</th>
                                <th>category</th>
                                <th>amount</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="/app-assets/images/cards/1.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="text-bold-600 bx bx-music mr-50"></i><span>Music</span>
                                </td>
                                <td class="text-bold-600">$1,934</td>
                                <td class="text-success">Success!</td>
                                <td>
                                    <div class="dropdown">
                                        <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="/app-assets/images/cards/2.png" alt="card">Nike Lab</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="text-bold-600 bx bx-tennis-ball mr-50"></i><span>Sports</span></td>
                                <td class="text-bold-600">$232</td>
                                <td class="text-danger">Failed!</td>
                                <td>
                                    <div class="dropup">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="/app-assets/images/cards/3.png" alt="card">Pepsi
                                    Drink
                                </td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="text-bold-600 bx bx-truck mr-50"></i><span>Transportation</span>
                                </td>
                                <td class="text-bold-600">$564</td>
                                <td class="text-success">Success!</td>
                                <td>
                                    <div class="dropup">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="/app-assets/images/cards/4.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="text-bold-600 bx bx-music mr-50"></i><span>Music</span>
                                </td>
                                <td class="text-bold-600">$232</td>
                                <td class="text-warning">Pending!</td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="/app-assets/images/cards/5.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="text-bold-600 bx bx-truck mr-50"></i><span>Transportation</span>
                                </td>
                                <td class="text-bold-600">$564</td>
                                <td class="text-success">Success!</td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600 pr-0"><img class="rounded-circle mr-1" src="/app-assets/images/cards/2.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="text-bold-600 bx bx-truck mr-50"></i><span>Transportation</span>
                                </td>
                                <td class="text-bold-600">$894</td>
                                <td class="text-warning">Pending!</td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </section>
            <!-- table success ends -->
            <!-- table checkbox start -->
            <section id="table-chechbox">
                <div class="card">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="table-extended-chechbox" class="table table-transparent">
                            <thead>
                            <tr>
                                <th></th>
                                <th class="pl-0">name</th>
                                <th>date</th>
                                <th>member</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/pdf.png" alt="file" class="mr-1" height="36" width="27">
                                    Music</td>
                                <td>11/04/2019</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/doc.png" alt="file" class="mr-1" height="36" width="27">Important
                                    Documents</td>
                                <td><span>10/04/2019</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-23.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/sketch.png" alt="file" class="mr-1" height="36" width="27">Folder
                                    Mobile
                                    Itteractions</td>
                                <td><span>10/09/2019</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/sketch.png" alt="file" class="mr-1" height="36" width="27">New_Version_Table_Design.sketch</td>
                                <td><span>10/04/2019</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-16.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-17.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/psd.png" alt="file" class="mr-1" height="36" width="27">Presention Kit
                                    Desktop.psd</td>
                                <td><span>10/03/2019</span>
                                </td>
                                <td></td>
                                <td>
                                    <div class="dropup">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/pdf.png" alt="file" class="mr-1" height="36" width="27">Landing UI
                                    Kit.pdf</td>
                                <td><span>10/04/2019</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/sketch.png" alt="file" class="mr-1" height="36" width="27">Modeling 3d
                                    Itteractions</td>
                                <td><span>05/04/2019</span>
                                </td>
                                <td></td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-bold-600 pl-0"><img src="/app-assets/images/icon/sketch.png" alt="file" class="mr-1" height="36" width="27">old_Version_Design.sketch</td>
                                <td><span>10/04/2019</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                            <img src="/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </section>
            <!-- table checkbox ends -->

            <!-- table transactions statistics starts -->
            <section id="table-transactions-statistics">
                <div class="row match-height">
                    <!-- table Transaction history start -->
                    <div id="table-transactions-history" class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Transaction History</h5>
                                <div class="heading-elements">
                                    <i class="bx bx-dots-horizontal-rounded font-medium-3 align-middle"></i>
                                </div>
                            </div>
                            <!-- table start -->
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"><img class="rounded-circle mr-1" src="/app-assets/images/cards/4.png" height="32" width="32" alt="card">
                                                <div class="flex-content"><span class="font-medium-2">Food</span><br><span class="text-muted font-small-2">Food
                                                                Category</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" d-flex justify-content-end align-items-end flex-column">
                                                        <span class="font-medium-2">
                                                            <i class="text-bold-600 bx bx-time font-medium-2 mr-50"></i>$1,000
                                                        </span>
                                                <span class="text-muted font-small-2">02:56</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"><img class="rounded-circle mr-1" src="/app-assets/images/cards/6.png" height="32" width="32" alt="card">
                                                <div class="flex-content"><span class="font-medium-2">iPhone 8</span><br><span class="text-muted font-small-2">Tech
                                                                Category</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" d-flex justify-content-end align-items-end flex-column">
                                                <span class="font-medium-2"><i class="text-bold-600 bx bx-time font-medium-2 mr-50"></i>$232</span>
                                                <span class="text-muted font-small-2">02:56</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"><img class="rounded-circle mr-1" src="/app-assets/images/cards/2.png" height="32" width="32" alt="card">
                                                <div class="flex-content"><span class="font-medium-2">Beats</span><br><span class="text-muted font-small-2">Music
                                                                Category</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" d-flex justify-content-end align-items-end flex-column">
                                                <span class="font-medium-2"><i class="text-bold-600 bx bx-time font-medium-2 mr-50"></i>$342</span>
                                                <span class="text-muted font-small-2">02:56</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"><img class="rounded-circle mr-1" src="/app-assets/images/cards/1.png" height="32" width="32" alt="card">
                                                <div class="flex-content"><span class="font-medium-2">Beats</span><br><span class="text-muted font-small-2">Music
                                                                Category</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" d-flex justify-content-end align-items-end flex-column">
                                                <span class="font-medium-2"><i class="text-bold-600 bx bx-time font-medium-2 mr-50"></i>$1,000</span>
                                                <span class="text-muted font-small-2">02:56</span></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table end -->
                        </div>
                    </div>
                    <!-- table Transaction history ends -->
                    <!-- table table statistics start -->
                    <div id="table-statistics" class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5 class="card-title">Statistics</h5>
                                <div class="heading-elements">
                                    <ul class="list-inline">
                                        <li class="mr-50"><i class="bx bxs-circle success font-small-1 mr-50"></i>Third </li>
                                        <li class="mr-50"><i class="bx bxs-circle info font-small-1 mr-50"></i>Second </li>
                                        <li class="mr-1"><i class="bx bxs-circle primary font-small-1 mr-50"></i>First </li>
                                        <li><i class="bx bx-dots-horizontal-rounded font-medium-3 align-middle"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- table start -->
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="w-25 pr-0">
                                            <div class="d-flex align-items-center text-bold-500"><img class="rounded-circle mr-1" src="/app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="32" width="32">
                                                <div class="flex-content"> Steve White</div>
                                            </div>
                                        </td>
                                        <td class="w-75 pr-0">
                                            <div class="progress progress-bar-primary progress-sm mb-0">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="80" aria-valuemax="100" style="width:50%;"></div>
                                            </div>
                                        </td>
                                        <td class="w-25">50%</td>
                                    </tr>
                                    <tr>
                                        <td class="w-25 pr-0">
                                            <div class="d-flex align-items-center text-bold-500"><img class="rounded-circle mr-1" src="/app-assets/images/portrait/small/avatar-s-2.jpg" alt="avatar" height="32" width="32">
                                                <div class="flex-content">Ray Magnet</div>
                                            </div>
                                        </td>
                                        <td class="w-75 pr-0">
                                            <div class="progress progress-bar-success progress-sm mb-0">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="80" aria-valuemax="100" style="width:10%;"></div>
                                            </div>
                                        </td>
                                        <td class="w-25">10%</td>
                                    </tr>
                                    <tr>
                                        <td class="w-25 pr-0">
                                            <div class="d-flex align-items-center text-bold-500"><img class="rounded-circle mr-1" src="/app-assets/images/portrait/small/avatar-s-12.jpg" alt="avatar" height="32" width="32">
                                                <div class="flex-content"> Steve White</div>
                                            </div>
                                        </td>
                                        <td class="w-75 pr-0">
                                            <div class="progress progress-bar-warning progress-sm mb-0">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="80" aria-valuemax="100" style="width:70%;"></div>
                                            </div>
                                        </td>
                                        <td class="w-25">70%</td>
                                    </tr>
                                    <tr>
                                        <td class="w-25 pr-0">
                                            <div class="d-flex align-items-center text-bold-500"><img class="rounded-circle mr-1" src="/app-assets/images/portrait/small/avatar-s-10.jpg" alt="avatar" height="32" width="32">
                                                <div class="flex-content"> Markus Blind</div>
                                            </div>
                                        </td>
                                        <td class="w-75 pr-0">
                                            <div class="progress progress-bar-info progress-sm mb-0">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80" aria-valuemax="100" style="width:35%;"></div>
                                            </div>
                                        </td>
                                        <td class="w-25">35%</td>
                                    </tr>
                                    <tr>
                                        <td class="w-25 pr-0">
                                            <div class="d-flex align-items-center text-bold-500"><img class="rounded-circle mr-1" src="/app-assets/images/portrait/small/avatar-s-10.jpg" alt="avatar" height="32" width="32">
                                                <div class="flex-content">jonny Blind</div>
                                            </div>
                                        </td>
                                        <td class="w-75 pr-0">
                                            <div class="progress progress-bar-danger progress-sm mb-0">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="80" aria-valuemax="100" style="width:55%;"></div>
                                            </div>
                                        </td>
                                        <td class="w-25">55%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table end -->
                        </div>
                    </div>
                    <!-- table table statistics ends -->
                </div>
            </section>
            <!-- table transactions statistics ends -->
            <!-- table customer statistics starts -->
            <section id="table-customer-statistics">
                <div class="row match-height">
                    <!-- table latest custoner start -->
                    <div id="table-latest-customer" class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5 class="card-title">Latest customer</h5>
                                <div class="heading-elements">
                                    <button type="button" class="btn btn-outline-secondary">More</button>
                                </div>
                            </div>
                            <!-- table start -->
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>INFO</th>
                                        <th class="text-right">PRICE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="32" width="32">
                                                <div class="ml-1"><span class="text-bold-500">Stuart Bradley </span><br><span class="text-muted">promember@gmail.com</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="text-bold-500 text-right">$58.00</div>
                                                <i class="bx bx-chevron-right font-large-1 cursor-pointer"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="32" width="32">
                                                <div class="ml-1">
                                                    <span class="text-bold-500">Miles Davis</span>
                                                    <br>
                                                    <span class="text-muted">music@yahoo.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="text-bold-500 text-right">$58.00</div>
                                                <i class="bx bx-chevron-right font-large-1 cursor-pointer"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table end -->
                        </div>
                    </div>
                    <!-- table table latest customer ends -->
                    <!-- table table statistics two start -->
                    <div id="table-statistics-two" class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5 class="card-title">Statistics</h5>
                                <div class="heading-elements">
                                    <i class="bx bx-dots-horizontal-rounded font-medium-3 align-middle"></i>
                                </div>
                            </div>
                            <!-- table start -->
                            <div class="table-responsive">
                                <table class="table table-borderless table-hover mb-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center text-bold-500"><i class="text-success bx bx-envelope align-middle font-medium-5 mr-50"></i>Inbox Messages</div>
                                        </td>
                                        <td class="text-right text-muted">142</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center text-bold-500"><i class="text-danger bx bx-group align-middle font-medium-5 mr-50"></i>New
                                                arrivals</div>
                                        </td>
                                        <td class="text-right text-muted">92</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center text-bold-500"><i class="text-info bx bx-calendar align-middle font-medium-5 mr-50"></i>Planned Meetings</div>
                                        </td>
                                        <td class="text-right text-muted">2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center text-bold-500"><i class="text-secondary bx bx-map align-middle font-medium-5 mr-50"></i>Places to Visit</div>
                                        </td>
                                        <td class="text-right text-muted">3</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table end -->
                        </div>
                    </div>
                    <!-- table table statistics two ends -->
                </div>
            </section>
            <!-- table customer statistics ends -->
            <!-- table Marketing campaigns start -->
            <section id="table-Marketing">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Marketing campaigns</h5>
                        <div class="heading-elements">
                            <ul class="list-inline">
                                <li><span class="badge badge-pill badge-light-success">42 ACTIVE</span></li>
                                <li><i class="bx bx-dots-vertical-rounded font-medium-3 align-middle"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <div class="d-inline-block">
                                        <!-- chart-1   -->
                                        <div class="d-flex mr-5 market-statistics-1">
                                            <!-- chart-statistics-1 -->
                                            <div id="table-donut-chart-1"></div>
                                            <!-- data -->
                                            <div class="statistics-data ml-50 my-auto">
                                                <div class="statistics">
                                                    <span class="font-medium-2 mr-50 text-bold-600">25,756</span><span class="text-success">(+16.2%)</span>
                                                </div>
                                                <div class="statistics-date"><i class="bx bx-radio-circle font-small-1 text-success mr-25"></i><small class="text-muted">May 12,
                                                        12:30 am</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-inline-block">
                                        <!-- chart-2 -->
                                        <div class="d-flex mb-1 market-statistics-2">
                                            <!-- chart statistics-2 -->
                                            <div id="table-donut-chart-2"></div>
                                            <!-- data-2 -->
                                            <div class="statistics-data ml-50 my-auto">
                                                <div class="statistics">
                                                    <span class="font-medium-2 mr-50 text-bold-600">5,352</span><span class="text-danger">(-4.9%)</span>
                                                </div>
                                                <div class="statistics-date"><i class="bx bx-radio-circle font-small-1 text-success mr-25"></i><small class="text-muted">May 12,
                                                        12:30 am</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 text-md-right">
                                    <button class="btn btn-primary glow">View Report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- table start -->
                        <table id="table-marketing-campaigns" class="table mb-0">
                            <thead>
                            <tr>
                                <th>campaign</th>
                                <th>account details</th>
                                <th>budget</th>
                                <th>changes</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="group">
                                <td colspan="6">Today</td>
                            </tr>
                            <tr>
                                <td class="text-bold-600"><img class="rounded-circle mr-1" src="/app-assets/images/cards/1.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="bx bx-trending-up text-success align-middle mr-50"></i><span>5.63%</span>
                                </td>
                                <td class="text-bold-600">$1,934</td>
                                <td class="text-success">Active</td>
                                <td>
                                    <div class="dropdown">
                                        <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600"><img class="rounded-circle mr-1" src="/app-assets/images/cards/2.png" alt="card">Nike Lab</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="bx bx-trending-up text-success align-middle mr-50"></i><span>9.32%</span></td>
                                <td class="text-bold-600">$232</td>
                                <td class="text-danger">Closed</td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group">
                                <td colspan="6">Yesterday</td>
                            </tr>
                            <tr>
                                <td class="text-bold-600"><img class="rounded-circle mr-1" src="/app-assets/images/cards/3.png" alt="card">Pepsi Drink
                                </td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>-3.32%</span>
                                </td>
                                <td class="text-bold-600">$564</td>
                                <td class="text-success">Active</td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600"><img class="rounded-circle mr-1" src="/app-assets/images/cards/4.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="bx bx-trending-up text-success align-middle mr-50"></i><span>4.65%</span>
                                </td>
                                <td class="text-bold-600">$232</td>
                                <td class="text-danger">Closed</td>
                                <td>
                                    <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600"><img class="rounded-circle mr-1" src="/app-assets/images/cards/5.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>-4.32%</span>
                                </td>
                                <td class="text-bold-600">$564</td>
                                <td class="text-success">Active</td>
                                <td>
                                    <div class="dropup">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold-600"><img class="rounded-circle mr-1" src="/app-assets/images/cards/2.png" alt="card">Headphones
                                    Beats</td>
                                <td>Account number 4154 81** **** 7617</td>
                                <td class="text-bold-600"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>-4.99%</span>
                                </td>
                                <td class="text-bold-600">$894</td>
                                <td class="text-danger">Closed</td>
                                <td>
                                    <div class="dropup">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- table ends -->
                    </div>
                </div>
            </section>
            <!-- table Marketing campaigns ends -->
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->
<div class="widget-chat-demo">
    <!-- widget chat demo footer button start -->
    <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
    <!-- widget chat demo footer button ends -->
    <!-- widget chat demo start -->
    <div class="widget-chat widget-chat-demo d-none">
        <div class="card mb-0">
            <div class="card-header border-bottom p-0">
                <div class="media m-75">
                    <a href="JavaScript:void(0);">
                        <div class="avatar mr-75">
                            <img src="/app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                            <span class="avatar-status-online"></span>
                        </div>
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                        <span class="text-muted font-small-3">Active</span>
                    </div>
                    <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                </div>
            </div>
            <div class="card-body widget-chat-container widget-chat-demo-scroll">
                <div class="chat-content">
                    <div class="badge badge-pill badge-light-secondary my-1">today</div>
                    <div class="chat">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>How can we help? 😄</p>
                                <span class="chat-time">7:45 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat chat-left">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Hey John, I am looking for the best admin template.</p>
                                <p>Could you please help me to find it out? 🤔</p>
                                <span class="chat-time">7:50 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                <span class="chat-time">8:01 AM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer border-top p-1">
                <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                    <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                    <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- widget chat demo ends -->

</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->

</body>
<!-- END: Body-->