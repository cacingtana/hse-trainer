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
                                <h4 class="page-title">Detail Karyawan</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Reference</a>
                                    </li>
                                    <li class="breadcrumb-item active">Karyawan</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/inv-back/employee" class="btn btn-sm btn-outline-primary"><i class="typcn typcn-chevron-left icon-xs">Kembali</i></a>
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
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Form Update Data Karyawan</h4>
                                    <p class="text-muted mb-0">

                                    </p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="/inv-back/employee/update">
                                        <?php csrf_field() ?>

                                        <div class="form-group">
                                            <div class="card-body"><a class="user-avatar mr-2" href="#"><img src="/photo/<?php echo $employee->images_emp ?>" alt="user" class="thumb-xxl rounded" width="20px"> </a></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="projectName">NIK</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                                </div>
                                                <input type="text" name="nik" value="<?php echo $employee->nik ?>" class="form-control">
                                                <input type="hidden" name="employee-id" value="<?php echo $employee->id_emp ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName">ID CARD</label>
                                            <input type="text" class="form-control" name="nip" value="<?php echo $employee->nip ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName">Nama</label>
                                            <input type="text" class="form-control" name="name-emp" value="<?php echo $employee->name_emp ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName">SIM / SIO</label>
                                            <input type="text" class="form-control" name="sim-sio" value="<?php echo $employee->sim_sio ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName">License Number</label>
                                            <input type="text" class="form-control" name="license-number" value="<?php echo $employee->license_number ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input">Jenis Kelamin</label>
                                            <select class="form-control" name="sex" required>
                                                <?php foreach ($sex as $cat) : ?>
                                                    <option value="<?php echo $cat->id ?>"><?php echo $cat->sex_name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <!--end col-->
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="projectName">Tanggal Expire Probation</label>
                                                    <input type="date" class="form-control" name="date-expired-request" value="<?php echo $employee->date_expired_request ?>" />
                                                </div>
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="projectName">Tanggal Expire SIM/SIO</label>
                                                    <input type="date" class="form-control" name="date-expired-sim-sio" value="<?php echo $employee->date_expired_sim_sio ?>" />
                                                </div>

                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <div class="row">
                                                <!--end col-->
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-start-date">Unit Business</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select" name="bu" required>
                                                            <?php foreach ($bu as $s) : ?>
                                                                <option value="<?php echo $s->id ?>" <?php if ($employee->ref_coorporate_id == $s->id) {
                                                                                                            echo "selected";
                                                                                                        } ?>><?php echo $s->coorporate_name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-start-date">Warga Negara</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select" name="type-emp" required>
                                                            <?php foreach ($typeEmployee as $s) : ?>
                                                                <option value="<?php echo $s->id ?>" <?php if ($employee->type_emp == $s->id) {
                                                                                                            echo "selected";
                                                                                                        } ?>><?php echo $s->type_employee ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-start-date">Departemen</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select" name="dept" required>
                                                            <?php foreach ($dept as $s) : ?>
                                                                <option value="<?php echo $s->id ?>" <?php if ($employee->ref_department_id == $s->id) {
                                                                                                            echo "selected";
                                                                                                        } ?>><?php echo $s->dept_name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-start-date">Posisi</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select" name="position" required>
                                                            <?php foreach ($position as $s) : ?>
                                                                <option value="<?php echo $s->id ?>" <?php if ($employee->ref_position_id == $s->id) {
                                                                                                            echo "selected";
                                                                                                        } ?>><?php echo $s->position_name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                    <label for="pro-start-date">Status</label>
                                                    <div class="col-sm-10">
                                                        <select class="custom-select" name="status" required>
                                                            <?php foreach ($status as $s) : ?>
                                                                <option value="<?php echo $s->id ?>" <?php if ($employee->status_emp == $s->id) {
                                                                                                            echo "selected";
                                                                                                        } ?>><?php echo $s->status_name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-primary btn-sm float-right">
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


    <div class="modal fade bd-example-modal-lg" id="search-supplier" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel">
                        Large Modal
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-times"></i></span>
                    </button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">

                            <!--end card-header-->
                            <div class="card-body">
                                <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap" style="
                      border-collapse: collapse;
                      border-spacing: 0;
                      width: 100%;
                    ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                        Close
                    </button>
                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
</div>

<?php echo $this->endSection(); ?>