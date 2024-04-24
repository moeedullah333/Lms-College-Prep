<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogComments;
use App\Models\Blogs;
use App\Models\Countries;
use App\Models\Courses;
use App\Models\States;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('web.pages.index');
    }
    public function blog_page()
    {
        $blogs = Blogs::get();
        return view('web.pages.blogs-page',compact('blogs'));
    }
    public function blog_detail_page($blog_id)
    {
        $blog = Blogs::with('user_detail','blog_comments')->where('id',$blog_id)->first();
        return view('web.pages.blog-details',compact('blog'));
    }
    public function blog_comment(Request $request,$blog_id)
    {
        
       $blogcomment = new BlogComments();
       $blogcomment->user_id = intval($request->user_id);
       $blogcomment->blog_id = $blog_id;
       $blogcomment->comment = $request->comment;
        
       $blogcomment->save();

       return response()->json(['status'=>true,'data'=>$blogcomment::with('user_detail')->first()]);

    }

    public function course_listing_page()
    {
        $courses = Courses::get();
        return view('web.pages.virtual-classes',compact('courses'));
    }
    
    public function virtual_classes_detail_page($course_id)
    {
        $course = Courses::where('id',$course_id)->first();

        return view('web.pages.virtual-class-detail-page',compact('course'));
    }

    public function cart_page()
    {
        return view('web.pages.cart');
    }

    public function checkout_page()
    {
        $countries = Countries::get();
        $states = States::get();
        return view('web.pages.checkout',compact('countries','states'));
    }
    
}
