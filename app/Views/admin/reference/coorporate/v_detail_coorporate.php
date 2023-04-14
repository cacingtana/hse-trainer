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
                                <h4 class="page-title">Detail Unit Business</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Dastyle</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Tables</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/inv-back/coorporate" class="btn btn-sm btn-outline-primary ml-2">Kembali</a>
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

                        <div class="modal-body">
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form action="/inv-back/coorporate/update" method="post" enctype="multipart/form-data">
                                        <?php csrf_field() ?>
                                        <div class="form-group row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Unit Business Baru</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="bu-name" value="<?php echo $coorporate->coorporate_name; ?>" required />
                                                <input type="hidden" name="id-coorporate" value="<?php echo $coorporate->id; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="singkatan" value="<?php echo $coorporate->abbreviation; ?>" required />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Format ID Card</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <div class="card-body"><a class="user-avatar mr-2" href="#"><img src="/format/<?php echo $coorporate->coorporate_images; ?>" alt="user" width="20%"> </a></div>
                                                <input type="hidden" name="img" value="<?php echo $coorporate->coorporate_images; ?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ml-auto">
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end page content -->
</div>

<?php echo $this->endSection(); ?>