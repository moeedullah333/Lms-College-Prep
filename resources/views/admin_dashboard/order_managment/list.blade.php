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
                                <h2 class="main_page_heading">Orders</h2>
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
                                        <th scope="col">User Name</th>
                                        <th scope="col">Order Courses</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @if (!$orders->isEmpty())
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>#{{ $order->order_id }}</td>
                                                <td>{{ $order->first_name . ' ' . $order->last_name }}</td>
                                                <td>{{ count($order->order_items_detail) }} Course</td>
                                                <td>{{ $order->country->name }}</td>
                                                <td>{{ $order->state->name }}</td>
                                                <td>{{ $order->total_amount }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>
                                                    <div class="table_action_btns_main">
                                                        <button data-toggle="tooltip" data-placement="top"
                                                            title="View Orders"
                                                            onclick="window.location.href='{{ route('admin.order.items.listing.page', $order->id) }}'"
                                                            class="table_action_btn btn btn-info"><i
                                                                class="fa-solid fa-eye"></i></button>
                                                        <button data-toggle="modal" data-id="{{ $order->id }}"
                                                            data-target="#exampleModal"
                                                            class="table_action_btn edit btn btn-primary"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7">No Data Found</td>
                                        </tr>
                                    @endif



                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Order Status Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">

                            <form id="edit_form" method="post" class="form-horizontal">

                                @csrf

                                @php
                                    $data = [0 => 'Pending', 1 => 'Delivered'];
                                @endphp

                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <div id="order_status" class="col-md-6">
                                        <select name="order_status" required id="order_status"
                                            class="form-control"></select>
                                    </div>
                                </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary save">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).on('click', '.edit', function() {

            let url = "{{ route('admin.order.get', ':order_id') }}";
            let id = $(this).data('id');
            url = url.replace(':order_id', id);

            var data = {
                0: 'Pending',
                1: 'Delivered'
            };

            $('#order_status select').empty();
            $('.save').attr('data-id', id);
            $.ajax({
                type: "get",
                url: url,
                dataType: "json",
                success: function(response) {
                    $('#order_status select').append(`
                    <option value="">Select</option>
                    <option value="0" ${response.data.status == 0 ? "selected" : ""}>Pending</option>
                    <option value="1" ${response.data.status == 1 ? "selected" : ""}>Delivered</option>
                `);

                }
            });

            $(document).on('click', '.save', function() {
                let id = $(this).data('id');
                let url = "{{ route('admin.order.status.edit', ':order_id') }}";
                url = url.replace(':order_id', id);
                $("#edit_form").attr('action', url)
                $('#edit_form').submit();
            })

        })
    </script>
@endpush
