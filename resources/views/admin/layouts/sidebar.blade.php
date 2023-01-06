
<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="index.html">
    <img src="{{asset('assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
    <h5 class="logo-text">Admin</h5>
  </a>
</div>
<ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    
    <li>
      <a href="index.html">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <li>
      <a href="{{route('allUser')}}">
        <i class="zmdi zmdi-invert-colors"></i> <span>Account</span>
      </a>
    </li>
    
    <li>
      <a href="{{route('categoryadmin')}}">
        <i class="zmdi zmdi-invert-colors"></i> <span>Category</span>
      </a>
    </li>
    
    <li>
     <a href="{{route('all_orderAdmin')}}">
       <i class="zmdi zmdi-invert-colors"></i> <span>Orders</span>
     </a>
    </li>
  </ul>

</div>
<!--End sidebar-wrapper-->
