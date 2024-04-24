<footer class="footer_section">

    <div class="footer_top_bar">

        <div class="left_part">
            <div class="text-center">
                <span class="main_heading">subscribe for latest <span class="main_stylish_heading">updates</span></span>
            </div>
        </div>

        <div class="right_part">
            <div class="input_and_button">
                <div>
                    <input type="email" class="emial_for_suscription form-control" id="" aria-describedby=""
                        placeholder="Your Email Address">
                </div>
                <div class="pl-3">
                    <a href="javascript:;" class="btn main_action_btn" type="button">Subscribe Now</a>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-lg-6 mb-4">
                <div class="footer_left_part">

                    <div class="footer_main_logo">
                        <img src="{{asset('web/images/main-logo.png')}}" alt="">
                    </div>

                </div>
            </div>


            <div class="col-12 col-sm-4 col-lg-3">

                <div class="all_links">

                    <h6 class="footer_links_heading">Quick links</h6>

                    <ul class="quick_links_list">
                        <li><a href="{{route('web.course.listing.page')}}" class="footer_link">Virtual classes</a></li>
                        <li><a href="javascript:;" class="footer_link">Online practice</a></li>
                        <li><a href="javascript:;" class="footer_link">College Counselling</a></li>
                        <li><a href="{{route('web.blog.page')}}" class="footer_link">Blogs</a></li>
                        <li><a href="javascript:;" class="footer_link">Reviews</a></li>
                        <li><a href="javascript:;" class="footer_link">Contact Us</a></li>
                        <li><a href="javascript:;" class="footer_link">Privacy</a></li>
                        <li><a href="javascript:;" class="footer_link">Terms & Conditions</a></li>
                    </ul>

                </div>

            </div>

            <div class="col-12 col-sm-4 col-lg-3">

                <div class="all_links">

                    <h6 class="footer_links_heading">Contact Info</h6>

                    <ul class="quick_links_list">

                        <li class="mb-3"><a href="javascript:;" class="footer_link">
                                <span class=""><i class="fa-solid fa-envelope"></i></span>
                                <span class="email_helpline pl-2">mathknots.help@gmail.com</span>
                            </a></li>

                        <li><a href="javascript:;" class="footer_link">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <span class="location pl-2">Fairfax,VA-22033</span>
                            </a></li>

                    </ul>

                </div>

            </div>
        </div>
    </div>

    <div class="footer_bar">
        <div>
            <span class="copyright_para">Copyright 2023 All Right Reserved.Math-Knots LLC</span>
        </div>

        <div class="footer_bottom_links">
            <span><a href="javascript:;" class="footer_social_links"><i class="fa-brands fa-facebook-f"></i></a></span>
            <span><a href="javascript:;" class="footer_social_links"><i class="fa-brands fa-instagram"></i></a></span>
            <span><a href="javascript:;" class="footer_social_links"><i class="fa-brands fa-twitter"></i></a></span>
            <span><a href="javascript:;" class="footer_social_links"><i class="fa-brands fa-linkedin-in"></i></a></span>

        </div>
    </div>
</footer>

@include('web.layouts.script')

</body>

</html>
