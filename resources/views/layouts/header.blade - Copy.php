<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link" style="text-align: center">

    <span class="brand-text font-weight-light"> TIP Report  </span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">  -->
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>


    <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>  -->

    @if(session()->get('lang') == 'bangla')
    <a href="{{ route('language.english') }}" class="btn btn-info">English</a>
@else
    <a href="{{ route('language.bangla') }}" class="btn btn-info">Bangla</a>
@endif



    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item">
          <a href="{{ route('superadmin.dashboard') }}"
            class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
            <i class="nav-icon fas fa-th"></i>
            <p>

                @if(session()->get('lang') == 'bangla')
                ড্যাশবোর্ড
                    
                @else
                    Dashboard
                @endif


            </p>
          </a>
        </li>

        @if(auth()->user()->status == 1)
      @if(Auth::user()->can('registration.menu'))
      <li class="nav-item">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
          
          
                @if(session()->get('lang') == 'bangla')
                  রেজিস্টার ব্যবস্থাপনা
                    
                @else
                    Register Management 
                @endif 
        <i class="fas fa-angle-left right"></i>

      </p>
      </a>
      <ul class="nav nav-treeview">

      <li class="nav-item">

        <a href="{{ url('superadmin/ministry/create') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
                @if(session()->get('lang') == 'bangla')
                   মন্ত্রণালয় নিবন্ধন
                @else
            Ministry Registration  
                @endif </p>

        </a>
      </li>

      <li class="nav-item">

        <a href="{{ url('superadmin/agency/create') }}"
        class="nav-link @if(Request::segment(4) == 'superadmin') active @endif">
        <i class="far fa-circle nav-icon"></i>
        <p>      @if(session()->get('lang') == 'bangla')
               এজেন্সি নিবন্ধন মোহা 
                @else
            Agency Registration MoHA
                @endif </p>

        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('superadmin/agencymoib/create') }}" class="nav-link ">

        <i class="far fa-circle nav-icon"></i>
        <p>     @if(session()->get('lang') == 'bangla')
        এজেন্সি নিবন্ধন  এমওআইবি 
                @else
    Agency Registration MoIB
                @endif</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('superadmin/ctc/create') }}"
        class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
        <p>  @if(session()->get('lang') == 'bangla')
        সিটিসি নিবন্ধন 
                @else
Agency Registration MoIB
                @endif</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('superadmin/ngo/create') }}"
        class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
        <p>
             @if(session()->get('lang') == 'bangla')
      এনজিও নিবন্ধন 
                @else
                     NGO Registration
                @endif
    
         </p>
         
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('superadmin/ingo/create') }}"
        class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
        <p>
            
            
                @if(session()->get('lang') == 'bangla')
                     আইএনজিও নিবন্ধন 
                @else
                   INGO Registration 
                @endif 
        
        </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('superadmin/un/create') }}"
        class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
        <p>
            
               
                @if(session()->get('lang') == 'bangla')
                      ইউএন নিবন্ধন
                @else
                    UN Registration
                @endif 
        
            
            
            </p>
        </a>
      </li>
      </ul>
      </li>
    @endif
      @if(Auth::user()->can('location.menu'))
      <li class="nav-item">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
          
                @if(session()->get('lang') == 'bangla')
                           অবস্থান ব্যবস্থাপনা        
                @else
               Location Management  
                @endif 
        

          

        <i class="fas fa-angle-left right"></i>

      </p>
      </a>
      <ul class="nav nav-treeview">

      <li class="nav-item">

        <a href="{{ url('superadmin/all/division') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>     
        @if(session()->get('lang') == 'bangla')
                         বিভাগ             
                @else
                    All Division  
                @endif 
        </p>

        </a>
      </li>

      <li class="nav-item">

        <a href="{{ url('superadmin/all/distric') }}"
        class="nav-link @if(Request::segment(4) == 'superadmin') active @endif">
        <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
                বিভাগ         
            @else
                 All Division 
            @endif 
        </p>


        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('superadmin/all/upzila') }}"
        class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
              জেলা
            @else
                   All District 
            @endif 
        </p>
</a>
      </li>
      <li class="nav-item">
        <a href="{{ url('superadmin/all/union') }}"
        class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
                 উপজেলা
            @else
             All Upazila 
            @endif 
        </p>
        </a>
      </li>
      </ul>
      </li>


    @endif

      @if(Auth::user()->can('user.menu'))
      <li class="nav-item">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
             @if(session()->get('lang') == 'bangla')
                ব্যবহারকারী তৈরি  
            @else
 User Create 
            @endif 
         
        <i class="fas fa-angle-left right"></i>

      </p>
      </a>
      <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ url('superadmin/user/create') }}"
        class="nav-link @if(Request::segment(3) == 'superadmin') active @endif">
        <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
            তথ্য তৈরি
            @else
          Create Data
            @endif 
        </p>

        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('superadmin/user/list') }}"
        class="nav-link @if(Request::segment(3) == 'superadmin') active @endif">

        <i class="far fa-circle nav-icon"></i>
          <p>     
            @if(session()->get('lang') == 'bangla')
          ব্যবহারকারীর তালিকা
            @else
           User List 
            @endif 
        </p>
        </a>
      </li>

      </ul>
      </li>
    @endif



      @if(Auth::user()->can('case.menu'))
      <li class="nav-item">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
     
            @if(session()->get('lang') == 'bangla')
     তথ্য প্রদান 
            @else
  Data Entry 
            @endif 
      
        <i class="fas fa-angle-left right"></i>

      </p>
      </a>
      <ul class="nav nav-treeview">





      <li class="nav-item">

        <a href="{{ url('superadmin/case/create') }}"
        class="nav-link @if(Request::segment(4) == 'superadmin') active @endif">
        <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
            তথ্য তৈরি
            @else
       Create Data 
            @endif 
        </p>

        </a>
      </li>



      <li class="nav-item">
        <a href="{{ url('superadmin/case/list') }}" class="nav-link">

        <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
       তথ্য দেখুন
            @else
           View Data 
            @endif 
        </p>
        </a>
      </li>
      @if(auth()->user()->user_type == 1)

      <li class="nav-item">
      <a href="{{ url('superadmin/all/case') }}" class="nav-link">

      <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
       সকল তথ্য 
            @else
        All Data  
            @endif 
        </p>
      </a>
      </li>
    @endif
      @if(auth()->user()->user_type == "MoHA")

      <li class="nav-item">
      <a href="{{ url('superadmin/all/case') }}" class="nav-link">

      <i class="far fa-circle nav-icon"></i>
      <p>All Data</p>
      </a>
      </li>
    @endif
      </ul>
      </li>
    @endif
      @if(Auth::user()->can('role.menu'))
      <li class="nav-item">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
     @if(session()->get('lang') == 'bangla')
      রোল এবং পারমিশন/অনুমোদন 
            @else
         Role & Permission
            @endif 
        <i class="fas fa-angle-left right"></i>

      </p>
      </a>
      <ul class="nav nav-treeview">
      @if(Auth::user()->can('all.permission'))
      <li class="nav-item">

      <a href="{{ url('superadmin/all/permission') }}"
      class="nav-link @if(Request::segment(4) == 'superadmin') active @endif">
      <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
 অনুমোদনসমূহ 
            @else
All Permissions 
            @endif 
        </p>

      </a>
      </li>
    @endif
      @if(Auth::user()->can('all.role'))
      <li class="nav-item">
      <a href="{{ url('superadmin/all/role') }}"
      class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">
      <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
       সকল রোল/ভুমিকা 
            @else
All Roles
            @endif 
        </p>
      </a>
      </li>
    @endif
      @if(Auth::user()->can('allrole.permission'))
      <li class="nav-item">
      <a href="{{ url('superadmin/all/role/permission') }}"
      class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">
      <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
  সকল রোল/ভুমিকা রোল এবং অনুমোদন
            @else
All Role & Permissions
            @endif 
        </p>
      </a>
      </li>


      <li class="nav-item">
      <a href="{{ url('superadmin/all/question') }}"
      class="nav-link @if(Request::segment(2) == 'superadmin') active @endif">
      <i class="far fa-circle nav-icon"></i>
  <p>     
          
     
Question List
            
        </p>
      </a>
      </li>
    @endif

      </ul>
      </li>

    @endif

      @if(Auth::user()->can('all.report'))
      <li class="nav-item">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
 @if(session()->get('lang') == 'bangla')
  প্রতিবেদন 
            @else
Report
            @endif 
         
        <i class="fas fa-angle-left right"></i>

      </p>
      </a>
      <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ url('superadmin/report') }}" class="nav-link">

        <i class="far fa-circle nav-icon"></i>
      <p>     
            @if(session()->get('lang') == 'bangla')
    প্রতিবেদন প্রদর্শন 
            @else
View Report  
            @endif 
        </p>
        </a>
      </li>
      @if(auth()->user()->user_type == "Super Admin")
      <li class="nav-item">
      <a href="{{ url('superadmin/reports') }}" class="nav-link">

      <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
                  প্রতিবেদনসমূহ 
            @else
                Reports
            @endif 
        </p>
      </a>
      </li>
    @endif
      @if(auth()->user()->user_type == "Super Admin")
      <li class="nav-item">
      <a href="{{ url('superadmin/reports/summary_report') }}" class="nav-link">

      <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
                  রিপোর্ট লগ
            @else
                Report Log
            @endif 
        </p>
      </a>
      </li>
    @endif

    @if(auth()->user()->user_type == "Super Admin")
      <li class="nav-item">
      <a href="{{ url('superadmin/print/report') }}" class="nav-link">

      <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
                  প্রতিবেদন মুদ্রণ করুন
            @else
               
    Print Report
            @endif 
        </p>
      </a>
      </li>
    @endif

      </ul>
      </li>

    @endif




      <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
 
            @if(session()->get('lang') == 'bangla')
                  প্রোফাইল আপডেট করুন
            @else
                Update Profile
            @endif 
 
          <i class="fas fa-angle-left right"></i>

        </p>
        </a>
        <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{ url('superadmin/profile/change') }}" class="nav-link">

          <i class="far fa-circle nav-icon"></i>
  <p>     
            @if(session()->get('lang') == 'bangla')
    নিবন্ধন আপডেট করুন
            @else
       Update Registration 
            @endif 
        </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ url('superadmin/change/password') }}" class="nav-link">

          <i class="far fa-circle nav-icon"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
 পাসওয়ার্ড পরিবর্তন করুন
            @else
Change Password 
            @endif 
        </p>
          </a>
        </li>

        </ul>
      </li>

    @endif






        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
        <p>     
            @if(session()->get('lang') == 'bangla')
 লগআউট
            @else
logout
            @endif 
        </p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>