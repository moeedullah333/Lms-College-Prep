@extends('web.layouts.main')

@section('content')
<section class="other_section_heading_top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_main_subHeading">

                    <div class="section_heading">
                        <span class="main_boldHeading">Login</span>
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
                    @if (\Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ \Session::get('error') }}
                    </div>
                @endif
                    <form action="{{route('login.form')}}" method="POST">
                        @csrf
                   
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Please Enter Email" name="email">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                             @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password"
                                placeholder="Please Enter Password" name="password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="register_form_btns text-center">
                            <button type="submit" class="btn main_action_btn">Login</button>
                            <a href="javascript:;" class="btn main_action_btn" type="button">
                                <img src="{{ asset('web/images/google-logo.png') }}" alt="">
                            </a>
                        </div>
                  
                        <div class="text-center pt-2">
                            I don't have account. 
                            <a href="{{route('web.register.page')}}">Go to Register</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection