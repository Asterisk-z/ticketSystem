  <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar position-relative">
          <div class="multinav">
              <div class="multinav-scroll" style="height: 100%;">
                  <!-- sidebar menu-->
                  @if (Auth::user()->role == 'admin')
                      <ul class="sidebar-menu" data-widget="tree">
                          <li class="header">Dashboard</li>

                          <li class="{{ Request::is('home') ? 'active' : '' }}">
                              <a href="{{ route('home') }}">
                                  <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Dashboard</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('categories') ? 'active' : '' }}">
                              <a href="{{ route('admin.categories') }}">
                                  <i span class="icon-Layout-grid"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Categories</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('articles') ? 'active' : '' }}">
                              <a href="{{ route('admin.articles') }}">
                                  <i class="icon-Write"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Articles</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('users') ? 'active' : '' }}">
                              <a href="{{ route('admin.users') }}">
                                  <i class="icon-File"><span class="path1"></span><span
                                          class="path2"></span><span class="path3"></span></i>
                                  <span>Users</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('tickets') ? 'active' : '' }}">
                              <a href="{{ route('admin.tickets') }}">
                                  <i class="icon-Chart-pie"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Tickets</span>
                              </a>
                          </li>

                          <li class="">
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                  <i class="icon-Chat-locked"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Logout</span>
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                  @csrf
                              </form>
                          </li>
                      </ul>
                  @endif

                  @if (Auth::user()->role == 'agent')
                      <ul class="sidebar-menu" data-widget="tree">
                          <li class="header">Dashboard</li>

                          <li class="{{ Request::is('home') ? 'active' : '' }}">
                              <a href="{{ route('agent.dashboard') }}">
                                  <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Dashboard</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('articles') ? 'active' : '' }}">
                              <a href="{{ route('agent.articles') }}">
                                  <i class="icon-Write"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Articles</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('users') ? 'active' : '' }}">
                              <a href="{{ route('agent.users') }}">
                                  <i class="icon-File"><span class="path1"></span><span
                                          class="path2"></span><span class="path3"></span></i>
                                  <span>Users</span>
                              </a>
                          </li>

                          <li class="{{ Request::is('tickets') ? 'active' : '' }}">
                              <a href="{{ route('agent.tickets') }}">
                                  <i class="icon-Chart-pie"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Tickets</span>
                              </a>
                          </li>

                          <li class="">
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                  <i class="icon-Chat-locked"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Logout</span>
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                  @csrf
                              </form>
                          </li>
                      </ul>
                  @endif

                  @if (Auth::user()->role == 'customer')
                      <ul class="sidebar-menu" data-widget="tree">
                          <li class="header">Dashboard</li>

                          <li class="{{ Request::is('customer/') ? 'active' : '' }}">
                              <a href="{{ route('customer.dashboard') }}">
                                  <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Dashboard</span>
                              </a>
                          </li>


                          <li class="{{ Request::is('tickets') ? 'active' : '' }}">
                              <a href="{{ route('customer.tickets') }}">
                                  <i class="icon-Chart-pie"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Tickets</span>
                              </a>
                          </li>

                          <li class="">
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                  <i class="icon-Chat-locked"><span class="path1"></span><span
                                          class="path2"></span></i>
                                  <span>Logout</span>
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                  @csrf
                              </form>
                          </li>
                      </ul>
                  @endif


              </div>
          </div>
      </section>
  </aside>
