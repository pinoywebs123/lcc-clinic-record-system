<aside>
      <div id="sidebar" class="nav-collapse ">
      
        <ul class="sidebar-menu">
          <li class="{{Request::segment(2) == 'home' ? 'active': ''}}">
            <a class="" href="{{route('admin_home')}}">
                  <i class="icon_house_alt"></i>
                  <span>Home </span>
            </a>
          </li>

           <li class="{{Request::segment(2) == 'students-list' ? 'active': ''}}">
            <a class="" href="{{route('admin_student_list')}}">
                  <i class="icon_id"></i>
                  <span>Students </span>
            </a>
          </li>

          <li class="{{Request::segment(2) == 'employee-list' ? 'active': ''}}">
            <a class="" href="{{route('admin_employee_list')}}">
                  <i class="icon_id-2_alt"></i>
                  <span>Employee </span>
            </a>
          </li>

          <li class="{{Request::segment(2) == 'clinic-student-list' ? 'active': ''}} {{Request::segment(2) == 'clinic-employee-list' ? 'active': ''}}">
            <a class="" href="{{route('clinic_student_list')}}">
                  <i class="icon_plus_alt"></i>
                  <span>Clinic </span>
            </a>
          </li>

          <li class="{{Request::segment(2) == 'medical-student-list' ? 'active': ''}} {{Request::segment(2) == 'medical-employee-list' ? 'active': ''}}">
            <a class="" href="{{route('medical_student_list')}}">
                  <i class="icon_datareport_alt"></i>
                  <span>Medical </span>
            </a>
          </li>
          
          
          
          
        </ul>
        
      </div>
    </aside>