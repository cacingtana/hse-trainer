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