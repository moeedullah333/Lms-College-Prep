<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Cities;
use App\Models\Countries;
use App\Models\Courses;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\States;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_dashboard.analytics');
    }

    public function user_listing()
    {
        $students = User::where('role', 2)->get();
        return view('admin_dashboard.user_managment.list', compact('students'));
    }

    public function user_add_page()
    {
        $countries = Countries::get();
        $states = States::get();
        $cities = Cities::get();
        return view('admin_dashboard.user_managment.add', compact(
            'countries',
            'states',
            'cities'
        ));
    }

    public function user_update_page($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $countries = Countries::get();
        $states = States::get();
        $cities = Cities::get();
        return view('admin_dashboard.user_managment.update', compact(
            'user',
            'countries',
            'states',
            'cities'
        ));
    }

    public function user_add_update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ], [
            'c_password.required'  => 'The confirm password field is required.',
            'c_password.same'  => 'The confirm password field must match password.',
        ]);


        $msg = isset($user->id) ? "User Update Success" : "User Add Success";


        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->parent_first_name = $request->p_first_name;
        $user->parent_last_name = $request->p_last_name;
        $user->phone_number_alternative = $request->phone_number_secondary;
        $user->email_alternative = $request->email_secondary;
        $user->password = $request->password;
        $user->grade = $request->grade;
        $user->role = 2;
        $user->course_name = $request->course_name;
        $user->school_name = $request->school_name;
        $user->country_id  = $request->country;
        $user->state_id = $request->state;
        $user->city = $request->city;

        if ($user->save()) {

            return redirect()->route('admin.user_listing.page')->with('success', $msg);
        } else {
            return redirect()->route('admin.user_listing.page')->with('error', "Something Went Wrong!");
        }
    }

    public function user_delete($user_id)
    {
        $user = User::where('id', $user_id)->first();

        $user->delete();

        return redirect()->route('admin.user_listing.page')->with('success', "User Delete Success");
    }

    public function admin_listing()
    {
        $admins = User::where('role', 1)->get();
        return view('admin_dashboard.admin_managment.list', compact('admins'));
    }

    public function admin_add_page()
    {
        return view('admin_dashboard.admin_managment.add');
    }

    public function admin_update_page($user_id)
    {
        $user = User::where('id', $user_id)->first();

        return view('admin_dashboard.admin_managment.update', compact(
            'user',
        ));
    }

    public function admin_add_update(Request $request, User $user)
    {
        if (!isset($user->id)) {

            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ], [
                'c_password.required'  => 'The confirm password field is required.',
                'c_password.same'  => 'The confirm password field must match password.',
            ]);
        }

        $msg = isset($user->id) ? "Admin Update Success" : "Admin Add Success";

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->role = 1;

        if ($user->save()) {

            return redirect()->route('admin.admin_listing.page')->with('success', $msg);
        } else {
            return redirect()->route('admin.admin_listing.page')->with('error', "Something Went Wrong!");
        }
    }

    public function admin_delete($user_id)
    {
        $user = User::where('id', $user_id)->first();

        $user->delete();

        return redirect()->route('admin.admin_listing.page')->with('success', "Admin Delete Success");
    }

    public function blog_listing()
    {
        $blogs = Blogs::get();
        return view('admin_dashboard.blogs_managment.list', compact('blogs'));
    }

    public function blog_add_page()
    {
        return view('admin_dashboard.blogs_managment.add');
    }

    public function blog_update_page($blog_id)
    {
        $blog = Blogs::where('id', $blog_id)->first();
        return view('admin_dashboard.blogs_managment.update', compact('blog'));
    }

    public function blog_add_update(Request $req, Blogs $blog)
    {
        $msg = isset($blog->id) ? "Blog Updated Success" : "Blog Added Success";

        if (!isset($blog->id)) {

            $validator =
                [
                    'title' => 'required',
                    'image' => 'required',
                    'description' => 'required',
                ];
            $validate = Validator::make($req->all(), $validator);


            if ($validate->fails()) {
                $response =
                    [
                        'success' => false,
                        'message' => $validate->errors()
                    ];
                return response()->json($response);
            }
        }

        if ($req->hasFile('image')) {

            if (isset($blog->id)) {
                if (File::exists($blog->image)) {
                    File::delete(public_path($blog->image));
                }
            }

            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blogsimages'), $imageName);
            $imagepath = "images/blogsimages/" . $imageName;
            $blog->image = $imagepath;
        }

        $blog->user_id = auth()->user()->id;
        $blog->title = isset($req->title) ? $req->title : $blog->title;
        $blog->description = isset($req->description) ? $req->description : $blog->description;
        $blog->short_description = isset($req->short_description)  ? $req->short_description : $blog->short_description;

        if ($blog->save()) {
            return redirect()->route('admin.blog_listing.page')->with('success', $msg);
        } else {
            return redirect()->route('admin.blog_listing.page')->with('error', "Something Went Wrong!");
        }
    }

    public function blog_delete($blog_id)
    {
        $blog = Blogs::where('id', $blog_id)->first();
        if (File::exists($blog->image)) {
            File::delete(public_path($blog->image));
        }

        $blog->delete();

        return redirect()->route('admin.blog_listing.page')->with('success', "Blog Delete Success");
    }

    public function course_listing()
    {
        $courses = Courses::get();

        return view('admin_dashboard.course_managment.list', compact('courses'));
    }

    public function course_add_page()
    {
        return view('admin_dashboard.course_managment.add');
    }

    public function course_add_update(Request $request, Courses $course)
    {
        
        $msg = $course->id ? "Course Update Successfully!" : "Course Add Successfully!";
       
        if (!isset($course->id)) {
            $request->validate([
                'course_name' => 'required',
                'instructor_name' => 'required',
                'total_hour' => 'required',
                'day' => 'required',
                'time1' => 'required',
                'time2' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'price' => 'required',
                'description' => 'required',
                'status' => 'required',
                'image' => 'required',
                'slots' => 'required',
                'short_description' => 'required',
            ]);  
        }

        if ($request->hasFile('image')) {

            if ($course->image) {
                $bookPath = public_path('images/courseimage/' . $course->image);
                File::delete($bookPath);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/courseimage'), $imageName);
            $imagepath = "images/courseimage/".$imageName;
            $course->image = $imagepath;
        }

        $course->course_name = isset($request->course_name) ? $request->course_name : $course->course_name;
        $course->instructor_name = isset($request->instructor_name) ? $request->instructor_name : $course->instructor_name;
        $course->slots = isset($request->slots) ? $request->slots : $course->slots;
        $course->total_hour = isset($request->total_hour) ? $request->total_hour : $course->total_hour;
        $course->day = isset($request->day) ? $request->day : $course->day;
        $course->time1 = isset($request->time1) ? $request->time1 : $course->time1;
        $course->time2 = isset($request->time2) ? $request->time2 : $course->time2;
        $course->start_date = isset($request->start_date) ? $request->start_date : $course->start_date;
        $course->end_date = isset($request->end_date) ? $request->end_date : $course->end_date;
        $course->price = isset($request->price) ? $request->price : $course->price;
        $course->description = isset($request->description) ? $request->description : $course->description;
        $course->short_description = isset($request->short_description) ? $request->short_description : $course->short_description;
        $course->status = isset($request->status) ? $request->status : $course->status;

      
        $course->save();

        return redirect()->route('admin.course.listing.page')->with('success', $msg);
    }

    public function course_update_page($course_id)
    {
        $course = Courses::where('id', $course_id)->first();
        return view('admin_dashboard.course_managment.update', compact('course'));
    }

    public function course_delete($course_id)
    {
        $course = Courses::where('id', $course_id)->first();
        if (File::exists($course->image)) {
            File::delete(public_path($course->image));
        }

        $course->delete();

        return redirect()->route('admin.course.listing.page')->with('success', "Course Delete Success");
    }

    public function order_listing_page()
    {
        $orders = Orders::get();
        return view('admin_dashboard.order_managment.list',compact('orders'));

    }

    public function order_items_listing_page($order_id)
    {
        $orders_items = OrderItems::where('order_id',$order_id)->get();

        return view('admin_dashboard.order_managment.order_items_managment.list',compact('orders_items'));
    }

    public function get_order($order_id)
    {
        $order = Orders::where('id', $order_id)->first();

        return response()->json(['status' => true, 'data' => $order]);
    }

    public function order_status_edit(Request $request, $order_id)
    {
        $order = Orders::where('id', $order_id)->first();
        $order->status = intval($request->order_status);
        $order->save();

        return redirect()->route('admin.order.listing.page')->with('success', 'Order Status Update');
    }
}
