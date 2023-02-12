 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{url('admin-dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{url('admin')}}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('list')}}">
      <i class="bi bi-grid"></i>
      <span>Category</span>
    </a>
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('listed')}}">
      <i class="bi bi-grid"></i>
      <span>Subcategory</span>
    </a>
  </li><!-<!-- End Profile Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('brand.list')}}">
      <i class="bi bi-grid"></i>
      <span>Brands</span>
    </a>
  </li><!-<!-- End Profile Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('product.list')}}">
      <i class="bi bi-grid"></i>
      <span>Product</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('customer.list')}}">
      <i class="bi bi-grid"></i>
      <span>Customer</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('user.tabel')}}">
      <i class="bi bi-grid"></i>
      <span>User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('order.list')}}">
    <i class="fa fa-angellist"</i>
      <span>Order</span>
    </a>
  </li>
</ul>

</aside><!-- End Sidebar-->