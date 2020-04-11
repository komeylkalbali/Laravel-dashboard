@extends('dashboard.layouts.app')

@section('content')



<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-users bg-c-blue float-right ml-4 mr-0">
                    </i>
                    <div class="d-inline">
                        <h5>
                            پروایل شما
                        </h5>
                        <span>
                            در این قسمت تمام اطلاعات شما نمایش داده میشود.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        {{ Breadcrumbs::render('profile') }}
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block row">

                                <div class="col-md-12" style="height:19rem">
                                        <div class="user-back" style="background-image: url('/assets/images/user-back.jpg') ">

                                        </div>
                                        <div class="prof-avatar">
                                            <img src="/assets/images/avatar-user.png" width="200px" height="200px" alt="placeholder+image" style="border-radius: 50%;box-shadow: 0px 0px 10px -3px black">
                                        </div>
                                    </div>


                                            <span class="text-center" style="position: relative;top: 1.70rem;margin: auto;width: 6rem;background-color: white;z-index: 9;border-radius: 86%">اطلاعات شما</span>
                                            <a href="{{ route('users.edit' ,['username']) }}" class="text-center f-16" data-toggle="tooltip" tabindex="0" title="ویرایش اطلاعات"style="position: relative;top: 1.70rem;width: 2rem;background-color: white;z-index: 9;border-radius: 86%">
                                                <i class="feather icon-edit"></i>
                                            </a>
                                    <div class="row m-0 mt-3 col-md-12 f-18 text-center text-dropbox b-t-info p-4">


                                            <div class="col-md-4 mt-3">
                                                <span class="mr-3">نام</span> :
                                                <span>کمیل</span>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <span class="mr-3">نام خانوادگی</span> :
                                                <span>کلبعلی</span>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <span class="mr-3">کد ملی</span> :
                                                <span>۲۱۰۹۹۳۴۳۲۱</span>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <span class="mr-3">شماره تماس</span> :
                                                <span>۰۹۲۲۳۳۳۲۲۴۴</span>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <span class="mr-3">تاریخ تولد</span> :
                                                <span>۱۳۴۵/۰۶/۱۲</span>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <span class="mr-3">آدرس</span> :
                                                <span>گلستان گرگان</span>
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
