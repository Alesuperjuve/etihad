<div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <h3 class="text-danger">UAE IT BIZ</h3>
                
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">AI </button>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                  <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium  dropdown-header">Software Developper</p>
                      <button type="button" class="btn btn-inverse-primary btn-sm">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="mdi mdi-logout text-primary"></i>
                                      {{ __('Log Out') }}
                                    </a>
                            </form>
                      </button>
                    </div>
                </li>
                
            </ul>
            
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
      <div class="container">
        <ul class="nav page-navigation">
            @foreach($menu as $item)
                <li class="nav-item">
                <a class="nav-link" href="{{ $item['link'] }}">
                <i class="{{ $item['icon'] }}"></i>
                <span class="menu-title">{{ $item['nama'] }}</span>
                </a>
                </li> 
            @endforeach
        </ul>

      </div>
      </nav>
    </div>