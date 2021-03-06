 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            {{-- <img src="{{ asset('src/logo/logo.png') }}" alt="" width="100px"> --}}
            <h5>TPQ Al-Fatih</h5>
        </div>
        {{-- <div class="sidebar-brand-text mx-3">Hayyu Shopping</div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    
    <!-- Nav Item - List Pembayaran SPP-->
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('datasantri.index')}}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Santri</span></a>
   </li>
    <!-- Nav Item - List Pembayaran SPP-->
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('dataguru.index')}}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Guru</span></a>
   </li>
    <!-- Nav Item - List Pembayaran SPP-->
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('kategoribayarController.index')}}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Kategori Bayar</span></a>
   </li>
    <!-- Nav Item - List Pembayaran SPP-->
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('pembayaranSPPController.index')}}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Pembayaran SPP</span></a>
   </li>

     <!-- Nav Item - List Data Upload Pembayaran-->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('form.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>List Data Upload Pembayaran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

     <!-- Heading -->
     <div class="sidebar-heading">
        Setting
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('profile.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('manageAccount.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Manage Account</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
