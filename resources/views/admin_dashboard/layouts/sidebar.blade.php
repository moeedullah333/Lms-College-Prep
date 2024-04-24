<div class="sidebar_main position-relative" id="mySideNav">

    <div class="text-right">
        <button class="crossbtn_for_navbar" id="crossbtn_navbar"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="sidebar_main_content">

        <div class="dashboard_logo text-center">
            <img src="{{ asset('admin_dashboard/images/dashboard-logo.png') }}" alt="">
        </div>

        <div>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link sidebar_btn" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="superadmin_profile_picture">
                                    <img src="{{ asset('admin_dashboard/images/Profile-picture.png') }}" alt="">
                                </div>

                                <div>
                                    <span class="superadmin_name">{{ auth()->user()->first_name }}</span>
                                </div>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link dashboard_btn collapsed" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="dashboard_icon_img">
                                    <img src="{{ asset('admin_dashboard/images/dashboard-icon.png') }}" alt="">
                                </div>

                                <div>
                                    <span class="superadmin_name">Dashboards</span>
                                </div>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body p-0">
                            <a href="javascript:;" class="dashboard_under_page m-0">
                                <div>
                                    <span><i class="fa-solid fa-a"></i></span>
                                </div>

                                <div>
                                    <span class="superadmin_name">Analytics</span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h6 class="dashboard_pages_heading">pages</h6>

                <ul class="all_pages_list">
                    <li class="single_page_link">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link sidebar_btn collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <div class="superadmin_profile_picture">
                                            <img src="{{ asset('admin_dashboard/images/user-management-icon.png') }}"
                                                alt="">
                                        </div>

                                        <div>
                                            <span class="superadmin_name">user management</span>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div>
                                        <a href="{{ route('admin.user_listing.page') }}" class="pages_under_tabs">
                                            <span>students</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.admin_listing.page') }}" class="pages_under_tabs">
                                            <span>admin</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="single_page_link">
                        <a href="javascript:;" class="sidebar_btn">
                            <div class="superadmin_profile_picture">
                                <img src="{{ asset('admin_dashboard/images/online-test-icon.png') }}" alt="">
                            </div>
                            <span class="superadmin_name">online test</span>
                        </a>
                    </li>

                    <li class="single_page_link">
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link sidebar_btn collapsed" data-toggle="collapse"
                                        data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <div class="superadmin_profile_picture">
                                            <img src="{{ asset('admin_dashboard/images/class-management-icon.png') }}"
                                                alt="">
                                        </div>

                                        <div>
                                            <span class="superadmin_name">course management</span>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div>
                                        <a href="{{route('admin.course.listing.page')}}" class="pages_under_tabs">
                                            <span>courses</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="single_page_link">
                        <div class="card">
                            <div class="card-header" id="headingorder">
                                <h5 class="mb-0">
                                    <button class="btn btn-link sidebar_btn collapsed" data-toggle="collapse"
                                        data-target="#collapseorder" aria-expanded="false" aria-controls="collapseorder">
                                        <div class="superadmin_profile_picture">
                                            <img src="{{ asset('admin_dashboard/images/class-management-icon.png') }}"
                                                alt="">
                                        </div>

                                        <div>
                                            <span class="superadmin_name">Order Managment</span>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseorder" class="collapse" aria-labelledby="headingorder"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div>
                                        <a href="{{route('admin.order.listing.page')}}" class="pages_under_tabs">
                                            <span>Orders</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="single_page_link">

                        <div class="card">
                            <div class="card-header" id="headingfive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link sidebar_btn collapsed" data-toggle="collapse"
                                        data-target="#collapsefive" aria-expanded="false"
                                        aria-controls="collapsefive">
                                        <div class="superadmin_profile_picture">
                                            <img src="{{ asset('admin_dashboard/images/college-counselling-icon.png') }}"
                                                alt="">
                                        </div>

                                        <div>
                                            <span class="superadmin_name">college counselling</span>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div>
                                        <a href="javascript:;" class="pages_under_tabs">
                                            <span>plans</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="pages_under_tabs">
                                            <span>enrollments</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="single_page_link">
                        <div class="card">
                            <div class="card-header" id="headingblock">
                                <h5 class="mb-0">
                                    <button class="btn btn-link sidebar_btn collapsed" data-toggle="collapse"
                                        data-target="#collapseBlock" aria-expanded="false"
                                        aria-controls="collapseBlock">
                                        <div class="superadmin_profile_picture">
                                            <img src="{{ asset('admin_dashboard/images/user-management-icon.png') }}"
                                                alt="">
                                        </div>

                                        <div>
                                            <span class="superadmin_name">Blogs management</span>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBlock" class="collapse" aria-labelledby="headingblock"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div>
                                        <a href="{{ route('admin.blog_listing.page') }}" class="pages_under_tabs">
                                            <span>Blogs</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- <a href="javascript:;" class="sidebar_btn">
                            <div class="superadmin_profile_picture">
                                <img src="{{ asset('admin_dashboard/images/blog-icon.png') }}" alt="">
                            </div>
                            <span class="superadmin_name">blogs</span>
                        </a> --}}
                    </li>

                    <li class="single_page_link">
                        <a href="javascript:;" class="sidebar_btn">
                            <div class="superadmin_profile_picture">
                                <img src="{{ asset('admin_dashboard/images/News-event-icon.png') }}" alt="">
                            </div>
                            <span class="superadmin_name">news events</span>
                        </a>
                    </li>


                    <li class="single_page_link">
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link sidebar_btn collapsed" data-toggle="collapse"
                                        data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        <div class="superadmin_profile_picture">
                                            <img src="{{ asset('admin_dashboard/images/Reporting-icon.png') }}"
                                                alt="">
                                        </div>
                                        <div>
                                            <span class="superadmin_name">reportings</span>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div>
                                        <a href="javascript:;" class="pages_under_tabs">
                                            <span>financial reporting</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="pages_under_tabs">
                                            <span>user reports</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="pages_under_tabs">
                                            <span>admin reports</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="pages_under_tabs">
                                            <span>portal analytics</span>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <!-- <a href="javascript:;">
                            <div>
                                <img src="./images/college-counselling-icon.png" alt="">
                            </div>
                            <span>college counselling</span>
                        </a> -->
                    </li>


                    <button onclick="window.location.href='{{ route('user.logout') }}'"
                        class="pages_under_tabs mt-3">
                        <span>Logout</span>
                    </button>

                </ul>
            </div>


        </div>

    </div>



</div>
