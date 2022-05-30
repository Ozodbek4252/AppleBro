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
      <a href="/dashboard" class="logo logo-dark">
          <span class="logo-sm">
              <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
          </span>
          <span class="logo-lg">
              <img src="/assets/images/logo-dark.png" alt="" height="20" style="height: 20px;">
          </span>
      </a>

      <a href="/dashboard" class="logo logo-light">
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


              <li class="menu-title">Apps</li>


              <li>
                  <a href="chat.html" class="waves-effect">
                      <i class="uil-comments-alt"></i>
                      <span class="badge rounded-pill bg-warning float-end">New</span>
                      <span>Chat</span>
                  </a>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="uil-store"></i>
                      <span>Ecommerce</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="ecommerce-products.html">Products</a></li>
                      <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                      <li><a href="ecommerce-orders.html">Orders</a></li>
                      <li><a href="ecommerce-customers.html">Customers</a></li>
                      <li><a href="ecommerce-cart.html">Cart</a></li>
                      <li><a href="ecommerce-checkout.html">Checkout</a></li>
                      <li><a href="ecommerce-shops.html">Shops</a></li>
                      <li><a href="ecommerce-add-product.html">Add Product</a></li>
                  </ul>
              </li>




          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>