@extends('dashboard.layouts.app')

@section('content')

<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-users bg-c-blue float-right ml-4 mr-0"></i>
                    <div class="d-inline">
                        <h5>وظایف</h5>
                        <span>در این قسمت تمامی وظایفی را که میتوان به کاربران تخصیص داد نشان داده میشود</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        {{ Breadcrumbs::render('roles') }}
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="pcoded-inner-content" id="rolesVue">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        وظایف
                                    </h5>
                                   <button type="button" class="btn btn-grd-success float-left p-15" data-toggle="modal" data-target="#insert_role">  ایجاد وظیفه </button>
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
                                                        برچسب
                                                    </th>
                                                    <th>
                                                        اجازه ها
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
                                                    <td style="display: contents">

                                                        <span class="btn btn-mini btn-secondary" style="margin: .1rem !important">ویرایش</span>
                                                        <span class="btn btn-mini btn-secondary" style="margin: .1rem !important">ویرایش</span>
                                                        <span class="btn btn-mini btn-secondary" style="margin: .1rem !important">حذف</span>
                                                        <span class="btn btn-mini btn-secondary" style="margin: .1rem !important">حذف</span>
                                                        <span class="btn btn-mini btn-secondary" style="margin: .1rem !important">حذف</span>
                                                        <span class="btn btn-mini btn-secondary" style="margin: .1rem !important">ایجاد</span>


                                                    </td>

                                                    <td>
                                                        <a href="" class="btn btn-info btn-mini">ویرایش</a>
                                                        <a href="" class="btn btn-danger btn-mini">حذف</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>komeyl</td>
                                                    <td>kalbali</td>
                                                    <td>home</td>

                                                    <td>
                                                        <a href="" class="btn btn-info btn-mini">ویرایش</a>
                                                        <a href="" class="btn btn-danger btn-mini">حذف</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>komeyl</td>
                                                    <td>kalbali</td>
                                                    <td>home</td>

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


{{-- Modal insert role --}}

<div class="modal fade" id="insert_role" tabindex="-1" role="dialog" aria-labelledby="insert_roleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insert_roleLabel">ایجاد وظیفه جدید</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem -1rem auto !important;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
        <form method="POST" action="{{ route('roles.store') }}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">نام:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">برچسب:</label>
            <input type="text" class="form-control" id="‌label"></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">دسترسی ها:</label>
            <select class="permissions-multiple form-control" name="permissions[]" multiple="multiple" style="width: 100%">
              <option value="AL">Alabama</option>
              <option value="AL">Alabama</option>
              <option value="AL">Alabama</option>
              <option value="AL">Alabama</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>


          <div class="form-group">
            <button type="submit" class="btn btn-grd-success">ذخیره</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ant-design-vue/2.0.0-beta.1/antd.min.js" integrity="sha256-Wp51jjHZMY8FKuLORZYPT6bkzBu53GruB287Xz3ubiY=" crossorigin="anonymous"></script>
<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});


 $('.permissions-multiple').select2({
    placeholder: 'انتخاب کنید',
    allowClear: true,
    width: 'resolve',
    dir:'rtl',

 });

</script>
@endsection
