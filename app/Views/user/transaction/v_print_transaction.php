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
                                <h4 class="page-title">Tanda Terima</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Transaksi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tanda Terima</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date"><span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                    <span class="" id="Select_date">Jan 11</span>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body invoice-head">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img src="/assets/images/final.png" alt="logo-small" class="logo-sm mr-1" height="24" />
                                    <p class="mt-2 mb-0 text-muted">
                                        Harita Nickel Obi Site
                                    </p>
                                </div>
                                <!--end col-->
                                <div class="col-md-8">
                                    <ul class="list-inline mb-0 contact-detail float-right">
                                        <li class="list-inline-item">
                                            <div class="pl-3">
                                                <i class="mdi mdi-web"></i>
                                                <p class="text-muted mb-0">
                                                    www.haritanickel.com
                                                </p>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                        <div class="card-body">
                            <div class="row">
                                <!--end col-->
                                <div class="col-md-3">
                                    <div class="float-left">
                                        <address class="font-13">
                                            <strong class="font-14">Karyawan : <?php echo $order['header']->name_emp ?></strong><br />
                                            <?php echo $order['header']->nik ?><br />
                                            <?php echo $order['header']->dept_name ?><br />
                                            <?php echo $order['header']->unit_name ?><br />
                                            <abbr title="Phone">P:</abbr> <?php echo $order['header']->position_name ?>
                                        </address>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-3">
                                    <div class="">
                                        <!-- <address class="font-13">
                                            <strong class="font-14">Shipped To:</strong><br />Joe
                                            Smith<br />795 Folsom Ave<br />San Francisco, CA
                                            94107<br /><abbr title="Phone">P:</abbr> (123)
                                            456-7890
                                        </address> -->
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-3">

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive project-invoice">
                                        <table class="table table-bordered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Material</th>
                                                    <th>SN</th>
                                                    <th>Category</th>
                                                    <th>Type</th>
                                                    <th>Tanggal Penggunaan</th>
                                                </tr>
                                                <!--end tr-->
                                            </thead>
                                            <tbody>
                                                <?php foreach ($order['detail'] as $detail) : ?>
                                                    <tr>
                                                        <td>
                                                            <h5 class="mt-0 mb-1 font-14"><?php echo $detail->product_name ?></h5>
                                                            <p class="mb-0 text-muted"><?php echo $detail->ref_product_id ?></p>
                                                        </td>
                                                        <td><?php echo $detail->serial_number ?></td>
                                                        <td><?php echo $detail->category_name ?></td>
                                                        <td><?php echo $detail->type_name ?></td>
                                                        <td><?php echo $detail->created_at ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <h5 class="mt-4">Terms And Condition :</h5>
                                    <ul class="pl-3">
                                        <li>
                                            <small class="font-12">All accounts are to be paid within 7 days from
                                                receipt of invoice.</small>
                                        </li>
                                        <li>
                                            <small class="font-12">To be paid by cheque or credit card or direct
                                                payment online.</small>
                                        </li>
                                        <li>
                                            <small class="font-12">If account is not paid within 7 days the credits
                                                details supplied as confirmation of work undertaken
                                                will be charged the agreed quoted fee noted
                                                above.</small>
                                        </li>
                                    </ul>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 align-self-end">
                                    <div class="float-right" style="width: 30%">
                                        <small><?php echo $order['header']->name_emp ?></small>
                                        <img src="assets/images/signature.png" alt="" class="mt-2 mb-1" height="26" />
                                        <p class="border-top"> <?php echo $order['header']->nik ?></p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <hr />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                    <div class="text-center">
                                        <small class="font-12">Thank you very much for doing business with
                                            us.</small>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12 col-xl-4">
                                    <div class="float-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-info"><i class="fa fa-print"></i></a>
                                    </div>
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
    </div>
</div>

<?php echo $this->endSection(); ?>