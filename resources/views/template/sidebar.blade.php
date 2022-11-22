<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('dashboard')}}"><i class="fas fa-user text-white"></i> <i class="text-white">PPDB</i> <i class="fas fa-user text-white text-white"></i></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('dashboard')}}"> <i class="text-white">PPDB</i> </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
          <li class="{{ request()->is('dashboard*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('dashboard')}}"> 
            <i class="fas fa-clipboard"></i> 
            <span> Dashboard</span></a>
          </li>


        <li class="menu-header">Master</li>

        <li class="{{ request()->is('siswa*') ? 'active' : ''}}">
          <a class="nav-link" href="{{route('siswa.index')}}"> 
          <i class="fas fa-box"></i> 
          <span> Siswa</span></a>
        </li>

        <li class="{{ request()->is('jurusan*') ? 'active' : ''}}">
          <a class="nav-link" href="{{route('jurusan.index')}}"> 
          <i class="fas fa-list"></i> 
          <span> Jurusan</span></a>
        </li>

        <li class="menu-header">Setting</li>
        <li class="{{ request()->is('user*') ? 'active' : ''}}">
          <a class="nav-link" href=""> 
          <i class="fas fa-user"></i> 
          <span> User</span></a>
        </li>

        <li class="{{ request()->is('setting*') ? 'active' : ''}}">
          <a class="nav-link" href=""> 
          <i class="fas fa-cog"></i> 
          <span> setting</span></a>
        </li>
        
        
        
      </ul>

      </aside>
  </div>