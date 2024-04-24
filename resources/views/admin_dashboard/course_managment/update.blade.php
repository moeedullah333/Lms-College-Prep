@extends('admin_dashboard.layouts.main')
@section('content')
    <style>
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page_top_bar">
                    <div class="heading_with_icons">
                        <div class="sidebar_humburger_icon">

                            <span class="sidebar_btn" id="sidebar_navbtn"><i class="fa-solid fa-bars"></i></span>
                            <h2 class="main_page_heading">Update Course</h2>
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
                    <form id="form1" action="{{ route('admin.course.add.update',$course->id) }}" class="needs-validation" novalidate
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col-md-6">
                                <label for="course_name">Course Name</label>
                                <input type="text" id="course_name" class="form-control" placeholder="Enter Course Name"
                                    name="course_name" value="{{$course->course_name}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="instructor_name">Instructor Name</label>
                                <input type="text" id="instructor_name" class="form-control"
                                    placeholder="Enter Instructor Name" value="{{$course->instructor_name}}" name="instructor_name" required>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-3">
                                <label for="file">Upload Image</label>
                                <input type="file"  class="form-control" onchange="previewImage(this)" id="file"
                                    aria-describedby="emailHelp" placeholder="Please Upload Image" name="image">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="slots">Slots</label>
                                <input type="number" id="slots" value="{{$course->slots}}" class="form-control" placeholder="Enter Slots"
                                    name="slots" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="total_hour">Total Hours</label>
                                <input type="number" id="total_hour" value="{{$course->total_hour}}" class="form-control" placeholder="Enter Total Hour"
                                    name="total_hour" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="status">status</label>
                                <select class="form-control" name="status" required id="status">
                                    <option value="">Select</option>
                                    <option value="1" {{$course->status == 1 ? "selected": ""}}>Active</option>
                                    <option value="2" {{$course->status == 2 ? "selected": ""}}>InActive</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <img id="imagePreview" src="{{asset($course->image)}}" height="200" width="200" class="preview"  />
                        </div>


                        <div class="form-row ">
                            <div class="form-group col-md-4">
                                <label for="day">Day</label>
                                @php
                                    $day = [
                                        'Monday',
                                        'Tuesday',
                                        'Wednesday',
                                        'Thurday',
                                        'Friday',
                                        'Saturday',
                                        'Sunday',
                                    ];
                                @endphp

                                <select class="form-control" required id="day" name="day">
                                    <option value="">Select</option>
                                    @foreach ($day as $val)
                                        <option {{ $course->day == $val ? 'selected' : '' }} value="{{ $val }}">
                                            {{ $val }}</option>
                                    @endforeach
                                </select>

                                @error('day')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="time1">Time 1</label>
                                <input type="time" class="form-control" value="{{$course->time1}}" required
                                    id="time1" name="time1">
                                @error('time1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="time2">Time 2</label>
                                <input type="time" class="form-control" value="{{ $course->time2 }}" required
                                    id="time2" name="time2">
                                @error('time2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" value="{{ $course->start_date }}" required
                                    id="start_date" name="start_date">
                                @error('start_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" value="{{ $course->end_date }}" required
                                    id="end_date" name="end_date">
                                @error('end_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="price">Price</label>
                                <input type="text" id="price" class="form-control" placeholder="Enter Price"
                                    name="price" value="{{$course->price}}" required>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname">Short Description</label>
                                <textarea type="text" id="short_description" class="form-control" placeholder="Enter short Description"
                                    name="short_description" required>{{$course->short_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname">Description</label>
                                <textarea class="summernote" id="summernote" name="description" rows="4" required>{{$course->description}}</textarea>

                            </div>
                        </div>



                        <div>
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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        $('#summernote').summernote({
            tabsize: 2,
            height: 400
        });

        $('#form1').on('submit', () => {

            if ($('#summernote').summernote('isEmpty')) {
                $('.note-editor').attr('style', "border: 1px solid red");
            } else {
                $('.note-editor').removeAttr('style', "border: 1px solid red");
            }
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var preview = document.getElementById('imagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
    </script>
@endpush
