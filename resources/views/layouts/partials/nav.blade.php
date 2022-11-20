 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset('Dashboard/dist/img/LOGO.png')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn btn-outline-danger my-2">تسجيل الخروج</button>
            </form>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <!--- Start Services --->
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                       التصنيفات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('dashboard.categories.index')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>جميع التصنيفات</p>
                  </a>
                </li>
              </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dashboard.categories.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>إضافة تصنيف جديد</p>
                </a>
              </li>
            </ul>
          </li>
               <!--- End Services --->



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
