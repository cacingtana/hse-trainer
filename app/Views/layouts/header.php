    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="brand">
            <a href="#" class="logo"><span><img src="/assets/images/final.png" alt="logo-small" class="logo-sm" /> </span></a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="creat-btn">
                    <div class="nav-link">

                    </div>
                </li>
                <li class="dropdown hide-phone">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i data-feather="search" class="topbar-icon"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                        <!-- Top Search Bar -->
                        <div class="app-search-topbar">
                            <form action="#" method="get">
                                <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text..." />
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i data-feather="bell" class="align-self-center topbar-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">0</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                        <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                            Notifikasi
                            <span class="badge badge-primary badge-pill">0</span>
                        </h6>
                        <div class="notification-menu" data-simplebar>

                            <!-- item-->
                            <a href="#" class="dropdown-item py-3"><small class="float-right text-muted pl-2">2 Jam Lalu</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">
                                            Tidak ada notifikasi
                                        </h6>
                                        <small class="text-muted mb-0"></small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><span class="ml-1 nav-user-name hidden-sm ml-3"></span>
                        <img src="/assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" /></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i>
                            <?php echo session()->get('profile')['fullname'] ?></a>



                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="/inv-back/privacy"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i>
                            Settings</a>
                        <a class="dropdown-item" href="/credential/logout"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i>
                            Keluar</a>
                    </div>
                </li>
                <li class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link" id="mobileToggle">
                        <div class="lines">
                            <span></span> <span></span> <span></span>
                        </div>
                    </a><!-- End mobile menu toggle-->
                </li>
                <!--end menu item-->
            </ul>
            <!--end topbar-nav-->
            <div class="navbar-custom-menu">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="/dashboard"><span><i data-feather="home" class="align-self-center hori-menu-icon"></i>Dashboard</span></a>
                            <!--end submenu-->
                        </li>

                        <li class="has-submenu">
                            <a href="/simper"><span><i data-feather="grid" class="align-self-center hori-menu-icon"></i>Simper</span></a>
                        </li>
                        <li class="has-submenu">
                            <a href="/commisioning"><span><i data-feather="grid" class="align-self-center hori-menu-icon"></i>Commisioning</span></a>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><span><i data-feather="box" class="align-self-center hori-menu-icon"></i>Report</span></a>
                            <ul class="submenu">
                                <li>
                                    <a href="/inv-back/report/simper"><i class="ti ti-minus"></i>Simper</a>
                                </li>
                                <li>
                                    <a href="/inv-back/report/commisioning"><i class="ti ti-minus"></i>Commisioning</a>
                                </li>
                            </ul>
                            <!--end submenu-->
                        </li>

                        <?php if (intval(session()->get('profile')['role']) == 1) { ?>
                            <li class="has-submenu">
                                <a href="#"><span><i data-feather="lock" class="align-self-center hori-menu-icon"></i>Authentikasi</span></a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Pengguna</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="/inv-back/user"><i class="ti ti-minus"></i>User</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/inv-back/role"><i class="ti ti-minus"></i>Level Pengguna</a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>

                            <li class="has-submenu">
                                <a href="#"><span><i data-feather="layers" class="align-self-center hori-menu-icon"></i>Ref & Pengaturan</span></a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Reference</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="/inv-back/coorporate"><i class="ti ti-minus"></i>Unit Business</a>
                                            </li>
                                            <li>
                                                <a href="/inv-back/departments"><i class="ti ti-minus"></i>Departemen</a>
                                            </li>
                                            <li>
                                                <a href="/inv-back/position"><i class="ti ti-minus"></i>Posisi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/inv-back/employee"><i class="ti ti-minus"></i>Karyawan</a>
                                    </li>
                                    <li>
                                        <a href="/inv-back/vehicle"><i class="ti ti-minus"></i>Unit / Kendaraan</a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                        <?php } ?></a>
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end navigation -->
            </div>
            <!-- Navbar -->
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->