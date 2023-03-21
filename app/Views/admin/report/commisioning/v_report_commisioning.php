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
                                <h4 class="page-title">Report Commisioning</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Commisioning</li>
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
                                        <th>No Unit</th>
                                        <th>No Mesin</th>
                                        <th>Type Unit</th>
                                        <th>Perusahaan</th>
                                        <th>Departemen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($commisioning as $s) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $s->no_unit ?></td>
                                            <td><?php echo $s->no_mesin ?></td>
                                            <td><?php echo $s->unit_name ?></td>
                                            <td><?php echo $s->coorporate_name ?></td>
                                            <td><?php echo $s->dept_name ?></td>
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