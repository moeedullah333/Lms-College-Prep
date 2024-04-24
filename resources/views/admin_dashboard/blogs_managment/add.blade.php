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
                            <h2 class="main_page_heading">Add Blog</h2>
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
                    <form action="{{ route('admin.add.update.blog') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname">Title</label>
                                <input type="text" id="title" class="form-control" placeholder="Enter Title"
                                    name="title" required>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname">Short Description</label>
                                <textarea type="text" id="short_description" class="form-control"
                                    placeholder="Enter short Description" name="short_description" required></textarea>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname">Description</label>
                                <textarea class="summernote" id="summernote" name="description" rows="4" required></textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">Upload Image</label>
                            <input type="file" class="form-control" onchange="previewImage(this)" id="file"
                                aria-describedby="emailHelp" placeholder="Please Upload Image" name="image">
                        </div>
                        <div class="form-group">
                            <img id="imagePreview" height="200" width="200" class="preview" style="display:none;" />
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
@push('js')
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 400
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
