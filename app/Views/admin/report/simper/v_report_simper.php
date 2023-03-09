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
                                <h4 class="page-title">Report Simper</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Simper</li>
                                </ol>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label text-right">Dari</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label text-right">Sampai</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group row">
                                        <div class="button-items float-right"><button type="button" class="btn btn-primary btn-rounded btn-outline waves-effect waves-light">Cari</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="
                      border-collapse: collapse;
                      border-spacing: 0;
                      width: 100%;
                    ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>ID-CARD</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Posisi</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tanggal Test Mata</th>
                                        <th>Tanggal Test Tulis</th>
                                        <th>Tanggal Test Praktek</th>
                                        <th>SIM / SIO</th>
                                        <th>Nomor Lisensi</th>
                                        <th>Tgl Exp Pengajuan</th>
                                        <th>Tgl Exp SIM/SIO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($simper as $s) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $s->nik ?></td>
                                            <td><?php echo $s->nip ?></td>
                                            <td><?php echo $s->name_emp ?></td>
                                            <td><?php echo $s->dept_name ?></td>
                                            <td><?php echo $s->position_name ?></td>
                                            <td><?php echo $s->date_request ?></td>
                                            <td><?php echo $s->date_eye_test ?></td>
                                            <td><?php echo $s->date_write_test ?></td>
                                            <td><?php echo $s->date_practice_test ?></td>
                                            <td><?php echo $s->sim_sio ?></td>
                                            <td><?php echo $s->license_number ?></td>
                                            <td><?php echo $s->date_expired_request ?></td>
                                            <td><?php echo $s->date_expired_sim_sio ?></td>
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

<?php echo $this->endSection(); ?>