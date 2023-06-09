<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ url ('layout/home')}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>
<li class="nav-header"> Master Data </li>
<li class="nav-item">
    <a href="../../index.html" class="nav-link">
        <i class="bi bi-clipboard-data-fill"></i>
        <img src="{{ asset('/assets/img/clipboard-data-fill.svg') }}">
        <p>
            Data
            <i class="right fas fa-angle-left"> </i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ url('tamu')}}" class="nav-link">
                <i class="nav-icon fas fa-users"> </i>
                <p> Tamu </p>
            </a>
        </li>
    </ul>
</li>
    </ul>
</nav>
