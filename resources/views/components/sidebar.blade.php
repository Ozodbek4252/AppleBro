<style>
  @media screen and (max-width: 991px) {
    .navbar-brand-box {
      display: none;
    }
  }
</style>
<div class="vertical-menu">

  <!-- LOGO -->
  <div class="navbar-brand-box" style="height: 70px; display: flex; justify-content: flex-start; align-items: center;">
    <a href="{{Route('dashboard')}}" class="logo logo-dark">
      <span class="logo-sm">
        <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
      </span>
      <span class="logo-lg">
        <img src="/assets/images/logo-dark.png" alt="" height="20" style="height: 20px;">
      </span>
    </a>

    <a href="{{Route('dashboard')}}" class="logo logo-light">
      <span class="logo-sm">
        <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
      </span>
      <span class="logo-lg">
        <img src="/assets/images/logo-light.png" alt="" height="20" style="height: 20px;">
      </span>
    </a>
  </div>

  <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
    <i class="fa fa-fw fa-bars"></i>
  </button>

  <div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
          <a href="{{ route('admin.category') }}" class="waves-effect">
            <i class="uil-apps"></i>
            {{-- <span class="badge rounded-pill bg-primary float-end">01</span> --}}
            <span>Category</span>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.products') }}" class="waves-effect">
            <i class="uil-apple-alt"></i>
            <span>Products</span>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.users') }}" class="waves-effect">
            <i class="uil-users-alt"></i>
            <span>Users</span>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.orders') }}" class="waves-effect">
            <i class=" uil-comment-dots"></i>
            <span class="badge rounded-pill bg-primary float-end">01</span>
            <span>Orders</span>
          </a>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
              <i class="uil-grid"></i>
              <span>Banners</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
              <li><a href="{{ route('admin.banners.index') }}">List</a></li>
              <li><a href="{{ route('admin.banners.create') }}">Create</a></li>
          </ul>
      </li>


      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
