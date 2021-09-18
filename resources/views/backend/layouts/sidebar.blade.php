<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('assets/backend') }}/img/avatars/avatar.jpg"
                        class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                </div>
                <div class="flex-grow-1 ps-2" style="align-self: center;">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Phạm Ngọc Linh
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                            Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings &
                            Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                            Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <!-- Dashboard -->
            <li class="sidebar-item active">
                <a data-bs-target="#dashboards" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i><span class="align-middle">Dashboards</span>
                </a>
            </li>

            <!-- Categories -->
            <li class="sidebar-item">
                <a data-bs-target="#categories" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fa fa-list-alt"></i> <span class="align-middle">Categories</span>
                </a>
                <ul id="categories" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('categories.index') }}">Category
                            Manager</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('categories.trash') }}">Categories
                            trash</a></li>
                </ul>
            </li>

            <!-- Room -->
            <li class="sidebar-item">
                <a data-bs-target="#rooms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fas fa-hotel"></i> <span class="align-middle">Rooms</span>
                </a>
                <ul id="rooms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('rooms.index') }}">Room Manager</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('rooms.create') }}">Add new room</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('rooms.trash') }}">Room trash</a>
                    </li>
                </ul>
            </li>

            <!-- Banner -->
            <li class="sidebar-item">
                <a data-bs-target="#banner" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="far fa-images"></i> <span class="align-middle">Banners</span>
                </a>
                <ul id="banner" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="">Add new banner</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Edit banner</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Banner trash</a></li>
                </ul>
            </li>

            <!-- Slide -->
            <li class="sidebar-item">
                <a data-bs-target="#slide" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fas fa-image"></i> <span class="align-middle">Slides</span>
                </a>
                <ul id="slide" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="">Add new banner</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Edit banner</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Banner trash</a></li>
                </ul>
            </li>

            <!-- Service -->
            <li class="sidebar-item">
                <a data-bs-target="#service" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fas fa-concierge-bell"></i> <span class="align-middle">Services</span>
                </a>
                <ul id="service" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="">Add new service</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Edit service</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Services trash</a></li>
                </ul>
            </li>

            <!-- Blog -->
            <li class="sidebar-item">
                <a data-bs-target="#blog" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="far fa-edit"></i> <span class="align-middle">Blogs</span>
                </a>
                <ul id="blog" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="">Add new blog</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Edit blog</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Blogs trash</a></li>
                </ul>
            </li>

            <!-- User -->
            <li class="sidebar-item">
                <a data-bs-target="#user" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fas fa-user"></i> <span class="align-middle">Users</span>
                </a>
                <ul id="user" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="">Add new blog</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Edit blog</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Blogs trash</a></li>
                </ul>
            </li>

            <!-- Faq -->
            <li class="sidebar-item">
                <a data-bs-target="#faq" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fas fa-question-circle"></i> <span class="align-middle">Faq</span>
                </a>
                <ul id="faq" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="">Add new Faq</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Edit Faq</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Faq trash</a></li>
                </ul>
            </li>

            <!-- Order -->
            <li class="sidebar-item">
                <a class="sidebar-link collapsed">
                    <i class="fas fa-file-invoice"></i> <span class="align-middle">Orders</span>
                </a>
            </li>

            <!-- Config -->
            <li class="sidebar-item">
                <a data-bs-target="#banners" class="sidebar-link collapsed">
                    <i class="fas fa-sliders-h"></i> <span class="align-middle">Config</span>
                </a>
            </li>

        </ul>
    </div>
</nav>