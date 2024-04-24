<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Stripe;
use App\Models\OrderItems;
use App\Models\Orders;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function thankyou_page()
    {
        return view('web.pages.thankyou');
    }

    public function checkout(Request $req)
    {
        $user_id = isset(auth()->user()->id) ? auth()->user()->id : 0;
        $first_name = $req->first_name;
        $last_name = $req->last_name;
        $company_name = $req->company_name;
        $order_id = substr(md5(uniqid(mt_rand(), true)), 0, 8);
        $email = $req->email;
        $phone = $req->phone;
        $address1 = $req->address1;
        $address2 = $req->address2;
        $postal_code = $req->postcode;
        $state = $req->state_id;
        $town = $req->town;
        $country = $req->country_id;
        $order_note = $req->order_note;
        $total = 0;
        $products = json_decode($req->cart_items);

        foreach ($products as $product) {
            $price = Courses::where('id', $product->id)->first('price')->price;

            $total += $price * $product->qty;
        }

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Stripe\Customer::create(array(
            "email" => $email,
            "name" => $first_name . "" . $last_name,
            "source" => $req->stripeToken
        ));

        // dd($total);
        $ccc =  Stripe\Charge::create([

            "amount" => $total * 100,

            "currency" => "usd",

            "customer" => $customer->id,
        ]);

        $order = new Orders();
        $order->user_id = $user_id;
        $order->order_id = $order_id;
        $order->paymentId = $ccc->id;
        $order->total_amount = $total;
        $order->status = 0;
        $order->first_name = $first_name;
        $order->last_name = $last_name;
        $order->company_name = $company_name;
        $order->country_id = $country;
        $order->address1 = $address1;
        $order->address2 = $address2;
        $order->town = $town;
        $order->state_id = $state;
        $order->postcode = $postal_code;
        $order->phone = $phone;
        $order->email = $email;
        $order->order_note = $order_note;
        $order->save();

        foreach ($products as $product) {
            $order_item = new OrderItems();
            $price = Courses::where('id', $product->id)->first('price')->price;
            $order_item->price = $price;
            $order_item->order_id = $order->id;
            $order_item->qty = $product->qty;
            $order_item->product_id = $product->id;
            $order_item->save();
        }

        return redirect()->route('web.thank-you.page');
    }
}
