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
                                <h4 class="page-title">Report Simper</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active">Simper</li>
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5 class="mt-0">

                                <span class="badge badge-pink"></span>
                            </h5>
                        </li>
                    </ul>
                </div>
                <!--end col-->
                <div class="col-lg-6 text-right">
                    <div class="text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <button type="button" id="btnExport" onclick="htmlTableToExcel('xlsx')" class=" btn btn-primary btn-sm">
                                    Export
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end col-->
            </div>

            <!--end row--><!-- end page title end breadcrumb -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table table-sm mb-0" id="tabel-simper">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>ID-CARD</th>
                                            <th>Nama</th>
                                            <th>Departemen</th>
                                            <th>Posisi</th>
                                            <th>SIM / SIO</th>
                                            <th>Nomor Lisensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        for ($i = 0; $i < count($simper); $i++) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $simper[$i]['header']->nik ?></td>
                                                <td><?php echo $simper[$i]['header']->nip ?></td>
                                                <td><?php echo $simper[$i]['header']->name_emp ?></td>
                                                <td><?php echo $simper[$i]['header']->dept_name ?></td>
                                                <td><?php echo $simper[$i]['header']->position_name ?></td>
                                                <td><?php echo $simper[$i]['header']->sim_sio ?></td>
                                                <td><?php echo $simper[$i]['header']->license_number ?></td>
                                            </tr>
                                            <?php
                                            $noBawah = 2;
                                            for ($j = 0; $j < count($simper[$i]['detail']); $j++) { ?>
                                                <tr>
                                                    <td colspan="2"><?php echo $simper[$i]['detail'][$j]->unit_name ?></td>
                                                    <td colspan="2">Tes Praktek : <?php echo $simper[$i]['detail'][$j]->practice_test_date ?></td>
                                                    <td><?php echo $simper[$i]['detail'][$j]->practice_test_value ?></td>
                                                    <td>Tes Tulis : <?php echo $simper[$i]['detail'][$j]->theory_test_date ?></td>
                                                    <td><?php echo $simper[$i]['detail'][$j]->theory_test_value ?></td>
                                                    <td>Tes Mata : <?php echo $simper[$i]['detail'][$j]->eye_test_date ?></td>
                                                    <td><?php echo $simper[$i]['detail'][$j]->eye_name ?></td>
                                                    <td>Status Simper : <?php echo $simper[$i]['detail'][$j]->status_name ?></td>
                                                    <td>Note : <?php echo $simper[$i]['detail'][$j]->keterangan ?></td>
                                                </tr>
                                            <?php  } ?>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                                <!--end /table-->
                            </div>
                            <!--end /tableresponsive-->
                        </div>
                        <!--end card-body-->
                    </div>
                </div>
                <!-- end col -->
            </div>

        </div>
    </div>

    <!-- end row -->
    <!-- end page content -->
</div>

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    function htmlTableToExcel(type) {
        var data = document.getElementById('tabel-simper');
        var excelFile = XLSX.utils.table_to_book(data, {
            sheet: "sheet1"
        });
        XLSX.write(excelFile, {
            bookType: type,
            bookSST: true,
            type: 'base64'
        });
        XLSX.writeFile(excelFile, 'ExportedFile:HTMLTableToExcel.' + type);
    }
</script>


<?php echo $this->endSection(); ?>