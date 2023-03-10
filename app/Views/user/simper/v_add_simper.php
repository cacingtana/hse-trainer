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
                                <h4 class="page-title">Simper</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Transaksi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Simper</li>
                                </ol>
                            </div>
                            <!--end col-->

                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id=""><span class="day-name" id="">Tanggal :</span>&nbsp;
                                    <span class="" id="Select_date"><?php echo date('d / M / y'); ?></span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i> </a>
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
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                NIK
                                            </p>
                                            <h3 class="my-0"> <?php echo $employee->nik ?> </h3>
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
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Departemen
                                            </p>
                                            <h3 class="my-0"><?php echo $employee->dept_name ?></h3>
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
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">
                                                Posisi
                                            </p>
                                            <h3 class="my-0"><?php echo $employee->position_name ?></h3>
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
                        <a class="nav-link" id="Profile_Project_tab" data-toggle="pill" href="#Profile_Project">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#Profile_Settings">Pembayaran</a>
                    </li>
                </ul>
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
                                                        <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#add-transaction">
                                                            <i class="fas fa-plus mr-2"></i>Cari</a>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <div class="table-responsive shopping-cart">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">Nama Produk</th>
                                                                <th class="border-top-0">Harga Satuan</th>
                                                                <th class="border-top-0">Quantity</th>
                                                                <th class="border-top-0">Unit</th>
                                                                <th class="border-top-0">Sub Total</th>
                                                                <th class="border-top-0"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="d-inline-block align-middle mb-0">
                                                                        <a href="#" class="d-inline-block align-middle mb-0 product-name">Test</a><br /><span class="text-muted font-13">test</span>
                                                                    </p>
                                                                </td>
                                                                <td>Test</td>
                                                                <td>Test</td>
                                                                <td>Test</td>
                                                                <td>Test</td>
                                                                <td>
                                                                    <a href="#" class="text-dark" data-toggle="modal" data-target="#edit-transaction"><i class="mdi mdi-flip-to-back font-18"></i></a>
                                                                    <a href="#" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                                </td>
                                                            </tr>
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


                            <!-- Pembayaran ///////////////////////////////////////// -->
                            <div class="tab-pane fade" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 class="card-title">Pelanggan</h4>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right"></label>
                                                    <div class="col-sm-10">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input type-supplier" id="customSwitchSuccess" />
                                                            <label class="custom-control-label text-dark" for="customSwitchSuccess">Pelanggan</label>
                                                            <span class="form-text text-muted font-12 mt-0">Pelanggan tidak terdaftar</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">ID</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select" name="id-pelanggan" id="id-pelanggan">
                                                            <option>--Pilih--</option>
                                                            <option value="test">test</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Pelanggan</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="pelanggan" name="company" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-->
                        <div class="form-group mb-0 row float-right">
                            <div class="col-sm-12">
                                <input type="hidden" name="order-id" value="" />
                                <button type="submit" class="btn btn-primary btn-md"> Proses <i class="fas fa-sign-in-alt ml-1"></i></button>
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
    <div class="modal fade" id="add-transaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h6 class="modal-title m-0 text-white" id="exampleModalDark1">
                        Produk
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
                            <form method="post" action="/simper/add-to-cart">
                                <?php csrf_field() ?>

                                <input type="hidden" name="id-emp" class="form-control" value="<?php echo $employee->id_emp ?>">
                                <input type="hidden" name="nik" class="form-control" value="<?php echo $employee->nik ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Unit</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select name="id-vehicle" id="id-vehicle" class="form-control">
                                                <option value="1">--Pilih--</option>
                                                <?php foreach ($vehicle as $v) : ?>
                                                    <option value="<?php echo $v->id ?>"><?php echo $v->unit_name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Issue Date</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="date" name="issue-date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Keterangan</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input type="text" name="note" class="form-control">
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


<script>
    //cek if stock > order stock // Modal
    const idProduct = document.getElementById('browser');
    idProduct.addEventListener('change', function() {
        let id = idProduct.value;
        const product = fetch('/transaction/get-product/' + id)
            .then(response => response.json())
            .then(stock => {
                document.getElementById('stock-product').value = stock.product_stock_qty;
                document.getElementById('stock-product-hide').value = stock.product_stock_qty;
                document.getElementById('price-product-hide').value = stock.sale_price;
            })
    });
</script>

<?php echo $this->endSection(); ?>