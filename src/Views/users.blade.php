@extends('dashboard.layouts.app')

@section('content')

<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-users bg-c-blue float-right ml-4 mr-0"></i>
                    <div class="d-inline">
                        <h5>کاربران</h5>
                        <span>در این قسمت تمامی کاربران سایت نمایش داده میشود</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        {{ Breadcrumbs::render('users') }}
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
                                        کاربران
                                    </h5>
                                   <a href="{{ route('users.create') }}" class="btn btn-grd-success float-left p-15">ایجاد کاربر</a>
                                </div>
                                <div class="card-block">

                                    <div class="">

                                        <input type="search" id="tableSearch" name="user_search" placeholder="کلمه ای برای سرچ تایپ کنید" class="form-control input-group-text text-right  ">
                                    </div>


                                    <div class="dt-responsive table-responsive">
                                        <table class="table table-striped table-bordered nowrap dataTable"  style="width: 100% important">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        نام
                                                    </th>
                                                    <th>
                                                        نام خانوادگی
                                                    </th>
                                                    <th>
                                                        تاریخ تولد
                                                    </th>
                                                    <th>
                                                        کدملی
                                                    </th>
                                                    <th>
                                                        تاریخ تولد
                                                    </th>
                                                    <th>
                                                        شماره تماس
                                                    </th>
                                                    <th>
                                                        مسئولیت در سایت
                                                    </th>
                                                    <th>
                                                        اعمال
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>komeyl</td>
                                                    <td>kalbali</td>
                                                    <td>home</td>
                                                    <td>nnnn</td>
                                                    <td>2132</td>
                                                    <td>3242331</td>
                                                    <td>مدیر</td>
                                                    <td>
                                                        <a href="" class="btn btn-info btn-mini">ویرایش</a>
                                                        <a href="" class="btn btn-danger btn-mini">حذف</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>komeyl</td>
                                                    <td>kalbali</td>
                                                    <td>home</td>
                                                    <td>nnnn</td>
                                                    <td>2132</td>
                                                    <td>3242331</td>
                                                    <td>نویسنده</td>
                                                    <td>
                                                        <a href="" class="btn btn-info btn-mini">ویرایش</a>
                                                        <a href="" class="btn btn-danger btn-mini">حذف</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>komeyl</td>
                                                    <td>kalbali</td>
                                                    <td>home</td>
                                                    <td>nnnn</td>
                                                    <td>2132</td>
                                                    <td>3242331</td>
                                                    <td>کاربر</td>
                                                    <td>
                                                        <a href="" class="btn btn-info btn-mini">ویرایش</a>
                                                        <a href="" class="btn btn-danger btn-mini">حذف</a>
                                                    </td>
                                                </tr>
                                            </tbody>



                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector">
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {

} );
</script>
@endsection
