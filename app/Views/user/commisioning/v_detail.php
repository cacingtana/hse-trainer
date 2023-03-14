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
                                <h4 class="page-title">Update Data Commisioning</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Commisioning</li>
                                </ol>
                            </div>
                            <!--end col-->

                            <div class="col-auto align-self-center">
                                <a href="/commisioning" class="btn btn-sm btn-outline-primary ml-2">Kembali</a>
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
                    <form method="post" action="/commisioning/store-detail-detail">
                        <?php csrf_field() ?>
                        <input type="hidden" name="id-commisioning" class="form-control" value="<?php echo $detail->id ?>">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Jenis</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="text" class="form-control" value="<?php echo $detail->type_commisioning ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Aktif</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="date" name="start-date" class="form-control" value="<?php echo $detail->date_commisioning ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Expire</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="date" name="end-date" class="form-control" value="<?php echo $detail->date_expired_commisioning ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">HM / KM</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="text" name="hm-km" class="form-control" value="<?php echo $detail->hm_km ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Plant</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="text" name="plant" class="form-control" value="<?php echo $detail->plant ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Safety</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="text" name="safety" class="form-control" value="<?php echo $detail->safety ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Trainer</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input type="text" name="trainer" class="form-control" value="<?php echo $detail->trainer ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Informasi</label>
                                <div class="col-lg-9 col-xl-8">
                                    <textarea class="form-control" name="information"><?php echo $detail->informasi ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Keterangan</label>
                                <div class="col-lg-9 col-xl-8">
                                    <textarea class="form-control" name="note"><?php echo $detail->note ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Status Test</label>
                                <div class="col-lg-9 col-xl-8">
                                    <select class="custom-select" name="status-test" id="status-test">
                                        <?php foreach ($test as $t) : ?>
                                            <option value="<?php echo $t->id ?>" <?php if (intval($detail->status_test) == intval($t->id)) {
                                                                                        echo "selected";
                                                                                    } ?>><?php echo $t->test_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
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