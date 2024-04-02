<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="{{route('AdminDashboard')}}" class="brand-link">
        
       <img src="{{asset('admin/images/not_image.jpeg')}}" alt="NFC" class="brand-image img-circle elevation-3" style="opacity: .8;">
       <h5>Beverages </h5>
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- @if(auth()->user()->profile_image)
                <img src="{{url(auth()->user()->profile_image) }}" class="img-circle elevation-2" alt="">
                @else
                <img src="{{ asset('admin/images/not_image.jpeg') }}" class="img-circle elevation-2" alt="">
                @endif --}}
            </div>
            <div class="info">
                <a href="{{route('AdminDashboard')}}" class="d-block">{{auth()->user()->name ?? ""}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               
            <li class="nav-item">
                <a href="{{route('AdminDashboard')}}" class="nav-link {{ (request()->is('/')) ? 'active-child' : '' }}">
                    <!-- <i class="fas fa-key nav-icon"></i> -->
                    <img src="{{ asset('user.png') }}" class="nav-icon" alt="" width="10px">
                    <p>Company Management</p>
                </a>
            </li>  
            <li class="nav-item">
                <a href="{{route('AdminDashboard')}}" class="nav-link {{ (request()->is('/')) ? 'active-child' : '' }}">
                    <!-- <i class="fas fa-key nav-icon"></i> -->
                    <img src="{{ asset('user.png') }}" class="nav-icon" alt="" width="10px">
                    <p>Employee Management</p>
                </a>
            </li>   
            <li class="nav-item">
                <a href="{{url('/logout')}}" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
   
    <!-- /.sidebar -->
</aside>