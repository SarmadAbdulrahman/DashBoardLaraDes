@extends('layouts.SideBar')
@section('content')

<div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="index.html">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                    <li>
                        <a href="databoxes.html">
                            <i class="menu-icon glyphicon glyphicon-tasks"></i>
                            <span class="menu-text"> Data Boxes </span>
                        </a>
                    </li>
                    <!--Widgets-->
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-th"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>
                    <!--UI Elements-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> Elements </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">Basic Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">Glyph Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typicon.html">
                                            <i class="menu-icon typcn typcn-location-outline"></i>
                                            <span class="menu-text"> Typicons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="weather-icons.html">
                                            <i class="menu-icon wi wi-hot"></i>
                                            <span class="menu-text">Weather Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabs.html">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </li>
                            <li>
                                <a href="alerts.html">
                                    <span class="menu-text">Alerts & Tooltips</span>
                                </a>
                            </li>
                            <li>
                                <a href="modals.html">
                                    <span class="menu-text">Modals & Wells</span>
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="nestable-list.html">
                                    <span class="menu-text"> Nestable List</span>
                                </a>
                            </li>
                            <li>
                                <a href="treeview.html">
                                    <span class="menu-text">Treeview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> Tables </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="tables-simple.html">
                                    <span class="menu-text">Simple & Responsive</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-data.html">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-layouts.html">
                                    <span class="menu-text">Form Layouts</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-inputs.html">
                                    <span class="menu-text">Form Inputs</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-pickers.html">
                                    <span class="menu-text">Data Pickers</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-wizard.html">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-validation.html">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-editors.html">
                                    <span class="menu-text">Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-inputmask.html">
                                    <span class="menu-text">Input Mask</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> Charts </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="flot.html">
                                    <span class="menu-text">Flot Charts</span>
                                </a>
                            </li>

                            <li>
                                <a href="morris.html">
                                    <span class="menu-text"> Morris Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparkline.html">
                                    <span class="menu-text">Sparkline Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="easypiecharts.html">
                                    <span class="menu-text">Easy Pie Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="chartjs.html">
                                    <span class="menu-text"> ChartJS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Profile-->
                    <li>
                        <a href="profile.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> Mail </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="inbox.html">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </li>

                            <li>
                                <a href="message-view.html">
                                    <span class="menu-text">View Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="message-compose.html">
                                    <span class="menu-text">Compose Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Calendar-->
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                Calendar
                            </span>
                        </a>
                    </li>
                    <!--Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                            <span class="menu-text"> Pages </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="timeline.html">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <span class="menu-text">Pricing Tables</span>
                                </a>
                            </li>

                            <li>
                                <a href="invoice.html">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>

                            <li>
                                <a href="login.html">
                                    <span class="menu-text">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="lock.html">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <span class="menu-text"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--More Pages-->
                    <li class="active open">
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-link"></i>

                            <span class="menu-text">
                                More Pages
                            </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="error-404.html">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>

                            <li>
                                <a href="error-500.html">
                                    <span class="menu-text"> Error 500</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="blank.html">
                                    <span class="menu-text">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <span class="menu-text"> Grid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Multi Level Menu
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-camera"></i>
                                            <span class="menu-text">Level 3</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="menu-dropdown">
                                            <i class="menu-icon fa fa-asterisk"></i>

                                            <span class="menu-text">
                                                Level 4
                                            </span>
                                            <i class="menu-expand"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text">Some Item</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bug"></i>
                                                    <span class="menu-text">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Right to Left-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-align-right"></i>
                            <span class="menu-text"> Right to Left </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a>
                                    <span class="menu-text">RTL</span>
                                    <label class="pull-right margin-top-10">
                                        <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                        <span class="text"></span>
                                    </label>
                                </a>
                            </li>
                            <li>
                                <a href="index-rtl-ar.html">
                                    <span class="menu-text">Arabic Layout</span>
                                </a>
                            </li>

                            <li>
                                <a href="index-rtl-fa.html">
                                    <span class="menu-text">Persian Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="versions.html">
                            <i class="menu-icon glyphicon glyphicon-fire themesecondary"></i>
                            <span class="menu-text">
                                BeyondAdmin Versions
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Chat Bar -->
            <div id="chatbar" class="page-chatbar">
                <div class="chatbar-contacts">
                    <div class="contacts-search">
                        <input type="text" class="searchinput" placeholder="Search Contacts" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Your Contacts and Chat History</div>
                    </div>
                    <ul class="contacts-list">
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/nicolai-larson.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Adam Johnson</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">left 4 mins ago</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/john-smith.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">John Smith</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    1:57 am
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/osvaldus-valutis.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Osvaldus Valutis</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/javi-jimenez.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Javi Jimenez</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/stephanie-walter.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Stephanie Walter</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    yesterday
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/sergey-azovskiy.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Sergey Azovskiy</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">offline since oct 24</div>
                                </div>
                                <div class="last-chat-time">
                                    22 oct
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/lee-munroe.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Lee Munroe</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="assets/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chatbar-messages" style="display: none;">
                    <div class="messages-contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                a moment ago
                            </div>
                            <div class="back">
                                <i class="fa fa-arrow-circle-left"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="messages-list">
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                    </ul>
                    <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">More Pages</a>
                        </li>
                        <li class="active">Blank Page</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Blank Page
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="default.htm">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <!-- Your Content Goes Here -->
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>


@endsection
@extends('layouts.Footer')
