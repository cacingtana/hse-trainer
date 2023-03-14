<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>


<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row mx-0">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Daftar Pengguna</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Dastyle</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Tables</a>
                                    </li>
                                    <li class="breadcrumb-item active">Datatables</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/inv-back/user/create" class="btn btn-sm btn-outline-primary ml-2"><i class="fas fa-plus"></i></a>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <!-- end page title end breadcrumb -->
            <div class="col">

                <!-- Session flash -->
                <?php if (session()->getFlashdata('msg')) : ?>
                    <?php $data =  session()->getFlashdata('msg'); ?>
                    <div class="alert icon-custom-alert alert-outline-<?php echo $data[0] ?>" role="alert">
                        <i class="mdi mdi-check-all alert-icon"></i>
                        <div class="alert-text">
                            <strong>Well done! </strong> <?php echo $data[1] ?>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="mdi mdi-close text-<?php echo $data[0] ?> font-16"></i></span>
                            </button>
                        </div>
                    </div>
                <?php endif ?>
                <!-- Session flash -->

                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Leads Report</h4>
                            </div>
                            <!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status<i class="las la-angle-down ml-1"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Aktif</a>
                                        <a class="dropdown-item" href="#">Non Aktif</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>U-ID</th>
                                        <th>Nama</th>
                                        <th>Telpon</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    <!--end tr-->
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($users as $u) : ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++; ?>
                                            </td>
                                            <td><?php echo $u->users_id; ?></td>
                                            <td><?php echo $u->first_name; ?> <?php echo $u->last_name; ?></td>
                                            <td><?php echo $u->phone; ?></td>
                                            <td><?php echo $u->email; ?></td>
                                            <td>
                                                <span class="badge badge-md badge-<?php if ($u->user_status == 1) {
                                                                                        echo "success";
                                                                                    } else {
                                                                                        echo "danger";
                                                                                    } ?>"><?php if ($u->user_status == 1) {
                                                                                                echo "Aktif";
                                                                                            } else {
                                                                                                echo "Non Aktif";
                                                                                            } ?></span>
                                            </td>
                                            <td>
                                                <div class="button-list btn-social-icon">
                                                    <a href="/inv-back/user/detail/<?php echo $u->users_id; ?>"><button type="button" id="edit-user" class="btn btn-soft-blue btn-icon-circle"><i class="las la-pen text-info font-18"></i></button></a>
                                                    <a href="/inv-back/manage-access/<?php echo $u->users_id; ?>"><button type="button" id="delete-user" class="btn btn-soft-pink btn-icon-circle ml-2"><i class="las la-edit text-danger font-18"></i></button></a>

                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
        </div>
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>

<script>
    const editAccess = document.getElementById('edit-access');
    editAccess.addEventListener('click', function() {

        window.location.href = "/inv-back/manage-access";
    })
</script>

<?php echo $this->endSection(); ?>