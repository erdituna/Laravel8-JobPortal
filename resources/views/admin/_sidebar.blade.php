<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false"><img
                            src="{{ asset('assets')}}/admin/assets/images/users/1.jpg" alt="user-img"
                            class="img-circle"><span class="hide-menu">{{Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
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

                <li><a href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span
                            class="hide-menu">Apps</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li><a href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-palette"></i><span class="hide-menu">Ui Elements <span
                                class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>
                <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                    <ul aria-expanded="false" class="collapse">

                    </ul>
                </li>

                <li class="nav-small-cap">--- SUPPORT</li>
                <li><a class="waves-effect waves-dark" href="{{route('admin_setting')}}" aria-expanded="false"><i
                            class="fa fa-circle-o text-danger"></i><span class="hide-menu">Setting</span></a></li>
                <li><a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i
                            class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                <li><a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i
                            class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
