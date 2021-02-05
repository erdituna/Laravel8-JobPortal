<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false">
                        @if(Auth::user()->profile_photo_path)
                            <img src="{{ Storage::url(Auth::user()->profile_photo_path)}}" class="img-circle">
                        @endif

                        <span class="hide-menu">{{Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">

                        @auth
                            <a href="#" class="d-block">{{Auth::user()->name}}</a>
                            <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-small-cap">--- PERSONAL</li>
                <li><a href="{{route('admin_category')}}" aria-expanded="false"><i class="icon-speedometer"></i><span
                            class="hide-menu">Category<span
                                class="badge badge-pill badge-cyan ml-auto"></span></span></a>

                </li>
                <li><a href="{{route('admin_jobs')}}" aria-expanded="false"><i class="icon-speedometer"></i><span
                            class="hide-menu">Jobs<span
                                class="badge badge-pill badge-cyan ml-auto"></span></span></a>

                </li>
                <li><a href="{{route('admin_message')}}" aria-expanded="false"><i class="icon-speedometer"></i><span
                            class="hide-menu">Contact Message<span
                                class="badge badge-pill badge-cyan ml-auto"></span></span></a>

                </li>
                <li><a href="{{route('admin_faq')}}" aria-expanded="false"><i class="icon-speedometer"></i><span
                            class="hide-menu">Faq<span
                                class="badge badge-pill badge-cyan ml-auto"></span></span></a>

                </li>

                <li><a href="{{route('admin_applications')}}" aria-expanded="false"><i class="ti-layout-grid2"></i><span
                            class="hide-menu">Apps</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li><a href="{{route('admin_users')}}" aria-expanded="false"><i class="icon-user"></i></i><span class="hide-menu">User</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>

                <li class="nav-small-cap">--- SUPPORT</li>
                <li><a class="waves-effect waves-dark" href="{{route('admin_setting')}}" aria-expanded="false"><i
                            class="fa fa-circle-o text-danger"></i><span class="hide-menu">Setting</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{route('logout')}}" aria-expanded="false"><i
                            class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{route('admin_faq')}}" aria-expanded="false"><i
                            class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
