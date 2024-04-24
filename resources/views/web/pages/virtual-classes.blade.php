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
                                    <span class="main_boldHeading">virtual</span>
                                    <span class="main_heading pl-2">classes</span>
                                </div>
                            </div>
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
                        </div>

                        <div class="row">
                            @foreach ($courses as $course)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="virtual_course_card_main">

                                        <div class="virtual_classes_img">
                                            <img src="{{ asset($course->image) }}" class="img-fluid" alt="">
                                        </div>

                                        <div class="virtual_course_body">

                                            <p class="virtual_course_para">
                                                {{ $course->short_description }}
                                            </p>

                                            <div class="students_details_with_ratings">

                                                <div class="enrolled_student_details p-0">



                                                    <p class="virtual_course_student_name m-0">
                                                        {{ $course->instructor_name }}
                                                    </p>

                                                </div>


                                            </div>

                                            <div class="course_price_with_enrolled_students">
                                                <p class="virtual_course_price m-0">
                                                    ${{ $course->price }}
                                                </p>


                                            </div>

                                            <div class="virtual_classes_body_btn">

                                                <div class="virtual_classes_card_btn">
                                                    <div>
                                                        <a href="{{ route('web.course.deatil.page', $course->id) }}"
                                                            class="btn main_action_btn" type="button">View Details</a>
                                                    </div>

                                                    <div>
                                                        <a class="btn main_action_btn add_to_cart text-light"
                                                            data-product="{{ $course }}" data-id="{{ $course->id }}"
                                                            type="button">Add to
                                                            cart</a>
                                                    </div>
                                                </div>
                                                

                                                <div>
                                                    <button class="virtual_classes_add_to_cart_btn">
                                                        <img src="{{ asset('web/images/black_cart_icon.png') }}"
                                                            alt="">
                                                        <span data-id="{{ $course->id }}"
                                                            class="cart_item_number item_check">0</span>
                                                    </button>
                                                </div>

                                            </div>
                                            <p id="msg_{{$course->id}}" class="d-none text-success">Added To Cart</p>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            item_count_check()
            cart_item_count();
            function item_count_check()
            {
                    $('.item_check').each(function(i,item) {
                    
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
    
            $('.add_to_cart').click(function(e) {
                e.preventDefault();
               
                let product_id = $(this).data('id');
                let data = $(this).data('product');
    
                let qty = 1;
    
                $("#msg_"+product_id).removeClass('d-none');
    
                if (localStorage.getItem("cart_items") !== null) {
                    let array = JSON.parse(localStorage.getItem("cart_items"));
    
                    let found = false;
    
                    array.forEach((element, index) => {
                        if (element.id === product_id) {
                            array[index] = {
                                "id": product_id,
                                "image": "{{asset('/')}}"+"/"+data.image,
                                "price": data.price,
                                "name": data.course_name,
                                "qty": qty
                            };
                            found = true;
                            $("#msg_"+product_id).html('Already Added to Cart');
                        }
                    });
    
                    if (!found) {
                        array.push({
                            "id": product_id,
                            "image": "{{asset('/')}}"+"/"+data.image,
                            "price": data.price,
                            "name": data.course_name,
                            "qty": qty
                        });
                    }
    
    
                    localStorage.setItem("cart_items", JSON.stringify(array));
                } else {
                    let array = [];
    
    
                    array.push({
                        "id": product_id,
                        "image": "{{asset('/')}}"+"/"+data.image,
                        "price": data.price,
                        "name": data.course_name,
                        "qty": qty
                    });
    
    
                    localStorage.setItem("cart_items", JSON.stringify(array));
                }
                cart_item_count();
                item_count_check();
    
                setTimeout(() => {
                    $("#msg_"+product_id).addClass('d-none');
                    // window.location.href = "{{ route('web.cart.page') }}"
                }, 1000);
            })
        });

    </script>
@endpush
