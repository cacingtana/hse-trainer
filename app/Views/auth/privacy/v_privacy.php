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
                                <h4 class="page-title">Profile</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Dastyle</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="/dashboard" class="btn btn-sm btn-outline-primary"><i class="typcn typcn-chevron-left icon-xs">Kembali</i></a>
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
                        <!--end card-body-->
                        <div class="card-body">
                            <div class="dastyle-profile">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                        <div class="dastyle-profile-main">
                                            <div class="dastyle-profile_user-detail">
                                                <h5 class="dastyle-user-name">Rosa Dodson</h5>
                                                <p class="mb-0 dastyle-user-name-post">
                                                    UI/UX Designer, India
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4 ml-auto align-self-center">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                <i class="las la-phone mr-2 text-secondary font-22 align-middle"></i>
                                                <b>phone </b>: +91 23456 78910
                                            </li>
                                            <li class="mt-2">
                                                <i class="las la-envelope text-secondary font-22 align-middle mr-2"></i>
                                                <b>Email </b>: mannat.theme@gmail.com
                                            </li>
                                            <li class="mt-2">
                                                <i class="las la-globe text-secondary font-22 align-middle mr-2"></i>
                                                <b>Website </b>:
                                                <a href="https://mannatthemes.com/" class="font-14 text-primary">https://mannatthemes.com/</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="row">
                                            <div class="col-auto text-right border-right">
                                                <button type="button" class="btn btn-soft-primary btn-icon-circle-sm mb-2">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                                <p class="mb-0 font-weight-semibold">Facebook</p>
                                                <h4 class="m-0 font-weight-bold">
                                                    25k
                                                    <span class="text-muted font-12 font-weight-normal">Followers</span>
                                                </h4>
                                            </div>
                                            <!--end col-->
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-soft-info btn-icon-circle-sm mb-2">
                                                    <i class="fab fa-twitter"></i>
                                                </button>
                                                <p class="mb-0 font-weight-semibold">Twitter</p>
                                                <h4 class="m-0 font-weight-bold">
                                                    58k
                                                    <span class="text-muted font-12 font-weight-normal">Followers</span>
                                                </h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end f_profile-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="pb-4">
                <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#Profile_Settings">Settings</a>
                    </li>
                </ul>
            </div>
            <!--end card-body-->
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
                            <div class="row">
                                <!--end col-->
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Change Password</h4>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="password" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="password" placeholder="New Password" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="password" placeholder="Re-Password" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Ganti Password
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!-- end col -->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>