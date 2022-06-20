<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('liondev_admin/fonts/circular-std/style.css') }}" rel="stylesheet">

    <link rel="icon" type="image/ico" href="{{ asset('installer/img/lion-5.ico') }}"/>

    <link rel="stylesheet" href="{{ asset('liondev_admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('liondev_admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('liondev_admin/fonts/fontawesome/css/fontawesome-all.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>LionDev | trang quản trị</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-sm bg-white fixed-top">
                <a class="navbar-brand" href="index.html">LionDev</a>
                <div class="nav-item dropdown nav-user order-1" style="border-right: 1px solid #e6e6f2;">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('') }}img/showimg/{{ Auth::user()->img }}" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }}</h5>
                            {{-- <span class="status"></span><span class="ml-2">Chức vụ</span> --}}
                        </div>
                        <a class="dropdown-item" href="{{ route('admin_info') }}"><i class="fas fa-user mr-2"></i>Tài khoản</a>
                        <a class="dropdown-item" href="{{ route('admin_logout') }}"><i class="fas fa-power-off mr-2"></i>Đăng xuất</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i>
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.4C0 4.15979 0 3.03969 0.435974 2.18404C0.819467 1.43139 1.43139 0.819467 2.18404 0.435974C3.03969 0 4.15979 0 6.4 0H11.6C13.8402 0 14.9603 0 15.816 0.435974C16.5686 0.819467 17.1805 1.43139 17.564 2.18404C18 3.03969 18 4.15979 18 6.4V7.6C18 9.84021 18 10.9603 17.564 11.816C17.1805 12.5686 16.5686 13.1805 15.816 13.564C14.9603 14 13.8402 14 11.6 14H4.41421C4.149 14 3.89464 14.1054 3.70711 14.2929L1.70711 16.2929C1.07714 16.9229 0 16.4767 0 15.5858V14V9V6.4ZM6 4C5.44772 4 5 4.44772 5 5C5 5.55228 5.44772 6 6 6H12C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4H6ZM6 8C5.44772 8 5 8.44772 5 9C5 9.55228 5.44772 10 6 10H9C9.55228 10 10 9.55228 10 9C10 8.44772 9.55228 8 9 8H6Z" fill="#82849F"/>
                                        </svg>
                                        
                                </i> 
                                <span class="indicator-mes"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">Tin nhắn</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Người nhắn</span>Nội dung
                                                        <div class="notification-date">2 giờ trước</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Hiển thị tất cả tin nhắn</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">Thông báo</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Hiển thị tất cả thông báo</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Danh mục</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('admin_home') }}">
                                    <i class="fas fa-chart-pie fa"></i>
                                    Tổng quan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                                    <i class="fa fas fa-street-view"></i>Quản lý tài khoản<noscript></noscript></a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cards.html">Danh sách</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/carousel.html">Vai trò</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                                    <i class="fas fas fa-th"></i>Sản phẩm và dịch vụ</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="messenger.html">
                                    <i class="fas fa-comments fa"></i>
                                    Nhắn tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">
                                    <i class="fas fa-cog fa"></i>Cài đặt<noscript></noscript></a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="setting-basic.html">Cấu hình cơ bản</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="setting-exalt.html">Cấu hình nâng cao</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="index.html">
                                    <i class="far fa-paper-plane fa"></i>
                                    Giao diện người dùng</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="influence-finder">
                <div class="container-fluid dashboard-content">
                    @yield('content')
                </div>

            </div>

        </div>

</body>
             <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <script src="{{ asset('liondev_admin/jquery/jquery-3.3.1.min.js') }}"></script>
            <script src="{{ asset('liondev_admin/bootstrap/js/bootstrap.bundle.js') }}"></script>
            <!-- slimscroll js -->
            <script src="{{ asset('liondev_admin/slimscroll/jquery.slimscroll.js') }}"></script>
            <!-- main js -->
            <script src="{{ asset('liondev_admin/libs/js/main-js.js') }}"></script>
            <script src="{{ asset('liondev_admin/libs/js/event.js') }}"></script>
</html>