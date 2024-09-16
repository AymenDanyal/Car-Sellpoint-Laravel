<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Banner
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('car.index') }}" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
      aria-controls="collapseOne">
      <i class="fas fa-image"></i>
      <span>Cars</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Cars Options:</h6>
        <a class="collapse-item" href="{{ route('car.index') }}">Cars</a>
        <a class="collapse-item" href="{{ route('car.create') }}">Add Car</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Categories</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Categories Options:</h6>
        <a class="collapse-item" href="">Categories</a>
        <a class="collapse-item" href="">Add Category</a>
      </div>
    </div>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Heading -->
  <div class="sidebar-heading">
    General Settings
  </div>

  <!-- Users -->
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-users"></i>
      <span>Users</span></a>
  </li>
  <!-- General settings -->
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-cog"></i>
      <span>Settings</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>