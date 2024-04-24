@extends('web.layouts.main')





@section('content')
    <style>
        h1.thankyou_heading {
            font-size: 55px;
            font-weight: 700;

        }

        div.thankyou_div {
            margin-top: 31px;
            margin-bottom: 31px;
        }

        .thankyou_icon {
            font-size: 45px;
            color: #ffffff;
            display: flex;
            background-color: #35ab32;
            width: 65px;
            height: 65px;
            border-radius: 40px;
            padding: 13px;
            margin: 0px auto;
        }

        p.order_status {
            font-size: 18px;
        }
    </style>
    </style>
    <section class="other_section_with_bk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_main_subHeading">

                        <div class="section_heading">
                            <span class="main_boldHeading">Checkout Complete</span>
                            <span class="main_heading pl-2"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="thankyou_div text-center">
                        <h1 class="thankyou_heading">
                            THANK YOU!
                        </h1>
                        <span class="thankyou_icon">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <p class="order_status mt-3">Your order is inprogress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
