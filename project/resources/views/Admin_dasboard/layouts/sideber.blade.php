<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item {{ 'dashboard'==request()->path()?'active':'' }}" >
        <a class="nav-link " href="{{ url('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" class="{{ 'input'==request()->path()?'active':'' }}">
          <i class="bi bi-menu-button-wide " ></i><span>Content Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/input') }}" class="{{ 'input'==request()->path()?'active':'' }}">
              <i class="bi bi-circle "></i><span>Content Create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/list') }}">
              <i class="bi bi-circle"></i><span>Content list</span>
            </a>
          </li>
          {{--  <li>
            <a href="{{ url('/')  }}">
              <i class="bi bi-circle"></i><span>Content-Data show</span>
            </a>
          </li>  --}}

            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Setting Control</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          {{--  <li>
            <a href="{{ url('setting') }}">
              <i class="bi bi-circle"></i><span>Setting Create</span>
            </a>
          </li>  --}}
          <li>
            <a href="{{ url('setting/list') }}">
              <i class="bi bi-circle"></i><span>Setting list</span>
            </a>
          </li>
          <li>
          {{--  <li>
            <a href="{{ url('/') }}">
              <i class="bi bi-circle"></i><span>Setting-view</span>
            </a>
          </li>  --}}
          <li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Catagory Control</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('catagory') }}">
              <i class="bi bi-circle"></i><span>Catagory Create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('catagory/list') }}">
              <i class="bi bi-circle"></i><span>Catagory list</span>
            </a>
          </li>
          {{--  <li>
            <a href="{{ url('/') }}">
              <i class="bi bi-circle"></i><span>Catagory-view</span>
            </a>
          </li>  --}}
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Message Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('contect') }}">
              <i class="bi bi-circle"></i><span>Message Send</span>
            </a>
          </li>
          <li>
            <a href="{{ url('contect/list') }}">
              <i class="bi bi-circle"></i><span>Message Recive</span>
            </a>
          </li>

        </ul>


  </aside><!-- End Sidebar-->

                </div>

              </div>
            </div><!-- End Reports -->



  </main><!-- End #main -->
