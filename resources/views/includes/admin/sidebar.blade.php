<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Yusi</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">YUSI</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>

          <li>
            <a class="nav-link" href="/dashboard">
              <i class="fas fa-tachometer-alt"></i> 
              <span>Dashboard</span>
            </a>
          </li>

          {{-- <li>
            <a class="nav-link" href="#">
              <i class="far fa-square"></i> 
              <span>Data Artikel</span>
            </a>
          </li>   --}}

          <li>
            <a class="nav-link" href="/category">
              <i class="far fa-clone"></i> 
              <span>Kategori</span>
            </a>
          </li>
          
         
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="{{ route('logout') }}" 
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
          class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-sign-out-alt"></i> Logout
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
          </a>
        </div>
    </aside>
  </div>