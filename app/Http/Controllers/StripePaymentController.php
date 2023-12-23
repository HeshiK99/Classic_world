<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;
use App\Models\CartItems;
use App\Models\Orders;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51OQViCH04THagBizSqTbAb0vPK4c8EoomQPRwq7MyCIbduXnqpnkdO2RMz85pEbM7AcilMBcp7QXrT1aRaokY85m00lbNJQ5c1');
    
        Stripe\Charge::create ([
                "amount" => $request->order_amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from ClassicWorld" 
        ]);
      
        Session::flash('success', 'Payment successful!');

        $done_checkout = CartItems::where('users_id', auth()->user()->id)->delete();

        Orders::where('id', $request->order_id)->update([
            'paid' => 1
        ]);
              
        return view('Frontend.home');
    }
}