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
                                <h4 class="page-title">Produk Baru</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Reference</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input Produk Baru</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/inv-back/product" class="btn btn-sm btn-outline-primary"><i class="typcn typcn-chevron-left icon-xs">Kembali</i></a>
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
                                    <form method="post" action="/inv-back/product/store">
                                        <?php csrf_field() ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-end-date">Kategori</label>
                                                    <select class="form-control" name="product-category" required>
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($category as $cat) : ?>
                                                            <option value="<?php echo $cat->id ?>"><?php echo $cat->category_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-9 col-6 mb-2 mb-lg-0">
                                                    <label for="projectName">Nama Produk</label>
                                                    <input type="text" class="form-control <?php if ($validation->hasError('name')) {
                                                                                                echo "is-invalid";
                                                                                            } ?>" id="product-name" name="product-name" aria-describedby="emailHelp" autocomplete="off" />
                                                    <?php if ($validation->hasError('name')) : ?>
                                                        <div class="invalid-feedback">
                                                            <?php echo $validation->getError('name') ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName">Deskripsi</label>
                                            <textarea class="form-control" rows="2" name="product-description"></textarea>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-primary btn-md float-right">
                                            Simpan
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