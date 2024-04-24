
@extends('admin_dashboard.layouts.main')

@section('content')

<section class="analytics_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page_top_bar">
                    <div class="heading_with_icons">
                        <div class="sidebar_humburger_icon">

                            <span class="sidebar_btn" id="sidebar_navbtn"><i class="fa-solid fa-bars"></i></span>
                            <h2 class="main_page_heading">analytics</h2>
                        </div>

                        <div class="top_bar_right_part">
                            <div class="main_search_bar">
                                <input type="text" placeholder="Search here">
                            </div>

                            <div class="top_bar_icons">
                                <div>
                                    <a href="javascript:;">
                                        <span class="header_user_icon"><i class="fa-solid fa-user"></i></span>
                                    </a>
                                </div>

                                <div>
                                    <a href="javascript:;">
                                    <span class="header_alert_icon"><i class="fa-solid fa-gear"></i></span>
                                    </a>
                                </div>

                                <div class="position-relative">
                                    <a href="">
                                        <span class="header_alert_icon"><i class="fa-solid fa-bell"></i></span>
                                        <span class="number_of_notifications">11</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="main_small_container">
                    <div class="vector_with_details">
                        <div class="container_vector">
                            <img src="{{asset('admin_dashboard/images/Vector.png')}}" alt="">
                        </div>

                        <div>
                            <span class="small_container_title">New Students</span>
                            <h6 class="title_info">281</h6>
                        </div>
                    </div>

                    <div class="new_updates_info">
                        <span class="percentage_number">+55%</span>
                        <span class="small_container_title">than last week</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="main_small_container">
                    <div class="vector_with_details">
                        <div class="container_vector02">
                            <img src="{{asset('admin_dashboard/images/chart-bar-icon.png')}}" alt="">
                        </div>

                        <div>
                            <span class="small_container_title">Today's Users</span>
                            <h6 class="title_info">2,300</h6>
                        </div>
                    </div>

                    <div class="new_updates_info">
                        <span class="percentage_number">+3%</span>
                        <span class="small_container_title">than last week</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="main_small_container">
                    <div class="vector_with_details">
                        <div class="container_vector03">
                            <img src="{{asset('admin_dashboard/images/store-icon.png')}}" alt="">
                        </div>

                        <div>
                            <span class="small_container_title">Revenue</span>
                            <h6 class="title_info">34K</h6>
                        </div>
                    </div>

                    <div class="new_updates_info">
                        <span class="percentage_number">+1%</span>
                        <span class="small_container_title">than yesterday</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="main_small_container">
                    <div class="vector_with_details">
                        <div class="container_vector04">
                            <img src="{{asset('admin_dashboard/images/enrolled-courses-icon.png')}}" alt="">
                        </div>

                        <div>
                            <span class="small_container_title">Enrolled Courses</span>
                            <h6 class="title_info">+91</h6>
                        </div>
                    </div>

                    <div class="new_updates_info">
                        <!-- <span class="percentage_number">+1%</span> -->
                        <span class="small_container_title">Just updated</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="all_admins_container">

                    <div class="single_admin">
                        <div class="admin_details">
                            <h6 class="admin_number">admin 1</h6>

                            <div class="admin_personal_info_main">
                                <span class="admin_personal_info">city</span>
                                <span class="admin_personal_info">state</span>
                                <span class="admin_personal_info">country</span>
                            </div>
                        </div>

                        <div class="students_details_main">
                            <div>
                                <span class="student_enrolled_title">students enrolled</span>
                            </div>

                            <div class="enrolled_student_details">

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-01.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-02.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-03.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-04.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/more-users-icon.png')}}" alt="">
                                    </div>

                                    <div class="text-center">
                                        <span class="more_enrolled_students">50 more</span>
                                        <a href="javascript:;" class="view_all_students">view all</a>
                                    </div>
                                </div>
                            </div>

                            </div>

                            <div class="enrolled_student_batch_details">
                            <div>
                                <span class="enrolled_student_batch_number">batch 01:</span>
                            </div>

                            <div class="single_batch_details">
                                <div>
                                    <div>
                                        <span class="single_batch_heading">no of students</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="total_number_of_students_enolled">54</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date start</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-05-24</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date end</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-07-24</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="enrolled_student_batch_details">
                            <div>
                                <span class="enrolled_student_batch_number">batch 02:</span>
                            </div>

                            <div class="single_batch_details">
                                <div>
                                    <div>
                                        <span class="single_batch_heading">no of students</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="total_number_of_students_enolled">44</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date start</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-05-24</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date end</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-07-24</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div>
                            <a href="javascript:;" class="view_all_batches_action_btn">
                                view all batches
                            </a>
                        </div>

                    </div>

                    <div class="single_admin">
                        <div class="admin_details">
                            <h6 class="admin_number">admin 2</h6>

                            <div class="admin_personal_info_main">
                                <span class="admin_personal_info">city</span>
                                <span class="admin_personal_info">state</span>
                                <span class="admin_personal_info">country</span>
                            </div>
                        </div>

                        <div class="students_details_main">
                            <div>
                                <span class="student_enrolled_title">students enrolled</span>
                            </div>

                            <div class="enrolled_student_details">

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-01.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-02.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-03.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-04.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/more-users-icon.png')}}" alt="">
                                    </div>

                                    <div class="text-center">
                                        <span class="more_enrolled_students">50 more</span>
                                        <a href="javascript:;" class="view_all_students">view all</a>
                                    </div>
                                </div>
                            </div>

                            </div>

                            <div class="enrolled_student_batch_details">
                            <div>
                                <span class="enrolled_student_batch_number">batch 01:</span>
                            </div>

                            <div class="single_batch_details">
                                <div>
                                    <div>
                                        <span class="single_batch_heading">no of students</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="total_number_of_students_enolled">54</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date start</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-05-24</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date end</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-07-24</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="enrolled_student_batch_details">
                            <div>
                                <span class="enrolled_student_batch_number">batch 02:</span>
                            </div>

                            <div class="single_batch_details">
                                <div>
                                    <div>
                                        <span class="single_batch_heading">no of students</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="total_number_of_students_enolled">44</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date start</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-05-24</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date end</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-07-24</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div>
                            <a href="javascript:;" class="view_all_batches_action_btn">
                                view all batches
                            </a>
                        </div>

                    </div>

                    <div class="add_admin">
                        <div>
                            <h2 class="add_admin_heading">add admin</h2>

                            <p class="create_new-admin_para">Create new admin with limited access.</p>

                            <div class="create_admin_btn_main">
                                <button class="create_new_admin_actionBtn"><i class="fa-solid fa-plus"></i></button>
                                <span class="create_admin_btn_label">create new admin</span>
                            </div>
                        </div>
                    </div>

                    <div class="single_admin">
                        <div class="admin_details">
                            <h6 class="admin_number">admin 2</h6>

                            <div class="admin_personal_info_main">
                                <span class="admin_personal_info">city</span>
                                <span class="admin_personal_info">state</span>
                                <span class="admin_personal_info">country</span>
                            </div>
                        </div>

                        <div class="students_details_main">
                            <div>
                                <span class="student_enrolled_title">students enrolled</span>
                            </div>

                            <div class="enrolled_student_details">

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-01.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-02.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-03.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/admin-pic-04.png')}}" alt="">
                                    </div>

                                    <div>
                                        <span class="enrolled_student_name">victor wilson</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="enrolled_student_profile_pic">
                                        <img src="{{asset('admin_dashboard/images/more-users-icon.png')}}" alt="">
                                    </div>

                                    <div class="text-center">
                                        <span class="more_enrolled_students">50 more</span>
                                        <a href="javascript:;" class="view_all_students">view all</a>
                                    </div>
                                </div>
                            </div>

                            </div>

                            <div class="enrolled_student_batch_details">
                            <div>
                                <span class="enrolled_student_batch_number">batch 01:</span>
                            </div>

                            <div class="single_batch_details">
                                <div>
                                    <div>
                                        <span class="single_batch_heading">no of students</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="total_number_of_students_enolled">54</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date start</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-05-24</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date end</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-07-24</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="enrolled_student_batch_details">
                            <div>
                                <span class="enrolled_student_batch_number">batch 02:</span>
                            </div>

                            <div class="single_batch_details">
                                <div>
                                    <div>
                                        <span class="single_batch_heading">no of students</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="total_number_of_students_enolled">44</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date start</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-05-24</span>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <span class="single_batch_heading">date end</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="batch_date">12-07-24</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div>
                            <a href="javascript:;" class="view_all_batches_action_btn">
                                view all batches
                            </a>
                        </div>

                    </div>

                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="top_selling_courses_table">
                        <div>
                            <h4 class="top_selling_courses_title">top selling courses</h4>
                        </div>

                        <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">product</th>
                                <th scope="col">value</th>
                                <th scope="col">ads spent</th>
                                <th scope="col">refunds</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td scope="row">
                                    <div class="course_img_with_details">
                                        <div class="top_selling_product_img">
                                            <img src="{{asset('admin_dashboard/images/course-img-01.png')}}" alt="">
                                        </div>

                                        <div>
                                            <h6 class="best_selling_course_name">algebra</h6>
                                            <span class="no_of_enrollments">8232</span><span class="no_of_enrolled">enrolled</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$130.992</td>
                                <td>$9.500</td>
                                <td>
                                    <span class="last_refund">13</span>
                                </td>
                                </tr>
                                <tr>
                                <td scope="row">
                                    <div class="course_img_with_details">
                                        <div class="top_selling_product_img">
                                            <img src="{{asset('admin_dashboard/images/course-img-02.png')}}" alt="">
                                        </div>

                                        <div>
                                            <h6 class="best_selling_course_name">arithmetic</h6>
                                            <span class="no_of_enrollments">12821</span><span class="no_of_enrolled">enrolled</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$80.250</td>
                                <td>$4.200</td>
                                <td>
                                <span class="even_refund">40</span>
                                </td>
                                </tr>
                                <tr>
                                <td scope="row">
                                    <div class="course_img_with_details">
                                        <div class="top_selling_product_img">
                                            <img src="{{asset('admin_dashboard/images/course-img-03.png')}}" alt="">
                                        </div>

                                        <div>
                                            <h6 class="best_selling_course_name">Geography</h6>
                                            <span class="no_of_enrollments">2421</span><span class="no_of_enrolled">enrolled</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$40.600</td>
                                <td>$9.430</td>
                                <td>
                                    <span class="last_refund">54</span>
                                </td>
                                </tr>

                                <tr>
                                <td scope="row">
                                    <div class="course_img_with_details">
                                        <div class="top_selling_product_img">
                                            <img src="{{asset('admin_dashboard/images/course-img-04.png')}}" alt="">
                                        </div>

                                        <div>
                                            <h6 class="best_selling_course_name">Science</h6>
                                            <span class="no_of_enrollments">5921</span><span class="no_of_enrolled">enrolled</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$91.300</td>
                                <td>$7.364</td>
                                <td>
                                    <span class="last_refund">5</span>
                                </td>
                                </tr>

                                <tr>
                                <td scope="row">
                                    <div class="course_img_with_details">
                                        <div class="top_selling_product_img">
                                            <img src="{{asset('admin_dashboard/images/course-img-05.png')}}" alt="">
                                        </div>

                                        <div>
                                            <h6 class="best_selling_course_name">Geometry</h6>
                                            <span class="no_of_enrollments">921</span><span class="no_of_enrolled">enrolled</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$140.925</td>
                                <td>$20.531</td>
                                <td>
                                    <span class="last_refund">121</span>
                                </td>
                                </tr>
                            </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection



