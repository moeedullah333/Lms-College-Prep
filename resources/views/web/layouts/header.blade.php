<!DOCTYPE html>
<html lang="en">

<head>

    <title>College Prep</title>

    @include('web.layouts.styles')

</head>

<body>

    <header class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="./index.php">
                            <div class="main_logo">
                                <img src="{{asset('web/images/main-logo.png')}}" alt="">
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">Online Practice <span
                                            class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('web.course.listing.page')}}">Virtual Classes</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">College Counselling</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">Student Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('web.blog.page')}}">Blogs</a>
                                </li>

                            </ul>

                            <div class="header_register_and_cart_btn">

                                {{-- <a href="{{route('web.register.page')}}" class="btn main_action_btn" type="button">Register Now</a> --}}
                                @if(isset(Auth::user()->id))
                                <a href="{{route('user.logout')}}" class="btn main_action_btn" type="button">logout</a>   
                                @else
                                    <a href="{{route('web.register.page')}}" class="btn main_action_btn" type="button">Register Now</a>
                                @endif
                                
                                <a href="{{route('web.cart.page')}}" class="header_cart_btn">
                                    <img src="{{asset('web/images/cart-icon.png')}}" alt="">
                                    <span class="cart_item_number">0</span>
                                </a>

                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
