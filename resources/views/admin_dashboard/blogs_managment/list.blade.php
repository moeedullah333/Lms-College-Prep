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
                                <h2 class="main_page_heading">Blogs</h2>
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
            <div class="row ">

                <div class="col-md-10 mx-auto d-flex justify-content-end ">
                    <a href="{{route('admin.blog.add.page')}}" class="btn btn-primary btn-sm">Add Blogs</a>
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
                                        <th scope="col">Title</th>
                                        <th scope="col">Short Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @if (!$blogs->isEmpty())
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td><span class="short-desc-text">{{$blog->short_description}}</span></td>
                                                <td> <img src="{{asset($blog->image)}}" height="50" width="50" alt=""/></td>
                                                <td>
                                                    <div class="table_action_btns_main">
                                                        <button
                                                            onclick="window.location.href='{{ route('admin.blog.update.page', $blog->id) }}'"
                                                            class="table_action_btn"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <button
                                                            onclick="window.location.href='{{ route('admin.delete.blog', $blog->id) }}' "
                                                            class="table_action_btn"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">No Data Found</td>
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