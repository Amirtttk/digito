<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::زیر هدر-->
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::اطلاعات-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    مدیریت دسته بندی
                </h5>
                <!--end::Page Title-->
            </div>
            <!--end::اطلاعات-->
            <!--end::اطلاعات-->
        </div>
    </div>
    <!--end::زیر هدر-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                                <h3 class="card-label">
                                    مدیریت دسته بندی </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="/admin/blog/create"
                                   class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <i class="la la-plus"></i>
                                    </span>
                                    افزودن دسته بندی جدید
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_tab_pane_7_3" role="tabpanel">
                                    <table class="table table-bordered table-hover table-checkable" style="margin-top: 13px !important">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>تصویر</th>
                                            <th>عنوان</th>
                                            <th>والد</th>
                                            <th>سطح</th>
                                            <th>وضعیت</th>
                                            <th>فعال/غیرفعال</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $keyNumber = 1;
                                        $categories = getAllCategories();
                                        if ($categories) {
                                            foreach ($categories as $category) {
                                                $parent = $category['parent_id'] ? getCategoryById($category['parent_id']) : null;
                                                $thumbnail = $category['image'] ? str_replace(PATH_UPLOADS_DIR, 'public/', $category['image']) : null;
                                                ?>
                                                <tr id="deleteCategory<?= $category['id'] ?>">
                                                    <td><?= $keyNumber++ ?></td>
                                                    <td>
                                                        <?php if ($category['level'] == 0 && $thumbnail): ?>
                                                            <img width="100" height="70" src="../../<?= $thumbnail ?>">
                                                        <?php else: ?>
                                                            —
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?= $category['title'] ?></td>
                                                    <td class="text-primary"><?= $parent['title'] ?? '---' ?></td>
                                                    <td><?= $category['level'] ?></td>
                                                    <td id="statusShow<?= $category['id'] ?>">
                                                        <?php if ($category['status'] == 1): ?>
                                                            <span class="label label-lg font-weight-bold label-light-success label-inline">فعال</span>
                                                        <?php else: ?>
                                                            <span class="label label-lg font-weight-bold label-light-warning label-inline">غیرفعال</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td id="statusCategory<?= $category['id'] ?>">
                                                        <span class="switch switch-icon">
                                                            <label>
                                                                <input type="checkbox" id="changeStatusInput<?= $category['id'] ?>"
                                                                       <?= $category['status'] == 1 ? 'checked' : '' ?>
                                                                       onclick="statusCategory(<?= $category['id'] ?>, <?= $category['status'] == 1 ? 2 : 1 ?>)">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="<?= url("/admin/category/update?id={$category['id']}") ?>"
                                                           class="btn btn-icon btn-primary btn-sm" data-toggle="tooltip" title="ویرایش" data-theme="dark">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                      <!--  <button type="button" class="btn btn-icon btn-danger btn-sm"
                                                                onclick="deleteCategory(<?php /*= $category['id'] */?>)" data-toggle="tooltip" title="حذف">
                                                            <i class="fas fa-trash"></i>
                                                        </button>-->
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo '<tr><td colspan="8" class="text-center">هیچ دسته‌بندی‌ای یافت نشد</td></tr>';
                                        }
                                        ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin: جدول داده ها-->
                    <!--end: جدول داده ها-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<?php
$pageTitle = "مدیریت دسته بندی ها";
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