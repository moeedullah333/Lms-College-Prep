@extends('admin_dashboard.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page_top_bar">
                    <div class="heading_with_icons">
                        <div class="sidebar_humburger_icon">

                            <span class="sidebar_btn" id="sidebar_navbtn"><i class="fa-solid fa-bars"></i></span>
                            <h2 class="main_page_heading">Add Admin</h2>
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
                <div class="student_form_main">
                    <form action="{{route('admin.add.update.admin')}}" method="POST">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" class="form-control" placeholder=" Enter First name" name="first_name">
                            </div>
                            <div class="col">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" class="form-control" placeholder="Enter Last name" name="last_name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Please Enter Email"  name="email"> 
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Please Enter Password"  name="password"> 
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" class="form-control" id="c_password" aria-describedby="emailHelp"
                                placeholder="Please Enter Confirm Password"  name="c_password"> 
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
