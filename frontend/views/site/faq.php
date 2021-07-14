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

$this->registerJsFile('/app-assets/vendors/js/extensions/swiper.min.js',
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






$this->registerJsFile('/app-assets/js/scripts/pages/faq.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);








$this->registerCssFile("@web/app-assets/vendors/css/extensions/swiper.min.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);

$this->registerCssFile("@web/app-assets/css/plugins/extensions/swiper.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);
$this->registerCssFile("@web/app-assets/css/pages/faq.css",
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
            <li class=" nav-item"><a href="table-extended.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Table extended">Table extended</span></a>
            </li>
            <li class=" nav-item"><a href="table-datatable.html"><i class="menu-livicon" data-icon="morph-map"></i><span class="menu-title" data-i18n="Datatable">Datatable</span></a>
            </li>
            <li class=" navigation-header"><span>Pages</span>
            </li>
            <li class=" nav-item"><a href="page-user-profile.html"><i class="menu-livicon" data-icon="user"></i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
            </li>
            <li class="active nav-item"><a href="page-faq.html"><i class="menu-livicon" data-icon="question-alt"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
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
                        <h5 class="content-header-title float-left pr-1 mb-0">FAQ</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">FAQ
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- faq search start -->
            <section class="faq-search">
                <div class="row">
                    <div class="col-12">
                        <div class="card faq-bg bg-transparent box-shadow-0 p-1 p-md-5">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <h1 class="faq-title text-center mb-3">Hello, how can we help?</h1>
                                    <form>
                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                            <input type="text" class="form-control round form-control-lg shadow pl-2" id="searchbar" placeholder="Ask a question...">
                                            <button class="btn btn-primary round position-absolute d-none d-sm-block" type="button">Search</button>
                                            <button class="btn btn-primary round position-absolute d-block d-sm-none" type="button"><i class="bx bx-search"></i></button>
                                        </fieldset>
                                    </form>
                                    <p class="card-text text-center mt-3 font-medium-1 text-muted">
                                        or choose a category to quickly find the help you need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq search ends -->

            <!-- faq start -->
            <section class="faq">
                <div class="row">
                    <div class="col-12">
                        <!-- swiper start -->
                        <div class="card bg-transparent shadow-none">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="swiper-centered-slides swiper-container p-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide rounded swiper-shadow" id="getting-text"> <i class="bx bx-flag mb-1 font-large-1"></i>
                                                <div class="cent-text1">Getting Started</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="pricing-text"> <i class="bx bx-dollar-circle mb-1 font-large-1"></i>
                                                <div class="cent-text1">Pricing & Plans</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="sales-text"> <i class="bx bx-shopping-bag mb-1 font-large-1"></i>
                                                <div class="cent-text1">Sales Question</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="usage-text"> <i class="bx bx-book-open mb-1 font-large-1"></i>
                                                <div class="cent-text1">Usage Guides</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="general-text"> <i class="bx bx-info-circle mb-1 font-large-1"></i>
                                                <div class="cent-text1">General Guide</div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="main-wrapper-content">
                                        <div class="wrapper-content" data-faq="getting-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Getting Started</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper1" class="collapse-icon accordion-icon-rotate">
                                                <div class="accordion" id="accordionWrapar2">
                                                    <div class="card collapse-header">
                                                        <div id="heading5" class="card-header" data-toggle="collapse" role="button" data-target="#accordion5" aria-expanded="false" aria-controls="accordion5">
                                                                <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Purchasing process?
                                                                </span>
                                                        </div>
                                                        <div id="accordion5" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading5" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading6" class="card-header" data-toggle="collapse" role="button" data-target="#accordion66" aria-expanded="false" aria-controls="accordion66">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure are your payment?
                                                                </span>
                                                        </div>
                                                        <div id="accordion66" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading6" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading17" class="card-header" data-toggle="collapse" role="button" data-target="#accordion71" aria-expanded="false" aria-controls="accordion71">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How to apply for a prepaid card?
                                                                </span>
                                                        </div>
                                                        <div id="accordion71" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading17" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.
                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading81" class="card-header" data-toggle="collapse" role="button" data-target="#accordion801" aria-expanded="false" aria-controls="accordion801">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure is my data in App?
                                                                </span>
                                                        </div>
                                                        <div id="accordion801" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading81" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.
                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading91" class="card-header" data-toggle="collapse" role="button" data-target="#accordion125" aria-expanded="false" aria-controls="accordion125">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How do I know latest version?
                                                                </span>
                                                        </div>
                                                        <div id="accordion125" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading91" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading103" class="card-header" data-toggle="collapse" role="button" data-target="#accordion142" aria-expanded="false" aria-controls="accordion142">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Download documentation
                                                                </span>
                                                        </div>
                                                        <div id="accordion142" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading103" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading113" class="card-header" data-toggle="collapse" role="button" data-target="#accordion91" aria-expanded="false" aria-controls="accordion91">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure my personal info?
                                                                </span>
                                                        </div>
                                                        <div id="accordion91" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading113" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="pricing-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Pricing & Planes</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper2" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar3">
                                                    <div class="card collapse-header">
                                                        <div id="heading27" class="card-header" data-toggle="collapse" role="button" data-target="#accordion16" aria-expanded="false" aria-controls="accordion16">
                                                                <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    What are your Purchasing process?
                                                                </span>
                                                        </div>
                                                        <div id="accordion16" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading27" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading82" class="card-header" data-toggle="collapse" role="button" data-target="#accordion26" aria-expanded="false" aria-controls="accordion26">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How rarely our information gets?
                                                                </span>
                                                        </div>
                                                        <div id="accordion26" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading82" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading37" class="card-header" data-toggle="collapse" role="button" data-target="#accordion72" aria-expanded="false" aria-controls="accordion72">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How to apply for a unknown card?
                                                                </span>
                                                        </div>
                                                        <div id="accordion72" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading37" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading83" class="card-header" data-toggle="collapse" role="button" data-target="#accordion802" aria-expanded="false" aria-controls="accordion802">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure is data and info in App?
                                                                </span>
                                                        </div>
                                                        <div id="accordion802" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading83" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading92" class="card-header" data-toggle="collapse" role="button" data-target="#accordion121" aria-expanded="false" aria-controls="accordion121">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How do I know about midest version?
                                                                </span>
                                                        </div>
                                                        <div id="accordion121" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading92" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading104" class="card-header" data-toggle="collapse" role="button" data-target="#accordion143" aria-expanded="false" aria-controls="accordion143">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Download offline documentation works?
                                                                </span>
                                                        </div>
                                                        <div id="accordion143" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading104" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading114" class="card-header" data-toggle="collapse" role="button" data-target="#accordion92" aria-expanded="false" aria-controls="accordion92">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Secure my personal data?
                                                                </span>
                                                        </div>
                                                        <div id="accordion92" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading114" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="sales-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Sales Question</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper3" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar4">
                                                    <div class="card collapse-header">
                                                        <div id="heading47" class="card-header" data-toggle="collapse" role="button" data-target="#accordion73" aria-expanded="false" aria-controls="accordion73">
                                                                <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Detailed sales process?
                                                                </span>
                                                        </div>
                                                        <div id="accordion73" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading47" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading93" class="card-header" data-toggle="collapse" role="button" data-target="#accordion36" aria-expanded="false" aria-controls="accordion36">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    What you sales ?
                                                                </span>
                                                        </div>
                                                        <div id="accordion36" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading93" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading57" class="card-header" data-toggle="collapse" role="button" data-target="#accordion74" aria-expanded="false" aria-controls="accordion74">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How to apply for a sales card?
                                                                </span>
                                                        </div>
                                                        <div id="accordion74" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading57" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading84" class="card-header" data-toggle="collapse" role="button" data-target="#accordion803" aria-expanded="false" aria-controls="accordion803">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure is my data in sales App?
                                                                </span>
                                                        </div>
                                                        <div id="accordion803" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading84" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading94" class="card-header" data-toggle="collapse" role="button" data-target="#accordion122" aria-expanded="false" aria-controls="accordion122">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How do I know sales?
                                                                </span>
                                                        </div>
                                                        <div id="accordion122" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading94" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading105" class="card-header" data-toggle="collapse" role="button" data-target="#accordion144" aria-expanded="false" aria-controls="accordion144">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Download offline sales doc
                                                                </span>
                                                        </div>
                                                        <div id="accordion144" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading105" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading115" class="card-header" data-toggle="collapse" role="button" data-target="#accordion93" aria-expanded="false" aria-controls="accordion93">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure my sales information?
                                                                </span>
                                                        </div>
                                                        <div id="accordion93" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading115" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="usage-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Usage Guides</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor? Lorem1 </p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper4" class="collapse-icon accordion-icon-rotate">
                                                <div class="accordion" id="accordionWrapar5">
                                                    <div class="card collapse-header">
                                                        <div id="heading85" class="card-header" data-toggle="collapse" role="button" data-target="#accordion804" aria-expanded="false" aria-controls="accordion804">
                                                                <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Purchasing user process?
                                                                </span>
                                                        </div>
                                                        <div id="accordion804" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading85" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading106" class="card-header" data-toggle="collapse" role="button" data-target="#accordion46" aria-expanded="false" aria-controls="accordion46">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure are and legal rights?
                                                                </span>
                                                        </div>
                                                        <div id="accordion46" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading106" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading67" class="card-header" data-toggle="collapse" role="button" data-target="#accordion75" aria-expanded="false" aria-controls="accordion75">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How to write for a postpaid card?
                                                                </span>
                                                        </div>
                                                        <div id="accordion75" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading67" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading86" class="card-header" data-toggle="collapse" role="button" data-target="#accordion805" aria-expanded="false" aria-controls="accordion805">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How refresh is my info in App?
                                                                </span>
                                                        </div>
                                                        <div id="accordion805" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading86" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading95" class="card-header" data-toggle="collapse" role="button" data-target="#accordion123" aria-expanded="false" aria-controls="accordion123">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How do write about about latest ?
                                                                </span>
                                                        </div>
                                                        <div id="accordion123" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading95" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading101" class="card-header" data-toggle="collapse" role="button" data-target="#accordion145" aria-expanded="false" aria-controls="accordion145">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Download offline sales doc
                                                                </span>
                                                        </div>
                                                        <div id="accordion145" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading101" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading116" class="card-header" data-toggle="collapse" role="button" data-target="#accordion94" aria-expanded="false" aria-controls="accordion94">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure is your personal information?
                                                                </span>
                                                        </div>
                                                        <div id="accordion94" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading116" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="general-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">General Guide</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper5" class="collapse-icon accordion-icon-rotate">
                                                <div class="accordion" id="accordionWrapar6">
                                                    <div class="card collapse-header">
                                                        <div id="heading96" class="card-header" data-toggle="collapse" role="button" data-target="#accordion95" aria-expanded="false" aria-controls="accordion95">
                                                                <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    I wanna write process?
                                                                </span>
                                                        </div>
                                                        <div id="accordion95" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading96" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading111" class="card-header" data-toggle="collapse" role="button" data-target="#accordion56" aria-expanded="false" aria-controls="accordion56">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How untoched your gateway information?
                                                                </span>
                                                        </div>
                                                        <div id="accordion56" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading111" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading77" class="card-header" data-toggle="collapse" role="button" data-target="#accordion76" aria-expanded="false" aria-controls="accordion76">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How to apply for a details?
                                                                </span>
                                                        </div>
                                                        <div id="accordion76" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading77" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading87" class="card-header" data-toggle="collapse" role="button" data-target="#accordion800" aria-expanded="false" aria-controls="accordion800">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure is opensource ?
                                                                </span>
                                                        </div>
                                                        <div id="accordion800" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading87" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading97" class="card-header" data-toggle="collapse" role="button" data-target="#accordion124" aria-expanded="false" aria-controls="accordion124">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How do I know about oldest version?
                                                                </span>
                                                        </div>
                                                        <div id="accordion124" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading97" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading102" class="card-header" data-toggle="collapse" role="button" data-target="#accordion141" aria-expanded="false" aria-controls="accordion141">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    Download offline sales doc
                                                                </span>
                                                        </div>
                                                        <div id="accordion141" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading102" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading112" class="card-header" data-toggle="collapse" role="button" data-target="#accordion96" aria-expanded="false" aria-controls="accordion96">
                                                                <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                    How secure personal data ?
                                                                </span>
                                                        </div>
                                                        <div id="accordion96" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading112" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper ends -->
                    </div>
                </div>
            </section>
            <!-- faq ends -->

            <!-- fab bottom start -->
            <section class="faq-bottom">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <h2 class="faq-subtitle">You still have a question?</h2>
                        <p class="p-2 text-muted font-medium-1">If you cannot find a question in our FAQ, you can always contact us. We
                            will answer to you shortly!</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-5">
                    <div class="col-sm-12 col-md-4 text-center border rounded p-2 mr-md-2 m-1">
                        <i class="bx bx-phone-call primary font-large-1 text-muted p-50"></i>
                        <h5>+ (810) 2548 2568</h5>
                        <p class="text-muted font-medium-1"> we are always happy to help!</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center border color-gray-faq rounded p-2 m-1">
                        <i class="bx bx-mail-send primary font-large-1 p-50"></i>
                        <h5><a href="mailto:hello@help.com">hello@help.com</a></h5>
                        <p class="text-muted font-medium-1">Best way to get answer faster!</p>
                    </div>
                </div>
            </section>
            <!-- fab bottom ends -->
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