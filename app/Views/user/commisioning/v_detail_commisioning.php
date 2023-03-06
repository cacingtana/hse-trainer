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
                                <h4 class="page-title">Transaksi Baru</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Transaksi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Transaksi Baru</li>
                                </ol>
                            </div>
                            <!--end col-->

                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id=""><span class="day-name" id="">Tanggal Transaksi:</span>&nbsp;
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
                    <form method="post" action="/commisioning/store">
                        <?php csrf_field() ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">No Unit</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="no-unit" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">No Mesin</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="no-machine" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Type Unit</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="type-unit" required>
                                            <option>---Pilih---</option>
                                            <?php foreach ($vehicle as $cat) : ?>
                                                <option value="<?php echo $cat->id ?>"><?php echo $cat->unit_name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Departemen</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="ref-department-id" required>
                                            <option>---Pilih---</option>
                                            <?php foreach ($dept as $cat) : ?>
                                                <option value="<?php echo $cat->id ?>"><?php echo $cat->dept_name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Perusahaan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="ref-coorporate-id" required>
                                            <option>---Pilih---</option>
                                            <?php foreach ($bu as $cat) : ?>
                                                <option value="<?php echo $cat->id ?>"><?php echo $cat->coorporate_name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label text-right">Tanggal Commisioning</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="date-comm" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label text-right">Tanggal Expire Commisioning</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="date-expire-comm" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">HM / KM</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="hm-km" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Plant</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="plant" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Safety</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="safety" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Trainer</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="trainer" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Informasi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="information" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="note" required autocomplete="off" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary ml-2 float-right">
                                    Simpan
                                </button>

                            </div>
                        </div>
                    </form>
                    <!--end card-body-->
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- end page content -->
</div>

<?php echo $this->endSection(); ?>