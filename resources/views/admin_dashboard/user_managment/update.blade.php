@extends('admin_dashboard.layouts.main')
@section('content')

<div class="container-fluid">
   <div class="row">
       <div class="col-md-12">
           <div class="page_top_bar">
               <div class="heading_with_icons">
                   <div class="sidebar_humburger_icon">

                       <span class="sidebar_btn" id="sidebar_navbtn"><i class="fa-solid fa-bars"></i></span>
                       <h2 class="main_page_heading">Update User</h2>
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

               <form action="{{ route('admin.add.update.user',$user->id) }}" method="POST">
                   @csrf
                   <div class="form-row mb-3">
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{$user->first_name}}">
                           @error('first_name')
                           <p class="text-danger">{{ $message }}</p>
                           @enderror
                       </div>
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{$user->last_name}}">
                           @error('last_name')
                           <p class="text-danger">{{ $message }}</p>
                           @enderror
                       </div>
                   </div>

                   <div class="form-row mb-3">
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="text" class="form-control" placeholder="Your Mobile No."
                               name="phone_number" value="{{$user->phone_number}}">
                       </div>
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="email" class="form-control" disabled placeholder="Your Email" name="email" value="{{$user->email}}">
                           @error('email')
                           <p class="text-danger">{{ $message }}</p>
                           @enderror
                       </div>
                   </div>

                   <div class="form-row mb-3">
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="text" class="form-control" placeholder="Parent First Name"
                               name="p_first_name" value="{{$user->parent_first_name}}">
                       </div>
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="text" class="form-control" placeholder="Parent Last Name"
                               name="p_last_name" value="{{$user->parent_last_name}}">
                       </div>
                   </div>

                   <div class="form-row mb-3">
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="text" class="form-control" placeholder="Phone Number 2"
                               name="phone_number_secondary" value="{{$user->phone_number_alternative}}">
                       </div>
                       <div class="col-12 col-sm-6 col-lg-6">
                           <input type="email" class="form-control" placeholder="Email 2" name="email_secondary" value="{{$user->email_alternative}}">
                       </div>
                   </div>

                   <div class="form-row mb-3">
                       <div class="col-12 col-sm-6 col-lg-6">
                           <div class="form-group">
                               <select class="form-control" id="grading" name="grade">
                                   <option>Grade</option>
                                   
                                   <option value="2" {{$user->grade == 2 ? "Selected" : ""}}>2</option>
                                   <option value="3" {{$user->grade == 3 ? "Selected" : ""}}>3</option>
                                   <option value="4" {{$user->grade == 4 ? "Selected" : ""}}>4</option>
                                   <option value="5" {{$user->grade == 5 ? "Selected" : ""}}>5</option>
                               </select>
                           </div>
                       </div>

                       <div class="col-12 col-sm-6 col-lg-6">
                           <div class="form-group">
                               <select class="form-control" id="course_name" name="course_name">
                                   <option>Course Name</option>
                                   <option value="test1" {{$user->course_name == "test1" ? "Selected" : ""}}>test1</option>
                                   <option value="test2" {{$user->course_name == "test2" ? "Selected" : ""}}>test2</option>
                                   <option value="test3" {{$user->course_name == "test3" ? "Selected" : ""}}>test3</option>
                                   <option value="test4" {{$user->course_name == "test4" ? "Selected" : ""}}>test4</option>
                               </select>
                           </div>
                       </div>
                   </div>

                   <div class="form-group mb-3">
                       <input type="text" class="form-control" id="school_name" placeholder="School Name" value="{{$user->school_name}}"
                           name="school_name">
                   </div>

                   <div class="form-group mb-3">
                       <input type="password" class="form-control" id="password" name="password"
                           placeholder="Please Enter Password" value="{{$user->password}}">
                       @error('password')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                   </div>
                   
                   <div class="form-group mb-3">
                       <input type="password" class="form-control" id="c_password" name="c_password"
                           placeholder="Please Enter Password Again" value="{{$user->password}}">

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
                                   <option value="{{ $country->id }}" {{ $country->id == $user->country_id ? "selected" : "" }}>{{ $country->name }}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="form-group col-12 col-sm-4 col-lg-4">

                           <select name="state" id="getstate" class="form-control" aria-placeholder="">

                           </select>

                       </div>
                       <div class="form-group col-12 col-sm-4 col-lg-4">
                           <input type="text" class="form-control" value="{{$user->city}}"
                               name="city" id="city" placeholder="Enter City">
                       </div>
                   </div>

                   

                   <div class="">
                       <button type="submit" class="btn btn-primary">Update</button>
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
        let state_id = @json($user->state_id);
        console.log(state_id);
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
                            `<option ${element.id == state_id ? "selected" : ""}  value='${element.id}' >${element.name}</option>`
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