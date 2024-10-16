<!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="{{asset('assets/img/dp.jpg')}}" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> {{ auth()->user()->name }} </div>
                                            <div class="profile-usertitle-job"> Manager </div>
                                        </div>
                                        <div class="sidebar-userpic-btn">
                                            <a class="tooltips" href="#" data-placement="top" data-original-title="Profile">
                                                <i class="material-icons">person_outline</i>
                                            </a>
                                            <a class="tooltips" href="#" data-placement="top" data-original-title="Mail">
                                                <i class="material-icons">mail_outline</i>
                                            </a>
                                            <a class="tooltips" href="#" data-placement="top" data-original-title="Chat">
                                                <i class="material-icons">chat</i>
                                            </a>
                                            <a class="tooltips" href="{{ route('logout.path') }}" data-placement="top" data-original-title="Logout">
                                                <i class="material-icons">input</i>
                                            </a>
                                        </div>
                                </div>
                            </li>
                           
                            <li class="nav-item start">
                                <a href="{{ route('home.path') }}" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('maintenance-list.path') }}" class="nav-link nav-toggle">
                                    <i class="material-icons">vpn_key</i>
                                    <span class="title">Maintenances</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('terminal-list.path') }}" class="nav-link nav-toggle">
                                    <i class="material-icons">desktop_mac</i>
                                    <span class="title">Terminals</span>
                                </a>
                            </li>
                             </li>
                             
                             </li>
                             <li class="nav-item">
                                <a href="{{ route('agence-list.path') }}" class="nav-link nav-toggle">
                                    <i class="material-icons">store</i>
                                    <span class="title">Agence</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('agent-list.path') }}" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Agents</span>
                                </a>
                            </li>
                             

                           
                        </ul>
                    </div>
                </div>
            </div>
             <!-- end sidebar menu -->