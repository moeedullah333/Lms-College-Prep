@extends('admin_dashboard.layouts.main')

@section('content')
    <section class="analytics_section">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="page_top_bar">
                        <div class="heading_with_icons">
                            <div class="sidebar_humburger_icon">

                                <span class="sidebar_btn" id="sidebar_navbtn"><i class="fa-solid fa-bars"></i></span>
                                <h2 class="main_page_heading">Order Items</h2>
                            </div>

                            <div class="top_bar_right_part">
                                <div class="main_search_bar">
                                    <input type="text" placeholder="Search here">
                                </div>

                                <div class="top_bar_icons">
                                    <div>
                                        <a href="javascript:;">
                                            <span class="header_user_icon"><i class="fa-solid fa-user"></i></span>
                                        </a>
                                    </div>

                                    <div>
                                        <a href="javascript:;">
                                            <span class="header_alert_icon"><i class="fa-solid fa-gear"></i></span>
                                        </a>
                                    </div>

                                    <div class="position-relative">
                                        <a href="">
                                            <span class="header_alert_icon"><i class="fa-solid fa-bell"></i></span>
                                            <span class="number_of_notifications">11</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">

                    @if (\Session::has('error'))
                        <div class="alert alert-danger " role="alert">
                            {{ \Session::get('error') }}
                        </div>
                    @elseif (\Session::has('success'))
                        <div class="alert alert-success " role="alert">
                            {{ \Session::get('success') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="student_table_main">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Order Date</th>
                                      
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @if (!$orders_items->isEmpty())
                                        @foreach ($orders_items as $order_item)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>#{{ $order_item->order_detail->order_id }}</td>
                                                <td>{{ $order_item->courses_detail->course_name }}</td>
                                                <td> <img src="{{asset($order_item->courses_detail->image)}}" height="50" width="50" alt=""/></td>
                                                <td>{{ $order_item->courses_detail->price }}</td>
                                                <td>{{ $order_item->qty}}</td>
                                                <td>{{ $order_item->order_detail->total_amount}}</td>
                                                <td>{{$order_item->order_detail->created_at}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">No Data Found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
@endsection
