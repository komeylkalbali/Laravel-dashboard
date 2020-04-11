<nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu  pcoded-trigger">
                                    <li class="{{ activeClass('dashboard/profile') }}">
                                        <a href="{{ route('profile') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="far fa-address-card"></i>
                                            </span>
                                            <span class="pcoded-mtext">پرفایل</span>
                                        </a>
                                    </li>
                                    <li class="{{ activeClass('dashboard') }}">
                                        <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-home"></i>
                                            </span>
                                            <span class="pcoded-mtext">داشبورد</span>
                                        </a>
                                    </li>
                                </li>

                                <li class="pcoded-hasmenu {{ activeClass(['dashboard/users,dashboard/users/create,dashboard/roles,dashboard/permissions'] , 'pcoded-trigger') }}">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">کاربر ها</span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class="{{ activeClass('dashboard/users') }}">
                                            <a href="{{ route('users.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده کاربران</span>
                                            </a>
                                        </li>
                                        <li class="{{ activeClass('dashboard/users/create') }}">
                                            <a href="{{ route('users.create') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ایجاد کاربر جدید</span>
                                            </a>
                                        </li>
                                        <li class="{{ activeClass('dashboard/roles') }}">
                                            <a href="{{ route('roles.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده وظایف</span>
                                            </a>
                                        </li>
                                        <li class="{{ activeClass('dashboard/permissions') }}">
                                            <a href="{{ route('permissions.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">سطح دسترسی ها</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>



                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">پست ها</span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده پست ها</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ایجاد پست</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">پیشنویس ها </span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fas fa-list-alt"></i></span>
                                        <span class="pcoded-mtext">دسته بندی ها </span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده دسته بندی ها</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ایجاد دسته یندی</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده تگ ها </span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ایجاد تگ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                        </ul>

                        </div>
                    </div>
                </nav>
