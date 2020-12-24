<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light"> 
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav float-right"  style="position: absolute; right:5%; top:5%">         
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             
                <span class="avatar avatar-online">
                <img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" alt="avatar"></span></a>
                <div class="dropdown-menu dropdown-menu-right" >
                  <div class="arrow_box_right">
                    <a class="dropdown-item" href="#">
                    <span class="avatar avatar-online" style="width:200px">
                      <span class="user-name text-bold-700 ml-1">{{Auth::user()->name}}</span>
                    </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#" onclick="logout()"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<form action="{{route('logout')}}" method="post">{{csrf_field()}}<button id="logout" style="display: none;"></button></form>
  <script type="text/javascript">
    function logout(){
      document.getElementById("logout").click()
    }
  </script>