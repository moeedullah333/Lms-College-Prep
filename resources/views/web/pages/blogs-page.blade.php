@extends('web.layouts.main')

@section('content')
    <section class="other_section_with_bk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_main_subHeading">

                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="section_heading">
                                    <span class="main_boldHeading">welcome to the</span>
                                    <span class="main_heading pl-2">math knots college prep blog</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog_filters_main">

                        <div class="sort_by_filter_container">
                            <span class="sort_by_text">Sort By</span>

                            <div class="form-group m-0 pl-2">
                                <select class="form-control" id="sortbypopularity">
                                    <option selected disabled>Popularity</option>
                                    <option>One hour</option>
                                    <option>One day</option>
                                    <option>One week</option>
                                    <option>One month</option>
                                    <!-- <option>5</option> -->
                                </select>
                            </div>
                        </div>

                        <div class="search_bar">
                            <input type="text" class="search_input" placeholder="Search">
                            <button class="search_button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-9 order-sm-2 order-lg-1">

                    <div class="row">
                        
                        @foreach ($blogs as $blog)
                            
                        <div class="col-md-6">

                            <div class="main_blog_card">

                                <div class="blog_card_img">
                                    <img src="{{ asset($blog->image) }}" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="blog_card_body">

                                    <div class="blog_post_info">

                                        <span class="blog_calendar_icon"><i class="fa-solid fa-calendar-days"></i></span>
                                        <span class="blog_post_date">{{$blog->created_at}}</span>

                                    </div>

                                    <div>
                                        <h6 class="blog_title">{{$blog->title}}</h6>

                                        <p class="blog_card_para">
                                           {{$blog->short_description}}
                                        </p>

                                        <div>
                                            <a href="{{route('web.blog.detail.page',$blog->id)}}" class="btn main_action_btn" type="button">Read
                                                Blog</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach


                       
                    </div>

                </div>


                <div class="col-sm-8 col-lg-3 mx-auto order-sm-1 order-lg-2 mb-3">

                    <div class="main_blog_right_part">

                        <div class="blog_categories_main">

                            <div class="pb-2">
                                <span class="main_heading">blog</span>
                                <span class="main_boldHeading pl-1">categories</span>
                            </div>

                            <div class="main_accordian">

                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Graphics Designing
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Students Bag’s
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Tutorial Videos
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingfour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapsefour" aria-expanded="false"
                                                    aria-controls="collapsefour">
                                                    Online Education
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingfive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapsefive" aria-expanded="false"
                                                    aria-controls="collapsefive">
                                                    Student Video
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingsix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapsesix" aria-expanded="false"
                                                    aria-controls="collapsesix">
                                                    Other Products
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="related_news_main">

                            <div>
                                <span class="main_heading">related</span>
                                <span class="main_boldHeading pl-1">news</span>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="related_news_blogs">
                                        <div class="row">
                                            <div class="col-4 col-md-4">
                                                <div class="related_news_img">
                                                    <img src="{{ asset('web/images/related-news-img-01.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-8 col-md-8 pl-0">
                                                <div class="related_news_content">
                                                    <div>
                                                        <span class="news_card_calendar_icon"><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                        <span class="news_card_posting_date">26 April 2023</span>
                                                    </div>

                                                    <div>
                                                        <h6 class="related_news_title">Affiliate Marketing A Beginner’s
                                                            Guide.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="related_news_blogs">
                                        <div class="row">
                                            <div class="col-4 col-md-4">
                                                <div class="related_news_img">
                                                    <img src="{{ asset('web/images/related-news-img-02.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-8 col-md-8 pl-0">
                                                <div class="related_news_content">
                                                    <div>
                                                        <span class="news_card_calendar_icon"><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                        <span class="news_card_posting_date">26 April 2023</span>
                                                    </div>

                                                    <div>
                                                        <h6 class="related_news_title">No.1 The Best Online Course 2023.
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="popular_tags_main">

                            <div>
                                <span class="main_heading">popular</span>
                                <span class="main_boldHeading pl-1">tags</span>
                            </div>

                            <div class="popular_tags">
                                <a href="javascript:;" class="tag_anchor">
                                    <span>Online</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Networking</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Teaching</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Online</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Networking</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Teaching</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Online</span>
                                </a>

                                <a href="javascript:;" class="tag_anchor">
                                    <span>Networking</span>
                                </a>
                            </div>

                        </div>


                        <div class="featured_courses">

                            <div>
                                <span class="main_heading">featured</span>
                                <span class="main_boldHeading pl-1">courses</span>
                            </div>

                            <div class="text-center">
                                <a href="javascript:;" class="featured_course position-relative">
                                    <img src="{{ asset('web/images/blog-right-img.png') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="mt-4">
                                <a href="./apply-now.php" class="btn main_action_btn w-100" type="button">View
                                    Details</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
