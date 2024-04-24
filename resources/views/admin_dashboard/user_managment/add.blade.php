 @extends('admin_dashboard.layouts.main')
 @section('content')

 <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page_top_bar">
                <div class="heading_with_icons">
                    <div class="sidebar_humburger_icon">

                        <span class="sidebar_btn" id="sidebar_navbtn"><i class="fa-solid fa-bars"></i></span>
                        <h2 class="main_page_heading">Add User</h2>
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

                <form action="{{ route('admin.add.update.user') }}" method="POST">
                    @csrf
                    <div class="form-row mb-3">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="text" class="form-control" placeholder="First Name" name="first_name">
                            @error('first_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                            @error('last_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="text" class="form-control" placeholder="Your Mobile No."
                                name="phone_number">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="text" class="form-control" placeholder="Parent First Name"
                                name="p_first_name">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="text" class="form-control" placeholder="Parent Last Name"
                                name="p_last_name">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="text" class="form-control" placeholder="Phone Number 2"
                                name="phone_number_secondary">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6">
                            <input type="email" class="form-control" placeholder="Email 2" name="email_secondary">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="grading" name="grade">
                                    <option>Grade</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="course_name" name="course_name">
                                    <option>Course Name</option>
                                    <option value="test1">test1</option>
                                    <option value="test2">test2</option>
                                    <option value="test3">test3</option>
                                    <option value="test4">test4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="school_name" placeholder="School Name"
                            name="school_name">
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Please Enter Password">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" id="c_password" name="c_password"
                            placeholder="Please Enter Password Again">

                        @error('c_password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-12 col-sm-4 col-lg-4">
                            <select id="country" class="form-control" name="country"
                                aria-placeholder="Select Country">
                                <option value="null">Select</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-sm-4 col-lg-4">

                            <select name="state" id="getstate" class="form-control" aria-placeholder="">

                            </select>

                        </div>
                        <div class="form-group col-12 col-sm-4 col-lg-4">
                            <input type="text" class="form-control" value="{{ old('city') }}"
                                name="city" id="city" placeholder="Enter City">
                        </div>
                    </div>

                    

                    <div class="">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                   

                </form>

            </div>
        </div>
    </div>
</div>
 
 @endsection
 @push('js')
 <script>
     $(document).ready(function() {
         let country = $('#country').val();
         $('#getstate').empty();
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
                     $('#getstate').append(
                         `<option value='null' >Select</option>`
                     );
                     res.data.forEach(element => {
                         console.log(element)
                         $('#getstate').append(
                             `<option value='${element.id}' >${element.name}</option>`
                         );
                     });

                 }
             }
         });

         $('#country').on('change', function() {
             let country = $(this).val();
             $('#getstate').empty();
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
                         $('#getstate').append(
                             `<option value='null' >Select</option>`
                         );
                         res.data.forEach(element => {
                             $('#getstate').append(
                                 `<option value='${element.id}' >${element.name}</option>`
                             );
                         });
                     }
                 }
             });
         });

     });
 </script>
@endpush