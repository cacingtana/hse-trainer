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
                                <a href="#" class="btn btn-sm btn-outline-primary ml-2" data-toggle="modal" data-target="#search-commisioning"><i class="fas fa-plus"></i></a>
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap" style="
                      border-collapse: collapse;
                      border-spacing: 0;
                      width: 100%;
                    ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Commisioning</th>
                                        <th>No Unit</th>
                                        <th>No Mesin</th>
                                        <th>Nama Unit</th>
                                        <th>Perusahaan</th>
                                        <th>Departemen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($comm as $c) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $c->id_commisioning ?></td>
                                            <td><?php echo $c->no_unit ?></td>
                                            <td><?php echo $c->no_mesin ?></td>
                                            <td><?php echo $c->unit_name ?></td>
                                            <td><?php echo $c->coorporate_name ?></td>
                                            <td><?php echo $c->dept_name ?></td>
                                            <td><a href="/commisioning/detail/<?php echo $c->id_commisioning ?>"><i class="las la-pen text-info font-18"></i></a></td>
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

<div class="modal fade bd-example-modal-lg" id="search-commisioning" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myLargeModalLabel">
                    Form Karyawan Baru
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="la la-times"></i></span>
                </button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" action="/commisioning/store-header">
                            <?php csrf_field() ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Unit Business</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="ref-coorporate-id" required>
                                                    <option>---Pilih---</option>
                                                    <?php foreach ($bu as $cat) : ?>
                                                        <option value="<?php echo $cat->id ?>"><?php echo $cat->coorporate_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Departemen</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="ref-department-id" required>
                                                    <option>---Pilih---</option>
                                                    <?php foreach ($dept as $cat) : ?>
                                                        <option value="<?php echo $cat->id ?>"><?php echo $cat->dept_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Type Unit</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="ref-vehicle-id" required>
                                                    <option>---Pilih---</option>
                                                    <?php foreach ($vehicle as $v) : ?>
                                                        <option value="<?php echo $v->id ?>"><?php echo $v->unit_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">No Unit</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="no-unit" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">No Mesin</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="no-machine" required autocomplete="off" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary ml-2 float-right">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end card-body-->
                    </div>
                    <!--end col-->
                </div>
            </div>

        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>


<?php echo $this->endSection(); ?>