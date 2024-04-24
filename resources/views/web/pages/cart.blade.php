@extends('web.layouts.main')

@section('content')
    <style>
        /* CART STYLING */

        .desktop-header .col-md-10 {
            background-color: #f3f3f3 !important;
        }

        .header_top {
            background: #253c8c;
        }

        .headerTopRight ul li a {

            color: #fff;

        }

        .best_seller_card .content a h2 {
            text-decoration: none;
            color: #000;
        }

        .cart_section {
            padding: 1em 0;
        }

        .cart_section .cart_img img {
            width: 100px;
            height: 100px;
            background-color: #eaeaea;
            padding: 14px;
            border-radius: 6px;
            object-fit: cover;
        }

        .main_cart {
            padding-top: 20px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
            background-color: #f7f7f7;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 6px;
        }

        .main_cart .cart_heading_price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }

        .main_cart .cart_img {
            width: 13%;
        }

        .main_cart .cart_content {
            width: 85%;
        }

        .main_cart i {
            background-color: #eaeaea;
            color: red;
            padding: 10px;
            border-radius: 5px;
        }

        .main_cart button {
            border: none;
            outline: none;
            background-color: transparent;
        }

        .summary_heading_price {
            display: flex;
            justify-content: space-between;
            padding-bottom: 10px;
        }

        .summary_heading_price h6 {
            font-size: 17px;
            font-weight: 600;
        }

        .summary_main {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 6px;
        }

        .summary_main a {
            background-color: #000f63;
            color: #ffffff;
            text-align: center;
            border-radius: 7px;
            display: block;
            width: 100%;
            padding: 12px;
        }

        .summary_main .actionButton {
            margin-top: 10px;
        }


        /* count buttons */



        .qty-container {
            display: flex;
            align-items: center;
            justify-content: center;
            /* border: 2px solid #000f63; */
            /* border-radius: 1px; */
        }

        .qty-container .input-qty {
            text-align: center;
            padding: 6px 10px;
            border: 1px solid #d1d1d1;
            max-width: 70px;
            margin: 0 5px;
            height: 33px;
            border-radius: 18px;
        }

        .qty-container .qty-btn-minus,
        .qty-container .qty-btn-plus {
            border: 2px solid #000f63;
            padding: 10px 13px;
            font-size: 10px;
            height: 38px;
            width: 38px;
            transition: 0.3s;
            border-radius: 30px;
        }

        .qty-container .qty-btn-plus {
            margin-left: -1px;
        }

        .qty-container .qty-btn-minus {
            /* margin-right: -1px; */
        }

        .qty-container i {
            padding: 0;
        }

        .disabled {
            background-color: #8993b3 !important;
        }
    </style>


    <section class="other_section_with_bk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_main_subHeading">

                        <div class="section_heading">
                            <span class="main_boldHeading">Cart</span>
                            <span class="main_heading pl-2"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cart_section">
        <div class="container">
            <div class="row">

                <div id="cart" class="col-md-8">

                </div>

                <div id="cart_empty" class="col-md-8 d-none">
                    <h2 class="text-center text-danger mb-5">Cart Is Empty !!</h2>
                </div>

                <div class="col-md-4">

                    <div class="summary_main">
                        <h2>Summary</h2>
                        <div class="summary_heading_price">
                            <p>Sub Total</p>
                            <p class="total_amount" id="product_price"></p>
                        </div>

                        <div class="summary_heading_price">
                            <p>Shipping</p>
                            <p>$0</p>
                        </div>

                        <div class="summary_heading_price" style="border-top:1px solid #333">
                            <div>
                                <h6>Total amount </h6>
                                <h6>(including VAT)</h6>
                            </div>

                            <h6 class="total_amount"></h6>

                        </div>

                        <div class="actionButton">
                            <a id="checkout_btn" href="{{ route('web.checkout.page') }}">GO TO CHECKOUT</a>
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

            update_price_total();
            cart_items();

            setInterval(() => {

                if (localStorage.getItem("cart_items") ==
                    "[]") {
                        $('checkout_btn').attr('disabled');
                        $('#cart_total_section').addClass("d-none");
                        $('#cart_empty').addClass('d-flex justify-content-center align-items-center');
                        $("#cart").removeClass('col-md-8');
                        $('#cart').addClass('d-none');
                }
            }, 1000);

            function cart_items() {

                if (localStorage.getItem("cart_items") !== null && localStorage.getItem("cart_items") != "[]") {

                    let array = JSON.parse(localStorage.getItem("cart_items"));
                    let html = "";

                    

                    $("#cart").empty();

                    array.reverse();
                    array.forEach((element, index) => {
                        
                        html += `  
                        <div>

                            <input type="hidden" value="${element.id}" class="ProductId">

                            <div class="main_cart" id="cart_item_${element.id}">
                                <div class="cart_img">
                                    <img src="${element.image}" class="img-fluid" alt="">
                                </div>
                                <div class="cart_content">

                                    <div class="cart_heading_price ">
                                        <h2>${element.name}</h2>
                                        <button id="delete_item_${element.id}" data-id="${element.id}"   class="cart_del_btn" data-qty="${element.qty}"><i
                                                class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>

                                    <div class="d-flex justify-content-between mt-4">
                                        <h4 class="getPrice" for="">$${element.price}</h4>
                                    </div>

                                    <div>

                                    </div>

                                </div>

                            </div>





                        </div>
                        `;


                        // }


                    });
                    $("#cart").append(html);


                 

                } else {
                    $('#cart_total_section').addClass("d-none");
                    $('#cart_empty').removeClass('d-none')
                }
            }


            $(".cart_del_btn").click(function() {
                if (localStorage.getItem("cart_items") !== null) {

                    let array = JSON.parse(localStorage.getItem("cart_items"));
                    let id = $(this).data('id');
                    let total = 0;

                    array.forEach((element, index) => {

                        if (element.id == id) {


                            array.splice(index, 1);

                            $('#cart_item_' + id).remove();
                        }

                    });

                    localStorage.setItem("cart_items", JSON.stringify(array));
                    update_price_total();
                    cart_item_count();
                }
            })



            function update_price_total() {

                if (localStorage.getItem("cart_items") !== null) {

                    let array = JSON.parse(localStorage.getItem("cart_items"));
                    let total = 0;
                    array.forEach((element, index) => {
                        total += parseInt(element.price) * parseInt(element.qty);
                    });

                    $(".total_amount").text("$" + total);
                   
                }
            }


        });
    </script>
@endpush
