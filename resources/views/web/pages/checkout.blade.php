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

        .cart_section {
            padding: 12em 0 0;
        }

        .cart_section .cart_img img {
            width: 100px;
            height: 100px;
            background-color: #eaeaea;
            padding: 20px;
            border-radius: 6px;
        }

        .main_cart {
            padding-top: 20px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
            background-color: #f7f7f7;
            margin-bottom: 15px;
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
        .summary_main .checkout_continue_btn {
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
    </style>

    <!-- CSS for products -->

    <style>
        .product_summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #aeaeae;
            padding: 10px;
        }

        .product_summary img {
            width: 30px;
            border-radius: 50%;
        }

        .sum_content {
            display: flex;
            gap: 10px;
        }

        .sum_content h4 {
            font-size: 15px;
            line-height: 20px;
        }

        .content h4 {
            font-weight: 600;
            font-size: 18px;
        }

        .content p {
            font-size: 15px;
        }

        .product_delete_btn span {
            font-size: 20px;
            cursor: pointer;
        }

        .product_delete_btn span:hover {
            color: red;
        }

        .stripe_payment_fields {

            display: flex;
            justify-content: space-around;
            gap: 14px;
        }

        .stripe_payment_fields .form-group {
            width: calc(100%/3);
        }

        #rates_section {
            /* background-color: #f0f0f0; */
            padding: 20px;
        }

        .standard_shipping_box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            /* Align items vertically */
        }

        .standard_shipping_box input[type="radio"] {
            margin-right: 10px;
            /* Add some spacing between radio button and text */
            margin-left: 2px;
        }

        .standard_shipping {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .delivery_date {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .free_span {
            font-size: 18px;
            color: green;
            margin-left: auto;
            font-weight: bold;
        }

        .cart_heading_price h2,
        h4 {
            font-size: 14px;
        }
    </style>

    <section class="other_section_with_bk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_main_subHeading">

                        <div class="section_heading">
                            <span class="main_boldHeading">Checkout</span>
                            <span class="main_heading pl-2"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout_section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-3">Billing Information</h1>
                </div>
                <div class="col-md-8">
                    <div class="checkout_detail">
                        <form action="{{ route('web.checkout.form') }}" data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" method="POST" class="require-validation"
                        id="payment-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">First name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control error" required id="first_name"
                                        name="first_name" value="{{isset(auth()->user()->id) ? auth()->user()->first_name : ''}}">
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Last name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control error" required id="last_name"
                                        name="last_name" value="{{isset(auth()->user()->id) ?  auth()->user()->last_name : ''}}">
                                    <span class="invalid-feedback"></span>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="">Company name (optional)</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="">Country / Region <span class="text-danger">*</span></label>
                                    {{-- <input type="text" class="form-control"> --}}
                                    <select name="country_id" class="form-control error" required id="country">
                                        <option value="">Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{isset(auth()->user()->id) ? (auth()->user()->country_id == $country->id ? "selected" : "") : ''}}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="invalid-feedback"></span>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="">Street address <span class="text-danger">*</span></label>
                                    <input type="text" name="address1" required class="form-control error"
                                        placeholder="House number and street name" id="address1">
                                    <span class="invalid-feedback"></span>

                                    <br>
                                    <input type="text" class="form-control" name="address2"
                                        placeholder="Apartment, suite, unit, etc. (optional)" id="address2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="">Town / City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control error" required name="town" id="town" value="{{isset(auth()->user()->id) ? auth()->user()->city : ''}}">
                                    <span class="invalid-feedback"></span>

                                </div>

                                <div class="col mb-3">
                                    <label for="">State / County <span class="text-danger">*</span></label>
                                    {{-- <input type="text" class="form-control"> --}}
                                    <select name="state_id" class="form-control error" required id="state">
                                        <option value="">Select</option>
                                    </select>
                                    <span class="invalid-feedback"></span>

                                </div>

                            </div>
                          
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="">Postcode / ZIP <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control error" required name="postcode"
                                        id="postcode">
                                    <span class="invalid-feedback"></span>

                                </div>

                                <div class="col mb-3">
                                    <label for="">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control error" required name="phone" id="phone" value="{{isset(auth()->user()->id) ? auth()->user()->phone_number : ''}}">
                                    <span class="invalid-feedback"></span>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="">Email address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control error" required name="email"
                                        id="email" value="{{isset(auth()->user()->id) ? auth()->user()->email : ''}}">
                                    <span class="invalid-feedback"></span>

                                </div>
                            </div>
                            <input type="hidden" name="cart_items" id="cart_items" value="">
                            <div class="row">
                                <div class="col-md-12">

                                    <label for="">Order notes (optional)</label>

                                    <textarea cols="30" class="form-control" rows="5" name="order_note" id="order_note"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div id="card_detail" class="col-md-12">
                                    <div>
                                        <h2 class="text-justify mt-3">Card Info</h2>
                                    </div>

                                    <div class='form-group required'>
                                        <label class='control-label'>Name on Card</label>
                                        <input class='form-control' type='text'>
                                    </div>

                                    <div class=' form-group required'>
                                        <label class='control-label'>Card Number</label>
                                        <input autocomplete='off' id="cardnum" class='form-control card-number' size='20'
                                            type='text'>
                                    </div>
                                    <div class="stripe_payment_fields">

                                        <div class='form-group  required'>
                                            <label class='control-label'>CVC</label>
                                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311'
                                                size='4' type='text'>
                                        </div>
                                        <div class='form-group  required'>
                                            <label class='control-label'>Expiration Month</label>
                                            <input class='form-control card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                        </div>
                                        <div class='form-group  required'>
                                            <label class='control-label'>Expiration Year</label>
                                            <input class='form-control card-expiry-year' placeholder='YYYY'
                                                size='4' type='text'>
                                        </div>
                                    </div>

                                    <div class=' error form-group d-none'>
                                        <div class='alert-danger alert'>Please correct the errors and try
                                            again.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="summary_main">
                        <h2 id="cart_item">Items</h2>
                        <div id="cart">

                        </div>

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

                        @if (isset(auth()->user()->id))
                            <div class="actionButton">
                                <button  class="checkout_continue_btn">Submit</button>
                            </div>
                        @else
                            @php
                                Session::put('url', url()->current());
                            @endphp
                            <a href="{{ route('web.login.page') }}">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $(function() {
            $("#cardnum").mask("9999 9999 9999 9999");
            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(
                e) {
                    console.log('yes');
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]',
                        'input[type=password]',
                        'input[type=text]',
                        'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(
                        inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass(
                            'has-error');
                        $errorMessage.removeClass(
                            'hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data(
                        'stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number')
                            .val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $(
                            '.card-expiry-month'
                        ).val(),
                        exp_year: $(
                                '.card-expiry-year')
                            .val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append(
                        "<input type='hidden' name='stripeToken' value='" +
                        token + "'/>");
                    $form.get(0).submit();
                    localStorage.setItem('cart_items', '[]');
                }
            }

        });
    </script>
    <script>
        $(document).ready(function() {
            
            let country = $('#country').val();
            let state = @json(isset(auth()->user()->id) ? auth()->user()->state_id : 0);
            $('#state').empty();
            var data = {
                '_token': "{{ csrf_token() }}",
                'countryId': country
            };
            var url = "{{ route('user.register.getStates') }}";
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "json",
                success: function(res) {
                    if (res.status == true) {
                        $('#state').append(
                            `<option value='null' >Select</option>`
                        );
                        res.data.forEach(element => {
                           
                            $('#state').append(
                                `<option value='${element.id}' ${element.id == state ? 'selected' : ''}>${element.name}</option>`
                            );
                        });

                    }
                }
            });

            $('#country').on('change', function() {
                let country = $(this).val();
                $('#state').empty();
                var data = {
                    '_token': "{{ csrf_token() }}",
                    'countryId': country
                };
                var url = "{{ route('user.register.getStates') }}";
                $.ajax({
                    type: "post",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res) {
                        if (res.status == true) {
                            $('#state').append(
                                `<option value='null' >Select</option>`
                            );
                            res.data.forEach(element => {
                                $('#state').append(
                                    `<option value='${element.id}' >${element.name}</option>`
                                );
                            });
                        }
                    }
                });
            });

            update_price_total();
            cart_items();

            setInterval(() => {

                if (localStorage.getItem("cart_items") ==
                    "[]") {
                    $('checkout_btn').attr('disabled');
                    $('.summary_main #cart_item').addClass('d-none');
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
                                        <h4 class="getPrice" for="">$${element.price}</h4>
                                        <button id="delete_item_${element.id}" data-id="${element.id}"   class="cart_del_btn" data-qty="${element.qty}"><i
                                                class="fa-solid fa-trash"></i>
                                        </button>
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

            $(".checkout_continue_btn").click(function() {
                let cart_items = localStorage.getItem("cart_items");
                $("#cart_items").val(cart_items);
                $('#payment-form').submit();
            })


        });
    </script>
@endpush
