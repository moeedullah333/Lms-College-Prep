@extends('web.layouts.main')

@section('content')
    <section class="other_section_with_bk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_main_subHeading">

                        <div class="section_heading">
                            <span class="main_boldHeading">virtual</span>
                            <span class="main_heading pl-2">classes</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="virtual_class_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 mb-3">
                    <div class="virtual_class_details_left_part">
                        <div class="virtual_class_detail_img">
                            <img src="{{ asset($course->image) }}" style="width: 100%;max-width: 100%;" class="img-fluid" alt="">
                        </div>

                        <div class="blog_details_main_title py-3">
                            <span class="main_heading">Full Length</span>
                            <span class="main_boldHeading pl-1">{{ $course->course_name }}</span>
                        </div>

                        <div class="pb-3">
                            <div class="d-flex justify-content-center">
                                {!! $course->description !!}
                            </div>
                        </div>

                        <div class="course_section_heading_with_btn">
                            <div>
                                <span class="main_heading">course</span>
                                <span class="main_boldHeading pl-1">section:</span>
                            </div>
                            <div class="course_section_btns">
                                <a href="javascript:;" class="course_section_action_btn">Section 1</a>
                                <a href="javascript:;" class="course_section_action_btn">Section 2</a>
                                <a href="javascript:;" class="course_section_action_btn">Section 3</a>
                                <a href="javascript:;" class="course_section_action_btn">Section 4</a>
                            </div>
                        </div>


                        <div class="course_review_main pt-4">

                            <div class="course_review_heading pb-2">
                                <span class="main_heading">course</span>
                                <span class="main_boldHeading pl-1">reviews</span>
                            </div>

                            <div class="course_review_rating_main">
                                <div class="">
                                    <h6 class="average_rating_heading">Average Rating</h6>

                                    <p class="overall_rating_of_course">4.5</p>

                                    <div class="course_ratings text-center">
                                        <span class="rating_star"><i class="fa-solid fa-star"></i></span>
                                        <span class="rating_star"><i class="fa-solid fa-star"></i></span>
                                        <span class="rating_star"><i class="fa-solid fa-star"></i></span>
                                        <span class="rating_star"><i class="fa-solid fa-star"></i></span>
                                        <span class="rating_star"><i class="fa-solid fa-star"></i></span>
                                    </div>

                                    <div class="text-center">
                                        <span class="total_ratings">1,135 Ratings</span>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="average_rating_heading">Details</h6>

                                    <div>

                                        <div class="course_rating_details">
                                            <div>
                                                <span class="total_ratings">5</span>
                                                <span class="total_ratings">Stars</span>
                                            </div>

                                            <div>
                                                <span class="middle_rating_line"></span>
                                            </div>

                                            <div>
                                                <span class="total_ratings">1,125</span>
                                            </div>
                                        </div>

                                        <div class="course_rating_details">
                                            <div>
                                                <span class="total_ratings">4</span>
                                                <span class="total_ratings">Stars</span>
                                            </div>

                                            <div>
                                                <span class="middle_rating_line"></span>
                                            </div>

                                            <div>
                                                <span class="total_ratings">125</span>
                                            </div>
                                        </div>

                                        <div class="course_rating_details">
                                            <div>
                                                <span class="total_ratings">3</span>
                                                <span class="total_ratings">Stars</span>
                                            </div>

                                            <div>
                                                <span class="middle_rating_line"></span>
                                            </div>

                                            <div>
                                                <span class="total_ratings">0</span>
                                            </div>
                                        </div>

                                        <div class="course_rating_details">
                                            <div>
                                                <span class="total_ratings">2</span>
                                                <span class="total_ratings">Stars</span>
                                            </div>

                                            <div>
                                                <span class="middle_rating_line"></span>
                                            </div>

                                            <div>
                                                <span class="total_ratings">0</span>
                                            </div>
                                        </div>

                                        <div class="course_rating_details">
                                            <div>
                                                <span class="total_ratings">1</span>
                                                <span class="total_ratings">Stars</span>
                                            </div>

                                            <div>
                                                <span class="middle_rating_line"></span>
                                            </div>

                                            <div>
                                                <span class="total_ratings">0</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-3">
                    <div class="virtual_class_details_right_part pt-4">

                        <div class="course_price_details">

                            <div>
                                <span class="course_price_text">Price:</span>
                                <span class="course_price_text text-primary">${{ $course->price }}</span>
                            </div>

                            <div class="course_cart_img position-relative">
                                <a href="javascript:;">
                                    <img src="{{ asset('web/images/black_cart_icon.png') }}" alt="">
                                    <span data-id="{{ $course->id }}" class="cart_item_number item_check">0</span>
                                </a>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between py-2">
                            <a href="javascript:;" id="buy_now" class="btn main_action_btn" type="button" data-id="{{$course->id}}">Buy Now</a>
                            <a href="javascript:;" id="add_to_cart" data-id="{{ $course->id }}"
                                class="btn main_action_btn" type="button">Add to Cart</a>
                        </div>
                            <p id="msg" class="d-none text-success" >Added To Cart</p>

                        <div class="course_duration_details_main">
                            <div class="course_duration_details">
                                <span class="course_details_left_text">No Of Hours</span>
                                <span class="course_details_right_text">{{ $course->total_hour }}</span>
                            </div>

                            <div class="course_duration_details">
                                <span class="course_details_left_text">Instructor Name</span>
                                <span class="course_details_right_text">{{ $course->instructor_name }}</span>
                            </div>

                            <div class="course_duration_details">
                                <span class="course_details_left_text">Video Lessons</span>
                                <span class="course_details_right_text">8</span>
                            </div>

                            <div class="course_duration_details">
                                <span class="course_details_left_text">Duration</span>
                                @php
                                    $start_date = date('d-M-y', strtotime($course->start_date));
                                    $end_date = date('d-M-y', strtotime($course->end_date));
                                @endphp
                                <span class="course_details_right_text">{{ $start_date }} to {{ $end_date }}</span>
                            </div>

                            <div class="course_duration_details">
                                <span class="course_details_left_text">Time</span>
                                @php
                                    $time1 = date('h:i:A', strtotime($course->time1));
                                    $time2 = date('h:i:A', strtotime($course->time2));

                                @endphp
                                <span class="course_details_right_text">{{ $course->day }}, {{ $time1 }} -
                                    {{ $time2 }}</span>
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
                                            <div class="col-4 col-sm-2 col-lg-4">
                                                <div class="related_news_img text-center">
                                                    <img src="{{ asset('web/images/related-news-img-01.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-8 col-sm-10 col-lg-8 pl-0 align-self-center">
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
                                            <div class="col-4 col-sm-2 col-lg-4">
                                                <div class="related_news_img text-center">
                                                    <img src="{{ asset('web/images/related-news-img-02.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-8 col-sm-10 col-lg-8 pl-0 align-self-center">
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

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            item_count_check()
            cart_item_count();

            function item_count_check() {
                $('.item_check').each(function(i, item) {

                    let product_id = $(item).data('id');
                    if (localStorage.getItem("cart_items") !== null) {
                        let array = JSON.parse(localStorage.getItem("cart_items"));

                        let found = false;

                        array.forEach((element, index) => {
                            if (element.id === product_id) {
                                found = true;
                            }
                        });

                        if (found) {
                            array.forEach((element, index) => {
                                if (element.id === product_id) {
                                    $(item).html(element.qty);
                                    
                                }
                            });
                        }
                    }
                })
            }

            $('#add_to_cart').click(function(e) {
                e.preventDefault();
                let product_id = $(this).data('id');
                let qty = 1;
                $("#msg").removeClass('d-none');

                if (localStorage.getItem("cart_items") !== null) {
                    let array = JSON.parse(localStorage.getItem("cart_items"));

                    let found = false;

                    array.forEach((element, index) => {
                        if (element.id === product_id) {
                            array[index] = {
                                "id": product_id,
                                "image": "{{ asset($course->image) }}",
                                "price": {{ $course->price }},
                                "name": "{{ $course->course_name }}",
                                "qty": qty
                            };
                            found = true;
                            $("#msg").html('Already Added to Cart');
                        }
                    });

                    if (!found) {
                        array.push({
                            "id": product_id,
                            "image": "{{ asset($course->image) }}",
                            "price": {{ $course->price }},
                            "name": "{{ $course->course_name }}",
                            "qty": qty
                        });
                    }


                    localStorage.setItem("cart_items", JSON.stringify(array));



                } else {
                    let array = [];


                    array.push({
                        "id": product_id,
                        "image": "{{ asset($course->image) }}",
                        "price": {{ $course->price }},
                        "name": "{{ $course->course_name }}",
                        "qty": qty
                    });


                    localStorage.setItem("cart_items", JSON.stringify(array));
                }

                item_count_check()
                cart_item_count();
                setTimeout(() => {
                    $("#msg").addClass('d-none');
                    window.location.href = "{{ route('web.cart.page') }}"
                }, 1000);
            })

            $('#buy_now').click(function(e) {
                e.preventDefault();
                let product_id = $(this).data('id');
                let qty = 1;
                $("#msg").removeClass('d-none');

                if (localStorage.getItem("cart_items") !== null) {
                    let array = JSON.parse(localStorage.getItem("cart_items"));

                    let found = false;

                    array.forEach((element, index) => {
                        if (element.id === product_id) {
                            array[index] = {
                                "id": product_id,
                                "image": "{{ asset($course->image) }}",
                                "price": {{ $course->price }},
                                "name": "{{ $course->course_name }}",
                                "qty": qty
                            };
                            found = true;
                            $("#msg").html('Already Added to Cart');
                        }
                    });

                    if (!found) {
                        array.push({
                            "id": product_id,
                            "image": "{{ asset($course->image) }}",
                            "price": {{ $course->price }},
                            "name": "{{ $course->course_name }}",
                            "qty": qty
                        });
                    }


                    localStorage.setItem("cart_items", JSON.stringify(array));



                } else {
                    let array = [];


                    array.push({
                        "id": product_id,
                        "image": "{{ asset($course->image) }}",
                        "price": {{ $course->price }},
                        "name": "{{ $course->course_name }}",
                        "qty": qty
                    });


                    localStorage.setItem("cart_items", JSON.stringify(array));
                }

                item_count_check()
                cart_item_count();
                setTimeout(() => {
                    $("#msg").addClass('d-none');
                    window.location.href = "{{ route('web.checkout.page') }}"
                }, 1000);
            })
        });
    </script>
@endpush
