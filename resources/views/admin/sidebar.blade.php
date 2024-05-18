<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><h1 class="input-color">HealthBooker</h1></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{URL::asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{URL::asset('admin/assets/images/faces/face15.jpg')}}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">Admin</h5>
            {{-- <span>Gold Member</span> --}}
          </div>
        </div>
        {{-- <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a> --}}
        {{-- <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div> --}}
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/home')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('all_users')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">All Users</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('add_doctor_view')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Add Doctors</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('manage_doctors')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Manage Doctors</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('add_news')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Add News</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('manage_news')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Manage News</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('show_appointments')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Appointments</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('showcontacts')}}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">All Contacts</span>
      </a>
    </li>
    <li class="nav-item menu-items">
        <span class="menu-title nav-link">Login As: {{Auth::user()->email}}</span>
      </a>
    </li>
  </ul>
</nav>