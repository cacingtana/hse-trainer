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
                                <h4 class="page-title">Update Data Simper</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Commisioning</li>
                                </ol>
                            </div>
                            <!--end col-->

                            <div class="col-auto align-self-center">
                                <a href="/simper" class="btn btn-sm btn-outline-primary ml-2">Kembali</a>
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
                        <strong> </strong> <?php echo $data[1] ?>
                    </div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="mdi mdi-close text-<?php echo $data[0] ?> font-16"></i></span>
                        </button>
                    </div>
                </div>
            <?php endif ?>
            <!-- Session flash -->

            <!--end card-body-->
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <!--end card-header-->
                    <form method="post" action="/simper/store-detail-detail">
                        <?php csrf_field() ?>
                        <input type="hidden" name="id-commisioning" class="form-control" value="<?php echo $detail->id ?>">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">No Simper</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="text" class="form-control" value="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Issue Date</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="date" name="end-date" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Status Simper</label>
                                <div class="col-lg-9 col-xl-8">
                                    <select class="custom-select" name="id-pelanggan" id="id-pelanggan">
                                        <?php foreach ($status as $s) : ?>
                                            <option value="<?php echo $s->id ?>"><?php echo $s->status_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Status Test</label>
                                <div class="col-lg-9 col-xl-8">
                                    <select class="custom-select" name="id-pelanggan" id="id-pelanggan">
                                        <option value="1">Lulus</option>
                                        <option value="2">Tidak Lulus</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Status Pelanggaran</label>
                                <div class="col-lg-9 col-xl-8">
                                    <select class="custom-select" name="id-pelanggan" id="id-pelanggan">
                                        <option value="1">Kuning - Pelanggaran 1</option>
                                        <option value="2">Biru - Pelanggaran 2</option>
                                        <option value="3">Merah - Pelanggaran 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Keterangan</label>
                                <div class="col-lg-9 col-xl-8">
                                    <textarea class="form-control" name="note"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                    <button type="submit" class="btn btn-dark btn-sm">
                                        Update
                                    </button>
                                </div>
                            </div>
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

<?php echo $this->endSection(); ?>