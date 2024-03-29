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
                                <h4 class="page-title">Unit Business</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Dastyle</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Tables</a>
                                    </li>
                                    <li class="breadcrumb-item active">Basic Tables</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary ml-2" data-toggle="modal" data-target="#add-discount"><i class="fas fa-plus"></i></a>
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


            <!-- end page title end breadcrumb -->
            <div class="row">
                <!-- end col -->
                <div class="col">
                    <div class="card">

                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Unit Business</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($coorporate as $cpr) : ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $cpr->coorporate_name; ?></td>
                                                <td>
                                                    <span class="badge badge-soft-success">Active</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown d-inline-block">
                                                        <a href="/inv-back/coorporate/detail/<?php echo $cpr->id ?>"><i class="las la-pen text-info font-18"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!--end /table-->
                            </div>
                            <!--end /tableresponsive-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end page content -->


    <!--modal-->
    <div class="modal fade bd-example-modal-lg" id="add-discount" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel">
                        Data Unit Business Baru
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-times"></i></span>
                    </button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="general-label">
                            <form action="/inv-back/coorporate/store" method="post" enctype="multipart/form-data">
                                <?php csrf_field() ?>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Unit Business Baru</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bu-name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="singkatan" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Format ID Card</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="bu-images" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 ml-auto">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
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

<?php echo $this->endSection(); ?>