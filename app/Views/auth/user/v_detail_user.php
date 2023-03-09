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
                                <h4 class="page-title">Detail User</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">User</a>
                                    </li>
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
                            <form action="/inv-back/user/update" method="post">
                                <?php csrf_field() ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Depan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="front-name" autocomplete="off" value="<?php echo $user->first_name ?>" />
                                                <input class="form-control" type="hidden" name="user-id" value="<?php echo $user->users_id ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Belakang</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="back-name" autocomplete="off" value="<?php echo $user->last_name ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-sm-2 col-form-label text-right">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="5" id="message" name="address"><?php echo $user->address ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telpon</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="phone" autocomplete="off" value="<?php echo $user->phone ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-password-input" class="col-sm-2 col-form-label text-right">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group"><input type="email" id="example-input2-group1" name="email" class="form-control" autocomplete="off" value="<?php echo $user->email ?>">
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
                                                        <option value="<?php echo $r->id ?>" <?php if ($user->ref_role_id == $r->id) {
                                                                                                    echo "selected";
                                                                                                } ?>><?php echo $r->role_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-right">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status">
                                                    <option>--Pilih--</option>
                                                    <?php foreach ($status as $r) : ?>
                                                        <option value="<?php echo $r->id ?>" <?php if ($user->user_status == $r->id) {
                                                                                                    echo "selected";
                                                                                                } ?>><?php echo $r->status_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="example-password-input" class="col-sm-2 col-form-label text-right"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">
                                                    Update
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