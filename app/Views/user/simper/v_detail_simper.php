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
                                        <a href="javascript:void(0);">Transaksi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Simper</li>
                                </ol>
                            </div>
                            <!--end col-->

                            <div class="col-auto align-self-center">
                                <a href="/simper" class="btn btn-sm btn-outline-primary ml-2">Kembali</a>
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

            <!-- Session flash -->
            <?php if (session()->getFlashdata('msg')) : ?>
                <?php $data =  session()->getFlashdata('msg'); ?>
                <div class="alert icon-custom-alert alert-outline-<?php echo $data[0] ?>" role="alert">
                    <i class="mdi mdi-check-all alert-icon"></i>
                    <div class="alert-text">
                        <strong> </strong> <?php echo $data[1] ?>
                    </div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="mdi mdi-close text-<?php echo $data[0] ?> font-16"></i></span>
                        </button>
                    </div>
                </div>
            <?php endif ?>
            <!-- Session flash -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Nama
                                            </p>
                                            <h5 class="my-0"> <?php echo $simper->name_emp ?> </h5>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="tag" class="align-self-center text-muted icon-md"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                NIK
                                            </p>
                                            <h5 class="my-0"> <?php echo $simper->nik ?> </h5>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="tag" class="align-self-center text-muted icon-md"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Departemen
                                            </p>
                                            <h5 class="my-0"><?php echo $simper->dept_name ?></h5>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="package" class="align-self-center text-muted icon-md"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Posisi
                                            </p>
                                            <h5 class="my-0"><?php echo $simper->position_name ?></h5>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="package" class="align-self-center text-muted icon-md"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!-- end col-->
            </div>
            <!--end card-body-->
            <div class="row">

                <div class="col-12">
                    <form method="post" action="#">
                        <?php csrf_field() ?>
                        <div class="tab-content" id="pills-tabContent">

                            <!-- Produk ///////////////////////////////////////// -->
                            <div class="tab-pane fade show active" id="Profile_Project" role="tabpanel" aria-labelledby="Profile_Project_tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <!--end col-->
                                                    <div class="col-auto align-self-center">
                                                        <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#add-transaction">
                                                            <i class="fas fa-plus mr-2"></i>Cari</a>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <div class="table-responsive shopping-cart">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">No</th>
                                                                <th class="border-top-0">Unit</th>
                                                                <th class="border-top-0">Issue Date</th>
                                                                <th class="border-top-0">Status Simper</th>
                                                                <th class="border-top-0">Status Test</th>
                                                                <th class="border-top-0">Pelanggaran</th>
                                                                <th class="border-top-0"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($detail as $d) : ?>
                                                                <tr>
                                                                    <td><?php echo $no++ ?></td>
                                                                    <td><?php echo $d->unit_name ?></td>
                                                                    <td><?php echo $d->issue_date ?></td>
                                                                    <td><span class="badge badge-md badge-success"><?php echo $d->status_name ?></span></td>
                                                                    <td><span class="badge badge-md badge-success"><?php echo $d->status_name ?></span></td>
                                                                    <td><span class="badge badge-md badge-success"><?php echo $d->status_name ?></span></td>
                                                                    <td>
                                                                        <a href="/simper/detail-detail/<?php echo $d->id ?>" class="text-dark"><i class="mdi mdi-check-box-outline font-18"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="form-group mb-0 row float-right">
                            <div class="col-sm-12">
                                <input type="hidden" name="order-id" value="" />
                                <button type="submit" class="btn btn-primary btn-md"> Cetak <i class="fas fa-sign-in-alt ml-1"></i></button>
                            </div>
                        </div>
                        <!--end card-body-->
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- container -->


    <!--end modal-->
    <div class="modal fade" id="add-transaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h6 class="modal-title m-0 text-white" id="exampleModalDark1">
                        Produk
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                    </button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <!--end card-header-->
                            <form method="post" action="/simper/add-to-cart">
                                <?php csrf_field() ?>
                                <input type="hidden" name="id-emp" class="form-control" value="<?php echo $simper->id_emp ?>">
                                <input type="hidden" name="id-simper" class="form-control" value="<?php echo $simper->id_simper ?>">
                                <input type="hidden" name="nik" class="form-control" value="<?php echo $simper->nik ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Unit</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select name="id-vehicle" id="id-vehicle" class="form-control" required>
                                                <option value="1">--Pilih--</option>
                                                <?php foreach ($vehicle as $v) : ?>
                                                    <option value="<?php echo $v->id ?>"><?php echo $v->unit_name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Issue Date</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="date" name="issue-date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Status Simper</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select name="status-simper" id="status-simper" class="form-control" required>
                                                <?php foreach ($status as $v) : ?>
                                                    <option value="<?php echo $v->id ?>"><?php echo $v->status_name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Status Test</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select name="status-test" id="status-test" class="form-control" required>
                                                <?php foreach ($test as $t) : ?>
                                                    <option value="<?php echo $t->id ?>"> <?php echo $t->test_name ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Keterangan</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="text" name="note" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                            <button type="submit" class="btn btn-dark btn-sm">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->
</div>
<!-- end page content -->
</div>

<?php echo $this->endSection(); ?>