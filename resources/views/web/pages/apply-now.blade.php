@extends('web.layouts.main')

@section('content')
    <section class="other_section_heading_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_main_subHeading">

                        <div class="section_heading">
                            <span class="main_boldHeading">apply</span>
                            <span class="main_heading pl-2">now</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="apply_now_section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="register_form_main">

                        <h4 class="admission_process_para">
                            Navigating the admissions process is over whelming ,weather you are planning in grade 9 and 10
                            or 11 and 12
                        </h4>

                        <div class="d-flex align-items-baseline justify-content-center mb-4">
                            <span class="main_heading">register</span>
                            <span class="main_stylish_heading">Today</span>
                        </div>
                            <div class="text-center pt-2">
                                I have already registered.
                                <a href="{{route('web.login.page')}}">Go to Login</a>
                            </div>
                        <form action="{{ route('register.form') }}" method="POST">
                            @csrf
                            <div class="form-row">
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

                            <div class="form-row">
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

                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Parent First Name"
                                        name="p_first_name">
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Parent Last Name"
                                        name="p_last_name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Phone Number 2"
                                        name="phone_number_secondary">
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6">
                                    <input type="email" class="form-control" placeholder="Email 2" name="email_secondary">
                                </div>
                            </div>

                            <div class="form-row">
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

                            <div class="form-group">
                                <input type="text" class="form-control" id="school_name" placeholder="School Name"
                                    name="school_name">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Please Enter Password">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="c_password" name="c_password"
                                    placeholder="Please Enter Password Again">

                                @error('c_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-row">
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

    
                            <div  class="g-recaptcha" data-sitekey="6LfvmKMpAAAAADkfPvCa7Ny8TmCl-TZYdXwikzzU" ></div>
                            @error('g-recaptcha-response')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="register_form_btns text-center">
                                <button type="submit" class="btn main_action_btn">Register</button>
                                {{-- <a type="submit" class="btn main_action_btn">Register</a> --}}
                                <a href="javascript:;" class="btn main_action_btn" type="button">
                                    <img src="{{ asset('web/images/google-logo.png') }}" alt="">
                                </a>
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
