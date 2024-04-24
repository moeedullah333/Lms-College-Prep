@extends('web.layouts.main')

@section('content')
    <section class="welcome_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="welcome_math_knots_main">

                        <div class="row">

                            <div class="col-sm-10 col-lg-6 align-self-center position-relative mx-auto">

                                <div data-aos="fade-down">

                                    <div class="welcome_left_part">

                                        <div class="welcome_headings d-flex -align-items-center">
                                            <h4 class="main_subHeading">Welcome to Math-Knots</h4>
                                            <span class="main_stylish_heading">Joy of Learning</span>
                                        </div>

                                        <h2 class="main_boldHeading m-0">transforming</h2>

                                        <div class="lines_and_dreams">
                                            <div class="three_colored_lines">
                                                <div class="colored_line mx-auto"></div>
                                                <div class="colored_line ml-auto"></div>
                                                <div class="colored_line mx-auto"></div>
                                            </div>

                                            <div>
                                                <h2 class="main_heading">dreams</h2>
                                            </div>

                                        </div>

                                        <div class="d-flex align-items-baseline">
                                            <span class="main_heading">into </span>
                                            <h2 class="main_boldHeading pl-2">reality</h2>
                                        </div>



                                        <div>
                                            <p class="welcome_para">Success is the sum of small efforts, repeated day-in and
                                                day-out.
                                                To accomplish great things, we must not only act, but also dream, not only
                                                plan, but also believe and do right preparation. This is the key to success.
                                            </p>
                                        </div>

                                        <div>
                                            <a href="./apply-now.php" class="btn main_action_btn" type="button">Register
                                                Now</a>
                                        </div>

                                        <div class="main_site_visitors">
                                            <span class="visitors_number">visitors</span>
                                            <span class="visitors_visit">0001</span>
                                        </div>

                                    </div>
                                </div>



                            </div>

                            <div class="col-sm-8 col-lg-6 mx-auto">

                                <div data-aos="fade-left">
                                    <div class="welcome_right_part">

                                        <div class="welcome_right_img">
                                            <img src="{{ asset('web/images/main-banner-img.png') }}" class="img-fluid"
                                                alt="">
                                        </div>

                                        <div class="welcome_right_img_bk_line">
                                            <div class="img_bk_line mx-auto"></div>
                                            <div class="img_bk_line"></div>
                                            <div class="img_bk_line"></div>
                                        </div>


                                    </div>
                                </div>





                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="explore_popular_courses_section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div data-aos="fade-down">
                        <div class="practice_test_main">

                            <div class="lines_and_dreams">
                                <div class="three_colored_lines">
                                    <div class="colored_line mx-auto"></div>
                                    <div class="colored_line ml-auto"></div>
                                    <div class="colored_line mx-auto"></div>
                                </div>

                                <div>
                                    <h4 class="main_subHeading">practice tests</h4>
                                </div>

                                <div class="three_colored_lines">
                                    <div class="colored_line mx-auto"></div>
                                    <div class="colored_line ml-auto"></div>
                                    <div class="colored_line mx-auto"></div>
                                </div>
                            </div>

                            <div class="explore_pop_course position-relative">
                                <div class="text-center">
                                    <span class="main_heading">Explore Popular</span>
                                    <span class="main_stylish_heading">Courses</span>
                                </div>

                                <div class="explore_courses_btn">
                                    <a href="./online-test-practices.php" class="btn main_action_btn" type="button">Explore
                                        All</a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="main_course_card">

                                <div class="course_card_body">

                                    <div class="course_main_img">
                                        <img src="{{ asset('web/images/monitor-icon.png') }}"
                                            class="img-fluid" alt="">
                                    </div>

                                    <div class="course_main_content">
                                        <div class="course_title">
                                            <h6 class="main_subTitle_heading">lorem ipsume</h6>

                                            <div class="course_cart_icon">
                                                <button class=""><img
                                                        src="{{ asset('web/images/black_cart_icon.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>

                                        <p class="course_content_para">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>

                                </div>

                                <div class="course_card_footer">

                                    <div class="">
                                        <a href="./online-practice-test-details.php" class="btn main_action_btn"
                                            type="button">View Details</a>
                                    </div>

                                    <div class="course_add_to_cart_btn">
                                        <a href="javascript:;" class="btn main_action_btn" type="button">Add to cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="main_course_card">

                                <div class="course_card_body">

                                    <div class="course_main_img">
                                        <img src="{{ asset('web/images/monitor-icon.png') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="course_main_content">
                                        <div class="course_title">
                                            <h6 class="main_subTitle_heading">lorem ipsume</h6>

                                            <div class="course_cart_icon">
                                                <button class=""><img
                                                        src="{{ asset('web/images/black_cart_icon.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>

                                        <p class="course_content_para">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>

                                </div>

                                <div class="course_card_footer">

                                    <div class="">
                                        <a href="./online-practice-test-details.php" class="btn main_action_btn"
                                            type="button">View Details</a>
                                    </div>

                                    <div class="course_add_to_cart_btn">
                                        <a href="javascript:;" class="btn main_action_btn" type="button">Add to cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="main_course_card">

                                <div class="course_card_body">

                                    <div class="course_main_img">
                                        <img src="{{ asset('web/images/monitor-icon.png') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="course_main_content">
                                        <div class="course_title">
                                            <h6 class="main_subTitle_heading">lorem ipsume</h6>

                                            <div class="course_cart_icon">
                                                <button class=""><img
                                                        src="{{ asset('web/images/black_cart_icon.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>

                                        <p class="course_content_para">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>

                                </div>

                                <div class="course_card_footer">

                                    <div class="">
                                        <a href="./online-practice-test-details.php" class="btn main_action_btn"
                                            type="button">View Details</a>
                                    </div>

                                    <div class="course_add_to_cart_btn">
                                        <a href="javascript:;" class="btn main_action_btn" type="button">Add to cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="main_course_card">

                                <div class="course_card_body">

                                    <div class="course_main_img">
                                        <img src="{{ asset('web/images/monitor-icon.png
                                        ') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="course_main_content">
                                        <div class="course_title">
                                            <h6 class="main_subTitle_heading">lorem ipsume</h6>

                                            <div class="course_cart_icon">
                                                <button class=""><img
                                                        src="{{ asset('web/images/black_cart_icon.png
                                                        ') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>

                                        <p class="course_content_para">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>

                                </div>

                                <div class="course_card_footer">

                                    <div class="">
                                        <a href="./online-practice-test-details.php" class="btn main_action_btn"
                                            type="button">View Details</a>
                                    </div>

                                    <div class="course_add_to_cart_btn">
                                        <a href="javascript:;" class="btn main_action_btn" type="button">Add to cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="main_course_card">

                                <div class="course_card_body">

                                    <div class="course_main_img">
                                        <img src="{{ asset('web/images/monitor-icon.png
                                        ') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="course_main_content">
                                        <div class="course_title">
                                            <h6 class="main_subTitle_heading">lorem ipsume</h6>

                                            <div class="course_cart_icon">
                                                <button class=""><img
                                                        src="{{ asset('web/images/black_cart_icon.png
                                                        ') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>

                                        <p class="course_content_para">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>

                                </div>

                                <div class="course_card_footer">

                                    <div class="">
                                        <a href="./online-practice-test-details.php" class="btn main_action_btn"
                                            type="button">View Details</a>
                                    </div>

                                    <div class="course_add_to_cart_btn">
                                        <a href="javascript:;" class="btn main_action_btn" type="button">Add to cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="main_course_card">

                                <div class="course_card_body">

                                    <div class="course_main_img">
                                        <img src="{{ asset('web/images/monitor-icon.png
                                        ') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="course_main_content">
                                        <div class="course_title">
                                            <h6 class="main_subTitle_heading">lorem ipsume</h6>

                                            <div class="course_cart_icon">
                                                <button class=""><img
                                                        src="{{ asset('web/images/black_cart_icon.png
                                                        ') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>

                                        <p class="course_content_para">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>

                                </div>

                                <div class="course_card_footer">

                                    <div class="">
                                        <a href="./online-practice-test-details.php" class="btn main_action_btn"
                                            type="button">View Details</a>
                                    </div>

                                    <div class="course_add_to_cart_btn">
                                        <a href="javascript:;" class="btn main_action_btn" type="button">Add to cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="best_online_education_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-6 mx-auto mb-4">

                    <div data-aos="fade-right">
                        <div class="online_education_left_part">

                            <div class="online_education_left_img">
                                <img src="{{ asset('web/images/aboutus_left-img.png
                                ') }}" class="img-fluid"
                                    alt="">
                            </div>

                            <div class="welcome_right_img_bk_line">
                                <div class="img_bk_line mx-auto"></div>
                                <div class="img_bk_line"></div>
                                <div class="img_bk_line"></div>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="col-sm-12 col-lg-6">

                    <div class="online_education_right_part">

                        <div class="lines_and_dreams">
                            <div>
                                <h4 class="main_subHeading">about</h4>
                            </div>

                            <div class="three_colored_lines">
                                <div class="colored_line mx-auto"></div>
                                <div class="colored_line ml-auto"></div>
                                <div class="colored_line mx-auto"></div>
                            </div>
                        </div>

                        <div><span class="main_heading">We Have Best Online</span></div>

                        <div><span class="main_stylish_heading">Education</span></div>

                        <p class="bold_para">
                            "Unlock Your Potential with Our Premier Online Education Platform!
                        </p>

                        <p class="online_education_para">
                            Are you ready to embark on a transformative learning journey? Look no further! Our online
                            education platform offers an unparalleled learning experience designed to elevate your knowledge
                            and skills to new heights.
                        </p>

                        <p class="bold_para">
                            Discover the Best of Online Learning:
                        </p>

                        <div>
                            <div class="best_of_online_learning">
                                <div class="online_learning_icon">
                                    <img src="{{ asset('web/images/online-learning-icon-01.png') }}" alt="">
                                </div>
                                <p class="online_education_para m-0">Access a diverse array of courses tailored to your
                                    interests and goals.</p>
                            </div>

                            <div class="best_of_online_learning">
                                <div class="online_learning_icon">
                                    <img src="{{ asset('web/images/online-learning-icon-02.png') }}" alt="">
                                </div>
                                <p class="online_education_para m-0">Learn from industry experts and seasoned
                                    professionals.</p>
                            </div>

                            <div class="best_of_online_learning">
                                <div class="online_learning_icon">
                                    <img src="{{ asset('web/images/online-learning-icon-03.png') }}" alt="">
                                </div>
                                <p class="online_education_para m-0">Engage with interactive content and cutting-edge
                                    technology.</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="./test-practices.php" class="btn main_action_btn" type="button">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="virtual_classes_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="virtual_classes_main">

                        <div class="lines_and_dreams">
                            <div class="three_colored_lines">
                                <div class="colored_line mx-auto"></div>
                                <div class="colored_line ml-auto"></div>
                                <div class="colored_line mx-auto"></div>
                            </div>

                            <div>
                                <h4 class="main_subHeading">virtual classes</h4>
                            </div>

                            <div class="three_colored_lines">
                                <div class="colored_line mx-auto"></div>
                                <div class="colored_line ml-auto"></div>
                                <div class="colored_line mx-auto"></div>
                            </div>
                        </div>

                        <div class="position-relative">
                            <div class="text-center">
                                <span class="main_heading">Find The Best <span class="main_stylish_heading">Course</span>
                                    For You</span>
                            </div>

                            <div class="explore_courses_btn">
                                <a href="./virtual-classes.php" class="btn main_action_btn" type="button">Explore
                                    All</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="virtual_course_card_main">

                                    <div class="virtual_classes_img">
                                        <img src="{{ asset('web/images/courses-img-01.png') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="virtual_course_body">

                                        <p class="virtual_course_para">
                                            Lorem Ipsum is simply dummy text of the printing.
                                        </p>

                                        <div class="enrolled_student_details">

                                            <div class="enrolled_student_photo">
                                                <img src="{{ asset('web/images/user-course-img.png') }}"
                                                    alt="">
                                            </div>

                                            <p class="virtual_course_student_name m-0">
                                                Lillian Wals
                                            </p>

                                        </div>

                                        <div>
                                            <p class="virtual_course_price m-0">
                                                $50.00
                                            </p>
                                        </div>

                                        <div class="virtual_classes_body_btn">

                                            <div class="virtual_classes_card_btn">
                                                <div>
                                                    <a href="./virtual-class-detail-page.php" class="btn main_action_btn"
                                                        type="button">View Details</a>
                                                </div>

                                                <div>
                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Add
                                                        to cart</a>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="virtual_classes_add_to_cart_btn">
                                                    <img src="{{ asset('web/images/black_cart_icon.png
                                                    ') }}"
                                                        alt="">
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-4">
                                <div class="virtual_course_card_main">

                                    <div class="virtual_classes_img">
                                        <img src="{{ asset('web/images/courses-img-02.png
                                        ') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="virtual_course_body">

                                        <p class="virtual_course_para">
                                            Lorem Ipsum is simply dummy text of the printing.
                                        </p>

                                        <div class="enrolled_student_details">

                                            <div class="enrolled_student_photo">
                                                <img src="{{ asset('web/images/user-course-img.png
                                                ') }}"
                                                    alt="">
                                            </div>

                                            <p class="virtual_course_student_name m-0">
                                                Lillian Wals
                                            </p>

                                        </div>

                                        <div>
                                            <p class="virtual_course_price m-0">
                                                $50.00
                                            </p>
                                        </div>

                                        <div class="virtual_classes_body_btn">

                                            <div class="virtual_classes_card_btn">
                                                <div>
                                                    <a href="./virtual-class-detail-page.php" class="btn main_action_btn"
                                                        type="button">View Details</a>
                                                </div>

                                                <div>
                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Add
                                                        to cart</a>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="virtual_classes_add_to_cart_btn">
                                                    <img src="{{ asset('web/images/black_cart_icon.png
                                                    ') }}"
                                                        alt="">
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-4">
                                <div class="virtual_course_card_main">

                                    <div class="virtual_classes_img">
                                        <img src="{{ asset('web/images/courses-img-03.png
                                        ') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="virtual_course_body">

                                        <p class="virtual_course_para">
                                            Lorem Ipsum is simply dummy text of the printing.
                                        </p>

                                        <div class="enrolled_student_details">

                                            <div class="enrolled_student_photo">
                                                <img src="{{ asset('web/images/user-course-img.png
                                                ') }}"
                                                    alt="">
                                            </div>

                                            <p class="virtual_course_student_name m-0">
                                                Lillian Wals
                                            </p>

                                        </div>

                                        <div>
                                            <p class="virtual_course_price m-0">
                                                $50.00
                                            </p>
                                        </div>

                                        <div class="virtual_classes_body_btn">

                                            <div class="virtual_classes_card_btn">
                                                <div>
                                                    <a href="./virtual-class-detail-page.php" class="btn main_action_btn"
                                                        type="button">View Details</a>
                                                </div>

                                                <div>
                                                    <a href="javascript:;" class="btn main_action_btn" type="button">Add
                                                        to cart</a>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="virtual_classes_add_to_cart_btn">
                                                    <img src="{{ asset('web/images/black_cart_icon.png
                                                    ') }}"
                                                        alt="">
                                                </button>
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
    </section>


    <div data-aos="fade-up">
        <section class="our_mission_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-lg-6">
                        <div class="our_mission_left_part">
                            <div>
                                <h2>
                                    <span class="main_heading">Our</span>
                                    <span class="main_stylish_heading">Mission</span>
                                </h2>
                            </div>

                            <div class="our_mission_main_point">
                                <div class="our_mission_point_img">
                                    <img src="{{ asset('web/images/our-mission-icon-01.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="our_mission_point_title m-0">
                                        College Counselling
                                    </p>

                                    <p class="our_mission_para m-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem
                                        Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>

                            <div class="our_mission_main_point">
                                <div class="our_mission_point_img">
                                    <img src="{{ asset('web/images/our-mission-icon-02.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="our_mission_point_title m-0">
                                        College Counselling
                                    </p>

                                    <p class="our_mission_para m-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem
                                        Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>

                            <div class="our_mission_main_point">
                                <div class="our_mission_point_img">
                                    <img src="{{ asset('web/images/our-mission-icon-03.png
                                    ') }}" alt="">
                                </div>
                                <div>
                                    <p class="our_mission_point_title m-0">
                                        College Counselling
                                    </p>

                                    <p class="our_mission_para m-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem
                                        Ipsum has been the industry's standard.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>



    <section class="latest_blogs_news_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest_blog_heading">
                        <div class="position-relative">
                            <div class="blog_and_news_title text-center">
                                <span class="main_stylish_heading">Latest Blog </span><span class="main_heading"> &
                                    News</span>
                            </div>

                            <div class="explore_courses_btn">
                                <a href="./blogs-page.php" class="btn main_action_btn" type="button">Explore All</a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="lastest_blog_card_main">

                                <div class="blog_post_img">
                                    <img src="{{ asset('web/images/blog-img-01.png
                                    ') }}" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="blog_date_info">
                                    <p class="m-0">Simply Dummy Text</p>
                                    <p class="m-0">Dec 20</p>
                                </div>

                                <div>
                                    <h6 class="blog_post_title">Lorem ipsume doller</h6>
                                </div>

                                <div>
                                    <p class="blog_para m-0">
                                        Lorem Ipsum typesetting is dummy the simply dummy the printing and Lorem Ipsum
                                        typesetting is dummy the simply dummy the printing.
                                    </p>
                                </div>

                                <div class="latest_post_readMore_btn">
                                    <a href="./blog-details.php" class="btn main_action_btn w-100" type="button">Read
                                        More</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="lastest_blog_card_main">

                                <div class="blog_post_img">
                                    <img src="{{ asset('web/images/blog-img-02.png
                                    ') }}" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="blog_date_info">
                                    <p class="m-0">Simply Dummy Text</p>
                                    <p class="m-0">Dec 20</p>
                                </div>

                                <div>
                                    <h6 class="blog_post_title">Lorem ipsume doller</h6>
                                </div>

                                <div>
                                    <p class="blog_para m-0">
                                        Lorem Ipsum typesetting is dummy the simply dummy the printing and Lorem Ipsum
                                        typesetting is dummy the simply dummy the printing.
                                    </p>
                                </div>

                                <div class="latest_post_readMore_btn">
                                    <a href="./blog-details.php" class="btn main_action_btn w-100" type="button">Read
                                        More</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="lastest_blog_card_main">

                                <div class="blog_post_img">
                                    <img src="{{ asset('web/images/blog-img-03.png
                                    ') }}" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="blog_date_info">
                                    <p class="m-0">Simply Dummy Text</p>
                                    <p class="m-0">Dec 20</p>
                                </div>

                                <div>
                                    <h6 class="blog_post_title">Lorem ipsume doller</h6>
                                </div>

                                <div>
                                    <p class="blog_para m-0">
                                        Lorem Ipsum typesetting is dummy the simply dummy the printing and Lorem Ipsum
                                        typesetting is dummy the simply dummy the printing.
                                    </p>
                                </div>

                                <div class="latest_post_readMore_btn">
                                    <a href="./blog-details.php" class="btn main_action_btn w-100" type="button">Read
                                        More</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="lastest_blog_card_main">

                                <div class="blog_post_img">
                                    <img src="{{ asset('web/images/blog-img-04.png
                                    ') }}" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="blog_date_info">
                                    <p class="m-0">Simply Dummy Text</p>
                                    <p class="m-0">Dec 20</p>
                                </div>

                                <div>
                                    <h6 class="blog_post_title">Lorem ipsume doller</h6>
                                </div>

                                <div>
                                    <p class="blog_para m-0">
                                        Lorem Ipsum typesetting is dummy the simply dummy the printing and Lorem Ipsum
                                        typesetting is dummy the simply dummy the printing.
                                    </p>
                                </div>

                                <div class="latest_post_readMore_btn">
                                    <a href="./blog-details.php" class="btn main_action_btn w-100" type="button">Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="career_counselling_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-5 position-relative mx-auto mb-3">
                    <div class="career_counselling_img">
                        <img src="{{ asset('web/images/college-counselling-left-img.png
                        ') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="circle_div">
                        <span class="blue_circle"></span>
                    </div>

                    <div class="circle_div_01">
                        <span class="orange_circle"></span>
                    </div>

                    <div class="line_frame">
                        <img src="{{ asset('web
                        ') }}./images/line_frame.png" alt="">
                    </div>
                </div>

                <div class="col-sm-12 col-lg-7">
                    <div class="career_counselling_right_part">

                        <div>
                            <div>
                                <span class="main_stylish_heading">College Counselling </span>
                                <span class="main_heading">by experts</span>
                            </div>
                        </div>

                        <p class="career_counselling_para">
                            Navigating the admissions process is over whelming ,weather you are planning in grade 9 and 10
                            or 11 and 12
                        </p>

                        <p class="career_counselling_para">
                            Our highly structured, data-driven, holistic approach, on years of experience to deliver
                            consistent results.
                        </p>

                        <div class="career_counselling_detail_addtocart_btn">
                            <div class="mt-4">
                                <a href="./college-counselling.php" class="btn main_action_btn"
                                    type="button">Details</a>
                            </div>

                            <div>
                                <button class="add_to_cart_btn">
                                    <img src="{{ asset('web/images/cart-icon.png
                                    ') }}" alt="">
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="client_reviews_section">
        <div class="container">
            <div class="row position-relative">
                <div class="col-md-12 pb-4">
                    <div>
                        <div class="text-center">
                            <span class="main_heading"><span class="main_stylish_heading">What Our</span> Client's
                                Say</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mx-auto">

                    <div class="main_client_review">

                        <div class="client_feedback_quote text-center">
                            <span><i class="fa-solid fa-quote-left"></i></span>
                        </div>

                        <div>
                            <p class="client_feedback">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deser
                                unt mollit anim id est laborumiste natus error sit."
                            </p>

                            <h6 class="client_name">Erma V. Tunstall</h6>

                            <p class="status_of_user">Client</p>
                        </div>

                    </div>

                </div>

                <div class="col-md-12 position-absolute">

                    <div class="all_client_pictures">

                        <div class="clients_pic">
                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-02.png') }}" alt="">
                            </div>

                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-03.png') }}" alt="">
                            </div>
                        </div>

                        <div class="clients_pic justify-content-between">
                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-01.png') }}" alt="">
                            </div>

                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-04.png') }}" alt="">
                            </div>
                        </div>

                        <div class="clients_pic justify-content-between px-5 py-3">
                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-05.png') }}" alt="">
                            </div>

                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-06.png') }}" alt="">
                            </div>
                        </div>

                        <div class="clients_pic justify-content-between px-4 py-5">
                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-07.png') }}" alt="">
                            </div>

                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-10.png') }}" alt="">
                            </div>
                        </div>

                        <div class="clients_pic">
                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-08.png') }}" alt="">
                            </div>

                            <div class="client_pic">
                                <img src="{{ asset('web/images/client-img-09.png') }}" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        AOS.init();
    </script>
@endpush
