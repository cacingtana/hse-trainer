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
                                <h4 class="page-title">Data Karyawan</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Reference</a>
                                    </li>
                                    <li class="breadcrumb-item active">Karyawan</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary ml-2" data-toggle="modal" data-target="#add-customer"><i class="fas fa-plus"></i></a>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>


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


            <!--end row-->
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
                                        <th>Unit Business</th>
                                        <th>Warga Negara</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Posisi</th>
                                        <th>Unit Kerja</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($employee as $c) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $c->coorporate_name ?></td>
                                            <td><?php echo $c->type_employee ?></td>
                                            <td><?php echo $c->nik ?></td>
                                            <td><?php echo $c->name_emp ?></td>
                                            <td><?php echo $c->dept_name ?></td>
                                            <td><?php echo $c->position_name ?></td>
                                            <td>
                                                <span class="badge badge-md badge-<?php if ($c->status_emp == 1) {
                                                                                        echo "success";
                                                                                    } else {
                                                                                        echo "danger";
                                                                                    } ?>"><?php if ($c->status_emp == 1) {
                                                                                                echo "Aktif";
                                                                                            } else {
                                                                                                echo "Non Aktif";
                                                                                            } ?></span>
                                            </td>
                                            <td class="text-right">
                                                <a href="/inv-back/employee/detail/<?php echo $c->id_emp ?>"><i class="las la-pen text-info font-18"></i></a>
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
        <!--end footer-->
    </div>
    <!-- end page content -->


    <div class="modal fade bd-example-modal-lg" id="add-customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <form method="post" action="/inv-back/employee/store" enctype="multipart/form-data">
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
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Warga Negara</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="type-emp" required>
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($typeEmployee as $cat) : ?>
                                                            <option value="<?php echo $cat->id ?>"><?php echo $cat->type_employee ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">NIK</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="nik" required autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">ID CARD</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="nip" required autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Foto</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="images" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Nama</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name-emp" required autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="sex" required>
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($sex as $cat) : ?>
                                                            <option value="<?php echo $cat->id ?>"><?php echo $cat->sex_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="address" required autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label text-right">Telpon</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="las la-phone"></i></span></div><input type="text" class="form-control" name="phone" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Posisi</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="ref-position-id" required>
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($position as $cat) : ?>
                                                            <option value="<?php echo $cat->id ?>"><?php echo $cat->position_name ?></option>
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
                                                <label for="example-number-input" class="col-sm-2 col-form-label text-right">SIM / SIO</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="sim-sio" required autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label text-right">License Number</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="license-number" required autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label text-right">Tanggal Exipre Probation</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" name="date-expired-request">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label text-right">Tanggal Exipre SIM / SIO</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" name="date-expired-sim-sio">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status-emp" required>
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($status as $cat) : ?>
                                                            <option value="<?php echo $cat->id ?>"><?php echo $cat->status_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
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
</div>
<?php echo $this->endSection(); ?>