<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\User;

use Session;

use Stripe;
use Auth;

class StripeController extends Controller
{
    public function paymentCancel()
    {
        return view('stripe.stripe');
    }

    function checkout(){
        return view('stripe.checkout');
    }

    function paymentSession(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            header('Content-Type: application/json');

            $base_url = env('APP_URL');
            $checkout_session = \Stripe\Checkout\Session::create([

            'payment_method_types' => ['card', 'ideal'],
            'line_items' => [[
                'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                    'name' => 'PGBToppers Care provider activation',
                ],
                'unit_amount' => 4500,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $base_url.'admin/payment/success/{CHECKOUT_SESSION_ID}',
            'cancel_url' => $base_url.'admin/payment/fail',
        ]);

        
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);

        return redirect($checkout_session->url);
        exit;
    }

    public function paymentSuccess(Request $request){
        $session_id = $request->session_id;
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $status = $stripe->checkout->sessions->retrieve(
                $session_id,
                []
            );
            $payment = Payment::where('payment_id',$session_id)->first();
            if(!$payment){
                $payment = new Payment;
                $payment->user_id = Auth::user()->id;
                $payment->payment_id = $status->id;
                $payment->amount = $status->amount_total;
                $payment->created = $status->created;
                $payment->payment_intent = $status->payment_intent;
                $payment->currency = $status->currency;
                $payment->mode = $status->mode;
                $payment->email = $status->customer_details->email;
                $payment->name = $status->customer_details->name;
                $payment->phone = $status->customer_details->phone;
                $payment->save();
            }

            // $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            // $dd = $stripe->checkout->sessions->all(['limit' => 3]);
            
            // echo "<pre>";
            //     print_r($dd);
            // echo "</pre>";

            Session::flash('message', 'Payment successful!');
            return redirect('admin/payment-history');
        exit;
    }

    public function paymentHistory(){
        $histories = Payment::orderBy('id','desc')->paginate(20);
        if(Auth::user()->role !== 1){
            $histories = Payment::orderBy('id','desc')->where('user_id',Auth::user()->id)->paginate(20);
        }
        return view('stripe.payment-history',['title' => 'Payment History', 'histories' => $histories]);
    }
}
