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

            <!--end row--><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5 class="mt-0">

                                <span class="badge badge-pink"></span>
                            </h5>
                        </li>
                    </ul>
                </div>
                <!--end col-->
                <div class="col-lg-6 text-right">
                    <div class="text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="input-group">
                                    <input type="date" id="example-input1-group2" name="start-date" class="form-control form-control-sm" />
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="input-group">
                                    <input type="date" id="example-input1-group2" name="end-date" class="form-control form-control-sm" />
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-search"></i>
                                </button>
                            </li>

                            <li class="list-inline-item">
                                <a href="/inv-back/report/simper/detail">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        Export
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                                        <th>SIM / SIO</th>
                                        <th>Nomor Lisensi</th>
                                        <th>Tgl Exp Pengajuan</th>
                                        <th>Tgl Exp SIM/SIO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    for ($i = 0; $i < count($simper); $i++) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $simper[$i]['header']->nik ?></td>
                                            <td><?php echo $simper[$i]['header']->nip ?></td>
                                            <td><?php echo $simper[$i]['header']->name_emp ?></td>
                                            <td><?php echo $simper[$i]['header']->dept_name ?></td>
                                            <td><?php echo $simper[$i]['header']->position_name ?></td>
                                            <td><?php echo $simper[$i]['header']->sim_sio ?></td>
                                            <td><?php echo $simper[$i]['header']->license_number ?></td>
                                            <td><?php echo $simper[$i]['header']->date_expired_request ?></td>
                                            <td><?php echo $simper[$i]['header']->date_expired_sim_sio ?></td>
                                        </tr>
                                    <?php  } ?>
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