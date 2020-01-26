<?php
use Stripe\Stripe;
use Stripe\Charge;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request){
        Stripe::setApiKey('sk_test_gESh0ueqqjnubg5vwrsV4lJ100aF2kxJdW');//シークレットキー
    
          $charge = Charge::create(array(
               'amount' => 100,
               'currency' => 'jpy',
               'source'=> request()->stripeToken,
           ));
         return view('/');
        }
}
