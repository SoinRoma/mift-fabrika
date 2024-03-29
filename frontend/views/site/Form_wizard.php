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

$this->registerJsFile('/app-assets/vendors/js/extensions/jquery.steps.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/vendors/js/forms/validation/jquery.validate.min.js',
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






$this->registerJsFile('/app-assets/js/scripts/forms/wizard-steps.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);








$this->registerCssFile("@web/app-assets/css/plugins/forms/wizard.css",
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
            <li class="active nav-item"><a href="form-wizard.html"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
            </li>
            <li class=" nav-item"><a href="form-validation.html"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Form Validation">Form Validation</span></a>
            </li>
            <li class=" nav-item"><a href="form-repeater.html"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Repeater">Form Repeater</span></a>
            </li>
            <li class=" nav-item"><a href="table.html"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18n="Table">Table</span></a>
            </li>
            <li class=" nav-item"><a href="table-extended.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Table extended">Table extended</span></a>
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Form Wizard</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item active">Form Wizard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Form wizard with icon tabs section start -->
            <section id="icon-tabs">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form wizard with icons tabs</h4>
                            </div>
                            <div class="card-content mt-2">
                                <div class="card-body">
                                    <form action="#" class="wizard-horizontal">
                                        <!-- Step 1 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:morph-doc.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                        </h6>
                                        <!-- Step 1 end-->
                                        <!-- body content step 1 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Enter Your Personal Details</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="firstName13">First Name </label>
                                                        <input type="text" class="form-control" id="firstName13" placeholder="Enter Your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="lastName12">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName12" placeholder="Enter Your Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress1">Email</label>
                                                        <input type="email" class="form-control" id="emailAddress1" placeholder="Enter Your Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="number" class="form-control" placeholder="Enter Your Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>age</label>
                                                        <input type="number" class="form-control" placeholder="Enter Your Age">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="d-block">Gender</label>
                                                        <div class="custom-control-inline">
                                                            <div class="radio mr-1">
                                                                <input type="radio" name="bsradio" id="radio1" checked="">
                                                                <label for="radio1">Male</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="bsradio" id="radio2" checked="">
                                                                <label for="radio2">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content step 1 end-->
                                        <!-- Step 2 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:truck.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                        </h6>
                                        <!-- Step 2 end-->
                                        <!-- body content of step 2 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Enter Your Location</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control" placeholder="Enter House no./ Flate no.">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control" placeholder="Enter Society name/ Area name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>LandMark</label>
                                                        <input type="text" class="form-control" placeholder="Enter A Landmark">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>TOWN/CITY</label>
                                                        <input type="text" class="form-control" placeholder="Enter Town/City">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>PINCODE</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Pincode">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>STATE</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your State">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select name="country" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox__input" id="checkbox1" checked="">
                                                            <label for="checkbox1">Permanent Delivery address</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of step 2 end-->
                                        <!-- Step 3 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:home.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                        </h6>
                                        <!-- Step 3 end-->
                                        <!-- body content of Step 3 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Enter Your Payment Methods</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <img src="/app-assets/images/pages/bank.png" alt="img-placeholder" height="40">
                                                                <span>Card 12XX XXXX XXXX 0000</span>
                                                            </div>
                                                            <div class="card-holder-name">
                                                                John Doe
                                                            </div>
                                                            <div class="card-expiration-date">
                                                                11/2020
                                                            </div>
                                                            <div>
                                                                <label>Enter CVV</label>
                                                                <input type="password" class="form-control" placeholder="Enter Your CVV no.">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <ul class="other-payment-options list-unstyled">
                                                            <li class="pb-1">
                                                                <div class="radio">
                                                                    <input type="radio" name="pyradio" id="radio6" checked="">
                                                                    <label for="radio6">Credit / Debit / ATM Card</label>
                                                                </div>
                                                            </li>
                                                            <li class="pb-1">
                                                                <div class="radio">
                                                                    <input type="radio" name="pyradio" id="radio7" checked="">
                                                                    <label for="radio7">Net Banking</label>
                                                                </div>
                                                            </li>
                                                            <li class="pb-1">
                                                                <div class="radio">
                                                                    <input type="radio" name="pyradio" id="radio8" checked="">
                                                                    <label for="radio8"> EMI (Easy Installment)</label>
                                                                </div>
                                                            </li>
                                                            <li class="pb-1">
                                                                <div class="radio">
                                                                    <input type="radio" name="pyradio" id="radio9" checked="">
                                                                    <label for="radio9"> Cash On Delivery</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-12 d-flex">
                                                    <div class="paypal cursor-pointer d-flex align-items-center">
                                                        <div class="radio">
                                                            <input type="radio" name="onlportal" id="paypal" checked="">
                                                            <label for="paypal"></label>
                                                        </div>
                                                        <img src="/app-assets/images/pages/PayPal_logo.png" alt="PayPal Logo">
                                                    </div>
                                                    <div class="googlepay cursor-pointer pl-1 d-flex align-items-center">
                                                        <div class="radio">
                                                            <input type="radio" name="onlportal" id="googlepay" checked="">
                                                            <label for="googlepay"></label>
                                                        </div>
                                                        <img src="/app-assets/images/pages/google-pay.png" height="30" alt="google Logo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <hr>
                                                    <div class="form-group">
                                                        <label>Enter Your Promocode</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Promocode">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of Step 3 end-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Form wizard with number tabs section end -->

            <!-- Form wizard with icon tabs section start -->
            <section id="info-tabs-">
                <div class="row">
                    <div class="col-12">
                        <div class="card icon-tab">
                            <div class="card-header">
                                <h4 class="card-title">Form wizard with icon and info tabs</h4>
                            </div>
                            <div class="card-content mt-2">
                                <div class="card-body">
                                    <form action="#" class="wizard-horizontal">
                                        <!-- Step 1 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:user.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                            <span>Basic Details</span>
                                        </h6>
                                        <!-- Step 1 end-->
                                        <!-- body content of step 1 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Basic Details</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>FIRST Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your First name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Last name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" placeholder="Enter Your Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>password</label>
                                                        <input type="password" class="form-control" placeholder="Enter Your Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Contact Details</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your House no./ Flate no.">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>address line 2</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Society name / Area name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Landmark</label>
                                                        <input type="text" class="form-control" placeholder="Enter a LandMark">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>city</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Ciy">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your State">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-md-">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Country">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Current Age">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="number" class="form-control" placeholder="+12345675">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="d-block">Gender</label>
                                                        <div class="custom-control-inline">
                                                            <div class="radio mr-1">
                                                                <input type="radio" name="bsradio1" id="radio5" checked="">
                                                                <label for="radio5">Male</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="bsradio1" id="radio888" checked="">
                                                                <label for="radio888">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Id Proof</h6>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Passport</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>National ID </label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Birth Certificate</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile03">
                                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Driving Licence</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of step 1 end-->
                                        <!-- Step 2-->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:briefcase.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                            <span>Term and conditions</span>
                                        </h6>
                                        <!-- Step 2 end-->
                                        <!-- body content of step 2 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Terms and conditions</h6>
                                                </div>
                                                <div class="col-12">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum culpa repellendus laborum maxime
                                                        dignissimos dolor excepturi iusto nemo aspernatur? Qui modi inventore reprehenderit, nostrum
                                                        quaerat libero maiores consequuntur illo veritatis.
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, culpa obcaecati. Qui accusantium
                                                        sit error, dolorem alias incidunt est. Laborum, atque ipsum debitis obcaecati dolor illo magni
                                                        provident harum vitae?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit omnis, doloribus autem,
                                                        non quam quibusdam harum accusamus voluptatem in perspiciatis consequuntur sint nam debitis
                                                        sapiente ex, optio totam delectus quis.
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis placeat in quisquam dolorum
                                                        numquam, rerum expedita corporis eveniet quas nostrum, quia veritatis neque quos sint sit
                                                        exercitationem obcaecati perferendis magnam!
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequatur laudantium
                                                        voluptatibus impedit unde. Error eius consequuntur tenetur unde molestias esse doloribus animi,
                                                        temporibus placeat eaque laborum, maiores, ex quo!
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, suscipit placeat accusamus
                                                        voluptas odio est ea accusantium dignissimos et officia, cupiditate aperiam atque facilis?
                                                        Adipisci earum fuga illo odit reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Asperiores nihil necessitatibus sequi placeat tenetur, perspiciatis, excepturi dolor, consectetur
                                                        assumenda amet accusantium velit fuga numquam tempore repellendus voluptatem vitae. Voluptatem,
                                                        hic.
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde perspiciatis vero, reprehenderit
                                                        beatae necessitatibus dignissimos animi distinctio illo porro fuga maxime nemo voluptate
                                                        aspernatur tempore? Incidunt consectetur dignissimos blanditiis. Corporis. Lorem ipsum dolor sit
                                                        amet consectetur, adipisicing elit. At, dolore omnis! Architecto dolorem non, earum pariatur,
                                                        molestias voluptatem saepe voluptatibus praesentium expedita cum quae et assumenda. Voluptas
                                                        debitis praesentium quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque veniam
                                                        ipsa saepe sint necessitatibus incidunt nihil totam delectus, dolor omnis itaque libero sed
                                                        molestiae assumenda non repellat, rerum, eius quia. lorem
                                                    </p>
                                                    <strong>Read all term and conditions carefully.</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <input type="radio" name="bsradio" id="agree">
                                                            <label for="agree" class="text-success">I read all term and conditions and i Agree.</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="bsradio" id="disagree">
                                                            <label for="disagree" class="text-danger">I am not Agree with it.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of step 2 end-->
                                        <!-- Step 3-->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:users.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                            <span>Nominee</span>
                                        </h6>
                                        <!-- Step 3 end-->
                                        <!-- body content of step 3 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="py-50">Enter Nominate Details</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ad, consectetur animi magni
                                                            magnam nihil error, quaerat pariatur dolores unde quod sequi modi temporibus libero eos
                                                            consequuntur ab maxime alias!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label>Nomination Name</label>
                                                        <input type="text" class="form-control" placeholder="Nomination Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label>Nominee's Relation</label>
                                                        <input type="text" class="form-control" placeholder="Relation">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-4">
                                                    <div class="form-group">
                                                        <label>Nominee Age</label>
                                                        <input type="number" class="form-control" placeholder="Age">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="form-group">
                                                        <label>Nominee Documents</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile05">
                                                            <label class="custom-file-label" for="inputGroupFile05">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="py-50">Terms and conditions for nominee</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci odit sunt facilis,
                                                        exercitationem placeat in maiores, ullam doloribus aperiam sint culpa, quo ducimus tempore
                                                        perferendis ipsum laborum officia ut dignissimos!
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In beatae quibusdam enim neque animi
                                                        fugiat harum tempora ipsum excepturi, cupiditate illum hic dignissimos, quaerat dolore! Minus rem
                                                        sed accusamus corrupti?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In beatae quibusdam enim neque animi
                                                        fugiat harum tempora ipsum excepturi, cupiditate illum hic dignissimos, quaerat dolore! Minus rem
                                                        sed accusamus corrupti?
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci odit sunt
                                                        facilis,
                                                        exercitationem placeat in maiores, ullam doloribus aperiam sint culpa, quo ducimus tempore
                                                        perferendis ipsum laborum officia ut dignissimos!
                                                    </p>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of step 3 end-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Form wizard with icon tabs section end -->

            <!-- Form wizard with step validation section start -->
            <section id="validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Validation Example</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="#" class="wizard-validation">
                                        <!-- Step 1 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span>Baisc Information</span>
                                        </h6>
                                        <!-- Step 1 -->
                                        <!-- body content of step 1 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName3">First Name </label>
                                                        <input type="text" class="form-control required" id="firstName3" name="firstName" placeholder="Enter Your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName3">Last Name</label>
                                                        <input type="text" class="form-control required" id="lastName3" name="lastName" placeholder="Enter Your Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">Email</label>
                                                        <input type="email" class="form-control required" id="emailAddress5" name="emailAddress" placeholder="Enter Your Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location">City</label>
                                                        <select class="custom-select form-control" id="location" name="location">
                                                            <option value="">New York</option>
                                                            <option value="Amsterdam">Chicago</option>
                                                            <option value="Berlin">San Francisco</option>
                                                            <option value="Frankfurt">Boston</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of step 1 end -->
                                        <!-- Step 2 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span>Job Details</span>
                                        </h6>
                                        <!-- step 2 -->
                                        <!-- body content of step 2 end -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="proposalTitle3">
                                                            Proposal Title
                                                        </label>
                                                        <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle" placeholder="Enter Your Proposel Title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jobTitle5">
                                                            Job Title
                                                        </label>
                                                        <input type="text" class="form-control required" id="jobTitle5" name="jobTitle5" placeholder="Enter Your Job Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="shortDescription3">Short Description</label>
                                                        <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control" placeholder="Please Enter short Description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- body content of step 2 end -->
                                        <!-- Step 3 -->
                                        <h6>
                                            <i class="step-icon"></i>
                                            <span>Event Details</span>
                                        </h6>
                                        <!-- step 3 end -->
                                        <!-- step 3 content -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventName3">
                                                            Event Name
                                                        </label>
                                                        <input type="text" class="form-control required" id="eventName3" name="eventName" placeholder="Enter Event Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventStatus3">Event Statuss</label>
                                                        <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                            <option value="Planning">Planning</option>
                                                            <option value="In Progress">In Progress</option>
                                                            <option value="Finished">Finished</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventLocation3">Event Location </label>
                                                        <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                                                            <option value="Planning">New York</option>
                                                            <option value="In Progress">Chicago</option>
                                                            <option value="Finished">San Francisco</option>
                                                            <option value="Finished">Boston</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mr-2">Requirements :</label>
                                                        <div class="c-inputs-stacked">
                                                            <div class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="checkbox__input" id="checkbox6">
                                                                        <label for="checkbox6">Staffing</label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <fieldset>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="checkbox__input" id="checkbox5">
                                                                        <label for="checkbox5">Catering</label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- step 3 content end-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Form wizard with step validation section end -->

            <!-- vertical Wizard start-->
            <section id="vertical-wizard">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical Wizard</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="#" class="wizard-vertical">
                                <!-- step 1 -->
                                <h3>
                                        <span class="fonticon-wrap mr-1">
                                            <i class="livicon-evo" data-options="name:gear.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                        </span>
                                    <span class="icon-title">
                                            <span class="d-block">Users Details</span>
                                            <small class="text-muted">Setup your account details here.</small>
                                        </span>
                                </h3>
                                <!-- step 1 end-->
                                <!-- step 1 content -->
                                <fieldset class="pt-0">
                                    <h6 class="pb-50">Enter your Account Details</h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="firstName12">First Name </label>
                                                <input type="text" class="form-control" id="firstName12" placeholder="Enter Your First Name">
                                                <small class="text-muted form-text">Please enter your first name.</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="lastName1">Last Name</label>
                                                <input type="text" class="form-control" id="lastName1" placeholder="Enter Your Last Name">
                                                <small class="text-muted form-text">Please enter your last name.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="emailAddress12">Email</label>
                                                <input type="email" class="form-control" id="emailAddress12" placeholder="Enter Your Email">
                                                <small class="text-muted form-text">Please enter your email address.</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" placeholder="+91586386368">
                                                <small class="text-muted form-text">Please enter your phone number.</small>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- step 1 content end-->
                                <!-- step 2 -->
                                <h3>
                                        <span class="fonticon-wrap mr-1">
                                            <i class="livicon-evo" data-options="name:location.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                        </span>
                                    <span class="icon-title">
                                            <span class="d-block">setup location</span>
                                            <small class="text-muted">Choose your location here.</small>
                                        </span>
                                </h3>
                                <!-- step 2 end-->
                                <!-- step 2 content -->
                                <fieldset class="pt-0">
                                    <h6 class="py-50">Setup Your Current Location</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="proposalTitle1">Address Line 1</label>
                                                <input type="text" class="form-control" id="proposalTitle1" placeholder="Enter Your House no./ Flate No.">
                                            </div>
                                            <div class="form-group">
                                                <label>Postcode</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Postcode">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="jobtitle">Address Line 2</label>
                                                <input type="text" class="form-control" id="jobtitle" placeholder="Enter Your Area Name/ Landmark">
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="custom-select form-control" id="eventLocation12" name="location">
                                                    <option value="new-york">New York</option>
                                                    <option value="chicago">Chicago</option>
                                                    <option value="san-francisco">San Francisco</option>
                                                    <option value="boston">Boston</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" placeholder="VIC">
                                                <small class="form-text text-muted">Please enter your Postcode.</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select name="country" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                                <small class="form-text text-muted">Select your Country</small>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- step 2 content end-->
                                <!-- section 3 -->
                                <h3>
                                        <span class="fonticon-wrap mr-1">
                                            <i class="livicon-evo" data-options="name:headphones.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                        </span>
                                    <span class="icon-title">
                                            <span class="d-block">Support channel</span>
                                            <small class="text-muted">add your support agents.</small>
                                        </span>
                                </h3>
                                <!-- section 3 end-->
                                <!-- step 3 content -->
                                <fieldset class="pt-0">
                                    <h6 class="py-50">Select your Services</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Delivery Type</label>
                                                <select name="delivery" class="form-control">
                                                    <option value="">Select a Service Type Option</option>
                                                    <option value="overnight" selected="">Overnight Delivery (within 48 hours)</option>
                                                    <option value="express">Express Delivery (within 5 working days)</option>
                                                    <option value="basic">Basic Delivery (within 5 - 10 working days)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="eventLocation12">Preferred Delivery Window</label>
                                                <select name="preferreddelivery" class="form-control">
                                                    <option value="">Select a Preferred Delivery Option</option>
                                                    <option value="morning" selected="">Morning Delivery (8:00AM - 11:00AM)</option>
                                                    <option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
                                                    <option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Packing Type</label>
                                                <select name="packaging" class="form-control">
                                                    <option value="">Select a Packaging Type Option</option>
                                                    <option value="regular" selected="">Regular Packaging</option>
                                                    <option value="oversized">Oversized Packaging</option>
                                                    <option value="fragile">Fragile Packaging</option>
                                                    <option value="frozen">Frozen Packaging</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="mr-2">Requirements :</label>
                                                <div class="c-inputs-stacked">
                                                    <div class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="checkbox pb-1">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox114">
                                                                <label for="checkbox114">Ordanary</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <fieldset>
                                                            <div class="checkbox pb-1">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox12">
                                                                <label for="checkbox12">Express</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- step 3 content end-->
                                <!-- step 4 -->
                                <h3>
                                        <span class="fonticon-wrap mr-1">
                                            <i class="livicon-evo" data-options="name:truck.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                        </span>
                                    <span class="icon-title">
                                            <span class="d-block">delivered</span>
                                            <small class="text-muted">Delivered to you.</small>
                                        </span>
                                </h3>
                                <!-- step 4 end-->
                                <!-- step 4 content -->
                                <fieldset class="pt-0">
                                    <h6 class="py-50">Enter your Payment Details</h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="eventName13">Name on Card</label>
                                                <input type="text" class="form-control" id="eventName13" placeholder="Enter Name On Card">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Card Number</label>
                                                <input type="text" class="form-control" placeholder="Enter Card No.">
                                                <small class="form-text text-muted">Credit / Debit / ATM Card/Master Card</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Card Expiry Month</label>
                                                <input type="number" class="form-control" name="ccmonth" placeholder="Card Expiry Month" value="01">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Card Expiry Year</label>
                                                <input type="number" class="form-control" name="ccyear" placeholder="Card Expire Year" value="21">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Card CVV Number</label>
                                                <input type="password" class="form-control" name="ccyear" placeholder="Card CVV Number" value="212">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- step 4 content end-->
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- vertical Wizard end-->

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