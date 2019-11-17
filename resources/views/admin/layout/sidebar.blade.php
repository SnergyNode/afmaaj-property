<!-- Sidebar -->
<ul class="navbar-nav  party-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon  ">
            <img src="{{ url('images/icon.jpg') }}" alt="" class="img-fit sidebar-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Afmaaj</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ @$active['dashboard'] }}">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item {{ @$active['slides'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlide" aria-expanded="true" aria-controls="collapseSlide">
            <i class="fas fa-fw fa-table"></i>
            <span>Home Slides</span>
        </a>
        <div id="collapseSlide" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Slides</h6>
                <a class="collapse-item" href="{{ route('slide.create') }}">New Slide</a>
                <a class="collapse-item" href="{{ route('slide.index') }}">Active Slides</a>
                <a class="collapse-item" href="#">Disabled</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ @$active['about'] }}">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-question"></i>
            <span>About</span></a>
    </li>
    <li class="nav-item {{ @$active['services'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true" aria-controls="collapseService">
            <i class="fas fa-fw fa-toolbox"></i>
            <span>Services</span>
        </a>
        <div id="collapseService" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Services</h6>
                <a class="collapse-item" href="#">New Service</a>
                <a class="collapse-item" href="#">Active Service</a>
                <a class="collapse-item" href="#">Disabled</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-question-circle"></i>
            <span>FAQ</span></a>
    </li>
    <li class="nav-item {{ @$active['gallery'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery" aria-expanded="true" aria-controls="collapseGallery">
            <i class="fas fa-fw fa-image"></i>
            <span>Images</span>
        </a>
        <div id="collapseGallery" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Images</h6>
                <a class="collapse-item" href="#">Upload</a>
                <a class="collapse-item" href="#">Gallery</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Human Resource
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ @$active['users'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Users</h6>
                <a class="collapse-item" href="{{ route('user.create') }}">New User</a>
                <a class="collapse-item" href="{{ route('user.index') }}">All Users</a>
                <a class="collapse-item" href="#">Disabled</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Clients</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Clients</h6>
                <a class="collapse-item" href="#">New Clients</a>
                <a class="collapse-item" href="#">All Clients</a>
                <a class="collapse-item" href="#">Disabled</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <div class="">
        <hr class="hr-fix">
    </div>



    <!-- Heading -->
    <div class="sidebar-heading">
        Projects
    </div>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#projects" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Projects</span>
        </a>
        <div id="projects" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Projects Mgt</h6>
                <a class="collapse-item" href="#">Prospective</a>
                <a class="collapse-item" href="#">Pending</a>
                <a class="collapse-item" href="#">Unfinished</a>
                <a class="collapse-item" href="#">Completed</a>
                <a class="collapse-item" href="#">Failed</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Reports
    </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Visitors</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->