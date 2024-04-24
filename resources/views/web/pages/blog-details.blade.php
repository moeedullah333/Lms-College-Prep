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
                                    <span class="main_boldHeading">blog</span>
                                    <span class="main_heading pl-2">details</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_details_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 mb-3">
                    <div class="blog_details_left_part">

                        <div class="blog_detail_img">
                            <img src="{{ asset($blog->image) }}" class="img-fluid" alt="">
                        </div>

                        <div class="blog_details_info">
                            <div>
                                <span class="blog_detail_info_icon"><i class="fa-regular fa-calendar-days"></i></span>
                                <span class="blog_detail_info_text">{{ $blog->created_at }}</span>
                            </div>

                            <div>
                                <span class="blog_detail_info_icon"><i class="fa-solid fa-user-tie"></i></span>
                                <span class="blog_detail_info_text">By {{ $blog->user_detail->first_name }}</span>
                            </div>

                            <div>
                                <span class="blog_detail_info_icon"><i class="fa-regular fa-clock"></i></span>
                                <span class="blog_detail_info_text">5 Mins</span>
                            </div>

                            <div>
                                <span class="blog_detail_info_icon"><i class="fa-regular fa-message"></i></span>
                                <span class="blog_detail_info_text">{{ count($blog->blog_comments) }} Comments</span>
                            </div>
                        </div>

                        <div>
                            <h2 class="blog_detail_title">{{ $blog->title }}</h2>

                            {!! $blog->description !!}
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-lg-3">
                    <div class="blog_details_right_part">
                        <div class="other_blog_categories_main">

                            <h6 class="other_blog_categories_heading">other blog categories</h6>

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Online Education
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit,
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Tests
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit,
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Impact Of Online Education
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit,
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapsefour" aria-expanded="false"
                                                aria-controls="collapsefour">
                                                Daily Online Classes
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit,
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapsefive" aria-expanded="false"
                                                aria-controls="collapsefive">
                                                Mathematics
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit,
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapsesix" aria-expanded="false"
                                                aria-controls="collapsesix">
                                                Health & Fitness
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit,
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="related_news_main">

                            <div>
                                <span class="main_heading">related</span>
                                <span class="main_boldHeading pl-1">blogs</span>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="related_news_blogs">
                                        <div class="row">
                                            <div class="col-4 col-md-4">
                                                <div class="related_news_img">
                                                    <img src="./images/related-news-img-01.png" class="img-fluid"
                                                        alt="">
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
                                                    <img src="./images/related-news-img-02.png" class="img-fluid"
                                                        alt="">
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
                    </div>
                </div>

                <div class="col-md-10 pt-3">

                    <div class="blog_details_last_part">

                        {{-- <div class="blog_text_heading_with_btn">
                            <div>
                                <h4 class="learn_from_blog_text">What Will You Learn From Blog:</h4>
                            </div>
                            <div class="detail_section_btns">
                                <a href="javascript:;" class="blog_details_action_btn">Section 1</a>
                                <a href="javascript:;" class="blog_details_action_btn">Section 2</a>
                                <a href="javascript:;" class="blog_details_action_btn">Section 3</a>
                                <a href="javascript:;" class="blog_details_action_btn">Section 4</a>
                            </div>
                        </div> --}}

                        <div class="all_blogs_comments_heading py-4">
                            <span class="main_heading">blog</span>
                            <span class="main_boldHeading pl-1">comments
                                <span>({{ count($blog->blog_comments) }})</span></span>
                        </div>
                        @if (isset(auth()->user()->id))
                            <div class="mb-5">
                                <div class="student_form_main">
                                    <form id="comment_form">

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="firstname">Comment</label>
                                                <input type="text" id="commnet" name="comment" class="form-control"
                                                    placeholder="Please Enter Comment">
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" id="btn_comment"
                                                class="btn btn-primary">Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif

                        <div class="blogs_post_comments_main">
                            @if (!$blog->blog_comments->isEmpty())
                                @foreach ($blog->blog_comments as $comment)
                                    <div class="all_blogs_comments pb-2">
                                        <div class="blog_post_user_img">
                                            <img src="{{ isset($comment->user_detail->image) ? $comment->user_detail->image : asset('web/images/blog-comment-img.png') }}"
                                                alt="">
                                        </div>
                                        <div>
                                            <h6 class="blog_post_username">
                                                {{ $comment->user_detail->first_name . ' ' . $comment->user_detail->last_name }}
                                            </h6>
                                            <p class="blog_comment_para">
                                                {{ $comment->comment }}
                                            </p>

                                            <div>
                                                <button class="btn blog_post_reply_btn">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p id="nocomment">No Comments found</p>
                            @endif



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
            $('#btn_comment').on('click', function(e) {
                e.preventDefault();
                var data = {
                    '_token': "{{ csrf_token() }}",
                    'user_id': "{{ isset(auth()->user()->id) ? auth()->user()->id : null }}",
                    'comment': $('#commnet').val(),
                };
                var url = "{{ route('web.blog.comment', $blog->id) }}";
                $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res) {
                        if (res.status == true) {
                            $('.main_boldHeading span').html("({{count($blog->blog_comments)+1}})")
                            $('#nocomment').addClass('d-none');
                            $('.blogs_post_comments_main').append(`
                            <div class="all_blogs_comments pb-2">
                                        <div class="blog_post_user_img">
                                            <img src="${ res.data.user_detail.image != null ? res.data.user_detail.image : "{{asset('web/images/blog-comment-img.png')}}" }"
                                                alt="">
                                        </div>
                                        <div>
                                            <h6 class="blog_post_username">
                                                ${ res.data.user_detail.first_name + ' ' + res.data.user_detail.last_name }
                                            </h6>
                                            <p class="blog_comment_para">
                                                ${ res.data.comment }
                                            </p>

                                            <div>
                                                <button class="btn blog_post_reply_btn">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                            `)
                            $('#commnet').val('');
                        }
                    }
                });
            })
        });
    </script>
@endpush
