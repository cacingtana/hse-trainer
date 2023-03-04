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
                                <h4 class="page-title">Detail Produk</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Reference</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail Produk</li>
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
                                    <form method="post" action="/inv-back/product/update">
                                        <?php csrf_field() ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-end-date">Kategori</label>
                                                    <select class="form-control" name="product-category">
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($category as $cat) : ?>
                                                            <option value="<?php echo $cat->id ?>" <?php if ($product->category_id == $cat->id) {
                                                                                                        echo "selected";
                                                                                                    } ?>><?php echo $cat->category_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-9 col-6 mb-2 mb-lg-0">
                                                    <label for="projectName">Nama Produk</label>
                                                    <input type="hidden" class="form-control" value="<?php echo $product->product_id ?>" name="product-id" />
                                                    <input type="text" class="form-control" value="<?php echo $product->product_name ?>" name="product-name" aria-describedby="emailHelp" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName">Deskripsi</label>
                                            <textarea class="form-control" rows="2" name="product-description"><?php echo $product->product_description ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-end-date">Satuan</label>
                                                    <select class="form-control" name="product-status">
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($unit as $s) : ?>
                                                            <option value="<?php echo $s->id ?>" <?php if ($product->fert_id == $s->id) {
                                                                                                        echo "selected";
                                                                                                    } ?>><?php echo $s->fert_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-end-date">Status</label>
                                                    <select class="form-control" name="product-status">
                                                        <option>---Pilih---</option>
                                                        <?php foreach ($status as $s) : ?>
                                                            <option value="<?php echo $s->id ?>" <?php if ($product->product_status == $s->id) {
                                                                                                        echo "selected";
                                                                                                    } ?>><?php echo $s->status_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                        <!--end form-group-->
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