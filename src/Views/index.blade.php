@extends('dashboard.layouts.app')



        @section('content')

            <div class="pcoded-content ml-0" >  {{-- main content --}}

                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="feather icon-home bg-c-blue float-right ml-4 mr-0"></i>
                                <div class="d-inline">
                                    <h5>داشبورد</h5>
                                    <span>در داشبورد شما گزارشاتی از فعالیت های سایت نمایش داده میشود. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb breadcrumb-title float-left">
                                    {{ Breadcrumbs::render('dashboard') }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-body">

                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="card product-progress-card">
                                            <div class="card-block">
                                                <div class="row pp-main">
                                                    <div class="col-xl-3 col-md-6">
                                                        <div class="pp-cont">
                                                            <div class="row align-items-center m-b-20">
                                                                <div class="col-auto">
                                                                    <i class="fas fa-clone f-24 text-mute"></i>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <h2 class="m-b-0 text-c-blue">2476</h2>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center m-b-15">
                                                                <div class="col-auto">
                                                                    <p class="m-b-0">پست های به اشتراک گداشته شده</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6">
                                                        <div class="pp-cont">
                                                            <div class="row align-items-center m-b-20">
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comment f-24 text-mute"></i>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <h2 class="m-b-0 text-c-red">843</h2>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center m-b-15">
                                                                <div class="col-auto">
                                                                    <p class="m-b-0">کامنت های در انتظار تایید</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6">
                                                        <div class="pp-cont">
                                                            <div class="row align-items-center m-b-20">
                                                                <div class="col-auto">
                                                                    <i class="fas fa-users f-24 text-mute"></i>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <h2 class="m-b-0 text-c-yellow">۲۱۰</h2>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center m-b-15">
                                                                <div class="col-auto">
                                                                    <p class="m-b-0">تعداد کاربران</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6">
                                                        <div class="pp-cont">
                                                            <div class="row align-items-center m-b-20">
                                                                <div class="col-auto">
                                                                    <i class="fas fa-eye f-24 text-mute"></i>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <h2 class="m-b-0 text-c-green">41M</h2>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center m-b-15">
                                                                <div class="col-auto">
                                                                    <p class="m-b-0">تعداد بازدید های امسال</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-xl-12">
                                        <div class="card sale-card">
                                            <div class="card-header">
                                                <h5>آنالیز بازدید های سایت</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-12">
                                        <div class="card latest-update-card">
                                            <div class="card-header">
                                                <h5> گزارشات</h5>
                                                <a href="#" class="float-left">مشاهده همه</a>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        <li><i class="feather icon-maximize full-card"></i></li>
                                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                        <li><i class="feather icon-trash close-card"></i></li>
                                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="scroll-widget">
                                                    <div class="latest-update-box ">
                                                        <div class="row p-t-20 p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <img src="{{ asset('./assets/images/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>پست جدیدی اضافه شد.</h6></a>
                                                                <p class="text-muted m-b-0">ابوالضل احمدی</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>یک پست آپدیت شد</h6></a>
                                                                <p class="text-muted m-b-0">مریم سارانی</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>یک کاربر جدید.</h6></a>
                                                                <p class="text-muted m-b-0">احمد حسینی</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <img src="{{ asset('./assets/images/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>پروفایل خود را ویرایش کرد</h6></a>
                                                                <p class="text-muted m-b-0">محسن رویانی</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>ارسال کامنت </h6></a>
                                                                <p class="text-muted m-b-0">همایون شجریان</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>ویرایش پست ارسال شده</h6></a>
                                                                <p class="text-muted m-b-0">علی محمدی</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6">
                                        <div class="card latest-update-card">
                                            <div class="card-header">
                                                <h5>آخرین فعالیت های شما</h5>
                                                <a href="#" class="float-left">مشاهده همه</a>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        <li><i class="feather icon-maximize full-card"></i></li>
                                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                                        <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                        <li><i class="feather icon-trash close-card"></i></li>
                                                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="scroll-widget">
                                                    <div class="latest-update-box lastbefore">
                                                        <div class="row p-t-20 p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="b-primary update-icon ring"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>ویرایش پروفایل خود</h6></a>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="b-primary update-icon ring"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>یروز رسانی یاداشت های خود</h6></a>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="b-success update-icon ring"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>ایجاد یک پست</h6></a>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="b-danger update-icon ring"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>تایید یک کامنت</h6></a>
                                                            </div>
                                                        </div>
                                                        <div class="row p-b-30">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="b-primary update-icon ring"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>ویرایش پست</h6></a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-auto text-right update-meta p-r-0">
                                                                <i class="b-success update-icon ring"></i>
                                                            </div>
                                                            <div class="col p-l-5">
                                                                <a href="index.html#!"><h6>آپدیت پسورد خود</h6></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endsection



