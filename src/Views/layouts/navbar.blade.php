    <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo float-right">
                    <span class="m-auto f-20 f-w-500" style="color: white;">
                        Dashboard
                    </span>
                    <a class="mobile-menu" id="mobile-collapse" href="index.html#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left ">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-prepend search-close">
                                        <i class="feather icon-x input-group-text"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
                                        <i class="feather icon-search input-group-text"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="alert.html#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-badc28b2a3fc054aa8fbd542-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                        <li class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <i class=" feather icon-settings"></i>
                            </div>

                            <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" style="">
                                <li>
                                    <h6>Navication Color</h6>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="m-2" style="background-color: red;border-radius: 50%;height: 20px;width: 20px;"></div>
                                        <div class="m-2" style="background-color: yellow;border-radius: 50%;height: 20px;width: 20px;"></div>
                                        <div class="m-2" style="background-color: green;border-radius: 50%;height: 20px;width: 20px;"></div>
                                    </div>
                                </li>

                            </ul>

                        </li>
                    </ul>
                    <ul class="nav-right ">


                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <span>کمیل کلبعلی</span>
                                    <i class="feather icon-chevron-down"></i>
                                    <img src="{{ asset('./assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu text-right" style="right: -143% !important;" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="index.html#!">
                                            <i class="feather icon-settings"></i> تنظیمات
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile') }}">
                                            <i class="feather icon-user"></i> پروفایل
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="feather icon-mail"></i> پیام ها
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> قفل صفحه
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-sign-in-social.html">
                                            <i class="feather icon-log-out"></i> خروج
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu"  data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{ asset('./assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{ asset('./assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{ asset('./assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
