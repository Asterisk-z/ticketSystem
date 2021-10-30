  <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar position-relative">
          <div class="multinav">
              <div class="multinav-scroll" style="height: 100%;">
                  <!-- sidebar menu-->
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
                          <a href="{{ route('home') }}">
                              <i span class="icon-Layout-grid"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Categories</span>
                          </a>
                      </li>

                      <li class="{{ Request::is('department') ? 'active' : '' }}">
                          <a href="{{ route('home') }}">
                              <i class="icon-Write"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Articles</span>
                          </a>
                      </li>

                      <li class="{{ Request::is('student') ? 'active' : '' }}">
                          <a href="{{ route('home') }}">
                              <i class="icon-File"><span class="path1"></span><span
                                      class="path2"></span><span class="path3"></span></i>
                              <span>Users</span>
                          </a>
                      </li>

                      <li class="{{ Request::is('payment') ? 'active' : '' }}">
                          <a href="{{ route('home') }}">
                              <i class="icon-Chart-pie"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Ticket</span>
                          </a>
                      </li>

                      <li class="">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                              <i class="icon-Chat-locked"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Logout</span>
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
              </div>
          </div>
      </section>
  </aside>
