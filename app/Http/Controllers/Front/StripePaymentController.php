<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripePost(Request $request)

  {


    Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

//   return $request->all();

     $customer = Stripe\Customer::create(array(

            "address" => [

                    "line1" => "Virani Chowk",

                    "postal_code" => "360001",

                    "city" => "Rajkot",

                    "state" => "GJ",

                    "country" => "IN",

                ],

            "email" => auth()->user()->email,

            "name" => auth()->user()->first_name,

            "source" => $request->stripeToken

         ));



      Stripe\Charge::create ([

            "amount" => $request->amount * 100,

            "currency" => "usd",

            "customer" => $customer->id,

            "description" => "Test payment from itsolutionstuff.com.",

            "shipping" => [

              "name" => 'asas',

              "address" => [

                "line1" => "510 Townsend St",

                "postal_code" => "98140",

                "city" => "San Francisco",

                "state" => "CA",

                "country" => "US",

              ],

            ]

    ]);

    $cartItems = \Cart::getContent();

    foreach($cartItems as $item)
    {

        Order::Create([
            'user_id' =>auth()->user()->id,
             'product_id' => $item->id,
             'total' => $request->amount,
             'quantity' => $item->quantity,
        ]);
    }







    \Cart::clear();
    Session::flash('success', 'Payment successful!');



    return redirect()->route('home');
}

}
