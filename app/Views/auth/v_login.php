<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/dastyle/default/auth-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 04:19:02 GMT -->

<head>
    <meta charset="utf-8" />
    <title>HSE Trainer</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="account-body accountbg">
    <!-- Lock screen page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="#" class="logo logo-admin"><img src="/assets/images/final.png" height="50" alt="logo" class="auth-logo" /></a>
                                    <?php if (session()->getFlashdata()) : ?>
                                        <?php $data = session()->getFlashdata(); ?>
                                        <p class="text-muted mb-0">
                                            Login Gagal, Periksa kembali username dan password anda...!
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal auth-form my-4" action="/credential/login" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="user-name" placeholder="Enter username" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="pass-word" placeholder="Enter password" autocomplete="off" />
                                        </div>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                                Login <i class="fas fa-sign-in-alt ml-1"></i>
                                            </button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                </form>
                                <!--end form-->
                                <p class="text-muted mb-0">
                                    Tidak Bisa Log In ?
                                    <a href="auth-register.html" class="text-primary ml-2">Kontak Administrator</a>
                                </p>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End lock screen page -->
    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/simplebar.min.js"></script>
</body>
<!-- Mirrored from mannatthemes.com/dastyle/default/auth-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 04:19:02 GMT -->

</html>