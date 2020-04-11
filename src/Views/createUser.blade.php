@extends('dashboard.layouts.app')

@section('content')
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-user-plus bg-c-blue float-right ml-4 mr-0">
                    </i>
                    <div class="d-inline">
                        <h5>
                            ایجاد کاربر
                        </h5>
                        <span>
                            شما در این قسمت میتوانید کاربر جدیدی به کاربر هایتان بی افزایید.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        {{ Breadcrumbs::render('createUser') }}
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
                                <div class="card-header">
                                    <h5>
                                        مشخصات کاربر جدید
                                    </h5>
                                </div>
                                <div class="card-block" style="padding: 2rem 6rem 0rem 6rem">
                                    <div class="m-b-20">
                                        <form action="{{ route('users.store') }}" id="form-vue" method="POST">
                                            @csrf
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    آواتار شما
                                                </label>
                                                <div class="col-sm-10 col-lg-12">
                                                    <div class="input-group justify-content-center mb-5">
                                                        <div :style="{ backgroundImage: `url(${previewImg})` }" class="user-avatar">
                                                            <input @change="showImg()" class="user-file" data-toggle="tooltip" ref="file" tabindex="0" title="آواتار خود را انتخاب کنید" type="file">
                                                            </input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mt-3">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    نام
                                                </label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text">
                                                                FirstName
                                                            </label>
                                                        </span>
                                                        <input class="form-control" placeholder="نام شما" type="text">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    نام خانوادگی
                                                </label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text">
                                                                LastName
                                                            </label>
                                                        </span>
                                                        <input class="form-control" placeholder="نام خانوادگی شما" type="text">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    نام پدر
                                                </label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text">
                                                                FatherName
                                                            </label>
                                                        </span>
                                                        <input class="form-control" placeholder="نام پدر" type="text">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    شناسه ملی
                                                </label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text">
                                                                National ID
                                                            </label>
                                                        </span>
                                                        <input class="form-control" placeholder="شناسه ملی" type="text">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    تاریخ تولد
                                                </label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text">
                                                                Date of birth
                                                            </label>
                                                        </span>
                                                        <input class="form-control" placeholder="تاریخ تولد" type="text">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    محل سکونت
                                                </label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text">
                                                                Location
                                                            </label>
                                                        </span>
                                                        <input class="form-control" placeholder="محل سکونت" type="text">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row">
                                                <label class="col-sm-4 col-lg-2 col-form-label">
                                                    درباره خودتان ینویسید
                                                </label>
                                                <div class="col-sm-12 col-xl-10">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon2" style="margin-right: -55px">
                                                            <label class="input-group-text" style="align-self: stretch;">
                                                                درباره شما
                                                            </label>
                                                        </span>
                                                        <textarea class="form-control max-textarea" maxlength="255" rows="4">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left">
                                                <button class="btn btn-grd-disabled btn-round" type="submit">
                                                    ثبت اطلاعات جدید
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    @endsection
</div>
@section('script')
<script>
    var app = new Vue({
      el: '#form-vue',
      data: {
        previewImg: '/assets/images/avatar-user.png',
        file : []
    },

    methods:{
        showImg() {
            this.file = this.$refs.file.files[0];
            this.previewImg = URL.createObjectURL(this.file);

        }
    }
})
</script>
@endsection
