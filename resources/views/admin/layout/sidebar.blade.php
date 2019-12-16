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
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
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

    <li class="nav-item {{ @$active['location'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#locationz" aria-expanded="true" aria-controls="locationz">
            <i class="fas fa-fw fa-map"></i>
            <span>Locations</span>
        </a>
        <div id="locationz" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Locations</h6>
                <a class="collapse-item" href="{{ route('location.create') }}">New Location</a>
                <a class="collapse-item" href="{{ route('location.index') }}">Active Location</a>
                <a class="collapse-item" href="#">Disabled</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ @$active['property'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#property" aria-expanded="true" aria-controls="property">
            <i class="fas fa-fw fa-building"></i>
            <span>Property</span>
        </a>
        <div id="property" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Property</h6>
                <a class="collapse-item" href="{{ route('property.create') }}">New Property</a>
                <a class="collapse-item" href="{{ route('property.index') }}">Active Property </a>
                <a class="collapse-item" href="#">Property</a>
            </div>
        </div>
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
        Admin
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


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->