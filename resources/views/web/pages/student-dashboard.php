
<?php include 'inc/header.php'; ?>

<section class="other_section_with_bk">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_main_subHeading">

                    <div class="row">
                        <div class="col-md-8 mx-auto">
                        <div class="section_heading">
                        <span class="main_boldHeading">welcome to</span>
                        <span class="main_heading pl-2">dashboard</span>
                    </div>

                    <div>
                        <p class="dashboard_header_para">
                        Hi <strong>ANDRE HOUSE</strong>, here you have to see and update your profile, subscribed courses, activities, notifications and other things. All the above updates can be modified from the left panel provided.
                        </p>
                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="student_dashboard_section">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="dropdown show text-right pb-3">
                    <a href="javascript:;" class="btn main_action_btn" type="button" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Subscribe More</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Virtual Classes</a>
                        <a class="dropdown-item" href="#">College Counselling</a>
                        <a class="dropdown-item" href="#">Online Classes</a>
                    </div>
                </div>
        </div>

            <div class="col-sm-12 col-lg-4 mb-3">
                <div class="student_dashboard_left_part">

                

                    <div class="dashboard_user_profile_photo">
                        <img src="./images/user-profile-photo.png" alt="">
                    </div>

                    <div class="pt-4">
                        <h2 class="dashboard_username">andre house</h2>
                    </div>

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-virtualclasses-tab" data-toggle="pill" href="#v-pills-virtualclasses" role="tab" aria-controls="v-pills-virtualclasses" aria-selected="true">Virtual Classes</a>
                        <a class="nav-link" id="v-pills-activity-tab" data-toggle="pill" href="#v-pills-activity" role="tab" aria-controls="v-pills-activity" aria-selected="false">Activity</a>
                        <a class="nav-link" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false">Notifications</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link" id="v-pills-setting-tab" data-toggle="pill" href="#v-pills-setting" role="tab" aria-controls="v-pills-setting" aria-selected="false">Setting</a>
                        <a class="nav-link" id="v-pills-onlinepractice-tab" data-toggle="pill" href="#v-pills-onlinepractice" role="tab" aria-controls="v-pills-onlinepractice" aria-selected="false">Online Practices</a>
                        <a class="nav-link" id="v-pills-leaderboard-tab" data-toggle="pill" href="#v-pills-leaderboard" role="tab" aria-controls="v-pills-leaderboard" aria-selected="false">Leader Board</a>
                        </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-8">
                <div class="student_dashboard_right_part">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active pb-5" id="v-pills-virtualclasses" role="tabpanel" aria-labelledby="v-pills-virtualclasses-tab">
                            <div class="text-center">
                                <h2 class="dashboard_username">you have <span class="text-danger">5</span> subscribed courses</h2>
                            </div>

                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/dashboard-virtual-course-img-01.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/dashboard-virtual-course-img-01.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/dashboard-virtual-course-img-01.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/dashboard-virtual-course-img-01.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="each_virtual_class_course">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="virtual_class_course_img">
                                                <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 align-self-center">
                                            <div>
                                                <p class="virtual_classes_para">Lorem Ipsum is simply dummy text of the printing.</p>

                                                <div class="virtual_class_course_actionbtn">
                                                <a href="javascript:;" class="btn main_action_btn" type="button">Online Practice</a>
                                                <a href="javascript:;" class="btn main_action_btn" type="button">ZOOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div class="virtual_class_course_actionbtn text-center pt-4">
                                <a href="javascript:;" class="btn main_action_btn" type="button">Browse other courses</a>
                                                </div>
                            
                        </div>

                        <div class="tab-pane fade" id="v-pills-activity" role="tabpanel" aria-labelledby="v-pills-activity-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="activity_main_tab">

                                    <div id="accordion">

                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link activity_course_btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="activity_course_name_heading_and_name">
                                                        <h2 class="activity_course_name_heading m-0">course name: </h2><span class="activity_course_name">algebra</span>
                                                    </div>
                                                    <div class="activity_test_score_detaills">
                                                        <span>score test 01:</span> <span>(<span>25</span>/<span>33</span>)</span> 
                                                        <!-- <span class="activity_test_score_percentage">76%</span> -->
                                                    </div>
                                                </button>
                                            </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                    <div>
                                                        <h2 class="recommendation_based_missed_questions m-0">Recommendations Based on missed questions</h2>
                                                    </div>

                                                    <div class="recommendation_missed_questions_details">
                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="total_missed_questions_title">Total missed questions</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="total_missed_questions_title_info">(08)</h6>
                                                            </div>
                                                        </div>

                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="time_spend_on_correct_title">Time Spend On Correct: </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="time_spend_on_correct_title_info">12Mins</h6>
                                                            </div>
                                                        </div>

                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="time_spend_on_missed_title">Time Spend On Missed: </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="time_spend_on_missed_title_info">16Mins</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="all_missed_questions">
                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 03: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 07: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 13: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link activity_course_btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <div class="activity_course_name_heading_and_name">
                                                        <h2 class="activity_course_name_heading m-0">course name: </h2><span class="activity_course_name">algebra</span>
                                                    </div>
                                                    <div class="activity_test_score_detaills">
                                                        <span>score test 01:</span> <span>(<span>25</span>/<span>33</span>)</span> 
                                                        <!-- <span class="activity_test_score_percentage">76%</span> -->
                                                    </div>
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                    <div>
                                                        <h2 class="recommendation_based_missed_questions m-0">Recommendations Based on missed questions</h2>
                                                    </div>

                                                    <div class="recommendation_missed_questions_details">
                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="total_missed_questions_title">Total missed questions</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="total_missed_questions_title_info">(08)</h6>
                                                            </div>
                                                        </div>

                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="time_spend_on_correct_title">Time Spend On Correct: </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="time_spend_on_correct_title_info">12Mins</h6>
                                                            </div>
                                                        </div>

                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="time_spend_on_missed_title">Time Spend On Missed: </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="time_spend_on_missed_title_info">16Mins</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="all_missed_questions">
                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 03: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 07: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 13: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>

                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link activity_course_btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <div class="activity_course_name_heading_and_name">
                                                        <h2 class="activity_course_name_heading m-0">course name: </h2><span class="activity_course_name">algebra</span>
                                                    </div>
                                                    <div class="activity_test_score_detaills">
                                                        <span>score test 01:</span> <span>(<span>25</span>/<span>33</span>)</span> 
                                                        <!-- <span class="activity_test_score_percentage">76%</span> -->
                                                    </div>
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                    <div>
                                                        <h2 class="recommendation_based_missed_questions m-0">Recommendations Based on missed questions</h2>
                                                    </div>

                                                    <div class="recommendation_missed_questions_details">
                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="total_missed_questions_title">Total missed questions</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="total_missed_questions_title_info">(08)</h6>
                                                            </div>
                                                        </div>

                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="time_spend_on_correct_title">Time Spend On Correct: </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="time_spend_on_correct_title_info">12Mins</h6>
                                                            </div>
                                                        </div>

                                                        <div class="test_missed_questions_info">
                                                            <div>
                                                                <h6 class="time_spend_on_missed_title">Time Spend On Missed: </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="time_spend_on_missed_title_info">16Mins</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="all_missed_questions">
                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 03: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 07: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="time_spend_on_missed_title">Question 13: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                        </div>

                                                        <div class="single_missed_question">
                                                            <h6 class="total_missed_questions_title text-capitalize">Recommendation: </h6>
                                                            <p class="missed_question_content">Lorem Ipsum is simply dummy text of the printing.</p>
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingfour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link activity_course_btn collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                    <div class="activity_course_name_heading_and_name">
                                                        <h2 class="activity_course_name_heading m-0">course name: </h2><span class="activity_course_name">algebra</span>
                                                    </div>
                                                    <div class="activity_test_score_detaills">
                                                        <span>score test 01:</span> <span>(<span>25</span>/<span>33</span>)</span> 
                                                        <!-- <span class="activity_test_score_percentage">76%</span> -->
                                                    </div>
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
                                            </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingfive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link activity_course_btn collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                    <div class="activity_course_name_heading_and_name">
                                                        <h2 class="activity_course_name_heading m-0">course name: </h2><span class="activity_course_name">algebra</span>
                                                    </div>
                                                    <div class="activity_test_score_detaills">
                                                        <span>score test 01:</span> <span>(<span>25</span>/<span>30</span>)</span> 
                                                        <!-- <span class="activity_test_score_percentage">76%</span> -->
                                                    </div>
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="all_test_number_cases">

                                                            <div class="mb-3">
                                                                <h6 class="test_heading_with_green_bk">test 01</h6>
                                                                <p class="test_case_para">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                </p>
                                                            </div>

                                                            <div class="mb-3">
                                                                <h6 class="test_heading_with_dark_green_bk">test 02</h6>
                                                                <p class="test_case_para">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                </p>
                                                            </div>

                                                            <div class="mb-3">
                                                                <h6 class="test_heading_with_dark_blue_bk">test 03</h6>
                                                                <p class="test_case_para">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="main_charts">
                                                            <ul class="nav nav-pills mb-3 order-2" id="pills-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="pills-bargraph-tab" data-toggle="pill" href="#pills-bargraph" role="tab" aria-controls="pills-bargraph" aria-selected="true">Bar Graph</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-piechart-tab" data-toggle="pill" href="#pills-piechart" role="tab" aria-controls="pills-piechart" aria-selected="false">Pie Chart</a>
                                                            </li>
                                                            </ul>

                                                            <div class="tab-content" id="pills-tabContent">
                                                                <div class="tab-pane fade show active" id="pills-bargraph" role="tabpanel" aria-labelledby="pills-bargraph-tab">
                                                                    <div class="bargraph_container">
                                                                    <canvas id="mybarChart"></canvas>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="pills-piechart" role="tabpanel" aria-labelledby="pills-piechart-tab">
                                                                    <div class="piechart_container">
                                                                    <canvas id="myChart"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="all_test_number_cases">

                                                            <div class="mb-3">
                                                                <h6 class="test_heading_with_dark_blue_bk">test 04</h6>
                                                                <p class="test_case_para">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                </p>
                                                            </div>

                                                            <div class="mb-3">
                                                                <h6 class="test_heading_with_red_bk">test 05</h6>
                                                                <p class="test_case_para">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade pb-5" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">

                        <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="main_notification_container">

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">WELCOME TO UI/UX DESIGN COURSE!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="main_notification_container">

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">WELCOME TO UI/UX DESIGN COURSE!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="main_notification_container">

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">WELCOME TO UI/UX DESIGN COURSE!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="main_notification_container">

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">WELCOME TO UI/UX DESIGN COURSE!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <span class="status_of_notification">new</span>
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                        <div class="each_notification_container">
                                            <div class="notification_header">
                                                <h4 class="notification_title">Your Course Is getting expired in one week!</h4>
                                                <!-- <span class="status_of_notification">new</span> -->
                                            </div>

                                            <div>
                                                <p class="notification_para">
                                                Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum 
                                                </p>
                                            </div>

                                            <div class="notification_post_info">
                                                <span class="notification_post_time">12:00 AM</span>
                                                <span class="notifiaction_post_date">DD/MM/YYYY</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                </div>

                                <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div>
                                </div>
                                <div class="swiper-pagination pt-5"></div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade pb-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                               <div class="col-md-12">
                                    <div class="main_profile_container">

                                        <div>
                                            <h2 class="dashboard_username">your profile</h2>
                                        </div>

                                        <div class="user_profile_info">
                                            <div class="user_profile_name">
                                                <span class="profile_info_label">name</span>
                                                <span class="profile_info_input">andre house</span>
                                            </div>

                                            <div>
                                                <span class="profile_info_label">id</span>
                                                <span class="profile_info_input">andrehouse@123</span>
                                            </div>
                                        </div>

                                        <div>
                                            <h2 class="dashboard_username">edit</h2>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control name_edit_field" id="" aria-describedby="" placeholder="Your Name">
                                            <small id="emailHelp" class="form-text text-muted">This field can be seen by: <strong class="text-dark">Everyone</strong></small>
                                        </div>

                                        <div class="pb-3">
                                            <a href="javascript:;" class="btn main_action_btn" type="button">Save Changes</a>
                                        </div>

                                        <div>
                                            <h2 class="dashboard_username">change profile photo</h2>
                                        </div>
                                            
                                        <p class="small_para">Select Profile Picture from the avatars given below</p>

                                        <div class="all_avatars_pictures">
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-01.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-02.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-03.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-04.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-05.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-01.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-06.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-07.png" alt=""></a>
                                            <a href="javascript:;" class="profile_photo"><img src="./images/profile-pic-09.png" alt=""></a>
                                        </div>

                                        <p class="small_para">Click below to select a JPG, GIF or PNG format photo from your computer and then click 'Upload Image' to proceed.</p>

                                        <div class="pb-3">
                                            <a href="javascript:;" class="btn main_action_btn" type="button">Upload Image</a>
                                        </div>

                                        <p class="small_para">If you'd like to delete your current avatar but not upload a new one, please use the delete avatar button.</p>

                                        <div class="delete_actionBtn pb-3">
                                            <a href="javascript:;" class="btn main_action_btn" type="button">Delete</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-setting" role="tabpanel" aria-labelledby="v-pills-setting-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="account_settings_main">

                                        <div>
                                            <h2 class="dashboard_username">general account settings</h2>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control name_edit_field" id="" aria-describedby="" placeholder="Your Account Email">
                                            <!-- <small id="emailHelp" class="form-text text-muted">This field can be seen by: <strong class="text-dark">Everyone</strong></small> -->
                                        </div>

                                        <div class="form-group">
                                            <small id="" class="form-text text-muted pb-2">Change Password <strong class="text-dark">(leave blank for no change)</strong></small>
                                            <input type="password" class="form-control name_edit_field" id="exampleInputPassword1" placeholder="New Password">
                                        </div>

                                        <div class="form-group">
                                            <!-- <small id="" class="form-text text-muted">Change Password <strong class="text-dark">(leave blank for no change)</strong></small> -->
                                            <input type="password" class="form-control name_edit_field" id="exampleInputPassword2" placeholder="Repeat New Password">
                                        </div>

                                        <p class="small_para mb-2">Click below to proceed. </p>
                                        
                                        <div class="g-recaptcha justify-content-start" data-sitekey="6LfvmKMpAAAAADkfPvCa7Ny8TmCl-TZYdXwikzzU"></div>


                                        <div class="pb-3 pt-3">
                                            <a href="javascript:;" class="btn main_action_btn" type="button">Save Changes</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-onlinepractice" role="tabpanel" aria-labelledby="v-pills-onlinepractice-tab">
                        <div class="text-center">
                                <h2 class="dashboard_username">you have <span class="text-danger">4</span> subscribed test/practices</h2>
                            </div>

                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <div class="row">
                                        <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                        <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                        <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                        <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide">
                                <div class="row">
                                        <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-02.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-05.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-04.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="virtual_course_card_main">

                                                    <div class="virtual_classes_img">
                                                        <img src="./images/subscribed-courses-img-03.png" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="virtual_course_body">

                                                        <p class="virtual_course_para">
                                                            Lorem Ipsum is simply dummy text of the printing.
                                                        </p>

                                                        <div class="course_price_with_enrolled_students">
                                                            <p class="virtual_course_price m-0">
                                                                $50.00
                                                            </p>

                                                            <div class="course_rating_info">

                                                                <span class="user_profile"><i class="fa-regular fa-user"></i></span>

                                                                <div class="course_feedback_rating pl-1">
                                                                    <!-- <span>5.0</span> -->
                                                                    <span>600k</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="virtual_classes_body_btn">

                                                            <div class="virtual_classes_card_btn">
                                                                <div>
                                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Practice Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                               
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            
                        </div>

                        <div class="tab-pane fade" id="v-pills-leaderboard" role="tabpanel" aria-labelledby="v-pills-leaderboard-tab">

                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="leaderboard_main_container">

                                       <div class="leaderboard_heading_container">
                                            <div class="leaderboard_heading">
                                                <h2 class="dashboard_username m-0">leaderboard</h2>
                                            </div>

                                            <div class="scoreboard_img">
                                                <img src="./images/leader-board-img.png" class="img-fluid" alt="">
                                            </div>

                                            <div class="top_10_scorers_heading">
                                                <h2 class="dashboard_username m-0">top 10 scorers</h2>
                                            </div>
                                       </div>

                                       <div class="all_score_board">
                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/top-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>30</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/second-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>30</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/third-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>30</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/forth-leaer-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/fifth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/sixth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/seventh-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/eighth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/ninth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/tenth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>

                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="leaderboard_main_container">

                                       <div class="leaderboard_heading_container">
                                            <div class="leaderboard_heading">
                                                <h2 class="dashboard_username m-0">leaderboard</h2>
                                            </div>

                                            <div class="scoreboard_img">
                                                <img src="./images/leader-board-img.png" class="img-fluid" alt="">
                                            </div>

                                            <div class="top_10_scorers_heading">
                                                <h2 class="dashboard_username m-0">top 10 scorers</h2>
                                            </div>
                                       </div>

                                       <div class="all_score_board">
                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/top-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>30</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/second-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>30</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/third-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>30</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/forth-leaer-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/fifth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/sixth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/seventh-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/eighth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/ninth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="each_scorer">
                                                <div>
                                                    <h2 class="leaderboard_scorername m-0">Andre House</h2>
                                                </div>

                                                <div class="score_with_badge">
                                                    <div class="leaderboard_badge_img">
                                                        <img src="./images/tenth-leader-icon.png" alt="">
                                                    </div>

                                                    <div>
                                                        <h2 class="leaderboard_username m-0">
                                                            <span>(<span>25</span>/<span>30</span>)</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>

                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="swiper-slide"></div>

                            <div class="swiper-slide"></div>

                            <div class="swiper-slide"></div>

                            <div class="swiper-slide"></div>

                            <div class="swiper-slide"></div>

                            <div class="swiper-slide"></div>

                            <div class="swiper-slide"></div>

                            </div>
                            <div class="swiper-pagination pt-4"></div>
                        </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'inc/footer.php'; ?>

<script src='https://www.google.com/recaptcha/api.js'></script>



<script>

    const ctx = document.getElementById('myChart');
    const cts = document.getElementById('mybarChart');

    new Chart(cts, {
    type: 'bar',
    data: {
   labels: [
    'Red',
        'Blue',
        'Yellow'
    ],
    datasets: [{
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
        ],
        data: [10, 20, 30, 40, 50, 60, 70]
    }]
}
    });

    new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: [
        'Red',
        'Blue',
        'Yellow'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100],
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
    }]
    },
    options: {
        // scales: {
        // y: {
        //     beginAtZero: true
        // }
        // }
    }
    });




    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    });
  </script>