<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>

<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Simper</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Laporan</a>
                                    </li>
                                    <li class="breadcrumb-item active">Simper</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary ml-2" data-toggle="modal" data-target="#search-employee"><i class="fas fa-plus"></i></a>
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

            <!-- Session flash -->
            <?php if (session()->getFlashdata('msg')) : ?>
                <?php $data =  session()->getFlashdata('msg'); ?>
                <div class="alert icon-custom-alert alert-outline-<?php echo $data[0] ?>" role="alert">
                    <i class="mdi mdi-check-all alert-icon"></i>
                    <div class="alert-text">
                        <strong>Opps...! </strong> <?php echo $data[1] ?>
                    </div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="mdi mdi-close text-<?php echo $data[0] ?> font-16"></i></span>
                        </button>
                    </div>
                </div>
            <?php endif ?>
            <!-- Session flash -->
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="
                      border-collapse: collapse;
                      border-spacing: 0;
                      width: 100%;
                    ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>ID CARD</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Posisi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($simper as $s) : ?>
                                        <tr>
                                            <td><?php echo $s->id_simper ?></td>
                                            <td><?php echo $s->nik ?></td>
                                            <td><?php echo $s->nip ?></td>
                                            <td><?php echo $s->name_emp ?></td>
                                            <td><?php echo $s->dept_name ?></td>
                                            <td><?php echo $s->position_name ?></td>
                                            <td>
                                                <a href="/simper/detail/<?php echo $s->id_simper ?>"><button type="button" id="edit-user" class="btn btn-soft-blue btn-icon-circle"><i class="las la-pen text-info font-18"></i></button></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- end page content -->
</div>

<!--modal-->
<div class="modal fade" id="search-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title m-0 text-white" id="exampleModalDark1">
                    List Karyawan
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                </button>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body table-responsive">
                            <div class="">
                                <table id="datatable2" class="table dt-responsive nowrap" style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                      ">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($employee as $emp) : ?>
                                            <tr>
                                                <td><?php echo $emp->nik ?></td>
                                                <td><?php echo $emp->name_emp ?></td>
                                                <td>

                                                    <form method="post" action="/simper/new-request">
                                                        <?php csrf_field() ?>
                                                        <input type="hidden" name="id-emp" value="<?php echo $emp->id_emp ?>">
                                                        <input type="hidden" name="name-emp" value="<?php echo $emp->name_emp ?>">
                                                        <button type="submit" class="form-control" class="btn-sm-warning">Pilih</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<?php echo $this->endSection(); ?>