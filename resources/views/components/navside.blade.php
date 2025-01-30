<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
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
          </ul>

          
        </nav>