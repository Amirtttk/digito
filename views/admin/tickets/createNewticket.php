<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::زیر هدر-->
    <!--begin::زیر هدر-->
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::اطلاعات-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="card-label">ایجاد تیکت جدید </h5>
                <!--end::Page Title-->
            </div>
            <!--end::اطلاعات-->
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                            <h3 class="card-label">ایجاد تیکت جدید </h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_7_1">
                                        <span class="nav-icon"><i class="fa fa-info"></i></span>
                                        اطلاعات تیکت                                              </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_7_1" role="tabpanel"
                                 aria-labelledby="kt_tab_pane_7_1">
                                <div id="getErrors"></div>
                                <form id="" class="needs-validation">
                                    <div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>عنوان تیکت: </label>
                                                <input name="title" type="text" class="form-control"
                                                       data-v-message="عنوان تیکت نمیتواند خالی بماند" required
                                                       placeholder="عنوان تیکت را وارد کنید" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-lg-12">
                                                <label>پیغام :</label>
                                                <input name="text" type="text" class="form-control"
                                                       data-v-message="پیغام نمیتواند خالی بماند" required
                                                       placeholder="پیغام را وارد کنید" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success mr-2"
                                                        onclick="AddNewTicket(<?= GET('userId') ?>)">ایجاد</button>
                                                <a href="/admin/tickets/management"
                                                   class="btn btn-secondary">لغو</a>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button type="reset" class="btn btn-danger">خالی کردن فرم</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<?php
$pageTitle = "ایجاد تیکت";
$pageScript = "
    <script src='../../../assets/admin/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6'></script>
    <script src='../../../assets/admin/js/pages/widgets.js?v=7.0.6'></script>
    <script src='../../../assets/admin/plugins/custom/datatables/datatables.bundle.js?v=7.0.6'></script>
    <script src='../../../assets/admin/js/pages/crud/datatables/basic/paginations.js?v=7.0.6'></script>
    <script src='../../assets/admin/js/sweetalert.js'></script>
    <script src='../../assets/admin/js/main.js'></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>
";
$pageLink = "
    <link href='../../assets/admin/css/style.bundle.rtl.css' rel='stylesheet' type='text/css' />
    <link href='../../assets/admin/css/themes/layout/header/base/light.rtl.css' rel='stylesheet'
        type='text/css' />
    <link href='../../assets/admin/css/themes/layout/aside/dark.rtl.css' rel='stylesheet' type='text/css' />
";
?>
