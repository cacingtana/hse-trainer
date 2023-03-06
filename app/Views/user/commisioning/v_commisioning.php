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
                                <a href="/commisioning/new-request" class="btn btn-sm btn-outline-primary ml-2"><i class="fas fa-plus"></i></a>
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
                <div class="col-lg-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label text-right">Dari</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label text-right">Sampai</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-items float-right"><button type="button" class="btn btn-primary btn-rounded btn-outline waves-effect waves-light">Cari</button></div>
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
                                            <th><?php echo $no++ ?></th>
                                            <th><?php echo $c->id_commisioning ?></th>
                                            <th><?php echo $c->no_unit ?></th>
                                            <th><?php echo $c->unit_name ?></th>
                                            <th><?php echo $c->coorporate_name ?></th>
                                            <th><?php echo $c->dept_name ?></th>
                                            <th><a href="#"><i class="las la-pen text-info font-18"></i></a></th>
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