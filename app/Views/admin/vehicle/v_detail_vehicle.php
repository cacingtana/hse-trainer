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
                                <h4 class="page-title">Detail Unit / Kendaraan</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Reference</a>
                                    </li>
                                    <li class="breadcrumb-item active">Unit / Kendaraan</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/inv-back/vehicle" class="btn btn-sm btn-outline-primary"><i class="typcn typcn-chevron-left icon-xs">Kembali</i></a>
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
                <div class="col-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body mt-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="/inv-back/vehicle/update">
                                        <?php csrf_field() ?>
                                        <div class="form-group">
                                            <label for="projectName"> Nama Unit </label>
                                            <input type="text" class="form-control" name="unit-name" value="<?php echo $vehicle->unit_name ?>">
                                            <input type="hidden" class="form-control" name="vehicle-id" value="<?php echo $vehicle->id ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName"> Keterangan </label>
                                            <input type="text" class="form-control" name="note" value="<?php echo $vehicle->note ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-md float-right">
                                            Update
                                        </button>
                                    </form>
                                    <!--end form-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container -->
        <!--end footer-->
    </div>
    <!-- end page content -->


</div>

<!-- <script>
    const idSupplier = document.getElementById('modal-id-supplier');
    const inputIdSupplier = document.getElementById('ref-supplier');
    const refIdSupplier = document.getElementById('ref-id-supplier');

    idSupplier.addEventListener('click', function() {
        inputIdSupplier.value = $(this).attr("data-id")
        refIdSupplier.value = $(this).attr("data-id")
    })
</script> -->

<?php echo $this->endSection(); ?>