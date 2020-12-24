<style type="text/css">
  body.vertical-layout.vertical-menu.menu-expanded .main-menu .navigation li.has-sub>a:not(.mm-next):after{
    display: none;
  }

</style>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{url('/')}}/public/assets/app-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('Admin/Dashboard')}}"><img class="brand-logo"  src="{{url('/')}}/public/frontend/assets/images/logo.png"/>
              <h3 class="brand-text">Rajput Tutorials</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="navigation-background"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="{{route('Admin/Dashboard')}}"><i class="fa fa-dashboard"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
           
          </li>
         

         <li class=" nav-item"><a href="#"><i class="fa fa-image"></i><span class="menu-title" data-i18n="">Gallery</span></a>
            <ul class="menu-content">
             
              <li><a class="menu-item" href="#">Banner</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Banner')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Banner/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Images</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Images')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Images/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Videos</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Videos')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Videos/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>
             
            </ul>
          </li>


          <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span class="menu-title" data-i18n="">Core Member</span></a>
            <ul class="menu-content">
             
              <li><a class="menu-item" href="#">Team</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Team')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Team/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Testimonials</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Testimonials')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Testimonials/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>




             
            </ul>
          </li>

           <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span class="menu-title" data-i18n="">Toppers</span></a>
            <ul class="menu-content">
             
              <li><a class="menu-item" href="#">Result</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Result')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Result/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Result Category</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/ResultCategory')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/ResultCategory/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

             
            </ul>
          </li>


          <li class=" nav-item"><a href="#"><i class="fa fa-envelope"></i><span class="menu-title" data-i18n="">Enquiries</span></a>
            <ul class="menu-content">
            <li><a class="menu-item" href="{{route('Admin/Contacts')}}">Contact</a></li>
            <li><a class="menu-item" href="{{route('Admin/Admission')}}">Admission</a></li>
            <li><a class="menu-item" href="{{route('Admin/Career')}}">Career</a></li>
            </ul>
          </li>

           <li class=" nav-item"><a href="#"><i class="fa fa-bell"></i><span class="menu-title" data-i18n="">Announcement</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('Admin/Notification')}}">Manage </a>
              </li>
              <li><a class="menu-item" href="{{route('Admin/Notification/Add')}}">Add New</a>
              </li>
            </ul>
          </li>

           <li class=" nav-item"><a href="#"><i class="fa fa-list"></i><span class="menu-title" data-i18n="">Student Corner</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('Admin/StudentCorner')}}">Manage </a>
              </li>
              <li><a class="menu-item" href="{{route('Admin/StudentCorner/Add')}}">Add New</a>
              </li>
            </ul>

            <ul>
              <li><a class="menu-item" href="#">Subject</a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('Admin/SubjectStudentCorner')}}">Manage </a>
              </li>
              <li><a class="menu-item" href="{{route('Admin/SubjectStudentCorner/Add')}}">Add New</a>
              </li>
            </ul>
            </li>
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="fa fa-book"></i><span class="menu-title" data-i18n="">Course</span></a>
            <ul class="menu-content">
             
              <li><a class="menu-item" href="#">Category</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Category')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Category/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Sub Category</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/SubCategory')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/SubCategory/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Subject</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Subject')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Subject/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>

              <li><a class="menu-item" href="#">Course</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('Admin/Course')}}">Manage</a>
                  </li>
                  <li><a class="menu-item" href="{{route('Admin/Course/Add')}}">Add New</a>
                  </li>
                </ul>
              </li>
             
            </ul>
          </li>

        
        <li class=" nav-item"><a href="#"><i class="fa fa-info"></i><span class="menu-title" data-i18n="">Orders</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('Admin/Sales/Today')}}">Today Orders</a></li>
              <li><a class="menu-item" href="{{route('Admin/Sales')}}">Total Orders</a></li>
              <li><a class="menu-item" href="{{route('Admin/Order/Delivered')}}">Order History</a></li>
            </ul>
          </li>

        <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span class="menu-title" data-i18n="">Customers</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{route('Admin/Customer')}}">All Customers</a></li>
              <li><a class="menu-item" href="{{route('Admin/Customer/Active')}}">Active Customers</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>