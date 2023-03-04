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
                                <h4 class="page-title">Detail Informasi</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Karyawan</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id=""><span class="day-name" id="">Tanggal Ploting Aset : </span>&nbsp;
                                    <span class="" id="Select_date"><?php echo date('d / M / y'); ?></span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i> </a>
                                <a href="/transaction" class="btn btn-sm btn-primary"><i class="typcn typcn-chevron-left icon-xs">Kembali</i></a>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Karyawan
                                            </p>
                                            <h3 class="my-0"><?php echo $order['header']->name_emp ?></h3>
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
                        <!--end col-->
                        <div class="col-md-6 col-lg-6">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Tanggal
                                            </p>
                                            <h3 class="my-0"><?php echo date('d / M / y'); ?></h3>
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

            <!--end row-->
            <div class="pb-4">
                <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="Profile_Project_tab" data-toggle="pill" href="#Profile_Project">Material Terpakai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#Profile_Settings">Informasi Karyawan</a>
                    </li>
                </ul>
            </div>
            <!--end card-body-->
            <div class="row">

                <div class="col-12">
                    <form method="post" action="/transaction/store">
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
                                                        <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#add-material">
                                                            <i class="fas fa-plus mr-2"></i>Tambah Material</a>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                                <div class="table-responsive shopping-cart">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">No</th>
                                                                <th class="border-top-0">Material</th>
                                                                <th class="border-top-0">Kategori</th>
                                                                <th class="border-top-0">S/N</th>
                                                                <th class="border-top-0">Tanggal Penggunaan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $i = 1;
                                                            foreach ($order['detail'] as $cc) : ?>
                                                                <tr>
                                                                    <td><?php echo $i++; ?></td>
                                                                    <td>
                                                                        <p class="d-inline-block align-middle mb-0">
                                                                            <a href="#" class="d-inline-block align-middle mb-0 product-name"><?php echo $cc->product_name ?></a><br /><span class="text-muted font-13"><?php echo $cc->ref_product_id ?></span>
                                                                        </p>
                                                                    </td>
                                                                    <td><?php echo $cc->category_name ?></td>
                                                                    <td><?php echo $cc->serial_number ?></td>
                                                                    <td><?php echo $cc->created_at ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end card-body-->

                                        <!--end card-->
                                        <div class="form-group mb-0 row float-right">
                                            <div class="col-sm-12">
                                                <form method="post" action="/transaction/print-view">
                                                    <input type="hidden" name="id-emp" value="<?php echo $order['header']->id_emp ?>" />
                                                    <button type="submit" class="btn btn-primary btn-md"> Print </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--end card-body-->

                                    </div>
                                    <!--end col-->
                                </div>
                            </div>


                            <!-- Pembayaran ///////////////////////////////////////// -->
                            <div class="tab-pane fade" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <div class="single-pro-detail">
                                            <div class="custom-border mb-3"></div>
                                            <h3 class="pro-title"><?php echo $order['header']->name_emp ?></h3>
                                            <p class="text-muted mb-0"><?php echo $order['header']->nik ?></p>
                                            <ul class="list-inline mb-2 product-review">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                <li class="list-inline-item"><?php echo $order['header']->position_name ?></li>
                                            </ul>
                                            <h2 class="pro-price">Departemen : <?php echo $order['header']->dept_name ?></span></h2>
                                            <h6 class="text-muted font-13">Unit Kerja : <?php echo $order['header']->unit_name ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!--end row-->
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- end page content -->
</div>

<!--end modal-->
<div class="modal fade" id="add-material" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title m-0 text-white" id="exampleModalDark1">
                    Material
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                </button>
            </div>
            <!--end modal-header-->

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body table-responsive">
                            <div class="">
                                <table id="datatable2" class="table dt-responsive nowrap" style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                      ">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $ps) : ?>
                                            <tr>
                                                <td><?php echo $ps->product_name ?></td>
                                                <td>

                                                    <form method="post" action="/transaction/add-to-cart-transaction">
                                                        <?php csrf_field() ?>
                                                        <input type="hidden" name="id-order" value="<?php echo $idOrder ?>">
                                                        <input type="hidden" name="id-product" value="<?php echo $ps->product_stock_id ?>">
                                                        <input type="hidden" name="product" value="<?php echo $ps->ref_product_id ?>">
                                                        <button type="submit" class="form-control" class="btn-sm-warning">Pilih</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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


<?php echo $this->endSection(); ?>