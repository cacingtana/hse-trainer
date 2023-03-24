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
                                <h4 class="page-title">Manajemen Akses User</h4>
                                <ol class="breadcrumb">
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
            <div class="card">
                <div class="card-header">
                    <div class="row my-2">
                        <div class="col">
                            <div class="media"><img src="/assets/images/users/user-5.jpg" alt="user" class="thumb-sm rounded">
                                <div class="media-body align-self-center ml-2">
                                    <h6 class="mt-0 mb-1 font-16"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></h6>
                                </div>
                                <!--end media body-->
                            </div>
                        </div>
                        <div class="col-auto"><button type="button" class="btn btn-sm btn-<?php if ($user->username) {
                                                                                                echo "primary";
                                                                                            } else {
                                                                                                echo "secondary";
                                                                                            } ?> px-3 mt-2"><?php echo $user->users_id; ?></button></div>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="general-label">
                        <form class="form" method="post" action="/inv-back/manage-access/update-credential">
                            <?php csrf_field() ?>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="username" name="user-name" value="<?php echo $user->username; ?>" />
                                <input type="hidden" name="user-id" value="<?php echo $user->users_id; ?>">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pass-word" value="<?php echo $user->password; ?>" />
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>