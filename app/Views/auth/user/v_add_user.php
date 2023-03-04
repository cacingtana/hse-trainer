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
                                <h4 class="page-title">User Baru</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Dastyle</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Tables</a>
                                    </li>
                                    <li class="breadcrumb-item active">Datatables</li>
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
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Textual inputs</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <form action="/inv-back/user/store" method="post">
                                <?php csrf_field() ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Depan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="front-name" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Belakang</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="back-name" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="5" id="message" name="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telpon</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="phone" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-password-input" class="col-sm-2 col-form-label text-right">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group"><input type="email" id="example-input2-group1" name="email" class="form-control" autocomplete="off">
                                                    <div class="input-group-append"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Level</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="role-name">
                                                    <option>--Pilih--</option>
                                                    <?php foreach ($role as $r) : ?>
                                                        <option value="<?php echo $r->id ?>"><?php echo $r->role_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-password-input" class="col-sm-2 col-form-label text-right"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
        </div>
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>

<?php echo $this->endSection(); ?>