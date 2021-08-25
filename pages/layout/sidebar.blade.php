        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{asset('public/backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Prison Management</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-comment-add"></i>
                        </div>
                        <div class="menu-title">Registration</div>
                    </a>
                    <ul>
                        <li> <a href="{{route('policeList')}}"><i class="bx bx-right-arrow-alt"></i>Police</a>
                        </li>
                        
                        <li> <a href="{{route('prisonerList')}}"><i class="bx bx-right-arrow-alt"></i>Prisoner</a>
                        </li>

                        <li> <a href="{{route('visitorList')}}"><i class="bx bx-right-arrow-alt"></i>Visitor</a>
                        </li>
                        
                    </ul>
                </li>
                
                
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='fadeIn animated bx bx-user'></i>
                        </div>
                        <div class="menu-title">User Management</div>
                    </a>
                    <ul>
                        
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>User List</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>