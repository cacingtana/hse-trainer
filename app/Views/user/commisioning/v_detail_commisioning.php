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
                                <h4 class="page-title">Commisioning</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Commisioning</li>
                                </ol>
                            </div>
                            <!--end col-->

                            <div class="col-auto align-self-center">
                                <a href="/commisioning" class="btn btn-sm btn-outline-primary ml-2">Kembali</a>
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
                                                No Unit
                                            </p>
                                            <h3 class="my-0"> <?php echo $header->no_unit ?> </h3>
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
                                                No Mesin
                                            </p>
                                            <h3 class="my-0"> <?php echo $header->no_mesin ?> </h3>
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
                                            <h3 class="my-0"> <?php echo $header->unit_name ?> </h3>
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
                                                Departemen
                                            </p>
                                            <h3 class="my-0"> <?php echo $header->dept_name ?> </h3>
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
                                                        <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#add-commisioning-detail">
                                                            <i class="fas fa-plus mr-2"></i>Cari</a>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <div class="table-responsive shopping-cart">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">Jenis</th>
                                                                <th class="border-top-0">Tanggal Aktif</th>
                                                                <th class="border-top-0">Tanggal Expire</th>
                                                                <th class="border-top-0">Hm/Km</th>
                                                                <th class="border-top-0">Plant</th>
                                                                <th class="border-top-0">safety</th>
                                                                <th class="border-top-0">Trainer</th>
                                                                <th class="border-top-0">Informasi</th>
                                                                <th class="border-top-0"></th>
                                                                <th class="border-top-0"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($detail as $d) : ?>
                                                                <tr>
                                                                    <td><span class="badge badge-md badge-warning"><?php echo $d->type_commisioning ?></span></td>
                                                                    <td><?php echo $d->date_commisioning ?></td>
                                                                    <td><?php echo $d->date_expired_commisioning ?></td>
                                                                    <td><?php echo $d->hm_km ?></td>
                                                                    <td><?php echo $d->plant ?></td>
                                                                    <td><?php echo $d->safety ?></td>
                                                                    <td><?php echo $d->trainer ?></td>
                                                                    <td><?php echo $d->informasi ?></td>
                                                                    <td><span class="badge badge-md badge-<?php if (intval($d->status_test) == 1) {
                                                                                                                echo "success";
                                                                                                            } else {
                                                                                                                echo "danger";
                                                                                                            } ?>"><?php echo $d->test_name ?></span></td>
                                                                    <td>
                                                                        <a href="/commisioning/detail-detail/<?php echo $d->id ?>" class="text-dark"><i class="mdi mdi-check-box-outline font-18"></i></a>
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
    <div class="modal fade" id="add-commisioning-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h6 class="modal-title m-0 text-white" id="exampleModalDark1">
                        Data
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
                            <form method="post" action="/commisioning/add-to-cart">
                                <?php csrf_field() ?>
                                <input type="hidden" name="id-commisioning" class="form-control" value="<?php echo $header->id_commisioning ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Jenis</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select name="type" id="type" class="form-control" required>
                                                <option>--Pilih--</option>
                                                <option value="Commisioning">Commisioning</option>
                                                <option value="Recommisioning">Recommisioning</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Aktif</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="date" name="start-date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Expire</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="date" name="end-date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">HM / KM</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="text" name="hm-km" class="form-control" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Plant</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="text" name="plant" class="form-control" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Safety</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="text" name="safety" class="form-control" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Trainer</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="text" name="trainer" class="form-control" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Informasi</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <textarea class="form-control" name="information"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Keterangan</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <textarea class="form-control" name="note"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Status Test</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select class="custom-select" name="status-test" id="status-test" required>
                                                <?php foreach ($test as $t) : ?>
                                                    <option value="<?php echo $t->id ?>"><?php echo $t->test_name ?></option>
                                                <?php endforeach; ?>
                                            </select>
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