<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Manajemen Akses User</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Dastyle</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Apps</a>
                                    </li>
                                    <li class="breadcrumb-item active">Files</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/inv-back/user" class="btn btn-sm btn-outline-primary"><i class="typcn typcn-chevron-left icon-xs">Kembali</i></a>
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
            <div class="card">
                <div class="card-header">
                    <div class="row my-2">
                        <div class="col">
                            <div class="media"><img src="/assets/images/users/user-5.jpg" alt="user" class="thumb-sm rounded">
                                <div class="media-body align-self-center ml-2">
                                    <h6 class="mt-0 mb-1 font-16"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></h6>
                                </div>
                                <!--end media body-->
                            </div>
                        </div>
                        <div class="col-auto"><button type="button" class="btn btn-sm btn-<?php if ($user->username) {
                                                                                                echo "primary";
                                                                                            } else {
                                                                                                echo "secondary";
                                                                                            } ?> px-3 mt-2"><?php echo $user->users_id; ?></button></div>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="general-label">
                        <form class="form" method="post" action="/inv-back/manage-access/store-credential">
                            <?php csrf_field() ?>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="username" name="user-name" value="<?php echo $user->username; ?>" />
                                <input type="hidden" name="user-id" value="<?php echo $user->users_id; ?>">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pass-word" value="<?php echo $user->password; ?>" />
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups" data-parsley-mincheck="2" />
                                    <label class="custom-control-label" for="customCheck1">Tampilkan</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!-- end page title end breadcrumb -->
            <form method="post" action="/inv-back/manage-access/store-access">
                <?php csrf_field() ?>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Categories</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">

                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="files-nav">
                                    <div class="nav flex-column nav-pills" id="files-tab" aria-orientation="vertical">
                                        <a class="nav-link active" id="files-projects-tab" data-toggle="pill" href="#files-projects" aria-selected="true"><i data-feather="folder" class="align-self-center icon-dual-file mr-3"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Master</h5>
                                            </div>
                                        </a><a class="nav-link" id="files-pdf-tab" data-toggle="pill" href="#files-pdf" aria-selected="false"><i data-feather="folder" class="align-self-center icon-dual-file mr-3"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Autentikasi</h5>
                                            </div>
                                        </a><a class="nav-link align-items-center" id="files-documents-tab" data-toggle="pill" href="#files-documents" aria-selected="false"><i data-feather="folder" class="align-self-center icon-dual-file mr-3"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Ref & Pengaturan</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-9">
                        <div class="">
                            <div class="tab-content" id="files-tabContent">
                                <div class="tab-pane fade show active" id="files-projects">
                                    <h4 class="card-title mt-0 mb-3">Master</h4>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="purchase" class="custom-control-input" id="customCheck11" <?php if ($access->purchase == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck11">Pemesanan Barang</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="receive" class="custom-control-input" id="customCheck12" <?php if ($access->receive == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck12">Penerimaan Barang</label></div>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="stock-management" class="custom-control-input" id="customCheck13" <?php if ($access->stock_management == 1) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            } ?>> <label class="custom-control-label" for="customCheck13">Stok Manajmen</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="r-trans-in" class="custom-control-input" id="customCheck14" <?php if ($access->r_trans_in == 1) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        } ?>> <label class="custom-control-label" for="customCheck14">Report Transaksi Masuk</label></div>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="r-trans-out" class="custom-control-input" id="customCheck15" <?php if ($access->r_trans_out == 1) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        } ?>> <label class="custom-control-label" for="customCheck15">Report Transaski Keluar</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane fade" id="files-pdf">
                                    <h4 class="mt-0 card-title mb-3">Authentikasi</h4>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="user" class="custom-control-input" id="customCheck3" <?php if ($access->users == 1) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                } ?>> <label class="custom-control-label" for="customCheck3">Pengguna</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="level" class="custom-control-input" id="customCheck2" <?php if ($access->level == 1) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                } ?>> <label class="custom-control-label" for="customCheck2">Level</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane fade" id="files-documents">
                                    <h4 class="mt-0 card-title mb-3">Ref & Pengaturan</h4>
                                    <div class="file-box-content">

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="payment" class="custom-control-input" id="customCheck4" <?php if ($access->payment == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck4">Pembayaran</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="shipment" class="custom-control-input" id="customCheck5" <?php if ($access->shipment == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck5">Pengiriman</label></div>
                                            </div>
                                        </div>


                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="product" class="custom-control-input" id="customCheck6" <?php if ($access->product == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck6">Produk</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="customer" class="custom-control-input" id="customCheck7" <?php if ($access->customer == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck7">Pelanggan</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="supplier" class="custom-control-input" id="customCheck8" <?php if ($access->supplier == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck8">Supplier</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="category" class="custom-control-input" id="customCheck9" <?php if ($access->category == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck9">Kategori</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="unit" class="custom-control-input" id="customCheck10" <?php if ($access->unit == 1) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                } ?>> <label class="custom-control-label" for="customCheck10">Satuan</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="taxes" class="custom-control-input" id="customCheck17" <?php if ($access->taxes == 1) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                } ?>> <label class="custom-control-label" for="customCheck17">Tax</label></div>
                                            </div>
                                        </div>

                                        <div class="file-box">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox"><input type="checkbox" name="discount" class="custom-control-input" id="customCheck18" <?php if ($access->discount == 1) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>> <label class="custom-control-label" for="customCheck18">Diskon</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end tab-pen-->
                                <div class="tab-pane fade" id="files-hide">
                                    <h4 class="mt-0 card-title mb-3">Hide</h4>
                                </div>
                                <!--end tab-pane-->
                            </div>
                            <!--end tab-content-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end col-->
                </div>
                <div class="form-group mb-0 row float-right">
                    <?php csrf_field() ?>
                    <div class="col-sm-12">
                        <input type="hidden" name="product-header-id" value="" />
                        <button type="submit" class="btn btn-primary btn-md"> Simpan <i class="fas fa-sign-in-alt ml-1"></i></button>
                    </div>
                </div>
            </form>
            <!--end row-->
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>