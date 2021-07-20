  <!-- Start main left sidebar menu -->
  <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                            <img class="w-50" src="{{asset('backend/assets/img/logo.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">BCL</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>

                        </li>
                        <li class="menu-header">project</li>
                        <li class="dropdown ">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>project</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link " href="{{route('admin.projects')}}">ALL project</a></li>


                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i> <span>Upload project</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link " href="{{route('admin.basic')}}">project Basic</a>
                                </li>
                                <li>
                                    <a class="nav-link " href="{{route('admin.overview')}}">project Overview</a>
                                </li>
                                <li>
                                    <a class="nav-link " href="{{route('admin.details')}}">project Details</a>
                                </li>
                                <li>
                                    <a class=" nav-link " href="{{route('admin.faq')}}"> project FAQ</a>
                                </li>
                                <li>
                                    <a class=" nav-link " href="{{route('admin.location')}}">Location Map</a>
                                </li>
                                <li>
                                    <a class="nav-link " href="{{route('admin.update')}}">project Update</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="# " class="nav-link has-dropdown " data-toggle="dropdown "><i class="fas fa-user-shield"></i> <span>Member</span></a>
                            <ul class="dropdown-menu ">
                                <li><a class="nav-link " href="member.html ">ALL Members</a></li>
                                <li>
                                    <a class="nav-link " href="memberdetails.html ">Member Details</a>
                                </li>

                                <li>
                                    <a class="nav-link " href="singlememberpayoment.html ">single Member payoment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header "> System</li>
                        <li class="dropdown ">
                            <a href="# " class="nav-link has-dropdown " data-toggle="dropdown "><i class="fas fa-paper-plane"></i> <span>Sent SMS</span></a>
                            <ul class="dropdown-menu ">
                                <li>
                                    <a class="nav-link " href="allmembersms.html ">To All Member</a>
                                </li>
                                <li>
                                    <a class="nav-link " href="singlemembersms.html ">To Single Member</a>
                                </li>
                                <li>
                                    <a class="nav-link " href="interestedmember.html "> Interested Member</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown ">
                            <a href="# " class="nav-link has-dropdown " data-toggle="dropdown "><i class="fas fa-money-bill-wave"></i><span>Payment</span></a>
                            <ul class="dropdown-menu ">
                                <li>
                                    <a class="nav-link " href="completepayment.html ">Complete Payment</a>
                                </li>
                                <li>
                                    <a class="nav-link " href="pendingpeyment.html ">pending Payment</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-header ">Setting</li>
                        <li class="dropdown ">
                            <a href="# " class="nav-link has-dropdown " data-toggle="dropdown "><i class="fas fa-user-cog"></i> <span>Setting</span></a>
                            <ul class="dropdown-menu ">
                                <li>
                                    <a class="nav-link " href=" ">Profile</a>
                                </li>
                                <li>
                                    <a class="nav-link " href=" ">Change password</a>
                                </li>

                            </ul>
                        </li>
                        <li><a class="nav-link " href=" "><i class="fas fa-envelope-open"></i><span>Email API</span></a></li>
                        <li><a class="nav-link " href=" "><i class="fas fa-comment-dots"></i> <span>SMS API</span></a></li>
                        <li><a class="nav-link " href=" "><i class="fas fa-money-check-alt"></i> <span>Payoment Getway</span></a></li>
                    </ul>
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini ">
                        
        <!----------------- Authentication Links ------------------>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-primary btn-lg btn-block btn-icon-split "><i class="fas fa-rocket "></i> LOGOUT</a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        
                        @endguest
         <!----------------- end Authentication Links ------------------>

                    </div>
                   
                </aside>
            </div>